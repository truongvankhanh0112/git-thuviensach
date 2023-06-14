<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $anhsppath="../upload/".$anhsp;
    if (is_file($anhsppath)) {
        # code...
        $anhsp = "<img src='".$anhsppath."' height='80' >";
    }else{
        echo "Không có hình.";
    }
?>
<div id="formadd" class="update">
<form method="post" action="index.php?act=updatesp" enctype="multipart/form-data">
    <a href="index.php?act=listsp" id="xemds">Xem danh sách</a> <br>
		<h2>Cập nhật sản phẩm:</h2> <br>
        Tên sản phẩm: <br>
		<input id="adminadd_name" type="text" name="tensp" value="<?=$tensp?>"><br>
        Danh mục: <span style="color:red;">*</span>(Bắt buộc) <br>
        <select name="danhmuc">
            <option value=""></option>
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                    # code...
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$tendanhmuc.'</option>';
                }
            ?>
        </select> <br>
        Chọn lại danh mục: <span style="color:red;">*</span> <br>
        <select name="iddm">
            <option value="<?=$iddm?>" selected><?=$iddm?></option>
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                    # code...
                    extract($danhmuc);
                    echo '<option value="'.$tendanhmuc.'">'.$tendanhmuc.'</option>';
                }
            ?>
        </select> <br>
        Tác giả: <span style="color:red;">*</span><br>
        <select name="tacgia" >
            <option value="<?=$tacgia?>" selected><?=$tacgia?></option>
            <?php
                foreach ($listtacgia as $tacgia) {
                    # code...
                    extract($tacgia);
                    echo '<option value="'.$tentacgia.'">'.$tentacgia.'</option>';
                }
            ?>
        </select> <br>
        Hình: <br>
        <input type="file" name="anhsp"><?=$anhsp?><br>
        Giá sản phẩm: (đơn vị nghìn đồng) <br>
		<input id="adminadd_name" type="text" name="giasp" value="<?=$giasp?>"><br>
        Giá sau khuyến mãi: (đơn vị nghìn đồng) <br>
		<input id="adminadd_name" type="text" name="giakm" value="<?=$giakm?>"><br>
        Giới thiệu: <br>
        <textarea name="gioithieu" id="editor1" cols="70" rows="10"><?=$gioithieu?></textarea>
        <input type="hidden" name="idSanpham" value="<?=$idSanpham?>">
		<input type="submit" id="themdm" name="capnhat" value="Cập nhật"><br>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
	</form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
