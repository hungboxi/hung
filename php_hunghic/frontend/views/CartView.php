<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
<?php if($this->cartNumber() > 0): ?>
<div class="template-cart" style="width: 1000px; margin: auto; background: #f5f5f5">
  <form action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
      <table class="table table-cart">
        <thead>
          <tr>
            <th class="image">Ảnh sản phẩm</th>
            <th class="name">Tên sản phẩm</th>
            <th class="price">Giá bán lẻ</th>
            <th class="quantity">Số lượng</th>
            <th class="price">Thành tiền</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($_SESSION["cart"] as $rows): ?>
          <tr style="color: black;">
            <td><img style="width: 100px; height: 100px;" src="../assets/upload/products/<?php echo $rows["photo"] ?>" class="img-responsive" /></td>
            <td><a style="color: pink" href="index.php?controller=products&action=detail&id=<?php echo $rows["id"]; ?>"><?php echo $rows["name"] ?></a></td>
            <td> <?php echo number_format($rows["price"]-($rows["discount"]*$rows["price"]/100)); ?>₫ </td>
            <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $rows["number"] ?>" name="product_<?php echo $rows["id"] ?>" required="Không thể để trống"></td>
            <td><p><b><?php echo number_format($rows["number"]*($rows["price"]-($rows["discount"]*$rows["price"]/100))); ?>₫</b></p></td>
            <td><a href="index.php?controller=cart&action=delete&id=<?php echo $rows["id"]; ?>" data-id="2479395"><i class="fa fa-trash" style="font-size: 25px; color: black;"></i></a></td>
          </tr>
         <?php endforeach; ?> 
        </tbody>
        <tfoot>
          <tr>
            <td colspan="6">
              <input type="submit" class="button pull-right" value="Cập nhật"><a href="index.php?controller=cart&action=destroy" class="btn btn-primary" style="background: red;">Xóa toàn bộ</a> 
            </td>
          </tr>
        </tfoot>
      </table>
          <h2 style="margin-left: 10%;"><span>Th&#244;ng tin đặt h&#224;ng</span></h2>
<div class='shopping_buyer_saller' style="margin-left: 10%;">
    
    <!--    CONTENT IN FRAME    -->
    <div id = "msg_error"></div>
    <!--    INFO OF SENDER          -->
    
    <table  class="info-customer-gh" width="100%" border="0" cellpadding="5">
        <tr>
            <td width="140" class="td-left"> Họ tên<font color="#FF0000"> (*)</font>: </td>
            <td ><input type="text" style="width: 400px;" name="sender_name" id="sender_name"  value="" class="input_text" size="30"/></td>
        </tr>
        <tr>
            <td class="td-left">&#272;i&#7879;n tho&#7841;i: <font color="#FF0000"> (*)</font></td>
            <td><input type="text" style="width: 400px;" name="sender_telephone" id="sender_telephone"  value="" class="input_text" size="30"/></td>
        </tr>
        <tr>
            <td class="td-left">&#272;&#7883;a ch&#7881;<font color="#FF0000"> (*)</font>: </td>
            <td><input type="text" style="width: 400px;" name="sender_address" id="sender_address"  value="" class="input_text" size="30" /></td>
        </tr>
        
        <tr>
            <td class="td-left"> Email : </td>
            <td><input type="text" style="width: 400px;" name="sender_email"  id="sender_email"  value="" class="input_text" size="30"/></td>
        </tr>
        
        <tr>
            <td class="td-left">Chú thích đơn hàng : </td>
            <td>
                <textarea style="width: 500px; height: 70px;" name="sender_comments" id="sender_comments"  ></textarea>
            </td>
        </tr>
        <tr>
            <td class="td-left"><span>&nbsp;</span></td>
            <td>
                Nh&#7919;ng c&#243; d&#7845;u (<font color="#FF0000"> * </font>) l&#224; b&#7855;t bu&#7897;c ph&#7843;i nh&#7853;p
            </td>
        </tr>
    </table>
    <!--    end CONTENT IN FRAME    -->
    </div>
  </form>
  <div class="total-cart" style="font-size: 20px; margin-left: 20%;"> Tổng tiền thanh toán:
    <?php echo number_format($this->cartTotal()); ?>₫ <br><div>
    <a href="index.php?controller=cart&action=checkOut" class="btn btn-primary" style="background: green; font-size: 30px; margin-left: 10%;  margin-top: 5%;">Thanh toán</a>
    <a href="index.php" class="btn btn-primary" style="font-size: 20px; color: white; margin-left: 65%;margin-bottom: 10%;">Tiếp tục mua hàng</a> </div></div>

    
</div>
</div>
<?php else: ?>
<div class="template-cart" style="width: 1000px; margin: auto; background: #f5f5f5">
  <form action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
      <h1 style="text-align: center; margin-top: 10%;">Opp! Bạn vẫn chưa có gì trong giỏ hàng</h1>
             <a href="index.php" class="btn btn-primary" style="font-size: 20px; color: black; padding-left: 20px; padding-bottom: 10px; margin-left: 30%;margin-top: 10%; color: white;  ">Click vào đây để bắt đầu mua hàng</a>
    </div>
  </form>
  <div class="total-cart"> Tổng tiền thanh toán:
    <?php echo number_format($this->cartTotal()); ?>₫ <br></div>
</div>
<?php endif; ?>