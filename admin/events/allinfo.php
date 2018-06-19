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
      <a class="" href="#"><img src="../../images/logo.jpg" height="60" width="60" style="float:left; margin: 10px;"/><h3 style="margin-top: 26px; margin-left: 70px;">LAW FIRM</h3></a>
  </div>
  
  <div class="container">
	<h2>Events</h2>
  </div>
  <div class="container">
<?php
include("../scripts/connect.php");

$sql = "SELECT * FROM events ORDER BY id DESC";
$result = $conn->query($sql);

echo "<table class='table table-hover'><tr><th>ID</th><th>Title</th><th>Detail</th><th>Date</th><th>Edit</th><th>Delete</th></tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td>
				<td>" . $row["name"]. "</td>
				<td>" . $row["detail"]. "</td>
				<td>" . $row["date"]. "</td>
				<td><a class='btn btn-primary' href='editinfo.php?id=".$row['id']."'>Edit</a></td>
				<td><a class='btn btn-danger' href='deleteinfo.php?id=".$row['id']."'>Delete</a></td></tr>";
    }
echo "</table>";
} else {
    echo "<div class='alert alert-info'><strong>Info!</strong> No Events</div>";
}
$conn->close();
?>
</div>
</body>