
<main class="bg_gray">
        <form action="index.php?act=quenmk" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email_forgot" placeholder="Email">
                        </div>
                        <p >
							<h6 class="thongbao">
								<?php
									if(isset($thongbao)&&($thongbao!="")){
										echo $thongbao;
									}
            					?>
                                
        					</h6>
                            
						</p>
                        <hr>
                        <div class="text-center"><input type="submit" value="Check Password" class="btn_1" name="chekcpass">
                        <br>
                        <br>
                        <h6><a class="goin" href="index.php?act=dangnhap">Sign In</a></h6></div>
                        <hr>
						<hr>
        </form>
        <style>
            .thongbao{
                color: red;
            }
            
            .goin:hover{
                color: red;
            }
        </style>
        
 
		</div>
		</div>
		</div>
</body>

<!-- Mirrored from www.ansonika.com/allaia/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 15:02:21 GMT -->
</html>