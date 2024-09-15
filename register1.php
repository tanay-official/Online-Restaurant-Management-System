<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="register">
        <h1>Register</h1>
        <form action="register1.php" method="post">
            <label for="username"> </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password"></label>
            <input type="password"  name="password" placeholder="Password" id="password" required>
            <label for="email"></label>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <label for="name"></label>
            <input type="text" name="name" placeholder="name" id="name" required>
            <label for="phonenumber"></label>
            <input type="text" name="phonenumber" placeholder="phonenumber" id="phonenumber" required>
            <label for="address"></label>
            <input type="text" name="addresss" placeholder="addresss" id="address" required>
            <input type="submit" value="Register">
            

        </form>
    </div>
    
</body>
</html>
<?php
require_once("dbconnect.php");
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) &&  isset($_POST['name']) &&  isset($_POST['phonenumber']) &&  isset($_POST['addresss'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $n = $_POST['name'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['addresss'];
    $sql = "INSERT INTO user VALUES('$email', '$uname', '$n', '$phone', '$address', 'user', '$pass');";
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){
        header("Location: home.php");
    }
    else{
        echo '0';
        header("Location: #");
    }
}
?>