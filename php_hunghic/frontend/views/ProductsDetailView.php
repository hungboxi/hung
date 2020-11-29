<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
<style type="text/css">
  .acm{
    display: flex;
    width: 1450px;
    background: #f5f5f5;
    margin: 50px;
  }
  .fa-star{
    color: orange;
  }
</style>
<div class="acm">
 <div class="leftt"><img style="width: 600px; height: 600px; margin: 60px; padding-top: 50px;" src="../assets/upload/products/<?php echo $record->photo; ?>" title="<?php echo $record->name; ?>" alt="<?php echo $record->name; ?>" class="img-responsive"></div>
  <div class="rightt" style="width: 300px; margin: 100px; padding-left: 0px;"><div class="grid__item large--six-twelfths medium--one-whole small--one-whole">
            <div class="product-content">
              <div class="pro-content-head clearfix" style=" padding-left: 100px;margin-top: 25px;
              margin-left: 15px;">
                <h1 itemprop="name"><?php echo $record->name; ?></h1>
                <div class="ttsp"  style="display: flex; font-size: 20px;">
                <div class="brand">
                  <span class="title">Thương hiệu:</span> <a href="" style="color: blue;">SAMSUNG</a>
                </div>
                <span>|</span>
                <div class="type">
                  <span class="title">Loại: <a href="" style="color: blue;">DIEUHOA</a></span>
                </div>
                <span>|</span>
                
                <div class="imei">
                  <span class="title">Mã SP:</span> <span class="sku-number">118713439</span>
                </div>
                
              </div>
              <div class="line"></div>

              <div class="price clearfix" style="font-size: 30px; display: flex; height: 50px;">
                <span class="special-price" style="margin-left: 20px; font-size: 20px;"> Giá: <?php echo $record->price; ?> đ
                          </div><div class="line" style="width: 300px;"></div>
          </div></span></div>
<div>
      <div style="display: flex;">
        <div class="hotline" style="padding-left:100px; margin-top: 25px;
              margin-left: 15px;"></div><div class="text"><b>Hotline hỗ trợ:012345678</b></div> <div style="padding: 2px;font-size: 20px; display: flex; "> <span>|</span>
                    <div class="social-network-actions text-left" style="padding: 3px;">
                      <div class="fb-send" data-href=""></div>
                      <div class="fb-like fb_iframe_widget" data-href="" data-action="like" data-size="small" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fwww.coxshoes.com.vn%2Fproducts%2Fdincox007-white&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=true&amp;size=small"><span style="vertical-align: bottom; width: 76px; height: 20px;"><iframe name="f35bc74ba3021" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1dadb028335fac%26domain%3Dwww.coxshoes.com.vn%26origin%3Dhttps%253A%252F%252Fwww.coxshoes.com.vn%252Ff2f4fcdaf543f54%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.coxshoes.com.vn%2Fproducts%2Fdincox007-white&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=true&amp;size=small" style="border: none; visibility: visible; width: 76px; height: 20px;" class=""></iframe></span></div></div>  

</div></span></div></div></div>
<span style="margin-left: 170px; font-size: 20px; padding-top: 100px;">Số lượng </span>
<div class="soluong">
    <div class="js-soluong" style="display: flex; padding-left: 100px;">
      <div class="buttons_added">
  <input id="minus is-form" type="button" value="-" onclick="input()">
  <input aria-label="quantity" id="quantity"  max="100" min="1" type="number" value="1" style="width: 120px;">
  <input id="plus is-form" type="button" value="+" onclick="output()">    <div class="text">
      <a onclick="addCart();" class="btn btn-primary" href="#" ><b style="font-size: 20px;">THÊM VÀO GIỎ HÀNG</b></a></div></div></div></div>
                    <!-- rating -->
        <div style="border:1px solid #dddddd; margin-top: 15px;margin-left: 180px; padding-left: -100px; width: 300px;">
        <h4 style="padding-left: 10px;">Rating</h4>
        <table style="width: 300px;">
        <tr>
        <td style="width: 80%; padding-left: 10px;"><span><i class="fas fa-star"></i></span></td>
        <td><span class="label label-primary" style="color: #0066ff;"> <?php echo $demSao1; ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span></td>
        <td><span class="label label-warning" style="color: #0066ff;"><?php echo $demSao2; ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span></td>
        <td><span class="label label-danger" style="color: #0066ff;"> <?php echo $demSao3; ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span></td>
        <td><span class="label label-info" style="color: #0066ff;"> <?php echo $demSao4; ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span></td>
        <td><span class="label label-success" style="color: #0066ff;"> <?php echo $demSao5; ?> vote</span></td>
        </tr>
        </table>
        <br>
        <?php if(isset($_SESSION["customer_email"])): ?>
        <a onclick="rating()" class="btn btn-primary" style="margin: 15px; margin-left: 60px; color: white; width: 200px;"><b>Đánh giá của bạn </b></a>
        <?php else: ?>
          <a href="index.php?controller=account&action=login" class="btn btn-primary" style="margin: 15px; margin-left: 60px; color: white; width: 200px;"><b>Đánh giá của bạn </b></a>
        <?php endif; ?>
        <div id="rating-content" style="display: none; margin: 15px; width: 200px;">
          <form method="post" action="index.php?controller=ReviewProduct&action=review&id=<?php echo $id; ?>">
            <div id="rating">
      <input style="display: none;" type="text" name="star" id="current-star"/>
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
 
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" onclick="test()" title="Pretty good - 4 stars"></label>
 
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
 
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
 
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
</div><br>
            <input style="margin: 15px; width: 250px;" type="text" name="comment" placeholder="Nhập đánh giá">
            <input type="submit" href="" class="btn btn-primary" style="margin-left: 10%; color: white;" value="Gửi đánh giá"></a>
        </div></form>
        <script type="text/javascript">
          function rating() {

  var x = document.getElementById("rating-content");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
        </script>
        <style type="text/css">
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
/*reset css*/
h1{font-size:1.5em;margin:10px;}
/****** Style Star Rating Widget *****/
#rating{border:none;float:left;}
#rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin:5px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
#rating>.half:before{content:"\f089";position:absolute;}/*0.5 ngôi sao*/
#rating>label{color:#ddd;float:right;}/*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
/*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
#rating>input:checked~label,
#rating:not(:checked)>label:hover, 
#rating:not(:checked)>label:hover~label{color:orange; }
/* Hover vào các sao phía trước ngôi sao đã chọn*/
#rating>input:checked+label:hover,
#rating>input:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input:checked~label:hover~label{color:orange;}
</style>
        </div>
        <!-- /rating -->
    </div></div>
    <div class="about" style="display: flex; width: 1450px; margin: 50px; background: #f5f5f5;">
    <div class="coment" style="width: 700px; ">
      <div class="header-cmt" style="width: 700px; background: black; color: white; margin: 30px; padding-left: 20px; font-size: 30px; border-radius: 10px 10px 10px 10px;">Bình luận</div>
      <div class="list" style="">
            <ul class="ratingLst" style="list-style: none;">
                <?php foreach($comments as $rows): ?>
    <li id="r-43467972" class="par ">
        <div class="rh">
            <span style="font-size: 20px;"><?php echo $rows->email; ?></span>
                <label class="sttB"><i class="iconcom-checkbuy" style="padding-left: 20px;"></i><i class="fas fa-check-circle" style="color: #00ff00;"></i> Đã mua</label>
            
        </div>

        <div class="rc">
            <p>
                    <span>
                        <?php for($i = 0;$i<$rows->star;$i++): ?>
                                <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </span>
                <i style="padding-left: 10px;"><?php echo $rows->comment; ?></i>
            </p>
        </div>
    </li>
  <?php endforeach; ?>
  </ul>
    </div>
  </div><div style="border-left: 1px solid gray; height: 300px;margin:100px 0px 0px 200px; padding-left: 20px; margin-right: -50px;" ></div>
<div class="spkhac" style="width: 300px; margin-left: 200px; margin-top: 15px; ">
      <div class="header-cmt" style="width: 300px; background: black; color: white; margin: 15px; padding-left: 20px; font-size: 30px; border-radius: 10px 10px 10px 10px;">Sản phẩm tương tự</div><div class="morett">
        <?php foreach ($data as $rows): ?>
        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><div class="sp1"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" alt=""><div class="ten"><?php echo $rows->name; ?><br><h4><?php echo $record->price; ?></h4></div></div></a>
      <?php endforeach; ?>
      </div></div></div></div></div></div>
  
    <script>//<![CDATA[
function output() {
  var x = document.getElementById('quantity');
  if(Number(x.value)<=99)
  x.value = Number(x.value) + 1;
}
function input() {
  var x = document.getElementById('quantity');
  if(Number(x.value)>=2)
  x.value = Number(x.value) - 1;
}
function addCart(){
                var quantity = document.getElementById('quantity').value;
                location.href="index.php?controller=cart&action=createWithNumber&id=<?php echo $record->id; ?>&quantity="+(quantity);
        }
//]]></script>
<style type="text/css">.buttons_added {
    opacity:1;
    display:inline-block;
    display:-ms-inline-flexbox;
    display:inline-flex;
    white-space:nowrap;
    vertical-align:top;
    border-radius: 10px;
}
.is-form {
    overflow:hidden;
    position:relative;
    background-color:#f9f9f9;
    height:2.2rem;
    width:1.9rem;
    padding:0;
    text-shadow:1px 1px 1px #fff;
    border:1px solid #ddd;
    border-radius: 10px;
}
.is-form:focus,.input-text:focus {
    outline:none;
}
.is-form.minus {
    border-radius:4px 0 0 4px;
}
.is-form.plus {
    border-radius:0 4px 4px 0;
}
.input-qty {
    background-color:#fff;
    height:2.2rem;
    text-align:center;
    font-size:1rem;
    display:inline-block;
    vertical-align:top;
    margin:0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
    border-left:0;
    border-right:0;
    padding:0;
}
.input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
    -webkit-appearance:none;
    margin:0;
}</style>