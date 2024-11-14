<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - AGROFARM</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>AGROFARM</h1>
            <nav>
                <ul>
                    <li><a href="#">Farmers Portal</a></li>
                    <li><a href="#">Buyer Portal</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="products.php">Products</a></li> <!-- Products button -->
                </ul>
            </nav>
        </div>
    </header>

    <!-- Products Page Content -->
    <section class="products-section">
        <div class="products-container">
            <!-- Sidebar with Product Categories -->
            <div class="sidebar">
                <ul>
                    <li><a href="#">Seeds and Saplings</a></li>
                    <li><a href="#">Fertilizers and Pesticides</a></li>
                    <li><a href="#">Farm Equipments</a></li>
                    <li><a href="#">Irrigation Supplies</a></li>
                    <li><a href="#">Animal Feed and Supplies</a></li>
                </ul>
            </div>

            <!-- Products Display Section -->
            <div class="products-display">
                <div class="product-row">
                    <div class="product-item">
                        <img src="images/curd.jpg" alt="Fresh Hung Curd">
                        <p>Fresh Hung curd</p>
                    </div>
                    <div class="product-item">
                        <img src="images/milk.jpg" alt="Milk">
                        <p>Cow Milk</p>
                    </div>
                    <div class="product-item">
                        <img src="images/ghee.jpg" alt="Fresh Ghee">
                        <p>Fresh Ghee</p>
                    </div>
                </div>
                <div class="product-row">
                    <div class="product-item">
                        <img src="images/Mozzarella.jpg" alt="Mozzarella">
                        <p>Mozzarella</p>
                    </div>
                    <div class="product-item">
                        <img src="images/brocolli.jpg" alt="Brocolli">
                        <p>Brocolli</p>
                    </div>
                    <div class="product-item">
                        <img src="images/capsicums.jpg" alt="Capsicums">
                        <p>Capsicums</p>
                    </div>
</div>
                    <div class="product-row">
                    <div class="product-item">
                        <img src="images/carrots.jpg" alt="Carrots">
                        <p>Carrots</p>
                    </div>
                    <div class="product-item">
                        <img src="images/coriander.jpg" alt="Coriander">
                        <p>Coriander</p>
                    </div>
                    <div class="product-item">
                        <img src="images/Lemon curd maken.jpg" alt="Lemon curd">
                        <p>Lemon curd</p>

                    </div>
</div>
<div class="product-row">
                    <div class="product-item">
                        <img src="images/onions.jpg" alt="Onions">
                        <p>Onions</p>
                    </div>
                    <div class="product-item">
                        <img src="images/potato.jpg" alt="Potatoes">
                        <p>Potatoes</p>
                    </div>
                    <div class="product-item">
                        <img src="images/tomatoes.jpg" alt="Tomatoes">
                        <p>Tomatoes</p>
                    </div>
</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Agri Products E-commerce. All rights reserved.</p>
    </footer>
</body>
</html>
