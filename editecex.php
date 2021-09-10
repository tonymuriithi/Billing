<?php
include 'db.php';
if (isset($_POST['add']))
	$id = $_POST['id'];
	$username = $_POST['username'];
	$meternu = $_POST['meternu'];
	$phone=$_POST['phone'];

	mysqli_query("INSERT INTO  contact (id,username,meternu,phone) 
		 VALUES ('$id','$username','$meternu','$phone')");
			

		 echo "<script>windows: location='clients.php'</script>";				
			