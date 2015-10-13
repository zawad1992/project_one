<?php
    include 'db_connection.php';
    try {
   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($_POST))
        $name=$_POST['name'];
        $email=$_POST['email'];
        $suggestion=$_POST['suggestion'];
        $sql = "INSERT INTO suggestion_box (name, email, suggestion)
        VALUES ('".$name."','".$email."','".$suggestion."')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script> alert('Your Suggestion accepted thank you.');
                       window.location = '/project_one'; 
              </script>";
        
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    //header("location:javascript://history.go(-1)");
    //header("Location: http://localhost/project_one/");
?>