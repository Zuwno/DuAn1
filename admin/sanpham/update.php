<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../imgs/".$img;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' width='80'>";
        }else{
            $hinh="no photo";
        }
?>



<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">SỬA SẢN PHẨM</h1>

            
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                    <div class="grid grid-cols-[30%,auto]">
                        
                        <div>
                            <input type="hidden" name="id" value="<?=$id_product?>">
                           
                        </div>

                    </div>
                    

                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Tên sản phẩm</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="tensp" id="tensp" type="text" value="<?=$name?>">
                            <span id="tensp_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Giá sản phẩm</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" name="giasp" id="giasp" type="text" value="<?=$price?>">
                            <span id="giasp_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Hình ảnh</label><span class="text-red-600">*</span>
                        </div>
                        <div class="flex">
                            <div class="flex border  border-gray-600 p-2 m-3 rounded-lg w-[50%] ">
                                <input class=" " name="hinh"  type="file">
                                <p id="hinh"><?=$hinh?></p>
                                
                            </div> <br> <br>
                            <span class="py-8" id="hinh_error"></span>
                        </div>
                        

                    </div>
                    
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Mô tả</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <textarea name="detail" id="detail" class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" cols="30" rows="5"><?=$detail?></textarea>
                            <span id="detail_error"></span>
                        </div>

                    </div>

                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Loại sản phẩm</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                                <select name="iddm" id="tenloai" class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg">
                                    <option value="">Chọn loại hàng</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                if($id_category == $id_category)
                                echo '<option value="'.$id_category.'" selected>'.$name.'</option>';
                                else echo '<option value="'.$id_category.'">'.$name.'</option>';
                            }
                        ?>
                                </select>
                                <span id="tenloai_error"></span>
                        </div>

                    </div>

                    <div class="w-full text-center  block">
                        <input type="submit" name="capnhat" class="py-2 px-4 rounded-lg my-3 bg-black text-white  items-center hover:text-gray-300"
                            value="Sửa sản phẩm">
                    </div>
                    
            <?php 
                if(isset($thongbao) && $thongbao!="") { ?>
                    <script>
                        window.location.href = 'http://localhost/DA1/Admin/index.php?act=listsp';
                    </script>
            <?php } ?>

                    </form>


                    <script >
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
                    </script>
                
            </div>
        </section></div>