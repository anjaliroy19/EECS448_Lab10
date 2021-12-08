<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "a820r843", "Heifie4t", "a820r843");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit(); 
}

echo "<table>";
echo "<tr><th>Posts of " . $_POST["user_id"] . "</th></tr>";

$query = "SELECT content FROM Posts WHERE author_id='" . $_POST["user_id"] . "';";
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["content"] . "</td><tr>";
	}
}

echo "</table>";
/* free result set */
/* close connection */
$result->free();
$mysqli->close();

?>
