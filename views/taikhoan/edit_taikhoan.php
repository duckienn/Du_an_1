<div class="row mb">
        <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
             <form action="index.php?act=edit_taikhoan" method="post">
                Tên đăng nhập:
                <input type="text" name="user"  value="<?=$user?>">
                Email:
                <input type="email" name="email" value="<?=$email?>">
                Mật khẩu:
                <input type="password" name="pass" value="<?=$pass?>">
                Địa chỉ:
                <input type="text" name="address" value="<?=$address?>">
                Điện thoại:
                <input type="text" name="tel" value="<?=$tel?>">
                <div class="dangky-nhaplai">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                </div>
             </form>
             <h2 class="thongbao">
                 <?php
                    if(isset($thongbao)&&($thongbao != "")){
                        echo $thongbao;
                    }
                  ?>
             </h2>
            </div>
          </div>

          

        </div>

        <div class="boxphai">
        <?php include "./views/boxright.php"; ?>
        </div>
      </div>