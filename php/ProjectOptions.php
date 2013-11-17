<?php
session_start();
$name = $_GET['projName'];
$_SESSION['projectID']=$_GET['projId'];

echo "<h1> Project : $name</h1>";

?>

<ul>
    <li><a href="addFormTask.php">Add Tasks</a></li>
    <li><a href="progressform.php">Add Progress</a></li>
</ul>