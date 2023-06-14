<?php
    if (isset($bill)&&(is_array($bill))) {
        # code...
        extract($bill);
        $pttt=get_pttt($bill['pttt']);
    }
    ?>
<div class="billcomfirm">
        <h1>Cảm ơn bạn đã đặt hàng</h1><br>
        <p>Mã đơn hàng của bạn là: <b>TVS<?=$bill['iddonhang']?></b></p><br>
        <p>Ngày đặt hàng: <?=$bill['ngaydathang']?></p>
        <p id="thongtinnguoinhan">Thông tin người nhận</p>
        <p>Tên: <?=$bill['fullname']?></p>
        <p>Số điện thoại: <?=$bill['phone']?></p>
        <p>Địa chỉ: <?=$bill['diachi']?></p>
        <p>Phương thức thanh toán: <?=$pttt?></p>
       <?php
         show_chitiet_bill($billct);
       ?>
</div>
<style>
    #tbl-bill th {
        height: 30px;
        /* background-color: aqua; */
        text-align: center;
    }

    #tbl-bill td {
        text-align: center;
    }

    #tbl-bill td:nth-child(2) {
        text-align: left;
    }

    #tbl-bill th:nth-child(1) {
        width: 100px
    }

    #tbl-bill th:nth-child(2) {
        width: 400px
    }

    #tbl-bill th:nth-child(3) {
        width: 150px
    }

    #tbl-bill th:nth-child(4) {
        width: 50px
    }

    #tbl-bill th:nth-child(5) {
        width: 200px
    }
</style>