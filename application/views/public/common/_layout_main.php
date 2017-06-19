<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title><?php echo $setting->site_title;?></title>
        <meta content="Pioneer - responsive and retina ready template" name="description">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <!--<link href="assets/images/favicon.png" rel="shortcut icon"/>
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144x144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-precomposed.png" />-->
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
    </head>
    <body>
        <div class="wrapper multi-purp">
            <?php 
                $this->load->view('public/common/_page_head');
                $this->load->view('public/common/_page_slider');
                $this->load->view($subview);
                $this->load->view('public/common/_page_tail');
            ?>
        </div>
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