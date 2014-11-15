<div id="register_form">
	<h1>Create an Account!</h1>
		<?php
		echo form_open('home/create_member');
		echo form_input('username', set_value('username', 'Username'));
		echo form_password('password', '', 'placeholder="Password" class="password"');
		echo form_password('password_confirm', '', 'placeholder="Confirm Password" class="password"');
		echo form_submit('submit', 'Create Account');
		echo form_close();
		?>
		<?php echo validation_errors('<p class="error">'); ?>
</div>