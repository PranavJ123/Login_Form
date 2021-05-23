<?php
class DbConnect{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "oops";
    function connection(){
        
        $conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database);
        if(!$conn){
            die('Cannot connect to the databse due to'.mysqli_connect_error());
        }
        else{
            return $conn;
            // echo "Successfully connected";
        
         }
        }
}

// $db = new DbConnect();
//  $db->connection();


    // class DbConnect {  
    //     function __construct() {  
    //         require_once('config.php');  
    //         $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);  
    //         mysql_select_db(DB_DATABSE, $conn);  
    //         if(!$conn)// testing the connection  
    //         {  
    //             die ("Cannot connect to the database");  
    //         }   
    //         return $conn;  
    //     }  
    //     public function Close(){  
    //         mysql_close();  
    //     }  
    // }  

?>