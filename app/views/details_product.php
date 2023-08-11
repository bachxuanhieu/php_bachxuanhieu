

<div class="heading_container heading_center" style="margin-bottom: 20px;">
    <h2>Product Details</h2>
</div>
<?php foreach ($details_product as $key => $pro): ?>
    <div class="container">
        <div class="product-info">
            <div class="row">
                <div class="col-md-6 mt-4">
                <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                        <input type="hidden" value="<?php echo $pro['id_product'] ?>" name="product_id">
                         <input type="hidden" value="<?php echo $pro['title_product'] ?>" name="product_title">   
                         <input type="hidden" value="<?php echo $pro['image_product'] ?>" name="product_image">   
                         <input type="hidden" value="<?php echo $pro['price_product'] ?>" name="product_price">   
                         <input type="hidden" value="1" name="product_quanlity">   
                    <div class="product-image">
                        <img src="<?= BASE_URL ?>/public/uploads/product/<?= $pro['image_product'] ?>" style=" width: 450px;" alt="Product Image">
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="product-details">
                        <h2 class="product-name"><?= $pro['title_product'] ?></h2>
                        <p class="product-price">Giá sản phẩm: <?= number_format($pro['price_product'], 0, ',', '.') ?> đ</p>
                        <p class="product-quantity">Số lượng sản phẩm: <?= $pro['quanlity_product'] ?></p>
                        <div class="product-description">
                            <p><?= $pro['desc_product'] ?></p>
                        </div>
                        <input class="btn btn-link btn-info text-white" name="addcart" type="submit" value="Add To Cart">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

