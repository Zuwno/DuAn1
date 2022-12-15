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

          <span class="py-2 px-20 ">CÔNG TY CỔ PHẦN TAEHUI</span>
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
            <h2  class="text-white font-bold  text-[20px]  md:text-[38px] ">GIỚI THIỆU TAEHUI VIỆT NAM</h2>
            <span class="text-white text-[17px] "><a href="index.php">Trang chủ</a>  <i class="fa fa-angle-right" aria-hidden="true"></i><a href=""> Liên hệ</a> </span>
        </div>
        </div>
    </section>
    <main class="max-w-7xl m-auto text-[#545454] px-5">
      <article class="">
        <h1 class="md:text-[45px] text-[25px] pt-5 font-bold  text-[#545454]">Giới thiệu Taehui Việt Nam</h1>
        <img class="imggg m-auto md:w-[600px] md:h-[161px] mt-10" src="../imgs/header_logo.png" alt="">
        <article class="item-gt ">
          <h2 class="font-bold text-[26px] pb-4 pt-10 ">1. Ý nghĩa thương hiệu</h3>
            <p>Thị trường mỹ phẩm và làm đẹp tại Việt Nam đang có xu hướng tăng trưởng cao do nhu cầu ngày càng đa dạng
              của người dùng với các sản phẩm làm đẹp, đặc biệt nhu cầu của người dùng ngày càng được nâng cao và mong
              muốn nắm bắt nhanh mọi xu hướng làm đẹp trên thế giới. Hơn thế nữa là đối tượng khách hàng không chỉ bó
              hẹp
              trong một nhóm, hay chỉ riêng phụ nữ mà được mở rộng ra rất nhiều. Hệ quả từ đó là thị trường mỹ phẩm và
              làm
              đẹp có nhiều thương hiệu, sản phẩm, thông tin khiến người dùng hoang mang và dễ mua nhầm phải các sản phẩm
              trôi nổi, không chất lượng. </p>
            <br>
            <p>Hiểu được điều này, TaeHui đã dày công nghiên cứu cho ra mắt thương hiệu TaeHui Pink C - collagen bột
              uống
              chính ngạch từ Hàn Quốc. TaeHui Pink C là sản phẩm đầu tiên được giới thiệu trong bộ sản phẩm của TaeHui,
              được phân phối sản xuất từ Công ty CP TaeHui Việt Nam. Pink C được các chuyên gia hàng đầu xứ Hàn tại nhà
              máy Cosmax Bio - nhà máy hàng đầu Hàn Quốc, nơi sản xuất của hàng loạt các thương hiệu nổi tiếng về mỹ
              phẩm
              hiện nay.

            </p>
            <br>
            <p>TaeHui tự hào là một trong những đơn vị tiên phong áp dụng công nghệ hiện đại tiên tiến, đảm bảo các quy
              trình sản xuất vô cùng nghiêm ngặt hoàn thành mục tiêu đạt chuẩn GMP theo quy định của Bộ Y tế Hàn Quốc và
              cả Việt Nam. Hơn nữa, thành phần và công thức của các sản phẩm TaeHui hoàn toàn từ thiên nhiên vô cùng
              lành
              tính và phù hợp với cơ thể hay làn da nhạy cảm nhất.

            </p>
        </article>
        <article class="item-gt">
          <h2 class="font-bold text-[26px] pb-4 pt-10 " >2. Tầm nhìn</h2>
          <p>Trở thành thương hiệu mỹ phẩm số 1 về uy tín, chất lượng và dịch vụ
          </p>
          <br>
          <img class="imgt m-auto " src="../imgs/gt1.webp" alt="">
          <br>
          <p>Trở thành thương hiệu mỹ phẩm số 1 về uy tín, chất lượng và dịch vụ tại thị trường Việt Nam và vươn tầm
            quốc tế. Song song với việc đem lại những sản phẩm, trải nghiệm tốt nhất đến khách hàng, TaeHui Việt Nam còn
            mong muốn một môi trường làm việc chuyên nghiệp tạo ra nhiều cơ hội thăng tiến và phát triển cho đội ngũ
            nhân viên.
          </p>
          <br>
          <p>Nâng cao chất lượng cuộc sống thông qua việc cung cấp các sản phẩm làm đẹp đảm bảo chất lượng quốc tế, giá
            cả hợp lý, mẫu mã đa dạng, thân thiện môi trường, đáp ứng nhu cầu người tiêu dùng. Từ đó góp phần tăng sự tự
            tin, yêu bản thân, yêu cuộc sống, tôn vinh mọi nét đẹp của tất cả phụ nữ Việt. </p>
        </article>
        <article class="item-gt">
          <h2 class="font-bold text-[26px] pb-4 pt-10 " >3. Giá trị cốt lõi</h2>
          <p>Tôn vinh giá trị và nét đẹp phụ nữ Việt.</p>
          <p>TaeHui Việt Nam trân trọng và tôn vinh giá trị mọi nét đẹp của người phụ nữ Việt. Cải tiến không ngừng, tận
            tâm và chăm sóc khách hàng, lấy khách hàng là trung tâm chính là tôn chỉ và giá trị cốt lõi mà TaeHui luôn
            duy trì và hướng đến.

          </p>
        </article>
        <article class="item-gt">
          <h2 class="font-bold text-[26px] pb-4 pt-10 " >4. Chất lượng sản phẩm của TaeHui</h2>
          <img class="imgt m-auto pt-2 pb-8" src="../imgs/gt2.webp" alt="">
          <p>TaeHui cam kết rằng tất cả sản phẩm đều được sản xuất trên dây chuyền công nghệ hiện đại, an toàn với môi
            trường, đạt chuẩn GMP, MFDS của các cơ quan ban ngành Y Tế, An toàn Thực phẩm và Dược phẩm của cả Hàn Quốc
            và Việt Nam.

          </p>
          <br>
          <p>Sản phẩm được nghiên cứu, thử nghiệm và kiểm tra cẩn thận từ các chuyên gia hàng đầu, đảm bảo không có các
            chất gây hại và nồng độ đạt tiêu chuẩn theo quy định của TSL - Trung tâm Kiểm nghiệm chất lượng sản phẩm
            Việt Nam.

          </p>
        </article>
        <article class="item-gt mb-6">
          <h2 class="font-bold text-[26px] pb-4 pt-10 " >5. Dịch vụ khách hàng của TaeHui</h2>
          <p>TaeHui Việt Nam tự tin với đội ngũ chuyên viên tư vấn luôn luôn lắng nghe, tận tâm và có kiến thức chuyên
            sâu với nghề. Luôn luôn lịch sự, hỗ trợ kịp thời, nhanh nhất cho khách hàng. </p>
          <p>Chính sách giao hàng an toàn, đúng giờ đối với tất cả các khách hàng trên toàn nước, cam kết thời gian giao
            hàng tối đa 7 ngày. Trường hợp phát sinh chậm trễ trong việc giao hàng, chúng tôi hoặc nhân viên vận chuyển
            sẽ thông tin kịp thời cho khách hàng và tạo cơ hội để khách hàng có thể hủy đơn hàng nếu muốn..
            Cam kết đổi trả hàng hóa với chính sách phù hợp, mang lại trải nghiệm tốt nhất sau mỗi lần mua hàng.
            Tổ chức các chương trình khuyến mãi ưu đãi, quà tặng hấp dẫn cho các chị em.</p>
        </article>
      </article>
    </main>
    <footer class="px-4 md:px-0 border-t-2  ">
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