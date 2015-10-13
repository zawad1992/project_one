<?php
    include 'db_connection.php';
	try {
   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // print(isset($_POST));die;
       // print_r($_FILES); die;

        $name = $_POST['name'];
        $std_id = $_POST['std_id'];
        $batch = $_POST['batch'];
        $sex = $_POST['sex'];
        $passing_year = $_POST['passing_year'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        $current_employer = $_POST['current_employer'];
        $designation = $_POST['designation'];
        $present_address = $_POST['present_address'];
        //$profile_photo=$_FILES['profile_photo'];
        $profile_photo = basename($_POST['std_id'].substr($_FILES["profile_photo"]["name"], strpos($_FILES["profile_photo"]["name"], '.')));
        $date_of_birth = "0000-00-00";
        $user_type = 3;
        $status =  1;
        $target_dir = "uploads/";
        // $target_file = $target_dir . basename($_FILES["profile_photo"]["name"]);
        $target_file = $target_dir . basename($_POST['std_id'].substr($_FILES["profile_photo"]["name"], strpos($_FILES["profile_photo"]["name"], '.')));
        // echo $target_file; die;
        $uploadOk = 1;

        $existsData = $conn->prepare('SELECT * FROM allumni_reg_data WHERE std_id=? LIMIT 1');
        $existsData->execute(array($std_id));
        if ( $existsData->rowCount() > 0 ) {
           echo "<script> alert('Data already exists!!!');
                                window.location = '/project_one'; 
                     </script>";
            return 0;
        }

        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["profile_photo"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                // echo "File is not an image.";
                echo "<script> alert('File is not an image.');
                                window.location = '/project_one'; 
                     </script>";
                $uploadOk = 0;
                 return 0;
            }
        }
        // Check if file already exists
      /*  if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }*/
        // Check file size
        if ($_FILES["profile_photo"]["size"] > 500000) {
            // echo "Sorry, your file is too large.";
            echo "<script> alert('Sorry, your file is too large.');
                            window.location = '/project_one'; 
                </script>";
            $uploadOk = 0;
            return 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                            window.location = '/project_one'; 
                </script>";
            $uploadOk = 0;
            return 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
           /// echo "Sorry, your file was not uploaded.";
            echo "<script> alert('Sorry, your file was not uploaded.');
                            window.location = '/project_one'; 
                </script>";
                 return 0;
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $target_file)) {
                // echo "The file ". basename($_FILES["profile_photo"]["name"]). " has been uploaded.";
                echo "The file ".$target_file. " has been uploaded.";
            } else {
              //  echo "Sorry, there was an error uploading your file.";
                echo "<script> alert('Sorry, there was an error uploading your file.');
                             window.location = '/project_one'; 
                    </script>";
                     return 0;
            }
        }
       
            $sql = "INSERT INTO allumni_reg_data (name, std_id, batch, sex, passing_year, phone_no, email, current_employer, designation, present_address, profile_photo, status)
            VALUES ('".$name."','".$std_id."','".$batch."','".$sex."','".$passing_year."','".$phone_no."','".$email."','".$current_employer."','".$designation."','".$present_address."','".$profile_photo."','".$status."')";
            // use exec() because no results are returned
            $conn->exec($sql);

            $sql = "INSERT INTO user (name, email, password, date_of_birth, contact_no, sex, user_type, status) VALUES ('".$name."','".$email."','".$std_id."','".$date_of_birth."','".$phone_no."','".$sex."','".$user_type."','".$status."')";
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
?>