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
<link rel="stylesheet" type="text/css" href="aboutUs.css?v=<?php echo time(); ?>
">
<script type="text/javascript" src="js/aboutUs.js"></script>
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
  $uran = array('Uran', 'Lajqi');
  $lirim = array('Lirim', 'Islami');

	function inicialet($emri, $mbiemri){
		$emri = substr($emri, 0, 1); 
        $mbiemri = substr($mbiemri, 0, 1);
        echo "$emri. $mbiemri.";
	}
?>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/rinor.jpg" alt="John" style="width:80%;height: 300px;margin-left: 10%;">
      <div class="container">
      <?php 
        $rinor = array('Rinor', 'Mehmeti');
        $rinori = implode(" ", $rinor);
        echo "<br>".$rinori."<hr>"
        ?>
        <p class="title"><?php echo $personi3->getProfesioni(); ?></p>
        <p><?php echo $personi3->getVendi(); ?><p>
        <p><?php echo $personi3->getEmail(); ?></p>
        <p><button class="button rinor" onclick="RinorMehmeti()">Contact <?php inicialet("Rinor","Mehmeti") ?></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/lirim.jpg" alt="John" style="width:80%;height: 300px;margin-left: 10%;">
      <div class="container">
      <?php echo "<br>".implode(' ', $lirim)."<hr>" ?>
        <p class="title"><?php echo $personi2->getProfesioni(); ?></p>
        <p><?php echo $personi2->getVendi(); ?><p>
        <?php echo $personi2->getEmail(); ?>
        <p><button class="button lirim" onclick="LirimIslami()">Contact <?php inicialet("Lirim","Islami") ?></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/uran.jpg" alt="John" style="width:80%;height: 300px;margin-left: 10%;">
      <div class="container">
      	<?php echo "<br>".implode(' ', $uran)."<hr>"; ?>
        <p class="title"><?php echo $personi1->getProfesioni(); ?></p>
        <p><?php echo $personi1->getVendi(); ?><p>
        <?php echo $personi1->getEmail(); ?>
        <p><button class="button uran" onclick="UranLajqi()">Contact <?php inicialet("Uran","Lajqi") ?></button></p>
      </div>
    </div>
  </div>
</div>

<?php 
  if(isset($_POST['submit1'])){
    $firstname = htmlentities($_POST['firstname1']);
    $lastname = htmlentities($_POST['lastname1']);
    $email = htmlentities($_POST['email1']);

    setcookie('firstname1', $firstname, time() + 3600);
    setcookie('lastname1', $lastname, time() + 3600);
    setcookie('email1', $email, time() + 3600);
  }
?>

<?php 
require('konekt.php');
define('ROOT_URL1', 'users.php');
  if(isset($_POST['submit1'])){
    $firstname1 = mysqli_real_escape_string($conn, $_POST['firstname1']);
    $lastname1 = mysqli_real_escape_string($conn, $_POST['lastname1']);
    $email1 = mysqli_real_escape_string($conn, $_POST['email1']);
    $mosha1 = mysqli_real_escape_string($conn, $_POST['mosha1']);
    if(empty($firstname1) || empty($lastname1) || empty($email1) || empty($mosha1)){
      echo "<p>Ju lutem plotesoni te gjitha fushat.</p>";
    }
    elseif (!preg_match("/^[a-zA-Z]*$/",$firstname1)){
      echo "<p>Ju lutem shenoni emrin valid</p>";
    }
    elseif( !preg_match("/^[a-zA-Z]*$/",$lastname1)){
      echo "<p>Ju lutem shenoni mbiemrin valid</p>";
    }
    elseif(!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      echo "<p>Ju lutem shenoni email valid</p>";
    }
    else{
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $firstname1 = test_input($firstname1);
    $lastname1 = test_input($lastname1);
    $email1 = test_input($email1);
    $mosha1 = test_input($mosha1);

    $query1 = "INSERT INTO kontaktrinor(firstname1,lastname1,email1,mosha1) VALUES(
    '$firstname1','$lastname1','$email1','$mosha1');";

    if(mysqli_query($conn, $query1)){
      echo "<script>alert('Te dhenat u derguan me sukses tek tabela kontaktrinor');</script>";
    }else{
      echo 'ERROR: '. mysqli_error($conn);
    }
  }
  }
?>
<div class="row">
  <div class="column"  id="rinor" style="display: none;">
    <div class="card">
      <div class="container">
            <h3>Contact <?php echo $personi3->getEmri(); ?></h3>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="forma" required>
              <input type="text" name="firstname1" placeholder="Firstname"><br>
              <input type="text" name="lastname1" placeholder="Lastname"><br>
              <input type="email" name="email1" placeholder="Email"><br>
              <input type="number" name="mosha1" placeholder="Mosha"><br>
              <input type="submit" name="submit1" value="Submit"><br>
              <button><a href="users.php">Set Cookes</a></button>
            </form>
      </div>
    </div>
  </div>
<?php
  if(isset($_POST['submit2'])){
    $firstname2 = mysqli_real_escape_string($conn, $_POST['firstname2']);
    $lastname2 = mysqli_real_escape_string($conn, $_POST['lastname2']);
    $email2 = mysqli_real_escape_string($conn, $_POST['email2']);
    $mosha2 = mysqli_real_escape_string($conn, $_POST['mosha2']);
   if(empty($firstname2) || empty($lastname2) || empty($email2) || empty($mosha2)){
        echo "<p>Ju lutem plotesoni te gjitha fushat.</p>";
      }
      elseif (!preg_match("/^[a-zA-Z]*$/",$firstname2)){
        echo "<p>Ju lutem shenoni emrin valid</p>";
      }
      elseif( !preg_match("/^[a-zA-Z]*$/",$lastname2)){
        echo "<p>Ju lutem shenoni mbiemrin valid</p>";
      }
      elseif(!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Ju lutem shenoni email valid</p>";
      }
      else{
        $firstname2 = test_input($firstname2);
    $lastname2 = test_input($lastname2);
    $email2 = test_input($email2);
    $mosha2 = test_input($mosha2);
    
    $query2 = "INSERT INTO kontaktlirim(firstname2,lastname2,email2,mosha2) VALUES(
    '$firstname2','$lastname2','$email2','$mosha2');";

    if(mysqli_query($conn, $query2)){
      echo "<script>alert('Te dhenat u derguan me sukses tek tabela kontaktlirim');</script>";
    }else{
      echo 'ERROR: '. mysqli_error($conn);
    }
  }
  }
?>
<?php 
  if(isset($_POST['submit2'])){
    $firstname = htmlentities($_POST['firstname2']);
    $lastname = htmlentities($_POST['lastname2']);
    $email = htmlentities($_POST['email2']);

    setcookie('firstname2', $firstname, time() + 3600);
    setcookie('lastname2', $lastname, time() + 3600);
    setcookie('email2', $email, time() + 3600);
  }
?>
  <div class="column"  id="lirim" style="display: none;">
    <div class="card">
      <div class="container">
            <h3>Contact <?php echo $personi2->getEmri(); ?></h3>
             <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="forma">
              <input type="text" name="firstname2" placeholder="Firstname"><br>
              <input type="text" name="lastname2" placeholder="Lastname"><br>
              <input type="email" name="email2" placeholder="Email"><br>
              <input type="number" name="mosha2" placeholder="Mosha"><br>
              <input type="submit" name="submit2" value="Submit"><br>
              <button><a href="usersLirim.php">Set Cookes</a></button>
            </form>
      </div>
    </div>
  </div>
<?php 
  if(isset($_POST['submit3'])){
    $firstname3 = mysqli_real_escape_string($conn, $_POST['firstname3']);
    $lastname3 = mysqli_real_escape_string($conn, $_POST['lastname3']);
    $email3 = mysqli_real_escape_string($conn, $_POST['email3']);
    $mosha3 = mysqli_real_escape_string($conn, $_POST['mosha3']);
   if(empty($firstname3) || empty($lastname3) || empty($email3) || empty($mosha3)){
        echo "<p>Ju lutem plotesoni te gjitha fushat.</p>";
      }
      elseif (!preg_match("/^[a-zA-Z]*$/",$firstname3)){
        echo "<p>Ju lutem shenoni emrin valid</p>";
      }
      elseif( !preg_match("/^[a-zA-Z]*$/",$lastname3)){
        echo "<p>Ju lutem shenoni mbiemrin valid</p>";
      }
      elseif(!filter_var($email3, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Ju lutem shenoni email valid</p>";
      }
      else{
    $query3 = "INSERT INTO kontakturan(firstname3,lastname3,email3,mosha3) VALUES(
    '$firstname3','$lastname3','$email3','$mosha3');";

    if(mysqli_query($conn, $query3)){
      echo "<script>alert('Te dhenat u derguan me sukses tek tabela kontakturan');</script>";
    }else{
      echo 'ERROR: '. mysqli_error($conn);
    }
  }
  }
?>
  <div class="column"  id="uran" style="display: none;">
    <div class="card">
      <div class="container">
            <h3>Contact <?php echo $personi1->getEmri(); ?></h3>
             <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="forma">
              <input type="text" name="firstname3" placeholder="Firstname"><br>
              <input type="text" name="lastname3" placeholder="Lastname"><br>
              <input type="email" name="email3" placeholder="Email"><br>
              <input type="number" name="mosha3" placeholder="Mosha"><br>
              <input type="submit" name="submit3" value="Submit"><br>
              <button><a href="usersUran.php">Set Cookes</a></button>
            </form>
      </div>
    </div>
  </div>
</div>



<?php require('konekt.php'); 
$query = 'SELECT * FROM sherbimet';
$result = mysqli_query($conn, $query);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
?>
<table>
    <tr>
    <th>ID</th>
    <th>IMEI</th>
    <th>Lloji</th>
    <th>Koha</th>
  </tr>
<?php foreach ($posts as $post) {?>
  <tr>
    <td><?php echo $post['id']; ?></td>
    <td><?php echo $post['imei']; ?></td>
    <td><?php echo $post['lloji']; ?></td>
    <td><?php echo $post['koha']; ?></td>
  </tr>
<?php } ?>
 </table>

<?php
  require("footer.php");
?>
</body>
</html>
<style>
table {
  border-collapse: collapse;
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
