<?php
require 'DBM.php';
var_dump($_POST);
$taskid = $_POST['taskid'];
$progress = $_POST['progress'];
$date = $_POST['date'];
$plan = $_POST['plan'];
$projectid = $_POST['projectid'];
$success = 0;
//$customerID = "1";

$msg = "Failed";

if (isset($taskid) && isset($date)){
    $conn = DBManager::conn();
//$data = $conn->query('SELECT * FROM staff');
    $sql = "INSERT INTO progress(taskid, progress, date, plan) VALUES (?, ?, ?, ?)";

    for($i = 0; $i < count($taskid); $i++){
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $taskid[$i]);
        $stmt->bindParam(2, $progress[$i]);
//        $stmt->bindParam(3, $remark);
        $stmt->bindParam(3, $date[$i]);
        $stmt->bindParam(4, $plan[$i]);
        $stmt->execute();
    }

    $sql = "INSERT INTO msg(projectid, msgtype, content, remark) VALUES (?, ?, ?, ?)";
    for($i = 0; $i < count($taskid); $i++){
        $msgtype = $_POST['gd_msgtype'];
        $content = $_POST['gd_content'];
        $remark = $_POST['gd_remark'];
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $projectid);
        $stmt->bindParam(2, $msgtype[$i]);
        $stmt->bindParam(3, $content[$i]);
        $stmt->bindParam(4, $remark[$i]);
        $stmt->execute();
    }

    $sql = "INSERT INTO msg(projectid, msgtype, helptypeid, content, difficulty, priority, remark) VALUES (?, ?, ?, ?, ?, ?, ?)";
    for($i = 0; $i < count($taskid); $i++){
        $msgtype = $_POST['bad_msgtype'];
        $helptypeid = $_POST['bad_helptypeid'];
        $content = $_POST['bad_content'];
        $difficulty = $_POST['bad_difficulty'];
        $priority = $_POST['bad_priority'];
        $remark = $_POST['bad_remark'];
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $projectid);
        $stmt->bindParam(2, $msgtype[$i]);
        $stmt->bindParam(3, $helptypeid[$i]);
        $stmt->bindParam(4, $content[$i]);
        $stmt->bindParam(5, $difficulty[$i]);
        $stmt->bindParam(6, $priority[$i]);
        $stmt->bindParam(7, $remark[$i]);
        $stmt->execute();
    }

    $success = 1;
    $msg = "Success";
}
echo json_encode(array("success" =>  $success, "msg" => $msg));
?>
