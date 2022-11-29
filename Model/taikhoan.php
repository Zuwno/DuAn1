<?php
    function loadall_taikhoan(){
        $sql="select * from account order by id_account desc";
        $list_taikhoan=pdo_query($sql);
        return $list_taikhoan;
    }



?>