<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">CHI TIẾT ĐƠN HÀNG</h1>
                <table class=" my-5 w-full">
                    <tr class="bg-[#1B4643] text-white ">
                        <td class="py-2 px-5">ID</td>
                        <td>Tên sản phẩm</td>
                        <td>Ảnh</td>
                        <td>Số lượng</td>
                        <td>Thành tiền </td>
                        
                    </tr>
<?php 
    $sql="select product.name,product.img,cart.id_cart,cart.amount,cart.price from cart join product on cart.id_product = product.id_product where id_bill=".$_GET['id'];
    $kq=pdo_query($sql);
    foreach ($kq as $items) : 


?>

                    <tr >
                        <td class="p-4 px-5"><?=$items['id_cart'] ?></td>
                        <td><?=$items['name'] ?></td>
                        <td><img src="../imgs/<?=$items['img'] ?>" alt=""></td>
                        <td><?=$items['amount'] ?></td>
                        <td><?=$items['price'] ?> VNĐ</td>
                        
                    </tr>
<?php endforeach ?>                 
                  
                </table>
               
            

            </div>
        </section></div>