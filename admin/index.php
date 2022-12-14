<?php
session_start();
if (isset($_SESSION['username'])) {
  include "../model/pdo.php";
  include "../model/danhmuc.php";
  include "../model/sanpham.php";
  include "../model/taikhoan.php";
  include "../model/binhluan.php";
  include "../model/add_cart.php";
  include "../model/lienhe.php";
  include "header.php";

  //Controler
  if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
      case 'home':
        include "home.php";
        break;
        /*Controller Danh mục*/
      case 'adddm':
        if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
          $tenloai = $_POST['tenloai'];
          $detail = $_POST['detail'];
          insert_danhmuc($tenloai, $detail);
          $thongbao = "Thêm thành công";
        }
        include "danhmuc/add.php";
        break;

      case 'listdm':
        $sql = "select * from category order by id_category desc";
        $listdanhmuc = loadall_danhmuc();
        include "danhmuc/list.php";
        break;

      // case 'xoadm':
      //   if (isset($_GET['id']) && ($_GET['id'] > 0)) {
      //     delete_danhmuc($_GET['id']);
      //   }
      //   $listdanhmuc = loadall_danhmuc();
      //   include "danhmuc/list.php";
      //   break;

      case 'suadm':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $dm = loadone_danhmuc($_GET['id']);
        }
        include "danhmuc/update.php";
        break;

      case 'updatedm':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $tenloai = $_POST['tenloai'];
          $detail = $_POST['detail'];
          $id_category = $_POST['id'];
          update_danhmuc($id_category, $tenloai, $detail);
          $thongbao = "Cập nhật thành công ";
        }
        $listdanhmuc = loadall_danhmuc();
        include "danhmuc/list.php";
        break;
        // ----------------------SẢN PHẨM----------------
      case 'addsp':
        if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
          $iddm = $_POST['iddm'];
          $tensp = $_POST['tensp'];
          $giasp = $_POST['giasp'];

          $detail = $_POST['detail'];

          $hinh = $_FILES['hinh']['name'];
          $target_dir = "../imgs/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          } else {
          }
          insert_sanpham($tensp, $giasp, $hinh, $detail, $iddm);
          $thongbao = "Thêm thành công";
        }
        $listdanhmuc = loadall_danhmuc();
        include "sanpham/add.php";
        break;


      case 'listsp':
        if (isset($_POST['listok']) && ($_POST['listok'])) {
          $kyw = $_POST['kyw'];
          $iddm = $_POST['iddm'];
        } else {
          $kyw = '';
          $iddm = 0;
        }

        $listdanhmuc = loadall_danhmuc();
        $listsanpham = loadall_sanpham($kyw, $iddm);
        include "sanpham/list.php";
        break;

      case 'xoasp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_sanpham($_GET['id']);
        }
        $listsanpham = loadall_sanpham("", 0);
        include "sanpham/list.php";
        break;

      case 'suasp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $sanpham = loadone_sanpham($_GET['id']);
        }
        $listdanhmuc = loadall_danhmuc();
        include "sanpham/update.php";
        break;

      case 'updatesp':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $id_product = $_POST['id'];
          $iddm = $_POST['iddm'];
          $tensp = $_POST['tensp'];
          $giasp = $_POST['giasp'];
          $detail = $_POST['detail'];

          $hinh = $_FILES['hinh']['name'];
          $target_dir = "../imgs/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          } else {
          }
          update_sanpham($id_product, $tensp, $giasp, $hinh, $detail, $iddm);
          $thongbao = "Cập nhật thành công";
        }
        $listdanhmuc = loadall_danhmuc();
        $listsanpham = loadall_sanpham("", 0);
        include "sanpham/list.php";
        break;

        /*CONTROLLER KHACH HÀNG, BÌNH LUẬN*/

      case 'xacnhancomment':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $id_comment_check = $_POST['tenloai'];
          $username_check = $_POST['detail'];
          $comment_check = $_POST['id'];
          $id_product_check = $_POST['id'];
          xacnhan_binhluan($id_comment_check,$username_check,$comment_check,$id_product_check,);
          
        }
        include "binhluan/list.php";
        break;

        case 'addtk':
          if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
            
            $tentk = $_POST['tentk'];
            $pass = $_POST['pass'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
  
            $hinh = $_FILES['hinh']['name'];
            $target_dir = "../imgs/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            } else {
            }
            insert_taikhoan($tentk,$pass,$email,$name,$sdt,$hinh);
            $thongbao = "Thêm thành công";
          }
        include "taikhoan/add.php";
        break;

        case 'suatk':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $taikhoan = loadone_taikhoan($_GET['id']);
          }
          
          include "taikhoan/update.php";
          break;

        case 'updatetk':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $id_account = $_POST['id'];
            $tentk = $_POST['tentk'];
            $pass = $_POST['pass'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
  
            $hinh = $_FILES['hinh']['name'];
            $target_dir = "../imgs/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            } else {
            }
            update_taikhoan($id_account,$tentk,$pass,$hinh,$name,$email,$sdt);
            $thongbao = "Cập nhật thành công";
          }
          
          $list_taikhoan = loadall_taikhoan();
          include "taikhoan/list.php";
          break;

          case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
              delete_taikhoan($_GET['id']);
            }
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

      case 'dskh':
        $list_taikhoan = loadall_taikhoan();
        include "taikhoan/list.php";
        break;

      case 'dsbl':
        $list_binhluan = loadall_binhluan();
        include "binhluan/list.php";
        break;

      case 'dsblc':
        $list_binhluancheck = loadall_binhluancheck();
        include "binhluancheck/list.php";
        break;

      case 'xoablc':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_binhluan_check($_GET['id']);
        }
        $list_binhluancheck = loadall_binhluancheck();
        include "binhluancheck/list.php";
        break;
      case 'xoabl':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_binhluan($_GET['id']);
        }
        $list_binhluan = loadall_binhluan();
        include "binhluan/list.php";
        break;

      case 'listbill':
        $listsanpham = loadall_sanpham("", 0);
        $listbill = loadall_bill();
        include "bill/list.php";
        break;

      case 'xoabill':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_bill($_GET['id']);
        }
        $listbill = loadall_bill();
        include "bill/list.php";
        break;

      case 'suabill':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $bill = loadone_bill($_GET['id']);
        }
      
        include "bill/update.php";
        break;

        case 'updatebill':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $id_bill = $_POST['id'];
            $bill_status=$_POST['bill_status'];
            update_bill($id_bill,$bill_status);
            $thongbao = "Cập nhật thành công";
          }
          $listbill = loadall_bill();
          include "bill/list.php";
          break;


          case 'ctbill':
            
            include "bill/bill_detail.php";
            break;
          
            case 'dslh':
              include "lienhe/list.php";
              break;

              case 'xoalh':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                  delete_lienhe($_GET['id']);
                }
               
                include "lienhe/list.php";
                break;
        
    }
  } else
    include "home.php";




  include "footer.php";
?>
<?php
} else {
  echo "Yêu cầu đăng nhập";
?>
  <a href="../View/dangnhap.php">Đăng Nhập</a>
<?php
}
?>