<h3>Users</h3>
<div class="table-wrapper">
<table id="users" page="">
<?php

	include 'session.php';
	include 'db_connect.php';


	$query = "select c_id as UserID, c_name as Name, phone as Phone, email as Email from customer";

	$result = getResult($query);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo "<thead><tr>";
		foreach ($row as $key => $value) {
			echo "<th>$key</th>";
		}
		echo "</tr></thead>";
		echo "<tbody>";
		echo "<tr>";
		foreach ($row as $key => $value) {
			echo "<td>$value</td>";
		}
		echo "</tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			foreach ($row as $key => $value) {
				echo "<td>$value</td>";
			}
			echo "</tr>";
		}
		echo "</tbody>";
	} else {
		echo "<h4>No Users</h4>";
	}
?>
</table>
</div>