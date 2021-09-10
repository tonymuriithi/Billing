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
<th>Month</th>
<th>Year</th>
<th>Balance</th>
<th>Credit</th>
<th>Bill Amount</th>
<th>Paid</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
      $username=$row['username'];
      $usernumber=$row['usernumber'];
    $month=$row['month'];
    $year=$row['year'];
    $balance=$row['balance'];
    $credit=$row['credit'];
	  $total=$row['total'];
	  $paid=$row['paid'];
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo"<td>" .$username."</td>";
  echo"<td>" .$usernumber."</td>";
  echo "<td>". $month. "</td>";
  echo "<td>". $year. "</td>";
  echo "<td>". $balance."</td>";
  echo "<td>". $credit. "</td>";
  echo "<td>" . $total . "</td>";
  echo "<td>" . $paid . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

?>

