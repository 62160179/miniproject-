<?php 
    class DB{
        
        public static function getConnect(){
            
            // $database = "exe";
            $database = "exe";
            $conn = new mysqli("localhost","root","123456oil",$database);
            if($conn->connect_errno){
                 echo "error connect DB".$conn->error;
            }
            $conn->charset = "utf8mb4";
            return $conn;
        }
    }
?>
