<?php
if (!isset($_SESSION['user'])) {
	echo '<script type="text/javascript">alert("Bạn cần đăng nhập để vào thanh toán.");</script>';
	echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
}
?>
<main class="bg_gray">


	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li>Đơn hàng</li>
				</ul>
			</div>

		</div>
		<!-- /page_header -->
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="step first">
					<h3>1. Thông tin khách hàng</h3>
					<div class="tab-content checkout">
						<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
							<?php
							if (isset($_SESSION['user']) && ($_SESSION['user'])) {
								echo '
									<div class="form-group">
									<input type="text" class="form-control" value="' . $_SESSION['user']['username'] . '">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" value="' . $_SESSION['user']['email'] . '">
									</div>
									<hr>
									<div class="form-group">
										<input type="text" class="form-control" value="' . $_SESSION['user']['address'] . '">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" value="' . $_SESSION['user']['tel'] . '">
									</div>';
							}
							?>

							<hr>
							<hr>
						</div>
					</div>
				</div>
				<!-- /step -->
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="step middle payments">
					<h3>2. Phương thức thanh toán</h3>
					<ul>
						<li>
							<label class="container_radio">Thanh toán khi nhận hàng<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
								<input type="radio" name="payment" checked>
								<span class="checkmark"></span>
							</label>
						</li>
						<li>
							<label class="container_radio">Thanh toán online<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
								<input type="radio" name="payment">
								<span class="checkmark"></span>
							</label>
						</li>
					</ul>
				</div>
				<!-- /step -->

			</div>
			<div class="col-lg-4 col-md-6">
				<div class="step last">
					<h3>3. Order Summary</h3>
					<div class="box_general summary">
						<ul>
							<?php
							$tong = 0;
							foreach ($_SESSION['mycart'] as $cart) {
								$hinh = $img_path . $cart[2];
								$ttien = $cart[3] * $cart[4];
								$tong += $ttien;
								echo '
								<li class="clearfix"><em>1x '.$cart[1].'</em> <span>$'.$cart[3].'</span></li>
								';
							}
							?>
						</ul>
						<ul>
							<li class="clearfix"><em><strong>Subtotal</strong></em>  <span>$<?=$tong?></span></li>
							<li class="clearfix"><em><strong>Shipping</strong></em> <span>$10000</span></li>
							
						</ul>
						<div class="total clearfix">TOTAL <span>$<?php echo $tong+10000 ?></span></div>

						<a href="confirm.html" class="btn_1 full-width">Confirm and Pay</a>
					</div>
					<!-- /box_general -->
				</div>
				<!-- /step -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>