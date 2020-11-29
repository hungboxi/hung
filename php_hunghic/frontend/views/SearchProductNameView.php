<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
      <div class="row">
          
       <?php foreach($data as $rows): ?>
        <div class="form-group col-md-5 col-sm-12 col-lg-3" style="padding-left: 25px; width: 250px; margin: 25px;">
          <div style="width: 250px; height: 350px; padding: 0px; " class="img1"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img style="width: 250px; height: 250px; padding: 0px;" src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
            <div class="t">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a><br>
              <p><span class="special-price" style="margin-left: 20px;"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> 
                      <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price*$rows->discount)/100); ?> </span>₫ </span></p>
            </div></div>
            <style type="text/css">
              .fa-star{color: #00ff00; font-size: 15px; margin-left: 10px;}
            </style>
            <a style="padding-left: 35%; padding-top: 20px;" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" ><input class="bu1" type="button" value="Thêm Vào Giỏ" style="width: 50%; height: 25px; border: none; color: white; border-radius: 10px 10px 10px 10px; "></a>
          </div>
         <?php endforeach; ?>
      </div>
      <div class="page" style="display: flex; margin-top: 25px;">
        <ul class="pagination">
                    <li class="page-item"><span>Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li style="padding-left: 10px; padding-top: -5px; margin-top: -5px;" class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                  </ul>
      </div>
    </div>