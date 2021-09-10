<?php session_start(); ?>
<?php
include 'db.php';
$id =$_REQUEST['usernumber'];

$result = mysqli_query($conn,"SELECT * FROM tblmeter WHERE usernumber  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$meternu= $test['meternu'] ;					
				$username=$test['username'] ;
				$usernumber=$test['usernumber'];
				$contact= $test['contact'];
				


?>

<p><h1>Client Update</h1></p>
  <form method="post" action="editecex.php">
<table width="342" border="0">
  <tr>
    <td width="107">Client Id:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
    
  </tr>
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" value="<?php echo $username; ?>"/></td>
    </tr>
    <tr>
    <td>Meter number:</td>
    <td><input type="text" name="meternu" value="<?php echo $meternu; ?>"/></td>
 
  </tr>
      </tr>
    <tr>
    <td>Account number:</td>
    <td><input type="text" name="usernumber" value="<?php echo $usernumber; ?>"/></td>
 
  </tr>
  <tr>
    <td>Phone:</td>
    <td><input type="text" name="contact" value ="<?php echo $contact;?>" /></td>
  
  </tr>
  <tr>
 
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="Add" value="ADD"  /></td>
	</tr>
</table>