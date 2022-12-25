<?php 
$pg='general';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title">EDIT GENERAL</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                           <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/general') ?>">GENERAL</a>
                        </li>
                        <li>
                            <a href="#">EDIT GENERAL</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
			</div>
            <?php if($_GET['id']){?>
            <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <strong>Well done!</strong> You successfully Edited General.
            </div>  
            </div>
            <?}?>
		</div>
        
                <div class="row">
                <div class="col-sm-12">
                <div class="card" >
                    <div class="card-body">
                         <h4 class="m-t-0 header-title">EDIT GENERAL</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                               <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Phone No</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone No" value="<?=set_value('phone_no',$general['phone_no'])?>">
                                            <span class="text-danger"><?=$error['phone_no'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?=set_value('email',$general['email'])?>">
                                            <span class="text-danger"><?=$error['email'] ?? ''?></span>
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Twitter</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Enter Twitter" value="<?= set_value('twitter',$general['twitter'])?>">
                                             <span class="text-danger"><?=$error['twitter'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">FaceBook</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter FaceBook" value="<?=set_value('facebook',$general['facebook'])?>">
                                             <span class="text-danger"><?=$error['facebook'] ?? ''?></span>
                                        </div>
                                    </div>
                                   
                                   <div class="form-group row">
                                        <label class="col-md-2 control-label">Pinterest</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="pinterest" id="pint" placeholder="Enter pinterest" value="<?=set_value('pinterest',$general['pinterest'])?>">
                                             <span class="text-danger"><?=$error['pinterest'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Footer Text</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="footer_text" id="footer_text" placeholder="Enter Footer Text" value="<?=set_value('footer_text',$general['footer_text'])?>">
                                             <span class="text-danger"><?=$error['footer_text'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"><?=set_value('address',$general['address'])?></textarea> 
                                             <span class="text-danger"><?=$error['address'] ?? ''?></span>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="btn btn-primary waves-effect m-t-20" name="Submit" id="Submit" value="Submit">  
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