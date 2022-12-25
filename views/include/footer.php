<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="<?=base_url('public/Front_css')?>/assets/img/gallery/footer-bg1.png">
        <div class="footer-area footer-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="<?=base_url('public/Front_css')?>/assets/img/logo/world.jpeg" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p><?=$general['footer_text'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Products</h4>
                                <ul>
                                    <?php foreach($product_footer as $row){?>
                                    <li><a href="<?=base_url('category').'/'.$controller->cat_urlkeyword($row['category_id']).'/'.$row['url_keyword'];?>"><?=$row['name'];?></a></li>
                                    <?}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="<?= base_url('about');?>">About</a></li>
                                    <li><a href="<?= base_url('privacypolicy');?>">Privacy Policy</a></li>
                                    <li><a href="<?=base_url('refundprocess');?>">Refund Process</a></li>
                                    <li><a href="<?= base_url('contact');?>">ContactUs</a></li>
                                    <li><a href="<?=base_url('inquiry').'/'.$row['id'];?>">Inquiry</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact us</h4>
                                <ul>
                                    <li><a href="#"><?=$general['email'];?></a></li>
                                    <li><a href="#"><?=$general['address'];?></a></li>
                                    <li class="number"><a href="#"><?=$general['phone_no'];?></a></li>
                                </ul>
                            </div>
                            <div class="footer-social">
                                <a href="<?=$general['twitter'];?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?=$general['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?=$general['pinterest'];?>"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container-fluid">
                <div class="footer-border">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right">
                                <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Neel DB.com| Powered by Pc<a href="#" target="_blank">                                 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<script src="<?=base_url('public/Front_css')?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="<?=base_url('public/Front_css')?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/popper.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?=base_url('public/Front_css')?>/assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="<?=base_url('public/Front_css')?>/assets/js/wow.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/animated.headline.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="<?=base_url('public/Front_css')?>/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/waypoints.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.countdown.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="<?=base_url('public/Front_css')?>/assets/js/contact.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.form.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.validate.min.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/mail-script.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->    
<script src="<?=base_url('public/Front_css')?>/assets/js/plugins.js"></script>
<script src="<?=base_url('public/Front_css')?>/assets/js/main.js"></script>

</body>
</html>