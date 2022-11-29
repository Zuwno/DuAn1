<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">DANH SÁCH ĐƠN HÀNG</h1>

                

                <table class=" my-5 w-full">
                    <tr class="bg-[#1B4643] text-white ">
                        <td class="py-2 px-5">ID</td>
                        <td>Khách hàng</td>
                        <td>Địa chỉ</td>
                        <td>SĐT</td>
                        <td>ID sản phẩm</td>
                        
                        <td>Tổng tiền</td>
                        <td>Ngày đặt hàng</td>
                        <td>Tình trạng đơn hàng</td>
                        <td></td> 
                    </tr>
<?php 
    foreach ($listbill as $bill) :
        extract($bill);
        $suabill="index.php?act=suabill&id=".$id_bill;
        $xoabill="index.php?act=xoabill&id=".$id_bill;

?>

                    <tr >
                        <td class="p-4 px-5"><?=$id_bill ?></td>
                        <td><?=$receive_name?></td>
                        <td><?=$receive_address?></td>
                        <td><?=$receive_tel?></td>
                        <td><?=$id_product ?></td>
                        
                        <td><?=$total_product?> VNĐ</td>
                        <td><?=$bill_date?></td>
                        <td><?=$bill_status?></td>
                        <td>
                                <a href="<?=$suabill?>" class="bg-blue-400 text-white px-3 py-2 rounded-md hover:bg-gray-400 ">Sửa</a>
                             <a  onclick="return confirm('Bạn có muốn xóa danh mục này không')" href="<?=$xoabill?>"  class="bg-red-400 text-white px-3 py-2 rounded-md hover:bg-gray-400">Xóa</a>
                        </td>
                    </tr>
<?php endforeach ?>                   
                  
                </table>
               
                

            </div>
        </section></div>