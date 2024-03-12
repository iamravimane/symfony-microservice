<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');


include_once("../common/connection.php");
include_once("../common/SendJson.php");


$connection = Connection::getInstance()->getConnection();

//we can access using file_get_contents 

$data = json_decode(file_get_contents('php://input'));
$username = $data->username ?? '';
$password = $_POST['password'] ?? '';


if(!isset($username) || !isset($password) || empty(trim($username)) || empty(trim($password)))
{
    return sendJson::sendJson(
        422,
        'Please fill all the required fields & None of the fields should be empty.',
        ['required_fields' => ['name', 'email', 'password']]
    );
}

$sql = "select * from user where email= :email AND password= :password";

$stmt = $connection->prepare($sql);
// Bind parameters
$stmt->bindParam(':email', $username, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // User authenticated
    echo json_encode(array('message' => 'Login successful', 'user' => $user));
} else {
    // Invalid credentials
    echo json_encode(array('message' => 'Invalid username or password'));
}