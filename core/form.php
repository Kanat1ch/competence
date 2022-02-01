<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include('database.php');
if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // echo $_POST['g-recaptcha-response'];
    $captcha = $_POST['g-recaptcha-response'];
    if ($captcha) {
        $a = $_SESSION['title'];
        if (!$a) {
        $sql = "INSERT INTO request(name, mail, phone, message) VALUE('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";
        mysqli_query($link, $sql);
        }else{
        $sql = "INSERT INTO request(name, mail, phone, message, s_name) VALUE('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."','".$a."')";
        mysqli_query($link, $sql);
        }
        unset($_SESSION['title']);
        session_destroy();
        $loc = $_SERVER['HTTP_REFERER'];
        header("location:$loc");
    }else{
        // echo $_SESSION['error'];
    }
}
