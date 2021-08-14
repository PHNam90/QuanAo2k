<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangChu.php";
?>

<div class="banner-index tp_product_new">
  <div class="container">
    <div class="row">
      <div class="main-title text-center">
        <h2 class="tp_title">Sản phẩm mới</h2>
        <div class="shop-now">
          <a href="#">Xem thêm</a>
        </div>
      </div>
      <div id="owl-product-index2" class="owl-carousel owl-theme clearfix banner-list">
        <?php 
        $products = $this->modelHotProducts();
        ?>
        <?php foreach($products as $rows): ?>
          <div class="banner-item" style="position: relative;">
            <div style=" z-index: 1; position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: black; color:white; text-align: center;"><?php echo $rows->discount; ?>%</div>
            <a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>"><i style=" z-index: 1; position: absolute; width: 70px; color:black; right:-40px ; top:0px; font-size: 25px;" class="fa fa-heart" aria-hidden="true"></i></a>
            <div class="img">
              <a class="img_product" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" data-id="12074462">
                <img class="lazyload" data-sizes="auto" data-src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" >
              </a>
            </div>
            <div class="info">
              <h3>
                <a class="tp_product_name" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
              </h3>
              <div class="prices">
                  <span style="text-decoration:line-through;" class="tp_product_price"><?php echo number_format($rows->price); ?>₫</span>
                </div>
              <div class="prices">
                <span class="tp_product_price"><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?>₫</span>
              </div>
              <div>
                <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star" aria-hidden="true"></i></a> </p>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<div class="best-seller tp_product_hot">
  <div class="container">
    <div class="row">
      <div class="main-title text-center">
        <h2 class="tp_title">Sản phẩm nổi bật</h2>
        <div class="shop-now">
          <a href="#">Xem thêm</a>
        </div>
      </div>
      <div id="owl-product-index" class="owl-carousel owl-theme">
               <?php 
        $products = $this->modelNewProducts();
        ?>
        <?php foreach($products as $rows): ?>
          <div class="item">
            <div class="product-item" style="position: relative;">
              <div style=" z-index: 1; position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: black; color:white; text-align: center;"><?php echo $rows->discount; ?>%</div>
            <a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>"><i style=" z-index: 1; position: absolute; width: 70px; color:black; right:-45px ; top:0px; font-size: 25px;" class="fa fa-heart" aria-hidden="true"></i></a>
              <div class="img">
                <a class="img_product" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                  <img class="lazyload " data-sizes="auto" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                </a>
              </div>
              <div class="info">
                <h3>
                  <a class="tp_product_name" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                </h3>
                <div class="prices">
                  <span style="text-decoration:line-through;" class="tp_product_price"><?php echo number_format($rows->price); ?>₫</span>
                </div>
                <div class="prices">
                  <span class="tp_product_price"><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?>₫</span>
                </div>
                 <div style="text-align: center;">
                <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star" aria-hidden="true"></i></a> </p>
              </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
</div>

      