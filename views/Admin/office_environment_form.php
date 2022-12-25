<? $pg='office';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title"><?if(isset($office_environment)){echo "EDIT OFFICE_ENVIRONMENT";}else{echo "ADD OFFICE_ENVIRONMENT";}?></h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                           <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/office_environment') ?>">OFFICE ENVIRONMENT</a>
                        </li>
                        <li>
                            <a href="#"><?if(isset($office_environment)){echo "EDIT OFFICE_ENVIRONMENT";}else{echo "ADD OFFICE_ENVIRONMENT";}?></a>
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
                         <h4 class="m-t-0 header-title"><?if(isset($office_environment)){echo "EDIT OFFICE_ENVIRONMENT";}else{echo "ADD OFFICE_ENVIRONMENT";}?></h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                   
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Title</label>
                                        <div class="col-md-10">
                                           <input type="text" class="form-control" name="title" id="title" value="<?= isset($office_environment) ? set_value('title',$office_environment['title']) : set_value('title')?>" placeholder="Enter Title"><span class="text-danger"><?=$error['title'] ?? ''?></span> 
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Display Order</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" name="display_order" id="display_order" placeholder="Enter Display_Order" value="<?= isset($office_environment) ? set_value('display_order',$office_environment['display_order']) : set_value('display_order')?>">
                                            <span class="text-danger"><?=$error['display_order'] ?? ''?></span>
                                        </div> 
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Discription</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="form-control" name="discription" id="discription" placeholder="Enter Description"><?=isset($office_environment) ? set_value('discription',$office_environment['discription']):set_value('discription')?></textarea>
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