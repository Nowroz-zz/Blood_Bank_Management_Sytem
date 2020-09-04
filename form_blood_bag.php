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
        <title>Blood Bank | New Blood Bag</title>
    </head>
    <link rel="stylesheet" href="css/form.css">
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
                <div class="form-container">
                    <div class="form-title">
                        <h2>New Blood Bag</h2>
                    </div>
                    <div class="form-body">
                        <form action="add_bag.php" method="post">
                            <table border="0" cellspacing="15">
                                <tr>
                                    <td class="labels">Blood Group: </td>
                                    <td></td>
                                    <td>
                                        <select name="bldGroup">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="labels">Donation Date:</td>
                                    <td></td>
                                    <td><input id="donDate" type="date" name="donDate" readonly></td>
                                </tr>
                                <tr>
                                    <td class="labels">Expiration Date:</td>
                                    <td></td>
                                    <td><input type="date" id="expDate" name="expDate" readonly></td>
                                </tr>
                                <tr>
                                    <td class="labels"></td>
                                    <td></td>
                                    <td>
                                        <table cellspacing="5">
                                            <tr>
                                                <td><input class="cancelBtn" type="submit" name="cancelBtn" value="Cancel"></td>
                                                <td><input class="saveBtn" type="submit" name="saveBtn" value="Save"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer">
                <h3>&copy; Copyright 2020: Nowroz Islam.</h3>
            </div>
        </div>
        <script src="js/date.js" type="text/javascript"></script>
    </body>
</html>