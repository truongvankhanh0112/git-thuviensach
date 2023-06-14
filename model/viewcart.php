<?php
    function viewcart(){
        if ($_SESSION['mycart']) {
            $tongtien=0;
            $i=0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $anhsp=$cart[2];
                    $thanhtien=$cart['3']*$cart['4'];
                    $tongtien+=$thanhtien; 
                    $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input id="btnxoacart" type="button" value="Xóa"></a>';
                    echo '<tr id="idbbt">
                            <td class="pdl"><img style="height:70px; margin:5px;" src="'.$anhsp.'">'.$cart[1].'</td>
                            <td align="center">'.$cart[3].'.000đ</td>
                            <td align="center">'.$cart[4].'</td>
                            <td align="center">'.$thanhtien.'.000đ</td>
                            <td align="center">'.$xoasp.'</td>
                        </tr>';
                    $i+=1;
                }
                echo '<tr id="tongtiencart">
                        <td colspan="3"; class="pdl"><h2>Tổng Tiền:</h2></td>
                        <td align="center"><h3>'.$tongtien.'.000đ</h3></td>
                        <td></td>
                    </tr>';
                echo'<tr>
                        <td class="pdl" colspan="3"><a href="index.php">Mua thêm sản phẩm khác <i class="fas fa-angle-right"></i></a></td>
                        <td colspan="2" align="center"><input type="submit" id="btnmua" name="dathang" value="Đặt Mua"></td>
                    </tr>';
        }else{
            echo '
            <tr>
                <td colspan="3" id="imgcart">Giỏ hàng của bạn hiện tại chưa có sản phẩm nào.</td>
                <td colspan="2" align="center"></td>
            </tr>
            ';

        }
    }
    function show_chitiet_bill($listbill){
        echo '<table id="tbl-bill">
                <tr>
                    <th></th>
                    <th>Sản phẩm</th>
                    <th>Đơn Giá</th>
                    <th>SL</th>
                    <th>Thành tiền</th>
                </tr>';
            $tongtien=0;
                foreach ($listbill as $cart) {
                    $thanhtien=$cart['5']*$cart['6'];
                    $tongtien+=$cart['thanhtien'];
                    $anhsp=$cart[3];
                    echo '  
                            <tr>
                                <td><img style="height:70px; margin:5px;" src="'.$anhsp.'"></td>
                                <td>'.$cart[4].'</td>
                                <td>'.$cart[5].'.000đ</td>
                                <td>'.$cart[6].'</td>
                                <td>'.$thanhtien.'.000đ</td>
                            </tr>';
                }
                echo '<tr style="background-color:;">
                            <td colspan="4" style="text-align: left;"> <h3>Tổng đơn hàng</h3></td>
                            <td style="color:red;"><h2>'.$tongtien.'.000đ</h2></td>
                        </tr>
                    </table>';
    }
    function tongdonhang(){
            $tongtien=0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $thanhtien=$cart['3']*$cart['4'];
                    $tongtien+=$thanhtien; 
        }
        return $tongtien;
    }
    function insert_bill($iduser,$gender, $fullname, $phone, $diachi, $pttt, $ngaydathang, $tongdonhang){
        $sql = "INSERT INTO  donhang (iduser,gender, fullname, phone, diachi, pttt, ngaydathang, tongdonhang) 
                VALUES ('$iduser','$gender','$fullname','$phone','$diachi','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertID($sql);
    }
    function insert_cart($iduser, $idSp , $anhsp, $tensp, $giakm, $soluong, $thanhtien, $iddonhang ){
        $sql = "INSERT INTO  cart (iduser, idSp , anhsp, tensp, giakm, soluong, thanhtien, iddonhang) 
        VALUES ('$iduser',' $idSp' , '$anhsp', '$tensp', '$giakm',' $soluong', '$thanhtien',' $iddonhang')";
        return pdo_execute($sql);
    }
    function loadone_bill($iddonhang){
        $sql = "SELECT * FROM donhang WHERE  iddonhang=".$iddonhang;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    function loadall_bill($iduser){
        $sql = "SELECT * FROM donhang WHERE  iduser=".$iduser;
        $sql." order by iddonhang desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadall_donhang(){
        $sql = "SELECT * FROM donhang order by iddonhang desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadone_donhang($iddonhang){
        $sql = "SELECT * FROM donhang WHERE iddonhang=".$iddonhang;
        $listbill=pdo_query_one($sql);
        return $listbill;
    }
    function loadall_cart($iddonhang){
        $sql = "SELECT * FROM cart WHERE  iddonhang=".$iddonhang;
        $bill=pdo_query($sql);
        return $bill;
    }
    function loadone_cart($iddonhang){
        $sql = "SELECT * FROM cart WHERE  iddonhang=".$iddonhang;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    // function xulydonhang(){
    //     $sql="SELECT * FROM cart, donhang WHERE  cart.iddonhang=donhang.iddonhang";
    //     $xulydonhang=pdo_query($sql);
    //     return $xulydonhang;
    // }
    function update_dh($iddonhang, $ttdh){
        $sql = "UPDATE donhang SET trangthaidh='".$ttdh."' WHERE iddonhang=".$iddonhang;
        pdo_execute($sql);
    }
    function delete_dh($iddonhang){
        $sql = "DELETE  FROM donhang WHERE iddonhang=".$iddonhang;
        pdo_execute($sql);
    }
    function get_pttt($pt){
        switch ($pt) {
            case '1':
                # code...
                $pttt= "Thanh toán khi nhận hàng";
                break;
             case '2':
                # code...
                $pttt= "Chuyển khoảng ngân hàng";
                break;
            default:
                # code...
                $pttt= "Thanh toán khi nhận hàng";
                break;
        }
        return $pttt;
    }
    function get_ttdh($n){
        switch ($n) {
            case '1':
                $tt = "Đơn hàng mới";
                break;
            case '2':
                $tt = "Đang xử lý";
                break;
            case '3':
                $tt = "Đang giao";
                break;
            case '4':
                $tt = "Đã hoàn thành";
                break;
            default:
                $tt= "Đơn hàng mới.";
                break;
        }
        return $tt;
    }
    function loadall_thongke(){
        $sql="SELECT danhmuc.id as iddm, danhmuc.tendanhmuc as tendanhmuc, count(sanphamm.idSanpham) as countsp, min(sanphamm.giakm) as mingiakm, max(sanphamm.giakm) as maxgiakm, avg(sanphamm.giakm) as avggiakm";
        $sql.=" FROM sanphamm left join danhmuc on danhmuc.id=sanphamm.danhmuc";
        $sql.=" group by danhmuc.id";
        $listtk=pdo_query($sql);
        return $listtk;
    }
?>