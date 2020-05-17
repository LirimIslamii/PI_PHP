<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr">


<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
 <script src="js/jquery.js"></script>
  <script src="js/ajaxreq.js"></script>
 <link rel="shortcut icon" href="images/favicon.ico">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="style_n.css?v=<?php echo time(); ?>" />


    <title>Network Check</title>
	</head>
<body>
	<style>
		form {
			margin-left:555px;
			margin-top:40px;

		}
	</style>
	<?php
		require('header.php');
	?>
	<section class="network">
		  <div class="inbox">/
		  	<h1>Network Check</h1>
			<h4>Your IMEI</h4><br>
			<input type="text" placeholder="Your IMEI" id="imei" name="imei" maxlength="15" />
		  </div>
		  <button class="netw">Check now</button>
		 <form id="result" method="POST">
		  </form>
		  </div>
		  
	</section>
	<div class="resolve" style="height:350px;margin-top:-70px;margin-bottom:-70px;">
			<div class="fix">
				<img src="images/clock.svg" alt="" />
				<p><b>Instant check delivery</b><br> Instant network check solve very fast<br> and no expensive</p>
			</div>
			<div class="fix_1">
				<img src="images/gear.svg" alt="" />
				<p><b>Highly Skilled Tech Team</b><br> Experienced and certified in all Apple® products.</p>
			</div>
			<div class="fix_2">
				<img src="images/iphonee.svg" alt="" />
				<p><b>Your iPhone is more safe</b><br> You keep your device<br>throughout the entire process.</p>
			</div>
		</div>
	<?php
			require('footer.php');
	?>
</body>
</html>
