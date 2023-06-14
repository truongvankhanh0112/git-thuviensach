<div id="contentdanhsachdanhmuc contentthemdanhmuc" class="contentthem contentdanhsach">
<a id="themdm" href="index.php?act=adddm">Thêm danh mục mới</a>
    <h2 style="text-align:center; margin-top:20px;">Danh sách tất cả danh mục</h2>
        <from action="index.php?act=listdmtc" method="post">
        <table style="
                        border-collapse: collapse;
                        width: 1000px;
                        margin: auto;
        " border="1"; align="center"; id="tabledanhmuc">
            <tr>
                <th>STT</th>
                <th>Tên Danh Mục</th>
                <th align="center";></th>
            </tr>
            
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        # code...
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=".$id;
                        $xoadm = "index.php?act=xoadm&id=".$id;
                        echo '  <tr>
                                <td align="center">'.$id.'</td>
                                <td style="padding-left:12px; text-transform: capitalize;">'.$tendanhmuc.'</td>
                                <td align="center";><a href="'.$suadm.'">Sửa</a> | <a href="'.$xoadm.'">Xóa</a> </td>
                                </tr>';
                    }
                ?>
                <br>
        </table>
        </from>
</div>