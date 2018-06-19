<?php
session_start();
include_once("scripts/connect.php");

//checking if the session are set
if(isset($_SESSION['adminid'])){
	$session_id=$_SESSION['adminid'];
	$session_pass=$_SESSION['pass'];
		
		//check if the member is exist
	$sql = "SELECT * FROM admin WHERE email='$session_id' AND password='$session_pass'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		
		//logged in stuff here
		$logged=1;
	}else{
		header("Location:logout.php");
		exit();	
	}
}
else{
	//if the user is not logged in
	$logged=0;
	}
?>