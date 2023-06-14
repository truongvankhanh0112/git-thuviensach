<form  action="index.php?act=listthanhvien" method="post">
        <table id="formadd" style="
                border-collapse: collapse;
                margin: 10px  auto;" border="1"; align="center";>
                <caption><h2>Danh sách các thành viên</h2></caption>
            <tr>
                <th>Mã</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Họ và Tên</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Vai Trò</th>
                <th>Tùy chỉnh</th>
            </tr>
            <?php
                    foreach ($listtv as $thanhvien) {
                        # code...
                        extract($thanhvien);
                        $xoatv = "index.php?act=xoatv&id=".$id;
                        $suatv ="index.php?act=suatv&id=".$id;
                        echo '  <tr>
                                    <td align="center";>'.$id.'</td>
                                    <td class="pdl">'.$email.'</td>
                                    <td align="center";>'.$gender.'</td>
                                    <td>'.$fullname.'</td>
                                    <td>'.$phone.'</td>
                                    <td style="width: 250px;">'.$diachi.'</td>
                                    <td align="center";>'.$vaitro.'</td>
                                    <td align="center";><a href="'.$suatv.'">Sửa</a> | <a href="'.$xoatv.'">Xóa</a></td>
                                </tr>';
                    }
                ?>
        </table>
</form>
