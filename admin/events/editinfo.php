<?php
include("../scripts/connect.php");

$id=$_GET["id"];
$sql = "SELECT * FROM events WHERE id=$id";
$title="";
$detail="";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $title = $row['title'];
		$detail = $row['detail'];
    }
} else {
    echo "0 results";
}

$conn->close();
?>

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
  </div><br><br>

<div class="container col-sm-8 col-md-offset-2">
	<form name="myform" method="get" action="updateinfo.php">
	<table class="table">
		<tr>
		<td>
			Id:
		</td>
		<td>
			<input class="form-control" name="id" type="text" value="<?php echo $id ?>" readonly />
		</td>
		</tr>
		<tr>
		<td>
			Event Title:
		</td>
		<td>
			<textarea class="form-control" name="title" type="text" ><?php echo $title ?></textarea>
		</td>
		</tr>
		<tr>
		<td>
			Event Detail:
		</td>
		<td>
			<textarea class="form-control" style="height: 200px" name="detail" type="text" ><?php echo $detail ?></textarea>
		</td>
		</tr>
	</table>
	<input class="btn btn-success" style="width: 120px; float: right; margin-right: 10px;" type="submit" value="submit" />
	</form>
</div>
<body>
</html>