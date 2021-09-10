<?php
include 'db.php';
    $sn=$_POST['sn'];
	$usernumber=$_POST['usernumber'];
	$username=$_POST['username'];
	$contact=$_POST['contact'];
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	$unit= $pres-$prev;
    $charge= $_POST['charge'];
    $month= $_POST['month'];
    $year= $_POST['year'];
    $balance=$_POST['balance'];
    $credit=$_POST['credit'];
	$price = $_POST['price'];
	$total=$unit*$price+$charge+$balance-$credit;
	$date=$_POST['date'] ;
	$id=$_POST['id'] ;

	mysqli_query($conn,"INSERT INTO  bill (id,sn,username,usernumber,contact,prev,pres,unit,charge,month,year,balance,credit,price,total,date) 
		 VALUES ('$id','$sn','$username','$usernumber','$contact','$prev','$pres','$unit','$charge','$month','$year','$balance','$credit','$price','$total','$date')"); 
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="account2.php"</script>';