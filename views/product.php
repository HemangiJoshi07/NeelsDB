<?php include('include/header.php')?>
<main>
<div class="slider-area slider-area2 slider-height2 position-relative" data-background="<?=base_url('public/Front_css')?>/assets/img/hero/section_bg_product.png">
	<div class="slider-active">
		<div class="single-slider">
			<div class="slider-cap-wrapper">
				<div class="hero-caption">
					<h1 data-animation="fadeInLeft" data-delay=".4s"><?=$product['name'];?></h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?=base_url('category').'/'.$category['url_keyword'];?>">Category</a></li> 
						<li class="breadcrumb-item"><a href="">Product</a></li> 
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
			<h3 class="mb-30" style="font-size:30px;"><?=$product['name'];?></h3>
			<div class="row">
				<div class="col-md-2">
					<img src="<?=base_url($product['image']);?>" alt="" class="img-fluid" style="height: 150px; width:150px;">
				</div>
				<div class="col-md-9 mt-sm-20">
					<p><?=$product['small_desc'];?></p>
					<p> Product Code : <?=$product['product_code'];?></p>
					<p> Discription : <?=$product['description'];?></p>
					<p> Product Type : <?=$product['product_type'];?></p>
					<p> Delivery Time : <?=$product['delivery_time'];?></p>
					<p> <a href="<?=base_url('inquiry').'/'.$product['id'];?>" class="btn btn3">Inquiry Now</a></p>
				</div>
			</div>
		</div>
		<div class="section-top-border">
			<h3>Similar Products</h3>
			<div class="row gallery-item">
			<?php foreach($product_img as $pro){
				if($product['image']!=$pro['image']){?>		
				<div class="col-md-2">
					<a href="<?=base_url($pro['image']);?>" class="img-pop-up">
						<div class="single-gallery-image"><img class="img-responsive" src="<?=base_url($pro['image']);?>" alt="" style="width:150px;height: 200px;"></div>
					</a>
					<div class="services-caption">
                        <h3 style="font-size:30px; margin: auto;"><a href="<?=base_url('category').'/'.$category['url_keyword'].'/'.$pro['url_keyword'];?>" ><?php echo $pro['name'];?></a></h3>
                    </div>
				</div>
			<?}}?>
			</div>
		</div>
	</div>
</div>
</main>
<?php include('include/footer.php');?>  