<?php
    function loadall_binhluan(){
        // $sql="select * from comment where 1";
        // if($idpro>0)
        // $sql.=" AND id_product='".$idpro."'";
        // $sql.=" order by id_comment desc";
        // $listbinhluan=pdo_query($sql);
        // return $listbinhluan;

        $sql="select * from comment order by id_comment desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }

    function delete_binhluan($id_comment){
        $sql="delete from comment where id_comment=".$id_comment;
        pdo_execute($sql);
    }

    function loadall_binhluancheck(){
        // $sql="select * from comment_check where 1";
        // if($idpro>0)
        // $sql.=" AND id_product='".$idpro."'";
        // $sql.=" order by id_comment_check desc";
        // $listbinhluancheck=pdo_query($sql);
        // return $listbinhluancheck;

        $sql="select * from comment_check order by id_comment_check desc";
        $listbinhluancheck=pdo_query($sql);
        return $listbinhluancheck;
    }

    function delete_binhluan_check($id_comment_check){
        $sql="delete from comment_check where id_comment_check=".$id_comment_check;
        pdo_execute($sql);
    }

    function xacnhan_binhluan($id_comment_check,$username_check,$comment_check,$id_product_check,)
    {
        $sql="insert into comment values (null,'.$username_check.','.$comment_check.','$id_product_check')";
        pdo_execute($sql);
    }

?>