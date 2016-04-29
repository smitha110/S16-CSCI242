<?php

class DatabaseManager {
     static private $_db = NULL;

     private function __construct() {
          $conn = "My Connection";
          //imagine $conn contains a real db connection
          $this->_db = $conn;
      }

      public function getDb()
      {
           if ( self::$_db == null)
           {
                self::$_db = new DatabaseManager();
           }

          return self::$_db;     
           
      }

      public function query($query) {
          //I would normally do something with db
          return self::$_db = $query;
      }

}

$db = new DatabaseManager();
echo $db->getDb();
echo $db->query("Some SQL");

