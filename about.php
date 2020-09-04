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
        <title>Blood Bank | About</title>
    </head>
    <link rel="stylesheet" href="css/about.css">
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
                <div class="about-container">
                    <div class="about-title">
                        <h2>About Us</h2>
                    </div>
                    <div class="about">
                        <p>
                            This is a dummy about section. This project is owned
                            by Nowroz Islam. The project is built for the course,
                            Web Engineering Lab, CSE 418. The project is about a
                            blood bank management system named Blood Bank. The
                            project will help a blood bank to maintain their daily
                            records. For more information, send mail to nowroz@
                            15-8484@diu.edu.bd.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="footer">
                <h3>&copy; Copyright 2020: Nowroz Islam.</h3>
            </div>
        </div>
    </body>
</html>