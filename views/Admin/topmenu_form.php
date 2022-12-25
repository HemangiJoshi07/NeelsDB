<?$pg='topmenu';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title"><?if(isset($topmenu)) { echo "EDIT TOPMENU";} else { echo "ADD TOPMENU";}?></h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                             <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/topmenu') ?>">TOPMENU</a>
                        </li>
                        <li>
                            <a href="#"><?if(isset($topmenu)) { echo "EDIT TOPMENU";} else { echo "ADD TOPMENU";}?></a>
            
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
                         <h4 class="m-t-0 header-title"><?if(isset($topmenu)) { echo "EDIT TOPMENU";} else { echo "ADD TOPMENU";}?></h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                   
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?= isset($topmenu) ? set_value('name',$topmenu['name']): set_value('name')?>"><span class="text-danger"><?=$error['name'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Is Active</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="is_active" id="is_active">
                                                <option value="0" <?php if($topmenu['is_active']=="0")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($topmenu['is_active']=="1")echo 'selected';?>>yes</option>
                                            </select>
                                            <span class="text-danger"><?=$error['is_active'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Display Order</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" name="display_order" id="display_order" placeholder="Enter display_order" value="<?= isset($topmenu) ? set_value('display_order',$topmenu['display_order']): set_value('display_order')?>">
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