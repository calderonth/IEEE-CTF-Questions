<?php
$connection = mysqli_connect(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, getenv('MYSQL_DATABASE'));
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$sql = "CREATE TABLE user_login (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
Password VARCHAR(50))";
if (mysqli_query($connection, $sql)) {
  echo "Table created successfully";
} else {
  //die ("Error creating table: " . mysqli_error($connection));
}

//$connection->close();
$sql = "INSERT INTO user_login (id, username, password)
VALUES ('1','root', 'AQL3BQL0ZQIyAJV0AmyxZmOuATIuZwH1AQpjAJDjZwp')";

if ($connection->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $connection->error;
}
