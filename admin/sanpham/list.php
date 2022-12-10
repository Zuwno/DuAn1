<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">DANH SÁCH SẢN PHẨM</h1>

                <form action="index.php?act=listsp" class="flex items-center space-x-4 justify-end"  method="post">
                    <div class="py-5">
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
                                placeholder="Search for items" name="kyw">
                        </div>
                        
                    </div>
                    
                        <div>
                            <select name="iddm" class="bg-[#E0E5EC] mt-1 py-[9px] border-black rounded-md focus:outline-none focus:ring focus:border-blue-500">
                                <option value="0">Tất cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id_category.'">'.$name.'</option>';
                            }  
                            ?>
                            </select>
                        </div>
                    <input type="submit" name="listok" value="Search" class="bg-[#E0E5EC] p-2 border-black rounded-md focus:outline-none focus:ring focus:border-blue-500">
                </form>

                <table class=" w-full">
                    <tr class="bg-[#1B4643] text-white ">
                        <td class="py-2 px-5">Mã sản phẩm</td>
                        <td>Tên sản phẩm</td>
                        <td>Đơn giá</td>
                        <td>Ảnh</td>
                      
                        
                        
                        <td></td>
                    </tr>
<?php 
    foreach ($listsanpham as $sanpham) :
        extract($sanpham);
        $suasp="index.php?act=suasp&id=".$id_product;
        $xoasp="index.php?act=xoasp&id=".$id_product;
        $hinhpath="../imgs/".$img;

        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' width='50'>";
        }else{
            $hinh="no photo";
        }
?>
        <tr class="border-b">
                <td class="py-4 px-8"><?=$id_product?></td>
                <td><?=$name?></td>
                <td><?=$price?> VNĐ</td>
                <td><?=$hinh?></td>
                

                <td>
                    <a href="<?=$suasp?>" class="bg-blue-400 text-white px-3 py-2 rounded-md hover:bg-gray-400 ">Sửa</a>
                    <a  onclick="return confirm('Bạn có muốn xóa sản phẩm này không')" href="<?=$xoasp?>" class="bg-red-400 text-white px-3 py-2 rounded-md hover:bg-gray-400">Xóa</a>
                </td>
            </tr>
                      
    <?php endforeach ?>     

                </table>

                <div class="py-8">
                    <a href="index.php?act=addsp" class="px-4 py-2 bg-[#0284c7] rounded-md text-white hover:bg-[#0369a1]">Nhập thêm</a>
                </div>

            </div>
        </section></div>