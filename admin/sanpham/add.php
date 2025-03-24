<div class="row">
        <style>
          .black{
            color: black !important;
          }
        </style>
        <div class="row frmtitle"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
        <div class="row frmcontent">

          <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              Danh mục <br />
             <select name="iddm" >
              <?php
              foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$ten_danh_muc.'</option>';
 
              }
              ?>
             </select>
            </div>


            <div class="row mb10">
              Tên sản phẩm <br />
              <input type="text" name="tensp" />
            </div>

            <div class="row mb10">
              Gía sản phẩm <br />
              <input type="text" name="giasp" />
            </div>

            <div class="row mb10">
              Hình <br />
              <input type="file" name="hinh" />
            </div>

            <div class="row mb10">
              Mô tả <br />
              <textarea name="mota" cols="30" rows="10"></textarea>
            </div>

            <div class="row10">
              <input type="submit" class="black" name="themmoi" value="Thêm mới" />
              <input type="reset"  class="black"  value="Nhập lại" />
              <a href="index.php?act=listsp"
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

    