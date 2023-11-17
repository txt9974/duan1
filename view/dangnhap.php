
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
		<h1>Sign In or Create an Account</h1>
	</div>
    
    <div class="col-xl-6 col-lg-6 col-md-8">
            <div class="box_account1">
                <h3 class="client">Already Client</h3>
                <div class="form_container">
                    <div class="divider"><span></span></div>
                    <?php 
                            if(isset($_SESSION['username'])){
                                extract($_SESSION['username']);
                        ?>
                            <div class="form-group">
                                Xin chào<br>
                                <?=$username?>
                            </div>
                            <div class="form-group">
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if($role==0){ ?>
                                <li>
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>

                        <?php
                            }else{

                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                    <div class="form-group">
						<input type="text" class="form-control" name="username" id="username" value="" placeholder="Username*">
					</div>
                    <div class="form-group">
						<input type="password" class="form-control" name="password" id="password_2" value="" placeholder="Password*">
					</div>
                    <div class="clearfix add_bottom_15">
                        <div class="checkboxes float-start">
                            <label class="container_check">Remember me
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <a href=""><div class="float-end"><a id="forgot" href="index.php?act=quenmk">Lost Password?</a></div></a>
                    </div>
                    <div class="text-center"><input type="submit" value="Login" class="btn_1 full-width" name="dangnhap"></div>
                    </form>
                    <div>Do not have an account? <a href="index.php?act=dangky">Sign up</a> now</div>
                    <?php } ?>
                </div>
                <!-- /form_container -->
            </div>
            <!-- /box_account -->
            <!-- /row -->
        </div>
        </div>
						
					</div>
					
					<!-- /form_container -->
				</div>
				
				
				<!-- /box_account -->
			</div>
			
			
			
		</div>
		<!-- /row -->
		</div>
		
		<!-- /container -->
	</main>
	<!--/main-->
	
	
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>

    <script>
    	// Client type Panel
		$('input[name="client_type"]').on("click", function() {
		    var inputValue = $(this).attr("value");
		    var targetBox = $("." + inputValue);
		    $(".box").not(targetBox).hide();
		    $(targetBox).show();
		});
	</script>
		
</body>

<!-- Mirrored from www.ansonika.com/allaia/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 15:02:21 GMT -->
</html>