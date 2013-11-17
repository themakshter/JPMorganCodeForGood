<?php
require 'DBM.php';

$userid = $_GET['userid'];

    $conn = DBManager::conn();
//$data = $conn->query('SELECT * FROM staff');
    $stmt = $conn->prepare("select * from customers where id = ?");
    $stmt->bindParam(1, $userid);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
       $name = $row['name'];
    }

    $stmt = $conn->prepare("select * from projects where customerID = ?");
    $stmt->bindParam(1, $userid);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $project[$row['id']]['name'] = $row['name'];
        $project[$row['id']]['description'] = $row['description'];
        $project[$row['id']]['background'] = $row['background'];

        $taskstmt = $conn->prepare("SELECT * FROM task WHERE projectid = ?");
        $taskstmt->bindParam(1, $row['id']);
        $taskstmt->execute();

        while($taskrow = $taskstmt->fetch(PDO::FETCH_ASSOC)){
            $task = array();
            $task[$taskrow['id']]['name'] = $taskrow['name'];
            $task[$taskrow['id']]['description'] = $taskrow['goal'];

            $progressstmt = $conn->prepare("SELECT * FROM progress WHERE taskid = ?");
            $progressstmt->bindParam(1, $taskrow['id']);
            $progressstmt->execute();

            while($progressrow = $progressstmt->fetch(PDO::FETCH_ASSOC)){
                $progress = array();
                $progress[$progressrow['id']]['progress'] = $progressrow['progress'];
                $progress[$progressrow['id']]['remark'] = $progressrow['remark'];
                $progress[$progressrow['id']]['date'] = $progressrow['date'];
                $progress[$progressrow['id']]['plan'] = $progressrow['plan'];
                $task[$taskrow['id']]['progresses'][] = $progress;
            }

            $project[$row['id']]['tasks'][] = $task;
        }

        $msgstmt = $conn->prepare("SELECT * FROM msg LEFT JOIN helptype ON msg.helptypeid = helptype.id WHERE projectid = ?");
        $msgstmt->bindParam(1, $row['id']);
        $msgstmt->execute();

        while($msgrow = $msgstmt->fetch(PDO::FETCH_ASSOC)){
            $msg = array();
            $msg[$msgrow['id']]['name'] = $msgrow['name'];
            $msg[$msgrow['id']]['msgtype'] = $msgrow['msgtype'];
            $msg[$msgrow['id']]['helptypeid'] = $msgrow['helptypeid'];
            $msg[$msgrow['id']]['difficulty'] = $msgrow['difficulty'];
            $msg[$msgrow['id']]['priority'] = $msgrow['priority'];
            $msg[$msgrow['id']]['remark'] = $msgrow['remark'];


            $project[$row['id']]['msg'][] = $msg;
        }
    }

echo json_encode(array("user" =>  $name, "projects" => $project));
?>