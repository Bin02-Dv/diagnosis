<?php
/**
 * Created by PhpStorm.
 * User: freshsalis
 * Date: 9/16/2017
 * Time: 2:14 PM
 */
class DB{


        public $con;
       public  function getConnection()
        {
            $host = 'localhost';
            $dbname = 'diagnosis';
            $username = 'root';
            $password = '';
         
            try {
                $this->con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully";
                return $this->con;
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }

        public static function cleanData($str) {
            $str = @trim($str);
            if (get_magic_quotes_gpc()) {
                $str = stripslashes($str);
            }
            return $str; //mysql_real_escape_string($str);
        }



    }


