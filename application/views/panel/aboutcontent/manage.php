<!-- /.row -->
<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage About</h1>
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
                               <th>Sub Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($aboutcontents) {
                                foreach ($aboutcontents as $aboutcontent) { ?>
                                    <tr>
                                        <td><h4><?php echo $aboutcontent->title; ?></h4></td>
                                        <td><h4><?php echo $aboutcontent->sub_title; ?></h4></td>
                                       
                                        <td>
                                            <div class="onoffswitch">

                                                <input type="checkbox" name="status" class="status onoffswitch-checkbox" data-id="<?php echo $aboutcontent->id; ?>" id="<?php echo 'status' . $aboutcontent->id; ?>" value="<?php echo $aboutcontent->status; ?>" <?php if ($aboutcontent->status == 1) {
                                        echo 'checked';
                                    } ?>>

                                                <label class="onoffswitch-label" for="<?php echo 'status' . $aboutcontent->id; ?>">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="<?php echo site_url('admin/aboutcontent/create/' . $aboutcontent->id); ?>"><i class="fa fa-pencil"></i></a>                                    
                                            <a class="btn btn-warning delete" data-id="<?php echo $aboutcontent->id; ?>" id="<?php echo 'delete' . $aboutcontent->id; ?>" href=""><i class="fa fa-trash"></i></a>
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
            url: "<?php echo site_url('admin/aboutcontent/changestatus'); ?>",
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
    
    $(document).on('click', '.delete', function (e) {

        e.preventDefault();

        var id = ($(this).data("id"));
        
        $.ajax({
            url: "<?php echo site_url('admin/aboutcontent/delete'); ?>",
            type: "post",
            data: {'id': id, 'status': 2},
            success: function (text)
            {
                if (text === 'error') {
                    alert('Please deactive status first');
                } else {
                    $('#message').html('<div class="alert alert-danger">Delete header content Successfully</div>');
                    $("#status" + id).val(status);

                    window.setTimeout(function () {
                        window.location.replace("<?php echo site_url('admin/aboutcontent/manage');?>");
                    }, 2000);

                }
            }
        });

    });

</script>