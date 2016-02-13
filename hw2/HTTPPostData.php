<?php
require_once("HTTPData.php");
//Subclass HTTPPostData goes here
class HTTPPostData extends HTTPData {
    
    public function getKey($key) //Implementing of getKey from HTTPData abstract class
    {                           //Returns "name" key from $_POST
        return $_POST["name"];
    }
}