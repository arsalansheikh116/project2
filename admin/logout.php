<?php
error_reporting(0);
include_once("scripts/global.php");
	session_unset();
	session_destroy();
		
	if(isset($_SESSION['adminid'])){
		echo $_SESSION['adminid'];
        echo "welcome to protected page.";
    }
    else {		
        header('location:adminloginform.php');
        die;     
    }
if(!session_is_registered("adminid")){
	echo "we could not logout properly try again";
exit();
	
}else{
header("Location:index.php");
}
?>