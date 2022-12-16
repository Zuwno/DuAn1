<?php
    function delete_lienhe($id_contact){
        $sql="delete from servicecontact where id_contact=".$id_contact;
        pdo_execute($sql);
    }



?>