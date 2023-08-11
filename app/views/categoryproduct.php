<section class="product_section layout_padding">
    <div class="container">
        <div class="row">
        <?php
        $prevCategory = null;

        foreach ($product as $key => $pro) {
            if ($pro['title_category_product'] != $prevCategory) {
                ?>
                <div class="heading_container heading_center">
                    <h2>
                        <?php echo $pro['title_category_product']; ?>
                    </h2>
                </div>
                <div class="row"> 
            <?php
            }
            $prevCategory = $pro['title_category_product']; 
            ?>
            <div class="col-md-4">
                <div class="box">
                        <div class="option_container">
                            <div class="options">
                            <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro['id_product']?>" class="option1">
                            <?php echo $pro['title_category_product'] ?>
                            </a>
                            <a href="" class="option2">
                            Buy Now
                            </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $pro['image_product'] ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                            <?php echo $pro['title_product'] ?>
                            </h5> 
                            <h6>
                            Giá: <?php echo number_format($pro['price_product'],0,',','.').'d' ?>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
        </div> 
    </div>
</div>
       
</section>

