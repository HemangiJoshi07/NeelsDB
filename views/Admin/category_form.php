<?php 
 $pg='category';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title"><?if(isset($category)){echo "EDIT CATEGORY";}else{echo "ADD CATEGORY";}?></h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                           <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/category') ?>">CATEGORY</a>
                        </li>
                        <li>
                            <a href="#"><?if(isset($category)){echo "EDIT CATEGORY";}else{echo "ADD CATEGORY";}?></a>
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
                         <h4 class="m-t-0 header-title"><?if(isset($category)){echo "EDIT CATEGORY";}else{echo "ADD CATEGORY";}?></h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                   
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?= isset($category) ? set_value('name',$category['name']) : set_value('name')?>"><span class="text-danger"><?=$error['name'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Url Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="url_keyword" id="url_keyword" placeholder="Enter Url_Keyword" value="<?= isset($category) ? set_value('url_keyword',$category['url_keyword']) : set_value('url_keyword')?>">
                                            <span class="text-danger"><?=$error['url_keyword'] ?? ''?></span>
                                        </div> 
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Top Menu</label>
                                        <div class="col-md-10">
                    
                                            <select  class="form-control select2" name="top_menu_id" id="top_menu_id">
                                                <option value="">selct option</option>
                                                <?php
                                                foreach($topmenu as $row){
                                                ?>
                                                <option value="<?=$row['id']?>" <?php if($category['top_menu_id']==$row['id'])echo 'selected';?>><?=$row['name']?></option>
                                                <? } ?>
                                            </select> 
                                         <span class="text-danger"><?=$error['top_menu_id'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Enter Meta_Title" value="<?= isset($category) ? set_value('meta_title',$category['meta_title']) : set_value('meta_title')?>">
                                             <span class="text-danger"><?=$error['meta_title'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" placeholder="Enter Meta_Keyword" value="<?= isset($category) ? set_value('meta_keyword',$category['meta_keyword']) : set_value('meta_keyword')?>">
                                             <span class="text-danger"><?=$error['meta_keyword'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Desc</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_desc" id="meta_desc" placeholder="Enter Meta_Desc" value="<?= isset($category) ? set_value('meta_desc',$category['meta_desc']) : set_value('meta_desc')?>">
                                             <span class="text-danger"><?=$error['meta_desc'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Is Active</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="is_active" id="is_active">
                                                <option value="0" <?php if($category['is_active']=="0")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($category['is_active']=="1")echo 'selected';?>>yes</option>
                                            </select> 
                                           

                                            <span class="text-danger"><?=$error['is_active'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <?if(isset($category)){?> 
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Old-Image</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?= isset($category)?base_url($category['image']):''?>" alt="">
                                        </div>
                                    </div>
                                    <input type="hidden" name="old_image" id="old_image" class="form-control" value="<?php if(isset($category)){ echo $category['image'];}?>">
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
                                        <label class="col-md-2 control-label">DisplayOrder</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" name="display_order" id="display_order" value="<?= isset($category) ? set_value('display_order',$category['display_order']) : set_value('display_order')?>">
                                             <span class="text-danger"><?=$error['display_order'] ?? ''?></span>
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