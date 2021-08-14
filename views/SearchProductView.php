<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php";
?>
<div id="collection" class="tp_product_category">
  <div class="fix-breadcrumb">
    <ul class="breadcrumb&#x20;breadcrumb-arrow&#x20;hidden-sm&#x20;hidden-xs">
      <li>
        <h3 style="margin-bottom: 50px;">TÌM KIẾM</h3>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="product-lists clearfix select4">
        <?php foreach($data as $rows): ?>
          <div class="product-item" style="position: relative;">
            <div style=" z-index: 1; position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: black; color:white; text-align: center;"><?php echo $rows->discount; ?>%</div>
            <a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>"><i style=" z-index: 1; position: absolute; width: 70px; color:black; right:-44px ; top:0px; font-size: 25px;" class="fa fa-heart" aria-hidden="true"></i></a>
            <div class="img">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                <img class="lazyload" data-sizes="auto" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
              </a>
            </div>
            <div class="info">
              <h3>
                <a class="tp_product_name" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
              </h3>
              <div class="prices">
                <span style="text-decoration:line-through;" class="tp_product_price"><?php echo number_format($rows->price); ?></span>
              </div>
              <div class="prices">
                <span class="tp_product_price"><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?></span>
              </div>
              <div style="text-align: center;">
                <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star" aria-hidden="true"></i></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star" aria-hidden="true"></i></a> </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?> 
      </div>
      <div class="paginate text-center">
        
        <div id="pagination">
          <?php $keysearch = isset($_GET["searchkey"])? $_GET["searchkey"]:""; ?>
          <?php if($numPage>1): ?>
              <div class="paginator">
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <a class="currentPage" href="index.php?controller=search&action=searchproduct&searchkey=<?php echo $keysearch; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
              <?php endfor; ?>
              </div>
          <?php endif; ?>

        </div>
        </div>
      </div>
    </div>
  </div>
</div>