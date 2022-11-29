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

?>