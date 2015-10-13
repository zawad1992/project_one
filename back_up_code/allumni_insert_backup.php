<?php
	include 'db_connection.php';
	try {
   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // print(isset($_POST));die;
        // print_r($_FILES); die;

        $name=$_POST['name'];
        $std_id=$_POST['std_id'];
        $batch=$_POST['batch'];
        $sex=$_POST['sex'];
        $passing_year=$_POST['passing_year'];
        $phone_no=$_POST['phone_no'];
        $email=$_POST['email'];
        $current_employer=$_POST['current_employer'];
        $designation=$_POST['designation'];
        $present_address=$_POST['present_address'];
        //$profile_photo=$_FILES['profile_photo'];
        $pp_name = $_FILES['profile_photo']['name'];
        $tmpName  = $_FILES['profile_photo']['tmp_name'];
        $pp_type  = $_FILES['profile_photo']['type'];
        $pp_size = $_FILES['profile_photo']['size'];
        
        $fp      = fopen($tmpName, 'r');
        $profile_photo = fread($fp, filesize($tmpName));
        $profile_photo = addslashes($profile_photo);
        fclose($fp);

        if(!get_magic_quotes_gpc())
        {
            $pp_name = addslashes($pp_name);
        }
        $status =  1;
      
       
            $sql = "INSERT INTO allumni_reg_data_backup (name, std_id, batch, sex, passing_year, phone_no, email, current_employer, designation,   present_address, pp_name, pp_type, pp_size, profile_photo, status)
            VALUES ('".$name."','".$std_id."','".$batch."','".$sex."','".$passing_year."','".$phone_no."','".$email."','".$current_employer."','".$designation."','".$present_address."','".$pp_name."','".$pp_type."','".$pp_size."','".$profile_photo."','".$status."')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "<script> alert('You have been succesfully registered in Allumni Associations');
                  window.location = '/project_one'; 

            </script>";
      
    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
    //header("location:javascript://history.go(-1)");
    //header("Location: http://localhost/project_one/");

}
?>