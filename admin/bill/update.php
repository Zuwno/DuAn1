<?php
    if(is_array($bill)){
        extract($bill);
    }
    
?>



<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">SỬA ĐƠN HÀNG</h1>

            
                <form action="index.php?act=updatebill" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                    <div class="grid grid-cols-[30%,auto]">
                        
                        <div>
                            <input type="hidden" name="id" value="<?=$id_bill ?>">
                           
                        </div>

                    </div>
                    

                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Tên khách hàng</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="ten_user" id="ten_user" type="text" value="<?=$receive_name?>">
                            <span id="ten_user_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Địa chỉ</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="diachi" id="diachi" type="text" value="<?=$receive_address?>">
                            <span id="diachi_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Số điện thoại</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="sdt" id="sdt" type="text" value="<?=$receive_tel?>">
                            <span id="sdt_error"></span>
                        </div>

                    </div>
                    
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Tổng tiền</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="tong" id="giasp" type="text" value="<?=$total_product?>">
                            <span id="giasp_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Ngày đặt hàng</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="date" id="tensp" type="date" value="<?=$bill_date?>">
                            <span id="tensp_error"></span>
                        </div>

                    </div>
                    
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Tình trạng đơn hàng</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="ttdh" id="tensp" type="type" value="<?=$bill_status?>">
                            <span id="tensp_error"></span>
                        </div>

                    </div>

                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Sản phẩm</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                                <select name="idpr" id="tenloai" class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg">
                                    <option value="">Chọn sản phẩm</option>
                        <?php
                            foreach ($listsanpham as $sanpham){
                                extract($sanpham);
                            
                                echo '<option value="'.$id_product.'" selected>'.$name.'</option>';
                                 
                            }
                        ?>
                                </select>
                                <span id="tensp_error"></span>
                        </div>

                    </div>

                    <div class="w-full text-center  block">
                        <input type="submit" name="capnhat" class="py-2 px-4 rounded-lg my-3 bg-black text-white  items-center hover:text-gray-300"
                            value="Sửa đơn hàng">
                    </div>
                    
            <?php 
                if(isset($thongbao) && $thongbao!="") { ?>
                    <script>
                        window.location.href = 'http://localhost/DA1/admin/index.php?act=listbill';
                    </script>
            <?php } ?>

                    </form>


                    <!-- <script >
                        var tenloai=document.getElementById('tenloai');
                        var tensp=document.getElementById('tensp');
                        var giasp=document.getElementById('giasp');
                        var hinh=document.getElementById('hinh');
                        var detail=document.getElementById('detail');
                        var flag=true;

                        function validate(){
                            if(tenloai.value==''){
                                document.getElementById('tenloai_error').innerHTML='Bạn cần nhập chọn tên loại hàng'
                                flag= false;
                            }
                            else{
                                document.getElementById('tenloai_error').innerHTML=''
                            }

                            if(tensp.value==''){
                                document.getElementById('tensp_error').innerHTML='Bạn cần nhập  tên sản phẩm'
                                flag= false;
                            }
                            else{
                                document.getElementById('tensp_error').innerHTML=''
                            }

                            if(detail.value==''){
                                document.getElementById('detail_error').innerHTML='Bạn cần nhập mô tả cho sản phẩm'
                                flag= false;
                            }
                            else{
                                document.getElementById('detail_error').innerHTML=''
                            }

                            if(giasp.value==''){
                                document.getElementById('giasp_error').innerHTML='Bạn cần nhập giá sản phẩm'
                                flag= false;
                            }
                            else{
                                document.getElementById('giasp_error').innerHTML=''
                            }

                            


                            return flag;
                        }
                    </script> -->
                
            </div>
        </section></div>