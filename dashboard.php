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
        <title>Blood Bank | Dashboard</title>
    </head>
    <link rel="stylesheet" href="css/dashboard.css">
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
                <div class="dashboard">
                    <div class="dash-title">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="cards">
                        <div class="one">
                            <h1>A+</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='A+'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                        <div class="two">
                            <h1>A-</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='A-'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                        <div class="three">
                            <h1>B+</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='B+'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                        <div class="four">
                            <h1>B-</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='B-'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                        <div class="five">
                            <h1>O+</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='O+'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                        <div class="six">
                            <h1>O-</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='O-'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                        <div class="seven">
                            <h1>AB+</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='AB+'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                        <div class="eight">
                            <h1>AB-</h1>
                            <br>
                            <p>
                                <?php
                                    $con = mysqli_connect('localhost','root','');
                                    if(!$con){
                                        echo "Cannot connect to the server. Please try again later.";
                                    }
                                    if(!mysqli_select_db($con, 'db_blood_bank')){
                                        echo "Failed to connect to the database.";
                                    }
                                    $select_A_pos_qry = "SELECT * FROM blood_bag WHERE bldGroup='AB-'";
                                    $result = $con->query($select_A_pos_qry);
                                    if($result){
                                        $countAPos = mysqli_num_rows($result);
                                        echo $countAPos;
                                    }
                                    mysqli_close($con);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="create-forms">
                    <div class="create-forms-title">
                        <h2>Create</h2>
                    </div>
                    <div class="forms">
                        <ul>
                            <li><a href="form_blood_bag.php">+ New Blood Bag</a></li>
                            <li><a href="form_donation.php">+ New Donation</a></li>
                            <li><a href="form_donor.php">+ New Donor</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer">
                <h3>&copy; Copyright 2020: Nowroz Islam.</h3>
            </div>
        </div>
    </body>
</html>