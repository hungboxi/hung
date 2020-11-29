<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
 <div class="template-customer" style="width: 1000px; margin-left: 20%; background: #f5f5f5;">
          <h1 style="margin-left: 30%; color: red;">Đăng ký tài khoản</h1>
          <p style="margin-left: 10%; font-size: 15px;"> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=registerPost">
                  <p class="title"><span style="margin-left: 10%; font-size: 20px;">Đăng ký tài khoản</span></p>
                  <div class="form-group">
                    <label style="margin-left: 10%; font-size: 15px; ">Họ và tên:</label><br>
                    <input style="margin-left: 10%; font-size: 15px;height: 30px; width: 300px;" type="text" name="name" class="input-control">
                  </div>
                  <div class="form-group">
                    <label style="margin-left: 10%; font-size: 15px;">Email:<b id="req">*</b></label><br>
                    <input style="margin-left: 10%; font-size: 15px;height: 30px; width: 300px;"type="text" name="email" class="input-control" required>
                  </div>
                  <div class="form-group">
                    <label style="margin-left: 10%; font-size: 15px;">Địa chỉ:</label><br>
                    <input style="margin-left: 10%; font-size: 15px;height: 30px; width: 300px;" type="text" name="address" class="input-control">
                  </div>
                  <div class="form-group">
                    <label style="margin-left: 10%; font-size: 15px;">Điện thoại:</label><br>
                    <input style="margin-left: 10%; font-size: 15px;height: 30px; width: 300px;"  type="text" name="phone" class="input-control">
                  </div>
                  <div class="form-group">
                    <label style="margin-left: 10%; font-size: 15px;">Mật khẩu:<b id="req">*</b></label><br>

                    <input style="margin-left: 10%; font-size: 15px;height: 30px; width: 300px; border-radius: 10px 10px 10px 10px;" type="password" name="password" class="input-control" required="">
                  </div>
                  <div class="form-group">
                    <input style="margin-left: 10%; font-size: 15px;" type="submit" class="button" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><span style="margin-left: 20%; font-size: 20px;">Đăng nhập</span></p>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=account&action=login" class="btn btn-primary" style="margin-left: 20%;">Đăng nhập</a> </div>
            </div>
          </div>
</div>
