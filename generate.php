<?php
// Database Connection file
include 'db.php';
?>


    <table border="1">
    <thead>
    
        <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>Account Number</th>
        </tr>
    </thead>
<?php
// File name
$filename="meterData";
// Fetching data from data base
$query=mysqli_query($conn,"select * from owners");
$cnt=1;
while ($row=mysqli_fetch_array($query)) {

?>

            <tr>
            <td><?php echo $cnt;?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['lname'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['address'];?></td>
            </tr>
<?php 
$cnt++;
// Genrating Execel  filess
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-Report.xls");
header("Pragma: no-cache");
header("Expires: 0");

} ?>