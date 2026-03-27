<!DOCTYPE html>
<html lang="en-GB">
<head>
	<!--fixed validation issues here-->
	<meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="ROBOTS" content="NOINDEX,NOFOLLOW"> 
	<title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- below files are used for the carosels using jquery and slick plugin-->
	<script src="javascript/jquery-3.7.1.min.js"></script>
</head>
<body>

<?php 
require('partials/cookie.php');
require('partials/sidenav.php'); 

?>

<div class="website">
<!-- header-->
<div class="head">
<?php 
require('partials/header.php');
require('partials/nav.php');

?>

</div>

<div class="middle">
		<div class="breadcrumb-title">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><span class="page-title">Our Offices</span></li>
					</ul>
				</div>
		</div>
		<div class="section2">
			<div class="page-header">
				<div class="container">
					<h1>Our Offices</h1>
				</div>
			</div>
		</div>
	<div class="container">
		<div class="office-container">
			<div class="office-row">
				<div class="office-card">
					<div class="office-box">
						<div class=office-image>
							<a href="#"><img src="images/cambridge.jpg" alt="Cambridge Office"></a>
						</div>
						<div class=office-content>
							<h2><a href="#">Cmabridge Office</a></h2>
							<p>
								Unit 1.31,<br>
								St John's Innovation Centre,<br>
								Cowley Road, Milton,<br>
								Cambridge,<br>
								CB4 0WS 
							</p>
							<div class="tel">
								<a href="tel:#">01223 37 57 72</a>
							</div>
							<div class="office-button-box">
								<a class="office-button" href="#">View More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="office-card">
					<div class="office-box">
						<div class=office-image>
							<a href="#"><img src="images/wymondham.jpg" alt="Wymondham Office"></a>
						</div>
						<div class=office-content>
							<h2><a href="#">Wymondham Office</a></h2>
							<p>
								Unit 15,<br>
								Penfold Drive,<br>
								Gateway 11 Bussiness Park,<br>
								Wymondham, Norfolk,<br>
								NR18 0WZ 
							</p>
							<div class="tel">
								<a href="tel:#">01603 70 40 20</a>
							</div>
							<div class="office-button-box">
								<a class="office-button" href="#">View More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="office-card">
					<div class="office-box">
						<div class=office-image>
							<a href="#"><img src="images/yarmouth-2.jpg" alt="Great Yarmouth Office"></a>
						</div>
						<div class=office-content>
							<h2><a href="#">Great Yarmouth Office</a></h2>
							<p>
								Suite F23,<br>
								Beacon Innvoation Centre,<br>
								Beacon Park, Gorleston,<br>
								Great Yarmouth, Norfolk,<br>
								NR31 7RA
							</p>
							<div class="tel">
								<a href="tel:#">01493 60 32 04</a>
							</div>
							<div class="office-button-box">
								<a class="office-button" href="#">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-box">
			<div class="section3">
				<div class="contact-row">
					<div class="contact-details-box">
						<div class="CDetails">
							<p><strong>Email us on:</strong><br></p>
							<p><a href="mailto:#">Sales@netmatters.com</a></p>
							<p><strong>Speak to Sales on:</strong><br></p>
							<p><a href="tel:#">01603 515007</a></p>
							<p><strong>Bussiness hours:</strong></p>
							<p><strong>Monday - Friday 07:00 - 18:00</strong></p>
						</div>
						<div class="out-of-hours">
							<h4><a href="#">Out of Hours IT Support<em></em></a></h4>
							<div class="OOH-Details">
								<p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
								<p><strong>Monday - Friday 18:00 - 22:00</strong><strong>Saturday 08:00 - 16:00</strong>
								<br>
								<strong>Sunday 10:00 - 18:00</strong></p>
								<p>
									To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail.
									A technician will contact you on the number provided within 45 minutes of your call.
								</p>
							</div>
						</div>
					</div>
					<div class="contact-form-box">
						<form id="contact-form" method="POST" accept-charset="UTF-8" novalidate="novalidate">
							<div class="form-wrapper">
								<div class="field-wrapper">
									<label class="required" for="name">Your Name</label>
									<input id="name" class="form-field" name="name" type="text" value required>
								</div>
								<div class="field-wrapper">
									<label class for="company">Company Name</label>
									<input id="company" class="form-field" name="company" type="text" value>
								</div>
								<div class="field-wrapper">
									<label class="required" for="email">Your Email</label>
									<input id="email" class="form-feild" name="email" type="email" value required>
								</div>
								<div class="field-wrapper">
									<label class="required" for="telephone">Your Telephone Number</label>
									<input id="telephone" class="formfield" name="telephone" type="telephone" value required>
								</div>
							</div>
							<div class="form-wrapper-box">
								<label class="required" for="message">Message</label>
								<textarea id="massge" class="form-textarea" name="message"  cols="50" rows="10" required></textarea>
							</div>
							<div class="marketing-approval-box">
								<label class="checkbox">
									<span class="approval-box">
										<span class="checkbox-container">
											<span class="tickbox-button">
												<span class="ticked"></span>
												<input name="marketing_preference" type="checkbox" value="1">
											</span>
										</span>
										<span class="approval-message">
											 Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we keep your data safe. 
										</span>
									</span>
								</label>
							</div>
							<div class="form-button-box">
								<button class="form-submit-button" type="submit">Send Enquiry</button>
								<small>
									<span class="required-key">*</span>Feilds Required
								</small>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require('partials/footer.php');

?>
</div>

</div>

<?php require('partials/stickyheader.php');

?>

<!--javascript files thaqt load after the page has loaded-->
<script defer src="javascript/cookie.js"></script>
<script defer src="javascript/side-menu.js"></script>
<script defer src="javascript/sticky-head.js"></script>
<script defer src="javascript/form.js"></script>
<script defer src="javascript/ooh.js"></script>
</body>
</html>