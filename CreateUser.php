<?php
if ($_POST["user_id"] == "")
{
	echo "<p>ERROR:User entered blank text.</p>";
	exit();
}
$mysqli = new mysqli("mysql.eecs.ku.edu", "a820r843", "Heifie4t", "a820r843");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit(); 
}

$query = "INSERT INTO Users VALUES ('" . $_POST["user_id"] . "')";

if ($result = $mysqli->query($query)) {
	echo "<p>User successfully created.</p>";
}
else {
	echo "<p>User was already registered</p>";
}


/* free result set */
/* close connection */
$result->free();
$mysqli->close();

?>
