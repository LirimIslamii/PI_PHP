<?php
	if(isset($_COOKIE['firstname1']) && isset($_COOKIE['lastname1']) && isset($_COOKIE['email1'])){
		
			$data = date('d/m/Y h:i:sa');
			$koha = ['koh' => $data, 'kohezgjatja' => 2];
			$koha = serialize($koha);
			setcookie('koha', $koha, time() + 3600);
			$koha = unserialize($_COOKIE['koha']);
			echo '<p style="margin-top: 200px;">Useri '. $_COOKIE['firstname1'].' '.$_COOKIE['lastname1'].
			 ' me emailin '.$_COOKIE['email1']. ' eshte ruajtur si cookie.</p><br>';
			echo '<p>Koha e regjistrimit '. $koha['koh'] . '</p><br>';
			echo '<p>Te dhenat tuaja do te ruhen ne browser per '. $koha['kohezgjatja'] . ' ore</p>';
		}
		else{
			echo 'User is not set';
		}
?>
<style>
*{
	background-color: black;
	color: white;
	font-family: Helvetica;
	font-size: 30px;
	font-weight: 3px;
	text-align: center; 
	margin:0;
}
</style>
