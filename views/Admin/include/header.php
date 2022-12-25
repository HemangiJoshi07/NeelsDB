<?php
$name=$this->session->userdata('admin_nelsdb');
if($name!=1)
{
    redirect('Admin');
}
?>
<!DOCTYPE html>
<html lang="en"> 
<!-- Mirrored from coderthemes.com/codefox/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 10:08:39 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('public/Admin_css');?>/assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="<?php echo base_url('public/Admin_css');?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/Admin_css');?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/Admin_css');?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/Admin_css');?>/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/Admin_css');?>/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />
        <script src="<?php echo base_url('public/Admin_css');?>/assets/assets/js/modernizr.min.js"></script>
        
       
    </head>


    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
                    <!-- Image logo -->
                    <a href="index.html" class="logo">
                        <span>
                            <img src="<?php echo base_url('public/Admin_css');?>//assets/images/logo.png" alt="" height="20">
                        </span>
                        <i>
                            <img src="<?php echo base_url('public/Admin_css');?>/assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-left">
                            <li>
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>

                           
                        </ul>

                        <!-- Right(Notification) -->
                        
                        </ul> <!-- end navbar-right -->

                    </div><!-- end container-fluid -->
                </div><!-- end navbar -->
            </div>