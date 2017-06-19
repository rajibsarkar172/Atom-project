<?php if ($event) { if($event->orginal_picture) {?>
<section id="slider-image">
    <img src="<?php echo site_url($event->orginal_picture) ?>" alt="<?php echo $event->title; ?>" class="img-responsive" width="100%">
</section>
<?php } ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marg50 col-ms-12_marg50">
            <div class="present-block-name"><?php echo $event->title; ?></div>
            <div class="present-block-line"></div>
            <div class="" style="margin-bottom:50px;"><?php echo $event->description; ?></div>
        </div>
    </div>
</div>
<?php } ?>