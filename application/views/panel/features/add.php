<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Feature Content</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Feature Information
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
                                    <?php echo form_hidden('id', set_value('id', $feature->id), 'class="form-control" placeholder="id"'); ?>
                                    <?php echo form_input('title', set_value('title', $feature->title), 'class="form-control" placeholder="Title"'); ?>
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Sub Title:</label>
                                <div class="col-sm-10">   
                                    <?php echo form_input('sub_title', set_value('sub_title', ''), 'class="form-control" placeholder="Sub Title"'); ?>
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                                <div class="col-sm-10">
                                    <?php //echo form_textarea('description', set_value('description', html_entity_decode(strip_tags($feature->description, '<p>'),ENT_QUOTES)), 'class="form-control" id="description" placeholder="Description"'); ?>
                                    <?php echo form_textarea('description', $feature->description, 'class="form-control" id="description" placeholder="Description"'); ?>
                                </div>
                            </div>
                            <?php if ($feature->thumb_picture) { ?>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Upload:</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="<?php echo site_url($feature->thumb_picture); ?>" class="img-responsive img-thumbnail center-block">
                                                <a href="<?php echo site_url('admin/features/removeimage/' . $feature->id); ?>" class="btn btn-block btn-warning">Remove Image</a>
                                                <?php
                                                echo form_hidden('thumb_picture', set_value('thumb_picture', $feature->thumb_picture), 'class="form-control" placeholder="Date"');
                                                echo form_hidden('orginal_picture', set_value('orginal_picture', $feature->orginal_picture), 'class="form-control" placeholder="Date"');
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
                                        <span style="padding-left: 10px">jpeg, png</span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                            echo form_hidden('status', set_value('status', $feature->status), 'class="form-control" placeholder="Status"');
                            echo form_hidden('date', set_value('date', $feature->date), 'class="form-control" placeholder="Date"');
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
                Feature Content List
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="chat">
                    <?php 
                    foreach ($features as $feature_list) {
//                        //echo "<pre>"; print_r($feature_list); die;
                        echo '<li class="left clearfix">
                        <h5><a href="' . base_url() . 'admin/features/create/' . $feature_list->id . '"><strong class="primary-font">' . $feature_list->title . '</strong></a></h5>
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

<!-- TinyMCE -->
<!--<script src="<?php echo site_url('admin_components/ckeditor/ckeditor.js') ?>"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
</script>-->


<script src="<?php echo base_url() ?>admin_components/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 500,

  
  menubar: "edit format",
  
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'textcolor',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'sizeselect | bold italic | fontselect |  fontsizeselect | forecolor | backcolor | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
  
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});
</script>

<!-- /TinyMCE -->