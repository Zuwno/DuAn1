<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">DANH SÁCH LIÊN HỆ</h1>
                <table class=" my-5 w-full">
                    <tr class="bg-[#1B4643] text-white ">
                        <td class="py-2 px-5">ID</td>
                        <td>Khách hàng</td>
                        <td>Địa chỉ</td>
                        <td>SĐT</td>
                        <td>Email</td>
                        <td>Nội dung</td>
                        <td></td> 
                    </tr>
<?php 
    
    $sql = "SELECT * FROM servicecontact order by id_contact  desc";
    $list_lienhe = pdo_query($sql);
    foreach ($list_lienhe as $lienhe) :
        extract($lienhe);
        
        $xoalh="index.php?act=xoalh&id=".$id_contact;
      

?>

                    <tr class="border-b-2 border-gray-300">
                        <td class="p-4 px-5"><?=$id_contact ?></td>
                        <td><?=$fullname?></td>
                        <td><?=$diachi?></td>
                        <td><?=$phone?></td>
                        <td><?=$email?></td>
                        <td ><?=$noidung?></td>
                        <td>
                            <a  onclick="return confirm('Bạn có muốn xóa sản phẩm này không')" href="<?=$xoalh?>" class="bg-red-400 text-white px-3 py-2 rounded-md hover:bg-gray-400">Xóa</a>
                        </td>
                    </tr>
<?php endforeach ?>                   
                  
                </table>
               
            

            </div>
        </section></div>