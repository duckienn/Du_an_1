<?php
if(is_array($dm)){
    extract($dm);
}
?>

<div class="row">
        <div class="row frmtitle"><h1>CẬP NHẬT LOẠI HÀNG</h1></div>
        <div class="row frmcontent">
          <form action="index.php?act=updatedm" method="post">
            <div class="row10">
              Mã Loại <br />
              <input type="text" name="maloai" disabled />
            </div>
            <div class="row10">
              Tên Loại <br />
              <input type="text" name="tenloai" value="<?php if(isset($ten_danh_muc) && ($ten_danh_muc != "")) echo $ten_danh_muc; ?>"/>
            </div>
            <div class="row10">
              Mô tả <br />
              <input type="text" name="mota" value="<?php if(isset($mo_ta) && ($mo_ta != "")) echo $mo_ta; ?>"/>
            </div>
            <div class="row10">
                <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id; ?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=lisdm"
                ><input type="button" value="Danh sách"
              /></a>

              <?php 
              if(isset($thongbao)&&($thongbao != "")) echo $thongbao;
            
               ?>
            </div>
          </form>
        </div>
      </div>
    </div>