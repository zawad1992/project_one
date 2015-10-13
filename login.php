<?php
	//include 'db_connection.php';
	session_start();// Starting Session

	$error=''; // Variable To Store Error Message

	if (isset($_POST['submit'])) {
		
		//echo "Hello how are you today?";
		if (empty($_POST['email']) || empty($_POST['password'])) {
			echo $error = "Email or Password is invalid";
		}
		else
		{
			// Define $username and $password
			$email=$_POST['email'];
			//var_dump($email);die;
			$password=$_POST['password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysql_connect("localhost", "root", "");
			// To protect MySQL injection for Security purpose
			$email = stripslashes($email);
			$password = stripslashes($password);
			$email = mysql_real_escape_string($email);
			$password = mysql_real_escape_string($password);
			// Selecting Database
			$db = mysql_select_db("ip_assignment", $connection);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysql_query("select * from user where password='$password' AND email='$email' AND status=1", $connection);
			$rows = mysql_num_rows($query);
			// $arrayForData = mysqli_fetch_assoc($query);
			// //$array = array(mysql_fetch_array($query));
			// echo $arrayForData; die;
			while ($val = mysql_fetch_array($query, MYSQL_NUM)) {
    			//printf("ID: %s  Name: %s", $row[0], $row[8]); 
    			$user_id = $val[0];
    			$user_name = $val[1];
    			$user_type = $val[7];
			}

		//	$arr = $val[8];

		//	echo $user_type; die;
			 
			if ($rows !== 0) {
				$_SESSION['currentUser'] = $email;
				$_SESSION['userType'] = $user_type;
				$_SESSION['user_name'] = $user_name;
				// echo $_SESSION['user_name'];die;
				echo "<script> alert('Login Successfull!!!!'); 
							   window.location = '/project_one'; 
				      </script>"; // Redirecting To Other Page
			} else {
				echo "<script> alert('Email or Password is invalid'); 
								window.location = '/project_one'; 
				      </script>";
				//header("location: index.html");
			}
			mysql_close($connection); // Closing Connection
		}
	}
?>