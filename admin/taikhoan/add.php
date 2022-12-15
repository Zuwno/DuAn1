<div class="bg-[#F0EFEF]  border">
        <section class="bg-white mt-10">
            <div class="pl-[24%] m-10 ">
                <h1 class="text-[25px] py-10 text-gray-600 font-semibold border-black border-b-2">THÊM TÀI KHOẢN ADMIN</h1>

            
                <form action="index.php?act=addtk" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Tên tài khoản</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="text" name="tentk" id="tentk">
                            <span id="tentk_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">PassWord</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="text" name="pass" id="pass">
                            <span id="pass_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Họ tên</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="text" name="name" id="hoten">
                            <span id="name_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Avatar</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="file" name="hinh" id="hinh">
                            <span id="hinh_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Email</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="email" name="email" id="email">
                            <span id="email_error"></span>
                        </div>

                    </div>
                    <div class="grid grid-cols-[30%,auto]">
                        <div class="py-5 pl-5 ">
                            <label class="" for="">Số điện thoại</label><span class="text-red-600">*</span>
                        </div>
                        <div>
                            <input class="border  border-gray-600 p-2 m-3 w-[50%] rounded-lg" type="text" name="sdt" id="sdt">
                            <span id="sdt_error"></span>
                        </div>

                    </div>
                    <div class="w-full text-center  block">
                        <input type="submit" name="btn_insert" class="py-2 px-4 rounded-lg my-3 bg-black text-white  items-center"
                            value="Thêm tài khoản">
                    </div>

                    <?php 
                    if(isset($thongbao) && $thongbao!="") { ?>
                        <script>
                            window.location.href = 'http://localhost/DA1/Admin/index.php?act=dskh';
                        </script>
                    <?php } ?>
                    </form>

                    <script >
                        var tentk=document.getElementById('tentk');
                        var pass=document.getElementById('pass');
                        var hoten=document.getElementById('hoten');
                        var hinh=document.getElementById('hinh');
                        var email=document.getElementById('email');
                        var sdt=document.getElementById('sdt');

                        var flag=true;

                        function validate(){
                            if(tentk.value==''){
                                document.getElementById('tentk_error').innerHTML='Bạn cần nhập tên tài khoản'
                                flag= false;
                            }
                            else{
                                document.getElementById('tentk_error').innerHTML=''
                            }

                            
                            if(pass.value==''){
                                document.getElementById('pass_error').innerHTML='Bạn cần nhập  mật khẩu'
                                flag= false;
                            }
                            else{
                                document.getElementById('pass_error').innerHTML=''
                            }

                            if(hoten.value==''){
                                document.getElementById('name_error').innerHTML='Bạn cần nhập họ tên của admin'
                                flag= false;
                            }
                            else{
                                document.getElementById('name_error').innerHTML=''
                            }

                            var reg= /\w+([\.-]?\w+)*@\w+(\.\w{2,3})+$/;
                            if(!reg.test(email.value)){
                                document.getElementById('email_error').innerHTML='Bạn cần nhập email'
                                flag= false;
                            }
                            else{
                                document.getElementById('email_error').innerHTML=''
                            }

                            if(hinh.value==''){
                                document.getElementById('hinh_error').innerHTML='Bạn cần chọn hình cho admin'
                                flag= false;
                            }
                            else{
                                document.getElementById('hinh_error').innerHTML=''
                            }

                            var reg_sdt=/^0\d{9}$/;
                            if(!reg_sdt.test(sdt.value)){
                                document.getElementById('sdt_error').innerHTML='Bạn cần nhập sdt'
                                flag= false;
                            }
                            else{
                                document.getElementById('sdt_error').innerHTML=''
                            }

                            return flag;
                        }
                    </script>
                
            </div>
        </section></div>