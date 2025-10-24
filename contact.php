<?php
session_start();
include 'includes/header.php' ?>
    <section class="contact-banner inner-banner-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-10 offset-xl-1 wow fadeInDownBig">
                    <h2>We work with organizations of all sizes, from Startups to Fortune 500’s, in<br> the private,
                        public
                        and social sector.</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-lower">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-10 offset-xl-1">
                    <div class="row contact-box-color">f
                        <div class="col-sm-6 col-md-4 col-lg text-center contact-border-right">
                            <div class="contact-box wow bounceInRight">
                                <img src="img/address-img.webp" alt="Address">
                                <h1>Address</h1>
                                <hr>
                                <p>Cimarron Holding Inc.
                                    200 Park Ave Suite 1700 New York, NY 10166</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg text-center contact-border-right">
                            <div class="contact-box wow bounceIn">
                                <img src="img/email-img.png" alt="Email">
                                <h1>Email</h1>
                                <hr>
                                <p>info@eagledigitalsolutions.com</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg text-center">
                            <div class="contact-box custom-margin-contact wow bounceInLeft">
                                <img src="img/phone-img.png" alt="Phone">
                                <h1>Phone</h1>
                                <hr>
                                <p>+1 332 288-4388</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-form">
            <div class="container contact" data-form-type="contact_form">
                <form id="prevent" class="signupForm leadForm" method="post" enctype="multipart/form-data" action="contact_submit.php">
                    <!--action="functions/send.php"-->
                    <?php

                    if (isset($_SESSION['success'])) {
                        $alertClass = 'alert-success';
                        $message = $_SESSION['success'];
                        unset($_SESSION['success']);
                    } else {
                        $alertClass = '';
                        $message = '';
                    }
                    ?>
                    <?php if (!empty($message)) : ?>
                        <div class="alert <?php echo $alertClass; ?> alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><?php echo $alertClass == 'alert-success' ? 'Success!' : 'Alert!'; ?></strong> <?php echo $message; ?>
                        </div>
                    <?php endif; ?>
                    <!--hidden required values-->
                    <input type="hidden" id="formType" name="formType">
                    <input type="hidden" id="referer" name="referer">

                    <div class="row">
                        <div class="col-md-6 offset-lg-1 col-lg-5 col-xl-4 offset-xl-2 wow fadeInLeft">
                            <div class="form-group">
                                <select class="form-control" name="category_id">
                                    <option value="0">Interested in...</option>
                                    <option value="Logo Design">Logo Design</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="E-commerce">E-commerce</option>
                                    <option value="Print">Print</option>
                                    <option value="SMM">SMM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-lg-1 col-lg-5 offset-xl-2 col-xl-4 wow fadeInLeft">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName"
                                       aria-describedby="nameHelp"
                                       placeholder="Full Name" name="user_name" data-validation="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail"
                                       aria-describedby="emailHelp"
                                       placeholder="Email Address" name="email" data-validation="required">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" placeholder="Your Phone Number" maxlength="10"
                                       onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');"
                                       class="form-control" data-validation="required">
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LdvGfYrAAAAAIHlOFKiwaxqFFn31VdjeE-3SAIz" data-callback="enableSubmitButton"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 offset-lg-0 offset-xl-0 col-xl-4 wow fadeInRight">
                            <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                      placeholder="Tell us a bit about your project..."
                                      name="description" data-validation="required"></textarea>
                            </div>
                        </div>
                        
                        <div class="offset-md-1 col-md-10 col-lg-6 offset-xl-2 btn-center wow fadeInRight">
                            <div id="formResult"></div>
                            <button id="mySubmitBtn" disabled="disabled" class="btn btn-theme btn-white-border" type="submit">Submit your request <i class="far fa-caret-right"></i></button>
                        </div>
                    </div>
                </form>
                <script>
  document.getElementById('prevent').setAttribute('action', 'functions/send.php');
</script>
<script>
    function enableSubmitButton() {
        document.getElementById('mySubmitBtn').disabled = false;
    }
</script>
            </div>
        </section>
    </section>
<?php include 'includes/footer.php' ?>