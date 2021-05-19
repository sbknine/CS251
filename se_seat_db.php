<?php

session_start();
include('server.php');

$errors = array();

if (isset($_POST['buy_seat'])) {
    $seat = mysqli_real_escape_string($conn, $_POST['se_ID']);
    $user = mysqli_real_escape_string($conn,$_SESSION['c_email']);
}
if (count($errors) == 0) {
    $query = "UPDATE seat SET se_status = '0' WHERE se_ID = '$seat' ";
    $result = mysqli_query($conn, $query);
    $query = "UPDATE customer SET se_ID = '$seat'  WHERE c_email = '$user' ";
    $result = mysqli_query($conn, $query);

    header('location: showinfo.php');
}
?>