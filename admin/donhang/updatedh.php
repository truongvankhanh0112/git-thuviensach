<?php
      if(is_array($onedh)){
        extract($onedh);
    }
    $ttdh=get_ttdh(['ttdh']);
?>
<div id="contentthemdanhmuc" class="contentthem">
<h2>Cập nhật trạng thái đơn hàng:</h2> <br>
	 <form action="index.php?act=updatedh" method="post">
        <select id="adminadd_name" name="ttdh">
            <option value="<?=$trangthaidh?>"><?php if(isset($ttdh)&&($ttdh!="")) echo $ttdh;?></option>
            <option value="1">Đơn hàng mới</option>
            <option value="2">Đang xử lý</option>
            <option value="3">Đang giao</option>
            <option value="4">Hoàn thành</option>
        </select> 
        <br><input type="submit" id="themdm" name="capnhatdh" value="Cập nhật">
        <input type="hidden" name="iddonhang" value="<?php if(isset($iddonhang)&&($iddonhang>0)) echo $iddonhang;?>">
        <br>
        <a href="index.php?act=listdonhang"><input type="submit" id="themdm" Value="Xem danh sách đơn hàng"></a>
    </form>
</div>