<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | About US');
	outputBannerNavigation('About US');
?>
	<script src="logout.js"></script>

	<!--Search bar-->
	<section id="newsletter">
		<div class="container">
			<h1>Update Profile</h1>
		</div>
	</section>
	
	 <!--Products section-->
	<section id="main1">
		<div class="container">
			<?php
				session_start(); //Start session management

				if( array_key_exists("loggedInUserEmail", $_SESSION) ){

					$mongoClient = new MongoClient(); //Connect to database

					$db = $mongoClient->Lighthouse; //Select a database

					 //Save the product in the database - it will overwrite the data for the product with this ID
					$cursor = $db->User->find();

					//Output results onto page
					if($cursor->count() == 1){
						foreach ($cursor as $cust){
							echo '<h1>Update Profile</h1>';
							echo '<form class="info" action="update_profile.php" method=POST>';
							echo '<div>';
							echo '<label>Username</label><br>';
							echo '<input type="text" name="username" value = "'. $cust['username'] . '" placeholder="Username" readonly>';
							echo '</div>';
							echo '<div>';
							echo '<label>Email</label><br>';
							echo '<input type="text" name="email" value = "'. $cust['email'] . '" placeholder="Email Address">';
							echo '</div>';
							echo '<div>';
							echo '<label>Password</label><br>';
							echo '<input type="password" name="password" value = "'. $cust['password'] . '" placeholder="Password">';
							echo '</div>';
							echo '<input type="hidden" name="id" value="' . $cust['_id'] . '" required>';
							echo '<br>';
							echo '<button class="button_1" type="submit" value="up">Update Profile</button>';
							echo '</form>';
						}
					}

					//Close the connection
					$mongoClient->close();	
					}
			    else{
			    	echo '<script langauge="javascript">';
				  	echo 'alert("Error Updating Product");';
				  	echo 'window.location.href=("signup.php");';
				  	echo '</script>';
			    }
			?>
		</div> 
	</section>	

<?php				
//Output the footer
outputFooter();
?>