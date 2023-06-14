<?php
	//extract($onedh);
?>
<div class="mybill">
<p class="titlegh"><a href="index.php">Trang chủ</a> / <a href="index.php?act=xemthongtin">Thông tin</a> / <a href="index.php?act=mybill">Đơn hàng của tôi</a> / <a href="#">Chi tiết đơn hàng</a></p>
    <table class="mybill" border="1">
        <caption><div align="left"> Mã đơn hàng: <b>TVS<?=$iddonhang?></b></div></caption>
        <tr>
            <th>Tên Sản phẩm</th>
            <th>Phương Thức</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php 
          $tdh=0;
            foreach ($onedh as $onedh) {
                extract($onedh);
                $tdh+=$thanhtien;
                $anhsp=$onedh[3];
                $pttt=get_pttt(['pttt']);
        ?>
           <tr id="ctdh">
                <td class="pdl"><b>x<?=$soluong?></b> <img style="height:70px; margin:5px;" src="<?=$anhsp?>"><?=$tensp?></td>
                <td align="center"><?=$pttt?></td>
                <td align="center"><?=$giakm?>.000đ</td>
                <td align="center"><?=$thanhtien?>.000đ</td>
            </tr>
        <?php
            }
        ?>
        <tr  id="tongtiencart">
            <td align="right" colspan="3"><h3>Tổng đơn hàng:</h3> </td>
            <td align="center"><b><?=$tdh?>.000đ</b></td>
        </tr>
    </table>
</div>