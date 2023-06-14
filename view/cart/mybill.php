<div class="mybill">
<p class="titlegh"><a href="index.php">Trang chủ</a> / <a href="index.php?act=xemthongtin">Thông tin</a> / <a href="#">Đơn hàng của tôi</a></p>
    <table class="mybill" border="1">
        <tr>
            <th>Mã đơn hàng</th>
            <th>Sản phẩm</th>
            <th>Ngày đặt hàng</th>
            <th>Tổng giá trị đơn hàng</th>
            <th>Tình trạng đơn hàng</th>
        </tr>
        <?php
            if (is_array($listbill)) {
                foreach ($listbill as $bill) {
                    extract($bill);
                    $ttdh=get_ttdh($bill['trangthaidh']);
                    $ctdh="index.php?act=donhangct&iddonhang=".$iddonhang;
                    echo '<tr style="margin: 5px;">
                            <td align="center">TVS'.$bill['iddonhang'].'</td>
                            <td align="center"><a href="'.$ctdh.'">Xem chi tiết</a></td>
                            <td align="center">'.$bill['ngaydathang'].'</td>
                            <td align="center">'.$bill['tongdonhang'].'.000đ</td>
                            <td align="center">'.$ttdh.'</td>
                          </tr>';
                }
            }
                        
        ?>
    </table>
</div>