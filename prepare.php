<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = 4000;

try {
  $conn = new PDO("mysql:host=$servername;port=$port;dbname=app", $username, $password);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



$id = 1;
$sql ="SELECT * from user WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id' , $id);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($result);