<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath = "../upload/".$img;
     if(is_file($hinhpath)){
         $hinh ="<img src='".$hinhpath."' height='80'>";
     }else{
        $hinh = "Không có hình";
    }
?>

<div class="row">
        <div class="row frmtitle"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
        <div class="row frmcontent">
          <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row10">
            <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach($listdanhmuc as $danhmuc){
                        $iddm_list = $danhmuc['id'];
                        $namedm = $danhmuc['name'];
                        if($iddm == $iddm_list) {
                            echo '<option value="'.$iddm_list.'" selected>'.$namedm.'</option>';
                        } else {
                            echo '<option value="'.$iddm_list.'">'.$namedm.'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
              Tên sản phẩm <br />
              <input type="text" name="tensp" value="<?=$ten_san_pham?>">
            </div>
            <div class="row mb10">
              Gía <br />
              <input type="text" name="giasp" value="<?=$gia_co_ban?>">
            </div>
            <div class="row mb10">
              Hình<br />
              <input type="file" name="hinh">
              <?= $hinh_anh  ?>
            </div>
            <div class="row mb10">
              Mô tả <br />
             <textarea name="mota" cols="30" rows="10"><?=$mo_ta?></textarea>
            </div>

            <div class="row mb10">
            <input type="hidden" name="id" value="<?=$id?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
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