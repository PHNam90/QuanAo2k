<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php";
$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
?>
<div id="collection" class="tp_product_category">
  <div class="fix-breadcrumb">
    <ul class="breadcrumb&#x20;breadcrumb-arrow&#x20;hidden-sm&#x20;hidden-xs">
      <li>
        <a href="index.html">Trang chủ</a>
      </li>
      <li>
        <span>Nam</span>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="clearfix filter-box">
        <div class="browse-tags pull-left">
          <span class="hidden">Sắp xếp theo:</span>
          <span class="custom-dropdown custom-dropdown--white">
            <select class="sort-by custom-dropdown__select custom-dropdown__select--white" onchange="location.href = 'index.php?controller=products&action=categories&category_id=<?php echo $category_id; ?>&order='+this.value;">
              <option value="0">Sắp xếp</option>
                  <option value="priceAsc">Giá tăng dần</option>
                  <option value="priceDesc">Giá giảm dần</option>
                  <option value="nameAsc">Sắp xếp A-Z</option>
                  <option value="nameDesc">Sắp xếp Z-A</option>
            </select>
          </span>
        </div>
        <div class="product-filter filter-price pull-left tp_product_category_filter_price">
          <span class="filter-title">
            Lọc theo giá <i class="fa fa-angle-down"></i>
          </span>
          <div class="filter-container">
            <div class="clearfix">
              <div class="widget_price_filter">
               <ul class="list-group" style="border:0px;">
                <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                  <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
                </li>
                <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
                </li>
                <li class="list-group-item" style="border:0px; text-align:center">
                  <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                </li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
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
        <?php endforeach; ?> 
      </div>
      <div class="paginate text-center">
        <div id="pagination">
          <?php 
            $a =isset($_GET["order"]) ? $_GET["order"]: "";
            $order = isset($_GET["order"]) ? "&order=$a" : "";

           ?>
           <?php if($numPage>1): ?>
              <div class="paginator">
                <span ><a rel="nofollow" class="paging-first" href="index.php?controller=products&action=categories&category_id=<?php echo $category_id; ?><?php echo $order ?>&page=1"></a>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <a class="currentPage" href="index.php?controller=products&action=categories&category_id=<?php echo $category_id; ?><?php echo $order ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
              <?php endfor; ?> 
              <a rel="nofollow" class="paging-last" href="index.php?controller=products&action=categories&category_id=<?php echo $category_id; ?><?php echo $order ?>&page=<?php echo $numPage ?>"></a></span>
              </div>
          <?php endif; ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>