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
        <title>Blood Bank | Donors</title>
    </head>
    <link rel="stylesheet" href="css/list.css">
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
                <div class="list-container">
                    <div class="list-title">
                        <h2>Donors</h2>
                    </div>
                    <div class="list">
                        <table border="0" cellspacing="10">
                            <tr>
                                <th>Donor ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Blood Group</th>
                                <th>Last Donation Date (YYYY-MM-DD)</th>
                                <th>Number of Donations</th>
                                <th>Contact</th>
                            </tr>
                            <?php
                                $con = mysqli_connect('localhost','root','');
                                if(!$con){
                                    echo 'Cannot connect to the server. Please try again.';
                                }
                                if(!mysqli_select_db($con, 'db_blood_bank')){
                                    echo 'Failed to connect the database.';
                                }
                                
                                $query = "SELECT * FROM donor";

                                if ($result = $con->query($query)) {

                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row["donID"]."</td>";
                                        echo "<td>".$row["name"]."</td>";
                                        echo "<td>".$row["age"]."</td>";
                                        echo "<td>".$row["bldGroup"]."</td>";
                                        echo "<td>".$row["lastDonDate"]."</td>";
                                        echo "<td>".$row["numDonations"]."</td>";
                                        echo "<td>".$row["contact"]."</td>";
                                        echo "</tr>";
                                    }
                                    
                                    $result->free();
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="footer">
                <h3>&copy; Copyright 2020: Nowroz Islam.</h3>
            </div>
        </div>
    </body>
</html>