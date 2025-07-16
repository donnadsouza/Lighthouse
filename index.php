<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Home');
	outputBannerNavigation('Home');
?>
	<!--Welcome section-->
	<section id="showcase">
		<div class="container">
			<h1>Welcome to <span class="highlight">Light House</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at felis placerat, posuere metus sit amet, semper nisl. Etiam finibus lacus ut risus dictum ultricies. Fusce quam metus, malesuada et luctus sed, mollis ut arcu. Sed quis massa pellentesque, ornare tortor quis, bibendum risus. Ut vestibulum aliquet tortor et blandit. Mauris consequat massa eget leo varius laoreet et quis erat. Phasellus sed arcu ex. Fusce eleifend pharetra dolor eget maximus.</p>
		</div>
	</section>

	<!--Newsletter section-->
	<section id="newsletter">
		<div class="container">
			<h1>Subscribe to Our Newsletter</h1>
			<form action="" method=POST>
				<input type="email" name="Email" placeholder="Enter Email...">
				<button type="submit" class="button_1" value="mail">Subscribe</button>
			</form>

		</div>
	</section>

	<!--Product types section-->
	<section id="boxes">
		<div class="container">
			<div class="box">
				<img src="img/logo2.png">
				<h3>LED Lights</h3>
				<p> Integer nibh elit, placerat id augue eget, mattis laoreet ante. Nam venenatis egestas leo, vehicula convallis ligula.</p>
			</div>
			<div class="box">
				<img src="img/l3.png">
				<h3>Conventional Lights</h3>
				<p> Integer nibh elit, placerat id augue eget, mattis laoreet ante. Nam venenatis egestas leo, vehicula convallis ligula.</p>
			</div>
			<div class="box">
				<img src="img/logo1.png">
				<h3>Lamps</h3>
				<p> Integer nibh elit, placerat id augue eget, mattis laoreet ante. Nam venenatis egestas leo, vehicula convallis ligula.</p>
			</div>
		</div>
	</section>

<?php
	//Output the footer
	outputFooter();
?>
