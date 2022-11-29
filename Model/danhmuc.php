<?php
function insert_danhmuc($tenloai,$detail){
    $sql="insert into category(name,detail) values('$tenloai','$detail')";
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql="select * from category order by id_category desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
} 

function loadone_danhmuc($id_category){
    $sql="select * from category where id_category=".$id_category;
    $dm=pdo_query_one($sql);
    return $dm;
}

function delete_danhmuc($id_category){
    $sql="delete from category where id_category=".$id_category;
    pdo_execute($sql);
}

function update_danhmuc($id_category,$tenloai,$detail){
    $sql="update category set name='".$tenloai."',detail='".$detail."'where id_category= $id_category";
    pdo_execute($sql);
}

?>