<?php
 // database params
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "job_apply";

 // connect to the database
 $conn = mysqli_connect($hostName, $userName, $password, $dbName);


 if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }




  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>