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
    public function get(string $path = null, callable $callback = null){
        $this->routes['Get'][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();   
    }
   


}

?>