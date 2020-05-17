<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr">

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
 <link rel="shortcut icon" href="images/favicon.ico">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="js/main.js"></script>
<script src="js/jquery.js"></script>
<script src="js/webapikey.js"></script>
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
    <input type="text" id="text" name="text">
    <button id="weather">Check Weather</button>
    <div id="show_weather"></div>
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
      <img src="images/rinor.jpg" alt="John" style="width:80%;height: 300px;margin-left: 10%;">
      <div class="container">
      <?php emriMbiemri("Rinor","Mehmeti"); ?>
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
      <?php emriMbiemri("Lirim","Islami"); ?>
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
        <?php emriMbiemri("Uran","Lajqi"); ?>
        <p class="title"><?php echo $personi1->getProfesioni(); ?></p>
        <p><?php echo $personi1->getVendi(); ?><p>
        <?php echo $personi1->getEmail(); ?>
        <p><button class="button uran" onclick="UranLajqi()">Contact <?php inicialet("Uran","Lajqi") ?></button></p>
      </div>
    </div>
  </div>
</div>

<?php 
  if(isset($_POST['submit'])){
    $firstname = htmlentities($_POST['firstname']);
    $lastname = htmlentities($_POST['lastname']);
    $email = htmlentities($_POST['email']);

    setcookie('lastname', $firstname, time() + 3600);
    setcookie('firstname', $lastname, time() + 3600);
    setcookie('email', $email, time() + 3600);

    header('Location: users.php');
  }
?>

<div class="row">
  <div class="column"  id="rinor" style="display: none;">
    <div class="card">
      <div class="container">
            <h3>Contact <?php echo $personi3->getEmri(); ?></h3>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="forma">
              <input type="text" name="firstname" placeholder="Firstname"><br>
              <input type="text" name="lastname" placeholder="Lastname"><br>
              <input type="email" name="email" placeholder="Email"><br>
              <input type="number" name="mosha" placeholder="Mosha"><br>
              <input type="submit" name="submit" value="Submit">
            </form>
      </div>
    </div>
  </div>

  <div class="column"  id="lirim" style="display: none;">
    <div class="card">
      <div class="container">
            <h3>Contact <?php echo $personi2->getEmri(); ?></h3>
             <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="forma">
              <input type="text" name="firstname" placeholder="Firstname"><br>
              <input type="text" name="lastname" placeholder="Lastname"><br>
              <input type="email" name="email" placeholder="Email"><br>
              <input type="number" name="mosha" placeholder="Mosha"><br>
              <input type="submit" name="submit" value="Submit">
            </form>
      </div>
    </div>
  </div>

  <div class="column"  id="uran" style="display: none;">
    <div class="card">
      <div class="container">
            <h3>Contact <?php echo $personi1->getEmri(); ?></h3>
             <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="forma">
              <input type="text" name="firstname" placeholder="Firstname"><br>
              <input type="text" name="lastname" placeholder="Lastname"><br>
              <input type="email" name="email" placeholder="Email"><br>
              <input type="number" name="mosha" placeholder="Mosha"><br>
              <input type="submit" name="submit" value="Submit">
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
