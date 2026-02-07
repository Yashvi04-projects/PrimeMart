<?php
    include 'connect.php';
    session_start();  
    $db = mysqli_select_db($conn,'prime_mart');
    $p_email=$_POST['h_email'];
    $p_pass=$_POST['h_pass'];
    $sql="select * from register";
    $result=mysqli_query($conn, $sql);
    $i=0;
    if($result -> num_rows > 0){
        while($row=$result->fetch_assoc()){
            if($p_email==$row['Email'] && $p_pass==$row['Password']){
                $i=1;
                $_SESSION['s_fname']=$row['FirstName'];
                $_SESSION['s_lname']=$row['LastName'];
                header("location:home.php?fn=".$_SESSION['s_fname']."&ln=".$_SESSION['s_lname']);
            }
        }
    }
    if($i==0) {
        header("location:invalidPopup.html");
    }
?>