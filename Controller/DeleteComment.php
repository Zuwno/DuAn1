<?php 
include '../Model/db.php';
$id = $_GET['id'];
$sql = "delete from comment where id_comment = '$id'";
$result = $connect->query($sql);
$kq = $connect->prepare($sql);
if($kq)
{
    header("Location: ");
}
else
{
    echo "Error";
}
?>