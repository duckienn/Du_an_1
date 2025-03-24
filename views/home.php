<div class="row mb">
        <div class="boxtrai mr">
          <div class="row">
            <div class="banner">
             <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./views/img/banner4.jpg" alt="" style="width:100%"/>
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./views/img/banner3.jpg" alt="" style="width:100%"/>
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./views/img/banner2.webp" alt="" style="width:100%"/>
  <!-- <div class="text">Caption Three</div> -->
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)"></a>
<a class="next" onclick="plusSlides(1)"></a>
</div>
<br>

<!-- The dots/circles -->
<!-- <div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> -->
            </div>
          </div>
          <div class="row">
            <?php
            $i = 0;
            foreach($spnew as $sp){
              extract($sp);
              $linksp = "index.php?act=sanphamct&idsp=".$id;
              $hinh = $img_path.$img;
              if(($i == 2) || ($i == 5) || ($i == 8)){
                $mr = "";
              }else{
                $mr = "mr";
              }
              echo '<div class="boxsanpham '.$mr.' ">
             <div class= "row "><a href="'.$linksp.'"><img class= "img"  src="'.$hinh.'" alt="" class= "img" /></a></div>
              <p>'.$price.' $</p>
              <a href="'.$linksp.'">'.$name.'</a>
            </div>';
            $i +=1;
            }
            ?>
            <!-- <div class="boxsanpham mr">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>
            <div class="boxsanpham mr">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>
            <div class="boxsanpham">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>

            <div class="boxsanpham mr">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>
            <div class="boxsanpham mr">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>
            <div class="boxsanpham">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>

            <div class="boxsanpham mr">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>
            <div class="boxsanpham mr">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div>
            <div class="boxsanpham">
              <img src="./views/img/sanpham1.png" alt="" />
              <p>$30</p>
              <a href="#">Máy tính mới nhất</a>
            </div> -->
          </div>
        </div>
        <div class="boxphai">
        <?php include "./views/boxright.php"; ?>
        </div>
      </div>