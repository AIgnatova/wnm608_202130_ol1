<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	?>
<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
             <h1>Innerbloom</h1>
         </div>
         <div class="flex-stretch"></div>

         <div class="flex-none menu-button">
         	<label for="menu">&equiv;</label>
         </div>

         	<nav class="nav nav-flex flex-none">
             <ul>
                <li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Shop</a></li>
					<li><a href="inspiration.php">Get Inspired</a></li>
					<li><a href="cart.php">

					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
            </ul>
        </nav>
    </div>
    </header>


    <!-- 
	
 Logo area
		<div class="container display-flex navbar">
			<div class="flex-none">
				<h1>Innerbloom</h1>
			</div>





 Links area 
			<div class="flex-stretch ">
			<nav class="nav nav-flex flex-none ">
				li*3>a[href=#]>{Link $}
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Shop</a></li>
					<li><a href="inspiration.php">Get Inspired</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</div>
	</header>  -->
