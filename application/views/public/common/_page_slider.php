<?php if($slides){?>
<?php
$banner = false;
foreach ($slides as $value) {
    if ($value->set_banner == 1) {
        $image = $value->orginal_picture;
        $name = $value->title1;
        $banner = true;
        break;
    }
}
if ($banner) {
    ?>
    <section id="slider-image">
        <img src="<?php echo site_url($image) ?>" alt="<?php echo $name ?>" class="img-responsive" width="100%">
    </section>

<?php } else { ?>
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
<?php } ?>
<?php } ?>

	

