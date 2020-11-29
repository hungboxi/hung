<!-- header -->   <!-- header -->
    <div class="bgmenu">
    <div class="header1 container-fluid">
        <div class="header-menu">
          <ul>
            <li><a href="index.php" style="color: #01b7f2;">HOME</a></li>
              <?php 
              //load MVC bang tay
                include "controllers/CategoriesController.php";
                $obj = new CategoriesController();
                $obj->index();
              ?>
              <?php 
        $numberOfProduct = 0;
        if(isset($_SESSION["cart"])){
          foreach($_SESSION["cart"] as $rows)
            $numberOfProduct++;
        }
     ?>

            <li><a href="index.php?controller=cart">GIỎ HÀNG(<?php echo $numberOfProduct; ?>)</a></li>
                        <li>        <div style="margin-top: -10px;"><form>
        <div id="smart-search" >
          <ul style="height: 400px; overflow: scroll; overflow-x: hidden; ">
          </ul>
        </div>
        <input class="search" onkeyup ="smartSearch();" type="text" name="search" placeholder="Search.." id="key" autocomplete="off" action="search();" >
        <style type="text/css">
        #smart-search ul{margin:0px; list-style: none; padding: 0px;}
        #smart-search ul li{border-bottom: 1px solid #dddddd;}
        #smart-search{position: absolute; width: 500px; z-index: 1; background: white; display: none; top:65px;}
        #smart-search ul li a{color: black;}
      </style>
      
</form>
<script type="text/javascript">
      function search(){
        var key = document.getElementById('key').value;
        //di chuyen den trang search
        location.href="index.php?controller=search&action=productName&key="+key;
      }
      //---
      function smartSearch(){
        var key = document.getElementById('key').value;
        if(key != ""){
          document.getElementById('smart-search').setAttribute("style","display:block;");
          //---
          $.ajax({
            url: "index.php?controller=search&action=smartSearch&key="+key,
            success: function( result ) {
              $( "#smart-search ul" ).empty();
              $( "#smart-search ul" ).append(result);
            }
          });
          //---
        }else{
          document.getElementById('smart-search').setAttribute("style","display:none;");
        }
      }
     // function closeSmartSearch(){
       // document.getElementById('smart-search').setAttribute("style","display:none;");
      //}
      //---
    </script>
      
    </div></li>
    <?php if(isset($_SESSION["customer_email"])): ?>
      <li><a href="#"><?php echo $_SESSION["customer_email"]; ?></a></li>
    <li><a href="index.php?controller=account&action=logout">ĐĂNG XUẤT</a></li>
    <?php else: ?>
    <li><a href="index.php?controller=account&action=login">ĐĂNG NHẬP</a></li>
    <li><a href="index.php?controller=account&action=register">ĐĂNG KÝ</a></li>
     <?php endif; ?>
          </ul>
        </div>
      </div></div>
      <div class="top"><a href=""><img src="../assets/frontend/images/content.jpg" alt="" style="width: 100%;"></a></div>
  <!-- /header -->
  <div id="carouselExampleControls" class="carousel slide container-fluid" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 500px;" src="../assets/frontend/images/bg1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 500px;" src="../assets/frontend/images/bg2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 500px;" src="../assets/frontend/images/bg3.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" style="height: 500px;" src="../assets/frontend/images/bg4.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" style="height: 500px;" src="../assets/frontend/images/bg5.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" style="height: 500px;" src="../assets/frontend/images/bg6.png" alt="Third slide">
    </div>
  </div>
      <div class="thao"><h1>TỰ HÀO THƯƠNG HIỆU VIỆT</h1>
        <div class="shopping"><div class="more"><a href="index.php?controller=mores">MORE</a></div>
        <div class="spn"><a href="index.php?controller=products&action=category&id=18">SHOPPING NOW</a></div></div></div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span></a></div>
  <div class="container mainn">
    <div class="vc"><a href=""><img src="../assets/frontend/images/vc.jpg" alt="" style="width: 300px;"></a></div>
    <div class="tt  "><a href=""><img src="../assets/frontend/images/tt.jpg" alt="" style="width: 300px;"></a></div>
    <div class="dt"><a href=""><img src="../assets/frontend/images/dt.jpg" alt="" style="width: 300px;"></a></div>
    <div class="ht"><a href=""><img src="../assets/frontend/images/ht.jpg" alt="" style="width: 300px;"></a></div>
  </div>