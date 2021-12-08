<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "a820r843", "Heifie4t", "a820r843");


/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit(); 
}


echo "<table>";

echo "<tr><th>Stored Users</th></tr>";


$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["user_id"] . "</td><tr>";
	}
}


echo "</table>";

/* free result set */
/* close connection */
$result->free();
$mysqli->close();

?>
