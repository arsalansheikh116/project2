<?php
include("navbar.php");
include("scripts/connect.php");

$uid = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$uid";
$result = $conn->query($sql);

$firstname="";
$lastname="";
$email="";
$phone="";
$city="";
$province="";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $firstname=$row['firstname'];
		$lastname=$row['lastname'];
		$email=$row['email'];
		$phone=$row['contactno'];
		$city=$row['city'];
		$province=$row['province'];
    }
} else {
    echo "0 results";
}

?>

<div class="container-fluid" style="padding-top: 50px; padding-bottom: 50px;">
  <div class="row">
  <div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default" style="background-color: #eee;">
	  <div class="panel-heading" style="background-color: #003829; color: #fff;"><h3>Profile<h3></div>
	  <div class="panel-body">
		<br>
		<div class="row">
			<h4 class="col-sm-2">First Name:</h4>
			<div class="col-sm-6" style="margin-top: 10px;">
				<?php echo $firstname; ?>
			</div>
		</div>
		<div class="row">
			<h4 class="col-sm-2">Last Name:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $lastname; ?>
			</div>
		</div>
		<div class="row">
			<h4 class="col-sm-2">Email:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $email; ?>
			</div>
		</div>
		<div class="row">
			<h4 class="col-sm-2">Contact no.:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $phone; ?>
			</div>
		</div>
		<div class="row">
			<h4 class="col-sm-2">Province:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $province; ?>
			</div>
		</div>
		<div class="row">
			<h4 class="col-sm-2">City:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $city; ?>
			</div>
		</div>
	  </div>
	</div>
  </div>
  </div>
</div>

</body>
</html>
