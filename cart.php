<?php include 'inc/header.php'; ?>

<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
									<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div>
		   <div class="login">
		   	   <span><a href="login.html">Login</a></span>
		   </div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.html">Home</a></li>
	  <li><a href="products.html">Products</a> </li>
	  <li><a href="topbrands.html">Top Brands</a></li>
	  <li><a href="cart.html">Cart</a></li>
	  <li><a href="contact.html">Contact</a> </li>
	  <div class="clear"></div>
	</ul>
</div>

 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Cart</h2>
						<table class="tblone">
							<tr>
								<th width="20%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="25%">Quantity</th>
								<th width="20%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							<tr>
								<td>Product Title</td>
								<td><img src="images/new-pic3.jpg" alt=""/></td>
								<td>Tk. 20000</td>
								<td>
									<form action="" method="post">
										<input type="number" name="" value="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. 40000</td>
								<td><a href="">X</a></td>
							</tr>
							
							<tr>
								<td>Product Title</td>
								<td><img src="images/new-pic3.jpg" alt=""/></td>
								<td>Tk. 20000</td>
								<td>
									<form action="" method="post">
										<input type="number" name="" value="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. 40000</td>
								<td><a href="">X</a></td>
							</tr>
							
							<tr>
								<td>Product Title</td>
								<td><img src="images/new-pic3.jpg" alt=""/></td>
								<td>Tk. 20000</td>
								<td>
									<form action="" method="post">
										<input type="number" name="" value="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. 40000</td>
								<td><a href="">X</a></td>
							</tr>
							<tr>
								<td>Product Title</td>
								<td><img src="images/new-pic3.jpg" alt=""/></td>
								<td>Tk. 20000</td>
								<td>
									<form action="" method="post">
										<input type="number" name="" value="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. 40000</td>
								<td><a href="">X</a></td>
							</tr>
							
							<tr>
								<td>Product Title</td>
								<td><img src="images/new-pic3.jpg" alt=""/></td>
								<td>Tk. 20000</td>
								<td>
									<form action="" method="post">
										<input type="number" name="" value="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. 40000</td>
								<td><a href="">X</a></td>
							</tr>
							
						</table>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Sub Total : </th>
								<td>TK. 210000</td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>TK. 31500</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td>TK. 241500 </td>
							</tr>
					   </table>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.html"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="login.html"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
   <?php include 'inc/footer.php'; ?>