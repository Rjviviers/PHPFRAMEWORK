<?php
/**
 * Class Application
 * @package Core
 * @author Ruan viviers
 *
 */

namespace App\Core;

class Application
{

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public Session $session;
    public static Controller $controller;
    public static Application $app;

    public function __construct($rootPath, array $config)
    {
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->session = new Session();
        $this->db = new Database($config['db']);
    }

    /**
     * @return Controller
     */
    public static function getController(): Controller
    {
        return self::$controller;
    }

    /**
     * @param Controller $controller
     */
    public static function setController(Controller $controller): void
    {
        self::$controller = $controller;
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function dump($var, bool $die = false)
    {
        echo "<pre>";

        var_dump($var);
        echo "</pre>";
        if ($die) {
            die();
        }
    }

}

