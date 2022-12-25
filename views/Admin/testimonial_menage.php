<?
$pg='testimonial';
include('include/header.php');
include('include/left.php');?>
<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
       <div class="col-12">
        <div class="page-title-box">
          <h4 class="page-title">TESTIMONIAL</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="Admin/dashboard">DASHBOARD</a>
            </li><li>
              <a href="#">TESTIMONIAL</a>
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
            <strong>Well done!</strong> You Successfully Added TestiMonial.
          </div>  
        </div>
      <?}?>
      <?php if($_GET['id']==2){?>
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You Successfully Edited TestiMonial.
          </div>  
        </div>
      <?}?>
      <?php if($_GET['id']==3){?>
        <div class="col-md-12">
          <div class="alert alert-danger alert-dismissible fade show text-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="text-danger">Well done!</strong> You Successfully Deleted TestiMonial.
          </div>  
        </div>
      <?}?>
    </div>
  </div>  
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h4 class="m-t-10 header-title"><b>Testimonial</b></h4><br>
            <a href="<?= base_url('Admin/testimonial/form')?>" class ="btn btn-custom waves-effect waves-light btn-lg m-b-15" style="background:#007BFF;color:white">Add testimonial</a> 
            <table id="datatable-colvid" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th style="width:5%;">No.</th>
                  <th>Name</th>
                  <th>Destignation</th>
                  <th style="width:10%;">Display Order</th>
                  <th style="width:5%;">Edit</th>
                  <th style="width:5%;">Delete</th>
                </tr>
              </thead>  
              <?php
              $i=1;
              foreach($fetch as $row){
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['designation']; ?></td>
                  <td><?php echo $row['display_order']; ?></td>
                 
                  <td><a href="<?php echo base_url('Admin/testimonial/form/').$row['id'];?>" class="btn btn-icon waves-light waves-effect btn-custom"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="<?php echo base_url('Admin/testimonial/delete/').$row['id'];?>" onclick="return confirm('Are you sure you want Delete Testimonial..??')" class="btn btn-icon waves-light waves-effect btn-danger"><i class="fa fa-trash"></i></a></td>
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