<?php
 include 'db.php';
if (isset($_POST['add'])){
			 		
					$username= $_POST['username'] ;					
					$usernumber=$_POST['usernumber'] ;
					$meternu=$_POST['meternu'] ;
					$contact=$_POST['contact'] ;
					$account =$_POST['account'];
					
		 mysqli_query($conn,"INSERT INTO  tblmeter (username,usernumber,meternu,account,contact) 
		 VALUES ('$username','$usernumber','$meternu','$account','$contact')"); 
				
				header("Location: clients.php");
				
				
	        }
	
?>