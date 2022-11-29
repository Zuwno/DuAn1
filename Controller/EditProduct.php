<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
</head>

<body>
<form action="" method="POST" enctype="multipart/form-data">
        <label for="">Tên sản phẩm:</label>
        <br>
        <input type="text" name="tensp">
        <br>
        <label for="">Giá tiền:</label>
        <br>
        <input type="number" name="giatien">
        <br>
        <label for="">Giá khuyến mại:</label>
        <br>
        <input type="number" name="giakhuyenmai">
        <br>
        <label for="">Ảnh sản phẩm:</label>
        <br>
        <input type="file" name="img">
        <br>
        <label for="">Detail:</label>
        <br>
        <textarea name="detail" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="">Danh mục:</label>
        <select name="danhmuc" id="">
            <?php
            include './Model/db.php';
            $sqlProduct = "select * from category";
            $resultt = $connect->query($sqlProduct);
            foreach ($resultt as $row) {
            ?>
                <option value="<?php echo $row['id_category'] ?>"><?php echo $row['name'] ?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <input type="submit" name="btn_submit" value="Thêm sản phẩm">
    </form>
    </section>
    <?php
    include '../Model/db.php';
    if (isset($_POST['btn_submit'])) {
        $tensp = $_POST['tensp'];
        $giatien = $_POST['giatien'];
        $giakhuyenmai = $_POST['giakhuyenmai'];
        $detail = $_POST['detail'];
        $danhmuc = $_POST['danhmuc'];
        $img= $_FILES['img']['name'];
        $tmp_img=$_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_img,"../imgs/".$img);
        $sql_insert = "Update product set name = '$tensp', price = '$giatien',sale = '$giakhuyenmai', img = '$img', detail = '$detail' , id_category = '$danhmuc'  where id_product = '2' ";
        $sql = $connect->prepare($sql_insert);
        $kq = $connect->prepare($sql_insert);
        if ($kq->execute()) {
            header("Location: index.php");
        } else {
            echo "Sửa sản phẩm thất bại";
        }
    }
    ?>
</body>

</html>