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
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Heebo:wght@200;300;600;700&family=Inter:wght@100;200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
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
            <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>


    </div>
    <article class="flex space-x-5 relative">
        <div class="">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="bg-[#E0E5EC]  border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for items">
            </div>
        </div>

        <div class="justify-end text-[14px]">

            <button onclick="handClick()" class=" ">
                <img class="rounded-full mt-1" src="../imgs/anh.jpg" width="40px" alt="">
            </button>
            <ul id="main-menu"
                class="  bg-[#214D3C] text-white  w-52 rounded-xl absolute leading-9 -translate-x-52 delay-150 z-[999px] hidden">
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
    <a href="" class="ml-auto flex items-center text-primary pr-5"> <i
            class="fa-sharp fa-solid fa-rotate-right px-2"></i> Reload Data </a>
</div>

<div class="grid grid-cols-4 mt-5 gap-6 dropdown ">
    <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

        <div class="flex justify-between w-full ">
            <div>
                <i class="fa-solid fa-cart-shopping fa-lg"></i>
            </div>

            <div class="border bg-[#44946D] text-[12px] text-white rounded-2xl px-2 py-1">33 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
        <div class="text-base text-slate-500 mt-1">Item Sales</div>

    </div>
    <!-- end -->
    <div class="bg-white p-6 rounded-lg shadow-lg ">    

        <div class="flex justify-between w-full ">
            <div>
                <i class="fa-solid fa-table fa-lg text-[#E9A23C]"></i>
            </div>

            <div class="border bg-red-500 text-[12px] text-white rounded-2xl px-2 py-1">2 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6 hover:cursor-grabbing">3.721</div>
        <div class="text-base text-slate-500 mt-1">New Orders</div>
    </div>
    <!-- end -->
    <div class="bg-white p-6 rounded-lg shadow-lg ">

        <div class="flex justify-between w-full ">
            <div>
                <i class="fa-solid fa-tv fa-lg text-[#F3CE4A]"></i>
            </div>

            <div class="border bg-[#44946D] text-[12px] text-white rounded-2xl px-2 py-1">2 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
        <div class="text-base text-slate-500 mt-1">Total Products</div>
    </div>
    <!-- end -->
    <div class="bg-white p-6 rounded-lg shadow-lg ">

        <div class="flex justify-between w-full ">
            <div>
                <i class="fa-regular fa-user fa-xl text-[#44946D]"></i>
            </div>

            <div class="border bg-[#44946D] text-[12px] text-white rounded-2xl px-2 py-1">2 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
        <div class="text-base text-slate-500 mt-1 ">Total Products</div>
    </div>

</div>
<div class=" grid grid-cols-[49%,23%,23%] h-92   gap-6 box shadow-lg ">

    <div class="pt-10 ">

        <h1></h1>
        <canvas id="myChart"
        style="display: block; 
        height: 300px; 
        width: 393px;
        border-radius: 8px;
        "
       
        class=" w-full  h-92 bg-white p-5 shadow-lg">
        </canvas>
        

    </div>
    <div class="mt-10 bg-white  w-full rounded-lg">
        <canvas id="myChart2"
        style="display: block; height: 300px; 
        width: 393px;
       
        "    
        
        class="w-full  "></canvas>

       
        <div class="flex pt-3 items-center">
            
            <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
            <span class="truncate">17 - 30 Yearsold</span>
            <span class="font-medium ml-auto mr-3">62%</span>
        </div>
    </div>
    <div class="mt-10 bg-white  w-full rounded-lg">
        <canvas id="myChart3"
        style="display: block; height: 300px; 
        width: 393px;
       
        "    
        class="w-full  "></canvas>

    
        <div class="flex pt-3 items-center">
            
            <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
            <span class="truncate">17 - 30 Yearsold</span>
            <span class="font-medium ml-auto mr-3">62%</span>
        </div>
    </div>
</div>
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
t = setInterval(function () {
next();
}, 2500)
}

function openNav() {
menu = document.getElementById('main-me')
if(document.getElementById("myNav").style.width = "block"){
document.getElementById("myNav").style.width = "100%";
}else
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
                        legend: { display: false }
                    }
                });
                
                var xValues = [];
                var yValues = [33,10,62];
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
var yValues = [33,10,62];
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