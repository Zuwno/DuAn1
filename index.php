<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Thực phẩm chức năng Taehui</title>
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


    .slick-carousel {
      margin: 0 auto;
      max-width: 1260px;
    }

    /* The width of each slide */
    

    /* Color of the arrows */
    .slick-next::before,
    .slick-prev::before {
      color: black;
    }
  </style>
</head>

<body>
  <article class="">
    <header class="nav-main box-border">
      <section class="bg-[#e76ea5] ">
        <div class="max-w-7xl m-auto flex justify-between text-white items-center ">

          <span class="py-2 px-20 md:px-0 ">CÔNG TY CỔ PHẦN TAEHUI</span>
          <div class="md:flex items-center space-x-3 hidden ">

            <a href=""><i class="fa fa-envelope px-2 " aria-hidden="true"></i>taehuivietnam@gmail.com </a>

            <a href=""><i class="fa fa-phone-square px-2" aria-hidden="true"></i>08 6262 1883</a>
            <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            <a href="./View/cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
          </div>

        </div>
      </section>
      <section class=" max-w-8xl m-auto  py-2 relative z-[999] shadow-lg   ">
        <div class="flex  justify-between items-center px-2 md:px-28 bg-white w-full">
          <a href="./index.php"><img class="w-[180px]" src="imgs/header_logo.png" alt=""></a>
          <div class="text-right">
          <button class="md:hidden md:text-right" onclick="handClick()">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
            <ul id="main-menu" class=" gap-4 font-bold hidden md:flex items-end text-right      delay-150  ">
              <li class="hover:underline  hover:text-[#e76ea5]"><a href="">Trang chủ</a></li>
              <li class="hover:underline  hover:text-[#e76ea5]"><a href="./View/gioithieu.php">Giới thiệu</a></li>

              <li>
                <a href="./View/sanpham.php" class="hover:underline  hover:text-[#e76ea5]">Sản phẩm</a>
                <ul class="list-sanPham px-4 w-[200px] border border-[#bbb] ">
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


              <li class="hover:underline  hover:text-[#e76ea5]"><a href="./View/lienHe.php">Liên hệ</a></li>
            </ul>
          </div>
        </div>



      </section>
    </header>
    <section class="banner px-2 md:px-0 asolute z-[1]">
      <style>
        * {
          box-sizing: border-box;
        }

        body {
          font-family: Verdana, sans-serif;
        }

        .mySlides {
          display: none;
        }

        img {
          vertical-align: middle;
        }




        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }


        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }


        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 1.5s;
        }

        @keyframes fade {
          from {
            opacity: .4
          }

          to {
            opacity: 1
          }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {
            font-size: 11px
          }
        }
      </style>
      </head>

      <body>


        <div class="">

          <div class="mySlides fade">

            <img src="imgs/main_slider_1.png" class="w-full">

          </div>

          <div class="mySlides fade">

            <img src="imgs/main_slider_2.png" class="w-full">

          </div>

          <div class="mySlides fade">

            <img src="imgs/main_slider_3.png" class="w-full">

          </div>

        </div>
        <br>

        <div style="text-align:center" class="hidden">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <script>
          let slideIndex = 0;
          showSlides();

          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
              slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
        </script>
    </section>
    <section class="max-w-5xl m-auto pt-4 text-center px-4 md:px-0 hidden md:block">
      <div class=" pb-6 md:flex space-x-6">
        <img class="w-[493px] h-[422px] " src="imgs/anh.jpg" alt="">
        <h1 class="text-[#ab0f2f] text-[260%] font-[700] pt-[80px] text-left ">CÔNG <span class="text-[#e9808f] ">NGHỆ</span> ƯU <span class="text-[#e9808f]">VIỆT</span> CHE<span class="text-[#e9808f]">CHU</span>CHUL</h1>
      </div>
      <p>
        Là collagen Hàn Quốc dạng bột đầu tiên tại Việt Nam sử dụng công nghệ chiết xuất siêu tới hạn – Chechuchul (체추출). Công nghệ tiên tiến, ưu việt giúp tái tạo collagen bằng những phân tử siêu nhỏ, tăng khả năng thẩm thấu cho cơ thể gấp 2 lần.
      </p>
      <button class="border border-[#a50c46] text-[#a50c46] px-4 py-1.5 font-[600] my-6 hover:bg-[#F8A4C4]"><a href="./View/gioithieu.php">XEM THÊM</a></button>
    </section>

    <section class="max-w-[1570px]  m-auto bg-[rgb(238,238,238)] px-4 md:px-0 hidden md:block">
      <div class=" max-w-5xl m-auto text-center md:flex md:space-x-8  pt-1">
        <img class="w-[493px] h-[511px]" src="imgs/anh1.jpg" alt="">
        <div class="text-left py-[13%] ">
          <h1 class="text-[20px] font-[700]">HƯƠNG VỊ THƠM NGON – TẬN HƯỞNG TỪNG KHOẢNH KHẮC
          </h1>
          <p>Với công thức độc quyền vừa có lượng collagen đậm đặc vừa có vị trái cây việt quất đặc trưng, Collagen Taehui Pink C đem đến cho người dùng trải nghiệm sản phẩm thơm ngon khó quên, trọn vẹn thưởng thức từng khoảnh khắc. </p>
          <button class="border border-[#a50c46] text-[#a50c46] px-4 py-1.5 font-[600] mt-6 mb-2 hover:bg-[#F8A4C4]"><a href="./View/sanpham.php">TÌM HIỂU THÊM</a></button>
        </div>
      </div>

      <div class=" max-w-5xl m-auto md:grid md:grid-cols-2 md:space-x-6   ">
        <div class="text-left pt-[13%]">
          <h1 class="text-[20px] font-[700]">COLLAGEN 100% HÀN QUỐC
          </h1>
          <p>Là thương hiệu đến từ xứ sở nổi tiếng về làm đẹp, chăm sóc da, Collagen TaeHui Pink C là sản phẩm được nghiên cứu và hoàn thiện bởi các chuyên gia hàng đầu, đảm bảo các tiêu chuẩn, quy định khắt khe nhất của ngành mỹ phẩm Hàn Quốc. </p>
          <button class="border border-[#a50c46] text-[#a50c46] px-4 py-1.5 font-[600] mt-6 mb-2 hover:bg-[#F8A4C4] "><a href="./View/sanpham.php">TÌM HIỂU THÊM</a></button>
        </div>
        <img class="w-[493px] " src="imgs/anh2.jpg" alt="">
      </div>

      <div class=" max-w-5xl m-auto text-center md:grid md:grid-cols-2 md:space-x-4 pb-8">
        <img class="h-[400px] w-[493px]" src="imgs/sp2.webp" alt="">
        <div class="text-left  md:pt-0">
          <h1 class="text-[20px] font-[700] pt-20">CÔNG THỨC ĐỘC QUYỀN COLLAGEN PINK C CÓ GÌ?
          </h1>
          <p>Ngoài Collagen, Taehui Pink C còn bổ sung Vitamin C, HA, Glutathione giúp cơ thể tăng khả năng kháng khuẩn miễn dịch, cung cấp dưỡng chất chống lão hóa, cấp ẩm cho da vượt trội. </p>
          <button class="border border-[#a50c46] text-[#a50c46] px-4 py-1.5 font-[600] mt-6 mb-2 hover:bg-[#F8A4C4]"><a href="./View/sanpham.php">TÌM HIỂU THÊM</a></button>
        </div>
      </div>
    </section>
    <section class="px-5" style="    background: url(//theme.hstatic.net/200000557063/1000907375/14/home_aboutus_bg.jpg?v=1171) no-repeat 50% 50%;" >
      <div class="max-w-7xl m-auto flex gap-14 py-16 grid md:grid-cols-[35%,60%] gap-6 ">
        <div>
          <iframe width="459" class="w-full md:w-[459px]" height="258" src="https://www.youtube.com/embed/AYmdvv90j20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="md:pl-10">
          <h2 class="text-[#e76ea5] text-[40px] font-bold">TAEHUI VIỆT NAM</h2>
          <p class="text-[#494747] text-[17px] py-4">Công Ty TaeHui Việt Nam thành lập với mục tiêu chuyên cung cấp các sản phẩm hỗ trợ sức khoẻ và làm đẹp chất lượng, thân thiện môi trường, đồng thời chúng tôi mong muốn TaeHui sẽ là người bạn đồng hành trên hành trình yêu bản thân của phụ nữ Việt. <br>
            TaeHui Việt Nam trân trọng và tôn vinh giá trị mọi nét đẹp của người phụ nữ Việt. Cải tiến không ngừng, tận tâm và chăm sóc khách hàng, lấy khách hàng là trung tâm chính là tôn chỉ và giá trị cốt lõi mà TaeHui luôn duy trì và hướng đến.</p>
          <button type="submit" class="border border-black px-8  py-2  rounded-md font-bold text-[18px] text-[#494747]"><a href=""><a href="./View/lienHe.php">TÌM HIỂU THÊM</a></a> </button>


        </div>
      </div>
    </section>
    <section class="px-5" style="background:rgb(249 222 230 / 50%); ">
      <h2 class="font-bold text-center text-[33px] text-[#494747] pt-10 pb-4">TAEHUI CHẤT LƯỢNG LÀM NÊN THƯƠNG HIỆU</h2>
      <div class="max-w-7xl m-auto grid md:grid-cols-4 pb-20 gap-4">
        <div class="w-full border rounded-b-xl bg-white shadow-lg">
          <img class="" src="//theme.hstatic.net/200000557063/1000907375/14/home_reason_icon_1.jpg?v=1172" alt="Sản xuất hiện đại ">
          <h3 class="bg-[#E76EA5] text-white text-center text-[19px] py-1 font-bold">Sản xuất hiện đại</h3>
          <p class="px-2 py-3 text-[17px]">Sản phẩm được nghiên cứu và sản xuất từ nhà sản xuất thực phẩm bảo vệ sức khỏe và mỹ phẩm số 1 Hàn Quốc và đứng top 3 toàn cầu: Cosmax</p>
        </div>
        <div class="w-full border rounded-b-lg bg-white shadow-lg">
          <img src="//theme.hstatic.net/200000557063/1000907375/14/home_reason_icon_2.jpg?v=1172" alt="Nguyên liệu thiên nhiên">
          <h3 class="bg-[#E76EA5] text-white text-center text-[19px] py-1 font-bold">Sản xuất hiện đại</h3>
          <p class="px-2 py-3 text-[17px]">Sản phẩm được nghiên cứu và sản xuất từ nhà sản xuất thực phẩm bảo vệ sức khỏe và mỹ phẩm số 1 Hàn Quốc và đứng top 3 toàn cầu: Cosmax</p>
        </div>
        <div class="w-full border rounded-b-lg bg-white shadow-lg">
          <img src="//theme.hstatic.net/200000557063/1000907375/14/home_reason_icon_3.jpg?v=1172" alt="Chăm sóc tận tình">
          <h3 class="bg-[#E76EA5] text-white text-center text-[19px] py-1 font-bold">Sản xuất hiện đại</h3>
          <p class="px-2 py-3 text-[17px]">Sản phẩm được nghiên cứu và sản xuất từ nhà sản xuất thực phẩm bảo vệ sức khỏe và mỹ phẩm số 1 Hàn Quốc và đứng top 3 toàn cầu: Cosmax</p>
        </div>
        <div class="w-full border rounded-b-lg bg-white shadow-lg">
          <img src="//theme.hstatic.net/200000557063/1000907375/14/home_reason_icon_4.jpg?v=1172" alt="Chứng nhận chất lượng ">
          <h3 class="bg-[#E76EA5] text-white text-center text-[19px] py-1 font-bold">Sản xuất hiện đại</h3>
          <p class="px-2 py-3 text-[17px]">Sản phẩm được nghiên cứu và sản xuất từ nhà sản xuất thực phẩm bảo vệ sức khỏe và mỹ phẩm số 1 Hàn Quốc và đứng top 3 toàn cầu: Cosmax</p>
        </div>
      </div>
    </section>

    <h1 class=" font-bold text-center text-[30px] text-[#494747] py-8">SẢN PHẨM NỔI BẬT</h1>
    <section class="md:max-w-7xl m-auto md:grid md:grid-cols-3   md:gap-8  md:px-0 ">
    <?php
    include './Model/db.php';
    $sqlProduct = "select * from product";
    $resultt = $connect->query($sqlProduct);
    foreach ($resultt as $row) {
    ?>
      
        <div class="border border-[#00000] px-3 py-3 hover:shadow-lg">
          <a href="./View/chiTietSp.php?id=<?php echo $row['id_product'] ?>"> <img class="md:w-full h-[371px] m-auto w-[371px]" src="./imgs/<?php echo $row['img'] ?>" alt=""></a>

          <div class=" py-4 ">
            <span class="text-[12px] font-[400] text-[#777]" ><?php echo $row['name'] ?> </span><br>
            <a href="./View/chiTietSp.php?id=<?php echo $row['id_product'] ?>" class="text-[#4E657B] hover:text-[#f84689] " style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical; overflow: hidden; "><?php echo $row['detail'] ?></a> <br>

            <button class="border border-[#e76ea5] text-white hover:bg-[#F8A4C4] rounded-sm px-5 py-1.5 font-[600]  bg-[#e76ea5] self-end"><a href="./View/chiTietSp.php?id=<?php echo $row['id_product'] ?>">Tìm hiểu thêm </a></button>
          </div>
        </div>

    <?php
    }
    ?>
</section>





    <section style="background:url(//theme.hstatic.net/200000557063/1000907375/14/home_articles_bg.jpg?v=1162) no-repeat left top;" class="pb-20 px-5">
      <div>
        <h1 class="py-8 text-[33px] text-[#494747] font-bold text-center mt-10">TIN TỨC NỔI BẬT</h1>
        <!-- Create your own class for the containing div -->

        <div class="slick-carousel  hidden md:block">
          <!-- Inside the containing div, add one div for each slide -->
          <div class="">
            <!-- You can put an image or text inside each slide div -->
            <img class="w-[400px] " src="imgs/tt1.jpg">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>

          </div>

          <div>
            <img class="w-[400px] " src="imgs/tt2.jpg">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] " src="imgs/tt3.png">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] " src="imgs/tt4.png">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] " src="imgs/tt5.jpg">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] " src="imgs/tt6.jpg" alt="">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] " src="imgs/tt7.jpg" alt="">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] " src="imgs/tt8.jpg" alt="">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] " src="imgs/tt9.jpg" alt="">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img class="w-[400px] h-[266px]" src="imgs/tt10.png" alt="">
            <div class=" w-[400px]  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="block md:hidden ">
            <!-- You can put an image or text inside each slide div -->
            <img class=" " src="imgs/tt1.jpg">
            <div class="  py-1 ">
              <div class=" border border-[#e76ea5] rounded-b-lg border-dashed shadow-lg shadow-[#ee9ac0] px-2 py-3">
                <h3 class="font-bold text-[18px]"> <a href="">Giải Pháp Nhân Đôi Sức Mạnh Ngừa Lão Hoá - Collagen Và Hyaluronic Acid (HA) từ TaeHui</a> </h3>
                <span class="text-[14px]">
                  <a href="">Không có món quà nào quý giá hơn việc mang "tuổi thanh xuân" của một người phụ nữ trở lại. Để làn da của chị em được sống trọn vẹn một lần nữa với sự căng tràn, tươi trẻ, các nhà khoa học đã nghiên cứu r... </a>
                </span>
                <div>
                  <a href="" class="text-[#8b8b8a] text-[12px]">03-11-2022</a>
                </div>
              </div>
            </div>

          </div>
      </div>


    </section>


    <footer class="px-4 md:px-0 border-t-2 ">
      <div class="max-w-7xl m-auto pt-8 grid md:grid-cols-4 gap-8 px-5">
        <div class="">
          <a href=""><img class="w-[180px] h-[48px] mb-6" src="imgs/header_logo.png" alt=""></a>
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
          <img class="w-[180px] h-[68px] my-4" src="imgs/footer_bct.png" alt="">

        </div>
      </div>
      <div class="text-center border-t-2 py-2">
        <span>Copyrights © 2022 by Team 6 - FPT Polytechnic</span>
      </div>
    </footer>

  </article>

  <script>
    $('.slick-carousel').slick({
      infinite: true,
      slidesToShow: 3, // Shows a three slides at a time
      slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
      arrows: true, // Adds arrows to sides of slider
      dots: true // Adds the dots on the bottom
    });
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