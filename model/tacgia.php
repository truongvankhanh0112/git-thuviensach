<?php
    function insert_tacgia($tentacgia){
        $sql = "INSERT INTO  tacgia (tentacgia) VALUES ('$tentacgia')";
        pdo_execute($sql);
    }
    function delete_tacgia($id){
        $sql = "DELETE  FROM tacgia WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_tacgia(){
        $sql = "SELECT * FROM tacgia order by id desc";
        $listtacgia = pdo_query($sql);
        return $listtacgia;
    }
    function loadone_tacgia($id){
        $sql = "SELECT * FROM tacgia WHERE  id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_tacgia($id, $tentacgia){
        $sql = "UPDATE tacgia SET tentacgia='".$tentacgia."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>