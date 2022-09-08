<?php
/** Router class 
* @author Ruan viviers <
*/

class Router{
    /**
     * @var array
     * @access protected
     * 
     */
    protected array $routes = [];
    /**
     * get routes
     *
     * get path and return a callback
     *
     * @param string $path 
     * @param callable $callback

     **/
    public function get(string $path = null, callable $callback = null){
        $this->routes['Get'][$path] = $callback;
    }
    }

    public function __construct(){
        
    }


}

?>