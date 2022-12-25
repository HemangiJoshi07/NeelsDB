<?php 
$pg='cms_page';
include('include/header.php')?>
<?include('include/left.php')?>
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title">EDIT CMS PAGE</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                           <a href="<?= site_url('Admin/dashboard') ?>">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="<?= site_url('Admin/cms_page') ?>">CMS PAGE</a>
                        </li>
                        <li>
                            <a href="#">EDIT CMS PAGE</a>
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
                         <h4 class="m-t-0 header-title">EDIT CMS PAGE</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                   
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Page Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="page_name" id="page_name" placeholder="Enter Page Name" value="<?=set_value('page_name',$cms_page['page_name'])?>"><span class="text-danger"><?=$error['page_name'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="form" />
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Page Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="page_title" id="page_title" placeholder="Enter page_title" value="<?=set_value('page_title',$cms_page['page_title'])?>">
                                            <span class="text-danger"><?=$error['page_title'] ?? ''?></span>
                                        </div> 
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Enter meta_title" value="<?=set_value('meta_title',$cms_page['meta_title'])?>">
                                             <span class="text-danger"><?=$error['meta_title'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" placeholder="Enter meta_keyword" value="<?= set_value('meta_keyword',$cms_page['meta_keyword'])?>">
                                             <span class="text-danger"><?=$error['meta_keyword'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Meta Desc</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="meta_desc" id="meta_desc" placeholder="Enter meta_desc" value="<?=set_value('meta_desc',$cms_page['meta_desc'])?>">
                                             <span class="text-danger"><?=$error['meta_desc'] ?? ''?></span>
                                        </div>
                                    </div>
                           
                                   <div class="form-group row">
                                        <label class="col-md-2 control-label">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" id="title" value="<?=set_value('title',$cms_page['title'])?>">
                                             <span class="text-danger"><?=$error['title'] ?? ''?></span>
                                        </div>
                                    </div>

                                    <?if($cms_page['id']==2||$cms_page['id']==3||$cms_page['id']==4){?>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Page Desc</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="summernote" name="page_desc" id="page_desc"><?=set_value('page_desc', $cms_page['page_desc'])?></textarea>
                                             <span class="text-danger"><?=$error['page_desc'] ?? ''?></span>
                                        </div>
                                    </div>
                                    <?}?>
                                    

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