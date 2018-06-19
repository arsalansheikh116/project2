<?php include("navbar.php"); ?>
<body>  
 <div class="jumbotron text-center" style="margin-bottom: 0px;">
  <img style="padding-top: 0px;" src="../images/logo.jpg" alt="LawFirm" >
  <h2 style="">Admin Panel</h2>
</div>

<div class="container-fluid" style="margin-bottom: 0px;">    
  <div class="row">
	<div class="col-sm-8" style="">	
		<div class="well well-sm text-center" style="background-color: #000; color: #fff;">
			<h4>Panel</h4>
		</div>
		
		<div class="container-fluid" style="">
			<div class="row">
				<a href="lawyerallinfo.php" class="btn col-sm-6">
					<div class="panel panel-info">
					  <div class="panel-heading">
						<img src="../images/74832-200.png" style="height: 100px; width: 100px;">
						<label style="font-size: 30px; font-family: aril; margin-left: 35px; margin-top: 30px;">LAWYERS<label>
					  </div>
						<div class="panel-body" style="padding-top: 5px; margin-bottom: 10px; height: 20px; color: #02e; font-size: 15px; font-style: italic;">Detail >></div>
				    </div>
				</a>
				<a href="userallinfo.php" class="btn col-sm-6">
					<div class="panel panel-info">
					  <div class="panel-heading">
						<img src="../images/users.png" style="height: 100px; width: 100px;">
						<label style="font-size: 30px; font-family: aril; margin-left: 35px; margin-top: 30px;">USERS<label>
					  </div>
						<div class="panel-body" style="padding-top: 5px; margin-bottom: 10px; height: 20px; color: #02e; font-size: 15px; font-style: italic;">Detail >></div>
				    </div>
				</a>
				<a href="../events/allinfo.php" class="btn col-sm-12">
					<div class="panel panel-info">
					  <div class="panel-heading">
						<img src="../images/users.png" style="height: 100px; width: 100px;">
						<label style="font-size: 30px; font-family: aril; margin-left: 35px; margin-top: 30px;">ADD EVENTS<label>
					  </div>
						<div class="panel-body" style="padding-top: 5px; margin-bottom: 10px; height: 20px; color: #02e; font-size: 15px; font-style: italic;">Detail >></div>
				    </div>
				</a>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
      <div class="panel panel-info">
	    <div class="panel-heading">
		  <h4 class="text-center" style="">Messages<h4>
	    </div>
		<div class="panel-body" style="height: 370px;">
			<?php
				include("scripts/connect.php");

				$sql = "SELECT * FROM contactus ORDER BY id DESC";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<div class='media'>
									<div class='well well-sm media-body'>
										<h4 style='color:#000;' class='media-heading'>".$row['name']." <small><i>Posted on ".$row['created_at']."</i></small></h4>
										<h5 style='color:#000;' class=''><strong>Email Address:</strong>".$row['email']."</h5>
										<p style='color:#000;'>".$row['comments']."</p>
									</div>
							  </div><br>";
					}
				} else {
					echo "0 results";
				}
			?>
		</div>
	  </div>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <p>copyright@2017</p>
</footer>

</body>
</html>
