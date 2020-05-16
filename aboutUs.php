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
<link rel="stylesheet" type="text/css" href="aboutUs.css">
    <title>iCloud Activation Lock Removal</title>
  </head>
<body>
  <?php
    require('header.php');
  ?>
	<?php 
class Person{
	public $emri;
	public $mbiemri;
	public $email;

	public function __construct($emri,$mbiemri,$email){
		$this->emri = $emri;
		$this->mbiemri = $mbiemri;
		$this->email = $email;
		__CLASS__." u krijua.<br>";
	}
	public function __destruct(){
		__CLASS__." u shkatrrua.<br>";
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
		__CLASS__." u krijua.<br>";
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
      <img src="images/5.png" alt="John" style="width:100%;height: 300px;">
      <div class="container">
      <?php emriMbiemri("Rinor","Mehmeti"); ?>
        <p class="title"><?php echo $personi3->getProfesioni(); ?></p>
        <p><?php echo $personi3->getVendi(); ?><p>
        <p><?php echo $personi3->getEmail(); ?></p>
        <p><button class="button rinor">Contact <?php inicialet("Rinor","Mehmeti") ?></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/5.png" alt="John" style="width:100%;height: 300px;">
      <div class="container">
      <?php emriMbiemri("Lirim","Islami"); ?>
        <p class="title"><?php echo $personi2->getProfesioni(); ?></p>
        <p><?php echo $personi2->getVendi(); ?><p>
        <?php echo $personi2->getEmail(); ?>
        <p><button class="button lirim">Contact <?php inicialet("Lirim","Islami") ?></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/5.png" alt="John" style="width:100%;height: 300px;">
      <div class="container">
      	<?php emriMbiemri("Uran","Lajqi"); ?>
        <p class="title"><?php echo $personi1->getProfesioni(); ?></p>
        <p><?php echo $personi1->getVendi(); ?><p>
        <?php echo $personi1->getEmail(); ?>
        <p><button class="button uran">Contact <?php inicialet("Uran","Lajqi") ?></button></p>
      </div>
    </div>
  </div>
</div>

<?php
  require("footer.php");
?>


</body>
</html>
