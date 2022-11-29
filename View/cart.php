<?php
session_start();
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
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
    </style>
</head>

<body>
    <article class="">
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
                            <li class="hover:underline  hover:text-[#e76ea5]"><a href="gioithieu.html">Giới thiệu</a>
                            </li>

                            <li>
                                <a href="sanpham.php" class="hover:underline  hover:text-[#e76ea5]">Sản phẩm</a>
                                <ul class="list-sanPham px-4 w-[200px] border border-[#bbb] ">
                                    <li class="text-[#777] hover:text-[#e76ea5] font-[400] border-b-2 py-2"><a
                                            href="">Hộp đơn</a></li>
                                    <hr>
                                    <li class="text-[#777] hover:text-[#e76ea5] font-[400] border-b-2 py-2"><a
                                            href="">Combo 2 hộp</a>
                                    </li>
                                    <li class="text-[#777] hover:text-[#e76ea5] font-[400]  py-2"><a href="">Combo 3
                                            hộp</a></li>
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
            <section class="">
                <div>
                    <img class="absolute" src="../imgs/breadcrumb_img.png" alt="">
                    <div class=" py-12 pl-28 relative">
                        <h2 class="text-white font-bold text-[38px] ">GIỎ HÀNG CỦA BẠN</h2>
                        <span class="text-white text-[17px] "><a href="index.php">Trang chủ</a> <i
                                class="fa fa-angle-right" aria-hidden="true"></i><a href=""> Giỏ hàng</a> </span>
                    </div>
                </div>
            </section>
        </header>

        <div class="max-w-7xl mx-auto py-10">
            <h1 class="bg-[#e76ea5] text-[25px] p-5 rounded-lg text-white font-sans font-semibold">GIỎ HÀNG</h1>

            <form action="">
                <table class="my-8 w-full ">
                    <thead class="">
                        <tr class="text-white text-lg bg-[#e76ea5]">
                            <td class="py-3 pl-5">Hình ảnh</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td>Thành tiền</td>
                            <td>Thao tác</td>
                        </tr>
                    </thead>

                    <tbody >
                        <?php
                       if (isset($_SESSION['cart'])) { 
                        ?>
                        <?php
                        $total = 0;
                        foreach ($_SESSION['cart'] as $key => $item) {
                            $total += $item['price'] * $item['sl'];
                            ?>
                            <tr class="text-md font-semibold border-b p-2">
                                <td class="mr-2">
                                    <img src="http://localhost/DA1/imgs/<?=$item['image'] ?>" alt="" style="width: 150px;height: 150px">
                                </td>
                                <td><?=$item['name_product']?></td>
                                <td><?=number_format($item['price'])?></td>
                                <td><?=number_format($item['sl'])?></td>
                                <td><?=number_format($item['price'] * $item['sl'])?></td>
                                <td><input type="submit" name="" value="Xóa"
                                class="bg-[#e76ea5] p-2  px-4 rounded-lg text-white hover:text-gray-300 font-sans font-semibold"></td>
                            </tr>
                            <?php } ?>
                      <?php } ?>

                    </tbody>
                    <tfoot>
                        <tr class="items-center bg-[#e76ea5] text-white font-semibold ">
                            <td colspan="4" class="px-10 py-3 text-[20px]  font-sans">Tổng tiền</td>
                            <td colspan="2" class="text-[20px]  font-sans"><?=number_format($total)?> VNĐ</td>
                        </tr>
                    </tfoot>
                </table>

                <div class="w-full flex justify-end">
                    <a href="../View/lienHe.php" class="bg-[#e76ea5] p-3 rounded-lg text-white hover:text-gray-300 font-sans font-semibold">
                    Tiếp theo<a>
                </div>
            </form>


        </div>






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


</body>

</html>