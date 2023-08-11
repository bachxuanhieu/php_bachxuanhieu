<?php
                    if(!empty($_GET['msg'])){
                        $msg=unserialize(urldecode($_GET['msg']));
                        foreach($msg as $key => $value){
                            echo '<span style="color:blue;">'.$value.'</span>';
                        }
                    }
                ?>


<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
              
                  <div class="full">
                     <h3>Đăng ký</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="<?php echo BASE_URL ?>/khachhang/insert_dangky" method="POST">
                        <fieldset>
                        <input type="text" placeholder="Họ và tên" name="txtHoten" required />
                           <input type="text" placeholder="Số điện thoại" name="txtDienthoai" required />
                           <input type="text" placeholder="Địa chỉ" name="txtDiachi" required />
                           <input type="text" placeholder="Email" name="txtEmail" required />
                           <input type="text" placeholder="password" name="txtPassword" required />
                           <input type="submit" name="dangky" value="Đăng ký" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>



      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Đăng Nhập</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                  <form autocomplete="off" action="<?php echo BASE_URL ?>/khachhang/login_customer" method="POST">
                        <fieldset>
                           <input type="text" placeholder="username" name="username" required />
                           <input type="text" placeholder="password" name="password" required />
                           <input type="submit" name="dangnhap" value="Đăng nhập" />
                        </fieldset>
                     </form>
                  </div>
                
               </div>
            </div>
         </div>
      </section>