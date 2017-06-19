<!DOCTYPE html>
<html lang="en">  
  <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title><?php echo $setting->site_title;?></title>
        <link rel="shortcut icon" href="<?php echo base_url('uploads/settings/cloud-symbol.png')?>" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="Pioneer - responsive and retina ready template" name="description">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        
        <!-- JS FILES -->
        <script type="text/javascript" src="<?php echo site_url('assets/js/jquery-2.2.4.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/modernizr.custom.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/isotope.pkgd.min.js');?>"></script>
        <!-- CSS FILES -->
        <link href="<?php echo site_url('assets/css/style.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/css/responsive.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/css/nivo-lightbox.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/css/layouts/default.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/main.css')?>" rel="stylesheet">
    </head>
   <body class="layout-responsive">   
      
   <!-- Fixed navbar -->
   
<!--            <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
                <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>-->


<!--<aside id="sticky-social">
		<ul>
			<li><a href="#" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
			<li><a href="#" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
			<li><a href="#" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
			<li><a href="#" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
			<li><a href="#" class="entypo-instagrem" taget="_blank"><span>Instagram</span></a></li>
			<li><a href="#" class="entypo-stumbleupon" target="_blank"><span>StumbleUpon</span></a></li>
			<li><a href="#" class="entypo-pinterest" target="_blank"><span>Pinterest</span></a></li>
			<li><a href="#" class="entypo-flickr" target="_blank"><span>Flickr</span></a></li>
			<li><a href="#" class="entypo-tumblr" target="_blank"><span>Tumblr</span></a></li>
		</ul>
	</aside>-->
   <header>
    <div class="page_head classic-vers">
        <div id="nav-container" class="nav-container" >
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 pull-left">
                            <div class="logo">
                                <a href="<?php echo site_url();?>">
                                    <?php if($setting->logo){?>
                                    <img class="pull-left logo_image" src="<?php echo site_url($setting->logo);?>" alt="<?php echo $setting->slogan?>">
                                    <?php } else { ?>
                                    <span class="pull-left logo-text classic-vers"><?php echo $setting->slogan?></span>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 pull-right">
                            <div class="menu menu-wrapper classic-vers">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                                <div class="navbar-collapse collapse">
                                    <div class="menu-main-menu-container">
                                        <ul>
                                                <!--li role="presentation" <?php echo($active == 'home') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo site_url(); ?>">Professional Services</a></li>
                                                <li role="presentation" <?php echo($active == 'about') ? "class='current-menu-item'" : ""; ?>  ><a href="<?php echo site_url('about'); ?>" >Cloud Solutions</a></li-->
                                            <li><a href="http://localhost/atomcloudservices/"><span>Home</span></a>
                                            <li><a href="#">Services</a>
                                                <?php if ($menu_professional) { ?>
                                                    <ul class="sub-menu">
                                                        <?php foreach ($menu_professional as $menu_proff) { if($menu_proff->link){?>
                                                        <li><a href="<?php echo $menu_proff->link; ?>" target="_blank"><?php echo $menu_proff->title; ?></a></li>         
                                                        <?php } else { ?>                                    
                                                        <li><a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($menu_proff->id))); ?>"><?php echo $menu_proff->title; ?></a></li>         
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
                                                        <li><a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($menu_c_sol->id))); ?>"><?php echo $menu_c_sol->title; ?></a></li>         
                                                        <?php }} ?>    
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                            
                                            <li><a href="#">Pricing</a>
<!--                                            <li><a href="#">Cloud Services</a>
                                                <?php if ($menu_cloud_service) { ?>
                                                    <ul class="sub-menu">
                                                        <?php foreach ($menu_cloud_service as $menu_c_serv) { if($menu_c_serv->link){?>
                                                        <li><a href="<?php echo $menu_c_serv->link; ?>" target="_blank"><?php echo $menu_c_serv->title; ?></a></li>         
                                                        <?php } else { ?>                                    
                                                        <li><a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($menu_c_serv->id))); ?>"><?php echo $menu_c_serv->title; ?></a></li>         
                                                        <?php }} ?>    
                                                    </ul>
                                                <?php } ?>
                                            </li>-->
<!--                                            <li><a href="#">Features</a>
                                                <?php if ($menu_features) { ?>
                                                    <ul class="sub-menu">
                                                        <?php foreach ($menu_features as $menu_f_eatures) { if($menu_f_eatures->link){?>
                                                        <li><a href="<?php echo $menu_f_eatures->link; ?>" target="_blank"><?php echo $menu_f_eatures->title; ?></a></li>         
                                                        <?php } else { ?>                                    
                                                        <li><a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($menu_f_eatures->id))); ?>"><?php echo $menu_f_eatures->title; ?></a></li>         
                                                        <?php }} ?>    
                                                    </ul>
                                                <?php } ?>
                                            </li>-->
                                            
                                            <li role="presentation" <?php echo($active == 'about') ? "class='current-menu-item'" : ""; ?>  ><a href="<?php echo site_url('welcome/about'); ?>"> About Us</a></li>
                                            <li role="presentation" <?php echo($active == 'contact') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo site_url().'#contact'; ?>">Contact Us</a></li>
                                            
<!--                                            <li>
                                                <form class="navbar-form navbar-left search_box">
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
   
    <?php $this->load->view($subview);?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Atom Ap Limited 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="<?php echo site_url('welcome/privacy_policy'); ?>">Privacy Policy</a>
                        </li>
                        <li><a href="<?php echo site_url('welcome/terms_of_use'); ?>">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
     
          
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo site_url('assets/js/jquery-2.2.4.min.js');?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--    <script src="js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/retina.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/nivo-lightbox.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/waypoints.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/jquery.bxslider.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/sticky.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/jquery.parallax-1.1.3.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/jcarousel.responsive.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/jquery.jcarousel.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/main.js');?>"></script>
        <!--<script type="text/javascript" src="<?php echo site_url('assets/js/contacts.js');?>"></script>-->

  </body>
</html>
