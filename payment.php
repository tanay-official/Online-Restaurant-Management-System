<nav>
        <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="frontend.php">Food</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
    </nav>
<?php
session_start();
echo $_SESSION["dish"];
?>

<form action="payment.php" method="post">
    <input type="submit" value='checkout' name='checkout'>
    
</form>
<?php
require_once('dbconnect.php');
if (isset($_POST['checkout'])){
    $d=$_SESSION["dish"];
    $u= $_SESSION["user_name"];
    $date=date("Y-m-d");
    $sql="INSERT INTO purchase_history(username, date, dish) VALUES('$u','$date','$d');";
    mysqli_query($conn, $sql);
    echo "Purchase Complete!!<br>";
    echo "<a href='frontend.php'>Back to Menu</a>";
}

?>
