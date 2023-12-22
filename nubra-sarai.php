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


    <!--  about section start here   -->


    <section class="ls-about bg-white">
        <div class="container">
            <div class="row gx-lg-5 align-items-start">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="ls-about-desc">
                        <h4>Welcome to Nubra Sarai</h4>
                        <p><strong>The unsung magnificence which give extravagant and comfortable residence up at the immense Himalayas.</strong></p>
                        <p>Directly over the Khardungla you are invited in the huge Nubra Valley. The Sarai cultivates in the Nubra valley is the unsung magnificence which give extravagant and comfortable residence up at the immense Himalayas. The Swiss tent cabins are your home stay with each pleasantry to battle the extraordinary chilly temperatures. Food is served hot and in the heavenly savor of the north. Outside the camps are the plantations and the greenhouses with the Nubra River scaling through. An unwinding and satisfying excursion is what Nubra Sarai conducts.</p>
                        <div class="mt-4 pt-3">
                            <p><a class="btn gold" href="#"><span>Explore Accommodation</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <figure>
                        <div class="video-placeholder">
                            <a href="https://www.youtube-nocookie.com/embed/GWrIf3fkp10" class="lsvideo01">
                                <img src="https://i1.ytimg.com/vi/GWrIf3fkp10/maxresdefault.jpg" alt="image" />
                                <div class="caption"><img src="images/icons/play-white.svg" alt=""></div>
                            </a>

                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <!--    rooms section start here-->

    <section class="ls-rooms">
        <div class="container">
            <h4>ROOMs</h4>
            <div class="row gx-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-img">
                        <figure>
                            <img src="images/rooms/dummy.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-desc-box">
                        <!--                        <h5>Mud House</h5>-->
                        <hr>
                        <p>The richness of Ladakh and Pangong Tso is in nature’s cordon. At Pangong Sarai life surrounds the sightseers with glimpse of luxury and adventure. The camps fulfill all the requirements of staying healthy and amazed. The pergolas are spacious and comfortable so you do not refrain from admiring the nature. Taking a prompt from its environment, the food in Pangong is characteristic and new. While the culinary specialistes motivation originates from far off, most foods are cultivated, gotten, raised or reared inside a couple of kilometers, fulfilling the cravings of common, all around voyaged people.</p>
                    </div>
                </div>
            </div>

            <div class="row gx-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-img">
                        <figure>
                            <img src="images/rooms/dummy.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-desc-box">
                        <h5>Dining & Food</h5>
                        <hr>
                        <p>Outdoors in the Sarai camps is an astonishing wave. Sustenance brightens up the estimation of an untouched get-away. The style of Sarai is the meals displayed and arranged with rich native ingredients and freshness of the Himalayas. The entire three feasts in the books are incredible flavors with included hot refreshments. The eating lobby situated in the mountains portrays the Ladakhi outdoors in the Sarai frame. The miracles of food turns out from nature in the sterile place known as Ladakh and where it creates an arrangement till the sight is satisfying and living is rich.</p>

                    </div>
                </div>
            </div>
            
<!--
            <div class="row gx-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-img">
                        <figure>
                            <img src="images/rooms/dummy.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-desc-box">
                        <h5>Mud House</h5>
                        <hr>
                        <p>Wake up in the warm reverie of your mud-house that retains both traditional Ladhaki architecture while ensuring that its resident experiences a warm, soothing sense of comfort during their stay. It includes an en-suite bathroom, a 24/7 intercom and LCD, among other facilities. Step out and let the serene views surrounding you render you breathless.</p>
                    </div>
                </div>
            </div>

            <div class="row gx-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-img">
                        <figure>
                            <img src="images/rooms/dummy.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="room-desc-box">
                        <h5>Heritage Wing</h5>
                        <hr>
                        <p>A luxury property that is steeped in history and representative of Ladhaki tradition and culture in its architecture and style, with its own private dining room that overlooks an apple orchard and the outline of the Stok Range. The Heritage is a bungalow with three luxury rooms that include en-suite bathrooms.</p>
                    </div>
                </div>
            </div>
-->
        </div>
    </section>








    <!--       things to do section start here   -->

<!--```
    <section class="ls-todo bgdark bg-white">
        <div class="container">
            <h4>Things To Do</h4>
            <div class="todo-outerbox">
                <div class="swiper" id="todo">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 order-lg-1">
                                    <figure>
                                        <img src="images/todo/yoga-experience.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-lg-12">
                                    <div class="todo-desc">
                                        <h5>Yoga Experience</h5>
                                        <p>Ladakhi plateau's breath, from sky's currents to earth's essence, harmoniously integrates at Ladakh Sarai. Complimentary daily yoga sessions, catering to all levels, flourish in this oasis of natural connection and rejuvenation.</p>
                                        <div class="button-blk"><a class="btn gold" href="#"><span>Know more</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 order-lg-1">
                                    <figure>
                                        <img src="images/todo/Biking.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-lg-12">
                                    <div class="todo-desc">
                                        <h5>Biking</h5>
                                        <p>Ladakh Sarai provides diverse mountain biking experiences against the stunning backdrop of Ladakhi Himalayas, ranging from short rides to multi-day trips, fully supported with backup trucks, camping crew, and comfortable camping gear.</p>
                                        <div class="button-blk"><a class="btn gold" href="#"><span>Know more</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 order-lg-1">
                                    <figure>
                                        <img src="images/todo/Cooking-Class.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-lg-12">
                                    <div class="todo-desc">
                                        <h5>Cooking Class</h5>
                                        <p>Ladakh's diverse cuisine, influenced by Islamic, Tibetan, and local cultures, inspires our chefs at Ladakh Sarai. We offer traditional dishes, gladly sharing culinary knowledge through curated "Cooking sessions.</p>
                                        <div class="button-blk"><a class="btn gold" href="#"><span>Know more</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7 order-lg-1">
                                <figure>
                                    <img src="images/todo/Culinary-Experience.jpg" alt="">
                                </figure>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="todo-desc">
                                    <h5>Culinary Experience</h5>
                                    <p>We prioritize ingredients, growing over 30 varieties of vegetables, fruits, and herbs using local expertise, ensuring freshness and quality. Experience our produce through dishes or farm strolls at Ladakh Sarai.</p>
                                    <div class="button-blk"><a class="underline-link" href="#"><span>Know more</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

                <div class="swiper-button-next round-arrow todo-next"></div>
                <div class="swiper-button-prev round-arrow todo-prev"></div>
                <div class="swiper-pagination todo-pagination fraction-pagination"></div>


                <div class="swiper-pagination todo-pagination fraction-pagination"></div>
            </div>
        </div>
    </section>


-->





    <!--    property amenities section start here-->

    <section class="property-amenities bg2">
        <div class="amenities-outerbox">
            <div class="container">
                <div class="amenities-innerbox">
                    <div class="row intro">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <h4>Property Amenities</h4>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <p>Ladakh Sarai, a haven of serenity, where the breath of Ladakh's plateau harmonizes with daily yoga sessions.</p>
                        </div>
                    </div>

                    <ul>
                        <li>
                            <img src="images/icons/property-amenities/01.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/02.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/03.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/04.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/01.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/02.svg" alt="">
                            <h6>Title here</h6>
                        </li>

                        <li>
                            <img src="images/icons/property-amenities/01.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/02.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/03.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/04.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/01.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/02.svg" alt="">
                            <h6>Title here</h6>
                        </li>

                        <li>
                            <img src="images/icons/property-amenities/01.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/02.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/03.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/04.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/01.svg" alt="">
                            <h6>Title here</h6>
                        </li>
                        <li>
                            <img src="images/icons/property-amenities/02.svg" alt="">
                            <h6>Title here</h6>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>




    <section class="section-intro">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <h4>Property Amenities</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <p>Farms cover a major area in Sarai, where we cultivate fresh vegetables and fruits for a farm-to-table menu. We subtly engage you in the traditions of Ladakh and give you a sense of this ecological paradise. We offer generous and profound sustenance in different styles, not bound by traditional cooking methods but rather highlighting the best of different cuisines to nourish our guests.</p>
                </div>
            </div>
        </div>
    </section>



<!--
    <section class="property-tables">
        <div class="container">
            <div class="row gx-lg-5 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-4">
                <div class="col">
                    <div class="table-card">
                        <figure>
                            <img src="images/tables/chansa.jpg" alt="">
                            <figcaption>
                                <h6>Chansa</h6>
                                <p>“Chansa – Communal dining space” is the primary eating corridor in Sarai. We have the motivation of our food from the schedule of the entire world and fresh produce from the farm...</p>
                                <div class="knowmore">
                                    <p><a class="colorcta" href="#">Learn more</a></p>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col">
                    <div class="table-card">
                        <figure>
                            <img src="images/tables/hornbill.jpg" alt="">
                            <figcaption>
                                <h6>Hornbill</h6>
                                <p>The first of its kind northeast Nagaland cuisine restaurant in the the Ladakh region. The hornbill provides a sumptuous Naga thali ( A complete meal with various dished served on a large plate)...</p>
                                <div class="knowmore">
                                    <p><a class="colorcta" href="#">Learn more</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col">
                    <div class="table-card">
                        <figure>
                            <img src="images/tables/syah.jpg" alt="">
                            <figcaption>
                                <h6>Syah</h6>
                                <p>“Syah” brings out the best of our chefs. The dinner specific restaurant gives you a sturdy sense of time where menu continues changing according to the season and availability of the ingredients locally...</p>
                                <div class="knowmore">
                                    <p><a class="colorcta" href="#">Learn more</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col">
                    <div class="table-card">
                        <figure>
                            <img src="images/tables/barbecue.jpg" alt="">
                            <figcaption>
                                <h6>Barbecue</h6>
                                <p>With a private deck and wide glass windows, these modern rooms are perfect for couple travelling together. Chalet offers it’s own romantic feel, the grand view of the village...</p>
                                <div class="knowmore">
                                    <p><a class="colorcta" href="#">Learn more</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->


    <!--    gallery section start here         -->

    <section class="ls-gallery">
        <div class="container">
            <h4>Image Gallery</h4>
            <div class="row g-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-lg-5 row-cols-1 row-cols-sm-1 row-cols-md-2">
                        <div class="col">
                            <figure><img src="images/gallery/01.jpg" alt=""></figure>
                            <figure><img src="images/gallery/02.jpg" alt=""></figure>
                        </div>
                        <div class="col">
                            <figure><img src="images/gallery/03.jpg" alt=""></figure>
                        </div>
                        <div class="col w-100">
                            <figure><img src="images/gallery/06.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <figure><img src="images/gallery/04.jpg" alt=""></figure>
                    <figure><img src="images/gallery/05.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </section>


    <!--   location section start here-->


    <section class="ls-location">
        <!--
        <div class="container">
            <section class="section-intro">
                <h4>Location</h4>
            </section>
        </div>
-->

        <div class="row g-0">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <figure>
                    <video class="lazy" loop muted autoplay playsinline>
                        <source src="video/splash.mp4" type="video/mp4">
                        Your browser does not support the HTML5 Video element.
                    </video>
                    <!--<img src="images/location/location.jpg" alt="">-->
                </figure>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="ls-location-desc">
                    <h4>Location</h4>
                    <ul>
                        <li>Located: Ayu Saboo, Saboo, Leh</li>
                        <li>Leh Airport 5 km away</li>
                        <li>De Pashmina Emporium 4.9 km away</li>
                        <li>Khardung La 5.2 km away</li>
                        <li>Hall of Fame 6.9 km away</li>
                        <li>Leh Palace 7.5 km away</li>
                        <li>Thiksey Monastery 9.1 km away</li>
                        <li>Shanti Stupa 10 km away
                        </li>
                    </ul>
                    <!--
                    <ul>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Located: Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                    </ul>
-->

                    <!--
                    <ul>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                        <li><i class="bi bi-geo-alt"></i></li>
                        <li>Ayu Saboo, Saboo, Leh</li>
                    </ul>
-->
                    <div class="knowmore">
                        <p class="m-0"><a class="btn gold d-inline-block" href="#"><span>Get direction</span></a></p>
                    </div>


                </div>
            </div>
        </div>


    </section>






    <!--    testimonial section start here                         -->

    <section class="ls-testimonials">
        <div class="container-fluid">
            <div class="swiper" id="testimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ls-testimonials-card">
                            <h3>Best place to stay in Ladakh</h3>
                            <p>Fantastic property with a great view from the duplex rooms. Hospitality was the best experienced. The staff with a special mention to Feroz was outstanding & always eager to help. Special thanks to Jigmet for suggesting & arranging our trip.</p>
                            <div class="person-info">
                                <div class="person-picture">
                                    <img src="<?php echo $root;?>images/testimonials/sv.jpg" alt="">
                                </div>
                                <div class="person-desc">
                                    <h6>V Sudhanshu</h6>
                                    <p>New Delhi, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ls-testimonials-card">
                            <h3>Best place to stay in Ladakh</h3>
                            <p>Fantastic property with a great view from the duplex rooms. Hospitality was the best experienced. The staff with a special mention to Feroz was outstanding & always eager to help. Special thanks to Jigmet for suggesting & arranging our trip.</p>
                            <div class="person-info">
                                <div class="person-picture">
                                    <img src="<?php echo $root;?>images/testimonials/sv.jpg" alt="">
                                </div>
                                <div class="person-desc">
                                    <h6>V Sudhanshu</h6>
                                    <p>New Delhi, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ls-testimonials-card">
                            <h3>Best place to stay in Ladakh</h3>
                            <p>Fantastic property with a great view from the duplex rooms. Hospitality was the best experienced. The staff with a special mention to Feroz was outstanding & always eager to help. Special thanks to Jigmet for suggesting & arranging our trip.</p>
                            <div class="person-info">
                                <div class="person-picture">
                                    <img src="<?php echo $root;?>images/testimonials/sv.jpg" alt="">
                                </div>
                                <div class="person-desc">
                                    <h6>V Sudhanshu</h6>
                                    <p>New Delhi, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ls-testimonials-card">
                            <h3>Best place to stay in Ladakh</h3>
                            <p>Fantastic property with a great view from the duplex rooms. Hospitality was the best experienced. The staff with a special mention to Feroz was outstanding & always eager to help. Special thanks to Jigmet for suggesting & arranging our trip.</p>
                            <div class="person-info">
                                <div class="person-picture">
                                    <img src="<?php echo $root;?>images/testimonials/sv.jpg" alt="">
                                </div>
                                <div class="person-desc">
                                    <h6>V Sudhanshu</h6>
                                    <p>New Delhi, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ls-testimonials-card">
                            <h3>Best place to stay in Ladakh</h3>
                            <p>Fantastic property with a great view from the duplex rooms. Hospitality was the best experienced. The staff with a special mention to Feroz was outstanding & always eager to help. Special thanks to Jigmet for suggesting & arranging our trip.</p>
                            <div class="person-info">
                                <div class="person-picture">
                                    <img src="<?php echo $root;?>images/testimonials/sv.jpg" alt="">
                                </div>
                                <div class="person-desc">
                                    <h6>V Sudhanshu</h6>
                                    <p>New Delhi, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ls-testimonials-card">
                            <h3>Best place to stay in Ladakh</h3>
                            <p>Fantastic property with a great view from the duplex rooms. Hospitality was the best experienced. The staff with a special mention to Feroz was outstanding & always eager to help. Special thanks to Jigmet for suggesting & arranging our trip.</p>
                            <div class="person-info">
                                <div class="person-picture">
                                    <img src="<?php echo $root;?>images/testimonials/sv.jpg" alt="">
                                </div>
                                <div class="person-desc">
                                    <h6>V Sudhanshu</h6>
                                    <p>New Delhi, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->

                <div class="swiper-pagination testimonials-pagination"></div>

                <!-- If we need navigation buttons -->

                <!--<div class="swiper-button-next testimonials-next"></div><div class="swiper-button-prev testimonials-prev"></div>-->

            </div>
        </div>
    </section>





    <!--              awards section start here          -->

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
