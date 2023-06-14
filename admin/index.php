<?php
        session_start();
    if (isset($_SESSION['check'])) {
?>
		<?php
             require "./content/header.php";
            include "../model/pdo.php";
            include "../model/danhmuc.php";
            include "../model/tacgia.php";
            include "../model/sanphamm.php";
            include "../model/thanhvien.php";
            include "../model/viewcart.php";
            //
            if(isset($_GET['act'])){
                $act = $_GET['act'];
                switch ($act) {
//=========================DANH MỤC
                    case 'adddm':
                        //thêm dm
                        if(isset($_POST['themdanhmuc'])){
                            $tendanhmuc = $_POST['tendanhmuc'];
                            insert_danhmuc($tendanhmuc);
                            echo "<script>alert('Đã thêm thành công.')</script>";
                        }
                        include "danhmuc/add.php";
                        break;
                    case 'listdm':
                        // hiển thị danh sách danh mục
                        $listdanhmuc = loadall_danhmuc();
                        include "./danhmuc/list.php";
                        break;
                    case 'xoadm':
                        // xóa danh mục
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_danhmuc($_GET['id']);
                        }
                        $listdanhmuc = loadall_danhmuc();
                        include "./danhmuc/list.php";
                        break;
                    case 'suadm':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $dm = loadone_danhmuc($_GET['id']);
                        //    echo $sql;
                        }
                        include "danhmuc/update.php";
                        break;
                    case 'updatedm':
                        // code...
                        if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                            $tendanhmuc = $_POST['tendanhmuc'];
                            $id = $_POST['id'];
                            $dm = update_danhmuc($id, $tendanhmuc);
                            echo "<script>alert('Đã cập nhật thành công.')</script>";
                        }
                        $listdanhmuc = loadall_danhmuc();
                        include "./danhmuc/list.php";
                        break;
//=========================TÁC GIẢ
                    case 'addtg':
                        //thêm tác giả
                        if(isset($_POST['themmoi'])){
                            $tentacgia = $_POST['tentacgia'];
                            insert_tacgia($tentacgia);
                            echo "<script>alert('Đã thêm thành công.')</script>";
                        }
                        include "tacgia/add.php";
                        break;
                    case 'listtg':
                        // hiển thị danh sách danh mục
                             $listtacgia = loadall_tacgia();
                        include "tacgia/list.php";
                        break;
                    case 'xoatg':
                        // xóa danh mục
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_tacgia($_GET['id']);
                        }
                        $listtacgia = loadall_tacgia();
                        include "tacgia/list.php";
                        break;
                    case 'suatg':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $dm = loadone_tacgia($_GET['id']);
                        //    echo $sql;
                        }
                        include "tacgia/update.php";
                        break;
                    case 'updatetg':
                        // code...
                        if(isset($_POST['capnhattg'])&& ($_POST['capnhattg'])){
                            $tentacgia = $_POST['tentacgia'];
                            $id = $_POST['id'];
                            $dm = update_tacgia($id, $tentacgia);
                            echo "<script>alert('Đã cập nhật thành công.')</script>";
                        }
                        $listtacgia = loadall_tacgia();
                        include "tacgia/list.php";
                        break;
//=======================SẢN PHẨM
                    case 'addsp':
                        if(isset($_POST['themmoi'])){
                            $tensp=$_POST['tensp'];
                            $danhmuc=$_POST['danhmuc'];
                            $iddm=$_POST['iddm'];
                            $tacgia=$_POST['tacgia'];
                            $anhsp = $_FILES['anhsp']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                            if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                            } else {
                                //echo "Sorry, there was an error uploading your file.";
                            }
                            $giasp=$_POST['giasp'];
                            $giakm=$_POST['giakm'];
                            $gioithieu=$_POST['gioithieu'];
                            insert_sanpham($tensp, $danhmuc, $iddm, $tacgia, $anhsp, $giasp, $giakm, $gioithieu);
                            echo "<script>alert('Thêm sản phẩm thành công.')</script>";
                        }
                        $listdanhmuc=loadall_danhmuc();
                        $listtacgia=loadall_tacgia();
                        include ("sanphamm/add.php");
                        break;
                    case 'listsp':
                        # code...
                        if(isset($_POST['listGo'])&&($_POST['listGo'])){
                            $kyw=$_POST['kyw'];
                            $danhmuc=$_POST['danhmuc'];
                            
                        }else{
                            $kyw='';
                            $danhmuc=0;
                        }
                        $listdanhmuc=loadall_danhmuc();
                        $listsanpham=loadall_sanpham($kyw, $danhmuc);
                        include "sanphamm/list.php";
                        break;
                    case 'xoasp':
                        // xóa sản phẩm
                        if(isset($_GET['idSanpham'])&&($_GET['idSanpham']>0)){
                            delete_sanpham($_GET['idSanpham']);
                        }
                        $listsanpham=loadall_sanpham();
                        include "sanphamm/list.php";
                        break;
                    case 'suasp':
                        if(isset($_GET['idSanpham'])&&($_GET['idSanpham']>0)){
                            $sanpham = loadone_sanpham($_GET['idSanpham']);
                        //    echo $sql;
                        }
                        $listdanhmuc = loadall_danhmuc();
                        $listtacgia = loadall_tacgia();
                        include "sanphamm/update.php";
                        break;
                    case 'updatesp':
                        if(isset($_POST['capnhat'])){
                            $idSanpham=$_POST['idSanpham'];
                            $tensp=$_POST['tensp'];
                            $danhmuc=$_POST['danhmuc'];
                            $iddm=$_POST['iddm'];
                            $tacgia=$_POST['tacgia'];
                            $anhsp = $_FILES['anhsp']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                            if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                            } else {
                                //echo "Sorry, there was an error uploading your file.";
                            }
                            $giasp=$_POST['giasp'];
                            $giakm=$_POST['giakm'];
                            $gioithieu=$_POST['gioithieu'];
                            update_sanpham($idSanpham, $tensp, $danhmuc, $iddm, $tacgia, $anhsp, $giasp, $giakm, $gioithieu);
                            echo "<script>alert('Đã cập nhật thành công.')</script>";
                        }
                        $listdanhmuc=loadall_danhmuc();
                        $listtacgia=loadall_tacgia();
                        $listsanpham=loadall_sanpham();
                        include ("sanphamm/list.php");
                        break;
//Thành viên              
                    case 'listthanhvien':
                        $listtv=loadall_thanhvien();
                        include ("thanhvien/listthanhvien.php");
                        break;
                    case 'suatv':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $sql="select * from thanhvien where id=".$_GET['id'];
                            $thanhvien=pdo_query_one($sql);
                        }
                        include "thanhvien/updatetv.php";
                        break;
                    case 'xoatv':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                            del_tv($_GET['id']);
                        }
                        $listtv=loadall_thanhvien();
                        include "thanhvien/listthanhvien.php";
                        break;
                    case 'updatetv':
                        if(isset($_POST['capnhattv'])&& ($_POST['capnhattv'])){
                            $vaitro=$_POST['vaitro'];
                            $id = $_POST['id'];
                            $email = $_POST['email'];
                            $pass = $_POST['pass'];
                            update_thanhvien($vaitro, $id, $email, $pass);
                            echo "<script>alert('Đã cập nhật thành công.')</script>";
                        }
                        $listtv=loadall_thanhvien();
                        include "thanhvien/listthanhvien.php";
                        break;
//đơn hàng
                    case 'listdonhang':
                        $listdonhang=loadall_donhang();
                        include "donhang/listdonhang.php";
                        break;
                    case 'xemctdonhang':
                        if(isset($_GET['iddonhang'])&&($_GET['iddonhang']>0)){
                            $iddonhang=$_GET['iddonhang'];
                            $onedh=loadall_cart($iddonhang);
                        }
                        include "donhang/chitietdonhang.php";
                        break;
                    case 'xoadh':
                        if(isset($_GET['iddonhang'])&&($_GET['iddonhang']>0)){
                            delete_dh($_GET['iddonhang']);
                        }
                        $listdonhang = loadall_donhang();
                        include "donhang/listdonhang.php";
                        break;
                     case 'suadh':
                        if(isset($_GET['iddonhang'])&&($_GET['iddonhang']>0)){
                            $sql="SELECT * FROM donhang WHERE iddonhang=".$_GET['iddonhang'];
                            $onedh=pdo_query_one($sql);
                        }
                        include "donhang/updatedh.php";
                        break;
                    case 'updatedh':
                        if(isset($_POST['capnhatdh'])&& ($_POST['capnhatdh'])){
                            $ttdh = $_POST['ttdh'];
                            $iddonhang = $_POST['iddonhang'];
                            $capnhatdh = update_dh($iddonhang, $ttdh);
                        }
                        $listdonhang=loadall_donhang();
                        include "donhang/listdonhang.php";
                        break;
                    case 'thongke':
                        $listtk=loadall_thongke();
                        include "bieudothongke/thongke.php";
                        break;
                    case 'bieudothongke':
                        $listtk=loadall_thongke();
                        include "bieudothongke/bieudothongke.php";
                        break;
                    default:
                        // code...
                        include "main.php";
                        break;
                }
            }else{
                require "main.php";
            }
            require "./content/footer.php";
        ?>
<?php
    }else {
            header('location:../index.php');
    }
?>