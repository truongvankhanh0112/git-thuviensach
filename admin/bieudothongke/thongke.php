
<div id="contentthemdanhmuc" class="contentthem">
<a href="index.php?act=bieudothongke"><input type="submit" value="Xem biểu đồ" id="themdm"></a>
	<form method="post" action="index.php?act=thongke">
        <table style="
                        border-collapse: collapse;
                        width: 1000px;
                        margin: auto;" border="1"; align="center";>
                        <caption><h3>Thống kê sản phẩm theo danh mục</h3><br></caption>
            <tr>
                <th>Mã DM</th>
                <th>Tên danh mục</th>
                <th>Số lượng SP</th>
                <th>Giá Thấp nhất</th>
                <th>Giá Cao nhất</th>
                <th>Giá trung bình</th>
            </tr>
            <?php
                foreach ($listtk as $thongke) {
                    extract($thongke);
            ?>
            <tr>
                <td align="center"><?=$iddm?></td>
                <td class="uplower pdl"><?=$tendanhmuc?></td>
                <td align="center"><?=$countsp?></td>
                <td align="center"><?=$mingiakm?>.000đ</td>
                <td align="center"><?=$maxgiakm?>.000đ</td>
                <td align="center"><?=$avggiakm?></td>
            </tr>
            <?php
                }
            ?>
        </table>
	</form>
</div>