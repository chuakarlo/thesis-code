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
			
			foreach ($users as $object) {
				echo $object->firstname . '\'s email address is ' . $object->email . '<br/>';
			}
		?>
	</div>
</div>

</body>
</html>

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
			echo '<h3>element()</h3>';
			$ci_array = array('name' => 'CodeIgniter', 'size' => '3.9nb', 'lang' => 'en');
			
			echo element('name', $ci_array) . '<br/>';
			
			echo element('url', $ci_array) . 'echoing NULL echoes empty string...<br/>';
			
			echo element('url', $ci_array, 'not there');
			
			echo '<h3>random_element()</h3>';
			
			$cards = array(9, 10,
							"Jack", "Queen",
							"King", "Ace");
			
			echo random_element($cards) . '</br>';
			
			echo '<h3>elements()</h3>';
			
			$new_array = elements(array('name', 'size', 'language'), $ci_array);
			
			print_r($new_array);
			
			$value = $new_array['language'] ? 'returned true' : 'returned false';
			echo '<br/>' . $value . '<br/>';
			
			foreach ($firstnames as $object) {
				echo $object->firstname . '<br/>';
			}
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>