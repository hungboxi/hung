<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
<div class="row" style="margin-top: 30px;">
	<div class="col-md-12">
		<?php 
			$message = isset($_GET["message"]) ? $_GET["message"] : "";
		 ?>
		 <?php if($message == "emailExists"): ?>
		 <div class="alert alert-danger">Email đã tồn tại!</div>
		<?php endif; ?>
		<?php if($message == "registerSuccess"): ?>
		 <div class="alert alert-danger">Đăng ký thành công!</div>
		<?php endif; ?>
		<?php if($message == "checkOutSuccess"): ?>
		
		 <div class="template-cart" style="width: 1000px; margin: auto; background: #f5f5f5">
		 	 <div class="alert alert-danger">Thanh toán giỏ hàng thành công!</div>
  <form action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
             <a href="index.php" class="btn btn-primary" style="font-size: 20px; color: black; padding-left: 20px; padding-bottom: 10px; margin-left: 30%;margin-top: 5%;color: white; margin-bottom: 10%; ">Click vào đây để tiếp tục mua hàng</a>
    </div>
  </form>
</div>
		<?php endif; ?>
	</div>
</div>