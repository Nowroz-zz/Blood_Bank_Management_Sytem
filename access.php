<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$con = mysqli_connect('localhost','root','');

if(!$con){
    echo "Cannot connect to the server. Please try again later.";
}

if(!mysqli_select_db($con, 'db_blood_bank')){
    echo "Failed to connect to the database.";
}

$fetch_user_qry = "SELECT username, password FROM user";

$result = $con->query($fetch_user_qry);

$row = $result->fetch_assoc();

$uname = $row['username'];
$upass = $row['password'];

session_start();

if(isset($_SESSION['uname'])){
    echo "<script>location.href='dashboard.php'</script>";
}
else{
    if($_POST['uname'] == $uname && $_POST['upass'] == $upass){
        $_SESSION['uname'] = $uname;
        
        echo "<script>location.href='dashboard.php'</script>";
        
    }
    else{
        echo "<script>alert('username or password incorrect!')</script>";
        
        echo "<script>location.href='login.php'</script>";
    }
}


