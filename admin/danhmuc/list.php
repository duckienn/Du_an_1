<div class="row">
        <div class="row frmtitle"><h1>DANH SÁCH LOẠI HÀNG</h1></div>
        <div class="row frmcontent">
          <div class="row mb10 frmdsloai">
            <table>
              <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Mô tả</th>
                <th>Hành động</th>
              </tr>
              <?php 
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                $suadm = "index.php?act=suadm&id=".$id;
                $xoadm = "index.php?act=xoadm&id=".$id;
                echo '<tr>
                <td><input type="checkbox" /></td>
                <td>'.$id.'</td>
                <td>'.$ten_danh_muc.'</td>
                <td>'.$mo_ta.'</td>
                <td>
                <a href="'.$suadm.'"><input type="button" value="Sửa" /></a>
                <a href="'.$xoadm.'"><input type="button" value="Xóa" /></a>
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
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" /></a>
          </div>
        </div>
      </div>