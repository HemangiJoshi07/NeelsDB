<?php include('include/header.php')?>
<main>
	<div class="slider-area slider-area2 slider-height2 position-relative" data-background="<?=base_url('public/Front_css')?>/assets/img/hero/section_bg_product.png">
		<div class="slider-active">
			<!-- Single Slider -->
			<div class="single-slider">
				<div class="slider-cap-wrapper">
					<div class="hero-caption">
						<h1 data-animation="fadeInLeft" data-delay=".4s"><?=$category['name'];?></h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Category</a></li> 
							</ol>
						</nav>
					</div>
					<div class="hero-img">
						<img src="<?=base_url('public/Front_css')?>/assets/img/hero/h1_hero2.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<div class="row gallery-item">	
					<?php foreach ($product as $row) {?> 
					<div class="col-md-4">
						<a href="<?=base_url($row['image'])?>" class="img-pop-up">
							<div class="single-gallery-image"><img class="img-responsive" src="<?=base_url($row['image'])?>" alt="" style="width:150px;height: 200px;"></div>
						</a>
						<div class="services-caption">
                            <h3 style="margin:20px;"><a href="#"><?php echo $row['name'];?></a></h3>
                             <p><a href="<?=base_url('category').'/'.$category['url_keyword'].'/'.$row['url_keyword'];?>" class="btn btn3"><?php echo $row['name']; ?></a></p> 
                        </div>
					</div>
					<?}?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('include/footer.php');?> 