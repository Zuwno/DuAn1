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

    function loadone_taikhoan($id_account){
        $sql="select * from account where id_account=".$id_account;
        $tk=pdo_query_one($sql);
        return $tk;
    }

    function update_taikhoan($id_account,$tentk,$pass,$hinh,$name,$email,$sdt){
        if($hinh!="")
            $sql="update account set username='".$tentk."',password='".$pass."',name='".$name."',img='".$hinh."',email='".$email."',phone='".$sdt."' where id_account=".$id_account;
        else
            $sql="update account set username='".$tentk."',password='".$pass."',name='".$name."',email='".$email."',phone='".$sdt."' where id_account=".$id_account;
        
       pdo_execute($sql);
    }

    function delete_taikhoan($id_account){
        $sql="delete from account where id_account=".$id_account;
        pdo_execute($sql);
    }


?>