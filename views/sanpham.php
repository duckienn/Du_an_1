<div class="row mb">
        <div class="boxtrai mr">
        <div class="row mb">
           
            <div class="boxtitle">SẢN PHẨM <strong><?= $tendm ?></strong></div>
            <div class="row boxcontent">
              <?php
                $i = 0;
                foreach($dssp as $sp){
                  extract($sp);
                  $linksp = "index.php?act=sanphamct&idsp=".$id;
                  $hinh = $img_path.$img;
                  if(($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)){
                    $mr = "";
                  }else{
                    $mr = "mr";
                  }
                  echo '<div class="boxsanpham '.$mr.' ">
                 <div class= "row "><a href="'.$linksp.'"><img class= "img"  src="'.$hinh_anh.'" alt="" class= "img" /></a></div>
                  <p>'.$gia_co_ban.' $</p>
                  <a href="'.$linksp.'">'.$ten_san_pham.'</a>
                </div>';
                $i +=1;
                }
               ?>
            </div>
          </div>

         
        </div>

        <div class="boxphai">
        <?php include "./views/boxright.php"; ?>
        </div>
      </div>