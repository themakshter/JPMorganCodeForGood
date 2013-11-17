<?php
require 'DBM.php';
//var_dump($_POST);
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

$msg = "Login failed";
$redirect = "login.php";

if (isset($username) && isset($password) && isset($name)){
    $conn = DBManager::conn();
//$data = $conn->query('SELECT * FROM staff');
    $sql = "INSERT INTO customers (username, password, id, name) VALUES (?, ?, '', ?)";
//echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $name);
    $stmt->execute();

    if (count($stmt->fetchAll() == 1)){
        $msg = "Success!";
        $success = 1;
        $redirect = "form.php";
    }
}
echo json_encode(array("success" =>  $success, "msg" => $msg, "redirect" => $redirect));
?>
