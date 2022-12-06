<div class="bg-[#F0EFEF]  border">
    <section class="bg-white mt-10">
        <div class="pl-[24%] m-10 ">
            <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">XÉT DUYỆT BÌNH LUẬN</h1>



            <table class=" my-5 w-full">
                <tr class="bg-[#1B4643] text-white ">
                    <td class="py-2 px-5">ID</td>
                    <td>Nội dung bình luận</td>
                    <td>Tên User</td>
                    <td>ID Sản phẩm</td>
                    <td></td>
                <a href=""></a>
                </tr>
                <?php
                foreach ($list_binhluancheck as $binhluancheck) {
                    extract($binhluancheck);

                    $xoablc = "index.php?act=xoablc&id=" . $id_comment_check;

                    echo '<tr class="border-b">
                <td class="py-4 px-5">' . $id_comment_check . '</td>
                <td>' . $comment_check . '</td>
                <td class="px-5">' . $username_check . '</td>
                <td class="px-8">' . $id_product_check . '</td>
                <td>
                <a href="binhluancheck/xacnhan.php?id='. $id_comment_check .'" class="bg-blue-400 text-white px-3 py-2 rounded-md hover:bg-gray-400">Xác nhận</a>
                    <a href="' . $xoablc . '" class="bg-red-400 text-white px-3 py-2 rounded-md hover:bg-gray-400">Xóa</a>
                    
                </td>

            </tr>';
                }
                ?>
            </table>



        </div>
    </section>
</div>