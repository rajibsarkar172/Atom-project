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
                        <img src="<?php echo isset($slide->orginal_picture)?base_url($slide->orginal_picture):''; ?>" alt="<?php echo $slide->title1; ?>" height="500px" width="100%">
                        <div class="carousel-caption">
                            <div class="brc-img-contaner" style="text-align: right;">
                                <img src="/assets/img/logo.JPG" style="display: inline; height: auto; max-width: 292px;" alt="Your Team for all Things Cloud!" title="Your Team for all Things Cloud!">
                            </div>
<!--                            <h1 style="color: white;">Our Cloud Services</h1>
                            <div class="header-text" style="color: black;">Build and deploy even the most challenging cloud applications on budget and on time with an integrated team of architects, engineers and developers on your side.</div>-->
                        <div class="header-text1"  style="text-align: left;">
                    <a class="button fire chatIcon" style="color : red;"  href="http://localhost/atomcloudservices/#contact" title="Contact Us"><button class="btn info" style="background: transparent none repeat scroll 0 0;font-size: 16px; padding: 12px 60px; ">Lets talk to our experts</button></a>
                        </div>
                        </div>
                    </div>
                <?php } ?>
                <link href="<?php echo site_url('assets/css/style.css');?>" media="screen" rel="stylesheet" type="text/css">
                <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
                <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

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
    
   <section id="professional_service" style="background:#fafafa; padding-bottom:10px !important;">
    <div class="container" style="padding-top: 1px">
        <div class="row">
            
            <h1 class="text-center" style="color: blue;" > <b>S</b>ervices </span></h1>
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
                                <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($p_service->id))); ?>">        
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

      
      
      
<section id="cloud_solution" style="background:#d3d3d3; padding-bottom:10px !important;">
    <div class="container " style="padding-top: 10px">
        <div class="row">
            
            <h1 class="text-center" style="color: blue;"><b>C</b>loud Solutions</h1>
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
                                <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($c_solution->id))); ?>">        
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
    <div class="container " style="padding-top: 30px">
        <div class="row">
            
            <h1 class="text-center" style="color: blue;"><b>P</b>ricing </h1>
<!--           <?php
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
                                <a href="<?php echo site_url('welcome/services/' . str_replace(array('='), array('?'), ($c_service->id))); ?>">        
                                <?php } ?>    
                                    <?php echo $c_service->title;?>
                                </a>
                            </div>                
                        </div>
                   </div>    
               <?php } ?>  -->
        </div>
    </div>  
</section>   


<section id="features"  style="background:#FAFAFA; padding-bottom:20px !important;">
    <div class="container marg100" style="padding-top: 30px">
        <div class="row">
            
            <h1 class="text-center" style="color: blue;"><b>F</b>eatures</h1>
            <?php
                $count=  count($features);

               foreach ($features as $key=>$f_eatures) { ?>
                   <div class="<?php echo ($count==1)?"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-ms-12_marg col-ms-12":(($count==2)?(($key==0)?"col-md-4 col-md-offset-2 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12":"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"):"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"); ?>">
                        <div class="blog-main ver2">
                            <div class="blog-images">
                                <div class="post-thumbnail" style="padding:30px; background:#fafafa">
                                    <?php if ($f_eatures->thumb_picture) { ?>
                                       
                                        <a href="<?php echo site_url('welcome/features/' . str_replace(array('='), array('?'), ($f_eatures->id))); ?>">    
                                     
                                        <img src="<?php echo site_url($f_eatures->thumb_picture); ?>" alt="">
                                        </a>
                                    <?php } else { ?>
                                        
                                        <a href="<?php echo site_url('welcome/features/' . str_replace(array('='), array('?'), ($f_eatures->id))); ?>">    
                              
                                        <img src="<?php echo site_url('assets/img/deafult-image.jpg'); ?>" alt="">
                                        </a>
                                    <?php } ?>
                                    
                                    
                                </div>
                            </div>
                            <div class="blog-name text-center" style="background:#fafafa">
                                 
                                <a href="<?php echo site_url('welcome/features/' . str_replace(array('='), array('?'), $f_eatures->id)); ?>">        
                                
                                    <?php echo $f_eatures->title;?>
                                </a>
                                <?php echo $f_eatures->description;?>
                            </div>                
                        </div>
                   </div>    
               <?php } ?>
        </div>
    </div>  
</section>   




	
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

<!--    <section id="content">
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
                                </div> /.tab-content  
                            </div> /.media-body 
                        </div> /.media     
                    </div>/.tab-wrap               
                </div>/.col-sm-6

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

            </div>/.row
        </div>/.container
    </section>/#content-->


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
                    <form name="sentMessage" id="contactForm" class="contact_form" method="post" action="<?php echo  base_url('#contact');?>">
                        <div class="row">
                            <div class="col-md-6">
                                <?php 
                                    if ($this->session->flashdata('success'))
                                    {
                                        echo $this->session->flashdata('success');
                                    }
                                    if (validation_errors())
                                    {
                                        echo validation_errors('<div class="alert alert-warning">', '</div>');
                                    }
                                ?>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="company" class="form-control" autocomplete="off" placeholder="Your Company Name" id="company" required data-validation-required-message="Please enter your company name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>

                                 <button type="submit" class="btn btn-xl" name="contact_submit" value="submit" >Send Message</button>

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