<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('public/Admin_css');?>/assets/images/favicon.ico">
    <link href="<?php echo base_url('public/Admin_css'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('public/Admin_css'); ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/Admin_css'); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/Admin_css'); ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/Admin_css'); ?>/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <script src="<?php echo base_url('public/Admin_css'); ?>/assets/js/modernizr.min.js"></script>
</head>
<body class="bg-transparent">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrapper-page">
                            <div class="m-t-40 account-pages p-5 shadow">
                                <?php
                                    if(isset($id))
                                    { ?>
                                        <div class="alert alert-error" style="color:red;">
                                            <button data-dismiss="alert" class="close">�</button>
                                            <strong style="font-size:20px;"><?=$id?></strong>
                                        </div>    
                                <?}?>
                        <div class="m-t-10 account-pages">
                            <h4  class="text-center" style="font-size:35px; color: darkblue;">AdminForm</h4>
                            
                            <div class="account-content">
                                <form class="form-horizontal" method="post" action="<?= base_url('Admin/login') ?>">
                                <div class="form-group m-b-25">
                                    <div class="col-12">
                                        <label>UserName</label>
                                        <input type="text" class="form-control input-lg" placeholder="Enter UserName" id="username" name="username" value="">
                                        <span id="lblusername" class="error" style="font-size: 18px; color: red;"><b><?=form_error("username")?></b></span> 
                                    </div>
                                </div>
                                <div class="form-group m-b-25">
                                    <div class="col-12">
                                        <label>Password</label>
                                        <input type="password" class="form-control input-lg" placeholder="Enter Password" id="password" name="password" value="">
                                        <span id="lblpassword" class="error" style="font-size: 18px; color: red;"><b><?=form_error("password")?></b></span> 
                                    </div>
                                </div>
                           
                            <div class="form-group account-btn text-center m-t-10">
                                <div class="col-12">
                                  <input type="submit" name="Submit" id="Submit" value="Log In" class="btn w-lg btn-rounded btn-lg btn-primary waves-effect waves-light"> 
                                   <!-- <?php //echo anchor('Users/register/','sign up?','class="link-class"')?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
</section>
<script>
    var resizefunc = [];
</script>
<script src="<?php echo base_url('public/Admin_css');?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url('public/Admin_css');?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('public/Admin_css');?>/assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url('public/Admin_css');?>/assets/js/waves.js"></script>
<script src="<?php echo base_url('public/Admin_css');?>/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url('public/Admin_css');?>/assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url('public/Admin_css');?>/assets/js/jquery.core.js"></script>
<script src="<?php echo base_url('public/Admin_css');?>/assets/js/jquery.app.js"></script>
</body>
</html>        

