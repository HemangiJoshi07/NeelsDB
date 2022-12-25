<?php
$pg='cms_page';
include('include/header.php');
include('include/left.php');?>
<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
       <div class="col-12">
        <div class="page-title-box">
          <h4 class="page-title">CMS PAGE</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="Admin/dashboard">DASHBOARD</a>
            </li><li>
              <a href="#">CMS PAGE</a>
            </li>
          </ol>
          <div class="clearfix"></div>
        </div>
      </div>
      <?php if($_GET['id']){?>
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You Successfully Edited CMS.
          </div>  
        </div>
      <?}?>
    </div>
  </div>  
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h4 class="m-t-10 header-title"><b>Cms Page</b></h4><br>
             
            <table id="datatable-colvid" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th style="width:5%;">No.</th>
                  <th>Page Name</th>
                  <th>Page Title</th>
                  <th style="width:5%;">Edit</th>
                </tr>
              </thead>  
              <?php
              $i=1;
              foreach($fetch as $row){
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row['page_name']; ?></td>
                  <td><?php echo $row['page_title']; ?></td>    
                  <td><a href="<?php echo base_url('Admin/cms_page/form/').$row['id']?>" class="btn btn-icon btn-custom"><i class="fa fa-pencil"></i></a></td>
                 
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