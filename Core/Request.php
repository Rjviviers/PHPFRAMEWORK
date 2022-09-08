<?php
/**
 * Class Request
 * @author Ruan viviers 
 * @package Core
 */
namespace App\Core;

class Request{
    public function getPath(Type $var = null)
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position === false){
            return $path;
        }
        return substr($path, 0, $position);
    }
    public function getMethod(Type $var = null)
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
        
    
}

?>