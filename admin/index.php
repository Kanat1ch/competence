<!DOCTYPE html>
<html lang="en" >
<?php
include("../core/database.php");
session_start();
unset($_SESSION['title']);
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($_POST["submit"])) 
     {
	$loginquery ="SELECT * FROM admin WHERE username='$username' && password='".md5($password)."'";
	$result=mysqli_query($link, $loginquery);
	$row=mysqli_fetch_array($result);
	
	if(is_array($row))
		{
				$_SESSION["adm_id"] = $row['adm_id'];
					header("refresh:1;url=dashboard.php");
		} 
	else
		{
				$message = "Неверное имя пользователя или пароль";
		}
	 }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/css/index.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
		<h1>Панель администратора</h1>
        <form action="index.php" method="POST">
            <input type="text" name="username" placeholder="Пользователь">
			<input type="password" name="password" placeholder="Пароль">
			<input type="submit" name="submit" value="Войти">
			<p style="color:red;"><?php echo $message; ?></p>
			<p style="color:green;"><?php echo $success; ?></p>
        </form>
        
    </div>
</body>
</html>