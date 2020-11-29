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
  <?php 
    //load file HeaderView.php
    include "views/HeaderView.php";
 ?>
<?php echo $this->view; ?>
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
</body>
</html>