<?php
	if(isset($_COOKIE['firstname']) && isset($_COOKIE['lastname']) && isset($_COOKIE['email'])){
		
			$data = date('d/m/Y h:i:sa');
			$koha = ['koh' => $data, 'kohezgjatja' => 2];
			$koha = serialize($koha);
			setcookie('koha', $koha, time() + 3600);
			$koha = unserialize($_COOKIE['koha']);
			echo '<p style="margin-top: 200px;">Useri '. $_COOKIE['firstname'].' '.$_COOKIE['lastname'].
			 ' me emailin '.$_COOKIE['email']. ' eshte regjistuar ne databaz.</p><br>';
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
