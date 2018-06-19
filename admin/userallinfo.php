
  <?php
	include("navbar.php");
  ?>
  <br><br>
  <div class="container">
	<h2>Users</h2>
  </div>

<?php
include("scripts/connect.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<div class='container table-responsive'><table class='table table-hover'><tr class='w3-theme-d4'><th>ID</th><th>First Name</th><th>Last Name</th><th>Contact</th><th>Detail</th><th>Delete</th></tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td>
				<td>" . $row["firstname"]. "</td>
				<td>" . $row["lastname"]. "</td>
				<td>" . $row["contactno"]. "</td>
				<td><a class='btn btn-success' href='userdetail.php?id=".$row['id']."'>View Detail</a></td>
				<td><a class='btn btn-danger' href='deleteuserinfo.php?id=".$row['id']."' onclick='return ConfirmDelete();'>Delete</a></td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

?>

</body>
</html>
