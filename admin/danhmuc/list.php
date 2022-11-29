<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">DANH SÁCH LOẠI HÀNG</h1>

                

                <table class=" my-5 w-full">
                    <tr class="bg-[#1B4643] text-white ">
                        <td class="py-2 px-5">Mã loại hàng</td>
                        <td>Tên loại hàng</td>
                        <td>Thuộc tính</td>
                        <td></td>
                    </tr>
<?php 
    foreach ($listdanhmuc as $danhmuc) : 
    
        extract($danhmuc);
        $suadm="index.php?act=suadm&id=".$id_category;
        $xoadm="index.php?act=xoadm&id=".$id_category;
    ?>

    <tr class="border-b"> 
        <td class="py-4 px-8"><?=$id_category?></td>
        <td><?=$name?></td>
        <td><?=$detail?></td>
        <td>
            <a href="<?=$suadm?>" class="bg-blue-400 text-white px-3 py-2 rounded-md hover:bg-gray-400 ">Sửa</a>
            <a  onclick="return confirm('Bạn có muốn xóa danh mục này không')" href="<?=$xoadm?>"  class="bg-red-400 text-white px-3 py-2 rounded-md hover:bg-gray-400">Xóa</a>
        </td>
    </tr>
        
                   
    <?php endforeach ?>

                   
                </table>

                <div class="py-8">
                    <a href="index.php?act=adddm" class="px-4 py-2 bg-[#0284c7] rounded-md text-white hover:bg-[#0369a1]">Nhập thêm</a>
                </div>

            </div>
        </section></div>