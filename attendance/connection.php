<?php
 $servername = "localhost";
 $user = 'root';
 $pass = '';
 $db = "biometric";

 $conn = new mysqli ($servername, $user, $pass, $db) or die;
 // echo "Connected";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 

?>