<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Home Page</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-sm-12">
        <div class="jumbotron text-center">
            <div class="col-sm-6">
                <h3 class="text-left">Logo</h3>            
            </div>
            <div class="col-sm-6">
                <p><a href="<?php echo site_url('admin/settings');?>" role="button" class="btn btn-primary btn-lg pull-right">Manage Logo</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="jumbotron text-center">
            <h3>Slider</h3>
            <p><a href="<?php echo site_url('admin/slider/manage');?>" role="button" class="btn btn-primary btn-lg">Manage Slider</a></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php foreach ($welcomenote as $welcome) { ?>
        <div class="jumbotron text-center">
            <h3><?php echo $welcome->title;?></h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-5 pull-right">
                        <img src="<?php echo $welcome->orginal_picture; ?>" alt="" class="img-responsive img-thumbnail" width="100%">
                    </div>
                    <?php echo html_entity_decode($welcome->description);?>
                </div>
            </div>
            <p><a href="<?php echo site_url('admin/headercontent/create/'.$welcome->id);?>" role="button" class="btn btn-primary btn-lg">Manage Header Content</a></p>
        </div>    
        <?php } ?>        
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="jumbotron text-center">
            <div class="col-sm-6">
                <h3 class="text-left">Footer</h3>            
            </div>
            <div class="col-sm-6">
                <p><a href="<?php echo site_url('admin/settings');?>" role="button" class="btn btn-primary btn-lg pull-right">Manage Footer</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>