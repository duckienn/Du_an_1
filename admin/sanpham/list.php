<div class="row">
        <div class="row frmtitle mb"><h1>DANH SÁCH LOẠI HÀNG HÀNG</h1></div>
       <div class="tk_loai_hang">
          <form action="#" method="post" class="form-tk-loaihang">
                  <input type="text" name="kyw" width="6500px" >
                  <select name="iddm" >
                   <option value="0" selected>Tất cả</option>
                      <?php
                      foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$name.'</option>';
   
                  }
                ?>
               </select>
               <input type="submit" name="listok" value="Go">
          </form>
       </div>
        <div class="row frmcontent">
          <div class="row mb10 frmdsloai">
            
            <table>
              <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên sản phẩm</th>
                <th>Thương hiệu</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th></th>
              </tr>
              <?php 
              foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=".$id;
                $xoasp = "index.php?act=xoasp&id=".$id;

                echo '<tr>
                <td><input type="checkbox" /></td>
                <td>'.$id.'</td>
                <td>'.$ten_san_pham.'</td>
                <td>'.$thuong_hieu.'</td>
                <td><img style="width: 100px" src="'.$hinh_anh.'" alt=""></td>
                <td>'.$mo_ta.'</td>
                <td>'.$gia_co_ban.'</td>
                <td>
                <a href="'.$suasp.'"><input type="button" value="Sửa" /></a>
                <a href="'.$xoasp.'"><input type="button" value="Xóa" /></a>
                </td>
              </tr>';
              }
               ?>
              
            </table>
          </div>
          <div class="row10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
          </div>
        </div>
      </div>