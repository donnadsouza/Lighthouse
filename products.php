<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Products');
	outputBannerNavigation('Products');
?>
	<!--Search bar-->
	<section id="newsletter">
		<div class="container">
			<h1>Seach From Our Collection</h1>
			<form action="" method=post>
				<input type="text" name="search" placeholder="Search anything or maybe everything..">
				<input type="submit" class="button_1">
			</form>
		</div>
	</section>

	<!--Products section-->
	<div id="boxes">
		<div class="container">
			<div class="box">
				<img src="img/3.jpg"></a>
				<br>
				<b> Meganti </b>
				<br>
				<b> $200.00 </b> 
				<br>
				<button class="button_1" type="submit" value="Add">Add To Cart</button>
			</div>
			<div class="box">
				<img src="img/4.jpg"></a>
				<br>
				<b> Princepesa </b>
				<br>
				<b> $150.00 </b>
				<br>
				<button class="button_1" type="submit" value="Add">Add To Cart</button>
			</div>
			<div class="box">
				<img src="img/5.jpg"></a>
				<br>
				<b> Zapinza </b>
				<br>
				<b> $200.00 </b>
				<br>
				<button class="button_1" type="submit" value="Add">Add To Cart</button>
			</div>
			<div class="box">
				<img src="img/6.jpg"></a>
				<br>
				<b> Bambi </b>
				<br>
				<b> $100.00 </b>
				<br>
				<button class="button_1" type="submit" value="Add">Add To Cart</button>
			</div>
			<div class="box">
				<img src="img/7.jpg"></a>
				<br>
				<b> Asavi </b>
				<br>
				<b> $250.00 </b>
				<br>
				<button class="button_1" type="submit" value="Add">Add To Cart</button>
			</div>
		</div>
	</div>
		
<?php
	//Output the footer
	outputFooter();
?>
