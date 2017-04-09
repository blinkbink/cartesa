<?php
require('connection/db.php');

if($_POST['register'])
{
    $register = "INSERT INTO guess  (Email, Nama, Tanggal_lahir, hp, username, jenis_kelamin) VALUE('".$_POST['Email']."', '".$_POST['Nama']."', '".$_POST['Tanggal']."', '".$_POST['Hp']."', '".$_POST['Username']."', '".$_POST['Jenis']."')";
    $register2 = "INSERT INTO user (username, password) VALUE('".$_POST['Username']."', '".$_POST['Password']."')";

    mysqli_query($conn, $register);
    mysqli_query($conn, $register2);

    if(!mysqli_query($conn, $register) && !mysqli_query($conn, $register2))
    {
        echo "<script type='text/javascript'>alert('Gagal');</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Berhasil');</script>";
        header("location:login.php");
    }



}

?>