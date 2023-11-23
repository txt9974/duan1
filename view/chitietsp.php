<?php
extract($onesp);
$hinhpath = $img_path . $img;
?>

<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Sản phẩm</a></li>
					<li><?php echo $title ?></li>
				</ul>
			</div>
			<h1><?php echo $title ?></h1>
		</div>
		<!-- /page_header -->
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="owl-carousel owl-theme prod_pics magnific-gallery">
					<div class="item">
						<a href="<?php echo $hinhpath ?>" title="<?php echo $title ?>" data-effect="mfp-zoom-in"><img src="<?php echo $hinhpath ?>" alt=""></a>
					</div>
					<!-- /item -->
				</div>
				<!-- /carousel -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

	<div class="bg_white">
		<div class="container margin_60_35">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<div class="prod_info version_2">
						<span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
						<!-- <p style="text-align: justify"><small>BOOk: <?php echo $id ?></small><br><?php echo $description ?></p> -->
						<div style="font-size:18px">
									<p> <strong>Tác giả:</strong>  <?php echo $author?></p>
									<p><strong>Hình thức:</strong> Bìa mềm</p>
									<p><strong>Thời gian giao hàng</strong>: </p>
									<p><strong>Chính sách đổi trả</strong>: Đổi trả sản phẩm trong 30 ngày</p>
								</div>
						<!-- <p>Et phaedrum temporibus per. Antiopam posidonium et est. Eu ius quas modus suavitate, ex sea feugiat laoreet voluptatum. Quo at veritus ancillae complectitur, duo no assum omnes.</p> -->
					</div>
				</div>
				<div class="col-lg-5">
					<div class="prod_options version_2">
						<!-- <div class="row">
	                            <label class="col-xl-7 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6 colors">
	                                <ul>
	                                    <li><a href="#0" class="color color_1 active"></a></li>
	                                    <li><a href="#0" class="color color_2"></a></li>
	                                    <li><a href="#0" class="color color_3"></a></li>
	                                    <li><a href="#0" class="color color_4"></a></li>
	                                </ul>
	                            </div>
	                        </div> -->
						<!-- <div class="row">
	                            <label class="col-xl-7 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-bs-toggle="modal" data-bs-target="#size-modal"><i class="ti-help-alt"></i></a></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="custom-select-form">
	                                    <select class="wide">
	                                        <option value="" selected="">Small (S)</option>
	                                        <option value="">M</option>
	                                        <option value=" ">L</option>
	                                        <option value=" ">XL</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div> -->
						<div class="row">
							<label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
							<div class="col-xl-5 col-lg-5 col-md-6 col-6">
								<div class="numbers-row">
									<form action="">
										<input type="text" value="1" id="quantity_1" class="qty2" name="quantity_sp">
										<div class="inc button_inc">+</div>
										<div class="dec button_inc">-</div>
									</form>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-lg-7 col-md-6">
								<div class="price_main"><span class="new_price" style="color: red">Giá: $<?php echo $price ?></span></div>
							</div>
							<div class="col-lg-5 col-md-6">
								<div class="btn_add_to_cart"><a href="#0" class="btn_1">Thêm vào giỏ hàng</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
	</div>
	<!-- /bg_white -->

	<div class="tabs_product bg_white version_2">
		<div class="container" style="justify-content: center;">
			<ul class="nav nav-tabs" role="tablist" style="justify-content: center;">
				<li class="nav-item">
					<a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Mô tả</a>
				</li>
				<li class="nav-item">
					<a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Bình luận</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /tabs_product -->

	<div class="tab_content_wrapper">
		<div class="container">
			<div class="tab-content" role="tablist">
				<div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
					<div class="card-header" role="tab" id="heading-A">
						<h5 class="mb-0">
							<a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
								Xem thêm
							</a>
						</h5>
					</div>

					<div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
						<div class="card-body">
							<div class="row justify-content-between">
								<div class="col-lg-6">
									<h3>Mô tả</h3>
									<?php
										echo '<p>'.$description.'</p>';
									?>
								</div> 
							</div>
						</div>
					</div>
				</div>
				<!-- /TAB A -->
				<div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
					<div class="card-header" role="tab" id="heading-B">
						<h5 class="mb-0">
							<a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
								Xem thêm
							</a>
						</h5>
					</div>
					<div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
						<div class="card-body">
							<div class="row justify-content-between">
								<div class="col-lg-5">
									<div class="review_content">
										<?php
										if (isset($binhluan) && ($binhluan)) {
											foreach ($binhluan as $value) {
												echo '<div class="clearfix add_bottom_10">
											<em>' . $value["ngaybinhluan"] . '</em>
											</div>
											<h4>' . $value["username"] . '</h4>
											<p>' . $value["content"] . '</p>';
											}
										}

										?>

									</div>
								</div>


							</div>

							<!-- /row -->
							<p class="text-end"><a href="index.php?act=binhluansp&idbook=<?php echo $id ?>" class="btn_1">Đánh giá</a></p>
						</div>
						<!-- /card-body -->
					</div>

				</div>
				<!-- /tab B -->
			</div>
			<!-- /tab-content -->
		</div>
		<!-- /container -->
	</div>
	<!-- /tab_content_wrapper -->

	<div class="bg_white">
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Related</h2>
				<span>Products</span>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				<div class="item">
					<div class="grid_item">
						<span class="ribbon new">New</span>
						<figure>
							<a href="product-detail-1.html">
								<img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="product-detail-1.html">
							<h3>ACG React Terra</h3>
						</a>
						<div class="price_box">
							<span class="new_price">$110.00</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /item -->
				<div class="item">
					<div class="grid_item">
						<span class="ribbon new">New</span>
						<figure>
							<a href="product-detail-1.html">
								<img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5.jpg" alt="">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="product-detail-1.html">
							<h3>Air Zoom Alpha</h3>
						</a>
						<div class="price_box">
							<span class="new_price">$140.00</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /item -->
				<div class="item">
					<div class="grid_item">
						<span class="ribbon hot">Hot</span>
						<figure>
							<a href="product-detail-1.html">
								<img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8.jpg" alt="">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="product-detail-1.html">
							<h3>Air Color 720</h3>
						</a>
						<div class="price_box">
							<span class="new_price">$120.00</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /item -->
				<div class="item">
					<div class="grid_item">
						<span class="ribbon off">-30%</span>
						<figure>
							<a href="product-detail-1.html">
								<img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/2.jpg" alt="">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="product-detail-1.html">
							<h3>Okwahn II</h3>
						</a>
						<div class="price_box">
							<span class="new_price">$90.00</span>
							<span class="old_price">$170.00</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /item -->
				<div class="item">
					<div class="grid_item">
						<span class="ribbon off">-50%</span>
						<figure>
							<a href="product-detail-1.html">
								<img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/3.jpg" alt="">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="product-detail-1.html">
							<h3>Air Wildwood ACG</h3>
						</a>
						<div class="price_box">
							<span class="new_price">$75.00</span>
							<span class="old_price">$155.00</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /item -->
			</div>
			<!-- /products_carousel -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_white -->

</main>
<!-- /main -->