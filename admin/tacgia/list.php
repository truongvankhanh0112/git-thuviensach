<div id="contentdanhsachdanhmuc" class="contentdanhsach">
    <h2 style="text-align:center; margin-top:20px;">Danh sách các tác giả</h2>
        <from action="index.php?act=listtg" method="post">
        <table style="
                        border-collapse: collapse;
                        width: 1000px;
                        margin: auto;
        " border="1"; align="center"; id="tabledanhmuc">
            <tr>
                <th>Mã</th>
                <th>Tên Tác Giả</th>
                <th align="center";></th>
            </tr>
            
                <?php
                    foreach ($listtacgia as $tacgia) {
                        # code...
                        extract($tacgia);
                        $suatg = "index.php?act=suatg&id=".$id;
                        $xoatg = "index.php?act=xoatg&id=".$id;
                        echo '  <tr>
                                <td align="center">'.$id.'</td>
                                <td style="padding-left:12px; text-transform: capitalize;">'.$tentacgia.'</td>
                                <td align="center";><a href="'.$suatg.'">Sửa</a> | <a href="'.$xoatg.'">Xóa</a> </td>
                                </tr>';
                    }
                ?>
                <br>
            
        </table>
        </from>
</div>