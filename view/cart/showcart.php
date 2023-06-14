<form action="index.php?act=billcomfirm" method="post">
<p class="titlegh"><a href="index.php">Trang chủ</a> / <a href="#">Giỏ hàng của bạn</a></p>
    <div class="showcart">
        <div class="showcartleft">
            <div class="ttkhachhang"><br>
                <?php 
                    if (isset($_SESSION['check'])) {
                ?>
                <p class="tieudediachigiaohang">Địa chỉ giao hàng</p><br>
                <p>Thông tin người nhận</p><br>
                <?php
                    if(isset($_SESSION['check'])){
                        $gender=$_SESSION['check']['gender'];
                        $fullname=$_SESSION['check']['fullname'];
                        $phone=$_SESSION['check']['phone'];
                        $diachi=$_SESSION['check']['diachi'];
                    }else{
                        $gender="";
                        $fullname="";
                        $phone="";
                        $diachi="";
                    }
                ?>
                    Họ và tên: 
                    <select id="genderttdathang" name="gender">
                        <option value="<?=$gender?>"><?=$gender?></option>
                        <option value="Anh">Anh</option>
                        <option value="Chị">Chị</option>
                    </select>
                    <input id="ipnamegh" type="text" name="fullname" value="<?=$fullname?>" required><br>
                    Số điện thoại: 
                    <input id="ipttgh" type="text" name="phone" value="<?=$phone?>" required><br>
                    Địa chỉ: <br>
                    <textarea id="diachinhanhang" name="diachi" cols="53" rows="10" placeholder="  Điền đầy đủ tên tỉnh, thành phố, tên đường, số nhà nơi nhận hàng" required >  <?=$diachi?></textarea>
                    <br><br><br>
                    <?php 
                    }
                    ?>
                   <div>
                   <caption><p><h2 class="tieudediachigiaohang">Phương thức thanh toán</h2></p></caption><br>
                    <input type="radio" value="1"  name="pttt" required> Thanh toán khi nhận hàng <br> <br>
                    <input type="radio" value="2" name="pttt"> Chuyển khoản ngân hàng <br> <br>
                    <div class="thongtinchuyenkhoan">
                        <p>Lưu ý:</p>
                        <p>- Tài khoản Vietcombank: - Chủ tài khoản: Nguyễn văn A</p>
                        <p>- Sau khi chuyển khoản, quý khách vui lòng thông báo qua điện thoại hoặc email để Quản trị viên tiện kiểm tra và xử lý đơn hàng.</p>
                        <p>- Hỗ trợ khách hàng: 0123 456 789</p>
                        <p>- Email: admin@Thuviensach.vn</p>
                    </div><br>
                <p>Cần hỗ trợ vui lòng liên hệ hotline: <b>0123 456 789</b></p>   
                   </div>                  
            </div>
        </div>
        <div class="showcartright">
            <caption><p><h2 class="pdl titlegiohang">Giỏ hàng của bạn</h2></p></caption><br>
            <table id="showcart">
               <tr>
                    <th class="pdl" align="left">Sản phẩm trong giỏ</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
                <tbody>
                    <?php 
                        viewcart();
                    ?>
               </tbody>
            </table>
        </div>
    </div>
</form>