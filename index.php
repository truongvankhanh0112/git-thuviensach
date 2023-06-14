<?php
    session_start();
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanphamm.php";
    include "model/tacgia.php";
    include "model/danhmuc.php";
    include "model/thanhvien.php";
    include "model/viewcart.php";
    include "global.php";
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    $dsdm = loadall_danhmuc();
    $spnew = loadall_sanpham_trangchu();
    $tacgia = loadall_tacgia();
    $dmtc = load_dm_trangchu();
    // $loadsptc = loadall_sp_trangchu($id);

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw, $iddm);
                $tendm=loadone_tendm($iddm);
                include "view/sanpham.php";
                break;
            case 'chitietsanpham':
                if(isset($_GET['idSanpham'])&&($_GET['idSanpham']>0)){
                    $idSanpham=$_GET['idSanpham'];
                    $onesp=loadone_sanpham($idSanpham);
                    include "view/chitietsanpham.php";
                }else{
                    include "view/main.php";
                }
                
                break;
            case 'register':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $pass = ($_POST['pass']);
                    $gender = $_POST['gender'];
                    $fullname = $_POST['fullname'];
                    $phone = $_POST['phone'];
                    $diachi = $_POST['diachi'];
                    if (check_email($email) > 0) {
                       echo "<script>alert('Email đã tồn tại vui lòng chọn lại Email khác nhé .')</script>";
                       include "view/forms/register.php";
                       exit;
                    }
                    if (!$email || !$pass || !$fullname || !$phone || !$diachi) {
                        echo "<script>alert('Bạn Vui lòng điền đầy đủ thông tin vào nhé.')</script>";
                        include "view/forms/register.php";
                        exit;
                     }
                    insert_thanhvien( $email, $pass, $gender, $fullname, $phone, $diachi);
                    echo "<script>alert('Chúc mừng bạn đã đăng ký thành công.')</script>";
                    include "view/forms/login.php";
                    include "view/footer.php";
                    exit;
                }
                include "view/forms/register.php";
                break;
             case 'login':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $email=$_POST['email'];
                    $pass=($_POST['pass']);
                    //$pass = md5($pass);
                    $check_login=check_login($email, $pass);
                    if(is_array($check_login)){
                        $_SESSION['check'] = $check_login;
                       header('location: index.php');
                    }else{
                        echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác, Vui lòng kiểm tra lại.')</script>";
                    }
                }
                include "./view/forms/login.php";
                break;
            case 'updatetaikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    // $email=$_POST['email'];
                    // $pass=($_POST['pass']);
                    $gender=$_POST['gender'];
                    $fullname=$_POST['fullname'];
                    $phone=$_POST['phone'];
                    $diachi=$_POST['diachi'];
                    update_taikhoan($id, $gender, $fullname, $phone, $diachi);
                    $_SESSION['check']=check_login($email, $pass,  $fullname);
                    echo "<script>alert('Cập nhật thành công.')</script>";
                    header('location:index.php?act=xemthongtin');
                }
                
                include "./view/forms/updatetaikhoan.php";
                break;
            case 'xemthongtin':
                include "./view/forms/xemthongtin.php";
                break;
            case 'thoat':
                session_unset();
                header('location:index.php');
                break;
            case 'quenmatkhau':
                if(isset($_POST['quenmatkhau'])&&($_POST['quenmatkhau'])){
                    $email=$_POST['email'];
                    $checkemail=check_email($email);
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là: ".($checkemail['pass']);
                       // echo "<script>alert('Mật khẩu của bạn là: .$checkemail['pass'].')</script>";
                        //header('location:index.php?act=login');
                    }else{
                    echo "<script>alert('Email này không tồn tại.')</script>";
                    }
                }
                include "./view/forms/quenmatkhau.php";
                break;
            case 'showcart':
                include "view/cart/showcart.php";
                break;
             case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $idSanpham=$_POST['idSanpham'];
                    $tensp=$_POST['tensp'];
                    $anhsp=$_POST['anhsp'];
                    $giakm=$_POST['giakm'];
                    $soluong=$_POST['soluong'];
                    $thanhtien=$giakm*$soluong;
                    $addsp=[$idSanpham, $tensp, $anhsp, $giakm, $soluong, $thanhtien];
                    array_push($_SESSION['mycart'], $addsp);
                }
                include "view/cart/showcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                header('location: index.php?act=showcart');
                break;
            case 'billcomfirm':
                if(isset($_POST['dathang'])&&($_POST['dathang'])){
                    if (isset($_SESSION['check']))  {
                        $iduser = $_SESSION['check']['id'];
                        $gender = $_POST['gender'];
                        $fullname = $_POST['fullname'];
                        $phone = $_POST['phone'];
                        $diachi = $_POST['diachi'];
                        $pttt = $_POST['pttt'];
                        date_default_timezone_set("America/New_York");
                        $ngaydathang = date('Y-m-d h:i:sa');
                        $tongdonhang = tongdonhang();
                         //Tạo bill
                        $iddonhang=insert_bill($iduser,$gender, $fullname, $phone, $diachi, $pttt, $ngaydathang, $tongdonhang);
                        //insert into cart: $_SESSION['mycart'] & idbill
                        foreach ($_SESSION['mycart'] as $cart) {
                            if (isset($_SESSION['check']))  {
                            // $iduser=$_SESSION['check']['id'];
                                insert_cart($_SESSION['check']['id'], $cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$iddonhang);
                            }else {
                                echo "<script>alert('Đăng ký để tiếp tục mua hàng.')</script>";
                            }
                        }
                        $_SESSION['mycart']=[];
                        $bill=loadone_bill($iddonhang);
                        $billct=loadall_cart($iddonhang);
                        include "view/cart/billcomfirm.php";
                    }else{
                        echo "<script>alert('Bạn vui lòng đăng ký tài khoản mới để tiếp tục mua hàng.')</script>";
                       include "view/forms/register.php";
                    }
                }
                break;
            case 'mybill':
                $listbill = loadall_bill($_SESSION['check']['id']);
                include "view/cart/mybill.php";
                break;
            case 'donhangct':
                if(isset($_GET['iddonhang'])&&($_GET['iddonhang']>0)){
                    $iddonhang=$_GET['iddonhang'];
                    $onedh=loadall_cart($iddonhang);
                }
                include "view/cart/donhangct.php";
                break;
            default:
                # code...
                include "view/main.php";
                break;
        }
    }else{
        include "view/main.php";
    }
    
    include "view/footer.php";
?>