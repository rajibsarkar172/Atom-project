
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Admin Panel</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-home fa-5x"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('admin/panel/homepage');?>">
                        <div class="panel-footer">
                            <span class="pull-left">Home Page</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
			 <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-picture-o fa-5x"></i>
                            </div>
                        </div>
                    </div>
                   <a href="<?php echo site_url('admin/slider/manage');?>">
                        <div class="panel-footer">
                            <span class="pull-left">Slider</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-puzzle-piece fa-5x"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('admin/headercontent/manage');?>">
                        <div class="panel-footer">
                            <span class="pull-left">Header Content</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-calendar fa-5x"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('admin/services/manage');?>">
                        <div class="panel-footer">
                            <span class="pull-left">Services</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->    

        <!-- /.row -->
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-cubes fa-5x"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('admin/aboutcontent/manage');?>">
                        <div class="panel-footer">
                            <span class="pull-left">About Content</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php if($this->session->userdata('user_type')=='Administrator'){?>
            <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('admin/users/manage');?>">
                        <div class="panel-footer">
                            <span class="pull-left">Users</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>            
           <?php } ?>
            <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">

                                <i class="fa fa-newspaper-o fa-5x"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('admin/Contact_setting');?>">
                        <div class="panel-footer">
                            <span class="pull-left">Contact Setting</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-center">


                                <i class="fa fa-cog fa-5x"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('admin/settings')?>">
                        <div class="panel-footer">
                            <span class="pull-left">Settings</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>