<!DOCTYPE html>
<html>
<head>
	<title>Privacy Policy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="C:\Users\Uran\Desktop\New folder\Privacy Policy.css">
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
		echo "<h1>$titulli</h1>";
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

	<section id="id1">
		<?php upper("privacy police");
		$text = "<p>This privacy policy governs the manner in which PracticeLeague Legaltech Pvt. Ltd. collects, uses, maintains and discloses information collected from users (each, a 'User') of the www.PracticeLeague.com website ('Site'). This privacy policy applies to the Site and all products and services offered by PracticeLeague Legaltech Pvt. Ltd.</p>";
		paragrafi($text);
		?>
	</section>

	<section id="id2">
		<?php titulli("Personal identification information"); 
		$text = "<p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, place an order, subscribe to the newsletter, respond to a survey, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address, mailing address, phone number. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p>";
		ndarja($text); ?>
	</section>

	<section id="id3">
		<?php titulli("Non-personal identification information"); 
		$text = "<p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p>";
		ndarja($text); ?>
	</section>

	<section id="id4">
		<?php titulli("Web browser cookies"); 
		$text = "<p>Our Site may use 'cookies' to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p>";
		ndarja($text); ?>
	</section>

	<section id="id5">
		<?php titulli("How we use collected information"); 
		$text = "<p>We may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.</p>";
		ndarja($text); ?>
	</section>

	<section id="id6">
		<?php titulli("How we protect your information");
		$text = "<p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures.</p>";
		ndarja($text); ?>
	</section>

	<section id="id7">
		<?php titulli("Sharing your personal information");
		$text = "<p>We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above. We may use third party service providers to help us operate our business and the Site or administer activities on our behalf, such as sending out newsletters or surveys. We may share your information with these third parties for those limited purposes provided that you have given us your permission.</p>";
		ndarja($text); ?>
	</section>

	<section id="id8">
		<?php titulli("Third party websites");
		$text = "<p>Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.</p>";
		ndarja($text); ?>
	</section>

	<section id="id9">
		<?php upper("Contacting us");
		$text = "<p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us on Sales@PracticeLeague.com</p>";
		ndarja($text); ?>
	</section>
	
	<section id="id8">
		<?php titulli("websites");
		$text = "<p>Cookiebot helps make your use of cookies and online tracking GDPR and ePR compliant. The General Data Protection Regulation (GDPR) and the ePrivacy Directive (ePR) affect how your website may use cookies to track your visitors from the EU.</p>";
		ndarja($text); ?>
	</section>

	<section id="id9">
		<?php upper("What is personal data?");
		$text = "<p>Personal data is information that can identify an individual, either directly or when combined with other data.</p>";
		ndarja($text); ?>
	</section>
	
	<div class="footer">
	  <p>&copy Te drejtat e rezervuara</p>
	  <?php 
			if(isset($_POST['submit']))
			{
			$name = $_POST['name'];
			$file = fopen("Koment.txt", "w+") or die("file not opern");
			$s = $name."\n";
			fputs($file,$s) or die("Data not write");
			fclose($file);
			}
			?>

			<form action="#" method="post">
			    Koment:<input type="text" name="name">
			    <input type="submit" name="submit" value="Write to file">
			</form>
	</div>
</section>


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
		height: 55px;
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
	.login button:hover{
		display: inline-block;
		background-color: white;
		color: red;
		width: 55px;
		border:1px solid red;
		height: 30px;
		border-radius: 5px;
	}
	.c input{
		background-color: white;
		color: black;
		border-radius: 5px;
		height: 25px;
	}

body, html {
  height: 100%;
  margin: 0;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("privacy.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  position: absolute;
  top: 50%;
  left: 20%;
  transform: translate(-50%, -50%);
  color: white;
}

section p{
	font-size: 20px;
	padding: 0px 40px 10px 40px;
}
section h1{
	font-size: 30px;
	padding: 20px 40px 0px 40px;
}
section#id1 h1{
	text-align: center;
	line-height: 2;
	padding: 20px;
	font-size: 40px;
}
section#id9{
	background-image: url("172802.jpg");
	width: 100%;
	height: 500px;
	color: white;
}
.footer {
   width: 100%;
   background-color: black;
   color: white;
   display: inline-flex;

}
.footer p {
   vertical-align: middle;
   line-height: 4em;
   padding-bottom: 0px;
   flex: 1;
}
.footer input{
	display: inline-flex;
	padding: 10px;
	margin-right: 20px;
	margin-top: 20px;
	border-radius: 8px;
	flex: 2;

}
</style>
