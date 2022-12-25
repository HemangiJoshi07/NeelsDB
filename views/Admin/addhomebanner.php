<?$pg='home_banner';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title"><?if(isset($home_banner)){echo "EDIT HOMEBANNER";}else{echo "ADD HOMEBANNER";}?></h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                           <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                             <a href="<?= site_url('Admin/home_banner') ?>">HOMEBANNER</a>
                        </li>
                        <li>
                            <a href="#"><?if(isset($home_banner)){echo "EDIT HOMEBANNER";}else{echo "ADD HOMEBANNER";}?></a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
			</div>
		</div>
                <div class="row">
                <div class="col-sm-12">
                <div class="card" >
                    <div class="card-body"  >
                         <h4 class="m-t-0 header-title"><?if(isset($home_banner)){echo "EDIT HOMEBANNER";}else{echo "ADD HOMEBANNER";}?></h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                   
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Lebel</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="lebel" id="lebel" value="<?= isset($home_banner) ? set_value('lebel',$home_banner['lebel']) : set_value('lebel') ?>" placeholder="Enter Lebel"><span class="text-danger"><?=$error['lebel'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" id="title" value="<?= isset($home_banner) ? set_value('title',$home_banner['title']) : set_value('title') ?>" placeholder="Enter Title">
                                            <span class="text-danger"><?=$error['title'] ?? ''?></span>
                                        </div> 
                                    </div>
                                        <?if(isset($home_banner)){?> 
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Old-Image</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?= isset($home_banner)?base_url($home_banner['image']):''?>" alt="">
                                        </div>
                                    </div>
                                    <input type="hidden" name="old_image" id="old_image" class="form-control" value="<?php if(isset($home_banner)){ echo $home_banner['image'];}?>">
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
                                        <label class="col-md-2 control-label">Discription</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="form-control" name="discription" id="discription" placeholder="Enter Discription"><?= isset($home_banner) ? set_value('discription',$home_banner['discription']):set_value('discription')?></textarea> 
                                             <span class="text-danger"><?=$error['discription'] ?? ''?></span>
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