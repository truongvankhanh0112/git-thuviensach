<?php
    if(isset($_SESSION['check'])&&(is_array($_SESSION['check']))){
        extract($_SESSION['check']);
    }
?>
<form class="login" method="POST" action="index.php?act=updatetaikhoan">     
    <h1>Chỉnh sửa thông tin</h1><br>
    <a id="idquaylai" href="index.php?act=xemthongtin"><h3>Quay lại</h3></a><br>
    <p>Thông tin cá nhân</p><br>
    Họ và tên:
    <select id="gender" name="gender";>
        <option value="Anh">Anh</option>
        <option value="Chị">Chị</option>
    </select>
    <input id="fullname" type="text" name="fullname" value="<?=$fullname?>"><br><br>
    Số điện thoại: 
    <input id="telephone" type="text" name="phone" value="<?=$phone?>"><br><br>
    Địa chỉ: <br>
    <textarea style="padding-left: 10px;" name="diachi" id="diachi" cols="50" rows="10"><?=$diachi?></textarea>
    <br><br><input type="submit" name="capnhat" id="btndangky" value="Cập Nhật">
    
    <input type="hidden" name="id" value="<?=$id?>">
</form><br>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        