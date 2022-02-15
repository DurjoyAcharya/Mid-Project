<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=java", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // sql to create table
    $sql = "CREATE TABLE visitors (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      firstname VARCHAR(30) NOT NULL,
      lastname VARCHAR(30) NOT NULL,
      email VARCHAR(50),
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn=null;
?>
