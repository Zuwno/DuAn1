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
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_bill($id_bill,$id_product,$ten_user,$diachi,$sdt,$tong,$date,$ttdh){
  
        $sql="update bill set id_product='".$id_product ."',receive_name='".$ten_user."',receive_address='".$diachi."',receive_tel='".$sdt."',total_product='".$tong."',bill_date='".$date."',bill_status='".$ttdh."' where id_bill=".$id_bill;
        pdo_execute($sql);
    }
    
  

?>