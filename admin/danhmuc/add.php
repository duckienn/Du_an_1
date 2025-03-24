<div class="row">
        <div class="row frmtitle"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
        <div class="row frmcontent">
          <form action="index.php?act=adddm" method="post">
            <div class="row10">
              Mã Loại <br />
              <input type="text" name="maloai" disabled />
            </div>
            <div class="row10">
              Tên Loại <br />
              <input type="text" name="tenloai" />
            </div>
            <div class="row10">
              <input type="submit" name="themmoi" value="Thêm mới" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=listdm"
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