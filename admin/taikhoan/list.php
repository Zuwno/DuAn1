<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">DANH SÁCH TÀI KHOẢN</h1>

                

                <table class=" my-5 w-full">
                    <tr class="bg-[#1B4643] text-white ">
                        <td class="py-2 px-5">Mã tài khoản</td>
                        <td>Tên user</td>
                        <td>Password</td>
                        <td>Họ tên </td>
                        <td>Ảnh đại diện</td>
                        <td>Email</td>
                        <td>Số điện thoại</td>
                        <td></td>
                    </tr>
<?php 
    foreach ($list_taikhoan as $taikhoan) {
        extract($taikhoan);   
        $hinhpath="../imgs/".$img;

        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' width='50'>";
        }else{
            $hinh="no photo";
        }
        
        echo '<tr class="border-b">
                <td class="py-4 px-8">'.$id_account.'</td>
                <td>'.$username.'</td>
                <td>'.$password.'</td>
                <td>'.$name.'</td>
                <td>'.$hinh.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>
                    <a href="" class="bg-blue-400 text-white px-3 py-2 rounded-md hover:bg-gray-400 ">Sửa</a>
                    <a href="" class="bg-red-400 text-white px-3 py-2 rounded-md hover:bg-gray-400">Xóa</a>
                </td>
            </tr>';
                   
    }
?>                    
                </table>

                

            </div>
        </section></div>