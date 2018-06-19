<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAW FIRM :: Our Moto is to give justice on your doorstep</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bootstrap/mycss/mycss.css">
  <script src="../../bootstrap/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid" style="padding-left: 50px; background-color:#003829;">
      <a class="" href="#myPage"><img src="../../images/logo.jpg" height="60" width="60" style="float:left; margin: 10px;"/><h3 style="margin-top: 26px; margin-left: 70px;">LAW FIRM</h3></a>
  </div>
  
  <div class="container">
	<h2>Events</h2>
  </div>
  <div class="container">
<?php
include("../scripts/connect.php");

$id=$_GET["id"];
$title=$_GET["title"];
$detail=$_GET["detail"];

$sql = "UPDATE events SET title='$title', detail='$detail' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	echo "<div class='alert alert-success'>
			<strong>Success!</strong> Record updated successfully.
		  </div>";
} else {
	echo "<div class='alert alert-warning'>
			<strong>Warning!</strong> Error updating record: " . $conn->error;"
		  </div>";
}
	include ("allinfo.php");
?>