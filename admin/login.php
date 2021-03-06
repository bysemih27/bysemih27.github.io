<?php
if (!isset($_SESSION)) session_start();
include "../functions.php";
if(isset($_POST['username']) && isset($_POST['password']))
{
	if(authenticate(trim($_POST['username']),trim($_POST['password'])))
	$_SESSION['admin_vmp'] = 1;
	else
	$error = "Invalid Username Password Combination";
}
if(isset($_SESSION['admin_vmp']))
header('Location: ./dashboard.php');
include "header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<!-- General meta information -->
	<title>Login - <?php echo(get_title()) ?></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="./style/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="./style/js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="./style/js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="./style/css/login.css" media="screen" />
	<!-- // Load stylesheets -->
	
		<script>


			$(document).ready(function(){
		 
			$("#submit1").hover(
			function() {
			$(this).animate({"opacity": "0"}, "slow");
			},
			function() {
			$(this).animate({"opacity": "1"}, "slow");
			});
			});


		</script>
	
</head>
<body>

	<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<h2>Login</h2>

			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				 <form action="login.php" method="post">
					<input type="text" name="username" id="url" value="Username" onclick="this.value = ''">
					<img id="url_user" src="./style/img/mailicon.png" alt="">
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
					<input type="password" name="password" id="url" value="Password" onclick="this.value = ''">
					<img id="url_password" src="./style/img/passicon.png" alt="">
				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
				<input type="image" src="./style/img/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="./style/img/submit.png" id="submit2" value="Sign In">
			</div>
			</form>


			<div id="links_left">

			<a href="./forgot.php">Forgot your Password?</a>
			<?php
			if($error)
			echo('<p align="center" style="color: red">' . $error . '</p>');
			?>
			</div>

		</div>
		<div id="wrapperbottom"></div>
	</div>

</body>
</html>