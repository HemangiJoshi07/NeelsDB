<?php 
$pg='product';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title"><?if(isset($product)){echo "EDIT PRODUCT";}else{echo "ADD PRODUCT";}?></h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                           <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/product') ?>">PRODUCT</a>
                        </li>
                        <li>
                            <a href="#"><?if(isset($product)){echo "EDIT PRODUCT";}else{echo "ADD PRODUCT";}?></a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
			</div>
		</div>
                <div class="row">
                <div class="col-sm-12">
                <div class="card" >
                    <div class="card-body">
                         <h4 class="m-t-0 header-title"><?if(isset($product)){echo "EDIT PRODUCT";}else{echo "ADD PRODUCT";}?></h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                   
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?= isset($product) ? set_value('name',$product['name']):set_value('name')?>"><span class="text-danger"><?=$error['name'] ?? ''?></span>
                                        </div>
                                    </div>
   
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Url Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="url_keyword" id="url_keyword" placeholder="Enter Url_Keyword" value="<?= isset($product) ? set_value('url_keyword',$product['url_keyword']):set_value('url_keyword')?>">
                                            <span class="text-danger"><?=$error['url_keyword'] ?? ''?></span>
                                        </div> 
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Cate Name</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="category_id" id="category_id">
                                                <option value="">select category</option>
                                                 <?php foreach($category as $row){ ?>
                                                <option value="<?=$row['id']?>"<?php if($product['category_id']==$row['id'])echo 'selected';?>><?=$row['name']?></option>
                                            <? } ?>
                                             </select> 
                                         <span class="text-danger"><?=$error['category_id'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <?if(isset($product)){?> 
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Old-Image</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?= isset($product)?base_url($product['image']):''?>" alt="">
                                        </div>
                                    </div>
                                    <input type="hidden" name="old_image" id="old_image" class="form-control" value="<?php if(isset($product)){ echo $product['image'];}?>">
                                    <span class="text-danger"></span>
                                    </div> 
                                    <?}?>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" name="image" class="form-control" id="image">
                                             <span class="text-danger"><?=$error['image'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Enter meta_title" value="<?= isset($product) ? set_value('meta_title',$product['meta_title']):set_value('meta_title')?>">
                                             <span class="text-danger"><?=$error['meta_title'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" placeholder="Enter Meta_Keyword" value="<?= isset($product) ? set_value('meta_keyword',$product['meta_keyword']):set_value('meta_keyword')?>">
                                             <span class="text-danger"><?=$error['meta_keyword'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Desc</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_desc" id="meta_desc" placeholder="Enter Meta_Desc" value="<?= isset($product) ? set_value('meta_desc',$product['meta_desc']):set_value('meta_desc')?>">
                                             <span class="text-danger"><?=$error['meta_desc'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Is Display Footer</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="is_display_footer" id="is_display_footer">

                                                <option value="0"<?php if($product['is_display_footer']=="0")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($product['is_display_footer']=="1")echo 'selected';?>>yes</option>
                                            </select> 
                                            <span class="text-danger"><?=$error['is_display_footer'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Is Display Home</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="is_display_home" id="is_display_home">
                                                <option value="0"<?php if($product['is_display_home']=="0")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($product['is_display_home']=="1")echo 'selected';?>>yes</option>
                                            </select> 
                                            <span class="text-danger"><?=$error['is_display_home'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Is Active</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="is_active" id="is_active">
                                                <option value="0"<?php if($product['is_active']=="0")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($product['is_active']=="1")echo 'selected';?>>yes</option>
                                            </select> 
                                            <span class="text-danger"><?=$error['is_active'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Product Code</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="product_code" id="product_code" value="<?= isset($product) ? set_value('product_code',$product['product_code']):set_value('product_code')?>">
                                             <span class="text-danger"><?=$error['product_code'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Product Type</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="product_type" id="product_type" value="<?= isset($product) ? set_value('product_type',$product['product_type']):set_value('product_type')?>">
                                             <span class="text-danger"><?=$error['product_type'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Delivery Time</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="delivery_time" id="delivery_time" value="<?= isset($product) ? set_value('delivery_time',$product['delivery_time']):set_value('delivery_time')?>">
                                             <span class="text-danger"><?=$error['delivery_time'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Small Desc</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="form-control" name="small_desc" id="small_desc"><?= isset($product) ? set_value('small_desc',$product['small_desc']):set_value('small_desc')?></textarea>
                                             <span class="text-danger"><?=$error['small_desc'] ?? ''?></span>
                                        </div>
                                    </div>

                                   <div class="form-group row">
                                        <label class="col-md-2 control-label">DisplayOrder</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" name="display_order" id="display_order" value="<?= isset($product) ? set_value('display_order',$product['display_order']):set_value('display_order')?>">
                                             <span class="text-danger"><?=$error['display_order'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Discription</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="form-control" name="description" id="description"><?= isset($product) ? set_value('description',$product['description']):set_value('description')?></textarea>
                                             <span class="text-danger"><?=$error['description'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="btn btn-primary waves-effect m-t-20" name="Submit" id="Submit" value="Submit" >
                                       
                                    </div>
                                </form>   
                            </div> 
                        </div>      
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>
</div>                
<?include('include/footer.php')?>