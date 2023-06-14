<form  action="index.php?act=listdonhang" method="post">
        <table id="formadd" style="
                border-collapse: collapse;
                margin: 10px  auto;" border="1"; align="center";>
                <caption><h2>Danh sách đơn hàng</h2></caption>
            <tr>
                <th>Mã đơn</th>
                <th>Xem đơn hàng</th>
                <th>Thông tin người đặt hàng</th>
                <th>Tổng đơn hàng</th>
                <th>Thời gian đặt hàng</th>
                <th>Tình trạng</th>
                <th>Tùy chỉnh</th>
            </tr>
            <?php
                    foreach ($listdonhang as $donhang) {
                        # code...
                        extract($donhang);
                        $ttdh=get_ttdh($donhang['trangthaidh']);
                        $pttt=get_pttt($donhang['pttt']);
                        $xoadh = "index.php?act=xoadh&iddonhang=".$iddonhang;
                        $suadh = "index.php?act=suadh&iddonhang=".$iddonhang;
                        $xemctdonhang="index.php?act=xemctdonhang&iddonhang=".$iddonhang;
                        echo '  <tr>
                                    <td align="center";>TVS'.$iddonhang.'</td>
                                    <td class="pdl"><a href="'.$xemctdonhang.'">Xem chi tiết</a></td>
                                    <td class="uplower pdl">
                                        '.$gender.': '.$fullname.'<br>
                                        Sđt: '.$phone.' <br>
                                        Địa chỉ: '.$diachi.'
                                    </td>
                                    <td align="center">'.$tongdonhang.'.000đ</td>
                                    <td style="width: 150px;">'.$ngaydathang.'</td>
                                    <td align="center">'.$ttdh.'</td>
                                    <td align="center"><a href="'.$suadh.'"><input type="button" id="capnhatttdh" value="Sửa"></a> |<a href="'.$xoadh.'"><input type="button" id="capnhatttdh" value="Xóa"></a></td>
                                </tr>';
                    }
                ?>
        </table>
</form>
<!-- <div class="xacnhanxoa">
            <div class="fomxacnhan">
                12312
            </div>
</div> -->