<?php

	$connection = mysql_connect('localhost', 'root', '');

	$db = mysql_select_db('ip_assignment', $connection);

	$id = $_POST['id'];
    $tableName = $_POST['tableName'];
    $photoName = $_POST['photo_name'];
	$user_id = mysql_real_escape_string($id);
	$table_name = mysql_real_escape_string($tableName);
	$photoName = mysql_real_escape_string($photoName);

	$query = mysql_query("delete from $table_name where id=$user_id", $connection);

	if($table_name == 'allumni_reg_data'){
	$file = 'uploads\\'.$photoName;
		if (!unlink($file))
		  {
		  echo ("Error deleting $file </br>");
		  }
		else
		  {
		  echo ("Deleted $file </br>");
		  }
	}

	if(mysql_affected_rows()>0){   // Just for testing

	echo " Success";

	} else {

	echo " Error deleting Data";

	}

	mysqli_close($connection);
	//connection.close();	 
?>