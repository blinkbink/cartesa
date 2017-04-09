<?php
session_start();
require('connection/db.php');

if (isset($_POST['username']) and isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE username='$username' and password='$password'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    if ($count == 1)
    {
        $_SESSION['username'] = $username;
    }
    else
    {
        $fmsg = "Invalid Login Credentials.";
    }
}

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    header("location:index.php");
}
else
{
//3.2 When the user visits the page first time, simple login form will be displayed.
    header("location:fail.php");
}
?>