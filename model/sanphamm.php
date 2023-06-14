<?php
    function insert_sanpham($tensp, $danhmuc, $iddm, $tacgia, $anhsp, $giasp, $giakm, $gioithieu){
        $sql = "INSERT INTO  sanphamm (tensp, danhmuc, iddm, tacgia, anhsp, giasp, giakm, gioithieu) 
                VALUES ('$tensp','$danhmuc','$iddm','$tacgia','$anhsp','$giasp','$giakm','$gioithieu')";
        pdo_execute($sql);
    }
    function delete_sanpham($idSanpham){
        $sql = "DELETE  FROM sanphamm WHERE idSanpham=".$idSanpham;
        pdo_execute($sql);
    }
    function loadall_sanpham_trangchu(){
        $sql="SELECT * FROM sanphamm WHERE 1";
        $sql.=" order by idSanpham desc limit 18";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="", $danhmuc=0){
        $sql="SELECT * FROM sanphamm WHERE 1";
        if ($kyw!=""){
            $sql.=" and tensp like '%".$kyw."%'";
        }
        if ($danhmuc > 0){
            $sql.=" and danhmuc='".$danhmuc."'";
        }
        $sql.=" order by idSanpham desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadone_tendm($iddm){
        if($iddm>0){
        $sql = "SELECT * FROM danhmuc WHERE  id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $tendanhmuc;
        }else{
            return "";
        }
    }
    function loadone_sanpham($idSanpham){
        $sql = "SELECT * FROM sanphamm WHERE  idSanpham=".$idSanpham;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($idSanpham, $tensp, $danhmuc, $iddm, $tacgia, $anhsp, $giasp, $giakm, $gioithieu){
    if($anhsp!="")
        $sql = "UPDATE sanphamm SET tensp='".$tensp."',danhmuc='".$danhmuc."',iddm='".$iddm."',tacgia='".$tacgia."',anhsp='".$anhsp."',giasp='".$giasp."',giakm='".$giakm."',gioithieu='".$gioithieu."' WHERE idSanpham=".$idSanpham;
    else
    $sql = "UPDATE sanphamm SET tensp='".$tensp."',danhmuc='".$danhmuc."',iddm='".$iddm."',tacgia='".$tacgia."',giasp='".$giasp."',giakm='".$giakm."',gioithieu='".$gioithieu."' WHERE idSanpham=".$idSanpham;
        pdo_execute($sql);
    }
    function loadall_sp_trangchu($danhmuc){
        $sql="SELECT * FROM sanphamm WHERE ";
        $sql.=" danhmuc=".$danhmuc;
       $sql.=" order by idSanpham desc limit 6";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } 
?>