<?php
	include 'db_connection.php';
	try {
   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $date_of_birth=date('Y-m-d',strtotime($_POST['date_of_birth']));
        $contact=$_POST['contact_no'];
        $sex=$_POST['sex'];
        $user_type= $_POST['user_type'];
        $status =  0;

        $existsData = $conn->prepare('SELECT * FROM user WHERE email=? LIMIT 1');
        $existsData->execute(array($email));

        if ( $existsData->rowCount() > 0 ) {
                   echo "<script> alert('Data already exists!!!');
                                        window.location = '/project_one'; 
                        </script>";
                        return 0;
        }
        
        $sql = "INSERT INTO user (name, email, password, date_of_birth, contact_no, sex, user_type, status)
        VALUES ('".$name."','".$email."','".$password."','".$date_of_birth."','".$contact."','".$sex."','".$user_type."','".$status."')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script> alert('New record created successfully');
              window.location = '/project_one'; 

        </script>";

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
    //header("location:javascript://history.go(-1)");
    //header("Location: http://localhost/project_one/");
?>