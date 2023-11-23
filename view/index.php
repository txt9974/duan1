<?php
session_start();
include "../model/pdo.php";
include "../model/loaisach.php";
include "../model/sach.php";
include "../model/taikhoan.php";
$img_path = "../upload/";

include "header.php";

$sphome = loadall_sach_home();
$dsdm = loadall_loaisach();

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];

    switch ($act) {
        case "sptimkiem":
            if (isset($_GET['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sach($kyw, $iddm);
            $tendm = load_ten_loaisach($iddm);
            include "sptimkiem.php";
            break;

        case "chitietsp": 
            if (isset($_GET["idsp"]) && $_GET["idsp"] > 0) {
                $id = $_GET["idsp"];
                $onesp = loadone_sach($id);
                include "chitietsp.php";
            }
            break;
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $tel = $_POST['tel']; 
                insert_taikhoan($username, $email, $password, $address, $tel);
                $thongbao="Đã đăng kí thành công. Vui lòng đăng nhập";
            }
            include "account.php";
            break;

        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username, $password);
                if(is_array($checkuser)){
                    $_SESSION['username']=$checkuser;
                    echo "<script> window.location.href='index.php';</script>";
                }
                else{
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng kí";
                }
            }
            include "dangnhap.php";
            break;
        case 'quenmk':
            if(isset($_POST['chekcpass'])&&($_POST['chekcpass'])){
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if(is_array($checkemail)){
                    $thongbao="Your password is: ".$checkemail['password'];
                }else{
                    $thongbao = "This email does not exist";
                }
            }
            include "quenmk.php";
            break;
        case 'thoat':
            session_unset();
            echo "<script> window.location.href='index.php';</script>";
            include "home.php";
            break;
        
        case 'checkout':
            include "thanhtoan.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {

    include "home.php";
}

include "footer.php";
?>