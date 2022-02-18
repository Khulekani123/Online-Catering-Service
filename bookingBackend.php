<?php
    include ("conn.php");
  
    $num_Guests         = $_POST['num_Guests'];
    $budget             = $_POST['budget'];
    $event_address      = $_POST['event_address'];
    $event_Date         = $_POST['event_Date'];
    $s_event            = $_POST['s_event'];
    $f_event            = $_POST['f_event'];
    $event              = $_POST['event'];
    $description        = $_POST['description'];

    $sql = "INSERT INTO `catering_db`.`booking` ( `num_Guests`, `budget`, `event_address`, `event_Date`, `s_event`, `f_event`, `event`, `description`)
    VALUES ( '$num_Guests', '$budget', '$event_address', '$event_Date', '$s_event', '$f_event','$event', '$description')";

    if(isset($_POST['book']))
    {
        $result = mysqli_query($dbConn, $sql);
        echo "You are succesfully registered, LOG IN to book";
        mysqli_close($dbConn);
    } else {
        echo "Registration wasn't succesful! Please try again";
    }
?>