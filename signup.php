<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Signup/Login');
	outputBannerNavigation('Signup/Login');
?>
	<div id="form">
	<!--Refrence with the help of bootstrap and couple of youtube tutorials-->
	 <div class="sub-container">
		 <div class="row">
						<div class="col-md-6 col-md-offset-3">
							 <div class="panel panel-login">
									<div class="panel-heading">
										 <div class="row">
												<div class="col-xs-6">
													 <a href="#" class="active" id="login-form-link">Login</a>
												</div>
												<div class="col-xs-6">
													 <a href="#" id="register-form-link">Sign up</a>
												</div>
										 </div>
										 <hr>
									</div>
									<div class="panel-body">
										 <div class="row">
												<div class="col-lg-12">
													 <form id="login-form"  method="post" role="form" style="display: block;">
															<div class="form-group">
																 <input type="text" name="username1" id="username1" tabindex="1" class="form-control" placeholder="Username" value="">
															</div>
															<div class="form-group">
																 <input type="password" name="password1" id="password1" tabindex="2" class="form-control" placeholder="Password">
															</div>
															<div class="form-group text-center">
																 <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
																 <label for="remember"> Remember Me</label>
															</div>
															<div class="form-group">
																 <div class="row">
																		<div class="col-sm-6 col-sm-offset-3">
																			 <input  tabindex="4" class="form-control btn btn-login" value="Log In" onclick="login()">
																		</div>
																 </div>
															</div> 
															<p id="ErrorMessages"></p> <!--Displaying error messages-->
													 </form>
													 <form id="register-form" method="post" role="form" style="display: none;" action="registration.php">
															<div class="form-group">
																 <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
															</div>
															<div class="form-group">
																 <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
															</div>
															<div class="form-group">
																 <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
															</div>
															<div class="form-group">
																 <div class="row">
																		<div class="col-sm-6 col-sm-offset-3">
																			 <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" onclick="register()">
																		</div>
																 </div>
															</div>
															<p id="ServerResponse"> </p> <!--Displaying server response-->
													 </form>
												</div>
										 </div>
									</div>
							 </div>
						</div>
				 </div>
			</div> </div>
			<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<script>
				 $(function() {

				 $('#login-form-link').click(function(e) {
				 $("#login-form").delay(100).fadeIn(100);
				 $("#register-form").fadeOut(100);
				 $('#register-form-link').removeClass('active');
				 $(this).addClass('active');
				 e.preventDefault();
				 });
				 $('#register-form-link').click(function(e) {
				 $("#register-form").delay(100).fadeIn(100);
				 $("#login-form").fadeOut(100);
				 $('#login-form-link').removeClass('active');
				 $(this).addClass('active');
				 e.preventDefault();
				 });

				 });
			</script>
			<script>
            function register(){
                //Create request object 
                var request = new XMLHttpRequest();
                //Create event handler that specifies what should happen when server responds
                request.onload = function(){
                    //Check HTTP status code
                    if(request.status === 200){
                        //Get data from server
                        var responseData = request.responseText;

                        //Add data to page
                        document.getElementById("ServerResponse").innerHTML = responseData;
                    }
                    else{
                        alert("Error communicating with server: " + request.status);
					};

					//Set up request with HTTP method and URL 
					request.open("POST", "registration.php");
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					
					//Extract registration data
					var usrName = document.getElementById("name").value;
					var usrAddress = document.getElementById("email").value;
					var usrPassword = document.getElementById("password").value;

					//Send request
					request.send("name=" + usrName + "&email=" + usrAddress + "&password=" + usrPassword);
				}
			}
        </script>
		<script src="logout.js"> </script>
		<script>
			//Attempts to log in user to server
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
				var usrEmail = document.getElementById("username1").value;
				var usrPassword = document.getElementById("password1").value;
				
				//Set up and send request
				request.open("POST", "user_login.php");
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("username=" + usrEmail + "&password=" + usrPassword);
				alert("Welcome " + usrEmail + "!");

				location.href = "shop.php";

			}
	</script>
		
<?php
	//Output the footer
	outputFooter();
?>
