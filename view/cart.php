<?php
	if (!isset($_SESSION['username'])) {
		echo '<script type="text/javascript">alert("Bạn cần đăng nhập để vào giỏ hàng.");</script>';
		echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
	}
?>
<main class="bg_gray">
			<div class="container margin_30">
				<div class="page_header">
					<div class="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Category</a></li>
							<li>Page active</li>
						</ul>
					</div>
					<h1>Cart page</h1>
				</div>
				<!-- /page_header -->
				<table class="table table-striped cart-list">
					<thead>
						<tr>
							<th>
								Product
							</th>
							<th>
								Price
							</th>
							<th>
								Quantity
							</th>
							<th>
								Subtotal
							</th>
							<th>

							</th>
						</tr>
					</thead>
					<tbody> 
						<?php
							$tong = 0;
							$i=0;
							foreach($_SESSION['mycart'] as $cart){
								$hinh = $img_path . $cart[2];
								$ttien = $cart[3]*$cart[4];
								$tong += $ttien;

								$xoasp = '<a href="index.php?act=xoagiohang&idcart='.$i.'"><i class="ti-trash"></i></a>';
								echo '<tr>
								<td>
									<div class="thumb_cart">
										<img src="'.$hinh.'" height="70px" class="lazy" alt="Image">
									</div>
									<span class="item_cart">'.$cart[1].'</span>
								</td>
								<td>
									<strong>$'.$cart[3].'</strong>
								</td>
								<td>
									<div class="numbers-row">
										<input type="text" value="'.$cart[4].'" id="quantity_1" class="qty2" name="quantity">
										<div class="inc button_inc">+</div>
										<div class="dec button_inc">-</div>
									</div>
								</td>
								<td>
									<strong>$'.$ttien.'</strong>
								</td>
								<td class="options">
									'.$xoasp.'
								</td>
							</tr>';
								$i+=1;
							}
						?>
						
					</tbody>
				</table>

				<div class="row add_top_30 flex-sm-row-reverse cart_actions">
					<div class="col-sm-4 text-end">
						<button type="button" class="btn_1 gray">Update Cart</button>
					</div>
				</div>
				<!-- /cart_actions -->

			</div>
			<!-- /container -->

			<div class="box_cart">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<ul>
								<li>
									<span>Subtotal</span> $<?php echo $tong?>
								</li>
								<li>
									<span>Shipping</span> $10000
								</li>
								<li>
									<span>Total</span> $<?php echo $tong + 10000?>
								</li>
							</ul>
							<a href="index.php?act=donhang" class="btn_1 full-width cart">Proceed to Checkout</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /box_cart -->

		</main>
		<!--/main-->