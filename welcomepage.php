<?php  
require'config/config.php';
require'includes/form_handlers/register_handler.php';
require'includes/form_handlers/login_handler.php';
if(isset($_POST['login_button'])) {

       
		header("Location: index.php");
		exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO NETPOSTER</title>
	<link rel="icon"  href="logo.png">
</head>
<body>
<h1>Welcome <?php $_SESSION['username'] ;  ?> to NetPoster</h1>
		<h3>
		A place to connect with your friends </br> Get updates from the peaple you love</br>And from the world and things that interest.
		</h3>
</body>
<input type="submit" name="login_button" value="Login">
</html>