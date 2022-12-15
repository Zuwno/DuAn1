<?php
// var_dump($_POST);
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Taehui</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="//theme.hstatic.net/200000557063/1000907375/14/favicon.png?v=1162" type="image/png">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <style>
    * {
      font-family: 'Tinos', serif;
    }

   

    .product .gg .price {
      background: #fcfcfc;
      color: rgb(143, 143, 143);
      float: right;
      font-size: 15px;
      font-weight: 300;
      line-height: 30px;
      margin: 0;
      padding: 0 10px;
    }

    .product .gg .full-price {
      background: #e37fac;
      color: #fff;
      float: right;
      font-size: 20px;
      font-weight: 600;
      line-height: 30px;
      margin: 0;
      padding: 0 14px;

      -webkit-transition: margin .15s linear;
      -moz-transition: margin .15s linear;
      -ms-transition: margin .15s linear;
      -o-transition: margin .15s linear;
      transition: margin .15s linear;
    }

    .qt,
    .qt-plus,
    .qt-minus {
      display: block;
      float: left;
    }

    .qt {
      font-size: 16px;
      line-height: 30px;
      width: 30px;
      text-align: center;
    }

    .qt-plus,
    .qt-minus {
      background: #fcfcfc;
      border: none;
      font-size: 20px;
      font-weight: 300;
      height: 100%;
      padding: 0 10px;
      -webkit-transition: background .2s linear;
      -moz-transition: background .2s linear;
      -ms-transition: background .2s linear;
      -o-transition: background .2s linear;
      transition: background .2s linear;
    }

    .qt-plus:hover,
    .qt-minus:hover {
      background: #e28cb3;

      color: #fff;
      cursor: pointer;
    }

    .qt-plus {
      line-height: 30px;

    }

    .qt-minus {
      line-height: 30px;

    }

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {  

   opacity: 1;

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
            <a href="Model/cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
          </div>

        </div>
      </section>
      <section class=" max-w-8xl m-auto  py-2 relative z-[999] shadow-lg   ">
        <div class="flex  justify-between items-center  bg-white w-full">
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


      <?php
      $id = $_GET['id'];
      include '../Model/db.php';
      $sql = "select * from product where id_product = '$id' ";
      $result = $connect->query($sql);
      foreach ($result as $row) {
      ?>
        <section class="max-w-7xl m-auto px-2">
          <div class="flex pt-8 pb-4 grid md:grid-cols-[40%,45%,15%] ">
            <img class="w-[496px] h-[496px]" src="../imgs/<?php echo $row['img'] ?>" alt="">
            <div class="grid">
              <div class="md:px-8 text-[#494747]">
                <a class="pl-5 md:pl-0" href="">Trang chủ /</a>
                <a  href="">Sản phẩm nổi bật </a>
                <h2 class="font-bold text-[27px] pl-5 md:pl-0"><?php echo $row['name'] ?></h2>
               
                <form action="../View/add_cart.php?add_cart&id=<?=$_GET['id']?>" method="post" class="px-4">
                <div class="py-4">
                  <span>Danh mục : <a href="" class="text-[#e76ea5] "><?php echo $row['id_category'] ?></a></span><br>
                  <div class="flex justify-between py-2"><span>Số lượng : </span><span>Giá Tiền:</span>
                  </div>
                  <div class="">

                    <div class="product">

                      <div class="gg">
                        <h2 class="full-price">
                        <?php if(!empty($_SESSION['cart'][$id]['sl'])){
                            $_SESSION['cart'][$id]['sl'] * $row['price'];
                          } ?>
                        </h2>
                        
                        <input style="width: 60px ;" name="quantity" type="number"  min="1" max="10"  class="qt" value="1"></input>
                        
                        <h2 style="color: red ; font-size: 20px;" class="price">
                         <?=$row ['price']?>đ 
                        </h2>
                      </div>
                    </div>
                  </div>
                  <div class="border border-[#e76ea5] rounded-lg mt-[100px] text-center">
                  <div class="bg-[#e76ea5] rounded-t-lg text-[15px] font-bold py-1.5 text-center"> <span class="text-white">Mô Tả sản phẩm</span>

                  </div>
                  <p class="text-[20px] px-8 py-4 text-left">
                  <?php echo $row['name'] ?> 
                  </p>
                  <p class="text-[15px] px-8 pb-4 text-left">
                  
                    <?php echo $row['detail'] ?>
                  </p>
                 
                    <button  class="border border-[#e76ea5] text-white hover:bg-[#F8A4C4] rounded-md px-2 mx-1 py-1.5 font-[600] bg-[#e76ea5] mb-4 ">
                    Thêm vào giỏ hàng & nhận tư vấn 
                    </button>
                </div>
                </form>
                  </body>

    </div><br>
    <div class="social-icons text-[#cfcfcf] flex gap-1 ">


      <a target="_blank" class="social-icon social-icon--facebook docs-creator" href="https://www.facebook.com/taehuivietnam">
        <i class="fa fa-facebook flex justify-center items-center border border-[#cfcfcf] rounded-full m-auto  w-[33px] h-[33px] hover:bg-black"></i>

      </a>
      <a target="_blank" class="social-icon social-icon--email docs-creator" href="mailto:enteryour@addresshere.com?subject=https://taehui.vn/products/combo-2-hop-taehui-pink-c">
        <i class="fa fa-envelope-o  flex justify-center items-center border border-[#cfcfcf] rounded-full m-auto  w-[33px] h-[33px] hover:bg-black"></i>

      </a>
      <a target="_blank" class="social-icon social-icon--youtube docs-creator" href="https://www.youtube.com/channel/UCm-PqZnn7ILFyK6Se-AEjiA/featured">
        <i class="fa fa-youtube  flex justify-center items-center border border-[#cfcfcf] rounded-full m-auto  w-[33px] h-[33px] hover:bg-black"></i>

      </a>
      <a target="_blank" class="social-icon social-icon--zalo docs-creator" href="">
        <i class=" flex justify-center items-center border border-[#cfcfcf] rounded-full m-auto  w-[33px] h-[33px] hover:bg-black">Z</i>

      </a>
      <a target="_blank" class="social-icon social-icon--insta docs-creator" href="">
        <i class="fa fa-instagram  flex justify-center items-center border rounded-full m-auto  w-[33px] h-[33px] hover:bg-black"></i>

      </a>

    </div>

    <div class="flex justify-between pt-4">
      <a href="" class="hover:text-[#666666]"> 🠠 Sản phẩm trước</a>
      <a href="" class="hover:text-[#666666]"> Sản phẩm sau ➝</a>
    </div>

    </div>
    </div>
    <div class="leading-[19px] bg-[#fdf1f6] pl-8 pr-8 hidden md:block">
      <div class="item text-center font-bold border-b border-dashed py-4 border-[#e76ea5]">
        <div class="icon">
          <img src="//theme.hstatic.net/200000557063/1000907375/14/pro_policy_icon_1_thumb.jpg?v=1172" alt="Nguyên liệu nhập khẩu" class="w-[40px] m-auto py-1 ">
        </div>
        <div class="title ">
          Nguyên liệu nhập khẩu
        </div>
      </div>
      <div class="item text-center font-bold border-b border-dashed py-4 border-[#e76ea5] ">
        <div class="icon">
          <img src="//theme.hstatic.net/200000557063/1000907375/14/pro_policy_icon_2_thumb.jpg?v=1172" alt="Miễn phí công bố sản phẩm" class="w-[40px] m-auto py-1">
        </div>
        <div class="title">
          Miễn phí công bố sản phẩm
        </div>
      </div>
      <div class="item text-center font-bold border-b border-dashed py-4 border-[#e76ea5] ">
        <div class="icon">
          <img src="//theme.hstatic.net/200000557063/1000907375/14/pro_policy_icon_3_thumb.jpg?v=1172" alt="Hỗ trợ thiết kế bao bì" class="w-[40px] m-auto py-1">
        </div>
        <div class="title">
          Hỗ trợ thiết kế bao bì
        </div>
      </div>
      <div class="item text-center font-bold  py-4  ">
        <div class="icon">
          <img src="//theme.hstatic.net/200000557063/1000907375/14/pro_policy_icon_4_thumb.jpg?v=1172" alt="Chăm sóc khách hàng 24/7" class="w-[40px] m-auto py-1">
        </div>
        <div class="title">
          Chăm sóc khách hàng 24/7
        </div>
      </div>

    </div>
    </div>
    </div>

    </section>
    <section class="max-w-7xl m-auto">
      <h3 class="bg-[#e76ea5] border rounded-t-lg w-[260px] text-center py-2 text-white text-[18px] font-bold ">Mô tả sản phẩm </h3>
      <div class=" border-2 border-t-[#e76ea5] py-8 px-4 text-[17px] mb-8">
        <span style="h3{font-weight:bold;}" class=""><?php echo $row['detail'] ?></span>
      </div>
    </section>
        

      <?php
      }
      ?>
<section class="max-w-7xl m-auto">
      
      
      <h3 class="bg-[#e76ea5] border rounded-t-lg w-[260px] text-center py-2 text-white text-[18px] font-bold ">Bình luận </h3>
      <div class=" border-2 border-t-[#e76ea5] py-8 px-4 text-[17px] mb-8">
      <form action="" method="post" style="margin-bottom: 20px ;">
        <label for="" class="pr-[24.5px]  my-4  ">Họ tên:</label>
        <input type="text" class="bg-[#D3D3D3] px-4 py-1 my-1 w-[200px]" name="Hoten" ><br>
        <label for="" class="pr-1">Bình luận:</label>
        <input type="text" class="bg-[#D3D3D3] px-4 py-1 w-[200px]" name="Binhluan" >
        <input class="border border-[#e76ea5] text-white hover:bg-[#F8A4C4] rounded-sm px-4 mx-1 py-1 font-[600] bg-[#e76ea5]" type="submit" name="submit_comment" >
        </form>
        <hr>
        <?php
                    include '../Model/db.php';
                    if (isset($_POST['submit_comment'])) {
                        $username = $_POST['Hoten'];
                        $comment = $_POST['Binhluan'];
                        $sqqll = " insert into comment_check values (null,'$username','$comment','$id')";
                        if ($kkqq = $connect->query($sqqll))
                        {
                          echo '<script>alert("Bình luận của bạn sẽ hiển thị sau khi được xét duyệt")</script>';
                        }
                    };
                    ?>
        <?php
        include '../Model/db.php';
        $sqlComment = "select * from comment where id_product = '$id' ";
        $resultComment = $connect->query($sqlComment);
        foreach ($resultComment as $Comment) {
        ?>
          <section class="Comment">
            <p class="username"><strong><?php echo $Comment['username'] ?>:</strong></p>
            <p class="CommentItem"><?php echo $Comment['comment'] ?></p>
            <br>
            <hr>
            <br>
          </section>
        <?php
        }
        ?>
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
  </article>
</body>
<script>
  var check = false;

  function changeVal(el) {
    var price = parseFloat(el.parent().children(".price").html());
    var qt = parseFloat(el.parent().children(".qt").html());

    var eq = Math.round(price * qt * 100) / 100;

    el.parent().children(".full-price").html(eq + "tr");

    changeTotal();
  }

  function changeTotal() {

    var price = 0;

    $(".full-price").each(function(index) {
      price += parseFloat($(".full-price").eq(index).html());
    });

    price = Math.round(price * 100) / 100;
    var tax = Math.round(price * 0.05 * 100) / 100
    var shipping = parseFloat($(".shipping span").html());


    if (price == 0) {
      fullPrice = 0;
    }

    $(".subtotal span").html(price);
    $(".tax span").html(tax);
    $(".total span").html(fullPrice);
  }

  $(document).ready(function() {



    $(".qt-plus").click(function() {
      $(this).parent().children(".full-price").addClass("added");
      $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);



      var el = $(this);
      window.setTimeout(function() {
        el.parent().children(".full-price").removeClass("added");
        changeVal(el);
      }, 150);
    });

    $(".qt-minus").click(function() {

      child = $(this).parent().children(".qt");

      if (parseInt(child.html()) > 1) {
        child.html(parseInt(child.html()) - 1);
      }

      $(this).parent().children(".full-price").addClass("minused");

      var el = $(this);
      window.setTimeout(function() {
        el.parent().children(".full-price").removeClass("minused");
        changeVal(el);
      }, 150);
    });

    window.setTimeout(function() {
      $(".is-open").removeClass("is-open")
    }, 1200);

    $(".btn").click(function() {
      check = true;
      $(".remove").click();
    });
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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>