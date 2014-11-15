<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/admin.css" type="text/css" rel="stylesheet">
    </head>
    <body>
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">Product Information Exchange</a>
                    </div>
                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                        	<?php if ($this->session->userdata('permission') == "qwe") { ?>
                            <li class="active"><a href="">Home</a></li>
                            <?php } ?>
                            <li><a href="admin-user.html">User</a></li>
                            <?php if ($manage_crops) { ?>
                            <li><a href="admin-crop.html">Crop</a></li>
                            <?php } if ($manage_announcements) { ?>
                            <li><a href="admin-announcement.html">Announcement</a></li>
                            <?php } if ($manage_report) { ?>
                            <li><a href="admin-report.html">Report</a></li>
                            <?php } ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">You are logged in as Admin <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>