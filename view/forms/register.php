<form class="login" method="POST" action="index.php?act=register">
    <h1>Đăng Ký</h1><br>
    <p>Thông tin đăng nhập</p><br>
    Email:
    <input id="email" type="email" name="email" placeholder="Nhập email của bạn" >
    <br><br>
    Mật khẩu:
    <input id="password" type="password" name="pass" placeholder="Nhập mật khẩu" ><br><br>
    <p>Thông tin cá nhân</p><br>
    Họ và tên:
    <select id="gender" name="gender";>
        <option value="Anh">Anh</option>
        <option value="Chị">Chị</option>
    </select>
    <input id="fullname" type="text" name="fullname" placeholder="Nhập họ tên..." ><br><br>
    Số điện thoại: 
    <input id="telephone" type="tel" name="phone" ><br><br>
    Địa chỉ: <br>
    <textarea style="padding-left: 10px;" name="diachi" id="diachi" cols="50" rows="10" ></textarea>
    <br><br><input type="submit" name="dangky" id="btndangky" value="Đăng ký">
    <a id="trangtruoc" href="index.php?act=login">Quay lại trang đăng nhập</a>
</form><br>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        