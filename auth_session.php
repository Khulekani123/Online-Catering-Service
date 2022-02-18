<?php
session_start();
if(!isset($_SESSION["user_Email"]))
{
    header("Location: login.php");
    exit();
}
?>