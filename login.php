<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Admin');
	
?>
	<!--Logo Section-->
	<header>
		<div class="container">
			<div id="Logo">
				<h1><span class="highlight">Light</span> House</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Back to website</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<!--Admin heading-->
	<section id="newsletter">
		<div class="container">
			<h1>Admin Page</h1>
		</div>
	</section>
	
	<section id="main1">
		<div class="container">
		
			<!--Staff Login section-->
			<article>
				<h1>Staff Login</h1>
					<form class="info" action="viewcms.php" method=POST>
						<div>
							<label>Username</label><br>
							<input type="text" name="Username" placeholder="Username">
						</div> 
						<div>
							<label>Password</label><br>
							<input type="Password" name="Password" placeholder="Password">
						</div> <br>
						<button class="button_1" type="submit" value="Login">Login</button>
					</form>							
			</article>
		</div>
	</section>
		
		
<?php
	//Output the footer
	outputFooter();
?>