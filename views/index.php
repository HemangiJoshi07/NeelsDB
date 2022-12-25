<?php include('include/header.php')?>
<main>
    <div class="slider-area  slider-height position-relative" data-background="<?php echo base_url('public/Front_css');?>/assets/img/hero/h1_hero.png">
        <div class="slider-active">
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <span><?php echo $home_banner['lebel'];?></span>
                        <h1 data-animation="fadeInLeft" data-delay=".4s"><?php echo $home_banner['title'];?></h1>
                        <p data-animation="fadeInLeft" data-delay=".6s"><?php echo $home_banner['discription'];?></p>
                        <a href="#" class="btn"  data-animation="fadeInLeft" data-delay=".9s" >Explore Products</a>
                    </div>
                    <div class="hero-img">
                        <img src="<?php echo $home_banner['image'];?>" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="services-section section-padding30 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span style="font-size:20px;">Our Products</span>
                        <h2>Many 
                        peoples across the world that believe in Feng Shui and consider them to work wonders..</h2>
                    </div> 
                </div>
            </div>
            <div class="services-active">
                <?php foreach($product as $row){?>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="<?php echo $row['image'];?>" alt="">
                        <div class="services-caption">
                            <h3><a href="#"><?php echo $row['name'];?></a></h3>
                             <p><br><a href="<?=base_url('category').'/'.$controller->cat_urlkeyword($row['category_id']).'/'.$row['url_keyword'];?>" class="btn btn3"><?php echo $row['name']; ?></a></p> 
                            
                        </div>
                    </div>
                </div>
                <?}?>
            </div>
        </div>
    </section>
    <section class="about-area fix">
        <div class="about-img">
        </div>
        <div class="about-details">
            <div class="right-caption">
                <div class="section-tittle mb-50">
                    <h2>Customised Creation</h2>
                </div>
                <div class="about-more">
                    <p>The automated process starts as soon as 
                        your clothes go into the machine. Duis cursus, mi quis 
                        viverra ornare, eros dolor interdum nulla, ut commodo 
                        diam libero vitae erat. Aenean faucibus nibh et justo 
                        cursus id rutrum lorem imperdiet. Nunc ut sem vitae 
                    risus tristique posuere.</p>
                    <p class="pera-bottom">Interdum nulla, ut commodo diam libero vitae erat. 
                        Aenean faucibus nibh et justo cursus id rutrum lorem 
                    imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    <div class="footer-tittles">
                        <p>Will take bulk order, </p>
                        <h2>7 Chakra, Neclase etc.. </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <section class="testimonial-area testimonial-padding fix" data-background="<?php echo base_url('public/Front_css');?>/assets/img/gallery/section_bg03.png">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-9">
                    <div class="about-caption">
                        <div class="h1-testimonial-active dot-style">
                            <?php foreach($testimonial as $row){?>
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="<?php echo base_url('public/Front_css');?>/assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p><?php echo $row['description'];?></p>
                                </div>
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="<?php echo base_url('public/Front_css');?>/assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span><?php echo $row['name'];?></span>
                                        <p><?php echo $row['designation'];?></p>
                                    </div>
                                </div>
                            </div>
                            <?}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="office-environments section-bg2 section-padding40"  data-background="<?php echo base_url('public/Front_css');?>/assets/img/gallery/agate.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div class="office-pera">
                        <div class="section-tittle">
                            <h2 class="mb-30">Importance Stones & Agate</h2>
                            <div class="owl-carousel office-environment-slider owl-theme">
                                <?php foreach($office_environment as $row){?>
                                <div class="item">
                                    <p><?php echo $row['discription'];?></p>
                                </div>
                               <?}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wantToWork-area section-bg2"  data-background="<?php echo base_url('public/Front_css');?>/assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Is there any query ?</h2>
                            <p>The automated process starts as soon as your clothes go into the machine. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="#" class="btn w-btn wantToWork-btn mr-20">Whats app Now..</a>
                        <a href="#" class="btn2 w-btn wantToWork-btn"><i class="fas fa-phone"></i><?php echo $general['phone_no'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('include/footer.php');?>        