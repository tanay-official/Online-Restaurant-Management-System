<?php
session_start();
require_once("dbconnect.php");

if (isset($_POST["username"]) && isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    } 
}
$uname=validate($_POST["username"]);
$pass=validate($_POST["password"]);
if (empty($uname)){
    header("Location :index.php?error=user name is required");
    exit();
}
if(empty($pass)){
    header("Location: index.php?error=Password is required");
    exit();
}
$sql="select * from user where user_name='$uname' and password='$pass'";

$result=mysqli_query($conn,$sql);
 
if (mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
    if($row["user_name"]==$uname && $row["password"]==$pass  ){
        echo "logged in!";
        $_SESSION["user_name"]=$row["user_name"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["id"]=$row["id"];
        header("location: home.php");
        exit();
    }
    // else{
    //     header("location: index.php?error=Incorrect user name or password");
    //     exit();
     }
else{
    header("location: index.php");
    exit();
}
?>