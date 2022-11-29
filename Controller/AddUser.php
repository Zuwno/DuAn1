<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Tên người dùng:</label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="">Mật khẩu:</label>
        <br>
        <input type="password" name="password">
        <br>
        <label for="">Ảnh</label>
        <br>
        <input type="file" name="img">
        <br>
        <label for="">Email:</label>
        <br>
        <input type="text" name="email">
        <br>
        <label for="">Phone:</label>
        <br>
        <input type="text" name="phone">
        <br>
        <label for="">Date</label>
        <br>
        <input type="date" name="date">
        <br>
        <input type="submit" name="btn_submit" value="Thêm danh mục">
    </form>
    <?php
    include '../Model/db.php';
    if (isset($_POST['btn_submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $img = $_POST['img'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $sql_insert = "insert into account values('$username','$password','$img','$email','$phone','$date',null)";
        if ($username == '' || $password == ''|| $phone == '' ) {
            echo "Vui lòng không để trống";
        } else {
            $sql = $connect->prepare($sql_insert);
            $kq = $connect->prepare($sql_insert);
            if ($kq->execute()) {
                header("Location: index.php");
            } else {
                echo "Thêm người dùng thất bại";
            }
        }
    }
    ?>
</body>

</html>