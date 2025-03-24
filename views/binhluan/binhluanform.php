<?php
session_start();
include "../../models/pdo.php";
include "../../models/binhluan.php";
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user'])) {
    echo "Bạn cần đăng nhập để bình luận.";
    exit();
}
$iduser = $_SESSION['user']['id'];
$idpro=$_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styte.css">
    <style>
        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }
        .binhluan table td:nth-child(1) {
             width: 50%;
        }
        .binhluan table td:nth-child(2) {
            width: 20%;
        }
        .binhluan table td:nth-child(3) {
            width: 30%;
        }
        .form-gui-binhluan {
            display: flex;
            align-items: center; 
            justify-content: space-between; 
        }

.form-gui-binhluan input[type="text"] {
    width: 180px;
    height: 30px; 
    margin: 0;
    padding: 5px; 
}

.form-gui-binhluan input[type="submit"] {
    width: 100px;
    height: 30px;
    background-color: #666;
    margin: 0;
    padding: 5px;
}
    </style>
</head>
<body>
    

<div class="row mb">
    <div class="boxtitle">BÌNH LUẬN</div>
    <div class="boxcontent2 binhluan">
        <table>
        <?php
        foreach($dsbl as $bl){
            extract($bl);
            echo '<tr><td>'.$noidung.'</td>';
            echo '<td>'.$iduser.'</td>';
            echo '<td>'.$ngaybinhluan.'</td></tr>';
        }
        ?>
        </table>
        <div class="boxfooter binhluanform">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <div class="form-gui-binhluan">
                    <input type="text" name="noidung" >
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </div>
          
        </form>

    </div>
    </div>
   


    <?php
    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
   
    ?>

</div>

</body>
</html>