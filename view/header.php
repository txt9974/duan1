<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.ansonika.com/allaia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 09:45:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Allaia Bootstrap eCommerce Template - ThemeForest">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" as="fetch" crossorigin="anonymous">
    <script>
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap",r="__3perf_googleFonts_c2536";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>

    <!-- PRELOAD LARGE CONTENT -->
    <link rel="preload" as="image" href="../img/slides/slide_home_2.jpg">

    <!-- BASE CSS -->
	<link rel="preload" href="../css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preload" href="../css/style.css" as="style">
    <link rel="stylesheet" href="../css/style.css">

	<!-- SPECIFIC CSS -->
	<link rel="preload" href="../css/home_1.css" as="style">
    <link rel="stylesheet" href="../css/home_1.css">
	

</head>

<body>
	
<div id="page">

<header class="version_1">
	<div class="layer"></div><!-- Mobile menu overlay mask -->
	<div class="main_header">
		<div class="container">
			<div class="row small-gutters">
				<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
					<div id="logo" style="margin-top:10px;margin-bottom:10px;">
						<a href="index.php"><img src="../upload/logo (2).png" alt="" width="45" height="40"></a>
					</div>
				</div>
				<nav class="col-xl-6 col-lg-7">
					<a class="open_close" href="#0">
						<div class="hamburger hamburger--spin">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>

					<!--/main-menu -->
				</nav>
				<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
					<a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
				</div>
			</div>
			<!-- /row -->
		</div>
	</div>
						<!--/main-menu -->
					
		<!-- /main_header -->

		<div class="main_nav Sticky">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 col-md-3">
						<nav class="categories">
							<ul class="clearfix">
								<li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Danh mục
										</a>
									</span>
									<div id="menu">
										<ul>
											<li>
											<?php
												$listdanhmuc = loadall_loaisach();
												foreach ($listdanhmuc as $dm) {
													extract($dm);
													echo '<li><span><a href="index.php?act=sptimkiem&iddm='.$id.'">'.$name.'</a></span></li>';
												}
												?>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
							<div class="custom-search-input">
								<form action="index.php?act=sptimkiem" method="post">
									<input type="text" name="kyw" placeholder="Tìm kiếm tại đây">
									<button type="submit" name="timkiem"><i class="header-icon_search_custom"></i></button>
								</form>

							</div>
						</div>
						<div class="col-xl-3 col-lg-2 col-md-3">
							<ul class="top_tools">
								<li>
									<div class="dropdown dropdown-cart">
										<?php
										$tong = 0;
										$i = 0;
										?>
										<a href="index.php?act=giohang" class="cart_bt"></a>
										<div class="dropdown-menu">
											<ul>
												<?php
												if (isset($_SESSION['mycart']) && ($_SESSION['mycart'])) {
													
													foreach ($_SESSION['mycart'] as $cart) {
														$hinh = $img_path . $cart[2];
														$ttien = $cart[3] * $cart[4];
														$tong += $ttien;
	
														$xoasp = '<a href="index.php?idcart=' . $i . '" class="action"><i class="ti-trash"></i></a>';
														echo '<li>
														<a href="product-detail-1.html">
															<figure><img src="'.$hinh.'" data-src="'.$hinh.'" alt="" width="50" height="50" class="lazy"></figure>
															<strong><span>'.$cart[1].'</span>$'.$cart[3].'</strong>
														</a>
														'.$xoasp.'
													</li>';
													$i+=1;	
													} 
												}else{

												}
												?>
											</ul>
											<div class="total_drop">
												<div class="clearfix"><strong>Total</strong><span>$<?=$tong?></span></div>
												<a href="index.php?act=giohang" class="btn_1 outline">View Cart</a><a href="index.php?act=donhang" class="btn_1">Checkout</a>
											</div>
										</div>
									</div>
								<!-- /dropdown-cart-->
							</li>
							<li>
								
							</li>
							<li>
								<div class="dropdown dropdown-access">
									<a href="" class="access_link"><span>Account</span></a>
									<div class="dropdown-menu">
										<?php 
											if(isset($_SESSION['username'])){
												extract($_SESSION['username']);
										?>
											<div class="form-group" id="name">
												<h5><?=$username?></h5>
											</div>
										<?php
											}else{
										?>
											<a href="index.php?act=dangky" class="btn_1">Sign Up</a>
											<div class="divider"><span>OR</span></div>
											<a href="index.php?act=dangnhap" class="btn_1">Sign In</a>
											
											<?php } ?>
										
										<ul>
										<?php 
											if(isset($_SESSION['username'])){
												extract($_SESSION['username']);
										?>
											<?php if($role==1){ ?>
												<li class="badmin">
													<a href="../admin/index.php" ><i class="ti-admin"></i>Log in to Admin</a>
												</li>
											<?php } ?>
											<?php } ?>
											<li>
												<a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
											</li>
											<li>
												<a href="account.html"><i class="ti-package"></i>My Orders</a>
											</li>
											
											<li>
												<a href="index.php?act=account"><i class="ti-user"></i>Account Settings</a>
											</li>
											
											<li>
                                    			<a href="index.php?act=thoat"><i class="ti-logout-alt"></i>Log out</a>
                                			</li>
										</ul>
									</div>
								</div>
								<!-- /dropdown-access-->
							</li>
							<li>
								<a href="#0" class="btn_search_mob"><span>Search</span></a>
							</li>
							<li>
								<a href="#menu" class="btn_cat_mob">
									<div class="hamburger hamburger--spin" id="hamburger">
										<div class="hamburger-box">
											<div class="hamburger-inner"></div>
										</div>
									</div>
									Categories
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="search_mob_wp">
				<input type="text" class="form-control" placeholder="Search over 10.000 products">
				<input type="submit" class="btn_1 full-width" value="Search">
			</div>
			<!-- /search_mobile -->
		</div>
		<!-- /main_nav -->
	</header>
	<!-- /header -->