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
		echo validation_errors();
		echo form_fieldset('Email');
		
		$hidden = array('order_time' => date("Y-m-d H:i:s"),
						'current_url' => current_url());
		echo form_open('', '', $hidden);
		
		$data = array(
					'name' 		  => 'email',
					'id' 		  => 'email',
					'value' 	  => set_value('email'),
					'placeholder' => 'Type your email here',
					'maxlength'   => '100',
					'size'		  => '50',
					'style'	      => 'width:150px',
				);
		$js = 'onClick="alert(\'Annoyed yet?\')"';
		echo form_input($data, '', $js);
		echo form_fieldset_close();
		echo br();
		echo form_fieldset('Choose your shirt size (dropdown)');
		$options = array(
						'small'  => 'Small Shirt',
						'medium' => 'Medium Shirt',
						'large'  => 'Large Shirt',
						'xlarge' => 'Extra Large Shirt',
					);
		
		echo form_dropdown('shirt_size', $options, 'large');
		echo form_fieldset_close();
		echo br();
		echo form_fieldset('What stripes do you want on your shirt? (multi-select)');
		$preselected = array('black', 'blue');
		$stripes = array(
						'black' => 'Black Stripes',
						'red'   => 'Red Stripes',
						'blue'  => 'Blue Stripes',
						'green' => 'Green Stripes',
					);
		
		echo form_dropdown('stripe_choice[]', $stripes, $preselected);
		echo form_fieldset_close();
		echo br();
		echo form_fieldset('Terms and Conditions');
		echo form_label('Do you agree to our terms and conditions? ', 'terms');
		echo form_checkbox('terms', 'accept', TRUE);
		echo br();
		echo form_label('Do you sign your life away?', 'sign_life');
		$data = array(
					'name'    => 'sign_life',
					'id' 	  => 'sign_life',
					'value'   => 'accept',
					'checked' => FALSE,
				);
		echo form_checkbox($data);
		echo form_fieldset_close();
		echo br();
		echo form_fieldset('Do you want free shipping?');
		echo form_label('Yes', 'free_shipping');
		echo form_radio('free_shipping', '1');
		echo form_label('No', 'free_shipping');
		echo form_radio('free_shipping', '0', TRUE);
		echo form_fieldset_close();
		echo br();
		echo form_submit('mysubmit', 'Submit!');
		echo form_close();
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>