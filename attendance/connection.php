



<?php
 $user = 'root';
 $pass = '';
 $db = "attendance";

 $db = new mysqli ('localhost', $user, $pass, $db) or die;
echo"Connected";

?>


<!-- 
    $servername = "localhost";
    $username = "phpmyadmin";
    $password = "1235";


try {
    $conn = new PDO("mysql:host=$servername;dbname=biometric", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } -->
