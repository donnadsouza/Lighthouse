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
					<form class="info" action="admin_login.php" method=POST>
						<div>
							<label>Username</label><br>
							<input type="text" name="Username"  id= "Username" placeholder="Username">
						</div>
						<div>
							<label>Password</label><br>
							<input type="Password" name="Password" id= "Password" placeholder="Password">
						</div> <br>
						<button class="button_1" type="submit" value="Login" onclick="login()">Login</button>
					</form>
			</article>
		</div>
	</section>
<script>
	function login(){
			//Create event handler that specifies what should happen when server responds
			request.onload = function(){
					//Check HTTP status code
					if(request.status === 200){
							//Get data from server
							var responseData = request.responseText;

							//Add data to page
							if(responseData === "ok"){
									document.getElementById("LoginPara").innerHTML = loggedInStr;
									document.getElementById("ErrorMessages").innerHTML = "";//Clear error messages
							}
							else{
									document.getElementById("ErrorMessages").innerHTML = request.responseText;
							}
					}
					else {
							alert("Error communicating with server");
					}
			}

			//Extract login data
			var usrUsername = document.getElementById("Username").value;
			var usrPassword = document.getElementById("Password").value;

			//Set up and send request
			request.open("POST", "admin_login.php");
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			request.send("Username=" + usrUsername + "&Password=" + usrPassword);
			alert("You are now logged in as " + usrUsername);
	}
</script>


<?php
	//Output the footer
	outputFooter();
?>
