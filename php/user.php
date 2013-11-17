
<?php
session_start();
$no_visible_elements=true;
include('header.php');

$userId = $_SESSION['userID'];
echo "<p> Logged in user is $userId</p>"
?>