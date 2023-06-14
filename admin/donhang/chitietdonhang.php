<div id="contentthemdanhmuc" class="contentthem">
<a href="index.php?act=listdonhang"><input type="submit" id="themdm" value="Trở về"></a><br>
<p class="pdl">Mã đơn hàng: <b>TVS<?=$iddonhang?></b></p>

</div>
<form  action="index.php?act=xemctdonhang" method="post">
    <table   id="formadd" border="1"style="
                border-collapse: collapse;
                margin: 10px  auto; width: 90%;">
        <tr>
            <th>Ảnh</th>
            <th>Tên Sản phẩm</th>
            <th>Phương thức</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php 
          $tdh=0;
            foreach ($onedh as $onedh) {
                extract($onedh);
                $tdh+=$thanhtien;
                // $anhsppath="../upload/".$anhsp;
                // $anhsp=$img_path.$onedh[3];
                $pttt=get_pttt(['pttt']);
        ?>
           <tr id="ctdh">
               <td><img style="height:70px; margin:5px;" src="../<?=$anhsp?>"></td>
                <td class="pdl"> <?=$tensp?> <b>x<?=$soluong?></b>  </td>
                <td align="center"><?=$pttt?></td>
                <td align="center"><?=$giakm?>.000đ</td>
                <td align="center"><?=$thanhtien?>.000đ</td>
            </tr>
        <?php
            }
        ?>
        <tr  id="tongtiencart">
            <td align="right" colspan="4"><h3>Tổng đơn hàng:  </h3> </td>
            <td align="center"><b><?=$tdh?>.000đ</b></td>
        </tr>
    </table>
</form>
