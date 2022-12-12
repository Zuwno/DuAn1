<?php
    function loadall_taikhoan(){
        $sql="select * from account order by id_account desc";
        $list_taikhoan=pdo_query($sql);
        return $list_taikhoan;
    }

    function insert_taikhoan($tentk,$pass,$email,$name,$sdt,$hinh){
        $sql="insert into account(username,password,name,img,email,phone ) values('$tentk','$pass','$name','$hinh','$email','$sdt')";
        pdo_execute($sql);
    }

?>