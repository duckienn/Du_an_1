<?php
session_start();
include "./models/pdo.php";
include "./models/sanpham.php";
include "./models/danhmuc.php";
include "./views/header.php";
include "./global.php";
include "./models/taikhoan.php";
$spnew = loadall_sanpham_home();
$dsdm =  loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if((isset($_GET['act'])) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch($act){
        case 'gioithieu':
            include "./views/gioithieu.php";
            break;
        case 'lienhe':
            include "./views/lienhe.php";
            break;
        case 'gopy':
            include "./views/gopy.php";
            break;
        case 'hoidap':
            include "./views/hoidap.php";
            break;
        
        case 'thoat':
            session_unset();
            header("Location: index.php");
            break;    
         case 'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'] > 0)){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user,$email,$pass);
                $thongbao = "Đã đăng ký thành công!";
            }
            include "./views/taikhoan/dangky.php";
            break; 
        case 'edit_taikhoan':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id,$user,$pass,$email,$address,$tel);
                $_SESSION['user']=checkuser($user,$pass);
                header('Location: index.php?act=edit_taikhoan');
            }

            include "./views/taikhoan/edit_taikhoan.php";
            break;      
            case 'quenmk':
                if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là " . $checkemail['pass'];
                    }else{
                        $thongbao = "Email này không tồn tại";
                    }
                }
            
                include "./views/taikhoan/quenmk.php";
                break;
                 
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
               $checkuser = checkuser($user,$pass);
               if(is_array($checkuser)){
                $_SESSION['user']=$checkuser;
                header('Location: index.php');
               }else{
                $thongbao = "Tài khoản không tồn tại!";
               }
                
            }
            include "./views/taikhoan/dangky.php";
            break;               
        case 'sanphamct':
            if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)){
                $id = $_GET['idsp'];
                $onesp =  loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                include "./views/sanphamct.php";
            }else{
                include "./views/home.php";
            }
            
            break;   
            
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw'] != "")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                    $iddm = $_GET['iddm'];
                }else{
                    $iddm = 0;
                }
                $dssp = loadall_sanpham($kyw,$iddm);
                $tendm = load_ten_danh_muc($iddm);
                include "./views/sanpham.php";
                break;          
    }
}else{
    include "./views/home.php";
 }

include "./views/footer.php";