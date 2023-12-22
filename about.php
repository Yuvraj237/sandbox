<!doctype html>
<html class="no-js" lang="en">
<?php
$root = "";
$active = "home";
$title = "Ladakh Sarai Resort";
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
                        <source media="(min-width:991px)" srcset="<?php echo $root;?>images/ladakh-sarai/ladakh-sarai-banner.jpeg">
                        <img src="<?php echo $root;?>images/ladakh-sarai/ladakh-sarai-banner.jpeg" alt="" title="" loading="lazy">
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



    <section class="ls-about bg-white">

        <div class="container">
            <div class="row g-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-desc-box">
                        <h5>Our Story</h5>

                        <p>Ladakh, a highland of cold passes is an untouched land on planet earth hailing its visitors to glance down heaven. Nesting in the gratifying branch of the Great Himalayas are our luxurious resorts and camps greeting the admirers for hospitality of utmost comfort and paradise. We grant blissful service in the astonishing barren land to showcase the serenity of this wonderland. Sarai has its own quiet terrain. We have incorporated solitude of serenity in our vicinities just in the backyard of the heavenly drawing locations. We cover the Ayu Village in Leh with <a href="Ladakh-Sarai">Ladakh Sarai</a>, Pangong Tso with <a href="pangong-sarai">Pangong Sarai</a> and The Nubra Valley with <a href="nubra-sarai">Nubra Sarai</a> and <a href="hunder-sarai.php">Hunder Sarai</a> and Zanskar Valley with <a href="tara-mountain-sarai.php">Tara Mountain Sarai</a>.</p>
                         <div class="mt-4 pt-3">
                            <p><a class="btn gold" href="#"><span>Explore Accommodation</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-desc-box">
                        <h5>Our History</h5>

                        <p>At Sarai history and heritage merge with comfort, picturesque landscape and warm hospitality to create a resort that retains its natural quintessence. The origin lies in its deep rooted history, as it was first established in 1978 by British adventure travel pioneers. As time went by, we have succeeded in keeping the legacy of Sarai intact, while inculcating a sense of comfort to develop it as a resort that indulges you nature and luxury combined. The present grand and luxurious structure of Ladakh Sarai was created by two men together – Lotus Sandup and Rigzin Namgyal, partners in business with complimenting attributes.</p>
                         <div class="mt-4 pt-3">
                            <p><a class="btn gold" href="#"><span>Explore Accommodation</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            

        </div>


    </section>

    <section class="about-slider">
        <div class="container-fluid">
                <div class="swiper" id="mainswiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo $root;?>images/ladakh-sarai/ladakh-sarai-banner.jpeg" alt="" title="" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo $root;?>images/gallery/01.jpg" alt="" title="" loading="lazy">
                        </div>
                    </div>
                    <!--
          <div class="swiper-pagination ms-pagination"></div>
          <div class="swiper-button-next ms-next"></div>
          <div class="swiper-button-prev ms-prev"></div>
-->
                </div>
            <div class="caption">
                <p><strong>Inspired design    exemplary destinations    Stay at LADAKH SARAI</strong></p>
            </div>

        </div>

    </section>



    <section class="ls-awards">
        <div class="container">
            <h4>ACCREDITATIONS &amp; AWARDS</h4>
            <ul>
                <li><a href="#"><img src="images/awards/placeholder01.png" alt=""></a></li>
                <li><a href="#"><img src="images/awards/placeholder02.png" alt=""></a></li>
                <li><a href="#"><img src="images/awards/placeholder03.png" alt=""></a></li>
                <li><a href="#"><img src="images/awards/placeholder01.png" alt=""></a></li>
                <li><a href="#"><img src="images/awards/placeholder02.png" alt=""></a></li>
                <li><a href="#"><img src="images/awards/placeholder03.png" alt=""></a></li>
            </ul>
        </div>
    </section>





    <?php include $root."includes/footer.php"; ?>
    <?php include $root."includes/scripts.php"; ?>
</body>
<script>
</script>

</html>
