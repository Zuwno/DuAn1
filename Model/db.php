<?php 
    try {
        $connect = new PDO
        ("mysql:host=localhost;dbname=duan1;charset=utf8","root","");
    } catch (\Throwable $th) {
        echo "Lỗi kết nối";
    }
?>