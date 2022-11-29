<?php
    function insert_sanpham($tensp,$giasp,$hinh,$detail,$iddm){
        $sql="insert into product(name,price,img,detail,id_category ) values('$tensp','$giasp','$hinh','$detail','$iddm')";
        pdo_execute($sql);
    }

    function loadall_sanpham($kyw="",$iddm=0){
        $sql="select * from product where 1"; 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and id_category  ='".$iddm."'";
        }
        $sql.=" order by id_product desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function delete_sanpham($id_product){
        $sql="delete from product where id_product=".$id_product;
        pdo_execute($sql);
    }

    function loadone_sanpham($id_product){
        $sql="select * from product where id_product=".$id_product;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id_product,$tensp,$giasp,$hinh,$detail,$iddm){
        if($hinh!="")
            $sql="update product set name='".$tensp."',price='".$giasp."',img='".$hinh."',detail='".$detail."',id_category='".$iddm."' where id_product=".$id_product;
        else
        $sql="update product set name='".$tensp."',price='".$giasp."',detail='".$detail."',id_category='".$iddm."' where id_product=".$id_product;
        
       pdo_execute($sql);
    }


?>