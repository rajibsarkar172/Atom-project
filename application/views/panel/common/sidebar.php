<ul class="nav" id="side-menu">
    <li>
        <a href="<?php echo site_url('admin/panel');?>"><i class="fa fa-dashboard fa-fw"></i> Panel</a>
    </li>
    <li>
        <a href="<?php echo site_url('admin/panel/homepage');?>"><i class="fa fa-home fa-fw"></i> Home Page</a>
    </li>
    
    <li>
        <a href="#"><i class="fa fa-picture-o fa-fw"></i> Slider<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo site_url('admin/slider/add');?>">Add Slide</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/slider/manage');?>">Manage Slide</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/slider/trash');?>">Trash</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    
    <li>
        <a href="#"><i class="fa fa-puzzle-piece fa-fw"></i> Features<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo site_url('admin/features/create');?>">Create Content</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/features/manage');?>">Manage Content</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/features/trash');?>">Trash</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-calendar fa-fw"></i> Services<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo site_url('admin/services/create');?>">Create Service</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/services/manage');?>">Manage Service</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/services/trash');?>">Trash</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-puzzle-piece fa-fw"></i> About Content<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo site_url('admin/aboutcontent/create');?>">Create Content</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/aboutcontent/manage');?>">Manage Content</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/aboutcontent/trash');?>">Trash</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="<?php echo site_url('admin/contact_setting');?>"><i class="fa fa-newspaper-o fa-fw"></i> Contact Form Setting</a>        
    </li>
    <?php if($this->session->userdata('user_type')=='Administrator'){
      ?>
        <li>
        <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo site_url('admin/users/add');?>">Create User</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/users/manage');?>">Manage User</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/users/trash');?>">Trash</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
   <?php } ?>

    <li>
        <a href="<?php echo site_url('admin/settings')?>"><i class="fa fa-cog fa-fw"></i> Settings</a>
    </li>                        
</ul>