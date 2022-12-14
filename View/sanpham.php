<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Taehui - Sản phẩm</title>
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
  </style>
</head>

<body>
  <article>
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

    <body>
    <section>
        <div
        class=" mx-auto px-5 h-full w-full bg-no-repeat bg-cover"
        class="w-full"  style="background-image: url('../imgs/breadcrumb_img.png') ;">
          <div class=" md:py-10 py-3  relative max-w-7xl mx-auto">
            <h2 class="text-white font-bold text-[20px] md:text-[38px]  ">TẤT CẢ SẢN PHẨM</h2>
            <span class="text-white text-[17px] "><a href="">Trang chủ</a> <i class="fa fa-angle-right" aria-hidden="true"></i><a href=""> Tất cả sản phẩm</a> </span>
          </div>
        </div>
      </section>
      <section>

        <form method="post" action="" class="ml-[1025px] mt-4">
          <input class="pl-2 py-1" placeholder="Tìm kiếm" name="search_value" style="border: 1px solid; border-radius: 3px; " type="text">
          <input name="search" class="bg-[#e76ea5] text-white px-3 py-[2px]  py-1" style="border: 2px solid; border-radius: 5px;" type="submit" value="Tìm kiếm" >
        </form>

      </section>
      <section class="max-w-7xl m-auto mb-6 text-[#494747]  grid md:grid-cols-4 px-5">
        <div class=" md:w-[287px] w-[340px]  md:mr-10 col-span-1 order-2 md:order-1">
          <div class="bg-[#e76ea5] px-2 py-2 ">
            <span class="text-white  "> DANH MỤC SẢN PHẨM</span><br>
          </div>
          <div class="bg-[#F8F8FF] px-2 text-[18px]">
            <div class="flex justify-between">
              <p class="py-2"><a href="">Sản phẩm nổi bật</a> </p><span>(3)</span>
            </div>
            <div class="flex justify-between">
              <p class="py-2"><a href="">Sản phẩm khuyến mãi</a> </p><span>(0)</span>
            </div>
            <div class="flex justify-between">
              <p class="py-2"><a href=""> Trang chủ</a></p><span>(0)</span>
            </div>
          </div>
          <div class="bg-[#e76ea5] px-2 py-2 ">
            <span class="text-white  "> THƯƠNG HIỆU </span><br>
          </div>
          <div class="bg-[#F8F8FF] px-2 text-[18px]">
            <div class="flex justify-between">
              <p class="py-2"><a href="">Khác</a> </p>
            </div>
          </div>
          <div class="bg-[#e76ea5] px-2 py-2 ">
            <span class="text-white  "> SẢN PHẨM NỔI BẬT </span><br>
          </div>
        </div>

        <div class="col-span-3 md:order-1">
          
          <div class="grid md:grid-cols-3 gap-4 pt-4">
            <?php
            include '../Model/db.php';
            $sqlProduct = "select * from product";
            
            if(isset($_POST['search']))
            {
              $s = $_POST['search_value'];
              $sqlProduct = "select *  from product where name like '%$s%'";
            }
            $resultt = $connect->query($sqlProduct);
            foreach ($resultt as $row) {
            ?>

              

              <div class="border border-[#00000] px-2 py-2 hover:shadow-lg">
                <a href="chiTietSp.php?id=<?php echo $row['id_product'] ?>"> <img class="md:w-full w-[265px] h-[265px] m-auto " src="../imgs/<?php echo $row['img'] ?>" alt=""></a>

                <div class=" py-4 ">
                  <span class="text-[19px] font-[400] "><?php echo $row['name'] ?></span><br>
                  <span style="color: red ;" class="text-[20px] font-[400] "><?php echo $row['price'] ?>đ</span><br>
                  <a style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical; overflow: hidden; " href="chiTietSp.php?id=<?php echo $row['id_product'] ?>" class="text-[#4E657B] hover:text-[#f84689] "><?php echo $row['detail'] ?></a> <br>

                  <button class="border border-[#e76ea5] text-white hover:bg-[#F8A4C4] rounded-sm px-5 py-1.5 font-[600] mt-6 mb-2 bg-[#e76ea5] "><a href="chiTietSp.php?id=<?php echo $row['id_product'] ?>">Tìm hiểu thêm </a></button>
                </div>
              </div>

            <?php
            }
            ?>


          </div>
        </div>
      </section>


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
            <span class="font-[900] ">Địa chỉ: </span><span>số 18A2, Lê Đức Thọ, phường Mỹ Đình 2, quận Nam Từ Liêm, Hà Nội.</span>
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
  </article>
</body>

</html>