<div class="top_block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left">
                <div class="contant-top-block">
                    <ul class="contact-top">
                        <li><i class="icon-basic-home"></i> <?php echo $setting->address; ?></li>
                        <li><i class="icon-basic-smartphone"></i> <?php echo $setting->phone_fax; ?></li>
                        <li><i class="icon-basic-mail" style="top: 5px;"></i> <?php echo $setting->email; ?></li>
                    </ul>
                </div>
            </div
            <!--<div class="col-lg-6 col-md-5 col-sm-5 col-xs-6 pull-right">
                <ul class="social-links">
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-tumblr"></i></a></li>
                    <li><a href="#"><i class="ti-dropbox"></i></a></li>
                    <li><a href="#"><i class="ti-dribbble"></i></a></li>
                    <li><a href="#"><i class="ti-apple"></i></a></li>                       
                    <li><a href="#"><i class="ti-vimeo"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>                         
                </ul>
            </div>-->
        </div>
    </div>
</div>
<header>
    <div class="page_head classic-vers">
        <div id="nav-container" class="nav-container" style="height: auto;">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pull-left">
                            <div class="logo">
                                <a href="<?php echo site_url();?>">
                                    <?php if($setting->logo){?>
                                    <img class="pull-left" src="<?php echo site_url($setting->logo);?>" alt="<?php echo $setting->slogan?>">
                                    <?php } else { ?>
                                    <span class="pull-left logo-text classic-vers"><?php echo $setting->slogan?></span>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6 pull-right">
                            <div class="menu menu-wrapper classic-vers">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                                <div class="navbar-collapse collapse">
                                    <div class="menu-main-menu-container">
                                        <ul>
                                            <!--li role="presentation" <?php echo($active == 'home') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo site_url(); ?>">Professional Services</a></li>
                                            <li role="presentation" <?php echo($active == 'about') ? "class='current-menu-item'" : ""; ?>  ><a href="<?php echo site_url('about'); ?>" >Cloud Solutions</a></li-->
                                            <li><a href="#">Professional Services</a>
                                                <?php if ($menu_professional) { ?>
                                                    <ul class="sub-menu">
                                                        <?php foreach ($menu_professional as $menu_proff) { if($menu_proff->link){?>
                                                        <li><a href="<?php echo $menu_proff->link; ?>" target="_blank"><?php echo $menu_proff->title; ?></a></li>         
                                                        <?php } else { ?>                                    
                                                        <li><a href="<?php echo site_url('welcome/event/' . str_replace(array('='), array('?'), base64_encode($menu_proff->id))); ?>"><?php echo $menu_proff->title; ?></a></li>         
                                                        <?php }} ?>    
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                            <li><a href="#">Cloud Solution</a>
                                                <?php if ($menu_cloud_solution) { ?>
                                                    <ul class="sub-menu">
                                                        <?php foreach ($menu_cloud_solution as $menu_c_sol) { if($menu_c_sol->link){?>
                                                        <li><a href="<?php echo $menu_c_sol->link; ?>" target="_blank"><?php echo $menu_c_sol->title; ?></a></li>         
                                                        <?php } else { ?>                                    
                                                        <li><a href="<?php echo site_url('welcome/event/' . str_replace(array('='), array('?'), base64_encode($menu_c_sol->id))); ?>"><?php echo $menu_c_sol->title; ?></a></li>         
                                                        <?php }} ?>    
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                            <li><a href="#">Cloud Services</a>
                                                <?php if ($menu_cloud_service) { ?>
                                                    <ul class="sub-menu">
                                                        <?php foreach ($menu_cloud_service as $menu_c_serv) { if($menu_c_serv->link){?>
                                                        <li><a href="<?php echo $menu_c_serv->link; ?>" target="_blank"><?php echo $menu_c_serv->title; ?></a></li>         
                                                        <?php } else { ?>                                    
                                                        <li><a href="<?php echo site_url('welcome/event/' . str_replace(array('='), array('?'), base64_encode($menu_c_serv->id))); ?>"><?php echo $menu_c_serv->title; ?></a></li>         
                                                        <?php }} ?>    
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                            <li role="presentation" <?php echo($active == 'about') ? "class='current-menu-item'" : ""; ?>  ><a href="<?php echo site_url('about'); ?>" >About Us</a></li>
                                            <li role="presentation" <?php echo($active == 'contact') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo site_url('contact'); ?>">Contact Us</a></li>
                                            
<!--                                                <li>
                                                                <form class="navbar-form navbar-left">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Search">
                                                            </div>
                                                                <button type="submit" class="btn btn-default">Submit</button>
                                                                </form>
                                                    
                                                </li>-->
                                             
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>