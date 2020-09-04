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

if(isset($_POST['cancelBtn'])){
    echo "<script>location.href='dashboard.php'</script>";
}
elseif (isset ($_POST['saveBtn'])) {
    $con = mysqli_connect('localhost','root','');
    if(!$con){
        echo 'Cannot connect to the server. Please try again.';
    }
    if(!mysqli_select_db($con, 'db_blood_bank')){
        echo 'Failed to connect the database.';
    }
    
    $bldGroup = $_POST['bldGroup'];
    $donDate = $_POST['donDate'];
    $expDate = $_POST['expDate'];
    
    $insert_qry = "INSERT INTO blood_bag (bldGroup,donDate,expDate) VALUES ('$bldGroup','$donDate','$expDate')";
    
    if(!mysqli_query($con, $insert_qry)){
        mysqli_close($con);
        echo "Data Insertion Failed.";
    }
    else{
        mysqli_close($con);
        echo "<script>location.href='dashboard.php'</script>";
    }
}