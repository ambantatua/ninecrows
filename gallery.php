<!--
Filename: gallery.php
Author: Amber Bantatua, Micki Jury
Date created: 28 June 2013
Last updated: 13 July 2014
Description: Nine Crows Rehearsal & Recording Studio Gallery Page
-->

		<?php 
			$pageTitle = 'Gallery';
			$menuCSS = 5;
			
			include 'includes/header.php';
		?>


		<?php
			include 'includes/nav.php';
		?>
	<div class="heading">GALLERY</div>
	<section class="greyBox">
		<article class="galleryContainer">
			<div class="galleryBox">
				<div id="imageOne"><img src="images/image1.jpg" alt=""></div>
					<p class="imageDesc">Mezzanine Level</p>
			</div>
			<div class="galleryBox">
				<div id="imageTwo"><img src="images/image2.jpg" alt=""></div>
					<p class="imageDesc">Control Room</p>
			</div>
			<div class="galleryBox">
				<div id="imageThree"><img src="images/image3.jpg" alt=""></div>
					<p class="imageDesc">Lower Level</p>
			</div>
		</article> <!-- end of galleryContainer -->
		
		<article class="galleryContainer">
			<div class="galleryBoxTwo">
				<div id="imageFour"><img src="images/image4.jpg" alt=""></div>
					<p class="imageDesc">Chill Out Zone</p>
			</div>
			<div class="galleryBoxTwo">
				<div id="imageFive"><img src="images/image5.jpg" alt=""></div>
					<p class="imageDesc">Control Room</p>
			</div>
			<div class="galleryBoxTwo">
				<div id="imageSix"><img src="images/image6.jpg" alt=""></div>
					<p class="imageDesc">Kitchen</p>
			</div>
		</article> <!-- end of galleryContainer -->
		
	</section> <!-- end of greyBox -->
		<br>
	
		<?php
			include 'includes/footer.html';
		?>