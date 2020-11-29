<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Website</title>
  <link rel="stylesheet" href="../assets/frontend/css1/css/font-awesome.min.css">
  <script type="text/javascript" src="../assets/frontend/js1/jquery-3.5.1.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/bootstrap.min.css">
  <script type="text/javascript" src="../assets/frontend/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css2/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<!-- header -->
		<?php 
    //load file HeaderView.php
    include "views/HeaderView.php";
 ?>


		<?php  $category_id = isset($_GET["id"]) ? $_GET["id"] : 0; ?>
<div class="main">
	<div class="left" style="padding: 0px; margin-top: 40px;">
		<div style="background: red; width: 100%; margin:0px; padding: 0px; margin: auto; height: 50px;">
			<span style="text-align: center; padding-left: 40px; font-size: 30px; color: white;">Khoảng giá</span>
		</div>
		<div class="grid__item large--one-whole medium--one-half small--one-whole">
			<div class="collection-filter-price" style="margin-top: 10px;">
				<div class="panel sidebar-sort" style="max-height: 194px;">
					<ul class="no-bullets filter-price clearfix">
						<li>
							<label>
								<input type="radio" name="price-filter" data-price="0:max" value="((price:product>=0))" onclick="a();">
								<span>Tất cả</span>
								<script type="text/javascript">
									function a(){
                    
										 location.href="http://localhost/php49/php_hunghic/frontend/index.php?controller=products&action=category&id=<?php echo $category_id ?>&key1=0"
									}
								</script>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" onclick="nhoHon500();" name="price-filter" id="namtramk" data-price="0:500000" value="500000">
								<span>Nhỏ hơn 500,000₫</span>
								<script type="text/javascript">
									function nhoHon500(){
										var nhoHon500=document.getElementById('namtramk').value;
                    location.href="http://localhost/php49/php_hunghic/frontend/index.php?controller=products&action=category&id=<?php echo $category_id ?>&key=500000"
									}
								</script>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" onclick="nhoHon1000000()" name="price-filter" id="mottrieu" data-price="500000:1000000" value="((price:product>=500000)&amp;&amp;(price:product<1000000))">
								<span>Từ 500,000₫ - 1,000,000₫</span>
                <script type="text/javascript">
                  function nhoHon1000000(){
                    var nhoHon500=document.getElementById('namtramk').value;
                    location.href="http://localhost/php49/php_hunghic/frontend/index.php?controller=products&action=category&id=<?php echo $category_id ?>&key1=500000&key=1000000";
                  }
                </script>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="price-filter" onclick="nhoHon1500000()" id="trieuruoi" data-price="1000000:1500000" value="((price:product>=1000000)&amp;&amp;(price:product<1500000))">
                <script type="text/javascript">
                  function nhoHon1500000(){
                    var nhoHon500=document.getElementById('namtramk').value;
                    location.href="http://localhost/php49/php_hunghic/frontend/index.php?controller=products&action=category&id=<?php echo $category_id ?>&key1=1000000&key=1500000";
                  }
                </script>
								<span>Từ 1,000,000₫ - 1,500,000₫</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="price-filter" onclick="nhoHon2000000()" id="haitrieu" data-price="1500000:2000000" value="((price:product>=1500000)&amp;&amp;(price:product<2000000))">
                <script type="text/javascript">
                  function nhoHon2000000(){
                    var nhoHon500=document.getElementById('namtramk').value;
                     location.href="http://localhost/php49/php_hunghic/frontend/index.php?controller=products&action=category&id=<?php echo $category_id ?>&key1=1500000&key=2000000";
                  }
                </script>
								<span>Từ 1,500,000₫ - 2,000,000₫</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="price-filter" id="batrieu" onclick="nhoHon3000000()" data-price="2000000:3000000" value="((price:product>=2000000)&amp;&amp;(price:product<3000000))">
                <script type="text/javascript">
                  function nhoHon3000000(){
                    var nhoHon500=document.getElementById('namtramk').value;
                     location.href="http://localhost/php49/php_hunghic/frontend/index.php?controller=products&action=category&id=<?php echo $category_id ?>&key1=2000000&key=3000000";
                  }
                </script>
								<span>Từ 2,000,000₫ - 3,000,000₫</span>
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="price-filter" id="honbatrieu" data-price="3000000:max" value="((price:product>=3000000))" onclick="lonHon3000000()">
                <script type="text/javascript">
                  function lonHon3000000(){
                     location.href="http://localhost/php49/php_hunghic/frontend/index.php?controller=products&action=category&id=<?php echo $category_id ?>&key1=3000000";
                  }
                </script>
								<span>Lớn hơn 3,000,000₫</span>
							</label>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="grid__item large--one-whole medium--one-half small--one-whole">
			<div class="collection-filter-color">
		<div style="background: red; width: 100%; margin:0px; padding: 0px; margin: auto; height: 50px;">
			<span style="text-align: center; padding-left: 34px; font-size: 30px; color: white;">Thương Hiệu</span>
		</div>
				<div class="panel sidebar-sort" style="max-height: 102px; margin-left: 70px;">
					<ul class="grid mg-left-0 no-bullets filter-variant filter-color clearfix " 
            <?php $i=0; ?>
						<?php foreach($record as $rows): ?>
              <?php $i++; ?>
              
						<li class="grid__item large--six-twelfths pd-left0" style="padding-top: 15px;">
							
								<input type="checkbox" id="brand-search<?php echo ($i); ?>" onclick="brandSearch<?php echo $i; ?>()" value="<?php echo $rows->name; ?>" style="background-color: #0280d4">
								<span><?php echo $rows->name; ?></span>
						
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="grid__item large--one-whole medium--one-half small--one-whole">
			<div class="collection-filter-color" style="margin-top: 70px;">
		<div style="background: red; width: 100%; margin:0px; padding : 0px; margin: auto; height: 50px;">
			<span style="text-align: center; padding-left: 40px; font-size: 30px; color: white;">Loại Hàng</span>
		</div>
				<div class="panel sidebar-sort" style="max-height: 102px; margin-left: 70px;">
					<ul class="grid mg-left-0 no-bullets filter-variant filter-color clearfix ">
						<?php foreach ($recordType as $rows):  ?>
						<li class="grid__item large--six-twelfths pd-left0" style="padding-top: 10px;">
							<label data-filter="Xanh" class="filter-vendor__item xanh">
								<input type="checkbox" onclick="searchBrand();" style="background-color: #0280d4">
								<span><?php echo $rows->name ?></span>
							</label>
              <script type="text/javascript">
                <script type="text/javascript">
                  function searchBrand(){
                    
                  }
                </script>
              </script>
						</li>	
					<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="online_support block">
          <div class="new_title">
            <div style="background: red; width: 100%; margin:0px; padding : 0px; margin: auto; height: 50px;margin-top: 75px;">
			<span style="text-align: center; padding-left: 40px; font-size: 20px; color: white;">Hỗ trợ trực tuyến</span>
		</div>
          </div>
          <div class="block-content">
            <div class="sp_1">
              <p style="font-size: 20px; text-align: center;">Tư vấn bán hàng 1</p>
              <p style="font-size: 15px; text-align: center;"><i class="fas fa-phone-square-alt" style="font-size: 20px; color: green;"></i><a style="padding-left: 10px; padding-bottom: 5px;">Mrs. Dung: (04) 3786 8904</a></p>
            </div>
            <div class="sp_1">
              <p style="font-size: 20px; text-align: center;">Tư vấn bán hàng 2</p>
             <p style="font-size: 15px; text-align: center;"><i class="fas fa-phone-square-alt" style="font-size: 20px; color: green;"></i><a style="padding-left: 10px; padding-bottom: 5px;">Mrs. Dung: (04) 3786 8904</a></p>
            </div>
            <div class="sp_1">
              <p style="font-size: 20px; text-align: center;">Email liên hệ</p>
                  <p style="font-size: 15px; text-align: center;"> <i class="fas fa-envelope" style="font-size: 20px; color: green;"></i><a style="padding-left: 10px; padding-bottom: 5px;">Mrs. Dung: (04) 3786 8904</a></p>
            </div>
          </div>
        </div>
		</div>
		</div>
	</div>

	<div class="right">
		<div class="sanphamkhac container-fluid" style="padding-top: 20px; margin-top: 20px;">
			<div  class="wrapper">
				<p class="t-t">SẢN PHẨM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sắp Xếp <select name="SortBy" id="SortBy" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
		<option value="manual" >Tùy chọn</option>
                  <option value="priceAsc">Giá tăng dần</option>
                  <option value="priceDesc">Giá giảm dần</option>
                  <option value="nameAsc">Sắp xếp A-Z</option>
                  <option value="nameDesc">Sắp xếp Z-A</option>
	</select></p>

			<?php echo $this->view; ?>
	</div></div></div>
</div>
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4" style="background: #0d0d0d; color: #66a3ff;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="font-size: 30px;">DANH SÁCH CỬA HÀNG</h5>
        <a href="https://www.google.com/maps/place/th%C3%B4n+Trung,+D%C6%B0%C6%A1ng+H%C3%A0,+Gia+L%C3%A2m,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0701841,105.9256053,16z/data=!3m1!4b1!4m5!3m4!1s0x3135a836174c4a9f:0x5cd8547827dd485c!8m2!3d21.0716124!4d105.9295984"><i>ĐỊA CHỈ: Xóm Đình-Thôn Trung
      Xã Dương Hà-Gia Lâm-Hà Nội</i></a>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="font-size: 20px;">VỀ CHÚNG TÔI</h5>

        <ul class="list-unstyled">
          <li>
            <a href="index.php">Trang chủ</a>
          </li>
          <li>
            <a href="#!">Giới thiệu</a>
          </li>
          <li>
            <a href="#!">Tin tức</a>
          </li>
          <li>
            <a href="#!">Liên hệ</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="font-size: 20px;">HƯỚNG DẪN</h5>

        <ul class="list-unstyled">
          <li>




            <a href="#!">Hướng dẫn mua hàng</a>
          </li>
          <li>
            <a href="#!">Giao nhận, thanh toán</a>
          </li>
          <li>
            <a href="#!">Đổi trả, bảo hành</a>
          </li>
          <li>
            <a href="#!">Đăng ký thành viên</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="font-size: 20px;">ĐIỀU KHOẢN</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!"> Điều khoản sử dụng</a>
          </li>
          <li>
            <a href="#!">Điều khoản giao dịch</a>
          </li>
          <li>
            <a href="#!">Dịch vụ tiện ích</a>
          </li>
          <li>
            <a href="#!">Quyền sở hữu trí tuệ</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Đăng ký miễn phí</h5>
    </li>
    <li class="list-inline-item">
      <a href="index.php?controller=account&action=register" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center" style="font-size:25px;">
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
  </div>
  <!-- Copyright -->

</footer>
<div class="footers"> <a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"><i style="line-height: 50px; margin-left: 16px;" class="fa fa-arrow-up"></i></a> </div>
<script type="text/javascript">
  jQuery(document).ready(function($){   
  if($(".btn-top").length > 0){
    $(window).scroll(function () {
      var e = $(window).scrollTop();
      if (e > 300) {
        $(".btn-top").show()
      } else {
        $(".btn-top").hide()
      }
    });
    $(".btn-top").click(function () {
      $('body,html').animate({
        scrollTop: 0
      })
    })
  }   
});
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f71edf14704467e89f2ecf8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!-- Footer -->
<style type="text/css">
  .btn-top {
    background-image: url(../img/btn_top.png);
    background-repeat: no-repeat;
    border: medium none;
    bottom: 20px;
    cursor: pointer;
    display: none;
    height: 50px;
    outline: medium none;
    padding: 0;
    position: fixed;
    left: 20px;
    width: 50px;
    z-index: 9999;
    font-size: 20px;
    width: 50px; height: 50px; background: #1db0bf;
    border-radius: 10px 10px 10px 10px;
    border: 1px solid #b300b3;
}
.list-unstyled>li>a:hover{
  color: #ff80b3;
}
</style>



  </body></head></html>