<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr">


<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
 <link rel="shortcut icon" href="images/favicon.ico">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="js/jquery.js"></script>
 <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
 <script src="js/show.js"></script>
    <title>JailBreak</title>
	</head>
<body>
	<style>
		.check_1 select{
		color:black;
		margin-left:330px;
		font-weight: bold;
		height:30px;
		width:180px;
		}
		.check_1 select:focus{
			outline:none;
		}
		#apple{
			margin-left:532px;
			margin-top:-220px;
			width:200px;
			height:130px;
			padding:10px 10px;
			border-radius:7px;
		}
		#ping {
			font-size:17px;
			margin-left:-10px;
			margin-top:215px;
		}
	</style>
	<?php
		require('header.php');
	?>

	<section class="order">
		<div class="track">
			<p>JAILBREAK</p>
		<form>
			<div class="check_1">
				<p style="margin-left:350px;">iPhone Version: </p>
				<select name="Iphone" id="iOS" onchange="showAjax(this.value)">
					<option value="" selected disabled>Choose</option>
					<option value="iOS 13">iOS 13</option>
					<option value="iOS 12">iOS 12</option>
					<option value="iOS 11">iOS 11</option>
					<option value="iOS 10">iOS 10</option>
					<option value="iOS 9">iOS 9</option>
					<option value="iOS 8">iOS 8</option>
					<option value="iOS 7">iOS 7</option>
					<option value="iOS 6">iOS 6</option>
				</select>
				<p id="ping">Jailbreaking is the privilege escalation of an Apple device for the purpose of removing software restrictions imposed by Apple on iOS operating systems.<p>
			</div>
				<div id="apple"></div>

	      </form>
		</div>
	</section>
	<?php
			require('footer.php');
	?>
</script>
</body>
</html>
