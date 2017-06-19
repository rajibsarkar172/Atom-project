<?php foreach ($welcomenote as $welcome) { ?>
<div class="container marg50">
    <div class="row">
            <?php if ($welcome->orginal_picture) { ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="lady-img"><img src="<?php echo site_url($welcome->orginal_picture) ?>" alt="<?php echo $welcome->title; ?>" width="100%"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 marg50 col-ms-12_marg50">
            <?php } else { ?>    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
                <?php } ?>    
                <div class="present-block-name"><?php echo $welcome->title; ?></div>
                <div class="present-block-line"></div>
                <div class="col-lg-12"><?php echo $welcome->description; ?></div>
            </div>
        </div>
    </div>
<?php } ?>
<?php if($events){ ?>
<section style="background:#fafafa; padding-bottom:20px !important;">
<div class="container marg100" style="padding-top: 30px">
    <div class="row">
        <?php
            $count=  count($events);

           foreach ($events as $key=>$event) { ?>
               <div class="<?php echo ($count==1)?"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-ms-12_marg col-ms-12":(($count==2)?(($key==0)?"col-md-4 col-md-offset-2 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12":"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"):"col-md-4 col-sm-6 col-xs-12 col-ms-12_marg col-ms-12"); ?>">
                    <div class="blog-main ver2">
                        <div class="blog-images">
                            <div class="post-thumbnail" style="padding:30px; background:#fafafa">
                                <?php if ($event->thumb_picture) { ?>
                                    <?php if ($event->link) { ?>
                                    <a href="<?php echo $event->link; ?>" target="_blank">
                                    <?php } else { ?>
                                    <a href="<?php echo site_url('services/' . str_replace(array('='), array('?'), ($event->id))); ?>">    
                                    <?php } ?>
                                    <img src="<?php echo site_url($event->thumb_picture); ?>" alt="">
                                    </a>
                                <?php } else { ?>
                                    <?php if ($event->link) { ?>
                                    <a href="<?php echo $event->link; ?>" target="_blank">
                                    <?php } else { ?>
                                    <a href="<?php echo site_url('services/' . str_replace(array('='), array('?'), ($event->id))); ?>">    
                                    <?php } ?>
                                    <img src="<?php echo site_url('assets/img/deafult-image.jpg'); ?>" alt="">
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="blog-name text-center" style="background:#fafafa">
                            <?php if ($event->link) { ?>
                            <a href="<?php echo $event->link; ?>">
                            <?php } else { ?>    
                            <a href="<?php echo site_url('services/' . str_replace(array('='), array('?'), base64_encode($event->id))); ?>">        
                            <?php } ?>    
                                <?php echo $event->title;?>
                            </a>
                        </div>                
                    </div>
               </div>    
           <?php } ?>
    </div>
</div>  
</section>  
<?php } ?>    