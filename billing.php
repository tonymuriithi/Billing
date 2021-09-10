<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';

	
	}
		
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Dashboard</title>
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>
<?php
include 'db.php';
  $results = mysqli_query($conn, "SELECT * FROM user");
  $users = mysqli_num_rows($results);
?>
<?php
include 'db.php';
  $results = mysqli_query($conn, "SELECT * FROM bill");
  $bill = mysqli_num_rows($results);
?>
<?php
include 'db.php';
  $jibu = mysqli_query($conn, "SELECT * FROM tblmeter");
  $client = mysqli_num_rows($jibu);
?>

<p style="color:#F00; font-size:12px;">Welcome <?php echo $sessionname;?></p>
<?php
if (isset($_POST['add']))
	{	   
	include 'db.php';
			 		$id=$_POST['id'] ;
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$address=$_POST['address'] ;
					$contact=$_POST['contact'] ;
					
		 mysqli_query($conn,"INSERT INTO  owners (id,lname,fname,mi,address,contact) 
		 VALUES ('$id','$lname','$fname','$mi','$address','$contact')"); 
				
				echo '<script>alert("success")</script>';
				
				
	        }
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css"  href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<script type="text/javascript">
function addCommas(nStr){
 nStr += '';
 var x = nStr.split('.');
 var x1 = x[0];
 var x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}

</script>
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script src="css/bootstrap/dist/js/jquery.js"></script>
<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
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
<title>Billing System</title>
<style type="text/css">
#wrapper{
 width:100%;
 margin:0 auto;
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:2%;
}
#header { width:900px; height:100px;}
table th {background:#999;}
#form {
width:400px;
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
<div class="container">
<div id="wrapper">
<div id="header">
 <ul class="nav nav-pills">
    <li class="btn btn-default btn-xs"><a href="billing.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li><a href="bill.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Billing</a></li>
    <li><a href="user.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Users</a></li>
    <li><a href="clients.php"><span class="glyphicon glyphicon-list"></span>&nbsp;Clients</a></li>
  </ul>
<div style="color:#F00; font-size:12px; margin-left:900px;"> 
  <span><?php echo $sessionname;?></span><a href="logout.php">   <span class="btn btn-danger  glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
  </div>

</div>
<hr color="#999999"/>

<h1 align="center">Water Billing System</h1>
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <!-------- home panel ----------------------------->
      <h4>Welcome Dear, <?php echo $sessionname; ?></4>
      <hr color="#000000" />
      
      <div class="col-md-4">
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5 style="font-size:24px; font-weight:bold;">Clients</h5></div>
            </div>
              <div class="panel-body">
               <h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;"><?php echo $client; ?></h1>
              </div>
              <a href="clients.php"><div class="panel-footer"><span class="alert-link glyphicon glyphicon-circle-arrow-right"></span>View</div></a>
         </div>
      </div>
    </div>
   <!-----  ######################################### -->
    <div class="col-md-4">
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5 style="font-size:24px; font-weight:bold;">Users</h5></div>
            </div>
              <div class="panel-body">
               <i><h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;"><?php echo $users; ?></h1>
              </div>
              <a href="user.php"><div class="panel-footer"><span class="alert-link glyphicon glyphicon-circle-arrow-right"></span>View</div></a>
         </div>
      </div>
    </div>
  <!-----  ######################################### -->
    <div class="col-md-4">
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5 style="font-size:24px; font-weight:bold;">Bills and Income</h5></div>
            </div>
              <div class="panel-body">
              <h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;"><?php echo $bill; ?>
              <?php
              include "db.php";
			 
			  $add=mysqli_query($conn, "Select SUM(price) from Bill");
              while($row1=mysqli_fetch_array($add))
               {
                 $total=$row1['SUM(price)'];
                  }
			  
			 
			  ?>
              </h1>
              </div>
             <a href="bill.php"> <div class="panel-footer"><span class="alert-link glyphicon glyphicon-circle-arrow-right"></span>View</div></a>
         </div>
      </div>
    </div>

<div id="form">

  <p><h1 align="centre">Add Client</h1></p>
  <form method="post">
<table width="332" border="0">
  <tr>
    
    <td width="99"><input type="hidden"  name="id" value="0" /></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td width="223"><input type="text" name="lname" /></td>
    </tr>
    <tr>
    <td>First Name:</td>
    <td><input type="text" name="fname" /></td>
    </tr>
    <tr>
    <td>MI:</td>
    <td><input type="text" name="mi" /></td>
 
  </tr>
  <tr>
    <td>Account:</td>
    <td><input type="text" name="address" /></td>
  
  </tr>
  <tr>
    <td>Contact #:</td>
    <td><input type="text" name="contact" /></td>
  
  </tr>
   <tr>
    
    <td><input type="submit" name="add" value="ADD" /></td>
  <td><input type="reset" value="CANCEL" /></td>
  </tr>
 
</table>
</form>

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
<?php include_once('includes/footer.php');?>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="dist/js/vectormap-data.js"></script>
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <script src="vendors/apexcharts/dist/apexcharts.min.js"></script>
	<script src="dist/js/irregular-data-series.js"></script>
    <script src="dist/js/init.js"></script>
	
</body>

</html>

 