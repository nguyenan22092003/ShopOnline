 <?php
	 include "db_conn.php";
	 include "login.php";
	 include "file_img.php";
	 include "utils.php";
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maverick Dresses | Ecommerce Website Design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>
<body>
	<!-- -----------header------------- -->
	<div class="header">
	<div class="container">

		<div class="navbar">
			<div class="logo">
				<a href="store.php"><img src="<?php echo $base_url ?>logo.png" width="125px"></a>
			</div>
            <nav>
				<ul id="MenuItems">
					<li><a href="store.php">Home</a></li>
					<li><a href="product.php">Product</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="account.php">Account</a></li>
				</ul>
			</nav>
			<a href="cart.php"><img src="<?php echo $base_url ?>cart.png" width="30px" height="30px"></a>
			<img src="<?php echo $base_url ?>menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	</div>
	<!-- ---------------account-page------------- -->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="<?php echo $base_url ?>nguoimau.png" width="100%">
					
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span >Login</span>
							<hr id="Indicator">
						</div>
						<form id="LoginForm" method="POST" >
							<h2>LOGIN</h2>
							<?php if(isset($_GET['error'])){ ?>
							<p class="error"><?php echo $_GET['error'];?> </p>
							<?php } ?>
							<input type="text" placeholder="UserName" name="uname" minlength="5" maxlength="32">
							<input type="password" placeholder="Password" name="password" minlength="8">
							<button type="submit" class="btn">Login</button>
							<a href="">Forgot password?</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ------------------forter-------------- -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Dowload Our App</h3>
					<p>Download App for Android and ios mobile phone</p>
					<div class="app-logo">
						<img src="<?php echo"$base_url";?>app1.png">
						<img src="<?php echo"$base_url";?>app2.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="<?php echo"$base_url";?>logo.png">
					<p>This page was created to sell clothes to everyone in need!</p>
				</div>
				<div class="footer-col-3">
					<h3>Location</h3>
					<ul>
						<li>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9244038028505!2d105.81684051485445!3d21.035710585994636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1658240867390!5m2!1svi!2s"  style="border:0;"  width="200px" height="200px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class='iframe_1'></iframe>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9244038028505!2d105.81684051485445!3d21.035710585994636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1658240867390!5m2!1svi!2s"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe_2"></iframe>
						</li>
						
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow Us</h3>
					<ul>
						<a href="https://www.facebook.com/nguyenan22092003/"><li>Facebook</li></a>
						<a href="https://twitter.com/NguynVn38666923"><li>Twitter</li></a>
						<a href="https://www.instagram.com/annn_2293/"><li>Instagram</li></a>
						<a href="https://www.youtube.com/channel/UCbaeTRnErP_lyqpdOR50d_w"><li>YouTube</li></a>
					</ul>
				</div>
			</div>
		</div>
	</div> 
	<!-- -------js for toggle Menu-------- -->
	<script>
		var MenuItems = document.getElementById("MenuItems");

		MenuItems.style.maxHeight = "0px";

		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
				{
				MenuItems.style.maxHeight = "200px";
				}
			else
				{
				MenuItems.style.maxHeight = "0px";
				}
		};
	</script>
		
</body>
</html>
