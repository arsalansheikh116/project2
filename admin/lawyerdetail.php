<?php
include("navbar.php");
include("scripts/connect.php");

$lid = $_GET['id'];

$sql = "SELECT * FROM lawyers WHERE id=$lid";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $firstname=$row['firstname'];
		$lastname=$row['lastname'];
		$email=$row['email'];
		$spacialty=$row['specialty'];
		$phone1=$row['contact1'];
		$phone2=$row['contact2'];
		$city=$row['city'];
		$province=$row['province'];
		$pic_url=$row['pic_url'];
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
		<img src="../lawyer/<?php echo $pic_url; ?>" style="float: right; height: 100px; width: 100px;">
		<br><br><br>
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
			<h4 class="col-sm-2">Spaciality:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $spacialty; ?>
			</div>
		</div>
		<div class="row">
			<h4 class="col-sm-2">Contact no.1:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $phone1; ?>
			</div>
		</div>
		<div class="row">
			<h4 class="col-sm-2">Contact no.2:</h4>
			<div class="col-sm-10" style="margin-top: 10px;">
				<?php echo $phone2; ?>
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
