<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
    <title>Food Feast</title>
</head>
<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Resturent logo" class="img-responsive">
            </div>
            <div class="menu text-right">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
              
            </div>
            <div class="clear-fix"></div>
        </div>
    </section>
    <section class="food-search text-center">
        <div class="container">
            <form action="">
                <input type="search" placeholder="Search for Food">
                <input type="submit" placeholder="Search" class="btn btn-primary">
            </form>
            
            
        </div>    
    </section>
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Today's Special</h2>
           <a href="#">
           <div class="box-3 float-container">
                <img src="pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            <div class="clear-fix"></div>
            </a>

        </div>
    </section>
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center" style="color: white;">Explore Food</h2>
            <form action="process.php" method="post">
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="menu-pizza.jpg" alt="Chicker Hawaian Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicker Hawaian Pizza</h4>
                    <p class="food-price">৳ 800</p>
                    <p class="food-detail">
                        Made with Italian Sause, Chicken and organic vegetables
                    </p>
                    <br>
                    <!-- <form action="process.php"> -->
                        <input type="submit" value="Order Now" name="pizza">
                    <!-- </form> -->
                    <!-- <a href="#" class="btn btn-primary">Order Now</a> here -->
                </div>
                <div class="clear-fix"></div>
            </div>
            
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="menu-burger.jpg" alt="King Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>King Burger</h4>
                    <p class="food-price">৳ 300</p>
                    <p class="food-detail">
                        Made with BBQ Sause, Chicken,Double Beef Patty and organic vegetables.
                    </p>
                    <br>
                    <!-- <form action="process.php"> -->
                        <input type="submit" value="Order Now" name="king_burger">
                    <!-- </form> -->
                    <!-- <a href="#" class="btn btn-primary">Order Now</a>here -->
                </div>
                <div class="clear-fix"></div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="menu-momo.jpg" alt="Pot Momos" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Pot Momos</h4>
                    <p class="food-price">৳ 200</p>
                    <p class="food-detail">
                        Made with Chicken and organic vegetables.
                    </p>
                    <br>
                    <!-- <form action="process.php"> -->
                        <input type="submit" value="Order Now" name="Momos">
                    <!-- </form> -->
                    <!-- <a href="#" class="btn btn-primary">Order Now</a> here -->
                </div>
                <div class="clear-fix"></div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="ima.jpg" alt="Chicken Biriyani" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Special Chicken Biryani</h4>
                    <p class="food-price">৳ 300</p>
                    <p class="food-detail">
                        Made with Italian Sause, Chicken and organic vegetables.
                    </p>
                    <br>
                    <!-- <form action="process.php"> -->
                        <input type="submit" value="Order Now" name="chicken_biriyani">
                    <!-- </form> -->
                    <!-- <a href="#" class="btn btn-primary">Order Now</a> here -->
                </div>
                <div class="clear-fix"></div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="Steak Racioli Spaghetti.webp" alt="Steak ravioli Speghetti" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Steak ravioli Speghetti</h4>
                    <p class="food-price">৳ 400</p>
                    <p class="food-detail">
                        Made with Steak, Speghetti  and organic vegetables.
                    </p>
                    <br>
                    <!-- <form action="process.php"> -->
                        <input type="submit" value="Order Now" name="speghetti">
                    <!-- </form> -->
                    <!-- <a href="#" class="btn btn-primary">Order Now</a> here -->
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="mutton-biryani.webp" alt="Iranian Mutton Biryani" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Iranian Mutton Biryani</h4>
                    <p class="food-price">৳ 500</p>
                    <p class="food-detail">
                        Made with Mutton, Spices and organic vegetables.
                    </p>
                    <br>
                    <!-- <form action="process.php"> -->
                        <input type="submit" value="Order Now" name="mutton_biriyani">
                    <!-- </form> -->
                    <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                </div>
                </form>
                <div class="clear-fix"></div>
            </div>

            <div class="clear-fix"></div>
        </div>
    </section>
    <section class="social">
        <div class="container text-center">
            <ul>
                <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true" style="font-size: 48px; color: #3477eb;"></i><li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 48px; color: #f51196;"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 48px; color: #4b84e7;"></i></a></li>
            </ul>
        </div>
    </section>
    <section class="footer">
        <div class="container text-center">
            <p>All rights deserved by samrul islam</p>
        </div> 
    </section>
</body>
</html>