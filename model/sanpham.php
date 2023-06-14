<?php
    function insert_sanpham( $tensp, $iddm, $idtacgia, $anhsp, $giasp, $giakm, $gioithieusp){
        $sql = "INSERT INTO  sanpham (tensp, iddm, idtacgia, anhsp, giasp, giakm, gioithieusp)
                 VALUES ('$tensp', '$iddm', '$idtacgia', '$anhsp', '$giasp','$giakm', '$gioithieusp')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE  FROM sanpham WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_trangchu(){
        $sql="SELECT * FROM sanpham WHERE 1 order by id limit 6";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="", $iddm=0){
        $sql="SELECT * FROM sanpham WHERE 1";
        if ($kyw!=""){
            # code...
            $sql.=" and tensp like '%".$kyw."%'";
        }
        if ($iddm>0) {
            # code...
            $sql.=" and iddm='".$iddm."'";
        }
        $sql.=" order by id desc";
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
    function loadone_tentg($idtg){
        $sql = "SELECT * FROM tacgia WHERE  id=".$idtg;
        $tg=pdo_query_one($sql);
        extract($tg);
        return $tentacgia;
    }
    function loadone_sanpham($id){
        $sql = "SELECT * FROM sanpham WHERE  id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($id, $tentacgia){
        $sql = "UPDATE tacgia SET tentacgia='".$tentacgia."' WHERE id=".$id;
        pdo_execute($sql);
    }  
?>