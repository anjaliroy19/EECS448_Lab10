<?php
if ($_POST["content"] == "")
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

$query = "SELECT * FROM Users WHERE user_id='" . $_POST["user_id"] . "';";
if (mysqli_num_rows($mysqli->query($query)) == 0)
{
	echo "<p>ERROR: User doesn't exist.</p>";
	exit();
}

$query = "INSERT INTO Posts (content, author_id) VALUES ('" . $_POST["content"] . "', '" . $_POST["user_id"] . "')";


if ($result = $mysqli->query($query)) {
	echo "<p>Post was saved.</p>";
} else {
	
}


/* free result set */
/* close connection */
$result->free();
$mysqli->close();

