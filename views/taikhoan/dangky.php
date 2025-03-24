<div class="row mb">
        <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formdangky">
             <form action="index.php?act=dangky" method="post">
                Tên đăng nhập:
                <input type="text" name="user">
                Email:
                <input type="email" name="email">
                Mật khẩu:
                <input type="password" name="pass">
                <div class="dangky-nhaplai">
                    <input type="submit" value="Đăng ký" name="dangky">
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