<?php
include "header.php";
?>
<div class="wrapper">
	<center style="font-size: 55px" id="#contact"><h1><b>Contact Us</b></h1></center>
	<center style="margin-top: 100px; font-size:18px;"><p>You can contact us by filling out this form</p></center>

	<center class="cont"><form method="POST">
	<input type="name" name="fname" placeholder="Enter your First name here" class="fname" required="">
	<input type="name" name="lname" placeholder="Enter your last name here"class="lname" required="">
	<input type="email" name="email" placeholder="Enter you email here" class="email" required="">
	<input type="text" name="subject" placeholder="Enter the Subject of the message here" class="subj" required="">
	<textarea  style="height: 100px;" type="textarea" name="message" placeholder="Enter the message here" class="txta" required=""></textarea>
	<button herf="popup1" type="Submit" name="sub" class="subb">Send</button>
	</form></center>
	<?php
	if (!isset($_POST['sub'])) {
	?>
	<style>
		.overlay {
			visibility: hidden;
		}
	</style>
	<?php
	} else { 
		include 'contactphp.php';
	}
	?>
	<div class="overlay">
	  <div class="popup">
	  	<form method="POST" class="popupp1">
	    <button class="close" name="close">&times;</button>
		</form>
	    <div class="content">
	    	<?php
	    		echo $messagecon;
	    	?>
	    </div>
	  </div>
	</div>
</div>
<?php
include "footer.php";
?>

