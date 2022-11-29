<?php 
include '../Model/db.php';
$id = $_GET['id'];
$sql = "delete from category where id_category = '$id'";
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