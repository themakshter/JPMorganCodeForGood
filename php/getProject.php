<?php
require 'DBM.php';
session_start();
$conn = DBManager::conn();
//$data = $conn->query('SELECT * FROM staff');
$userID = $_SESSION['userID'];
$sql = "SELECT * FROM projects WHERE customerID = ?";

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $userID);
$OK = $stmt->execute();
?>
<div class="row-fluid sortable">
<div class="box span12">
<div class="box-header well" data-original-title>
    <h2><i class="icon-user"></i> Projects</h2>
    <div class="box-icon">
        <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
    </div>
</div>
<div class="box-content">
    <div class="span8">
        <a class="btn btn-inverse" href="#" onclick=""><i class="icon-refresh icon-white"></i>Refresh</a>
        <a class="btn btn-primary" href="addFromProject.php"><i class="icon-plus icon-white"></i>Add Project</a>
    </div>
    <div class="span4">
        <span>Actions:</span>
        <a class="btn btn-success" href="#"><i class="icon-zoom-in icon-white"></i>View</a>
<!--        <a class="btn btn-info" href="#"><i class="icon-edit icon-white"></i>Edit</a>-->
<!--        <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i>Delete</a>-->
    </div>
    <br /><br />
<table class="table table-striped table-bordered bootstrap-datatable datatable">
<thead>
<tr>
    <th>Name</th>
    <th>Description</th>
    <th>Background</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

<?php if($OK){
    //echo "<table border=1 cellpadding=3><tbody><tr><th>Name</th><th>Description</th><th>Background</th></tr>";
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $name = $row['name'];
        $description = $row['description'];
        $background = $row['background'];
        $id = $row['id'];
        echo "<tr><td>$name</td><td>$description</td><td>$background</td><td><a class=\"btn btn-success\" href=\"ProjectOptions.php?prodId=$id&projName=$name\"><i class=\"icon-zoom-in icon-white\"></i>$name</a></td></tr>";
    }
    //echo "</tbody></table>";
}else{
    echo "<tr><td colspan='4'>failed</td></tr>";
}
?>
</tbody>
</table>
</div>
</div><!--/span-->

</div><!--/row-->