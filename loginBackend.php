<?php
include("booking.php");
include("conn.php");

if(!$dbConn)
{
    echo "Connection failed!!";
}

session_start();

include "conn.php";

if (isset($_POST['user_Email']) && isset($_POST['user_password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $user_Email = validate($_POST['user_Email']);
    $user_password = validate($_POST['user_password']);

    if(empty($user_Email))
    {
        header("Location: login.php?error = User Email is required");
        exit();
    } else if (empty($user_password)){
        header("Location: login.php?error = User password is required");
        exit();
    } else {
        $sql = "SELECT * FROM 'user' WHERE 'user_Email' = '$user_Email' AND 'user_password' = '$user_password' ";

        $result = mysqli_query($dbConn, $sql);

        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);

            if($row['user_Email'] === $user_Email && $row['user_password'] === $user_password){

                echo "Logged In!";

                $_SESSION['user_ID']    = $row['user_ID'];
                $_SESSION['user_Fname'] = $row['user_Fname'];
                $_SESSION['user_Lname'] = $rown['user_Lname'];

                echo "logged in!";
                header("Location: booking.php");

                exit();
            } else {
                header("Location: login.php?error = Incorrect user email nor password");
                echo "try again";

                exit();
            }

        } else {
            header("Location: booking.php");

            exit();
        }
    }
} else {
    header("Location: login.php");
}

?>