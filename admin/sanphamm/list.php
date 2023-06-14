<form id="boloc" action="index.php?act=listsp" method="post">
            <input type="text" id="iptim" name="kyw" placeholder="Nhập tên sản phầm cần tìm">
            <select name="danhmuc">
                <option value="0" selected>---Tất cả---</option>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        # code...
                        extract($danhmuc);
                        echo '<option style="text-transform: capitalize;" value="'.$id.'">'.$tendanhmuc.'</option>';
                    }
                ?>
            </select>
                <input type="submit" id="btntim" name="listGo" value="Tìm">
                <a id="themdm" href="index.php?act=addsp">Thêm sản phẩm mới</a>
        </form>
    <table id="formadd" style="
                border-collapse: collapse;
                margin: 10px  auto;" border="1"; align="center";>
                <caption><h1>Danh sách sản phẩm</h1></caption>
       <tr>
            <th>ID sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Danh mục</th>
            <th>Tác giả</th>
            <th>Hình ảnh</th>
            <th>Giá bán</th>
            <th>Giá Khuyến mãi</th>
            <th>Giới thiệu</th>
            <th>Chỉnh sửa</th>
       </tr>
    <?php
        foreach ($listsanpham as $sanpham) {
            # code...
            extract($sanpham);
            $suasp = "index.php?act=suasp&idSanpham=".$idSanpham;
            $xoasp = "index.php?act=xoasp&idSanpham=".$idSanpham;
            $gioithieusach = "index.php?act=gioithieusach&idSanpham=".$idSanpham;
            $anhsppath="../upload/".$anhsp;
            if (is_file($anhsppath)) {
                # code...
                $anhsp = "<img src='".$anhsppath."' height='80' >";
            }else{
                echo "Không có hình.";
            }
                echo '<tr>
                        <td align="center";>'.$idSanpham.'</td>
                        <td style="text-transform: capitalize;">'.$tensp.'</td>
                        <td style="text-transform: capitalize;">'.$iddm.'</td>
                        <td style="text-transform: capitalize;">'.$tacgia.'</td>
                        <td align="center";>'.$anhsp.'</td>
                        <td align="center";>'.$giasp.'.000đ</td>
                        <td align="center";>'.$giakm.'.000đ</td>
                        <td ><div class="gtsp">'.  $gioithieu.'</div></td>
                        <td align="center";><a href="'.$suasp.'">Sửa</a> | <a href="'.$xoasp.'">Xóa</a></td>
                    </tr>';
        }
    ?>
    </table>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>