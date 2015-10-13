<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip_assignment";



if (isset($_POST['id'])) {
	$user_status =0;
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
   $id = $_POST['id'];
   //$id = mysql_real_escape_string($id);
   $getdata = "SELECT * FROM user WHERE id='".$id."'";
 //  $getdata = "UPDATE user SET status=1 WHERE id='".$id."'";
   $query = mysqli_query($conn,$getdata);

   while ($val = mysqli_fetch_array($query, MYSQL_NUM)) {
		//printf("ID: %s  Name: %s", $row[0], $row[8]); 
		$user_status = $val[8];
	}
	//$conn = mysqli_connect($servername, $username, $password, $dbname);
	if($user_status == 0) {
	   $sql = "UPDATE user SET status=1 WHERE id='".$id."'";
	} elseif ($user_status == 1) {
	   $sql = "UPDATE user SET status=0 WHERE id='".$id."'";
	}
   if (mysqli_query($conn, $sql)) {
    	echo "Record updated successfully";
    	mysqli_close($conn);
    	//header("Location: /project_one/admin.php");
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	    http_redirect('/admin.php');
	}
}






?>