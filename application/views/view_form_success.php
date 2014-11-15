<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

</head>
<body>

<div id="container">
	<h2><?php echo $page_header; ?></h2>

	<div id="body">
		<?php
			print_r($_POST);
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>