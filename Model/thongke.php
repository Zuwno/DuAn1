<?php
        include '../Model/db.php';
        // Lenh sql
        $soluongloaihang = 'SELECT  count(*) as total from category; ';
        $soluongsanpham = 'SELECT  count(*) as total from  product';
        $soluongtaikhoan = 'SELECT  count(*) as total from account';
        $binhluandangxetduyet = 'SELECT  count(*) as total from comment_check';
        $binhluandaxetduyet = 'SELECT  count(*) as total from comment';
        $soluongdonhang = 'SELECT  count(*) as total from bill  ';
        
        // khởi chạy
        $soluongloaihangt = $connect->query($soluongloaihang);
        $soluongloaihangtr = $soluongloaihangt->fetch();
        $soluongsanphamt = $connect->query($soluongsanpham);
        $soluongsanphamtr = $soluongsanphamt->fetch();
        $soluongtaikhoant = $connect->query($soluongtaikhoan);
        $soluongtaikhoantr = $soluongtaikhoant->fetch();
        
        $binhluandangxetduyett = $connect->query($binhluandangxetduyet);
        $binhluandangxetduyettr = $binhluandangxetduyett->fetch();
        
        $binhluandaxetduyett = $connect->query($binhluandaxetduyet);
        $binhluandaxetduyettr = $binhluandaxetduyett->fetch();

        $soluongdonhangt = $connect->query($soluongdonhang);
        $soluongdonhangtr = $soluongdonhangt->fetch();
       

        ?>