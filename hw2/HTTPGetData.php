<?php
require_once("HTTPData.php");
//Subclass HTTPGetData goes here
class HTTPGetData extends HTTPData { //Implementing of getKey from HTTPData abstract class
                                    //Returns "name" key from $_GET
    public function getKey($key)
    {
        return $_GET["name"];
    }
}