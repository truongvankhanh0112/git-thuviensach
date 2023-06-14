<?php

    if (is_array($thanhvien)) {
        extract($thanhvien);
    }

?>
<form class="contentthem" method="POST" action="index.php?act=updatetv">
    <h2><p>Thay đổi quyền truy cập</p></h2><br>
    Vai trò:(Quản trị viên = 1, Khách hàng = 0) <br>
    <input id="adminadd_name" type="text" name="vaitro" value="<?=$vaitro?>"> <br>
    Email: <br>
    <input id="adminadd_name" type="email" name="email" value="<?=$email?>" >
    <br>
    Mật khẩu: <br>
    <input id="adminadd_name" type="password" name="pass" value="<?=$pass?>"><br>
    <input type="hidden" name="id" value="<?=$id?>">
    <b><rbr><input type="submit" name="capnhattv" id="themdm" value="Cập nhật"><br>
    <a class="contentthem" href="index.php?act=listthanhvien"><input type="submit" id="themdm" value="Xem danh sách"></a>
</form><br>

        