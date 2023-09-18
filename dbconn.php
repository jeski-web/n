<?php
 // database params
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "job_apply";

 // connect to the database
 $conn = mysqli_connect($hostName, $userName, $password, $dbName);

 $sql = "INSERT INTO application_info (surname, firstname, lastname)
VALUES ('Johnte', 'Doeh', 'johntedoeh@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}









?>