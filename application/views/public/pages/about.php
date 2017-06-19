<?php foreach ($aboutnote as $about) { ?>
<div id="about_us" class="container marg50" style="padding-bottom: 50px">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
            <div class="present-block-name"><?php echo $about->title;?></div>
            <div class="present-block-line"></div>
            <div><?php echo $about->description; ?></div>
        </div>
    </div>
</div>    
<?php } ?>