<!doctype html>
<html class="no-js" lang="en">
<?php
$root = "";
$active = "contact";
$title = "Contact";
$metakeyw = "";
$metadesc = "";
include $root . "includes/head.php";
?>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!--header start here-->

    <?php include $root."includes/header.php"; ?>

    <!--  main banner start here-->


    <section class="mainbanner">
        <div class="swiper" id="mainswiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source media="(min-width:991px)" srcset="<?php echo $root;?>images/contact-banner.jpg">
                        <img src="<?php echo $root;?>images/contact-banner.jpg" alt="" title="" loading="lazy">
                    </picture>

                    <div class="caption">
                        <div class="container">
                            <div class="inside-container">
                                <h1>Nestled in the <br>Himalayas’ Stok Range</h1>
                                <h5>Ladakh Sarai offers luxurious accommodations amid stunning mountain views</h5>
                                <div class="button-blk"><a href="#" class="btn outline white">BOOK NOW</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
          <div class="swiper-pagination ms-pagination"></div>
          <div class="swiper-button-next ms-next"></div>
          <div class="swiper-button-prev ms-prev"></div>
-->
        </div>

    </section>


    <!--    contact section start here-->

    <section class="contact-info">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="ci-lhs">
                        <h4>Let's get in touch</h4>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="ci-rhs">
                        <h5 class="fw-light fs-18">Please contact us for additional information about designations &amp; the bookings we can deliver for you</h5>
                        <h5 class="fw-light fs-18">I am Interested In</h5>
                        <div class="form-nav-tabs">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Ladakh Sarai </button>
                                    <span>|</span>
                                    <button class="nav-link" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false" tabindex="-1">Pangong Sara</button>
                                    <span>|</span>
                                    <button class="nav-link" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false" tabindex="-1">Nubra Sarai </button>
                                    <span>|</span>
                                    <button class="nav-link" id="nav-four-tab" data-bs-toggle="tab" data-bs-target="#nav-four" type="button" role="tab" aria-controls="nav-four" aria-selected="false" tabindex="-1">Hunder Sarai </button>
                                    <span>|</span>
                                    <button class="nav-link" id="nav-five-tab" data-bs-toggle="tab" data-bs-target="#nav-five" type="button" role="tab" aria-controls="nav-five" aria-selected="false" tabindex="-1">Tara Mountain Sarai</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="form-section">
            <div class="container">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab" tabindex="0">
                        <div class="row gx-lg-5 g-0">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="fs-lhs">
                                    <h6>Please provide your most valuable information, so we can help you better!</h6>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="fs-rhs">
                                    <form action="#" method="post">
                                        <div class="row gx-lg-4">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required="">
                                                    <label for="name">Full Name <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" name="email" id="cnumber" placeholder="Contact No." required="">
                                                    <label for="cnumber">Contact No. <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" required="">
                                                    <label for="email">Email <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                                    <label for="massage">Message</label>
                                                    <p><small>This page is protected by reCAPTCHA and the Google privacy policy and terms of use apply .</small></p>
                                                </div>
                                            </div>
                                            <!-- <button type="button" class="btn blue">Submit <span></span></button> -->
                                            <input type="hidden" name="mediaform" value="1">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mt-4">
                                                    <!-- <input type="submit" name="investorform" class="btn blue"> -->
                                                    <!-- <button type="button" class="btn blue">Submit <span></span></button> -->
                                                    <button class="btn gold" type="button">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab" tabindex="0">
                        <div class="row gx-lg-5 g-0">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="fs-lhs">
                                    <h6>Please provide your most valuable information, so we can help you better!</h6>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="fs-rhs">
                                    <form action="contact.php" method="post" id="form4">
                                        <div class="row gx-lg-4">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                                                    <label for="name">Name <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" required="">
                                                    <label for="email">Email ID <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="message" name="message" placeholder="Write you query here...." rows="5"></textarea>
                                                    <label for="massage">Query</label>
                                                    <p><small>This page is protected by reCAPTCHA and the Google privacy policy and terms of use apply .</small></p>
                                                </div>
                                            </div>
                                            <input type="hidden" name="generalEnquiryForm" value="1">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mt-4">
                                                    <!-- <input type="submit" name="investorform" class="btn blue"> -->
                                                    <!-- <button type="button" class="btn blue">Submit <span></span></button> -->
                                                    <div>
                                                        <div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;">
                                                            <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-66nwne4edt39" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcwGtomAAAAADdpwM5cxLFjwu5XlGptJmEc_9Pb&amp;co=aHR0cHM6Ly93d3cuZGNtc2hyaXJhbS5jb206NDQz&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=invisible&amp;sa=submit&amp;cb=ruxm5fc1u6ue"></iframe></div>
                                                            <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div>
                                                    </div><button class="g-recaptcha btn blue" data-sitekey="6LcwGtomAAAAADdpwM5cxLFjwu5XlGptJmEc_9Pb" data-callback="form4" data-action="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab" tabindex="0">
                        <div class="row gx-lg-5 g-0">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="fs-lhs">
                                    <h6>Please provide your most valuable information, so we can help you better!</h6>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="fs-rhs">
                                    <form action="contact.php" method="post" id="form2">
                                        <div class="row gx-lg-4">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                                                    <label for="name">Name <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" required="">
                                                    <label for="email">Email ID <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number" required="">
                                                    <label for="phone">Phone Number <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" name="organization" id="organization" placeholder="Organization Name" required="">
                                                    <label for="Organization">Organization Name <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="message" name="message" placeholder="Write you query here...." rows="5"></textarea>
                                                    <label for="massage"> Query</label>
                                                    <p><small>This page is protected by reCAPTCHA and the Google privacy policy and terms of use apply .</small></p>
                                                </div>
                                            </div>
                                            <input type="hidden" name="investorform" value="1">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mt-4">
                                                    <!-- <input type="submit" name="investorform" class="btn blue"> -->
                                                    <!-- <button type="button" class="btn blue">Submit <span></span></button> -->
                                                    <div>
                                                        <div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;">
                                                            <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-66npipx7ddyj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcwGtomAAAAADdpwM5cxLFjwu5XlGptJmEc_9Pb&amp;co=aHR0cHM6Ly93d3cuZGNtc2hyaXJhbS5jb206NDQz&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=invisible&amp;sa=submit&amp;cb=yu5k2asfrxu1"></iframe></div>
                                                            <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div>
                                                    </div><button class="g-recaptcha btn blue" data-sitekey="6LcwGtomAAAAADdpwM5cxLFjwu5XlGptJmEc_9Pb" data-callback="form2" data-action="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab" tabindex="0">
                        <div class="row gx-lg-5 g-0">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="fs-lhs">
                                    <h6>Please provide your most valuable information so we can assist you better!</h6>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="fs-rhs">
                                    <form action="contact.php" method="post" id="form1">
                                        <div class="row gx-lg-4">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                                                    <label for="name">Name <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" required="">
                                                    <label for="email">Email ID <span>*</span></label>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                <!--                                                <div class="form-control">-->
                                                <select class="form-select" id="industry" name="industry" required="">
                                                    <optgroup label="Business Unit:">
                                                        <option value="" disabled="" selected="" hidden="">Choose the industry</option>
                                                        <option value="DCM Shriram Ltd - Chemicals">DCM Shriram Ltd - Chemicals</option>
                                                        <option value="Shriram Fertilisers &amp; Chemicals, Kota">Shriram Fertilisers &amp; Chemicals, Kota</option>
                                                        <option value="Shriram Alkali &amp; Chemicals, Bharuch">Shriram Alkali &amp; Chemicals, Bharuch</option>
                                                        <option value="Shriram Vinyl">Shriram Vinyl</option>
                                                        <option value="Shriram Cement Works">Shriram Cement Works</option>
                                                        <option value="Shriram Polytech">Shriram Polytech</option>
                                                    </optgroup>
                                                    <optgroup label="Business Divisions:">
                                                        <option value="Shriram Farm Solutions">Shriram Farm Solutions</option>
                                                        <option value="DCM Shriram Ltd - Sugar">DCM Shriram Ltd - Sugar</option>
                                                        <option value="Fenesta Building Systems">Fenesta Building Systems</option>
                                                        <option value="Shriram Bioseed Genetics">Shriram Bioseed Genetics</option>
                                                    </optgroup>
                                                </select>
                                                <!--                                                    <label for="industry">Choose the industry</label>-->
                                                <!--                                                </div>-->
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                <div class="form-floating">
                                                    <textarea required="" class="form-control" id="message" name="message" placeholder="Write you query here...." rows="5"></textarea>
                                                    <label for="massage">Query</label>
                                                    <p><small>This page is protected by reCAPTCHA and the Google privacy policy and terms of use apply .</small></p>
                                                </div>
                                            </div>
                                            <!-- <input type="hidden" name="recaptcha_token1" id="recaptcha_token1"> -->
                                            <input type="hidden" name="submitformbusiness" value="1">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                <div class="form-group mt-4">
                                                    <!-- <button type="button" class="btn blue">Submit <span></span></button> -->
                                                    <!-- <input type="submit" name="submitformbusiness" class="btn blue"> -->
                                                    <div>
                                                        <div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;">
                                                            <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-fj8tip7sndsm" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcwGtomAAAAADdpwM5cxLFjwu5XlGptJmEc_9Pb&amp;co=aHR0cHM6Ly93d3cuZGNtc2hyaXJhbS5jb206NDQz&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=invisible&amp;sa=submit&amp;cb=w79r1m59qp3n"></iframe></div>
                                                            <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-3" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div><iframe style="display: none;"></iframe>
                                                    </div><button class="g-recaptcha btn blue" data-sitekey="6LcwGtomAAAAADdpwM5cxLFjwu5XlGptJmEc_9Pb" data-callback="form1" data-action="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php include $root."includes/footer.php"; ?>
    <?php include $root."includes/scripts.php"; ?>
</body>
<script>
</script>

</html>