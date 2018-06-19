<?php
//testing
//one More testing
//one more
include_once("scripts/global.php");
if($logged==0){
	header("Location:adminloginform.php");
exit();
}
	$session_id=$_SESSION['adminid'];
	$adminid="";
	$firstname="";

	$sql = "SELECT * FROM admin WHERE email='$session_id'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		//start the session
		while($row = $result->fetch_assoc()){
		$adminid=$row['id'];
		$firstname=$row['firstname'];
		}
	}else{
		echo "<script> alert ('Your information was incorrect')</script>";
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../bootstrap/js/jquery-2.2.3.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 600px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	table, th, td {
		padding: 5px;
		text-align: left ;
	}
	table {
		border-spacing: 15px;
	}
	input[type=text] {
		border-radius: 4px;
		box-shadow:1px;
	}
	Select {
		border: 1px solid black;
		border-radius: 4px;
		box-shadow: 1px;
		width: 100px; 
	}
	label {
		margin-left: 30px ;
	}
  </style>
  <script language="javascript">
		function ConfirmDelete() {
			var r = confirm("Want to delete?");
    	if (r == true) {
			return true;
    	} else {
			return false;
    	}
}
	</script>
</head>

<nav class="navbar navbar-inverse navbar-fixed-top opaque-navbar" style="padding-left: 50px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" style="margin-left: 10px; margin-top: 6px;">LAW FIRM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="logout.php" style="margin-top:7px;"><span title="Logout" class="glyphicon glyphicon-log-out"></span>  Logout</a></li> 
      </ul>
    </div>
  </div>
</nav><br/>

<div class="container">
	<?php 
	if(isset($_GET['success'])){ echo '<br><br><div class="alert alert-success fade in"><a data-dismiss="alert" class="close" href="#">×</a><strong>Successfully Done</strong></div>';}

	if(isset($_GET['failure'])){ echo '<br><br><div class="alert alert-danger fade in"><a data-dismiss="alert" class="close" href="#">×</a><strong>Failure! Try Again</strong></div>';}
	?>
  </div>