
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
		<h1>Create an Account</h1>
	</div>
	<!-- /page_header -->
			
			<form action="index.php?act=dangky" method="post">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
					<div class="form_container">
						<div class="form-group" >
							<input type="text" class="form-control" name="username" id="username" value="" placeholder="Username*" required oninvalid="this.setCustomValidity('Tên đăng nhập không được để trống')" oninput="setCustomValidity('')">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email_2" placeholder="Email*" required oninvalid="this.setCustomValidity('Email không được để trống')" oninput="setCustomValidity('')">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" id="password_2" value="" placeholder="Password*" required oninvalid="this.setCustomValidity('Mật khẩu không được để trống')" oninput="setCustomValidity('')">
						</div>
						
						
						<div class="private box">
							<div class="row no-gutters">
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" name="address" placeholder="Full Address*" required oninvalid="this.setCustomValidity('Địa chỉ không được để trống')" oninput="setCustomValidity('')">
									</div>
								</div>
							</div>
							<!-- /row -->
									<div class="form-group">
										<input type="text" class="form-control" name="tel" placeholder="Telephone *" required oninvalid="this.setCustomValidity('Số điện thoại không được để trống')" oninput="setCustomValidity('')">
									</div>
									<?php
							if(isset($thongbao)&&($thongbao!="")){
                        		echo $thongbao ;
                    		}
                    
                			?>
								</div>
							</div>
							<!-- /row -->
							
							<hr>
							
							<div class="form-group">
							<label class="container_check">Accept <a href="#0">Terms and conditions</a>
								<input type="checkbox" required>
								<span class="checkmark"></span>
							</label> 
							
						</div>
						<div class="text-center"><input type="submit" value="Register" class="btn_1 full-width" name="dangky"></div>
						<div>Do you already have an account? <a href="index.php?act=dangnhap">Sign in</a> now</div>

						
                

	</main>
	<!--/main-->