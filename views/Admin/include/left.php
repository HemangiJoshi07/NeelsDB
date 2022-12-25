<div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">
                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="<?= base_url('Admin/dashboard') ?>" <?php if ($pg == 'index'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-air-play"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/cms_page') ?>" <?php if ($pg == 'cms_page'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>Manage Cms_Page</a></li>               
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/home_banner') ?>" <?php if ($pg == 'home_banner'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>HomeBanner</a></li>               
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/topmenu')?>"<?php if ($pg == 'topmenu'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>Manage TopMenu</a></li>                 
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/category')?>"<?php if ($pg == 'category'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>Manage Category</a></li>                 
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/product')?>"<?php if ($pg == 'product'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>Manage Product</a></li>                 
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/testimonial')?>"<?php if ($pg == 'testimonial'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>TestiMonial</a></li>                   
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/office_environment')?>"<?php if ($pg == 'office'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>Office Environment</a></li>                 
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/general')?>"<?php if ($pg == 'general'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>General</a></li>                 
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/change_password')?>"<?php if ($pg == 'pwd'){echo "style='background-color: DodgerBlue;color:white !important;'";}?>><i class="fi-arrow-right"></i>Change Password</a></li>                 
                            </li>
                            <li>
                                <li><a href="<?= base_url('Admin/logout')?>" OnClick="return confirm('are you sure?');"><i class="mdi mdi-logout"></i>LOGOUT</a></li>
                            </li>
                        </ul>
                    </div>                  
                    <div class="clearfix"></div>
                </div>           

            </div>
    
            