<?php
/** Response class 
* @author Ruan viviers <
*/
namespace App\Core;

class Response {
    public function setStatusCode(int $code){
        http_response_code($code);
    }    
}

