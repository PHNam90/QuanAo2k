<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php";
?>

<div class="container">
  <div class="row clearfix">
    <div class="product-left">
      <div id="surround">
        <div class="blockImage">
          <img class="product-image-feature" data-zoom-image="assets/upload/products/<?php echo $record->photo; ?>" src="assets/upload/products/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>">
        </div>
        <div class="thumb-mt20 visible-xs visible-sm">
          <div id="sliderproduct" class="owl-carousel owl-theme">
            <div class="item">
              <img alt="<?php echo $record->name; ?>" src="assets/upload/products/<?php echo $record->photo; ?>" data-image="assets/upload/products/<?php echo $record->photo; ?>">
            </div>
            <div class="item">
              <img alt="<?php echo $record->name; ?>" src="assets/upload/products/<?php echo $record->photo; ?>" data-image="assets/upload/products/<?php echo $record->photo; ?>">
            </div>
          </div>
        </div>
        <div id="sliderproduct-pc" class="hidden-xs hidden-sm" style="display:none;">
          <ul class="slides">
            <li class="product-thumb">
              <a href="javascript:" data-image="assets/upload/products/<?php echo $record->photo; ?>" data-zoom-image="assets/upload/products/<?php echo $record->photo; ?>">
                <img alt="<?php echo $record->name; ?>" data-image="assets/upload/products/<?php echo $record->photo; ?>" src="assets/upload/products/<?php echo $record->photo; ?>">
              </a>
            </li>
            <li class="product-thumb">
              <a href="javascript:" data-image="assets/upload/products/<?php echo $record->photo; ?>" data-zoom-image="assets/upload/products/<?php echo $record->photo; ?>">
                <img alt="<?php echo $record->name; ?>" data-image="assets/upload/products/<?php echo $record->photo; ?>" src="assets/upload/products/<?php echo $record->photo; ?>">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="product-right" style="margin-top: 0px !important;">
      <h3 class="tp_product_detail_name"><?php echo $record->name; ?></h3>
      <h6>Category:&nbsp; <span> <?php echo $this->getCategory($record->category_id); ?> </h6>
      <h6>Mã sp: 610</h6>
      <div class="product-price" id="price-preview2">
        <span class="tp_product_detail_price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span>
        <p><span class="tp_product_detail_price"> <?php echo number_format($record->price-($record->price*$record->discount)/100); ?>₫ </span></p>
      </div>
      <div id="add-item-form" class="variants clearfix">
        <div class="action_btn">
       <form action="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" method="post">
            <div class="select-wrapper number-wrapper">
              <label>Số lượng</label>
            <input type="number" id="pview-qtt" value="1" min="1" max="5000" class="text-center" name="sl"></div>
          <button type="submit" id="AddToCart" class="btnBuyNow " data-psid="12074411" data-selId="12074411" title="" data-ck="1" onclick="alert('Thêm vào giỏ hàng thành công')" >Thêm vào giỏ</button>
      </form>
          <a href="index.php?controller=cart&action=pay"><button id="buyNow" class="btnBuyNow " data-psid="12074411" data-selId="12074411" title="" data-ck="1" >Mua ngay</button></a>
        </div>
        <!-- /rating -->
        <div style="border:1px solid #dddddd; margin-top: 15px;">
      <h4 style="padding-left: 10px;">Rating</h4>
      <table class="rating" style="width: 100%; border:0px;">
        <tr>
          <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star" aria-hidden="true"></i></td>
          <td><span class="label label-primary"><?php echo $this->getStar($record->id,1); ?> vote</span></td>
        </tr>
        <tr>
          <td style="width: 80%; padding-left: 10px; "><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></td>
          <td><span class="label label-warning"><?php echo $this->getStar($record->id,2); ?> vote</span></td>
        </tr>
        <tr>
          <td style="width: 80%; padding-left: 10px; "><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></td>
          <td><span class="label label-danger"><?php echo $this->getStar($record->id,3); ?> vote</span></td>
        </tr>
        <tr>
          <td style="width: 80%; padding-left: 10px; "><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></td>
          <td><span class="label label-info"><?php echo $this->getStar($record->id,4); ?> vote</span></td>
        </tr>
        <tr>
          <td style="width: 80%; padding-left: 10px; "><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></td>
          <td><span class="label label-success"><?php echo $this->getStar($record->id,5); ?> vote</span></td>
        </tr>
      </table>
      <br>
    </div>
    <!-- /rating -->
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="policy clearfix">
      <div class="policy-item">
        <h4>Thông tin sản phẩm</h4>
        <div class="content"></div>
      </div>
      <div class="policy-item">
        <h4>Ưu đãi member vip</h4>
        <div class="content">
          Vui lòng đăng kí tài khoản mua hàng để được tích điểm làm Member Vip:<br/>
          - Tài khoản Sliver được giảm 5% khi tích đủ 5tr<br/>
          - Tài khoản Gold được giảm 10% khi tích đủ 10tr<br/>
          - Tài khoản Diamond được giảm 15% khi tích đủ 20tr<br/>
        </div>
      </div>
      <div class="policy-item">
        <h4>Chính Sách Đổi Trả Hàng</h4>
        <div class="content">
          - Được kiểm tra hàng trước khi nhận hàng<br/>
          - Đổi/ Trả trong vòng 7 ngày kể từ khi nhận hàng<br/>
          - Miễn phí đổi trả nếu lỗi sai sót<br/>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="product-related" class="tp_product_detail_suggest">
  <div class="container">
    <div class="row">
      <div class="title-like text-center">
        <h4>Có thể bạn thích</h4>
      </div>
      <div id="owl-product-related" class="owl-carousel owl-theme">
        
        <div class="product-item">
          <div class="img">
            <a href="#">
              <img class="lazyload" data-sizes="auto" src="assets/frontend/images/lazyLoading.gif" data-src="assets/frontend/images/2732017_17509_400x400.jpg" alt="Jean nam rách gối cá tính">
            </a>
          </div>
          <div class="info">
            <h3>
              <a class="tp_product_name" href="#">Jean nam rách gối cá tính</a>
            </h3>
            <div class="prices">
              <span class="tp_product_price">235,000</span>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img">
            <a href="#">
              <img class="lazyload" data-sizes="auto" src="assets/frontend/images/lazyLoading.gif" data-src="assets/frontend/images/2732017_174911_400x400.jpg" alt="Jean nam xanh trơn">
            </a>
          </div>
          <div class="info">
            <h3>
              <a class="tp_product_name" href="#">Jean nam xanh trơn</a>
            </h3>
            <div class="prices">
              <span class="tp_product_price">450,000</span>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img">
            <a href="#">
              <img class="lazyload" data-sizes="auto" src="assets/frontend/images/lazyLoading.gif" data-src="assets/frontend/images/2732017_17509_400x400.jpg" alt="Jean nam đen trơn">
            </a>
          </div>
          <div class="info">
            <h3>
              <a class="tp_product_name" href="#">Jean nam đen trơn</a>
            </h3>
            <div class="prices">
              <span class="tp_product_price">340,000</span>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img">
            <a href="#">
              <img class="lazyload" data-sizes="auto" src="assets/frontend/images/lazyLoading.gif" data-src="assets/frontend/images/2732017_174911_400x400.jpg" alt="Jean nam đen mài nhẹ">
            </a>
          </div>
          <div class="info">
            <h3>
              <a class="tp_product_name" href="#">Jean nam đen mài nhẹ</a>
            </h3>
            <div class="prices">
              <span class="tp_product_price">235,000</span>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img">
            <a href="#">
              <img class="lazyload" data-sizes="auto" src="assets/frontend/images/lazyLoading.gif" data-src="assets/frontend/images/2732017_17509_400x400.jpg" alt="Jean nam xanh thêu">
            </a>
          </div>
          <div class="info">
            <h3>
              <a class="tp_product_name" href="#">Jean nam xanh thêu</a>
            </h3>
            <div class="prices">
              <span class="tp_product_price">340,000</span>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img">
            <a href="#">
              <img class="lazyload" data-sizes="auto" src="assets/frontend/images/lazyLoading.gif" data-src="assets/frontend/images/2732017_17509_400x400.jpg" alt="Jean nam xanh đen trơn">
            </a>
          </div>
          <div class="info">
            <h3>
              <a class="tp_product_name" href="#">Jean nam xanh đen trơn</a>
            </h3>
            <div class="prices">
              <span class="tp_product_price">350,000</span>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img">
            <a href="#">
              <img class="lazyload" data-sizes="auto" src="assets/frontend/images/lazyLoading.gif" data-src="assets/frontend/images/Quan_Jeans_Nam_Lph_____Be14_430x430.jpg" alt="Jean nam đen thêu chữ">
            </a>
          </div>
          <div class="info">
            <h3>
              <a class="tp_product_name" href="#">Jean nam đen thêu chữ</a>
            </h3>
            <div class="prices">
              <span class="tp_product_price">450,000</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</form>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
      return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>