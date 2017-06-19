<!-- /.row -->
<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Domain</h1>
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
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="domain">
                        <thead>
                            <tr>
                                <th>Domain</th>
                                <th>Credential For</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($credentials as $credential) { ?>
                            <tr>
                                <td><h4><?php echo $credential->domain_name; ?></h4></td>
                                <td><h4><?php echo $credential->title; ?></h4></td>
                                <td>
                                    <?php
                                        if($credential->last_update != '0000-00-00'){
                                            $from_date = new DateTime(date('Y-m-d'));
                                            $to_date = new DateTime($credential->last_update);
                                            $day = $from_date->diff($to_date)->days;
                                            
                                            if($day == 0){
                                                echo 'Today';
                                            } else {
                                                echo $day.' Days Ago';
                                            }
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="<?php echo site_url('admin/credential/add/' . $credential->id); ?>"><i class="fa fa-pencil"></i></a>                                    
                                    <a class="btn btn-warning delete" data-id="<?php echo $credential->id; ?>" id="<?php echo 'delete' . $credential->id; ?>" href=""><i class="fa fa-trash"></i></a>
                                </td>                                        
                            </tr>    
                            <?php } ?>
                        </tbody>
                    </table>

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

<script>
    $(document).ready(function () {
        $('#domain').DataTable({
            responsive: true
        });
    });
</script>

<script type="text/javascript">
    $(document).on('click', '.delete', function (e) {

        e.preventDefault();

        var id = ($(this).data("id"));

        $.ajax({
            url: "<?php echo site_url('admin/credential/delete'); ?>",
            type: "post",
            data: {'id': id, 'status': 2},
            success: function (text)
            {
                if (text === 'error') {
                    alert('Please delete domain first');
                } else {
                    $('#message').html('<div class="alert alert-danger">Delete domain info successfully</div>');
                    $("#status" + id).val(status);

                    window.setTimeout(function () {
                        window.location.replace("<?php echo site_url('admin/credential/manage');?>");
                    }, 2000);

                }
            }
        });

    });

</script>