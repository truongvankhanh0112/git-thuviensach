<?php
      if(is_array($dm)){
        extract($dm);
    }
?>
<div id="contentthemdanhmuc" class="contentthem">
	<form method="post" action="index.php?act=updatedm">
		<h2>Cập nhật danh mục:</h2> <br>
		<input id="adminadd_name" type="text" name="tendanhmuc" value="<?php if(isset($tendanhmuc)&&($tendanhmuc!="")) echo $tendanhmuc;?>">
		<input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
        <input type="submit" id="themdm" name="capnhat" value="Cập nhật"><br>
        <a href="index.php?act=listdm"><input type="submit" id="themdm" Value="Xem danh sách"></a>
	</form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
