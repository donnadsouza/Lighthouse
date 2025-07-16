<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Contact US');
	outputBannerNavigation('Contact US');
?>
	
	<!--Heading-->
	<section id="newsletter">
		<div class="container">
			<h1>Contact Us</h1>
		</div>
	</section>

	<!--Contact Us section-->
	<section id="main1">
		<div class="container">
			<article id="center-col">
				<br>
				<form class="info" action="" method=POST>
					<div>
						<label>Name</label><br>
						<input type="text" name="Name" placeholder="Name">
					</div>
					<div>
						<label>Email</label><br>
						<input type="text" name="Email" placeholder="Email Address">
					</div>
					<div>
						<label>Phone</label><br>
						<input type="text" name="Phone" placeholder="Phone No..">
					</div>
					<div>
						<label>Subject</label><br>
						<input type="text" name="Subject" placeholder="Subject">
					</div>
					<div>
						<label>Message</label><br>
						<textarea name="Message" placeholder="Message"></textarea>
					</div>
					<button class="button_1" type="submit" value="Cu">Send</button>
				</form>
			</article>

			<!--Information section-->
			<aside id="side-col">
				<div class="shade">
					<h3>Information</h3>
					<p>Light House - Dubai - U.A.E<br><strong>Tel:</strong> +971 0000 0000<br><strong>Fax:</strong> +971 0000 0000<br> Email: sales@lighthouse.com</p>
				</div>
			</aside>
		</div>
	</section>

<?php
	//Output the footer
	outputFooter();
?>
