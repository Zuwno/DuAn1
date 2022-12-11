<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Heebo:wght@200;300;600;700&family=Inter:wght@100;200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0/css/all.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
</head>

<body>
    <section class="ml-[23%]">

        <nav class="flex justify-between p-5 border-b  border-gray-400 pr-5">
            <div>

                <button onclick="openNav()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>


            </div>
            <article class="flex space-x-5 relative">
                <div class="">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="bg-[#E0E5EC]  border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>

                <div class="justify-end text-[14px]">

                    <button onclick="handClick()" class=" ">
                        <img class="rounded-full mt-1" src="../imgs/anh.jpg" width="40px" alt="">
                    </button>
                    <ul style="z-index: 3;" id="main-menu" class="  bg-[#214D3C] text-white  w-52 rounded-xl absolute leading-9 -translate-x-52 delay-150 z-[999px] hidden">
                        <li class="px-5 border-b border-[#325B4B] p-2 "><a href="">Admind</a></li>
                        <li class=" pl-5"><a href="">inbox</a></li>
                        <li class=" pl-5"><a href="">hồ sơ</a></li>
                        <li class=" pl-5"><a href="">Thêm liên hệ</a></li>
                        <li class=" pl-5 border-t border-[#325B4B] py-2"><a href="../Model/dangxuat.php">đăng xuất</a></li>
                    </ul>
                </div>

                </div>


            </article>


        </nav>
        <!-- bao cao chung -->
        <div class="intro-y flex items-center h-10">
            <h2 class="font-medium text-lg pt-5 truncate mr-5">
                Báo cáo chung
            </h2>
            <a href="" class="ml-auto flex items-center text-primary pr-5"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
                Reload Data </a>
        </div>

        <div class="grid grid-cols-4 mt-5 gap-6 dropdown ">
            <a href="index.php?act=listdm">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Số lượng Loại hàng</div>

                </div>
            </a>
            <!-- end -->
            <a href="index.php?act=listsp">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Số lượng sản phẩm</div>

                </div>
            </a>
            <!-- end -->
            <a href="index.php?act=dskh">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Số lượng tài khoản</div>

                </div>
            </a>
            <!-- end -->
            <a href="index.php?act=dsblc">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Bình luận chờ xét duyệt</div>

                </div>
            </a>
        </div>
        <!-- AAAAAAAAAAAAAAAAA -->
        <div class="grid grid-cols-4 mt-5 gap-6 dropdown ">
            <a href="index.php?act=dsbl">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Bình luận đã xét duyệt</div>

                </div>
            </a>
            <!-- end -->
            <a href="index.php?act=listbill">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Đơn hàng chờ xác nhận</div>

                </div>
            </a>
            <!-- end -->
            <a href="index.php?act=listbill">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Đơn hàng đã xác nhận</div>

                </div>
            </a>
            <!-- end -->
            <a href="index.php?act=listbill">
                <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

                    <div class="flex justify-between w-full ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                        </div>



                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                    <div class="text-base text-slate-500 mt-1">Đơn hàng đang giao</div>

                </div>
            </a>

        </div>
        <!-- BBBBBBBBBB -->
        <?php
        include '../Model/db.php';
        // Lenh sql
        $soluongloaihang = "SELECT count(*) from category; ";
        $soluongsanpham = 'select count (*) from produce';
        $soluongtaikhoan = 'select count (*) from account';
        $binhluandangxetduyet = 'select count (*) form comment_check';
        $binhluandaxetduyet = 'select count (*) from comment';
        $donhangdangxacnhan = 'select count (*) from bill where bill_status = Đang xác nhận ';
        $donhangdaxacnhan = 'select count (*) from bill where bill_status = Đã xác nhận';
        $donhangdanggiao = 'select count (*) from bill where bill_status = Đang giao hàng';
        // khởi chạy
        $soluongloaihangt = $connect->query($soluongloaihang);
        // $soluongsanphamt = $connect->query($soluongsanpham);
        // $soluongtaikhoant = $connect->query($soluongtaikhoan);
        // $binhluandangxetduyett = $connect->query($binhluandangxetduyet);
        // $binhluandaxetduyett = $connect->query($binhluandaxetduyet);
        // $donhangdangxacnhant = $connect->query($donhangdangxacnhan);
        // $donhangdaxacnhant = $connect->query($donhangdaxacnhan);
        // $donhangdanggiaot = $connect->query($donhangdanggiao);
        ?>

        <?php

        ?>
        <!-- BBBBBBBBBBb -->
    </section>

    <script>
        function handClick() {
            menu = document.getElementById('main-menu')
            if (menu.style.display === 'block') {
                menu.style.display = 'none'
            } else {
                menu.style.display = 'block'
            }
        }

        var img = document.getElementById('img');

        var anh = [
            'whyusbg2.png',
            'whyusgb3.png'
        ];

        path_img = 'img/'

        var len = anh.length

        var index = 0


        function next() {
            if (index == len - 1) {
                index = 0;
                img.src = path_img + anh[index];
            } else {
                index++;
                img.src = path_img + anh[index]
            }
        }
        var t = null;
        var flag = 0;

        if (flag == 0) {
            t = setInterval(function() {
                next();
            }, 2500)
        }

        function openNav() {
            menu = document.getElementById('main-me')
            if (document.getElementById("myNav").style.width = "block") {
                document.getElementById("myNav").style.width = "100%";
            } else
                document.getElementById("myNav").style.width = "0%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

        var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "sep", "Oct", "Now", "Dec"];
        var yvalues = [0, 200, 400, 600, 800, 1000];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{

                }, {
                    data: [0, 200, 250, 200, 700, 550, 650, 1050, 950, 1100, 750, 1200],
                    borderColor: "green",
                    fill: false
                }, {
                    data: [0, 250, 400, 560, 320, 600, 720, 850, 690, 805, 1200, 900],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });

        var xValues = [];
        var yValues = [33, 10, 62];
        var barColors = [

            "#EBAC4E",
            "#F4D35B",
            "#365E4F",

        ];

        new Chart("myChart2", {
            type: "pie",
            data: {

                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {

            }
        });
        var xValues = [];
        var yValues = [33, 10, 62];
        var barColors = [

            "#EBAC4E",
            "#F4D35B",
            "#365E4F",

        ];

        new Chart("myChart3", {
            type: "doughnut",
            data: {

                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {

            }
        });
    </script>
</body>

</html>