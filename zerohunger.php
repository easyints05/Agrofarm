<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero Hunger - Agri Products E-commerce</title>
    <link rel="stylesheet" href="zerohunger.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>AGROFARM</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="home/register.php">Register</a></li>
                    <li><a href="zerohunger.php">Zero Hunger</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="zero-hunger">
        <h2>Zero Hunger Initiative</h2>
        <img src="images/Zero Hunger.jpg" alt="Zero Hunger Image" class="zero-hunger-image">
        <p>Our Zero Hunger initiative aims to address food insecurity and hunger by collaborating with farmers to provide accessible, nutritious food options for all. We believe that no one should go hungry, and through sustainable farming and distribution, we’re making strides toward a hunger-free world.</p>
        
        <p>Join us in our journey towards zero hunger by supporting local farmers and choosing sustainably sourced products. Together, we can make a positive impact.</p>
   <!-- Donate Button -->
   <a href="donate.php" class="donate-button">Donate Now</a>
    </section>

    <footer>
        <p>&copy; 2024 Agri Products E-commerce. All rights reserved.</p>
    </footer>
</body>
</html>
