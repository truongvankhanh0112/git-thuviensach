<div class="adress-form"><br>
    <a class="pdl" href="index.php">Trang chủ </a>/<a style="color: black;" href="#"> Quên mật khẩu</a>
    <form class="login" method="post" action="index.php?act=quenmatkhau">
        <h1>Quên mật khẩu</h1><br>
        <label for="email">Email:</label>
        <input id="email" type="text" name="email" placeholder="Nhập email của bạn"><br><br>
        <input id="btndangky" name="quenmatkhau" type="submit" value="Yêu cầu cấp lại mật khẩu">
        <a id="register" href="index.php?act=register">Đăng kí tài khoản mới</a><br><br>
        <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
    ?>
    </form><br>
    
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
