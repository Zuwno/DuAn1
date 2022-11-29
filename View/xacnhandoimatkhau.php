<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Taehui - Quên mật khẩu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="//theme.hstatic.net/200000557063/1000907375/14/favicon.png?v=1162" type="image/png">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="../Source/css/dangnhap.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>


  <style>
    * {
      font-family: 'Tinos', serif;
    }
  </style>
</head>

<body>
  <article>
    <header class="nav-main box-border">
      <section class="bg-[#e76ea5] ">
        <div class="max-w-7xl m-auto flex justify-between text-white items-center ">

          <span class="py-2">CÔNG TY CỔ PHẦN TAEHUI</span>
          <div class="flex items-center space-x-3">

            <a href=""><i class="fa fa-envelope px-2 " aria-hidden="true"></i>taehuivietnam@gmail.com </a>

            <a href=""><i class="fa fa-phone-square px-2" aria-hidden="true"></i>08 6262 1883</a>
            <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            <div class="header-search">
              <a href="" class="docs-creator"><i class="fa fa-search"></i></a>
            </div>
          </div>

        </div>
      </section>
      <section class=" max-w-8xl m-auto  py-2 relative z-[999] shadow-lg  ">
        <div class="flex  justify-between items-center  px-28 bg-white">
          <img class="w-[180px]" src="../imgs/header_logo.png" alt="">
          <div>
            <ul class="flex gap-4 font-bold ">
              <li class="hover:underline  hover:text-[#e76ea5]"><a href="../index.php">Trang chủ</a></li>
              <li class="hover:underline  hover:text-[#e76ea5]"><a href="gioithieu.html">Giới thiệu</a></li>

              <li>
                <a href="sanpham.php" class="hover:underline  hover:text-[#e76ea5]">Sản phẩm</a>
                <ul class="list-sanPham px-4 w-[200px] border border-[#bbb] ">
                  <li class="text-[#777] hover:text-[#e76ea5] font-[400] border-b-2 py-2"><a href="">Hộp đơn</a></li>
                  <hr>
                  <li class="text-[#777] hover:text-[#e76ea5] font-[400] border-b-2 py-2"><a href="">Combo 2 hộp</a>
                  </li>
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


              <li class="hover:underline  hover:text-[#e76ea5]"><a href="">Tin tức </a></li>
              <li class="hover:underline  hover:text-[#e76ea5]"><a href="lienHe.php">Liên hệ</a></li>
            </ul>
          </div>
        </div>



      </section>
    </header>
    <main>

      <article class="MainContent" style="margin-bottom: 50px ;">
        <section class="Login">
          <p>Quên mật khẩu</p>
          <form action="" method="POST">
            <label for="">Tên đăng nhập (*):</label>
            <br>
            <input type="text" name="username" require>
            <br>
            <label for="">Email (*):</label>
            <br>
            <input type="email" name="email" require>
            <br>
            <a href="">Quên mật khẩu?</a>
            <br>
            <input class="submit" type="submit" value="Xác nhận" name="btnn_submit">
          </form>
        </section>
        <?php
        include '../Model/db.php';
        if (isset($_POST['btnn_submit'])) {
          $username = $_POST['username'];
          $email = $_POST['email'];
          $sql = " select * from account where username ='$username' and email='$email'";
          $kq = $connect->query($sql);
          if ($kq->rowCount() == 1) {
              header("Location: xacnhandoimatkhau.php");
          } else {
              echo 'Tài khoản hoặc email sai';
          }
      }
      ?>

      </article>
    </main>
    <footer class="px-4 md:px-0 border-t-2 ">
      <div class="max-w-7xl m-auto pt-8 grid grid-cols-4 gap-8">
        <div class="">
          <a href=""><img class="w-[180px] h-[48px] mb-6" src="../imgs/header_logo.png" alt=""></a>
          <span class=" font-[900] ">Công ty Cổ phần TaeHui Mang thanh xuân đến cho phụ nữ Việt</span>
        </div>
        <div class="leading-8">
          <span class="text-[#e76ea5] text-[22px] font-[900]">Đăng ký nhận tin</span> <br>
          <span class="font-[900] ">Công ty Cổ phần TaeHui</span> <br>
          <span class="font-[900] ">Email: </span><span>taehuivietnam@gmail.com</span><br>
          <span class="font-[900] ">Điện thoại:</span><span> 08 6262 1883</span><br>
          <span class="font-[900] ">Địa chỉ: </span><span>số 18A2, Lê Đức Thọ, phường Mỹ Đình 2, quận Nam Từ Liêm, Hà
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

    <body>
  </article>
</body>

</html>