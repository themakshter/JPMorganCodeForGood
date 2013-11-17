<?php
require 'DBM.php';
//var_dump($_POST);
session_start();
$name = $_POST['name'];
$description = $_POST['description'];
$background = $_POST['background'];

$customerID = $_SESSION['userID'];

$success = 0;
echo "<p>$customerID  - $name  - $description - $background</p>";


$msg = "Failed";

if (isset($name) && isset($customerID)){
    $conn = DBManager::conn();
    $sql = "INSERT INTO projects(name, description, background, customerID) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $description);
    $stmt->bindParam(3, $background);
    $stmt->bindParam(4, $customerID);
    $OK = $stmt->execute();
    if ($OK){
        $msg = "Success";
        $success = 1;
    }
}
echo json_encode(array("success" =>  $success, "msg" => $msg));
?>
