<!-- /.row -->
<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Services</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div id="message">
        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="col-lg-12">' . $this->session->flashdata('success') . '</div>';
        }

        if ($this->session->flashdata('error')) {
            echo '<div class="col-lg-12">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
    </div>  

    <!-- /.col-lg-6 -->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Display Section</th>
                                <th>Display Menu</th>
                                <th>Service Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($events) {
                                foreach ($events as $event) { ?>
                                    <tr>
                                        <td><h4><?php echo $event->title; ?></h4></td>
                                        <td><img src="<?php echo site_url($event->thumb_picture); ?>" alt="<?php echo $event->title; ?>" width="100" /></td>
                                        <td>
                                            <div class="onoffswitch">

                                                <input type="checkbox" name="status" class="status onoffswitch-checkbox" data-id="<?php echo $event->id; ?>" id="<?php echo 'status' . $event->id; ?>" value="<?php echo $event->status; ?>" <?php if ($event->status == 1) {echo 'checked';} ?>>

                                                <label class="onoffswitch-label" for="<?php echo 'status' . $event->id; ?>">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="show_menu" class="show_menu" data-id="<?php echo $event->id;?>" id="<?php echo 'show_menu' . $event->id; ?>" value="<?php echo $event->show_menu; ?>" <?php if ($event->show_menu == 1) {echo 'checked';} ?>>
                                                    Show in menu
                                                </label>
                                            </div>
                                        </td>
                                        <td><b>
                                                <?php 
                                                    if($event->type == 'PROFF_SERVICE'){
                                                        echo 'PROFESSIONAL SERVICE';
                                                    }elseif ($event->type == 'CLOUD_SOLUTION') {
                                                        echo 'CLOUD SOLUTION';   
                                                    }elseif ($event->type == 'CLOUD_SERVICE') {
                                                        echo 'CLOUD SERVICE';   
                                                    } 
                                                ?>
                                            </b>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="<?php echo site_url('admin/services/create/' . $event->id); ?>"><i class="fa fa-pencil"></i></a>                                    
                                            <a class="btn btn-warning delete" data-id="<?php echo $event->id; ?>" id="<?php echo 'delete' . $event->id; ?>" href=""><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>    
                        <?php }
                    } else {
                        echo '<tr><td colspan="5"><h4 class="text-center text-warning">No data to display!</h4></td></tr>';
                    } ?>
                        </tbody>
                    </table>

<?php echo $links ?>

                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->

<script type="text/javascript">
    $(document).on('click', '.status', function () {

        var id = ($(this).data("id"));

        if ($("#status" + id).val() == '1') {
            var status = 0;
        } else {
            var status = 1;
        }

        $.ajax({
            url: "<?php echo site_url('admin/services/changestatus'); ?>",
            type: "post",
            data: {'id': id, 'status': status, },
            success: function (data)
            {
                var arr = JSON.parse(data);
                var message = arr["message"];
                var type = arr["type"];
                if (type === 'error') {

                    $("#status" + id).attr('checked', false);
                    $('#message').html(message);

                } else {

                    $('#message').html(message);
                    $("#status" + id).val(status);

                }
            }
        });

    });
    
    $(document).on('click', '.show_menu', function () {

        var id = ($(this).data("id"));
        
        if ($("#show_menu" + id).val() == '1') {
            var show_menu = 0;
        } else {
            var show_menu = 1;
        }

        $.ajax({
            url: "<?php echo site_url('admin/services/show_menu'); ?>",
            type: "post",
            data: {'id': id, 'show_menu': show_menu, },
            success: function (data)
            {
                var arr = JSON.parse(data);
                var message = arr["message"];
                var type = arr["type"];
                if (type === 'error') {

                    $("#show_menu" + id).attr('checked', false);
                    $('#message').html(message);

                } else {

                    $('#message').html(message);
                    $("#show_menu" + id).val(status);

                }
            }
        });

    });

    $(document).on('click', '.delete', function (e) {

        e.preventDefault();

        var id = ($(this).data("id"));

        $.ajax({
            url: "<?php echo site_url('admin/services/delete'); ?>",
            type: "post",
            data: {'id': id, 'status': 2},
            success: function (text)
            {
                if (text === 'error') {
                    alert('Please deactive status first');
                } else {
                    $('#message').html('<div class="alert alert-danger">Delete event successfully</div>');
                    $("#status" + id).val(status);

                    window.setTimeout(function () {
                        window.location.replace("<?php echo site_url('admin/services/manage');?>");
                    }, 2000);

                }
            }
        });

    });

</script>