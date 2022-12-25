<?php include('include/header.php');?>
<main>
    <div class="slider-area slider-area2 slider-height2 position-relative" data-background="assets/img/hero/section_bg_product.png">
        <div class="slider-active">
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s"><?=$cms_page['page_name'];?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url('');?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Contact</a></li> 
                            </ol>
                        </nav>
                    </div>
                    <div class="hero-img">
                        <img src="assets/img/hero/h1_hero2.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <?php if($_GET['id']==1){?>
                <div class="col-md-12">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Well done!</strong> You Successfully Send Email.
                  </div>  
                </div>
                  <?}?>
                  <?php if($_GET['id']==2){?>
                    <div class="col-md-12">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong></strong> Not Send Email Successfully.
                      </div>  
                    </div>
                  <?}?>
                <div class="col-12">
                    <h2 class="contact-title"><?=$cms_page['page_title'];?></h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Enter Message"></textarea><span style="color: red !important;"><?=$error['message'] ?? ''?></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"  placeholder="Enter your name"><span style="color: red !important;"><?=$error['name'] ?? ''?></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email"><span style="color: red !important;"><?=$error['email'] ?? ''?></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject"><span style="color: red !important;"><?=$error['subject'] ?? ''?></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="submit" id="submit"class="button button-contactForm boxed-btn">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3><?=$general['address'];?></h3>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><?=$general['phone_no'];?></h3>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><?=$general['email'];?></h3>
                            <p>For your Enquiry or Feedback </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('include/footer.php');?>