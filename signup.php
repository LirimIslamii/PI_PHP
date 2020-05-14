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
</head>
<body>


<?php
	require "header.php";
?>
	<main>
		<div>
			<section>
		<h1>Signup</h1>
		<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] =="emptyfields") {
				echo '<p>fill in all the fields</p>';
			}
			else if ($_GET['error']=="invaliduid"){
				echo '<p>Invalid Username</p>';
			}
			else if ($_GET['error']=="invaledmailuid"){
				echo '<p>Invalid username and e-mail</p>';
			}
			else if ($_GET['error']=="invalidmails"){
				echo '<p>Invalid e-mail</p>';
			}
			else if ($_GET['error']=="passwordcheck"){
				echo '<p>Your password does not meach!</p>';
			}
			else if ($_GET['error']=="userteaken"){
				echo '<p>Username is already taken</p>';
			}
		}
		else if ($_GET['signup'] =="success"){
			echo '<p>signup successful</p>';
		}
		?>
		<form action="includes/signup.inc.php" method="post">
			<input type="text" name="uid" placeholder="username">
			<input type="text" name="mail" placeholder="E-mail">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Repeat Password">
			<button type="submit" name="signup-submit">Signup</button>
			</form>
			</section>
		</div>
	</main>


	<?php
		require"footer.php";
	?>

	</body>
</html>
