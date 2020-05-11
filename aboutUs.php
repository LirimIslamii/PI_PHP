<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="C:\Users\Uran\Desktop\New folder\Privacy Policy.css">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

body {
  margin: 0;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 760px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.footer {
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
.footer p{
   vertical-align: middle;
   line-height: 4em;
   padding-bottom: 0px;
}

body, html {
  height: 100%;
  margin: 0;
}

.hero-image {
  background-image: url("7285.jpg");
  height: 80%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  margin-top: 0;
  margin-bottom: 20px;
}

.hero-text {
  position: absolute;
  top: 50%;
  left: 16%;
  transform: translate(-50%, -50%);
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
   margin-bottom: 0px;
   flex: 1;
   text-align:left;
   font-size: 20px;
   margin-left: 40px;
   margin-top: 4px;
}
.footer input{
	display: inline-flex;
	padding: 10px;
	margin-right: 20px;
	margin-top: 22px;
	border-radius: 8px;
	margin-bottom: 10px;
	flex: 2;

}
</style>
</head>
<body>
	<?php 
class Person{
	public $emri;
	public $mbiemri;
	public $email;

	public function __construct($emri,$mbiemri,$email){
		$this->emri = $emri;
		$this->mbiemri = $mbiemri;
		$this->email = $email;
		echo __CLASS__." u krijua.<br>";
	}
	public function __destruct(){
		echo __CLASS__." u shkatrrua.<br>";
	}
	public function setEmri($name){
		$this->emri = $emri; 
	}
	public function getEmri(){
		return $this->emri;
	}
	public function setMbiemri($name){
		$this->mbiemri = $mbiemri;
	}
	public function getMbiemri(){
		return $this->mbiemri;
	}
	public function setEmail($name){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
}
class TeDhenat extends Person{
	public $profesioni;
	public $vendi;

	public function __construct($emri,$mbiemri,$email,$profesioni,$vendi){
		parent::__construct($emri,$mbiemri,$email);
		$this->profesioni = $profesioni;
		$this->vendi = $vendi;
		echo __CLASS__." u krijua.<br>";
	}
	public function setProfesioni($profesioni){
		$this->profesioni = $profesioni; 
	}
	public function getProfesioni(){
		return $this->profesioni;
	}
	public function setVendi($vendi){
		$this->vendi = $vendi;
	}
	public function getVendi(){
		return $this->vendi;
	}
}

$personi1 = new TeDhenat("Uran","Lajqi","uran_lajqi_1@outlook.com","Administrues i te dhenave","Peje");
$personi2 = new TeDhenat("Lirim","Islami","lirim.islami@gmail.com","IT","Viti");
$personi3 = new TeDhenat("Rinor","Mehmeti","rinormehemti7@hotmail.com","Programer","Firaje");

?>
<div class="topnav" style="margin-bottom: 0px;">
<a href="#" class="fa fa-apple" style="font-size:30px;color:white;padding-top:10px;padding-bottom:8px;"></a>
  <a class="active" href="#home">Home</a>
  <a href="#about">About Us</a>
  <a href="#contact">Contact</a>
  <a href="#">Protofolio</a>
  <div class="login-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit" href="signup.php">SignUp</button>
      <button type="submit">Login</button>
    </form>
  </div>
</div>

<div class="hero-image">
  <div class="hero-text">
  	<h1>Per qka qendrojm ne</h1>
  	<?php 
  	$text = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit.</p>";
  	$newtext = wordwrap($text, 50, "<br />\n");
  	echo $newtext; ?>
  </div>
</div>

<?php 
	function emriMbiemri($emri,$mbiemri){
		echo "<h2>$emri $mbiemri</h2>";
	}
	function inicialet($emri, $mbiemri){
		$emri = substr($emri, 0, 1); 
        $mbiemri = substr($mbiemri, 0, 1);
        echo "$emri. $mbiemri.";
	}
?>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="5.png" alt="John" style="width:100%;height: 300px;">
      <div class="container">
      	<?php emriMbiemri("Rinor","Mehmeti"); ?>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button rinor">Contact <?php inicialet("Rinor","Mehmeti") ?></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="5.png" alt="John" style="width:100%;height: 300px;">
      <div class="container">
      	<?php emriMbiemri("Lirim","Islami"); ?>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button lirim">Contact <?php inicialet("Lirim","Islami") ?></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="5.png" alt="John" style="width:100%;height: 300px;">
      <div class="container">
      	<?php emriMbiemri("Uran","Lajqi"); ?>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button uran">Contact <?php inicialet("Uran","Lajqi") ?></button></p>
      </div>
    </div>
  </div>
</div>


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

			<form action="#aboutUs" method="post">
			    Koment:<input type="text" name="name">
			    <input type="submit" name="submit" value="Write to file">
			</form>
	</div>


</body>
</html>
