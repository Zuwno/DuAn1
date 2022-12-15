<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Xác nhận</title>
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
  *{
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
    <section class="text-[#494747] text-center mt-[20px] ">
      <div class="text-center item-center" > 
        <p class="px-10 py-3 text-[30px] font-sans">Cảm ơn bạn đã đặt hàng, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất </p>
      <img class="w-[300px]  mb-[20px] sm:ml-[100px]  md:ml-[200px] lg:ml-[500px]" src="../imgs/paimon.jpg" alt="">
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
    <span  class="font-[900] ">Email: </span><span>taehuivietnam@gmail.com</span><br>
    <span  class="font-[900] ">Điện thoại:</span><span> 08 6262 1883</span><br>
    <span  class="font-[900] ">Địa chỉ: </span><span>số 18A2, Lê Đức Thọ, phường Mỹ Đình 2, quận Nam Từ Liêm, Hà Nội.</span>
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
  <span  class="text-[#e76ea5] text-[22px] font-[900]">  Hỗ trợ khách hàng</span> <br>
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