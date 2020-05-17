<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr">

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
 <link rel="shortcut icon" href="images/favicon.ico">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
 <link rel="stylesheet" href="animation.css?v=<?php echo time(); ?>" />
 <link rel="stylesheet" type="text/css" href="policy.css?v=<?php echo time(); ?>">
    <title>iCloud Activation Lock Removal</title>
	</head>
<body>
	<?php
		require('header.php');
	?>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Privacy Police</h1>
    <?php
		echo date('d/m/Y h:i:sa');
	?>
  </div>
</div>
	
<?php
	function upper($argumenti){
		$var = strtoupper($argumenti);
		echo "<h1> $var </h1>";
	}

	function titulli($argumenti){
		$titulli = ucwords($argumenti);
		echo "<br><br><br><h1>$titulli</h1>";
	}
	
	function paragrafi($text){
		if (preg_match("/\bprivacy policy\b/i", $text, $match))  {
		    $paragrafi = str_replace("privacy policy", "<i>PRIVACY POLICY</i>", $text);
		    echo $paragrafi;
		}
		else
		    echo $text; 
	}
function ndarja($text){
		echo $text;
	}
?>
<section>

	<section id="id1" style="color: white; margin-top: 30px;">
		<?php upper("privacy police");
		$file = file_get_contents('File/file1.txt');
		$text = "<p>" . $file . "</p>";
		paragrafi($text);
		?>
	</section>

	<section id="id2">
		<?php titulli("Personal identification information"); 
		$file = file_get_contents('File/file2.txt');
		$text = "<p>" . $file . "</p>";
		ndarja($text); ?>
	</section>

	<section id="id3">
		<?php titulli("Non-personal identification information"); 
		$file = file_get_contents('File/file3.txt');
		$text = "<p>" . $file . "</p>";
		ndarja($text); ?>
	</section>

	<section id="id4">
		<?php titulli("Web browser cookies"); 
		$file = file_get_contents('File/file4.txt');
		$text = "<p>" . $file . "</p>";
		ndarja($text); ?>
	</section>

	<section id="id5">
		<?php titulli("How we use collected information"); 
		$file = file_get_contents('File/file5.txt');
		$text = "<p>" . $file . "</p>";
		ndarja($text); ?>
	</section>

	<section id="id6">
		<?php $titulli = "How We Protect Your Information";
		echo "<h1 style='margin-left:420px;'>" . $titulli . "</h1>";
		$file = file_get_contents('File/file6.txt');
		$text = "<p  style='margin-left:420px;'>" . $file . "</p>";
		ndarja($text); ?>
	</section>

	<section id="id7">
		<?php titulli("Sharing your personal information");
		$file = file_get_contents('File/file7.txt');
		$text = "<p>" . $file . "</p>";
		ndarja($text); ?>
	</section>

	<section id="id8">
		<?php titulli("Third party websites");
		$file = file_get_contents('File/file8.txt');
		$text = "<p>" . $file . "</p>";
		ndarja($text); ?>
	</section>

	<section id="id9">
		<?php upper("Contacting us");
		$text = "<p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us on Sales@PracticeLeague.com</p>";
			if(isset($_POST['submit']))
			{
			$name = $_POST['name'];
			$file = fopen("Koment.txt", "w+") or die("file not opern");
			$s = $name."\n";
			fputs($file,$s) or die("Data not write");
			fclose($file);
			}
			 ndarja($text); 
			?>

			<form action="#" method="post" id="koment">
			    <input type="text" name="name">
			    <input type="submit" name="submit" value="Komento">
			</form>
	</section>

</section>
<?php
	require("footer.php");
?>

</body>
</html>
