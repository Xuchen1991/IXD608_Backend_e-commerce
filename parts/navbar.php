<?
include_once "lib/php/functions.php";
?>

<input type="checkbox" id="menu" class="hidden">


<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1 class="store-name"><a href="index.php">My Computer Accessories Store</a></h1>
		</div>

	<dix class="flex-stretch"></dix>
	<div class="flex-none menu-button">
		<label for="menu">&equiv;</label>
	</div>
	<div class="flex-none nav nav-flex">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product_list.php">Product List</a></li>
			<li><a href="about.php">About Us</a></li>
			<!-- <li><a href="cart.php">Cart</a></li> -->
			<li>
				<a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge() ?></span>
				</a>
			</li>
		</ul>
	</div>

	</div>
</header>