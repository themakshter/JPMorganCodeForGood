<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>

    <!-- left menu starts -->
    <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">User</li>
                <li><a class="ajax-link" href="addFormProject.php"><i class="icon-home"></i><span class="hidden-tablet"> Add Project</span></a></li>
                <li><a class="ajax-link" href="addFormTask.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Task</span></a></li>
                <li><a class="ajax-link" href="progressform.php"><i class="icon-edit"></i><span class="hidden-tablet"> Update Progress</span></a></li>
                <li><a class="ajax-link" href="getProject.php"><i class="icon-edit"></i><span class="hidden-tablet"> Update Progress</span></a></li>
                <li class="nav-header hidden-tablet">Staff</li>
                <li><a class="ajax-link" href="table.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                <li><a class="ajax-link" href="calendar.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                <li><a class="ajax-link" href="table.php"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
                <li><a class="ajax-link" href="form.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <!-- left menu ends -->

    <noscript>
        <div class="alert alert-block span10">
            <h4 class="alert-heading">Warning!</h4>
            <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
    </noscript>

    <div id="content" class="span10">
        <!-- content starts -->
			<?php } ?>