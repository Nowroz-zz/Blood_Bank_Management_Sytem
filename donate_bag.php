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
elseif (isset ($_POST['confirmBtn'])) {
    $con = mysqli_connect('localhost','root','');
    if(!$con){
        echo 'Cannot connect to the server. Please try again.';
    }
    if(!mysqli_select_db($con, 'db_blood_bank')){
        echo 'Failed to connect the database.';
    }
    
    $bagID = $_POST['bagID'];
    $bldGroup = $_POST['bldGroup'];
    
    $select_qry = "SELECT * FROM blood_bag WHERE bagID='$bagID' AND bldGroup='$bldGroup'";
    $delete_qry = "DELETE FROM blood_bag WHERE bagID='$bagID' AND bldGroup='$bldGroup'";
    
    $result = $con->query($select_qry);
    if($result){
        $count = mysqli_num_rows($result);
        if($count == 0){
            mysqli_close($con);
            echo "<script>alert('No bags matched the information!')</script>";
            echo "<script>location.href='form_donation.php'</script>";
        }
        else{
            if(!mysqli_query($con, $delete_qry)){
                mysqli_close($con);
                echo "<script>alert('Failed to delete data from the database!')</script>";
                echo "<script>location.href='form_donation.php'</script>";
            }
            else{
                mysqli_close($con);
                echo "<script>location.href='dashboard.php'</script>";
            }
        }
    }
    
    
}