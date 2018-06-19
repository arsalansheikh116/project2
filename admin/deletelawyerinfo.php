
<body class="">
<?php
include ("scripts/connect.php");

$id=$_GET["id"];

$sql = "DELETE FROM lawyers WHERE id=$id";

if ($conn->query($sql) === TRUE) {
		Header('location:lawyerallinfo.php?success=true');
	} else {
		$failure='fails';
	}
?>
</body>