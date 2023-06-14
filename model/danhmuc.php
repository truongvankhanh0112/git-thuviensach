<?php
    function insert_danhmuc($tendanhmuc){
        $sql = "INSERT INTO  danhmuc (tendanhmuc) VALUES ('$tendanhmuc')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "DELETE  FROM danhmuc WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql = "SELECT * FROM danhmuc WHERE  id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id, $tendanhmuc){
        $sql = "UPDATE danhmuc SET tendanhmuc='".$tendanhmuc."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function load_dm_trangchu(){
        $sql="SELECT * FROM danhmuc WHERE 1 limit 3";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
?>