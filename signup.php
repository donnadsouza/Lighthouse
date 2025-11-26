<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>

<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Signup/Login');
	outputBannerNavigation('Signup/Login');
?>

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
																			 <input  tabindex="4" class="form-control btn btn-login" value="Log In" onclick="">
																		</div>
																 </div>
															</div>
													 </form>
													 <form id="register-form" method="post" role="form" style="display: none;">
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
																 <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
															</div>
															<div class="form-group">
																 <div class="row">
																		<div class="col-sm-6 col-sm-offset-3">
																			 <input type="submit" onclick="" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
																		</div>
																 </div>
															</div>
													 </form>
												</div>
										 </div>
									</div>
							 </div>
						</div>
				 </div>
			</div>
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

						 function login(){
						 //login code here
				 var username = $('#username1').val();
				 var password = $('#password1').val();

				 alert(username+' hi i am the username login');
						 alert(password+' hi i am the password login');


						 }
						 function register(){
				 var email = $('#email').val();
				 var username = $('#username').val();
				 var confirmpassword =$('#confirm-password').val();


								 $.post("http://localhost/logintutorial/webservices/register.php",
				 {
						 password: confirmpassword,
						 email: email,
						 username: username
				 },
				 function(data, status){
						 alert("Data: " + data + "\nStatus: " + status);
				 });
						 }

			</script>

<?php
	//Output the footer
	outputFooter();
?>

