<!DOCTYPE html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

if(isset($_SESSION['uname'])){   
    
}
else{
    echo "<script>location.href='login.php'</script>";
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Blood Bank | Contact</title>
    </head>
    <link rel="stylesheet" href="css/contact.css">
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <a href="dashboard.php">
                        <img src="img/logo.png" style="width: 80px; height: 80px;">
                    </a>
                </div>
                <div class="banner">
                    <div class="user">
                        <h2>User: <?php echo $_SESSION['uname'];?></h2>
                    </div>
                    <div class="logout">    
                        <a href="logout.php" class="logout-a">
                            <img src="img/logout.png" alt="logout" style="width: 50px; height: 50px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="sidebar">
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="donors.php">Donors</a></li>
                        <li><a href="blood_bags.php">Blood Bags</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="contact-container">
                    <div class="contact-title">
                        <h2>Contact</h2>
                    </div>
                    <div class="contact">
                        <img src="img/developer.jpg">
                        <h1>Nowroz Islam</h1>
                        <h4>nowroz15-8484@diu.edu.bd</h4>
                        <a href="https://github.com/Nowroz">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="footer">
                <h3>&copy; Copyright 2020: Nowroz Islam.</h3>
            </div>
        </div>
    </body>
</html>