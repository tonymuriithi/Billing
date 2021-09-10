<?php
include 'db.php';
if(isset($_POST["submit"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
 $id =$csv[1];
  $username = $csv[2];
  $contact = $csv[3];
  $usernumber = $csv[4];
  $month= $csv[5];
  $year= $csv[6];
  $prev = $csv[7];
  $pres =$csv[8];
  $unit =$csv[9];
  $price =$csv[10];
  $charge =$csv[11];
  $balance=$csv[12];
  $credit = $csv[13];
  $total =$csv[14];
  $date=$csv[15];
  $sn=$csv[16];
  
  
  mysqli_query($conn,"INSERT INTO bill VALUES ('$id','$username','$contact','$usernumber','$month','$year','$prev','$pres','$unit','$price','$charge','$balance','$credit','$total','$date','$sn')");
  echo '<script> alert  ("CSV File has been successfully Imported")</script>';
  echo '<script>windows: location="bill.php"</script>';
 }
 
}
?>