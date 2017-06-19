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
        <link href="<?php echo site_url('assets/rs-plugin/css/settings.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/rs-plugin/css/layers.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/rs-plugin/css/navigation.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/css/style.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/css/responsive.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/css/nivo-lightbox.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url('assets/css/layouts/default.css');?>" media="screen" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/main.css')?>" rel="stylesheet">
    </head>
   <body>   
      
   <!-- Fixed navbar -->
   <header>
    <div class="page_head classic-vers">
        <div id="nav-container" class="nav-container" style="height: auto;">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 pull-left">
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
                        <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 pull-right">
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
                                            
                                                <li>
                                                                <form class="navbar-form navbar-left">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Search">
                                                            </div>
                                                                <button type="submit" class="btn btn-default">Submit</button>
                                                                </form>
                                                    
                                                </li>
                                             
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
    <section id="slider-image">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                foreach ($slides as $index => $value) {
                    ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $index ?>" class="<?php echo ($index == 0) ? "active" : ""; ?>"></li>
                <?php } ?>				
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <?php
                foreach ($slides as $index => $slide) {
                    ?>
                    <div class="item <?php echo ($index == 0) ? "active" : ""; ?>">
                        <img src="<?php echo $slide->orginal_picture; ?>" alt="<?php echo $slide->title1; ?>" width="100%">
                        <div class="carousel-caption">

                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>
    
   <section id="professional_service" style="background:#fafafa; padding-bottom:20px !important;">
    <div class="container marg100" style="padding-top: 30px">
        <div class="row">
            
            <h1 class="text-center"><u> Professional Service</u> </span></h1>
            <?php
                $count=  count($professional_service);

               foreach ($professional_service as $key=>$p_service) { ?>
                   <div class="<?php echo ($count==1)?"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-ms-12_marg col-ms-12":(($count==2)?(($key==0)?"col-md-4 col-md-offset-2 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12":"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"):"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"); ?>">
                        <div class="blog-main ver2">
                            <div class="blog-images">
                                <div class="post-thumbnail" style="padding:30px; background:#fafafa">
                                    <?php if ($p_service->thumb_picture) { ?>
                                        <?php if ($p_service->link) { ?>
                                        <a href="<?php echo $p_service->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($p_service->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url($p_service->thumb_picture); ?>" alt="">
                                        </a>
                                    <?php } else { ?>
                                        <?php if ($p_service->link) { ?>
                                        <a href="<?php echo $p_service->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($p_service->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url('assets/img/deafult-image.jpg'); ?>" alt="">
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="blog-name text-center" style="background:#fafafa">
                                <?php if ($p_service->link) { ?>
                                <a href="<?php echo $p_service->link; ?>">
                                <?php } else { ?>    
                                <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), base64_encode($p_service->id))); ?>">        
                                <?php } ?>    
                                    <?php echo $p_service->title;?>
                                </a>
                            </div>                
                        </div>
                   </div>    
               <?php } ?>
        </div>
    </div>  
</section>  

      
      
      
<section id="cloud_solution" style="background:#d3d3d3; padding-bottom:20px !important;">
    <div class="container marg100" style="padding-top: 30px">
        <div class="row">
            
            <h1 class="text-center"><u> Cloud Solutions</u> </h1>
            <?php
                $count=  count($cloud_solution);

               foreach ($cloud_solution as $key=>$c_solution) { ?>
                   <div class="<?php echo ($count==1)?"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-ms-12_marg col-ms-12":(($count==2)?(($key==0)?"col-md-4 col-md-offset-2 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12":"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"):"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"); ?>">
                        <div class="blog-main ver2">
                            <div class="blog-images">
                                <div class="post-thumbnail" style="padding:30px; background:#fafafa">
                                    <?php if ($c_solution->thumb_picture) { ?>
                                        <?php if ($c_solution->link) { ?>
                                        <a href="<?php echo $c_solution->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($c_solution->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url($c_solution->thumb_picture); ?>" alt="">
                                        </a>
                                    <?php } else { ?>
                                        <?php if ($c_solution->link) { ?>
                                        <a href="<?php echo $c_solution->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($c_solution->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url('assets/img/deafult-image.jpg'); ?>" alt="">
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="blog-name text-center" style="background:#fafafa">
                                <?php if ($c_solution->link) { ?>
                                <a href="<?php echo $c_solution->link; ?>">
                                <?php } else { ?>    
                                <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), base64_encode($c_solution->id))); ?>">        
                                <?php } ?>    
                                    <?php echo $c_solution->title;?>
                                </a>
                            </div>                
                        </div>
                   </div>    
               <?php } ?>
        </div>
    </div>  
</section>  
      
      
<section id="cloud_service"  style="background:#fafafa; padding-bottom:20px !important;">
    <div class="container marg100" style="padding-top: 30px">
        <div class="row">
            
            <h1 class="text-center"> <u>Cloud Services </u></h1>
            <?php
                $count=  count($cloud_service);

               foreach ($cloud_service as $key=>$c_service) { ?>
                   <div class="<?php echo ($count==1)?"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-ms-12_marg col-ms-12":(($count==2)?(($key==0)?"col-md-4 col-md-offset-2 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12":"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"):"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"); ?>">
                        <div class="blog-main ver2">
                            <div class="blog-images">
                                <div class="post-thumbnail" style="padding:30px; background:#fafafa">
                                    <?php if ($c_service->thumb_picture) { ?>
                                        <?php if ($c_service->link) { ?>
                                        <a href="<?php echo $c_service->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($c_service->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url($c_service->thumb_picture); ?>" alt="">
                                        </a>
                                    <?php } else { ?>
                                        <?php if ($c_service->link) { ?>
                                        <a href="<?php echo $c_service->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($c_service->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url('assets/img/deafult-image.jpg'); ?>" alt="">
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="blog-name text-center" style="background:#fafafa">
                                <?php if ($c_service->link) { ?>
                                <a href="<?php echo $c_service->link; ?>">
                                <?php } else { ?>    
                                <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), base64_encode($c_service->id))); ?>">        
                                <?php } ?>    
                                    <?php echo $c_service->title;?>
                                </a>
                            </div>                
                        </div>
                   </div>    
               <?php } ?>
        </div>
    </div>  
</section>   
   
      <section id="features" style="background:#fafafa; padding-bottom:20px !important;">
    <div class="container marg100" style="padding-top: 30px">
        <div class="row">
            
            <h1 class="text-center"><u>features</u> </span></h1><!--
            <?php
                $count=  count($features);

               foreach ($features as $key=>$f_eatures) { ?>
                   <div class="<?php echo ($count==1)?"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-ms-12_marg col-ms-12":(($count==2)?(($key==0)?"col-md-4 col-md-offset-2 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12":"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"):"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"); ?>">
                        <div class="blog-main ver2">
                            <div class="blog-images">
                                <div class="post-thumbnail" style="padding:30px; background:#fafafa">
                                    <?php if ($f_eatures->thumb_picture) { ?>
                                        <?php if ($f_eatures->link) { ?>
                                        <a href="<?php echo $f_eatures->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($f_eatures->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url($f_eatures->thumb_picture); ?>" alt="">
                                        </a>
                                    <?php } else { ?>
                                        <?php if ($f_eatures->link) { ?>
                                        <a href="<?php echo $f_eatures->link; ?>" target="_blank">
                                        <?php } else { ?>
                                        <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($f_eatures->id))); ?>">    
                                        <?php } ?>
                                        <img src="<?php echo site_url('assets/img/deafult-image.jpg'); ?>" alt="">
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="blog-name text-center" style="background:#fafafa">
                                <?php if ($f_eatures->link) { ?>
                                <a href="<?php echo $f_eatures->link; ?>">
                                <?php } else { ?>    
                                <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), $p_service->id)); ?>">        
                                <?php } ?>    
                                    <?php echo $f_eatures->title;?>
-->                                </a>
                            </div>                
                        </div>
                   </div>    <!--
               <?php } ?>
-->        </div><!--
-->    </div>  <!--
--></section>
	
<!--    <section id="feature">
        <div class="container">
           <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="color:#FFFFFF" class="section-heading">Features</h2>
                    <h3 style="color:#FFFFFF" class="section-subheading text-muted">AtomAp Limited is providing the following serivices for the clients of local and international. We are providing 
services successfully and our clients are so pleased on us.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img class="img-circle" src="<?php echo base_url();?>public/images2.jpg" alt="Generic placeholder image" width="100" height="100">
                    <h4 style="color:#FFFFFF" class="service-heading">Cloud Service</h4>
                    <p style="color:#FFFFFF" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                     <img class="img-circle" src="<?php echo base_url();?>public/images3.jpg" alt="Generic placeholder image" width="100" height="100">
                    <h4 style="color:#FFFFFF" class="service-heading">Professional Service</h4>
                    <p style="color:#FFFFFF" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                     <img class="img-circle" src="<?php echo base_url();?>public/images4.jpg" alt="Generic placeholder image" width="100" height="100">
                    <h4 style="color:#FFFFFF" class="service-heading">Cloud Solution</h4>
                    <p style="color:#FFFFFF" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
			
        </div>/.container
    </section>/#feature-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Mission</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Vission</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Service Process</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane active in" id="tab1">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Mission</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade " id="tab2">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Vission</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                     </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="<?php echo base_url();?>public/images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media ">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="<?php echo base_url();?>public/images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->


     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>

                                 <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>

                                 <button type="submit" class="btn btn-xl">Send Message</button>

                            </div>
                            <div class="col-md-6">
                              
                            <div style="color:#FFFFFF; margin-left:100px" class="">
                                <address>
                                    <h5 style="color:red;">Bangladesh Office</h5>
                                    <p>House 8-A/10, Suite 5B, 5th Floor, <br>
                                    Road 13, Doreen Tower,</p>
                                    <p>Phone:+88 01819250309<br>
                                    Email Address:info@atomapgroup.com</p>
                                </address>

                                <address>
                                    <h5 style="color:red;">Japan Office</h5>
                                    <p>5-9 Minami-Fujisawa Asahi-Seimei Bldg,<br>
                                    8F, Fujisawa-shi, Kanagawa 251-8543, JAPAN.</p>                                
                                    <p>Phone:+81-466-29-1248<br>
                                    </p>
                                </address>
                            </div>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; AtomAp Limited 2017</span>
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
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
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
    <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/jquery.themepunch.tools.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/jquery.themepunch.revolution.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.actions.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.carousel.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.kenburn.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.migration.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.navigation.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.parallax.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/rs-plugin/js/extensions/revolution.extension.video.min.js');?>"></script>
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

  </body>
</html>