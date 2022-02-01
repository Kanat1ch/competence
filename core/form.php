<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include('database.php');
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO request(name, mail, phone, message) VALUE('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";
    mysqli_query($link, $sql);
    $loc = $_SERVER['HTTP_REFERER'];
    header("location:$loc");
}
