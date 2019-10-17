<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	
<?php include("includes/toplinks.php"); ?>
  </head>
<body>
<div id="header">
	<?php  include("includes/header.php"); ?>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li class="active">Contact Us</li>
</ul>
	<hr class="soften">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>Contact Details</h4>
		<p>	GIFT UNIVERSITY<br/> GUJRANWALA, PAKISTAN
			<br/><br/>
			<b>MUHAMMAD LUQMAN</b>&nbsp;&nbsp;&nbsp;  13140010@gift.edu.pk<br/>
			﻿<b>WAQAS ISHAQ</b>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
			&nbsp;&nbsp; 13140024@gift.edu.pk<br/>
			<b>SHEHZAD ABBAS</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  13140031@gift.edu.pk<br/>
			<b>MUHAMMAD IMRAN</b> &nbsp; &nbsp;&nbsp;&nbsp;  13140035@gift.edu.pk
		</p>		
		<h5>Visit Our Website: <a href="http://luqmanportfolio.freesite.host/" style="color:grey;"> CoderChain</a></h5>
		</div>
			
		<div class="span4">
		
		</div>
		<div class="span4">
		<h4>Email Us</h4>
		<form class="form-horizontal" method="post" action="contact.php">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" name="name" class="input-xlarge" required />
           
          </div>
		   <div class="control-group">
           
              <input type="email" placeholder="email" name="email" class="input-xlarge" required />
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" name="subject" class="input-xlarge" required />
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" name="message" class="input-xlarge" required ></textarea>
           
          </div>

            <button class="btn btn-large" name="send_email" type="submit">Send Messages</button>

        </fieldset>
      </form>
<?php
if (isset($_POST['send_email'])) {
	$sender_name=$_POST['name'];
	$sender_email=$_POST['email'];
	$subject=$_POST['subject'];
	$mess=$_POST['message'];
	$to="13140010@gift.edu.pk";

	$message="Email From :".$sender_name."<br>".$mess;

	if ($sender_name=='' or $sender_email=='' or $subject=='' or $mess=='') {
		echo "<script>alert('Please fill the blank fields')</script>";
		exit();
	}

	mail($to, $subject, $message,$sender_email);

	$to_sender=$_POST['email'];
	$sub="Free Founder<br>";
	$mesg="Thank you for sending an email,we'll get you soon<br>";
	$from="13140010@gift.edu.pk";

	mail($to_sender, $sub, $mesg,$from);

	echo "<script>alert('Email send, get to you soon!')</script>";

	

}

?>
		</div>
	</div>
	<div class="row">
	<div class="span12">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3375.9753630532673!2d74.19024631458656!3d32.204894520244174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f29b5c34355cd%3A0x3b491b5bb56ee82a!2sGIFT+University!5e0!3m2!1sen!2s!4v1469274759092"
				 width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<?php include("includes/footer.php"); ?>
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<?php include("includes/bottomlinks.php"); ?>

</body>


</html>