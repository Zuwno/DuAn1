<?php


function loadall_bill(){
    $sql="select * from bill order by id_bill desc";
    $listbill=pdo_query($sql);
    return $listbill;
} 
function delete_bill($id_bill){
    $sql="delete from bill where id_bill=".$id_bill;
    pdo_execute($sql);
}
function loadone_bill($id_bill){
    $sql="select * from bill where id_bill=".$id_bill;
    $bill=pdo_query_one($sql);
    return $bill;
}

function update_bill($id_bill,$bill_status){
        $sql="update bill set bill_status='".$bill_status."' where id_bill=".$id_bill;
        pdo_execute($sql);
    }
    
  

?>