<?php

	$connection = mysqli_connect("localhost","root","","ajaxi");


	if(isset($_POST['search_post_btn']))
	{
		$imei = $_POST['imei'];
		$query = "SELECT * FROM ajaxtable WHERE imei = '$imei'";
		$query_run = mysqli_query($connection,$query);

		if($query_run){
			while($row = mysqli_fetch_array($query_run))
			{
				?>
		<table>
			<tr>
				<td><input type="text" class="txtbox" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
			</tr>
			<tr>
				<td><input type="text" class="txtbox" name="imei" id="imei" value="<?php echo $row['imei'] ?>"></td>
			</tr>
			<tr>
				<td><input type="email" class="txtbox" name="email" id="email" value="<?php echo $row['email'] ?>"></td>
			</tr>
			<tr>
				<td><button id="update">UPDATE</button></td>
			</tr>
		</table>
				<?php
			}
		}
		else {
			echo "Not Found";
		}
	}
?>

<style>
	table {
		font-weight: bold;
	}
	th{
		color:white;
	}
	input {
		border-bottom:3px solid #fff;
		border-radius:5px;

	}
	#id {
		margin-top:10px;
		padding:5px;
		width: 200px;
	}
	#imei {
		margin-top:10px;
		padding:5px;
		width: 200px;


	}
	#email {
		margin-top:10px;
		padding:5px;
		width: 200px;
	}
	#update {
		padding:5px;
		color:#fff;
		width:100px;
		margin-left:50px;
		margin-top:15px;
		border-bottom:1px solid #fff;
		border-radius: 5px;
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		background: -webkit-linear-gradient(top, #696969 20%, #000000 70%);


	}
	#update:focus{
		outline: none;
	}


</style>






