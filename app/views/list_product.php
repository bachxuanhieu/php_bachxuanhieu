<section class="product_section layout_padding">
<div class="heading_container heading_center">
               <h2>
                Tất cả sản phẩm
               </h2>
            </div>
            <div class="fb-share-button" data-href="http://localhost/hieuphp/sanpham/tatcasanpham/" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fhieuphp%2Fsanpham%2Ftatcasanpham%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    <div class="container">
        <div class="row">
            <?php foreach ($list_product as $key => $pro): ?>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                    <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                        <input type="hidden" value="<?php echo $pro['id_product'] ?>" name="product_id">
                         <input type="hidden" value="<?php echo $pro['title_product'] ?>" name="product_title">   
                         <input type="hidden" value="<?php echo $pro['image_product'] ?>" name="product_image">   
                         <input type="hidden" value="<?php echo $pro['price_product'] ?>" name="product_price">   
                         <input type="hidden" value="1" name="product_quanlity">  
                        <div class="option_container">
                            <div class="options">
                                <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro['id_product']?> class="option1">
                                    <?= $pro['title_product'] ?>
                                </a>
                                <input class="btn btn-link" name="addcart" type="submit" value="Add To Cart">
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="<?= BASE_URL ?>/public/uploads/product/<?= $pro['image_product'] ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h5><?= $pro['title_product'] ?></h5>
                            <h6>Giá: <?= number_format($pro['price_product'], 0, ',', '.') . 'd' ?></h6>
                        </div>
                    </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0" nonce="2rFXfB9G"></script>
