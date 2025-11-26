<?php

//Output Header
function outputHeader($title){
	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<html>';
	echo '<head>';
	echo '<meta charset="utf-8">';
	echo '<meta name="viewport" content="width=device-width">';
	echo '<meta name="description" content="affordable chandeliers">';
	echo '<meta name="keywords" content="Lighting chandelier, LED Lighting, Conventional Lighting">';
	echo '<meta name="author">';
	echo '<title>' . $title . '</title>';
	echo '<link rel="stylesheet" type="text/css" href="css/s.css">';
	echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
	echo '</head>';
	echo '<body>';
}

//Output Navigation
function outputBannerNavigation($pageName){
	echo '<header>';
	echo '<div class="container">';
	echo '<div id="Logo">';
	echo '<h1><span class="highlight">Light</span> House</h1>';
	echo '</div>';
	echo '<nav>';
	echo '<ul>';
	echo '<li><a href="index.php">Home</a></li>';
	echo '<li ><a href="shop.php">Shop</a></li>';
	echo '<li ><a href="profile.php">Update Profile</a></li>';
	echo '<li><a id ="LoginPara" href="signup.php">Login/Signup</a><a id ="LoginPara"></a></li>';
	echo '</ul>';
	echo '</nav>';
	echo '</div>';
	echo '</header>';
}

//Output Footer
function outputFooter(){
	echo '<footer>';
	echo '<nav>';
	echo '<ul>';
	echo '<li><a href="about.php">About US</a></li>';
	echo '<li><a href="contact.php">Contact US</a></li>';
	echo '<li><a href="login.php">CMS</a></li>';
	echo '</ul>';
	echo '</nav>';
	echo '<p>Light House, Copyright &copy; 2018</p>';
	echo '</footer>';
	echo '</body>';
	echo '</html>';
}

 ?>
