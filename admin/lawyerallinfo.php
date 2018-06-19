<?php
include("navbar.php");
?>
  <br><br>
  <div class="container">
	<h2>Lawyers</h2>
  </div>

<?php
include("scripts/connect.php");

$sql = "SELECT * FROM lawyers ORDER BY id DESC";
$result = $conn->query($sql);

echo "<div class='container table-responsive'><table class='table table-hover'><tr class='w3-theme-d4'><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Detail</th><th>Delete</th></tr></div>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td>
				<td>" . $row["firstname"]. "</td>
				<td>" . $row["lastname"]. "</td>
				<td>" . $row["email"]. "</td>
				<td><a class='btn btn-success' href='lawyerdetail.php?id=".$row['id']."'>View Detail</a></td>
				<td><a class='btn btn-danger' href='deletelawyerinfo.php?id=".$row['id']."' onclick='return ConfirmDelete();'>Delete</a></td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

?>

