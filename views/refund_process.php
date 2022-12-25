<?php include('include/header.php');?>
<main>
    <div class="slider-area slider-area2 slider-height2 position-relative" data-background="<?=base_url('public/Front_css')?>/assets/img/hero/section_bg_product.png">
        <div class="slider-active">
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s"><?=$cms_page['page_name'];?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">About</a></li> 
                            </ol>
                        </nav>
                    </div>
                    <div class="hero-img">
                        <img src="assets/img/hero/h1_hero2.png" alt=""data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whole-wrap">
    <div class="container box_1170">
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title"><?=$cms_page['page_title'];?></h2>
                </div>
                <div class="col-lg-12">
                   <p><?=$cms_page['page_desc'];?></p>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
</main>
<?php include('include/footer.php');?>