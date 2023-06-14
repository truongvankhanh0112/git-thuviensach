
<form id="formadd" method="post" action="index.php?act=addsp" enctype="multipart/form-data">
    <a href="index.php?act=listsp" id="xemds">Xem danh sách</a> <br>
		<h2>Thêm sản phẩm:</h2> <br>
        Tên sản phẩm: <br>
		<input id="adminadd_name" type="text" name="tensp"><br>
        Danh mục: <br>
        <select name="danhmuc">
            <option value="">---Tất cả---</option>
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                    # code...
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$tendanhmuc.'</option>';
                }
            ?>
        </select> <br>
        Chọn lại Danh mục: <br>
        <select name="iddm">
            <option value="">---Tất cả---</option>
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                    # code...
                    extract($danhmuc);
                    echo '<option value="'.$tendanhmuc.'">'.$tendanhmuc.'</option>';
                }
            ?>
        </select> <br>
        Tác giả: <br>
        <select name="tacgia" >
            <option value="0" selected>---Tất cả---</option>
            <?php
                foreach ($listtacgia as $tacgia) {
                    # code...
                    extract($tacgia);
                    echo '<option value="'.$tentacgia.'">'.$tentacgia.'</option>';
                }
            ?>
        </select> <br>
        Hình: <br>
        <input type="file" name="anhsp"><br>
        Giá sản phẩm: (đơn vị nghìn đồng) <br>
		<input id="adminadd_name" type="text" name="giasp"><br>
        Giá sau khuyến mãi: (đơn vị nghìn đồng) <br>
		<input id="adminadd_name" type="text" name="giakm"><br>
        Giới thiệu: <br>
        <textarea name="gioithieu" id="editor1" cols="30" rows="10"></textarea>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
		<input type="submit" id="themdm" name="themmoi" value="Thêm"><br>
	</form>
            
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
