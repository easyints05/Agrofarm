<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri Products E-commerce</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
<!-- homepage html -->
      <header>
    <div class="header-container">
        <h1>AGROFARM</h1>
        <nav>
            <ul>
                <li><a href="#">Farmers Portal</a></li>
                <li><a href="#">Buyer Portal</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="home/register.php">Register</a></li>
                <li><a href="products.php">Products</a></li> <!-- Added Products button -->
                <li><a href="zerohunger.php">Zero Hunger</a></li> <!-- Added Zero Hunger button -->
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h>AGROFARM</h>
        <h2>Fresh, Direct from the Farm</h2>
        <p>Buy fresh fruits, vegetables, grains, and more, sourced directly from farmers.</p>
        <a href="#" class="cta-button">Explore Products</a>
    </div>
</section>

<!-- Product Categories Section -->
<section class="categories">
    <h2>What We're Offering</h2>
    <div class="category-list">
        <div class="category-item">
            <img src="images/veg.jpg" alt="Vegetables">
            <h3>Fresh Vegetables</h3>
        </div>
        <div class="category-item">
            <img src="images/organic.jpg" alt="Organic">
            <h3>Organic Products</h3>
        </div>
        <div class="category-item">
            <img src="images/dairy.jpg" alt="Dairy">
            <h3>Dairy Products</h3>
        </div>
        <div class="category-item">
            <img src="images/agri.jpg" alt="Agriculture">
            <h3>Agriculture Products</h3>
        </div>
    </div>

    <!-- Agriculture and Organic Farm Section -->
<section class="agriculture-section">
    <div class="agriculture-content">
        <img src="images/agritech.jpg" alt="Organic Farm Image" class="agriculture-image">
        <div class="agriculture-text">
            <h2>Agriculture and Organic Product Farm</h2>
            <p>We are dedicated to providing high-quality organic products<br>
             sourced directly from farms using sustainable and eco-friendly <br>
             practices. Our mission is to ensure freshness and<br>
              purity in every product we offer.</p>
            
            <div class="features">
                <div class="feature-item">
                    <div class="feature-icon">🌱</div>
                    <h3>Feature 1</h3>
                    <p>We use new technology</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🚜</div>
                    <h3>Feature 2</h3>
                    <p>Making healthy foods</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🌾</div>
                    <h3>Feature 3</h3>
                    <p>Reforming in the systems</p>
                </div>
            </div>
</section>

<!-- About Us Section -->

<section class="about">
    <div class="about-content">
        <div class="about-text">
            <h2>About Us</h2>
            <p>Our mission is to bridge the gap between farmers and consumers, bringing you fresh products directly from the source. We are dedicated to promoting sustainable farming practices and supporting local farmers. By choosing our products, you contribute to a healthier ecosystem and help empower the agricultural community. Together, let’s make a positive impact on the environment and embrace a lifestyle rooted in nature.</p>
        </div>
        <div class="about-image">
            <img src="images/aboutus.jpg" alt="About Us Image">
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 Agri Products E-commerce. All rights reserved.</p>
</footer>


<a href="logout.php">Logout</a>
    </div>
</body>
</html>