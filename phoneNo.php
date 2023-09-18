<?php
 // database params
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "job_apply";

 // connect to the database
 $conn = mysqli_connect($hostName, $userName, $password, $dbName);


 $sql = "INSERT INTO application_info (firstname)
 VALUES ('$nameErr')";











function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 ?>