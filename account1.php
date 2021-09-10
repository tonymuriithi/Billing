<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>
<p style="color:#F00; font-size:12px;">Welcome <?php echo $sessionname;?></p>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css"  href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing System</title>
<style type="text/css">
#wrapper{
	height:100%px; width:100%; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba<br />
(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:2%;
}
#header { width:900px; height:100px;}
#content table{ margin:0 auto; }
#header ul li{
	list-style:none;
	float:left; margin-top:30px; margin-left:10px;}
#header { width:900px; height:100px;}
table th {background:#999;}
#form {
width:600px;
float:left;
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:5%;
	
}
#ryt {
float:right;
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:5%;
}
#header ul li{
	list-style:none;
	float:left; margin-top:30px; margin-left:10px;}
</style>

</head>

<body>
<br />
<div id="wrapper">
<div id="header">
<ul class="nav nav-pills">
    <li><a href="billing.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li class="btn btn-default btn-xs"><a href="bill.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Billing</a></li>
    <li><a href="user.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Users</a></li>
    <li><a href="clients.php"><span class="glyphicon glyphicon-list"></span>&nbsp;Clients</a></li>
</ul></div>
<div id="content">
<div  style="overflow:scroll; height:700px;">
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

      
      
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5>Billing Sequence</h5></div>
            </div>
              <div class="panel-body">
              <form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
<div id="header">
<ul class="nav nav-pills">
    <li><a href="account1.php">&nbsp;Account 1</a></li>
    <li><a href="account2.php">&nbsp;Account 2</a></li>
    <li><a href="bill.php">&nbsp;Account 3</a></li>
</ul></div>
<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM tblmeter where account='1'");

echo "<table class=\"table\" bgcolor=\"#003399\">
<tr>
<th>Id</th>
<th>User Name</th>
<th>Account Number</th>
<th>Meter Number</th>
<th>Contact</th>
<th>Action</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['usernumber'] . "</td>";
  echo "<td>" . $row['meternu'] . "</td>";
  echo "<td>" .$row['contact'] . "</td>";
 echo "<td><a rel='facebox' href='paybill.php?id=".$row['id']."'><span class=\"btn btn-info btn-xs glyphicon glyphicon-usd\">Run</span> </a>| ";
 echo "<a rel='facebox' href='viewbill.php?id=".$row['id']."'><span class=\"btn btn-danger  btn-xs glyphicon glyphicon-eye-open\">View</span>|</a>";
 echo "</tr>";
  }
echo "</table>";

?>
</div>
</div>
</div>
</div>



</body>
</html>
 <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
 