<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Slide</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Slide Information
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo form_open('', 'class="form-horizontal style-form" enctype="multipart/form-data" accept-charset="UTF-8"'); ?>
                        <div class="col-lg-12">
                            <?php
                            if ($this->session->flashdata('success')) {
                                echo $this->session->flashdata('success');
                            }

                            if ($this->session->flashdata('error')) {
                                echo $this->session->flashdata('error');
                            }

                            if (validation_errors()) {
                                echo validation_errors('<div class="alert alert-warning">', '</div>');
                            }
                            ?>        
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title:</label>
                                <div class="col-sm-10">
                                    <?php echo form_hidden('id', set_value('id', $slide->id), 'class="form-control" placeholder="id"'); ?>
                                    <?php echo form_input('title1', set_value('title1', $slide->title1), 'class="form-control" placeholder="Title"'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Slide For:</label>
                                <div class="col-sm-10">
                                    <?php echo form_dropdown('type', array('Home' => 'Home', 'About' => 'About', 'Contact' => 'Contact'), $this->input->post('type') ? $this->input->post('type') : $slide->type,'class="form-control"'); ?>
                                </div>
                            </div>
                            <!--<div class="form-group" id="priceDiv">
                                <label class="col-sm-2 col-sm-2 control-label">Link:</label>
                                <div class="col-sm-10">
                                    <?php //echo form_input('link', set_value('link', $slide->link), 'class="form-control" placeholder="Link"'); ?>
                                </div>
                            </div>-->
                            <?php if ($slide->thumb_picture) { ?>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Upload:</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="<?php echo site_url($slide->thumb_picture); ?>" class="img-responsive img-thumbnail center-block">
                                                <a href="<?php echo site_url('admin/slider/removeimage/' . $slide->id); ?>" class="btn btn-block btn-warning">Remove Image</a>
                                                <?php
                                                echo form_hidden('thumb_picture', set_value('thumb_picture', $slide->thumb_picture), 'class="form-control" placeholder="Date"');
                                                echo form_hidden('orginal_picture', set_value('orginal_picture', $slide->orginal_picture), 'class="form-control" placeholder="Date"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            <?php } else { ?>
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail center-block" data-trigger="fileinput" ></div>
                                        <label for="" class="col-sm-3 control-label">Select image</label>
                                        <div class="col-sm-9">                                            
                                            <span class="btn-group">
                                                <input type="file" name="userfile" class="btn btn-default" id="userfile" readonly="true"/>
                                                <?php echo form_hidden('filename', 1, 'class="form-control" placeholder="Date"'); ?>
                                            </span>
                                            <a href="#" class="btn btn-default" data-dismiss="fileinput" style="padding-left: 10px">Remove</a>
                                            <span style="padding-left: 10px">jpeg, png</span><br>
                                            <span class="text-danger">Recommended slider size 1919*498</span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            echo form_hidden('status', set_value('status', $slide->status), 'class="form-control" placeholder="Status"');
                            echo form_hidden('date', set_value('date', $slide->date), 'class="form-control" placeholder="Date"');
                            ?>
                            <?php echo form_submit('submit', 'Submit', 'class="btn btn-success pull-right"'); ?>                            
                        </div>
                        <?php echo form_close(); ?>
                    </div>                    
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-8 -->

    <div class="col-lg-4">
        <!-- /.panel -->
        <div class="chat-panel panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-users fa-fw"></i>
                Slide List
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="chat">
                    <?php
                    foreach ($slides as $slide) {
                        echo '<li class="left clearfix">
                        <h5><a href="' . base_url() . 'admin/slider/add/' . $slide->id . '"><strong class="primary-font">' . $slide->title1 . '</strong></a></h5>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->
</div>
<!-- /.row -->