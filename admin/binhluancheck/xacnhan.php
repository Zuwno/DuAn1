<?php 

include 'db.php';
$id = $_GET['id'];
echo $id;
$sql = "INSERT INTO comment (username, comment, id_product) SELECT username_check, comment_check, id_product_check FROM comment_check where id_comment_check = '$id';";
$sqldelete = "delete *from comment_check where id_comment_check = '$id' ";
$kq = $connect->prepare($sql);
if ($kq->execute()) {
    
    $kqq = $connect->prepare($sqldelete);
    header("Location: http://localhost/da1/Admin/index.php?act=dsbl");
}
