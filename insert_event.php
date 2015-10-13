<?php
	session_start();
    include 'db_connection.php';
    try {
   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($_POST))
        $news_headline = $_POST['event_name'];
        $news_details = $_POST['event_description'];
		$user_name = $_SESSION['user_name'];
		// echo $user_name;die;
        $sql = "INSERT INTO event_news (news_headline, news_details, created_by)
       VALUES ('".$news_headline."','".$news_details."','".$user_name."')";
        
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script> alert('Your Event News accepted thank you.');
                       window.location = '/project_one'; 
              </script>";
        
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;

?>