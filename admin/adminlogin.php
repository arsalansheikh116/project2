<?php
error_reporting(0);
include_once("scripts/global.php");
if(isset($_POST['email'])){
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
//error handling
if((!$email)||(!$pass)){
echo "<script>alert(' please insert both field')</script>";
include("adminloginform.php");
}else{
	$sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
	
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		//start the session
		while($row = $result->fetch_assoc()){
		$adminid=$row['email'];
				}
			$_SESSION['adminid']=$adminid;
			$_SESSION['pass']=$pass;
			header("Location:index.php");
		}else{
		echo "<script> alert ('Your Email OR Password Is Wrong!')</script>";
		include("adminloginform.php");
		}		
	}
}
?>
