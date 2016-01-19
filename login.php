<?php
session_start();
include 'db_con.php';

$message=array();
if(isset($_POST['username']) && !empty($_POST['username'])){
    $uname=mysql_real_escape_string($_POST['username']);
    
}else{
    $message[]='Please Enter your Username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=mysql_real_escape_string($_POST['password']);
}else{
    $message[]='Please enter Password';
}

$countError=count($message);

if($countError > 0){
     for($i=0;$i<$countError;$i++){
              echo ucwords($message[$i]).'<br/>';
     }
}else{
    $query="select * from account where username='".$uname."' and password='".$password."'";

    $res=mysql_query($query);
    $checkUser=mysql_num_rows($res);
    if($checkUser > 0){
       
        $_SESSION['LOGIN_STATUS']=true;
        $_SESSION['data']=mysql_fetch_assoc($res);
      header('Location:index.php'); 
  }else{
	  echo "wrong";
    }
}
?>

