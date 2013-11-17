<?php
require 'DBM.php';
//var_dump($_POST);
$name = $_POST['name'];
$goal = $_POST['goal'];
$projectid = $_POST['projectid'];
$success = 0;
//$name = "sssss";
//$goal = "sss";
//$projectid = "1";


$msg = "Failed";

if (isset($name) && isset($projectid)){
    $conn = DBManager::conn();
//$data = $conn->query('SELECT * FROM staff');
//    $sql = "INSERT INTO customers (username, password, name) VALUES (?, ?, ?)";
    $sql = "INSERT INTO task(name, goal, projectid) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $goal);
    $stmt->bindParam(3, $projectid);

    $stmt->execute();

    if (count($stmt->fetchAll() == 1)){
        $msg = "Success";
        $success = 1;
    }
}
echo json_encode(array("success" =>  $success, "msg" => $msg));
?>
