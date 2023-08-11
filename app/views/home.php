
      <section class="product_section layout_padding">
         <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Điện <span> Thoại</span>
            </h2>
         </div>
         <div class="row">
            <?php
            foreach ($product as $key => $pro) {
               if ($pro['id_category_product'] == 1) {
            ?>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                        <input type="hidden" value="<?php echo $pro['id_product'] ?>" name="product_id">
                         <input type="hidden" value="<?php echo $pro['title_product'] ?>" name="product_title">   
                         <input type="hidden" value="<?php echo $pro['image_product'] ?>" name="product_image">   
                         <input type="hidden" value="<?php echo $pro['price_product'] ?>" name="product_price">   
                         <input type="hidden" value="1" name="product_quanlity">   
                         <h1><?php $pro['title_product'] ?></h1>
                        <div class="option_container">
                              <div class="options">
                                 <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro['id_product'] ?>" class="option1">
                                    Điện thoại
                                 </a>
                                    <input class="btn btn-link" name="addcart" type="submit" value="Add To Cart">
                              </div>
                           </div>
                           <div class="img-box">
                              <img src="<?= BASE_URL ?>/public/uploads/product/<?= $pro['image_product'] ?>" alt="">
                           </div>
                           <div class="detail-box">
                              <h5>
                                 <?php echo $pro['title_product'] ?>
                              </h5>
                              <h6>
                                 $75
                              </h6>
                           </div>
                        </form>
                     </div>
                  </div>
            <?php
               }
            }
            ?>
         </div>

            <div class="heading_container heading_center">
               <h2>
                  Lap <span> Top</span>
               </h2>
            </div>
            <div class="row">
            <    <?php
            foreach ($product as $key => $pro) {
               if ($pro['id_category_product'] == 46) {
            ?>
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
                                 <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro['id_product'] ?>" class="option1">
                                    Điện thoại
                                 </a>
                                    <input class="btn btn-link" name="addcart" type="submit" value="Add To Cart">
                              </div>
                           </div>
                           <div class="img-box">
                              <img src="<?= BASE_URL ?>/public/uploads/product/<?= $pro['image_product'] ?>" alt="">
                           </div>
                           <div class="detail-box">
                              <h5>
                                 <?php echo $pro['title_product'] ?>
                              </h5>
                              <h6>
                                 $75
                              </h6>
                           </div>
                        </form>
                     </div>
                  </div>
            <?php
               }
            }
            ?>      
            </div>
            <div class="heading_container heading_center">
               <h2>
                  Phụ <span> Kiện</span>
               </h2>
            </div>
            <div class="row">
            <?php
            foreach ($product as $key => $pro) {
               if ($pro['id_category_product'] == 48) {
            ?>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                        <input type="hidden" value="<?php echo $pro['id_product'] ?>" name="product_id">
                         <input type="hidden" value="<?php echo $pro['title_product'] ?>" name="product_title">   
                         <input type="hidden" value="<?php echo $pro['image_product'] ?>" name="product_image">   
                         <input type="hidden" value="<?php echo $pro['price_product'] ?>" name="product_price">   
                         <input type="hidden" value="1" name="product_quanlity">   
                         <h1><?php $pro['title_product'] ?></h1>
                        <div class="option_container">
                              <div class="options">
                                 <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro['id_product'] ?>" class="option1">
                                    Điện thoại
                                 </a>
                                    <input class="btn btn-link" name="addcart" type="submit" value="Add To Cart">
                              </div>
                           </div>
                           <div class="img-box">
                              <img src="<?= BASE_URL ?>/public/uploads/product/<?= $pro['image_product'] ?>" alt="">
                           </div>
                           <div class="detail-box">
                              <h5>
                                 <?php echo $pro['title_product'] ?>
                              </h5>
                              <h6>
                                 $75
                              </h6>
                           </div>
                        </form>
                     </div>
                  </div>
            <?php
               }
            }
            ?>      
            </div>
         </div>
      </section>
      <!-- end product section -->

     

   