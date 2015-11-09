<?php

mail('email', 'subject', 'message');



ini_set('display_errors', 'On');

// process the form
// if form was submited
if(isset($_POST['submit']))
{

	if( 
		!empty($_POST['first_name']) &&
		!empty($_POST['last_name']) &&
		!empty($_POST['email']) &&
		!empty($_POST['message']))
	{
		// set var
		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$email      = $_POST['email'];
		$subject	= $_POST['subject'];
		$message    = $_POST['message'];
		
		$admin_email = 'adorkableecarol@gmail.com';

		// prep the message
		$new_message = '';
		$new_message .= '<p>NAME: '.$first_name.' '.$last_name.'</p>';
		$new_message .= '<p>EMAIL:'.$email.'</p>';
		$new_message .= '<p>MESSAGE:'.$message.'</p>';

		// set config for mail and send
		// http://www.w3schools.com/php/func_mail_mail.asp
		if (is_page('advertise-with-us')){
			$success = mail($email, 'Homemade.com Ad Form - Completed', $new_message);
		} else {
			$success = mail($email, $subject, $new_message);
		}

		if($success == 1){
			// return success
			echo '<div class="alert alert-success">Thanks for contacting us, '.$first_name.'. We will be in touch shortly!</div>';
		} else {
			echo 'Error';
		}
	} else {
		// something happned
		echo '<div class="alert alert-danger">Please fill out all fields.</div>';
	}
}
?>

	<div class="col-xs-12">
		<h3 class="pink">
			<?php if (is_page('advertise-with-us')){
					echo 'Ad Inquiry Form';
				} else {
					echo 'Contact Form';
				}?>
		</h3>
		<p>Please fill out all the fields.</p>
		<form role="form" action="" method="POST">
		  
		  <div class="form-group">
		    <label for="first_name">First Name</label>
		    <input type="text" class="form-control" id="first_name" name="first_name">
		  </div>
		  
		  <div class="form-group">
		    <label for="last_name">Last Name</label>
		    <input type="text" class="form-control" id="last_name" name="last_name">
		  </div>

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>

		  <?php 
		  
			if (!is_page('advertise-with-us')){
				echo '
					<div class="form-group">
			    		<label for="subject">Subject</label>
			    		<input type="text" class="form-control" id="subject" name="subject">
			  		</div>';
			}
		  ?>

		  <div class="form-group">
		    <label for="message">Message</label>
		    <textarea class="form-control" id="message" name="message" rows="10"></textarea>
		  </div>

		  <div class="note">
		  	<p>By clicking “Submit,” you agree that we may collect and store the information you submit in order to enable us to contact you now or in the future. In addition, you agree to the Handmade Privacy Policy, the full text of which is available through the link below.
		  	</p>
		  </div>

		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>






