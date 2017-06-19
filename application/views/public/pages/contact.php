
     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We are 24*7 open for you!!!!!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form name="sentMessage" id="contactForm" method="post" action="<?php base_url('welcome/contact');?>">
                        
                            <?php 
                                if ($this->session->flashdata('success')) {
                                    echo '<div class="col-lg-7">';
                                    echo $this->session->flashdata('success');
                                    echo '</div>';
                                }

                                if (validation_errors()) {
                                    echo '<div class="col-lg-7">';
                                    echo validation_errors('<div class="alert alert-warning">', '</div>');
                                    echo '</div>';
                                }
                            ?>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="company" class="form-control" autocomplete="off" placeholder="Your Company Name" id="company" required data-validation-required-message="Please enter your company name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>

                                 <button type="submit" class="btn btn-xl">Send Message</button>

                            </div>
                            <div class="col-md-6">
                              
                            <div style="color:#FFFFFF; margin-left:100px" class="">
                                <address>
                                    <h5 style="color:red;">Bangladesh Office</h5>
                                    <p>House 8-A/10, Suite 5B, 5th Floor, <br>
                                    Road 13, Doreen Tower,</p>
                                    <p>Phone:+88 01819250309<br>
                                    Email Address:info@atomapgroup.com</p>
                                </address>

                                <address>
                                    <h5 style="color:red;">Japan Office</h5>
                                    <p>5-9 Minami-Fujisawa Asahi-Seimei Bldg,<br>
                                    8F, Fujisawa-shi, Kanagawa 251-8543, JAPAN.</p>                                
                                    <p>Phone:+81-466-29-1248<br>
                                    </p>
                                </address>
                            </div>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>