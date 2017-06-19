<div class="footer">
    <div class="container hidden">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="footer-widget text-center">
                    <div class="footer-title">Our Contacts</div>
                    <ul class="row contact-footer contact-composer">
                        <li class="col-lg-4 col-md-4 col-sm-4 text-center"><i class="icon-basic-home"></i> <span><?php echo $setting->address; ?></span></li>
                        <li class="col-lg-4 col-md-4 col-sm-4 text-center"><i class="icon-basic-smartphone"></i> <span><?php echo $setting->phone_fax; ?></span></li>
                        <li class="col-lg-4 col-md-4 col-sm-4 text-center"><i class="icon-basic-mail"></i> <span><?php echo $setting->email; ?></span></li>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-left">
                    <div class="copyright"><?php echo $setting->copy_right; ?></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-right">
                    <div class="foot_menu">
                        <div class="menu-footer-menu-container">
                            <ul>
                                <li><a href="<?php echo site_url(); ?>"></a></li>
                                <li><a href="<?php echo site_url('about'); ?>"></a></li>
                                <li><a href="<?php echo site_url('contact'); ?>"></a></li>
                            </ul>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>