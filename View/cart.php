<?php
require "../Model/pdo.php";
session_start();
if(!empty($_GET['id'])){
    $id_product = $_GET['id'];
}

if (!empty($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
}
if (isset($_POST['submit'])) {
    $name = $_POST['hoten'];
    $address = $_POST['diachi'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $content = $_POST['noidung'];
    $thanhtoan = $_POST['thanhtoan'];
    $total_all = $_POST['total_all'];
    $sql = "INSERT INTO bill (bill_address, bill_email, bill_tel, bill_pttt, total_all, receive_name, bill_status, thanhtoan) VALUES ('$address', '$email','$phone', '$content','$total_all','$name','Đang xác nhận','$thanhtoan')";
    $query = pdo_execute($sql);
    if (!empty($sql)) {
        $sql = "SELECT * from bill";
        $bills = pdo_query($sql);
        foreach ($bills as $item) {
            $id_bill = $item['id_bill'];
        }
        foreach ($cart as $item => $val) {
            $sql = "INSERT INTO cart (id_bill, id_product, amount, price ) VALUES ($id_bill, $id_product, '$val[sl]', '$val[price]')";
            $query = pdo_execute($sql);
        }
    }
}
?>
<?php
                        include '../Model/db.php';
                        if (isset($_POST['submit'])) {
                            $fullname = $_POST['hoten'];
                            $diachi = $_POST['diachi'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $noidung = $_POST['noidung'];
                            $sql_insert = "insert into servicecontact values(null,'$fullname','$diachi','$email','$phone','$noidung')";
                            if ($fullname == '' || $diachi == '' || $phone == '') {
                                echo "<script>alert('Vui lòng không để trống thông tin')</script>";
                            } else {
                                $sql = $connect->prepare($sql_insert);
                                $kq = $connect->prepare($sql_insert);
                                if ($kq->execute()) {
                                    // echo "<script>alert('Gửi thông tin thành công, chúng tôi sẽ sớm liên hệ')</script>";
                                    header("Location: thongbaocart.php");
                                } else {
                                    echo "<script>alert('Gửi thông tin thất bại, vui lòng thử lại')</script>";
                                }
                            }
                        }
                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Taehui - Giới thiệu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="//theme.hstatic.net/200000557063/1000907375/14/favicon.png?v=1162" type="image/png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>


    <style>
        * {
            font-family: 'Tinos', serif;

        }

        p {
            font-size: 18px;
        }
        html,
      body {
        height: 100%;
      }
    
      @media (min-width: 640px) {
        table {
          display: inline-table !important;
        }
    
        thead tr:not(:first-child) {
          display: none;
        }
      }
    
      td:not(:last-child) {
        border-bottom: 0;
      }
    
      th:not(:last-child) {
        border-bottom: 2px solid rgba(0, 0, 0, .1);
      }
    </style>
</head>

<body>
    <article class="">
    <header class="nav-main box-border">
      <section class="bg-[#e76ea5] ">
        <div class="max-w-7xl m-auto flex justify-between text-white items-center ">

          <span class="py-2 px-20 md:px-0 ">CÔNG TY CỔ PHẦN TAEHUI</span>
          <div class="flex items-center space-x-3 hidden md:block">

            <a href=""><i class="fa fa-envelope px-2 " aria-hidden="true"></i>taehuivietnam@gmail.com </a>

            <a href=""><i class="fa fa-phone-square px-2" aria-hidden="true"></i>08 6262 1883</a>
            <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
          </div>

        </div>
      </section>
      <section class=" max-w-8xl m-auto  py-2 relative z-[999] shadow-lg   ">
        <div class="flex  justify-between items-center px-2 md:px-28 bg-white w-full">
          <a href="../index.php"><img class="w-[180px]" src="../imgs/header_logo.png" alt=""></a>
          <div class="text-right">
          <button class="md:hidden md:text-right" onclick="handClick()">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
            <ul id="main-menu" class=" gap-4 font-bold hidden md:flex items-end text-right     delay-150  ">
              <li class="hover:underline  hover:text-[#e76ea5]"><a href="../index.php">Trang chủ</a></li>
              <li class="hover:underline  hover:text-[#e76ea5]"><a href="./gioithieu.php">Giới thiệu</a></li>

              <li>
                <a href="./sanpham.php" class="hover:underline  hover:text-[#e76ea5]">Sản phẩm</a>
                <ul class="list-sanPham  px-4 w-[200px]  border border-[#bbb] ">
                  <li class="text-[#777] hover:text-[#e76ea5] font-[400] border-b-2 py-2"><a href="">Hộp đơn</a></li>
                  <hr>
                  <li class="text-[#777] hover:text-[#e76ea5] font-[400] border-b-2 py-2"><a href="">Combo 2 hộp</a></li>
                  <li class="text-[#777] hover:text-[#e76ea5] font-[400]  py-2"><a href="">Combo 3 hộp</a></li>
                </ul>
                <style>
                  .list-sanPham {
                    background-color: white;
                    position: absolute;
                    display: none;
                    z-index: 1;

                  }

                  .nav-main ul li:hover .list-sanPham {
                    display: block;
                  }
                </style>
              </li>


              <li class="hover:underline  hover:text-[#e76ea5]"><a href="./lienHe.php">Liên hệ</a></li>
            </ul>
          </div>
        </div>
      </section>
    </header>
        <section class="">
        <div
        class=" mx-auto px-5 h-full w-full bg-no-repeat bg-cover"
        class="w-full"  style="background-image: url('../imgs/breadcrumb_img.png') ;">
            <div class=" py-3 md:py-10 md:pl-28 relative" >
            <h2  class="text-white font-bold  text-[20px]  md:text-[38px] ">TẤT CẢ SẢN PHẨM</h2>
            <span class="text-white text-[17px] "><a href="index.php">Trang chủ</a>  <i class="fa fa-angle-right" aria-hidden="true"></i><a href=""> Liên hệ</a> </span>
        </div>
        </div>
    </section>
        <div class="max-w-7xl mx-auto py-10">
            <h1 class="bg-[#e76ea5] text-[25px] p-5 rounded-lg text-white font-sans font-semibold">GIỎ HÀNG</h1>

            <form action="" method="POST">
                <table class="my-8 w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                    <thead class="">
                        <tr class="text-white text-lg bg-[#e76ea5] flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                            <td class="p-3 pl-5 py-10 md:p-3  pl-5">Hình ảnh</td>
                            <td class="p-3 py-14 md:p-3  text-left">Tên sản phẩm</td>
                            <td class="p-3  md:p-3   text-left">Giá sản phẩm</td>
                            <td class="p-3 md:p-3  text-left">Số lượng</td>
                            <td class="p-3  md:p-3  text-left">Thành tiền</td>
                            <td class="p-3  md:p-3  text-left">Thao tác</td>
                        </tr>
                    </thead>

                    <tbody class="flex-1 sm:flex-none">
                        <?php
                        if (isset($_SESSION['cart'])) {
                        ?>
                            <?php
                            $total = 0;
                            foreach ($_SESSION['cart'] as $key => $item) {
                                $total += $item['price'] * $item['sl'];
                            ?>
                                <tr class="text-md font-semibold border-b p-3 flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                    <td class="mr-2  text-left" >
                                        <img src="http://localhost/DA1/imgs/<?= $item['image'] ?>" alt="" style="width: 150px;height: 150px">
                                    </td>
                                    <td class=" pb-5 md:p-3  "><?= $item['name_product'] ?></td>
                                    <td class="py-3  md:p-3  "><?= number_format($item['price']) ?></td>
                                    <td class="py-3 md:p-3  "><?= number_format($item['sl']) ?></td>
                                    <td class="py-3  md:p-3  "><?= number_format($item['price'] * $item['sl']) ?></td>
                                    <td class="py-3  md:p-3  "><a href="../Model/deletecart.php?id=<?php echo $item['id'] ?>">Xóa</a></td>
                                    <button></button>
                                </tr>
                            <?php } ?>
                        <?php } ?>

                    </tbody>
                    <tfoot>
                        <tr class="items-center bg-[#e76ea5] text-white font-semibold flex flex-col flex-no wrap sm:table-row md:mb-2 sm:mb-0">
                            <td colspan="4" class="md:px-10 md:py-3 md:text-[20px]  font-sans md:p-3 text-left">Tổng tiền</td>
                            <td colspan="2" class="md:text-[20px]  font-sans md:p-3 text-left">
                                <?php
                                $total_all = 0;
                                ?>
                                <?= number_format($total_all += $total) ?> VNĐ</td>
                            <input type="text" value="<?= $total_all ?>" hidden name="total_all">
                        </tr>
                    </tfoot>
                </table>

                <div class="border rounded-xl bg-[#f9dbe9]">
                    <div class="">
<?php 
    if (!empty($_SESSION["cart"])) {
     
?>

        <div class="grid md:grid-cols-2 ">

       <div>

     
<form action="" method="post" class="border rounded-xl mx-6 mb-6 px-6 py-6 bg-white">
        <h2 class="font-bold text-[28px] text-center py-4 ">Thông tin nhận hàng</h2>
    <p class="pt-3 pb-2 mx-10"> Họ tên (*):</p>
    <input class=" rounded-xl w-[80%] px-5 py-2  mx-10 " name="hoten" require type="text" placeholder="Họ tên của bạn">
    <p class="pt-3 pb-2 mx-10"> Địa chỉ (*): </p>
    <input class="rounded-xl w-[80%] px-5 py-2  mx-10" name="diachi" require type="text" placeholder="Địa chỉ">
    <p class="pt-3 pb-2 mx-10"> Email: </p>
    <input title="Định dạng Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="rounded-xl w-[80%] px-5 py-2  mx-10" type="email " name="email" placeholder="Địa chỉ email của bạn">
    <p class="pt-3 pb-2 mx-10"> Số điện thoại (*):</p>
    <input title="Định dạng số điện thoại" pattern="[0-9]{10}" class="rounded-xl w-[80%] px-5 py-2  mx-10" type="text" require name="phone" placeholder="Số điện thoại của bạn">
    <p class="pt-3 pb-2 mx-10"> Nội dung:</p>
    <textarea class="rounded-xl w-[80%]  px-5 py-2  mx-10" name="noidung" id="" cols="30" rows="5" placeholder="Nội dung">
</textarea>
    <p style="margin-left: 40px ; " class="font-bold text-[18px]"> Phương thức thanh toán:</p>
    <select style="margin-left: 40px ; width:200px; margin-bottom:20px;" name="thanhtoan" id="" class="border rounded-sm  px-2 py-1.5 my-2">
        <option value="Tiền mặt">Trả tiền khi nhận hàng</option>
    </select>
    <br>
    <input style=" margin-left: 40px ;margin-bottom: 10px ;" type="submit" name="submit" value="Gửi" class="border rounded-md hover:bg-[#e1498e]  bg-[#E76EA5] text-white font-bold px-10 py-1.5">

</form>
</div>
    <div class="pl-[30%] pt-[40%] hidden md:block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-36 h-36 text-[#EB83B4]">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>

    </div>
        </div>
<?php }?>
                        

                    </div>
                </div>
            </form>


        </div>


        <footer class="px-4 md:px-0 border-t-2 ">
            <div class="max-w-7xl m-auto pt-8 grid md:grid-cols-4 gap-8">
                <div class="">
                    <a href=""><img class="w-[180px] h-[48px] mb-6" src="../imgs/header_logo.png" alt=""></a>
                    <span class=" font-[900] ">Công ty Cổ phần TaeHui Mang thanh xuân đến cho phụ nữ Việt</span>
                </div>
                <div class="leading-8">
                    <span class="text-[#e76ea5] text-[22px] font-[900]">Đăng ký nhận tin</span> <br>
                    <span class="font-[900] ">Công ty Cổ phần TaeHui</span> <br>
                    <span class="font-[900] ">Email: </span><span>taehuivietnam@gmail.com</span><br>
                    <span class="font-[900] ">Điện thoại:</span><span> 08 6262 1883</span><br>
                    <span class="font-[900] ">Địa chỉ: </span><span>số 18A2, Lê Đức Thọ, phường Mỹ Đình 2, quận Nam Từ
                        Liêm, Hà
                        Nội.</span>
                </div>
                <div>
                    <span class="text-[#e76ea5] text-[22px] font-[900]">Dịch vụ chính</span><br>
                    <span>Tìm kiếm</span> <br>
                    <span>Giới thiệu</span><br>
                    <span>Chính sách đổi trả</span> <br>
                    <span>Chính sách bảo mật</span><br>
                    <span>Điều khoản dịch vụ</span><br>
                    <span>Liên hệ</span><br>
                </div>
                <div>
                    <span class="text-[#e76ea5] text-[22px] font-[900]"> Hỗ trợ khách hàng</span> <br>
                    <span>Sản phẩm khuyến mãi</span><br>
                    <span>Sản phẩm nổi bật</span> <br>
                    <span>Tất cả sản phẩm</span><br>
                    <div class="flex items-center gap-4 mt-6 border-2 py-2 px-4 rounded-lg border-gray">
                        <i class="fa fa-phone"></i>
                        <span>Giải đáp thắc mắc khiếu nại 08 6262 1883 (8h00 - 20h00)</span>

                    </div>
                    <img class="w-[180px] h-[68px] my-4" src="../imgs/footer_bct.png" alt="">

                </div>
            </div>
            <div class="text-center border-t-2 py-2">
                <span>Copyrights © 2022 by Team 6 - FPT Polytechnic</span>
            </div>
        </footer>

    </article>

    <script>
        function handClick() {
    menu = document.getElementById('main-menu')
    if (menu.style.display === 'block') {
        menu.style.display = 'none'
    } else {
        menu.style.display = 'block'
    }
}
      </script>
</body>

</html>