<?php
$pg='index';
include('include/header.php');
include('include/left.php');
?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title" class="font-16">Welcome Admin !</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="active">
                                Dashboard
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
         <!-- end row -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card widget-box-two widget-two-purple">
                    <div class="card-body">
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase text-white font-600 font-secondary text-overflow" title="Statistics">total category</p>
                            <h2 class="text-white"><span data-plugin="counterup"><?=$category;?></span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card widget-box-two widget-two-info">
                    <div class="card-body">
                        <div class="wigdet-two-content">
                            <p class="m-0 text-white text-uppercase font-600 font-secondary text-overflow" title="User Today">total products</p>
                            <h2 class="text-white"><span data-plugin="counterup"><?=$product;?></span></h2>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
       </div>
    </div>
</div>                        
<?include('include/footer.php');?>