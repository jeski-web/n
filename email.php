<?php
 // database params
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "job_apply";

 // connect to the database
 $conn = mysqli_connect($hostName, $userName, $password, $dbName);

 $sql = "INSERT INTO application_info (email)
 VALUES (' $email')";
 
 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }





  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 ?>