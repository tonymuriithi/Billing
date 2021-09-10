<h4 style="color:#f00;">Welcome </p>Note: Bill Amount = Total Consumption * Price + Standing charge</h4>
<?php
include 'db.php';
$id=$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where sn ='$id'");

echo "<table width='1000', border='1' bgcolor='#fff'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Account</th>
<th>Previous Reading</th>
<th>Present Reading</th>
<th>Consuption</th>
<th>Price</th>
<th>Standing Charge</th>
<th>Month</th>
<th>Year</th>
<th>Balance</th>
<th>Credit</th>
<th>Bill Amount</th>
<th>Date</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
      $username=$row['username'];
      $usernumber=$row['usernumber'];
	  $prev=$row['prev'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $unit=$row['unit'];
    $charge=$row['charge'];
    $month=$row['month'];
    $year=$row['year'];
    $balance=$row['balance'];
    $credit=$row['credit'];
	  $total=$row['total'];
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo"<td>" .$username."</td>";
  echo"<td>" .$usernumber."</td>";
  echo "<td>" . $prev . "</td>";
  echo "<td>" . $pres . "</td>";
  echo "<td>". $unit."</td>";
  echo "<td>" . $price . "</td>";
  echo "<td>". $charge. "</td>";
  echo "<td>". $month. "</td>";
  echo "<td>". $year. "</td>";
  echo "<td>". $balance."</td>";
  echo "<td>". $credit. "</td>";
  echo "<td>" . $total . "</td>";
  echo "<td>" . $row['date'] . "</td>";
 echo "<td><a rel='facebox' href='viewpayment.php?id=".$row['id']."'>View </a>| ";
 echo "<a rel='facebox' href='sms.php?id=".$row['id']."'>SMS</td>";
  echo "</tr>";
  }
echo "</table>";

?>

