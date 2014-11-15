<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/index.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="content">
			<div class="row">
				<div class="center col-xs-4 col-xs-offset-4 text-center" id="title">
					<h2><?php echo $header; ?></h2>
				</div>
			</div>
			<div class="row">
				<div id="buttons" class="center col-xs-2 col-xs-offset-4 text-right">
					<h1>
						<a href="#" data-toggle="modal" data-target="#login"><small>Login</small></a>
						&nbsp; &nbsp;
						<a href="#"><small>View</small></a>
					</h1>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Please sign in</h4>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url(); ?>home/validate_credentials" method="post" name="loginform" class="loginform" role="form">
		                    <input type="text" name="username" class="form-control" placeholder="Username">
		                    <br />
		                    <input type="password" name="password" class="form-control" placeholder="Password">
		                    <br />
		            </div>
		            <div class="modal-footer">
						<input type="submit" name="submit" class="btn btn-default btn-primary" value="Login">
					</div>
							<?php echo validation_errors(); ?>
		                </form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="modal fade" id="error" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            	<div class="modal-content">
            		<div class="error modal-header error-header">
                		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    	<h4 class="modal-title">Error!</h4>
                	</div>
	                <div class="modal-body">
	                    <p id="errorMessage">Invalid Username/Password!</p>
	                </div>
	            </div>
	    	</div>
        </div>