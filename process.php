<?php
session_start();

if(isset($_POST['pizza'])){
    $_SESSION['dish'] = 'pizza';

    echo "pizza";
}
if(isset($_POST['king_burger'])){
    $_SESSION['dish'] = 'burger';
    echo "King_burger";
}
if(isset($_POST['Momos'])){
    $_SESSION['dish'] = 'momo';
    echo "Momos";
}
if(isset($_POST['chicken_Biriyani'])){
    $_SESSION['dish'] = 'chicken_biriyani';
    echo "chicken_Biriyani";

}
if(isset($_POST['speghetti'])){
    $_SESSION['dish'] = 'speghetti';
    echo "speghetti";
}
if(isset($_POST['mutton_biriyani'])){
    $_SESSION['dish'] = 'mutton_biriyani';
    echo "mutton_biriyani";
}

require_once("dbconnect.php");
$d = $_SESSION['dish'];
$food = "SELECT * FROM food WHERE dish = '$d';";
$result = mysqli_query($conn, $food);
$row = mysqli_fetch_array($result);
echo $row['preparation time']." ".$row['in stock']."".$row['price']."";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <nav>
        <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="frontend.php">Food</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
    <table border="2">
        <tr>
            <th>Food </th>
            <th>In Stock</th>
            <th>Preparation Time</th>
            <th>Price</th>
        </tr>
        <tr>
        <td><div><?php echo $row['dish'];?></div></td>
            <td><div><?php echo $row['in stock'];?></div></td>
            <td><div><?php echo $row['preparation time'];?></div></td>
            <td><div><?php echo $row['price'];?></div></td>
        </tr>
    </table>

    </div>
    <form action="process.php" method="post">
        <input type="submit" value="proceed" name="proceed">
        <input type="submit" value="Go back to menu" name="menu" >



    </form>
</body>
</html>
<?php
if (isset($_POST["proceed"])){
    $_SESSION["dish"]=$row['dish'];
    $_SESSION["preparation"]=$row['preparation time'];
    $_SESSION["instock"]=$row['in stock'];
    $_SESSION["price"]=$row['price'];
    ?>
    
    <script>
        window.location.href="payment.php";
    </script>
    <?php
}
if (isset($_POST["menu"])){
    ?>
    
    <script>
        window.location.href="frontend.php";
    </script>
    <?php
}
?>
