<!--
Filename: contact.php
Author: Amber Bantatua, Micki Jury
Date created: 28 June 2013
Last updated: 13 July 2014
Description: Nine Crows Rehearsal & Recording Studio Contact Page
-->

		<?php 
			$pageTitle = 'Contact';
			include 'includes/header.php';
		?>


		<?php
			include 'includes/nav.php';
		?>
	
	<div class="heading">CONTACT</div>
	
	<section class="greyBox">
		<article class="whiteBox">
	
			<div id="formOutside">
					<h3>Rehearsal & Recording Enquires:</h3>
			
			<div id="formInside">
			
			<p>Required fields are <strong>bold</strong></p>
			
				<form action="contactForm.php" method="post">
					<p><strong>Name:</strong> <input type="text" name="yourname" size="38"></p>
					<p><strong>Subject: </strong> <input type="text" name="subject" size="35" /></p>
					<p><strong>Email: </strong> <input type="text" name="email" size="38"></p>
				
					<p><strong>Type your enquiry here:</strong></p>
					<p>
						<textarea name="query" rows="8" cols="40">
						</textarea>
					</p>
					
					<p>How did you find us?
						<select name="how">
							<option value=""> -- Please select -- </option>
							<option>Google</option>
							<option>Yahoo</option>
							<option>Link from a website</option>
							<option>Word of mouth</option>
							<option>Other</option>
						</select>
					<p>
						<input type="submit" name="submit" value="Send">
						<input type="reset" value="Reset">
				</p>
				</form><!--end of form-->
			</div><!--end of formInside div-->
			</div><!--end of formOutside div-->
			
			<div id="addressInfo">
				<h3>Contact Info</h3>
				
				<p>Email Address: <a href="mailto:al@ninecrows.com.au">al@ninecrows.com.au</a></p>
				<p>Email Address: <a href="mailto:bookings@ninecrows.com.au">bookings@ninecrows.com.au</a></p>
				
				<div id="studioImage"></div>
				<br>
				<hr>	
				<h3>Operation hours</h3>
				<p class="pRateText">Available on request</p>
			</div><!--end of addressInfo div-->
	
	
		</article> <!-- end of whiteBox -->
	</section> <!-- end of greyBox -->
		<br>
	
		<?php
			include 'includes/footer.html';
		?>