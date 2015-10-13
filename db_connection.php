<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ip_assignment", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "<script>alert(DB Connected successfully <br>);</script>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 