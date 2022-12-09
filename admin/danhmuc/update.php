<?php
    if(is_array($dm)){
        extract($dm);
    }

?>




<div class="bg-[#F0EFEF]  border">
            <section class="bg-white mt-10">
                <div class="pl-[24%] m-10 ">
                    <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">SỬA LOẠI HÀNG</h1>

                    <form action="index.php?act=updatedm" method="post" onsubmit="return validate()">
                    <div class="grid grid-cols-[30%,auto]">
                        
                        <div>
                        <input type="hidden" name="id" value="<?php if(isset($id_category)&&($id_category>0)) echo $id_category; ?>">
                            
                        </div>

                    </div>

                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Tên loại hàng</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="text" id="tenloai" name="tenloai"
                                    value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                                    <span id="tenloai_error"></span>
                        </div>

                    </div>

                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Thuộc tính</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="text" id="detail" name="detail"
                                    value="<?php if(isset($detail)&&($detail!="")) echo $detail; ?>">
                                    <span id="detail_error"></span>
                        </div>

                    </div>


                    <div class="w-full text-center  block">
                        <input type="submit" name="capnhat" class="py-2 px-4 rounded-lg my-3 bg-black text-white  items-center hover:text-gray-300"
                            value="Update">
                    </div>
            <?php 
                if(isset($thongbao) && $thongbao!="") { ?>
                    <script>
                        window.location.href = 'http://localhost/DA1/Admin/index.php?act=listdm';
                    </script>
            <?php } ?>
                    </form>

                    <script >
                        var tenloai=document.getElementById('tenloai');
                        var detail=document.getElementById('detail');
                        var flag=true;

                        function validate(){
                            if(tenloai.value==''){
                                document.getElementById('tenloai_error').innerHTML='Bạn cần nhập tên loại hàng'
                                flag= false;
                            }
                            else{
                                document.getElementById('tenloai_error').innerHTML=''
                            }

                            if(detail.value==''){
                                document.getElementById('detail_error').innerHTML='Bạn cần nhập thuộc tính cho loại hàng'
                                flag= false;
                            }
                            else{
                                document.getElementById('detail_error').innerHTML=''
                            }
                            return flag;
                        }
                    </script>

                </div>
            </section>
        </div>