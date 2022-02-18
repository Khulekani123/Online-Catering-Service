<?php
    include ("conn.php");
       
    $user_Fname     = $_POST['user_Fname'];
    $user_Lname     = $_POST['user_Lname'];
    $user_email     = $_POST['user_Email'];
    $user_contact   = $_POST['user_Contact'];
    $user_province  = $_POST['user_Province'];
    $town           = $_POST['town'];
    $user_password  = $_POST['user_password'];

    $sql = "INSERT INTO `catering_db`.`user` (`user_ID`, `user_Fname`, `user_Lname`, `user_Email`, `user_Contact`, `user_Province`, `town`, `user_password`)
    VALUES (NULL, '$user_Fname', '$user_Lname', '$user_email', '$user_contact', '$user_province', '$town', '$user_password')";

    if(isset($_POST['create']))
    {
        $result = mysqli_query($dbConn, $sql);
        echo "You are succesfully registered, LOG IN to book";
        mysqli_close($dbConn);
    } else {
        echo "Registration wasn't succesful! Please try again";
    }
?>

