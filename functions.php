<?php
require_once '_dbconnect.php';
session_start();
class DbFunction extends DbConnect{
    public $connect;

    function __construct(){
        $this->connect = $this->connection();
    }

    public function SignUp($username , $email , $password){
    $password = md5($password);
    $sql = "INSERT INTO `users` (`username`, `user_email`, `password`) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($this->connect,$sql);
    return $result;
}
public function Login($email ,$password){
    
    $password1 = md5($password);
    $sql = "SELECT * FROM `users` WHERE user_email = '$email' AND password = '$password1'";
    $result2 = mysqli_query($this->connect,$sql);
    $row = mysqli_fetch_assoc($result2);
    $numRows = mysqli_num_rows($result2);
    if($numRows == 1){
        $_SESSION['login'] =true;
        $_SESSION['uid'] = $row['sno'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['user_email'];
        return TRUE;
    } 
    else{
        return FALSE;
    }
}
 public function isUserExist($email){
     $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
     $result3 = mysqli_query($this->connect,$sql);
     $row = mysqli_num_rows($result3);
     if($row>0){
         return true;
     }
     else{
         return false;
     }
 }
}
?>