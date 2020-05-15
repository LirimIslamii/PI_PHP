<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr">


<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
 <link rel="shortcut icon" href="images/favicon.ico">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
   <link rel="stylesheet" href="style_n.css?v=<?php echo time(); ?>" />

    <title>Network Check</title>
	</head>
<body>
	<?php
		require('header.php');
	?>
	<section class="order">
		<div class="track">
			<p>Tracking</p>
			<div class="check_1">
				<p>IMEI/Serial Number: </p>
				<input type="text" id="track"  />
				<button class="btn_1">Track Order</button>
				<p style="font-size:18px;margin-top:35px;font-weight:normal;">Please enter your IMEI number for a live percentage progress of your order.
                <br>Our customer service team also emails you with any important updates regarding the status of your unlock.</p>
			</div>
		</div>
	</section>
	<?php
			require('footer.php');
	?>
</body>
</html>
