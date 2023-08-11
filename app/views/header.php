<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta property="og:url"              content="<?php $actual_link=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on' ? 'https':'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; echo $actual_link; ?>" />

      <meta property="og:type"               content="article" />
      <meta property="og:title"              content="<?php $this->title ?>" />
      <meta property="og:description"        content="<?php $this->desc ?>" />
      <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg"/>
      <link rel="shortcut icon" href="<?php echo BASE_URL?>/public/images/favicon.png" type="">
      <title>php web bán hàng</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/public/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="<?php echo BASE_URL?>/public/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo BASE_URL?>/public/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?php echo BASE_URL?>/public/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="<?php echo BASE_URL?>/index"><img width="250" src="<?php echo BASE_URL?>/public/images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="<?php echo BASE_URL?>/index">Trang Chủ <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Danh sách sản phẩm <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <?php
                                 foreach($category as $key => $cate){
                              ?>

                              <li><a href="<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></a></li>
                             <?php
                                 };
                              ?>

                           </ul>
                        </li>
                    
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo BASE_URL?>/index/lienhe">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo BASE_URL ?>/giohang/">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                                 <?php
                                 if (Session::get('customer')){
                                 ?>
                                 <li> <a href="<?php echo BASE_URL  ?>/khachhang/dangxuat" style="color:black;">Đăng Xuất</a> </li>
                                 <?php
                                 }else{
                                 ?>

                                   <li><a href="<?php echo BASE_URL  ?>/khachhang/dangnhap" style="color:black;">Đăng nhập</a></li>
                                 <?php
                                 }
                                 ?>


                                 
   
                         
                           
                        

                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>