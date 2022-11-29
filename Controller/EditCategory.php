<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa danh mục</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Tên danh mục:</label>
        <br>
        <input type="text" name="tendanhmuc">
        <br>
        <label for="">Thông tin danh mục</label>
        <br>
        <textarea name="detail" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="btn_submit" value="Thêm danh mục">
    </form>
    <?php
    include '../Model/db.php';
    if (isset($_POST['btn_submit'])) {
        $tendanhmuc = $_POST['tendanhmuc'];
        $detail = $_POST['detail'];
        $sql_insert = "update category set name = '$tendanhmuc', detail =  '$detail' where id_category = ''";
        if ($tendanhmuc == '' ) {
            echo "Vui lòng không để trống";
        } else {
            $sql = $connect->prepare($sql_insert);
            $kq = $connect->prepare($sql_insert);
            if ($kq->execute()) {
                header("Location: index.php");
            } else {
                echo "Sửa danh mục thất bại";
            }
        }
    }
    ?>
</body>

</html>