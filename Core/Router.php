<?php
/** Router class
 * @author Ruan viviers
 */

namespace App\Core;
class Router
{
    /**
     * @var array
     * @access protected
     */
    protected array $routes = [];

    /**
     * @var Request
     * @access public
     *
     */
    public Request $request;
    public Response $response;


    /**
     * get routes
     * get path and return a callback
     * @param Request $request
     * @param Response $response
     */


    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;

    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            Application::$controller = new $callback[0]();
            $callback[0] = Application::$controller;
        }

        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);

        /*Renders view placeholder variables*/
        foreach ($params as $key => $value) {
            if (str_contains($viewContent, "{{" . $key . "}}")) {
                $viewContent = str_replace("{{" . $key . "}}", $value, $viewContent);
            }
        }

        return str_replace('{{content}}', $viewContent, $layoutContent);
    }


    protected function layoutContent()
    {
        $layout = Application::$controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR . "/Views/Layout/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/Views/$view.php";
        return ob_get_clean();
    }


}

