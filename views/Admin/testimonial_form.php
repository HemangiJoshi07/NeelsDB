<? $pg='testimonial';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title"><?if(isset($testimonial)){echo "EDIT TESTIMONIAL";}else{echo "ADD TESTIMONIAL";}?></h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                          <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/testimonial') ?>">TESTIMONIAL</a>
                        </li>
                        <li>
                            <a href="#"><?if(isset($testimonial)){echo "EDIT TESTIMONIAL";}else{echo "ADD TESTIMONIAL";}?></a>
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
                         <h4 class="m-t-0 header-title"><?if(isset($testimonial)){echo "EDIT TESTIMONIAL";}else{echo "ADD TESTIMONIAL";}?></h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                   
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" id="name" value="<?= isset($testimonial) ? set_value('name',$testimonial['name']) : set_value('name')?>" placeholder="Enter name"><span class="text-danger"><?=$error['name'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Designation</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation" value="<?= isset($testimonial) ? set_value('designation',$testimonial['designation']) : set_value('designation')?>">
                                            <span class="text-danger"><?=$error['designation'] ?? ''?></span>
                                        </div> 
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Display Order</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" name="display_order" id="display_order" placeholder="Enter Discription" value="<?= isset($testimonial) ? set_value('display_order',$testimonial['display_order']) : set_value('display_order')?>">
                                             <span class="text-danger"><?=$error['display_order'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Discription</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter description"><?= isset($testimonial) ? set_value('description',$testimonial['description']) : set_value('description')?></textarea>
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