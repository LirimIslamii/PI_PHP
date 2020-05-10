<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<ul>
		<li class="ura o"><i class="fa fa-apple" style="font-size:35px;color:white"></i></li>
		<li class="ura i q"><a href="#">Home</a></li>
		<li class="ura i k"><a href="#">Protfolio</a></li>
		<li class="ura i k"><a href="#">About me</a></li>
		<li class="ura i k"><a href="#">Contact</a></li>
		<li class="uran i c"><a href="signup.php" class="header-signup">Signup</a></li>
		<li class="uran i c login"><button type="submit" name="login-submit">Login</button></li>
		<li class="uran i c"><input type="password" name="pwd" placeholder="Password..."></li>
		<li class="uran i c"><input type="text" name="mailuid" placeholder="Username/E-mail..."></li>
	</ul>
</body>
</html>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	ul{
		background-color: black;
		color: white;
		width: 100%;
		padding-top: 10px;
		height: 50px;

	}
	ul, li{
		display: inline-block;
	}
	li{
		padding: 5px;
	}
	a{
		color: white;
		text-decoration-line: none;
	}
	a:hover{
		color: red;
	}
	.uran{
		float: right;
		padding-top: 5px;
	}
	.ura{
		float: left;
	}
	.i{
		line-height: 2;
	}
	.q{
		padding-left: 50px;
	}
	.o{
		padding-left: 20px;
	}
	.k{
		padding-left: 20px;
	}
	.c{
		padding-right: 15px;
	}
	.login button{
		display: inline-block;
		background-color: red;
		color: white;
		width: 55px;
		border:1px solid white;
		height: 30px;
		border-radius: 5px;
	}
	.c input{
		background-color: white;
		color: black;
		border-radius: 5px;
		height: 25px;
	}
</style>