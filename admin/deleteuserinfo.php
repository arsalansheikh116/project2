
<body class="">
<?php
include ("scripts/connect.php");

$id=$_GET["id"];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
		Header('location:userallinfo.php?success=true');
	} else {
		$failure='fails';
	}
?>
</body>