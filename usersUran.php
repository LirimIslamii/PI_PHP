<?php
	if(isset($_COOKIE['firstname3']) && isset($_COOKIE['lastname3']) && isset($_COOKIE['email3'])){
		
			$data = date('d/m/Y h:i:sa');
			$koha = ['koh' => $data, 'kohezgjatja' => 2];
			$koha = serialize($koha);
			setcookie('koha', $koha, time() + 3600);
			$koha = unserialize($_COOKIE['koha']);
			echo '<p style="margin-top: 200px;">Useri '. $_COOKIE['firstname3'].' '.$_COOKIE['lastname3'].
			 ' me emailin '.$_COOKIE['email3']. ' eshte regjistuar ne databaz.</p><br>';
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
