<?php
session_start();
//$_SESSION['price'] = 59.00; // Set the price dynamically based on your service
//$_SESSION['package_name'];
?>
<?php include 'includes/header.php' ?>
<style>
    .top-banner-head a {
        text-align: center !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
</style>
<section class="banner">
    <div class="top-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="top-banner-head wow bounceInUp">
                        <h5>LAUNCHING</h5>
                        <div class="typewriter" style="margin-top: 14px;">
                            <h1 class="typewriter-text"><span>YOUR</span> BUSINESS TO SUCCESS</h1>
                        </div>
                        <h6>Universal Design Solutions that orbit the galaxies of Marketing,<br> Branding and Aesthetic
                            Sense.</h6>
                        <a href="contact.php"> <button class="btn btn-theme live_chatt" style="background-color:#ff8f01";>Discuss Your Project &nbsp<i
                                        class="far fa-caret-right"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="satisfaction_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="satisfaction_inner_box">
                            <img src="img/satisfaction_ic.png" class="img-fluid">
                            <span>100% Satisfaction Guaranteed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="satisfaction_inner_box">
                            <img src="img/gurantee_ic.png" class="img-fluid">
                            <span>Unique Design Guarantee</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="satisfaction_inner_box">
                            <img src="img/award_ic.webp" class="img-fluid">
                            <span>Award Winning Designers</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="satisfaction_inner_box">
                            <img src="img/consultancy_ic.png" class="img-fluid">
                            <span>24/7 Design Consultancy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lower-banner">
        <div class="container">
            <div class="row space-ship-spacing">
                <div class="col-lg-12 wow slideInLeft">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="left-lower-banner">
                                <h1>award-winning digital agency</h1>
                                <p>Fuel your jet with creative ideas of our own combined with the unique story of your
                                    brand, and let it cross galaxies.</p>
                                <i class="fal fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row quote-type">
                                <div
                                        class="offset-md-2 col-6 col-sm-6 col-md-4 col-lg-6 padding-rt-in-lg offset-lg-0 pr-2 cutom-padding-left-cta">
                                    <div class="border-box">
                                        <a href="tel:+1 332 288-4388">
                                            <div class="inner-border-box">
                                                <ul class="new-style">
                                                    <li><i class="fas fa-phone-square"></i></li>
                                                    <li>
                                                        <p>Call us Anytime <br>We are here 24/7</p>
                                                    </li>
                                                    <li class="last"><span>+1 332 288-4388</span></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div
                                        class="col-md-4 col-6 col-sm-6 col-lg-6 padding-rt-in-lgs pl-2 cutom-padding-right-cta">
                                    <div class="border-box">
                                        <a href="contact.php" class="live_chatt">
                                            <div class="inner-border-box">
                                                <ul class="new-style">
                                                    <li><i class="fas fa-comments"></i></li>
                                                    <li>
                                                        <p>  Contact us</p>
                                                    </li>
                                                    <li class="last"><span>We are here 24/7</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow slideInRight">
                    <div class="right-lower-banner">
                        <hr>
                        <div id="right-banner-carousel" class="owl-carousel owl-theme col-lg-10 pl-lg-0 ju">
                            <div class="item">
                                <a href="logo_design.php">
                                    <div class="services-box">
                                        <img src="img/logo-Design.png" alt="Custom Logo Service">
                                        <h1>Custom <br>Logo Design</h1>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="web_design.php">
                                    <div class="services-box">
                                        <img src="img/Web-Design.png" alt="Web Service">
                                        <h1>Web design<br>& Development</h1>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="print_design.php">
                                    <div class="services-box">
                                        <img src="img/Branding.png" alt="Print Design Service">
                                        <h1>Print <br>Designs</h1>
                                    </div>
                                </a>
                            </div>
                             <div class="item">
                                <a href="video_animation.php">
                                    <div class="services-box">
                                        <img src="img/Video-Animation.png" alt="Video Service">
                                        <h1>Video<br>Animation</h1>

                                    </div>
                                </a>
                            </div> 
                             <div class="item">
                                <a href="seo.php">
                                    <div class="services-box">
                                        <img src="img/Content-Marketing.png" alt="Content Service">
                                        <h1>Content<br>Marketing</h1>
                                    </div>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="impressive">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="impressive-left wow fadeInLeft">
                    <h1>Numbers Speak for Us</h1>
                    <p>Sticking to our commitment, we have always dealt each project with utmost focus and proficiency,
                        hence resulting in these impressive numbers.</p>
                </div>
            </div>
            <div class="col-lg-8 impressive-right" id="counter">
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-4 col-lg wow fadeInRight">
                        <div class="impressive-box">
                            <img src="img/complete.png" alt="Complete">
                            <h3 style="color: ##808080;" class="counter-value" data-count="9892">0</h3>
                            <p>Projects completed</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg wow fadeInUp">
                        <div class="impressive-box">
                            <img src="img/satisfied.png" alt="Satisfied">
                            <h3 style="color: ##808080;" class="counter-value" data-count="5678">0</h3>
                            <p>Satisfied Customer</p>
                        </div>
                    </div>
                    <div class="offset-3 offset-sm-0 col-6 col-sm-4 col-md-4 col-lg wow fadeInLeft">
                        <div class="impressive-box custom-impressive-box-mt-2">
                            <img src="img/launched.png" alt="Satisfied">
                            <h3 style="color: ##808080;" class="counter-value" data-count="15890">0</h3>
                            <p>Launched products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Sec -->
<section class="cta_sec professional">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="bta_content">
                    <h1>Take The First Step Towards The <span>Right Direction!</span></h1>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-3">
                            <div class="cta_content text-right justify-content-end">
                                <a href="tel:+1 332 288-4388" class="stretched-link"></a>
                                <p class="mr-2">Call toll free <span>+1 332 288-4388
                                </span></p>
                                <img src="img/call_ic.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="contact.php" class="btn btn-red cta_btn" onclick="location='contact.php'">Request a Quote</a>
                        </div>
                        <div class="col-md-4 col-3">
                            <div class="cta_content text-left">
                                <a href="contact.php" class="stretched-link live_chatt"></a>
                                <img src="img/chat_ic.png" class="img-fluid">
                                <p class="ml-2">Need help? <span>CONTACT US NOW</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Cta Sec -->

<section class="home-pricing">
    <div class="container">
        <div class="row pricing-cta">
            <div class="col-lg-6 custom-center wow fadeInLeft">
                <h1>out of the world <br> Packages</h1>
                <p>Creativity Takes Courage. We however add just the right amount.</p>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="row">
                    <div class="offset-md-2 col-6 col-sm-6 col-md-4 col-lg pr-2 wow fadeInDown cutom-padding-left-cta">
                        <a href="tel:+1 332 288-4388">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-phone-square"></i></li>
                                    <li>
                                        <p>Call Us Now</p>
                                    </li>
                                </ul>
                                <p>+1 332 288-4388
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg pl-2 wow fadeInUp cutom-padding-right-cta">
                        <a href="contact.php" class="live_chatt">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-comments"></i></li>
                                    <li>
                                        <p>Contact us</p>
                                    </li>
                                </ul>
                                <p class="we-are">We are here 24/7</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section id="pricing-tabs">
            <div class="container">
                <div class="row">
                    <div class="pl-0 pr-0 col-lg-12" style="width: 100%">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="pricing-tab" role="tablist">
                                <a class="nav-item nav-link col-lg-4 wow fadeInDownBig" id="nav-profile-tab"
                                   data-toggle="tab" href="#web-packages" role="tab" aria-controls="nav-profile"
                                   aria-selected="false">Website packages</a>
                                <a class="nav-item nav-link col-lg-4 active wow fadeInLeftBig" id="nav-home-tab"
                                   data-toggle="tab" href="#logo-packages" role="tab" aria-controls="nav-home"
                                   aria-selected="true">Logo Packages</a>
                                <a class="nav-item nav-link col-lg-4 wow fadeInRightBig" id="nav-contact-tab"
                                   data-toggle="tab" href="#brand-packages" role="tab" aria-controls="nav-contact"
                                   aria-selected="false">Print packages</a>
                            </div>
                        </nav>
                        <div class="tab-content pricing-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="logo-packages" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="owl-carousel owl-theme" id="logo-packages-carousel">
                                        <div class="wow fadeInDown item">
                                            <div data-package-box class="pricing-box">
                                                <div class="productSku" style="display: none;">LOGO_BASIC </div>
                                                <h2 class="category" data-package-name="Logo Basic">Logo Basic</h2>
                                                <div class="scroll" data-package-scroll>
                                                    <ul class="listpacks">
                                                        <li>4 Original Logo Concepts</li>
                                                        <li>2 Dedicated Logo Designer</li>
                                                        <li>4 Revisions</li>
                                                        <li>With Grey Scale Format</li>
                                                        <li>Free Icon Design</li>
                                                        <li>Formats: JPEG Only</li>
                                                        <li>24 - 48 Hours Turn Around Time</li>
                                                        <li>100% Satisfaction</li>
                                                        <li>100% Ownership Rights</li>
                                                        <li>Money Back Guarantee</li>
                                                        <li>Dedicated Account Manager</li>
                                                    </ul>
                                                </div>
                                                <!--<div class="price-box">-->
                                                <!--    <p>-->
                                                <!--        <sup>$</sup>59.00-->
                                                <!--    </p>-->
                                                <!--</div>-->
                                                <button class="btn btn-theme service-button" data-price="59.00" style="background-color:#ff8f01";>Order now</button>
                                            </div>
                                        </div>
                                        <div class="wow fadeInDown item">
                                            <div data-package-box class="pricing-box">
                                                <div class="productSku" style="display: none;">LOGO_PLUS </div>
                                                <!--                                                <h2 class="category">Logo Plus</h2>-->
                                                <h2 class="category package_name" data-package-name="Logo Plus">Logo Plus</h2>
                                                <div class="scroll" data-package-scroll>
                                                    <ul class="listpacks">
                                                        <li>12 Original Logo Concepts</li>
                                                        <li>4 Dedicated Logo Designer (Industry Specific)</li>
                                                        <li>Unlimited Revisions</li>
                                                        <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                                        <li>Email Signature Design</li>
                                                        <li>With Grey Scale Format</li>
                                                        <li>Free Icon Design</li>
                                                        <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                                        <li>24 - 48 Hours Turn Around Time</li>
                                                        <li>100% Satisfaction</li>
                                                        <li>100% Ownership Rights</li>
                                                        <li>Money Back Guarantee</li>
                                                        <li>Dedicated Account Manager</li>
                                                    </ul>
                                                </div>
                                                <!--<div class="price-box">-->
                                                <!--    <p>-->
                                                <!--        <sup>$</sup>198.00-->
                                                <!--    </p>-->
                                                <!--</div>-->
                                                <button class="btn btn-theme service-button" data-price="198.00" style="background-color:#ff8f01";>Order now</button>
                                            </div>
                                        </div>
                                        <div class="wow fadeInDown item">
                                            <div data-package-box class="pricing-box">
                                                <div class="productSku" style="display: none;">LOGO_INIFINITE </div>
                                                <!--                                                <h2 class="category">Logo Infinite</h2>-->
                                                <h2 class="category package_name" data-package-name="Logo Infinite">Logo Infinite</h2>
                                                <div class="scroll" data-package-scroll>
                                                    <ul class="listpacks">
                                                        <li>Unlimited Original Logo Concepts</li>
                                                        <li>8 Dedicated Logo Designer (Industry Specific)</li>
                                                        <li>Unlimited Revisions</li>
                                                        <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                                        <li>500 Business Cards </li>
                                                        <li>Email Signature Design</li>
                                                        <li>Social Media Designs (Facebook, Twitter, Instagram)</li>
                                                        <li>With Grey Scale Format</li>
                                                        <li>Free Icon Design</li>
                                                        <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                                        <li>24 - 48 Hours Turn Around Time</li>
                                                        <li>100% Satisfaction</li>
                                                        <li>Money Back Guarantee</li>
                                                        <li>Dedicated Account Manager</li>
                                                    </ul>
                                                </div>
                                                <!--<div class="price-box">-->
                                                <!--    <p>-->
                                                <!--        <sup>$</sup>349.00-->
                                                <!--    </p>-->
                                                <!--</div>-->
                                                <button class="btn btn-theme service-button" data-price="349.00" style="background-color:#ff8f01";>Order now</button>
                                            </div>
                                        </div>
                                        <div class="wow fadeInDown item">
                                            <div data-package-box class="pricing-box">
                                                <div class="productSku" style="display: none;">LOGO_PLATINUM </div>
                                                <!--                                                <h2 class="category">Logo Platinum</h2>-->
                                                <h2 class="category package_name" data-package-name="Logo Platinum">Logo Platinum</h2>

                                                <div class="scroll" data-package-scroll>
                                                    <ul class="listpacks">
                                                        <li>Unlimited Original Logo Concepts</li>
                                                        <li>8 Dedicated Logo Designer (Industry Specific)</li>
                                                        <li>Unlimited Revisions</li>
                                                        <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                                        <li>Brand Book</li>
                                                        <li>500 Business Cards </li>
                                                        <li>500 Letterheads</li>
                                                        <li>Email Signature Design</li>
                                                        <li>Social Media Designs (Facebook, Twitter, Instagram)</li>
                                                        <li>2 Sided Flyer OR Bi-Fold Brochure Design</li>
                                                        <li>With Grey Scale Format</li>
                                                        <li>Free Icon Design</li>
                                                        <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                                        <li>24 - 48 Hours Turn Around Time</li>
                                                        <li>100% Satisfaction</li>
                                                        <li>100% Ownership Rights</li>
                                                        <li>Money Back Guarantee</li>
                                                        <li>Dedicated Account Manager</li>
                                                    </ul>
                                                </div>
                                                <!--<div class="price-box">-->
                                                <!--    <p>-->
                                                <!--        <sup>$</sup>799.00-->
                                                <!--    </p>-->
                                                <!--</div>-->
                                                <button class="btn btn-theme service-button" data-price="799.00" style="background-color:#ff8f01";>Order now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="web-packages" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="owl-carousel owl-theme" id="website-packages-carousel">
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">WEB_webprotech_BASIC
                                                    </div>
                                                    <!--                                                    <h2 class="category">Basic Website</h2>-->
                                                    <h2 class="category package_name" data-package-name="Basic Website">Basic Website</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>3 Page Website</li>
                                                            <li>Custom Layout Design</li>
                                                            <li>Contact/Query Form</li>
                                                            <li>1 Banner Design</li>
                                                            <li>2 Stock Photos</li>
                                                            <li>FREE Favicon Design</li>
                                                            <li>Cross Browser Compatible</li>
                                                            <li>Complete W3C Certified HTML</li>
                                                            <li>Website Initial Concepts in 48 Hours</li>
                                                            <li>Complete Design & Deployment</li>
                                                            <li>Complete Source Files</li>
                                                            <li>Dedicated Project Manager</li>
                                                            <li>100% Ownership Rights</li>
                                                            <li>100% Satisfaction Guarantee</li>
                                                            <li>100% Money Back Guarantee</li>
                                                            <li>Value Added Services</li>
                                                            <li>Mobile Responsive will be Additional $200*</li>
                                                            <li>CMS will be Additional $250*</li>
                                                            <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>299.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="299.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">WEB_STARTUP </div>
                                                    <!--                                                    <h2 class="category">Startup Website</h2>-->
                                                    <h2 class="category package_name" data-package-name="Startup Website">Startup Website</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>5 Page Website</li>
                                                            <li>Custom Layout Design</li>
                                                            <li>Contact/Query Form</li>
                                                            <li>3 Banner Designs</li>
                                                            <li>5 Stock Photos</li>
                                                            <li>FREE Favicon Design</li>
                                                            <li>FREE Google Friendly Sitemap</li>
                                                            <li>Unlimited Revisions</li>
                                                            <li>Cross Browser Compatible</li>
                                                            <li>Complete W3C Certified HTML</li>
                                                            <li>Website Initial Concepts in 48 Hours</li>
                                                            <li>Complete Design & Deployment</li>
                                                            <li>Complete Source Files</li>
                                                            <li>Dedicated Project Manager</li>
                                                            <li>100% Ownership Rights</li>
                                                            <li>100% Satisfaction Guarantee</li>
                                                            <li>100% Money Back Guarantee</li>
                                                            <li>Value Added Services</li>
                                                            <li>Mobile Responsive will be Additional $200*</li>
                                                            <li>CMS will be Additional $250*</li>
                                                            <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>499.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="499.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">WEB_PROFESSIONAL
                                                    </div>
                                                    <h2 class="category package_name" data-package-name="Professional Website">Professional Website</h2>
                                                    <!--                                                    <h2 class="category">Professional Website</h2>-->
                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>Up to 10 Unique Pages Website</li>
                                                            <li>CMS /Admin Panel Integration</li>
                                                            <li>5+ Stock Photos & Banner Designs</li>
                                                            <li>FREE Social Media Integration</li>
                                                            <li>FREE Favicon Design</li>
                                                            <li>FREE Google Friendly Sitemap</li>
                                                            <li>Unlimited Revisions</li>
                                                            <li>Cross Browser Compatible</li>
                                                            <li>Complete W3C Certified HTML</li>
                                                            <li>Website Initial Concepts in 48 Hours</li>
                                                            <li>Complete Design & Deployment</li>
                                                            <li>Custom, Interactive & Dynamic Web Design</li>
                                                            <li>Industry specified Team of Expert Designers and
                                                                Developers</li>
                                                            <li>Complete Source Files</li>
                                                            <li>Dedicated Project Manager</li>
                                                            <li>100% Ownership Rights</li>
                                                            <li>100% Satisfaction Guarantee</li>
                                                            <li>100% Money Back Guarantee</li>
                                                            <li>Value Added Services</li>
                                                            <li>Mobile Responsive will be Additional $200*</li>
                                                            <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>799.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="799.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">WEB_E_COMMERCE </div>
                                                    <!--                                                    <h2 class="category">E-Commerce Website</h2>-->
                                                    <h2 class="category package_name" data-package-name="E-Commerce Website">E-Commerce Website</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>Custom Ecommerce Website</li>
                                                            <li>Up to 200 Products</li>
                                                            <li>CMS /Admin Panel Integration</li>
                                                            <li>Fully Mobile Responsive</li>
                                                            <li>Shopping Cart Integration</li>
                                                            <li>Payment Gateway Integration</li>
                                                            <li>Product Listing & Management</li>
                                                            <li>Order Management & Tracking</li>
                                                            <li>Banner Designs</li>
                                                            <li>Unlimited Revisions</li>
                                                            <li>FREE Social Media Integration</li>
                                                            <li>FREE Favicon Design</li>
                                                            <li>FREE Google Friendly Sitemap Search Engine Submission
                                                            </li>
                                                            <li>Complete W3C Certified HTML</li>
                                                            <li>Industry specified Team of Expert Designers and
                                                                Developers</li>
                                                            <li>Complete Deployment</li>
                                                            <li>Complete Source Files</li>
                                                            <li>Dedicated Project Manager</li>
                                                            <li>100% Ownership Rights</li>
                                                            <li>100% Satisfaction Guarantee</li>
                                                            <li>100% Money Back Guarantee</li>
                                                            <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>1299.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="1299.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">WEB_CORPORATE </div>
                                                    <!--                                                    <h2 class="category">Corporate Website</h2>-->
                                                    <h2 class="category package_name" data-package-name="Corporate Website">Corporate Website</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>Up to 15 Unique Pages Website</li>
                                                            <li>Custom Made, Interactive & Dynamic Design</li>
                                                            <li>Customized WordPress or PHP Development</li>
                                                            <li>Fully Mobile Responsive</li>
                                                            <li>Interactive Sliding Banners</li>
                                                            <li>Up to 10 Custom Made Banner Designs</li>
                                                            <li>10 Stock Images</li>
                                                            <li>Unlimited Revisions</li>
                                                            <li>Content Management System</li>
                                                            <li>Online</li>
                                                            <li>Signup Area (For Newsletters, Offers etc.)</li>
                                                            <li>Search Bar</li>
                                                            <li>Live Feeds of Social Networks integration (Optional)
                                                            </li>
                                                            <li>Up to 15 Professional Email ID’s</li>
                                                            <li>Google Friendly Sitemap</li>
                                                            <li>Search Engine Submission</li>
                                                            <li>Cross Browser Compatible</li>
                                                            <li>Complete W3C Certified HTML</li>
                                                            <li>Industry specified Team of Expert Designers and
                                                                Developers</li>
                                                            <li>Complete Deployment</li>
                                                            <li>Complete Source Files</li>
                                                            <li>Dedicated Project Manager</li>
                                                            <li>100% Ownership Rights</li>
                                                            <li>100% Satisfaction Guarantee</li>
                                                            <li>100% Money Back Guarantee</li>
                                                            <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>1799.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="1799.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">WEB_PLATINUM </div>
                                                    <!--                                                    <h2 class="category">Platinum Website</h2>-->
                                                    <h2 class="category package_name" data-package-name="Platinum Website">Platinum Website</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>Up to 20 Unique Pages Website</li>
                                                            <li>Custom Made, Interactive, Dynamic & High-End Design</li>
                                                            <li>Customized WordPress or PHP Development</li>
                                                            <li>Fully Mobile Responsive</li>
                                                            <li>Interactive Sliding Banners</li>
                                                            <li>Up to 15 Custom Made Banner Designs</li>
                                                            <li>15 Stock Images</li>
                                                            <li>Unlimited Revisions</li>
                                                            <li>Content Management System</li>
                                                            <li>Online Appointment/Booking/Scheduling/Online Ordering
                                                                Integration (Optional)</li>
                                                            <li>Online Payment Integration (Optional)</li>
                                                            <li>Multi Lingual (Optional)</li>
                                                            <li>Custom Dynamic Forms (Optional)</li>
                                                            <li>Signup Area (For Newsletters, Offers etc.)</li>
                                                            <li>Search Bar</li>
                                                            <li>Live Feeds of Social Networks integration (Optional)
                                                            </li>
                                                            <li>Up to 15 Professional Email ID’s</li>
                                                            <li>Google Friendly Sitemap</li>
                                                            <li>Search Engine Submission</li>
                                                            <li>Cross Browser Compatible</li>
                                                            <li>Complete W3C Certified HTML</li>
                                                            <li>Industry specified Team of Expert Designers and
                                                                Developers</li>
                                                            <li>Complete Deployment</li>
                                                            <li>Complete Source Files</li>
                                                            <li>Dedicated Project Manager</li>
                                                            <li>100% Ownership Rights</li>
                                                            <li>100% Satisfaction Guarantee</li>
                                                            <li>100% Money Back Guarantee</li>
                                                            <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>2999.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="2999.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="brand-packages" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="owl-carousel owl-theme" id="brand-packages-carousel">
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">PRINT_BASIC </div>
                                                    <!--                                                    <h2 class="category">Print Basic</h2>-->
                                                    <h2 class="category package_name" data-package-name="Print Basic">Print Basic</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>Print Media Design</li>
                                                            <li>Stationery Design (Business Card, Leterhead, Envelope
                                                            </li>
                                                            <li>Flyer Design/Postcard (any one)</li>
                                                            <li>Printing Service</li>
                                                            <li>500 x Business Card Prints OR 250 x Flyer Prints</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>249.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="249.00" style="background-color:#ff8f01";>Order now</button>

                                                </div>
                                            </div>
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">PRINT_PLUS </div>
                                                    <!--                                                    <h2 class="category">Print Plus</h2>-->
                                                    <h2 class="category package_name" data-package-name="Print Plus">Print Plus</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>Print Media Design</li>
                                                            <li>Stationery Design (Business Card, Letterhead, Envelope)
                                                            </li>
                                                            <li>Flyer Design/Postcard/Menu Card (any one)</li>
                                                            <li>Printing Service</li>
                                                            <li>500 x Business Card Prints<br>
                                                                500 x Letterhead Prints<br>
                                                                500 x Envelop Prints<br>
                                                                100 x Flyer Prints</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>499.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="499.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                            <div class="wow fadeInDown item">
                                                <div data-package-box class="pricing-box">
                                                    <div class="productSku" style="display: none;">PRINT_CLASSIC </div>
                                                    <!--                                                    <h2 class="category">Print Classic</h2>-->
                                                    <h2 class="category package_name" data-package-name="Print Classic">Print Classic</h2>

                                                    <div class="scroll" data-package-scroll>
                                                        <ul class="listpacks">
                                                            <li>Print Media Design</li>
                                                            <li>Stationery Design (Business Card, Letterhead, Envelope)
                                                                Flyer Design/Postcard/Menu Card (any one)</li>
                                                            <li>Brochure/Product Packaging Design (any one)</li>
                                                            <li>Apparel Design (T-Shirt, Cap, Bumper Sticker</li>
                                                            <li>Printing Service</li>
                                                            <li>1000 Prints Each (Business Card,<br>
                                                                Letterhead, Envelope)<br>
                                                                250 x Flyer/Brochure/<br>
                                                                Menu Card Prints<br>
                                                                50 x T-Shirt Prints</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div class="price-box">-->
                                                    <!--    <p>-->
                                                    <!--        <sup>$</sup>1299.00-->
                                                    <!--    </p>-->
                                                    <!--</div>-->
                                                    <button class="btn btn-theme service-button" data-price="1299.00" style="background-color:#ff8f01";>Order now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row lower-pricing-btn-group">
            <div class="offset-md-1 col-4 col-sm-4 col-md-4 col-lg-4 offset-lg-0 text-right wow fadeInRightBig">
                <div class="consultent-button">
                    <!--<button class="btn btn-theme"><a href="javascript:;" class="live_chatt">Consult on Live Chat <i-->
                    <!--            class="far fa-caret-right"></i></a></button>-->
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 wow fadeInLeftBig">
                <style>
                    .view-all {
                        text-align: center !important;
                    }
                </style>
                <div class="view-all">
                    <a href="package.php"><button class="btn btn-theme btn-white-border pl-4" onclick="location='package.php">View All
                            Packages <i class="far fa-caret-right"></i></button></a>
                </div>
            </div>
            <div class="offset-md-1 col-4 col-sm-4 col-md-4 col-lg-4 offset-lg-0 text-right wow fadeInRightBig">
                <div class="consultent-button">
                    <!--<button class="btn btn-theme"><a href="javascript:;" class="live_chatt">Consult on Live Chat <i-->
                    <!--            class="far fa-caret-right"></i></a></button>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="container">
        <div class="row pricing-cta portfolio-cta">
            <div class="col-lg-6 custom-center wow fadeInLeft">
                <h1>PORTFOLIO THAT SPEAKS A THOUSAND WORDS</h1>
                <p>Creativity Takes Courage. We however add just the right amount.</p>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="row">
                    <div class="offset-md-1 col-6 col-sm-6 col-md-5 col-lg pr-2 wow fadeInDown cutom-padding-left-cta">
                        <a href="tel:+1 332 288-4388">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-phone-square"></i></li>
                                    <li>
                                        <p>Call Us Now</p>
                                    </li>
                                </ul>
                                <p>+1 332 288-4388
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-5 col-lg pl-2 wow fadeInUp cutom-padding-right-cta">
                        <a href="contact.php" class="live_chatt">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-comments"></i></li>
                                    <li>
                                        <p>Contact us</p>
                                    </li>
                                </ul>
                                <p class="we-are">We are here 24/7</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio_logos">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="list_portfolio">
                        <!-- Nav pills -->
                        <div class="button-group filter-button-group">
                            <button data-filter=".all" class="is-checked">All</button>
                            <button data-filter=".animals">Animals</button>
                            <button data-filter=".automobiles">Automobiles</button>
                            <button data-filter=".consulting">Consulting</button>
                            <button data-filter=".education">Education</button>
                            <button data-filter=".entertaiment">Entertainment</button>
                            <button data-filter=".eventmanagment">Event Managment</button>
                            <button data-filter=".fashion">Fashion</button>
                            <button data-filter=".finance">Finance</button>
                            <button data-filter=".food">Food</button>
                            <button data-filter=".healthcarefitness">Healthcare & Fitness</button>
                            <button data-filter=".hotelsresorts">Hotels And Resorts</button>
                            <button data-filter=".insurance">Insurance</button>
                            <button data-filter=".jewelriesaccessories">Jewelries & Accessories</button>
                            <button data-filter=".kidstoys">Kids & Toys</button>
                            <button data-filter=".law">Law</button>
                            <button data-filter=".medical">Medical</button>
                            <button data-filter=".mobileapps">Mobile Apps</button>
                            <button data-filter=".music">Music</button>
                            <button data-filter=".photography">Photography</button>
                            <button data-filter=".realestate">Real Estate</button>
                            <button data-filter=".restaurants">Restaurants</button>
                            <button data-filter=".sports">Sports</button>
                            <button data-filter=".technology">Technology</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <!-- Tab panes -->
                    <div class="grid responsive-slider">
                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/animals/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/automobiles/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/consulting/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item animals">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/animals/5.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item consulting">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/consulting/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item consulting">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/consulting/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item animals">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/animals/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item automobiles">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/automobiles/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item consulting">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/consulting/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/education/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item automobiles">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/automobiles/5.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item logo6">
                            <div class="portfolio_logo_div">
                                <img src="img/dice_logo.html" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item animals">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/animals/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item automobiles">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/automobiles/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item consulting">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/consulting/5.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item education">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/education/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item automobiles">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/automobiles/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item animals">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/animals/4.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/education/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item education">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/education/4.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item education">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/education/5.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item education">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/education/6.jpg" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/entertaiment/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item entertaiment">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/entertaiment/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item entertaiment">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/entertaiment/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item entertaiment">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/entertaiment/4.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/eventmanagment/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item eventmanagment">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/eventmanagment/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item eventmanagment">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/eventmanagment/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item eventmanagment">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/eventmanagment/4.png" class="img-fluid">
                            </div>
                        </div>


                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/fashion/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item fashion">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/fashion/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item fashion">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/fashion/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item fashion">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/fashion/4.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item finance">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/finance/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/finance/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item finance">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/finance/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item finance">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/finance/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item finance">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/finance/5.jpg" class="img-fluid">
                            </div>
                        </div>


                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/food/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item food">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/food/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item food">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/food/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item food">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/food/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item food">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/food/5.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item food">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/food/6.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item food">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/food/7.jpg" class="img-fluid">
                            </div>
                        </div>


                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/healthcarefitness/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item healthcarefitness">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/healthcarefitness/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item healthcarefitness">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/healthcarefitness/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item healthcarefitness">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/healthcarefitness/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item healthcarefitness">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/healthcarefitness/5.jpg" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/hotelsresorts/1.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item hotelsresorts">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/hotelsresorts/2.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item hotelsresorts">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/hotelsresorts/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item hotelsresorts">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/hotelsresorts/4.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item hotelsresorts">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/hotelsresorts/5.jpg" class="img-fluid">
                            </div>
                        </div>


                        <div class="grid-sizer col-lg-4 col-md-6 element-item all">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/insurance/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item insurance">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/insurance/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item insurance">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/insurance/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item insurance">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/insurance/4.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item jewelriesaccessories">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/jewelriesaccessories/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item jewelriesaccessories">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/jewelriesaccessories/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item jewelriesaccessories">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/jewelriesaccessories/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item jewelriesaccessories">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/jewelriesaccessories/4.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item kidstoys">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/kidstoys/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item kidstoys">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/kidstoys/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item kidstoys">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/kidstoys/4.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item kidstoys">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/kidstoys/5.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item law">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/law/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item law">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/law/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item law">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/law/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item law">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/law/4.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item medical">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/medical/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item medical">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/medical/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item medical">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/medical/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item medical">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/medical/4.jpg" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item mobileapps">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/mobileapps/1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item mobileapps">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/mobileapps/2.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item mobileapps">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/mobileapps/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item mobileapps">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/mobileapps/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item mobileapps">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/mobileapps/5.jpg" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item music">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/music/1.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item music">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/music/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item music">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/music/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item music">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/music/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item music">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/music/5.jpg" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item photography">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/photography/1.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item photography">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/photography/2.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item photography">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/photography/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item photography">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/photography/4.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item photography">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/photography/5.jpg" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item realestate">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/realestate/1.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item realestate">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/realestate/2.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item realestate">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/realestate/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item realestate">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/realestate/4.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item realestate">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/realestate/5.jpg" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item restaurants">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/restaurants/1.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item restaurants">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/restaurants/2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item restaurants">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/restaurants/3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item restaurants">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/restaurants/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item restaurants">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/restaurants/5.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item sports">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/sports/1.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item sports">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/sports/2.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item sports">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/sports/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item sports">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/sports/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item sports">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/sports/5.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="grid-sizer col-lg-4 col-md-6 element-item technology">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/technology/1.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item technology">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/technology/2.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item technology">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/technology/3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item technology">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/technology/4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="grid-sizer col-lg-4 col-md-6 element-item technology">
                            <div class="portfolio_logo_div">
                                <img src="img/portfolio/technology/5.png" class="img-fluid">
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Sec -->
<section class="cta_sec professional">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="bta_content">
                    <h1>Take The First Step Towards The <span>Right Direction!</span></h1>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-3">
                            <div class="cta_content text-right justify-content-end">
                                <a href="tel:+1 332 288-4388" class="stretched-link"></a>
                                <p class="mr-2">Call toll free <span>+1 332 288-4388</span></p>
                                <img src="img/call_ic.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="contact.php" class="btn btn-red cta_btn" onclick="location='logo_design.php'">Request a Quote</a>
                        </div>
                        <div class="col-md-4 col-3">
                            <div class="cta_content text-left">
                                <a href="contact.php" class="stretched-link live_chatt"></a>
                                <img src="img/chat_ic.png" class="img-fluid">
                                <p class="ml-2">Need help? <span>CONTACT US NOW</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Cta Sec -->

<section class="reason home-reason">
    <div class="container">
        <div class="row pricing-cta">
            <div class="col-lg-6 custom-center wow fadeInLeft">
                <h1>The Many Reasons <br> to choose us</h1>
                <p>Solutions devised to best suit your needs. We promise you the best logo design service at highly
                    competetive prices.</p>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="row">
                    <div class="offset-md-1 col-6 col-sm-6 col-md-5 col-lg pr-2 wow fadeInDown cutom-padding-left-cta">
                        <a href="tel:+1 332 288-4388">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-phone-square"></i></li>
                                    <li>
                                        <p>Call Us Now</p>
                                    </li>
                                </ul>
                                <p>+1 332 288-4388</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-5 col-lg pl-2 wow fadeInUp cutom-padding-right-cta">
                        <a href="contact.php" class="live_chatt">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-comments"></i></li>
                                    <li>
                                        <p>Contact us</p>
                                    </li>
                                </ul>
                                <p class="we-are">We are here 24/7</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row reason-section" id="stone-carousel">
            <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInRightBig item">
                <div class="stone-box">
                    <ul>
                        <li>
                            <img src="img/chooseus_ic1.png" alt="Orange Orb">
                        </li>
                        <li>
                            <h6 class="color-yellow">Prioritizing Innovation</h6>
                            <p>web pro tech Design Team are always on full throttle providing unique and creative
                                solutions.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInUpBig item">
                <div class="stone-box">
                    <ul>
                        <li>
                            <img src="img/chooseus_ic2.png" alt="Orange Orb">
                        </li>
                        <li>
                            <h6 class="color-blue">Knows your <br>Space</h6>
                            <p>We make sure to have performed an in depth surveillance of each galaxy that we enter.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInLeftBig item">
                <div class="stone-box">
                    <ul>
                        <li>
                            <img src="img/chooseus_ic3.png" alt="Orange Orb">
                        </li>
                        <li>
                            <h6 class="color-yellow">Systematic Methodology</h6>
                            <p>Our streamlined processes and laid out methodologies make the process transparent and
                                easy to follow.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInRightBig item">
                <div class="stone-box">
                    <ul>
                        <li>
                            <img src="img/chooseus_ic4.png" alt="Orange Orb">
                        </li>
                        <li>
                            <h6 class="color-blue">Pin Point<br> Focused</h6>
                            <p>Our Sales based and target focused services are bound to increase customers for you.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDownBig item">
                <div class="stone-box">
                    <ul>
                        <li>
                            <img src="img/chooseus_ic5.png" alt="Orange Orb">
                        </li>
                        <li>
                            <h6 class="color-yellow">Unlimited <br>Revisions</h6>
                            <p>Not satisfied with what you see? No problem you can have it revised as many times as you
                                like.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInLeftBig item">
                <div class="stone-box">
                    <ul>
                        <li>
                            <img src="img/chooseus_ic6.png" alt="Orange Orb">
                        </li>
                        <li>
                            <h6 class="color-blue">100% ownership<br>rights</h6>
                            <p>Whatever you get designed by us is by all means given in copyrights to you.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="award">
    <div class="container">
        <div class="row pricing-cta portfolio-cta">
            <div class="col-lg-6 custom-center wow fadeInLeft">
                <h1>awards we earned by<br> working day & night</h1>
                <p>Having our targets set and our teams ready, the brand has since win a number of awards and scored
                    hundreds of projects.</p>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="row">
                    <div class="offset-md-1 col-6 col-sm-6 col-md-5 col-lg pr-2 wow fadeInDown">
                        <a href="tel:+1 332 288-4388">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-phone-square"></i></li>
                                    <li>
                                        <p>Call Us Now</p>
                                    </li>
                                </ul>
                                <p>+1 332 288-4388</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-5 col-lg pl-2 wow fadeInUp">
                        <a href="contact.php" class="live_chatt">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-comments"></i></li>
                                    <li>
                                        <p>Contact us</p>
                                    </li>
                                </ul>
                                <p class="we-are">We are here 24/7</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row award-images">
            <div class="col-sm-6 col-6 col-md-3 col-lg-3 offset-xl-1 col-xl space">
                <img src="img/award-1.webp" alt="Award">
            </div>
            <div class="col-sm-6 col-6 col-md-3 col-lg-3 col-xl">
                <img src="img/award-2.webp" alt="Award">
            </div>
            <div class="col-sm-6 col-6 col-md-3 col-lg-3 col-xl">
                <img src="img/award-3.webp" alt="Award">
            </div>
            <div class="col-sm-6 col-6 col-md-3 col-lg-3 col-xl">
                <img src="img/award-4.webp" alt="Award">
            </div>
            <div class="offset-xl-1"></div>
        </div>
    </div>
</section>
<section class="client">
    <div class="container">
        <div class="row pricing-cta">
            <div class="col-lg-6 custom-center wow fadeInLeft">
                <h1>see what our clients<br>have to say</h1>
                <p>Solutions devised to best suit your needs. We promise you the best logo design service at highly
                    competetive prices.</p>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="row">
                    <div class="offset-md-1 col-6 col-sm-6 col-md-5 col-lg pr-2 wow fadeInDown cutom-padding-left-cta">
                        <a href="tel:+1 332 288-4388">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-phone-square"></i></li>
                                    <li>
                                        <p>Call Us Now</p>
                                    </li>
                                </ul>
                                <p>+1 332 288-4388</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-5 col-lg pl-2 wow fadeInUp cutom-padding-right-cta">
                        <a href="contact.php" class="live_chatt">
                            <div class="home-cta-box">
                                <ul>
                                    <li><i class="fas fa-comments"></i></li>
                                    <li>
                                        <<p>Contact us</p>
                                    </li>
                                </ul>
                                <p class="we-are">We are here 24/7</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  wow fadeIn" id="testimonial">
            <div class="owl-carousel owl-theme" id="testimonial-carousel">
                <div class="item">
                    <img src="img/testimonial-1.webp" alt="">
                    <div class="testi-box">
                        <p>“Being a businessman myself, I have always valued a thorough professional, and Mathew from
                            web pro tech was one in every way. He guided me throughout the project and kept me up to
                            date. Kudos Guys.”</p>
                        <h1>Martin Hayes</h1>
                        <h6>Bakery Owner</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/testimonial-2.webp" alt="">
                    <div class="testi-box">
                        <p>“I needed an animation for my brand as requested by my boss for the upcoming exhibition. The
                            animation prepared by web pro tech was fun as well as informative. I would definitely
                            recommend them.”</p>
                        <h1>Kevin Mathews</h1>
                        <h6>Marketing Manager</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/testimonial-3.webp" alt="">
                    <div class="testi-box">
                        <p>“I was referred these guys from a friend of mine who hired their services for their website.
                            I needed their SEO service for my website. I am glad I hired them. My website is on a roll
                            babyyy.”</p>
                        <h1>Nikita</h1>
                        <h6>Head of Sales</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row  wow fadeIn" id="mobile-testimonial" style="display: none">
            <div class="owl-carousel owl-theme" id="mobile-testimonial-carousel">
                <div class="item">
                    <img src="img/mobile-testimonial-1.png" alt="">
                    <div class="testi-box">
                        <p>“Being a businessman myself, I have always valued a thorough professional, and Mathew from
                            web pro tech was one in every way. He guided me throughout the project and kept me up to
                            date. Kudos Guys.”</p>
                        <h1>Martin Hayes</h1>
                        <h6>Bakery Owner</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/mobile-testimonial-2.png" alt="">
                    <div class="testi-box">
                        <p>“I needed an animation for my brand as requested by my boss for the upcoming exhibition. The
                            animation prepared by web pro tech was fun as well as informative. I would definitely
                            recommend them.”</p>
                        <h1>Kevin Mathews</h1>
                        <h6>Marketing Manager</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/mobile-testimonial-3.png" alt="">
                    <div class="testi-box">
                        <p>“I was referred these guys from a friend of mine who hired their services for their website.
                            I needed their SEO service for my website. I am glad I hired them. My website is on a roll
                            babyyy.”</p>
                        <h1>Nikita</h1>
                        <h6>Head of Sales</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     // Get all elements with the class "service-button"
    //     const serviceButtons = document.querySelectorAll('.service-button');
    //
    //     // Add a click event listener to each button
    //     serviceButtons.forEach(function(button) {
    //         button.addEventListener('click', function(event) {
    //             event.preventDefault();
    //
    //             // Extract the price associated with this button
    //             const price = parseFloat(button.getAttribute('data-price'));
    //             const package_name = getAttribute('data-package-name');
    //             // Send an AJAX request to set the session variable
    //             const xhr = new XMLHttpRequest();
    //             xhr.open('POST', 'set_session_price.php'); // Replace with the actual PHP script URL
    //             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    //
    //             xhr.onload = function() {
    //                 if (xhr.status === 200) {
    //                     // The session variable has been set
    //                     // You can redirect the user to the order.php page or perform other actions here
    //                     window.location.href = 'order.php';
    //                 } else {
    //                     // Handle any errors here
    //                     console.error('Error setting session variable');
    //                 }
    //             };
    //
    //             // Send the price as data to the PHP script
    //             const data = 'price=' + price;
    //
    //             xhr.send(data);
    //         });
    //     });
    // });


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(".service-button").on("click", function (e) {
        e.preventDefault();

        var price = $(this).data("price");
        var packageName = $(this).closest(".pricing-box").find(".category").data("package-name");

        console.log("Package Name:", packageName);
        console.log("Price:", price);

        $.ajax({
            url: "set_session_price.php",
            type: "POST",
            data: {
                package_name: packageName,
                price: price
            },
            success: function (data) {
                window.location.href = 'order.php';
            },
            error: function (xhr, status, error) {

            }
        });

    });

</script>

<?php include 'includes/footer.php' ?>
