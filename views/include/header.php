<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to NeelsDB Exports | Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('public/Front_css');?>/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/animated-headline.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url('public/Front_css');?>/assets/css/style.css">
</head>
<body>
   <!--  <!- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url('public/Front_css');?>/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> 
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area header_area">
            <div class="main-header">
             <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                              <a href="index.html"><img src="<?php echo base_url('public/Front_css');?>/assets/img/logo/logo3.jpg" alt=""></a>
                               <h2> <b> NeelsDB Export </b> </h2>
                          </div>
                      </div>
                      <div class="col-xl-10 col-lg-10 col-md-8">
                         <div class="header-left  d-flex f-right align-items-center">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">                                 
                                        <li><a href="<?=base_url('');?>">Home</a></li>
                                        <?php foreach($topmenu_header as $row){?>
                                        <li><a href="#"><?=($row['name']);?></a>
                                            <ul class="submenu">
                                                <?php foreach($category_header as $cat){
                                                if($cat['top_menu_id']==$row['id'])
                                                {?>    
                                                <li><a href="<?=base_url('category').'/'.$cat['url_keyword']?>"><?= $cat['name'];?></a></li>
                                                <?}}?>
                                            </ul>
                                        </li>
                                        <?}?>
                                    </ul>
                                </nav>
                            </div>
                            <!-- left Btn -->
                            <div class="header-right-btn f-right d-none d-lg-block  ml-30">
                                <a href="<?=base_url('contact');?>" class="header-btn">ContactUs</a>
                            </div>
                        </div>
                    </div>             
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
</header>