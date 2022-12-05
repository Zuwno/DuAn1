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
    <a href="" class="ml-auto flex items-center text-primary pr-5"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
</svg>
 Reload Data </a>
</div>

<div class="grid grid-cols-4 mt-5 gap-6 dropdown ">
    <div class="bg-white p-6 rounded-lg shadow-lg transition  hover:scale-110  delay-100  duration-300 relative hover:cursor-grabbing">

        <div class="flex justify-between w-full ">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
</svg>

            </div>

            <div class="border bg-[#44946D] text-[12px] text-white rounded-2xl px-2 py-1">33 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
        <div class="text-base text-slate-500 mt-1">Item Sales</div>

    </div>
    <!-- end -->
    <div class="bg-white p-6 rounded-lg shadow-lg ">

        <div class="flex justify-between w-full text-[#E9a23c] ">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
</svg>

            </div>

            <div class="border bg-red-500 text-[12px] text-white rounded-2xl px-2 py-1">2 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
        <div class="text-base text-slate-500 mt-1">New Orders</div>
    </div>
    <!-- end -->
    <div class="bg-white p-6 rounded-lg shadow-lg ">

        <div class="flex justify-between w-full text-[#F3CE4A]">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
</svg>

            </div>

            <div class="border bg-[#44946D] text-[12px] text-white rounded-2xl px-2 py-1">2 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
        <div class="text-base text-slate-500 mt-1">Total Products</div>
    </div>
    <!-- end -->
    <div class="bg-white p-6 rounded-lg shadow-lg ">

        <div class="flex justify-between w-full text-[#E9A23C]">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>

            </div>

            <div class="border bg-[#44946D] text-[12px] text-white rounded-2xl px-2 py-1">2 %</div>

        </div>
        <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
        <div class="text-base text-slate-500 mt-1 ">Total Products</div>
    </div>

</div>
<div class=" grid grid-cols-[49%,23%,23%] h-92   gap-6 box shadow-lg ">

            <div>
                <div class="font-medium text-[18px] py-7">Sales Report   </div>
                
                 <div class="pt-10 bg-white rounded-lg shadow-xl">
                    <div class="flex mx-5  space-x-7 ">
                        <div class="pr-7 border-r">
                            <span class="text-[20px]">$ 15,000</span>
                            <p class="text-[14px] text-[#64748B]">this month</p>
                        </div>
                       <div>
                        <span class="text-[20px] ">$ 10,000</span>
                        <p class="text-[14px] text-[#64748B]">last month</p>
                       </div>
                       <div class="justify-end"> 
                        
                        <select class="space-x-5  pr-5 pl-5">
                            <option>Lọc theo danh mục</option>
                            <option>No</option>
                            <option>Maybe</option>
                          </select>
                          
                       </div>
                      
                      
                     </div> 
                    <canvas id="myChart"
                    style="display: block; 
                    height: 300px; 
                    width: 393px;
                    border-radius: 8px;
                    "
                   
                    class=" w-full  h-92 bg-white p-5 shadow-lg">
                    </canvas>
                    
                 </div>
               

            </div>
            <div>
                <div class="font-medium text-[18px] py-7">Sales Report   </div>
                <div class="pt-10 bg-white h-[463px] shadow-xl  w-full rounded-lg ">
               
                    <canvas id="myChart2"
                    style="display: block; height: 350px; 
                    width: 393px;
                   
                    "
                    class="w-full"></canvas>
    
    
                    <div class="flex pt-3 items-center">
                        
                        <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
                        <span class="mr-2 h-2 w-2 rounded-full bg-[#365E4F]"></span>
                        <span class="truncate">17 - 30 Yearsold</span>
                        <span class="font-medium ml-auto mr-3">62%</span>
                        
                        
                    </div>
                    <div class="flex pt-3 items-center">
                        
                        <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
                        <span class="mr-2 h-2 w-2 rounded-full bg-[#E1AF5F]"></span>
                        <span class="truncate">31 - 50 Years old</span>
                        <span class="font-medium ml-auto mr-3">33%</span>
                        
                    </div>
                    <div class="flex pt-3 items-center">
                        
                        <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
                        <span class="mr-2 h-2 w-2 rounded-full bg-[#EFD46F]"></span>
                        <span class="truncate"> >= 50 Years old</span>
                        <span class="font-medium ml-auto mr-3">10%</span>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="font-medium text-[18px] py-7">Sales Report</div>
                <div class="pt-10 bg-white h-[463px] shadow-xl  w-full rounded-lg">
                
                    <canvas id="myChart3"
                    style="display: block; height: 350px; 
                    width: 393px;
                   
                    "    
                    
                    class="w-full  "></canvas>
    
                    <div class="flex pt-3 items-center">
                        
                        <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
                        <span class="mr-2 h-2 w-2 rounded-full bg-[#365E4F]"></span>
                        <span class="truncate">17 - 30 Yearsold</span>
                        <span class="font-medium ml-auto mr-3">62%</span>
                        
                    </div>
                    <div class="flex pt-3 items-center">
                        
                        <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
                        <span class="mr-2 h-2 w-2 rounded-full bg-[#E1AF5F]"></span>
                        <span class="truncate">31 - 50 Years old</span>
                        <span class="font-medium ml-auto mr-3">33%</span>
                        
                    </div>
                    <div class="flex pt-3 items-center">
                        
                        <div class="w-2 h-2 list-disc bg-primary rounded-full mr-3"></div>
                        <span class="mr-2 h-2 w-2 rounded-full bg-[#EFD46F]"></span>
                        <span class="truncate"> >= 50 Years old</span>
                        <span class="font-medium ml-auto mr-3">10%</span>
                        
                    </div>
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