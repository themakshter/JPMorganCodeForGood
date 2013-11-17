<?php
session_start();
require 'DBM.php';
//var_dump($_POST);
$username = $_POST['username'];
$password = $_POST['password'];
$success = 0;
$msg = "Login failed";
$redirect = "login.php";
$userId = "";
$name="";
if (isset($username) && isset($password)){
    $conn = DBManager::conn();
//$data = $conn->query('SELECT * FROM staff');
    $stmt = $conn->prepare("select * from customers where username = ? and password = ?");
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->execute();
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $userId = $row['id'];
        $_SESSION['userID'] = $userId;
        $msg = "Welcome!";
        $success = 1;
        $redirect = "index.php";
    }
}
echo json_encode(array("success" =>  $success, "msg" => $msg, "redirect" => $redirect));
?>
