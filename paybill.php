<?php session_start(); ?>
<?php
 include 'db.php';
$sn =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM tblmeter WHERE id  = '$sn'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$username= $test['username'] ;					
				$usernumber=$test['usernumber'] ;
				$meternu=$test['meternu'];
				$contact=$test['contact'];
				

?>

<p><h1>Owners Bill</h1></p>
 <h1>Name: <?php echo $username.'&nbsp;' .$usernumber;?></h1>
<p><?php $date=date('d/m/y H:i:s');
 echo $date;?></p>
 <form method="post" action="addbill.php">
 <table width="500" border="1">
  <tr>
  <input type="hidden" name="sn" value="<?php echo $id; ?>" />
  <input type="hidden" name="username" value="<?php echo $username; ?>" />
  <input type="hidden" name="usernumber" value="<?php echo $usernumber; ?>" />
  <input type="hidden" name="contact" value="<?php echo $contact; ?>" />
  <input type="hidden" name="date" value="<?php echo $date; ?>" />
    <td width="118">Previous Reading:</td>
    <td width="66"><input type="text" name="prev"  /></td>
    <td>Cu.m</td>
  </tr>
  <tr>
    <td>Present Reading:</td>
    <td><input type="text" name="pres"  /></td>
    <td>Cu.m</td>
  </tr>
  <tr>  <tr>
    <td>Standing Charge:</td>
    <td><input type="text" name="charge"  value="200" /></td>
    <td>S.C</td>
  </tr>
  <tr>  <tr>
    <td>Month:</td>
    <td><input type="text" name="month"  value="February" /></td>
    <td>mn</td>
  </tr>
  <tr>  <tr>
    <td>Year:</td>
    <td><input type="text" name="year" value ="2021"  /></td>
    <td>yr</td>
  </tr>
  <tr>  <tr>
    <td>Balance:</td>
    <td><input type="text" name="balance"  /></td>
    <td>B.F</td>
  </tr>
  <tr>  <tr>
    <td>Credit:</td>
    <td><input type="text" name="credit"  /></td>
    <td>C</td>
  </tr>
  <tr>
    <td>Price/Cu.m</td>
    <td><input type="text" name="price" value="130"  /></td>
    <td>php</td>
  </tr>
   <tr>
    <td><input type="submit" name="total" value="Add"  /></td>
  </tr>
</table>
</form>