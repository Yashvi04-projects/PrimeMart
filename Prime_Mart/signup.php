<?php
    include 'connect.php';
    $fname = $_POST['h_fname'];
    $lname = $_POST['h_lname'];
    $email = $_POST['h_email'];
    $pass = $_POST['h_pass'];
    $mob = $_POST['h_mob'];

    $db = mysqli_select_db($conn,'prime_mart');
    $sql = "Insert into register(FirstName, LastName, Email, Password, MobileNo) values('$fname', '$lname', '$email', '$pass', '$mob');";
    
    $query = mysqli_query($conn, $sql);
    if(!$query){
        die("Couldn't insert: ".mysqli_error($conn));
    }
    else {
        echo "Record inserted successfully!!";
        session_start(); 
        $_SESSION['s_fname']=$fname;
        $_SESSION['s_lname']=$lname;
        header("location:home.php?fn=".$_SESSION['s_fname']."&ln=".$_SESSION['s_lname']);
    }

?>