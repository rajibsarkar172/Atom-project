<!-- /.row -->
<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Trash About</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <?php 
        if ($this->session->flashdata('success')) {
            echo '<div class="col-lg-12">'.$this->session->flashdata('success').'</div>';
        }

        if ($this->session->flashdata('error')) {
            echo '<div class="col-lg-12">'.$this->session->flashdata('error').'</div>';
        }
    ?>
    
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
                                <th> Sub Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($aboutcontents) {foreach ($aboutcontents as $aboutcontent) { ?>
                            <tr>
                                <td><h4><?php echo $aboutcontent->title;?></h4></td>
                                <td><h4><?php echo $aboutcontent->sub_title; ?></h4></td>
                                <td>
                                    <a class="btn btn-info" href="<?php echo site_url('admin/aboutcontent/undo/'.$aboutcontent->id);?>"><i class="fa fa-undo"></i> Undo From Trash</a>
                                    <a class="btn btn-danger" href="<?php echo site_url('admin/aboutcontent/remove/'.$aboutcontent->id);?>" onclick="return confirm('Do you want to delete!')"><i class="fa fa-times"></i> Delete Permanently</a>
                                </td>
                            </tr>    
                            <?php }} else { echo '<tr><td colspan="5"><h4 class="text-center text-warning">No data to display!</h4></td></tr>'; } ?>
                        </tbody>
                    </table>
                    
                    <?php echo $links?>
                    
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