<?php
    function insert_thanhvien( $email, $pass, $gender, $fullname, $phone, $diachi){
        $sql = "INSERT INTO  thanhvien (email, pass, gender, fullname, phone, diachi)
                 VALUES ('$email', '$pass', '$gender', '$fullname', '$phone','$diachi')";
        pdo_execute($sql);
    }
    function del_tv($id){
        $sql = "DELETE  FROM thanhvien WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_thanhvien(){
        $sql = "SELECT * FROM thanhvien";
        $listthanhvien = pdo_query($sql);
        return $listthanhvien;
    }
    function check_login($email, $pass){
        $sql = "SELECT * FROM thanhvien WHERE  email='".$email."' AND pass='".$pass."'" ;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function check_email($email){
        $sql = "SELECT * FROM thanhvien WHERE  email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id, $gender, $fullname, $phone, $diachi){//email='".$email."', pass='".$pass."',
        $sql = "UPDATE thanhvien SET  gender='".$gender."', fullname='".$fullname."', phone='".$phone."',diachi='".$diachi."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function update_thanhvien($vaitro, $id, $email, $pass){
        $sql = "UPDATE thanhvien SET vaitro='$vaitro',email='$email', pass='$pass' WHERE id=".$id;
        pdo_execute($sql);
    }
?>