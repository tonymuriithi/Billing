<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body style=" background:url(img/warer-flow-pipe4.gif); background-size:cover;">
<title>Water Billing System</title>
<style type="text/css">
body { background:#CCC;}
#form {
	width:305px;
margin:0 auto;
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:5%;
	
}
</style>
</head>

<body>

<div id="form">
<h1>Water Billing System!</h1>
<form method="post" action="process.php">
<table width="302" border="0">
  <tr>
    <td><label>User Name:</label></td>
    <td><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="password" /></td>
    
  </tr>
  <tr>
    <td><input type="submit" value="Login"  name="ok"/></td>
    <td>&nbsp;</td>
    </tr>
</table><br />
</form>
<?php if(isset($_GET['err'])){
	echo "<script>alert('Invalid Username or Password')</script>";
	} ?>
</div>


</body>
</html>