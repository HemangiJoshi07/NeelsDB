<?php 
$pg='pwd';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title">CHANGE PASSWORD</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                           <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/change_password') ?>">CHANGE PASSWORD</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
			</div>
            <?php if($_GET['id']==1){?>
            <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <strong></strong> Old PassWord Is Not Matched.
            </div>  
            </div>
            <?}?>
            <?php if($_GET['id']==2){?>
            <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <strong></strong> Password Is Updated Successfully
            </div>  
            </div>
            <?}?>
		</div>
        
                <div class="row">
                <div class="col-sm-12">
                <div class="card" >
                    <div class="card-body">
                         <h4 class="m-t-0 header-title">CHANGE PASSWORD</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                               <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">UserName</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="<?=$admin['username']?>" readonly>
                                            
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Old Password</label>
                                        <div class="col-md-10">
                                            <input type="Password" class="form-control" name="password" id="password" placeholder="Enter Old Password" value="<?
                                            ?>">
                                            <span class="text-danger"><?=$error['password'] ?? ''?></span>
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">New Password</label>
                                        <div class="col-md-10">
                                            <input type="Password" class="form-control" name="pwd" id="pwd" placeholder="Enter New Password" value="<?//= set_value('twitter',$general['twitter'])?>">
                                             <span class="text-danger"><?=$error['pwd'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Confirm Password</label>
                                        <div class="col-md-10">
                                            <input type="Password" class="form-control" name="cnpwd" id="cnpwd" placeholder="Enter Confirm Password" value="<?//=set_value('facebook',$general['facebook'])?>">
                                             <span class="text-danger"><?=$error['cnpwd'] ?? ''?></span>
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