<h1>Sign In or Create an Account</h1>
            <?php 
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
            ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                <div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
					<div class="form_container">
						<div class="form-group">
							<input type="text" class="form-control" name="username" id="username" value="" placeholder="Username*">
						</div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
                    
                </form>
                <h2 class="thongbao">
                <?php
                
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    
                ?>
                </h2>
            </div>
        </div>
        </div>
       </form>