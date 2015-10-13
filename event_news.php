<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ip_assignment";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM event_news";
	$result = mysqli_query($conn, $sql);

    //header("location:javascript://history.go(-1)");
    //header("Location: http://localhost/project_one/");


?>