<?php
    if(isset($_SESSION['check'])&&(is_array($_SESSION['check']))){
        extract($_SESSION['check']);
    }
?>
<p class="titlegh"><a href="index.php">Trang chủ</a> / <a href="#">Thông tin</a></p>
<div class="capnhatthongtin">
        <div class="capnhatthongtinleft">
            <img src="./view/img/low-res-logo.png">
        </div>
        <div class="capnhatthongtinright">
            <div>
                <?php
                    if($vaitro==1){
                ?>
                <div>
                    <h3><a href="admin/index.php">Quản lí hàng hóa</a></h3>
                </div><br>
                <?php
                    }
                ?>
                Xin chào: <h3><?=$fullname?></h3>
            </div>
            <a id="idchinhsua" href="index.php?act=mybill">Đơn hàng của tôi</i></a>
            <caption><a id="idchinhsua" href="index.php?act=updatetaikhoan">Thay đổi thông tin cá cá nhân <i class="fas fa-exclamation-circle"></i></a></caption>
            <table id="tablett"  border="1"; align="center">
                <tr>
                    <th>Thông tin cá nhân</th>
                    <th>Địa chỉ giao hàng</th>
                </tr>
                <tr>
                    <td class="pdl"><br>
                        <?=$gender?> <?=$fullname?> <br><br>
                        Email: <?=$email?> <br><br>
                        Số điện thoại: <?=$phone?><br><br>
                    </td>
                    <td> Địa chỉ: <?=$diachi?></td>
                </tr>
            </table>
        </div>
    </div>