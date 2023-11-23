<?php
session_start();
include "../model/pdo.php";
include "../model/loaisach.php";
include "../model/sach.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
$img_path = "../upload/";

include "header.php";

$sphome = loadall_sach_home();
$dsdm = loadall_loaisach();
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];

    switch ($act) {
        case "sptimkiem":
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_Get['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sach($kyw, $iddm);
            // print_r($dssp);
            $tendm = load_ten_loaisach($iddm);
            include "sptimkiem.php";
            break;

        case "binhluansp":
            if (isset($_GET["idbook"]) && $_GET["idbook"] > 0) {
                $id = $_GET["idbook"];
                $onesp = loadone_sach($id);
            }
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                if (isset($_SESSION['username']) && ($_SESSION['username'])) {
                    $idbook = $_POST['idbook'];
                    $iduser = $_SESSION['username']['id'];
                    $content = $_POST['binhluan'];
                    insert_binhluan($idbook, $iduser, $content);
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=chitietsp&idsp=' . $idbook . '";</script>';
                } else {
                    echo '<script type="text/javascript">alert("Bạn cần đăng nhập để bình luận.");</script>';
                }
            }
            include "binhluansp.php";
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
            include "dangky.php";
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
        
        case 'donhang':
            include "checkout.php";
            break;
        case 'account':
            if (isset($_SESSION['username']) && ($_SESSION['username'])) {
                $idtaikhoan = $_SESSION['username']['id'];
                $taikhoan = loadone_taikhoan($idtaikhoan);
            } else {
                echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
            }
            include "account.php";
            break;
        case 'updatetaikhoan':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $id = $_POST["id"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $address = $_POST["address"];
                $tel = $_POST["tel"];
                update_taikhoan($id,$username,$password,$email,$address,$tel,$role);
                $thongbao_update = "Tài khoản cập nhật thành công";
            }
            include "account.php";
            break;
        case 'giohang':
            
            include "cart.php";
            break;
        case 'xoagiohang':
            if (isset($_GET['idcart']) && ($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            echo '<script type="text/javascript">window.location.href = "./index.php?act=giohang";</script>';
            break;
        case "chitietsp":
            if (isset($_GET["idsp"]) && $_GET["idsp"] > 0) {
                $id = $_GET["idsp"];
                $onesp = loadone_sach($id);
                $binhluan = loadall_binhluan($id);
            }
            include "chitietsp.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    if (isset($_POST["themvaocart"]) && ($_POST["themvaocart"])) {
        if (isset($_SESSION['username']) && ($_SESSION['username'])) {
            $id = $_POST["idbook"];
            $title = $_POST["title"];
            $img = $_POST["img"];
            $price = $_POST["price"];
            $soluong = 1;
            $bookadd = [$id, $title, $img, $price, $soluong];
            array_push($_SESSION['mycart'], $bookadd);
            echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
        } else {
            echo '<script type="text/javascript">alert("Bạn cần đăng nhập để thêm vào giỏ hàng.");</script>';
        }
    }
    if (isset($_GET['idcart']) && ($_GET['idcart'] != "")) {
        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
        echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
    }

    include "home.php";
}

include "footer.php";
?>