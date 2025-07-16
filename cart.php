<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Cart');
	outputBannerNavigation('Cart');	
?>
	
	<!--Admin heading-->
	<section id="newsletter">
		<div class="container">
			<h1>Shopping Cart</h1>
		</div>
	</section>
	
		<section id="main1">
			<div class="container">
			
			<!--Selection bar-->
				<aside id="side-col">
					<div class="shade">
					<h3>What do you want to do?</h3>
						<button class="button_1" type="submit" value="Cs" onclick="location.href='products.php';">Continue Shopping</button> 
						<p> OR </p>
						<button class="button_1" type="submit" value="Co">Checkout</button>
					</div>
				</aside>
			
			<!--Cart section-->
				<article id="center-col">
					<table>
							<tr>
								<th>Product</th>
								<th>Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
							</tr>
							<tr> <!--Dummy data for demonstration purpose-->
								<td><img src="/img/4.jpg"></td>
								<td>Princepesa</td>
								<td>150.00</td>
								<td>2</td>
								<td>300.00</td>
							</tr>
							<tr>
								<td><img src="/img/5.jpg"></td>
								<td>Zapinza</td>
								<td>200.00 </td>
								<td>1</td>
								<td>200.00</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><b>Subtotal</b></td>
								<td><b>500.00</b></td>
							</tr>
						</table>			
				</article>
			</div>
		</section>

<?php
	//Output the footer
	outputFooter();
?>