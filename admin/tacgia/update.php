<?php
      if(is_array($dm)){
        extract($dm);
    }
?>
<div id="contentthemdanhmuc" class="contentthem">
	<form method="post" action="index.php?act=updatetg">
		<h2>Cập nhật tác giả:</h2> <br>
		<input id="adminadd_name" type="text" name="tentacgia" value="<?php if(isset($tentacgia)&&($tentacgia!="")) echo $tentacgia;?>">
		<input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
        <input type="submit" id="themdm" name="capnhattg" value="Cập nhật"><br>
        <a href="index.php?act=listtg"><input type="submit" id="themdm" Value="Xem danh sách"></a>
	</form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
