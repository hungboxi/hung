<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangChu.php"; ?>

<div class="sanphamkhac container-fluid">
      <div class="wrapper">
        <p class="t-t">SẢN PHẨM NỔI BẬT</p>

      <div class="row ">
        <?php 
                  $hotProducts = $this->modelHotProducts();
                 ?>
                 <?php foreach($hotProducts as $rows): ?>
 <div class="form-group col-md-5 col-sm-12 col-lg-3" style="padding: 0px 20px;">
          <div style="width: 250px; height: 350px;" class="img1"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img style="width: 250px; height: 250px;" src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
            <div class="t">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a><br>
              <p><span class="special-price" style="margin-left: 20px;"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> 
                      <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price*$rows->discount)/100); ?> </span>₫ </span></p>
            </div></div>
            <style type="text/css">
              .fa-star{color: #00ff00; font-size: 15px; margin-left: 10px;}
            </style>
            <a style="padding-left: 20%; padding-top: 10%; margin-top: 5%;" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" ><input class="bu1" type="button" value="Thêm Vào Giỏ" style="width: 50%; height: 25px; border: none; color: white; border-radius: 10px 10px 10px 10px; "></a>
          </div>
         <?php endforeach; ?></div></div></div>
    <div class="video">
      <div class="vdleft">
        <div class="vd">Video</div>
        <a href="https://www.youtube.com/watch?v=aP0bKcsSNuA"><div id="carouselExampleControls" class="carousel slide container-fluid" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 250px;" src="../assets/frontend/images/bg1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 250px;" src="../assets/frontend/images/bg2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 250px;" src="../assets/frontend/images/bg3.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" style="height: 250px;" src="../assets/frontend/images/bg4.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" style="height: 250px;" src="../assets/frontend/images/bg5.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" style="height: 250px;" src="../assets/frontend/images/bg6.png" alt="Third slide">
    </div></div></a>
</div>
      </div>
      <div class="vdright">
        <div class="lk">Liên kết nhanh</div>
        <div class="lkcontent">
          <a href="">Tải Báo Giá ><br></a>

          <a href="">Tải Cataloge ><br></a>

          <a href="">Tải Hướng Dẫn Dùng, Lắp Đặt ><br></a>

          <a href="">Tải Bản Vẽ Kỹ Thuật</a>
        </div>
      </div>
    </div>
    <div class="congtrinh">
      <div class="ctrinhheader">Tin tức</div>
      <div class="ctringcontent">
        <div class="row">
                <div class="row ">
                        <?php 
                  $news = $this->modelHotNews();
                 ?>
                 <?php foreach($news as $rows): ?>
        <div class="form-group col-md-5 col-sm-12 col-lg-3" style="padding: 30px; margin: 0px;">
<div class="img1" style=" width: 250px; height: 350px;"><a href="index.php?controller=news" class="image"> <img style="width: 250px; height: 250px;" src="../assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
            <div class="t">
                           <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
            </div>
          </div>
        </div><?php endforeach; ?>
      </div>
    </div></div></a></div></div></a></div></div>