<?php
/** Router class 
* @author Ruan viviers <
*/

namespace App\Core;
class Router{
    /**
     * @var array
     * @access protected
     * 
     */
    protected array $routes = [];

    /**
     * @var Request
     * @access public
     * 
     */
    public Request $request;


    /**
     * get routes
     * get path and return a callback
     * @param string $path 
     * @param callable $callback
     */


    public function __construct(Request $request) {
        $this->request = $request;
    }
    public function get( $path , $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();  
        $method = $this->request->getMethod(); 
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
            return "not Found";
        }
        if (is_string($callback)){
            return $this->renderView($callback);
            
        }
            
        return call_user_func($callback);
    }
   
    public function renderView($view)
    {
        
        include_once __DIR__ . "/../Views/$view.php";
        
    }
   

}

?>