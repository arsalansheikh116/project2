<?php
error_reporting(0);
session_start();

if(isset($_SESSION['adminid']) && !empty($_SESSION['adminid'])){

	header("Location:index.php");
	$logged=1;
}
else{
	include_once("scripts/global.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAW FIRM :: Our Moto is to give justice on your doorstep</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/mycss/mycss.css">
  <script src="../bootstrap/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  
</head>
<body>
  <div class="container-fluid" style="padding-left: 50px; background-color:#003829;">
      <a class="" href="#myPage"><img src="../images/logo.jpg" height="60" width="60" style="float:left; margin: 10px;"/><h3 style="margin-top: 26px; margin-left: 70px;">LAW FIRM</h3></a>
  </div>

<div class="container-fluid" style="padding-top: 50px; padding-bottom: 50px;">
  <div class="row">
  <div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default" style="background-color: #eee;">
	  <div class="panel-heading text-center" style="background-color: #003829; color: #fff;"><h3>Admin Login<h3></div>
	  <div class="panel-body">
		 <form class="form-horizontal" action="adminlogin.php" method="post"  id="contact_form">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="email">Email:</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Password:</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
			</div>
		  </div>
		</form> 
	  </div>
	</div>
  </div>
  </div>
</div>

</body>
</html>