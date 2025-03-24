<div class="row mb">
        <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formdangky">
             <form action="index.php?act=quenmk" method="post">
                Email:
                <input type="email" name="email">
                <div class="dangky-nhaplai">
                    <input type="submit" value="Gửi" name="guiemail">
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
