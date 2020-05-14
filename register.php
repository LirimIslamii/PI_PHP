<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
 <link rel="shortcut icon" href="images/favicon.ico">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<?php
			require('header.php');
	?>

			<div class="klasa">
				
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>';
					}
					else{
						echo '	<form action="includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/E-mail..."><br>
					<input type="password" name="pwd" placeholder="Password..."><br>
					<button type="submit" name="login-submit">Login</button>
					</form>
					<a href="signup.php" class="header-signup">Signup</a>';
					}
				?>
			</div>
	
<?php
	require('footer.php');

?>
</body>
</html>