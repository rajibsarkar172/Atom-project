
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Contact Form Setting</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                settings
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <?php
                if ($this->session->flashdata('ns_success')) {
                    echo '<div class="alert alert-success">';
                    echo '<p>' . $this->session->flashdata('ns_success') . '</p>';
                    echo '</div>';
                }

                if ($this->session->flashdata('ns_error')) {
                    echo '<div class="alert alert-warning">';
                    echo '<p>' . $this->session->flashdata('ns_error') . '</p>';
                    echo '</div>';
                }
                ?>   
                <br>

                <div class="col-lg-12">
                    <?php echo form_open('admin/contact_setting/addSetting', 'class="form-horizontal style-form" enctype="multipart/form-data" accept-charset="UTF-8"'); ?>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mail Type:</label>
                            <div class="col-sm-10"> 
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="smtp" <?php if ($nSetting->type === 'smtp') {echo 'checked'; } ?>> SMTP Mail
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="mail" <?php if ($nSetting->type === 'mail') {echo 'checked';} ?>> PHP Mail
                                </label>
                            </div>
                        </div>
                        <div class="form-group" id="smtp_host_wrap" <?php if($nSetting->type === 'mail'){ echo 'style="display:none"'; }?>>
                            <label class="col-sm-2 col-sm-2 control-label">SMTP Host:</label>
                            <div class="col-sm-10">  
                                <?php echo form_hidden('id', set_value('id', $nSetting->id), 'class="form-control" placeholder="id"'); ?>
                                <?php echo form_input('smtp_host', set_value('smtp_host', $nSetting->smtp_host), 'id="smtp_host" class="form-control" placeholder="Example:mail.Domain.com"'); ?>
                            </div>
                        </div>
                        <div class="form-group" id="smtp_port_wrap" <?php if($nSetting->type === 'mail'){ echo 'style="display:none"'; }?>>
                            <label class="col-sm-2 col-sm-2 control-label">SMTP Port:</label>
                            <div class="col-sm-10">  
                                <?php echo form_input('smtp_port', set_value('smtp_port', $nSetting->smtp_port), 'id="smtp_port" class="form-control" placeholder="Example:25"'); ?>
                            </div>
                        </div>
                        <div class="form-group" id="email_wrap">
                            <label class="col-sm-2 col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">  
                                <?php echo form_input('email', set_value('email', $nSetting->email), 'id="email" class="form-control" placeholder="example@domain.com"'); ?>
                            </div>
                        </div>
                        <div class="form-group" id="password_wrap" <?php if($nSetting->type === 'mail'){ echo 'style="display:none"'; }?>>
                            <label class="col-sm-2 col-sm-2 control-label">Password:</label>
                            <div class="col-sm-10">
                                
                                <?php echo form_input(array('id'=>'password','type'=>'password','name'=>'password','value'=>set_value('password', $nSetting->password),'required'=>'required','placeholder'=>'Password','class'=>'form-control')); ?>
                            </div>
                        </div>
                        <?php echo form_submit('submit', 'save', 'class="btn btn-success pull-right"'); ?>      
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.row --> 
</div>
<!-- /.row -->   

<script type="text/javascript">
    $(function(){
       $("input[name='type']").on("click", function() {
            var value = $(this).val();
            
            if(value === 'mail'){
                $('#smtp_host_wrap').hide();
                $('#smtp_port_wrap').hide();
                $('#password_wrap').hide();
            } else {
                $('#smtp_host_wrap').show();
                $('#smtp_port_wrap').show();
                $('#password_wrap').show();
            }
            
       });
       
    });
    
</script>