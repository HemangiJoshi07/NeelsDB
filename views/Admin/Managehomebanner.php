<?
$pg='home_banner';
include('include/header.php');
include('include/left.php');?>
<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
       <div class="col-12">
        <div class="page-title-box">
          <h4 class="page-title">HOME BANNER</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="Admin/dashboard">DASHBOARD</a>
            </li><li>
              <a href="#">HOME BANNER</a>
            </li>
          </ol>
          <div class="clearfix"></div>
        </div>
      </div>
      <?php if($_GET['id']==1){?>
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You Successfully Added Home Banner.
          </div>  
        </div>
      <?}?>
      <?php if($_GET['id']==2){?>
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You Successfully Edited Home Banner.
          </div>  
        </div>
      <?}?>
      <?php if($_GET['id']==3){?>
        <div class="col-md-12">
          <div class="alert alert-danger alert-dismissible fade show text-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="text-danger">Well done!</strong> You Successfully Deleted Home Banner.
          </div>  
        </div>
      <?}?>
    </div>
  </div>  
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h4 class="m-t-10 header-title"><b>Home Banner</b></h4><br>
            <a href="<?= site_url('Admin/home_banner/form')?>" class ="btn btn-custom waves-effect waves-light btn-lg m-b-15" style="background:#007BFF;color:white">Add Home Banner</a> 
            <table id="datatable-colvid" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th style="width:5%;">No.</th>
                  <th style="width:25%;">Lebel</th>
                  <th>Title</th>
                  <th style="width:20%;">Image</th>
                  <th style="width:5%;">Edit</th>
                  <th style="width:5%;">Delete</th>
                </tr>
              </thead>  
              <?php
              $i=1;
              foreach($fetch as $row){
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row['lebel'];?> </td>
                  <td><?php echo $row['title'];?> </td>
                  <td><img src="<?php echo base_url($row['image']) ?>" style="width:100%;height:130px;"> </td>
                  <td><a href="<?php echo base_url('Admin/home_banner/form/').$row['id']?>" class="btn btn-icon btn-custom"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="<?php echo base_url('Admin/home_banner/delete/').$row['id']?>" class="btn btn-icon  btn-danger" OnClick="return confirm('Are you sure you want to Delete this Banner??')"><i class="fa fa-trash"></i></a></td>
                </tr>
                <? 
              $i++; } 
              ?> 
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<?include('include/footer.php')?>