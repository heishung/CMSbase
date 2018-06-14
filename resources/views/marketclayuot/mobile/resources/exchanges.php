<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://marketc.net/images/logo.png">
    <link rel="apple-touch-icon image_src" href="https://marketc.net/images/logo.png">

    <meta property="og:image" content="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title >Digital payment anywhare, anytime </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css?ver=1.4">
    <link rel="stylesheet" href="front/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/customstyle.css?ver=1.3">
    <link rel="stylesheet" href="front/Themify/themify-icons/themify-icons.css">
    <script type="text/javascript" src="js/particles.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 992px)" href="css/style-mobile.css" >
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
</head>
<body data-spy="scroll" data-target="#navbar-example">

<div id="wraper background-whitesmoke">
    <?php
    session_start();
    ?>
    <div class="position-fixed col-lg-4 col-xl-4 col-md-5 col-xs-10 col-sm-10 form-contact modal-content w-100  " style="right: 0%;z-index: 112;top: 32%;display: none;" >
        <div class="modal-header">
            <h6 class="mx-auto modal-title text-capitalize" id="exampleModalLabel">ASK A QUESTION</h6>

            <button type="button" class="close pl-0 ml-0" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate="" name="contactform" method="post" action="send_form_email.php">

                <div class="form-row mb-2">
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipNamePrepend"><i class="text-primary fas fa-user"></i></span>
                            </div>
                            <input name="name" type="text" class="form-control" id="validationTooltipName" placeholder="Name" aria-describedby="validationTooltipNamePrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipPhonePrepend"><i class="fas fa-phone text-primary"></i></span>
                            </div>
                            <input name="telephone" type="tel" maxlength="11" minlength="10" class="form-control" id="validationTooltipPhone" placeholder="Phone" aria-describedby="validationTooltipPhonePrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid Phone.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipEmailPrepend"><i class="text-primary fas fa-envelope"></i></span>
                            </div>
                            <input name="email" type="email" class="form-control" id="validationTooltipEmail" placeholder="Email" aria-describedby="validationTooltipEmailPrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid Email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="text-primary fab fa-font-awesome-flag"></i></span>
                            </div>
                            <input name="country" type="text" class="form-control" id="validationTooltipUsername" placeholder="Country" aria-describedby="validationTooltipUsernamePrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid country.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipCountryPrepend"><i class="text-primary fas fa-comment"></i></span>
                            </div>
                            <textarea style="height: 85px;" name="comments" type="text" class="form-control" id="validationTooltipCountry" placeholder="Message" aria-describedby="validationTooltipCountryPrepend" required=""></textarea>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid Message.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
    <div class="btn-contact-form" ><img style="max-width: 53px;object-fit: fill;left: -17%;position: absolute;top: -17%;" src="images/clipboard-with-pencil.png" alt=""></div>
<div id="mobile" class="">
    <?php require 'mb/header-m.php'?>
    <div class="clearfix"></div>
    <div class="m-container">
        <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative;line-height: 50px">
            exchanges
        </div>
        <div class="pb-5 border-bottom" id="ss2" style="background-image: url(images/bg-m-resources.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;cursor: -webkit-grab;">

            <div class="clearfix"></div>

            <!-- Swiper -->

            <?php

            for ($i=1;$i<=31;$i++)
            {
                ?>
                <style>
                   .box-nonprofit .p-2:nth-child(<?php echo $i ?>) > .item-communities .row:before{content:'<?php echo $i ?>.';color: white;font-size: 12px;font-weight: bold;margin-right: 5px;padding-left: 10px;
                </style>
                <?php
            }

            ?>
            <div class="d-flex box-nonprofit flex-row flex-wrap with-100">
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">

                        <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">
                            international
                        </div>
                        <div class="content-item1-ss2">
                            <ul>
                                <li>Bisq</li>
                                <li>Bitstamp</li>
                                <li>Bitwage</li>
                                <li>Kraken</li>
                                <li>Local MarketCs</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row">
                            <div class="img-head-cm mb-3">
                                <img src="images/flag/download.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                europe
                            </div>
                        </div>

                        <div class="content-item1-ss2">
                            <ul>
                                <li>AnyCoin Direct</li>
                                <li>MarketC.de</li>
                                <li>BitPanda</li>
                                <li>BL3P</li>
                                <li>Paymium</li>
                                <li>The Rock Trading</li>
                                <li>Projects - MarketCProjects.net</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row">
                            <div class="img-head-cm mb-3"><img alt="" src="images/flag/Flag_of_Australia.svg"></div>
                            <div class="title-ss h6 font-weight-bold text-uppercase" style="position: relative">
                                Australia
                            </div>
                        </div>
                        <div class="content-item1-ss2">
                            <ul>
                                <li>MarketC Australia</li>
                                <li>CoinJar</li>
                                <li>CoinLoft</li>
                                <li>CoinTree</li>
                                <li>HardBlock</li>
                                <li>Independent Reserve</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/argentinian-flag-graphic.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                Argentina
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>SatoshiTango</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/1280px-Flag_of_Brazil.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                brazil
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Foxbit</li>
                                <li>Mercado MarketC</li>
                                <li>Walltime</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/255px-Flag_of_Cambodia.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                cambodia
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>MarketC Cambodia</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_Chile.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                chile
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>SurBTC</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/Flag_of_Canada_(Pantone).svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                canada
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bitaccess</li>
                                <li>Canadian MarketCs</li>
                                <li>Quadriga CX</li>
                                <li>QuickBT</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/255px-Flag_of_the_People's_Republic_of_China.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                china
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Huobi</li>
                                <li>OKCoin</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_Costa_Rica_(state).svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                costa rica
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bitmae</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/co.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                colombia
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>SurBTC</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/1200px-Flag_of_India.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                india
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Coindelta</li>
                                <li>Coinsecure</li>
                                <li>Zebpay</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/1200px-Flag_of_Indonesia.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                indonesia
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>MarketC Indonesia</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/1024px-Flag_of_Israel.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                israel
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bit2C</li>
                                <li>Bits of Gold</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/Flag_of_Italy.svg" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                italy
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Postebit</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/japan-flag.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">
                                japan
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>BtcBox</li>
                                <li>Coincheck</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/Flag_of_Malaysia.svg" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">
                                Malaysia
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Luno</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_Mexico.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                mexico
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bitso</li>
                                <li>Volabit</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/np.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                nepal
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bitsewa</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_New_Zealand.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                new zealand
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Independent Reserve</li>
                                <li>Kiwi-coin</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_Nigeria.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                nogeria
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>luno</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_Peru_(state).svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                peru
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bitsewa</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/Flag_of_Poland.svg" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                poland
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bithumb</li>
                                <li>Coinone</li>
                                <li>Korbit</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/255px-Flag_of_Singapore.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                singapore
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Luno</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_South_Africa.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                South Africa
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>iceCUBED</li>
                                <li>Luno</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/640px-Flag_of_South_Korea.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                south korea
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Independent Reserve</li>
                                <li>Kiwi-coin</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_Ukraine.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                ukraine
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Kuna</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/Flag_of_the_United_Arab_Emirates.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                United Arab
                                Emirates
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>BitOasis</li>
                                <li>Karsha</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/images.jpg" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                United Kingdom
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Bittylicious</li>
                                <li>CoinCorner</li>
                                <li>Coinfloor</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/1280px-Flag_of_the_United_States.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                United States
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Gemini</li>
                                <li>itBit</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <div class="item-communities">
                        <div class="row"><div class="img-head-cm mb-3">
                                <img src="images/flag/2000px-Flag_of_Venezuela.svg.png" alt="">
                            </div>
                            <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                Venezuela
                            </div>
                        </div><div class="content-item1-ss2">
                            <ul>
                                <li>Cryptobuyer</li>
                            </ul>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <div class="clearfix "></div>
        <div class="pt-5 pb-5 border-bottom background-ebebeb" id="ss5">
            <div class="container">
                <div class="row ">
                    <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative">
                        our partners
                    </div>
                </div>
                <!-- <div class="row"><p class="mx-auto text-left text-justify">Our Board of Advisors includes pedigreed global business professionals and influencers, it is not stacked with pre-ICO hype-makers, all are our long-term trusted business partners.</p></div>-->

                <div class="d-flex flex-wrap justify-content-around m-box-partners">
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid"  alt="Card image cap" src="images/ourpartners/1.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/2.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/3.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/4.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/5.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/6.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/7.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/8.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/9.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/10.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/11.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/12.png">
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix "></div>
    </div>
    <div class="clearfix"></div>
    <?php require 'mb/ft-m.php'?>
</div>
<a href="https://t.me/joinchat/HiPVKRMFh7-oleJ_dTpcVA" target="_blank" class="fixed-btn w-inline-block"><img src="images/tele.png" class="plane-ico" data-ix="plane-loop" ></a>
</div>

<script src="js/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="js/jquery.shorten.min.js"></script>
<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        loop:true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 70,
            stretch: 70,
            depth: 70,
            modifier: 2,
            slideShadows : false,
        },
       /* pagination: {
            el: '.swiper-pagination',
        },*/
    });
</script>
<style>
    .swiper-slide{

        min-height: 309px;
    }
</style>

<script type="text/javascript">

    $(".m-comment").shorten({
        "showChars" : 100,
        "moreText"  : "<i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i>",
        "lessText"  : "<i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i>",
    });
</script>
<?php

if (isset($_SESSION["mes"]) ) {
    $mes=$_SESSION["mes"];
    echo
    "<script type='text/javascript'> 
     $.notify({   
                        message: 'Send sussces'
                    },{
                    
                        type: 'success'
                    });
</script>"
    ;
    session_unset("mes");

}
if (isset($_SESSION["meser"]) ) {
    $mes=$_SESSION["meser"];
    echo
    "<script type='text/javascript'> 
     $.notify({   
                        message: 'Send error'
                    },{
                    
                        type: 'success'
                    });
</script>"
    ;
    session_unset("meser");

}
?>

<script>

    $(function () {
        $('#myTab li:first-child a').tab('show');
    });
    function goToByScroll(id){
        // Reove "link" from the ID
        id= id.replace("link", "");
        // Scroll
        $('html,body').animate({
                scrollTop: $("#"+id).offset().top},
            'slow');
    }

    $(".navbar-example > ul > li > a").click(function(e) {
        // Prevent a page reload when a link is pressed
        e.preventDefault();

        // Call the scroll function
        goToByScroll($(this).attr("id"));
    });
</script>
<script>

    $( ".menu-button" ).click(function() {

        $( "#mySidenav" ).slideToggle( "slow",function () {
            $(".fa-window-minimize").toggleClass('fa-rt');

        } );

    });

    $( ".btn-link" ).click(function() {

        $(this).find(".fa-angle-right").toggleClass('fa-angle-r');

    });


</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".btn-contact-form").click(function(){
            $(".form-contact").toggle();
        });

        $(".close").click(function () {
            $('.form-contact').css('display','none')
        });


        /*  $( ".btn-doc-show" ).click(function() {
              $(this).animate({ "right": "-10%" }, "slow" );
              $( "#doc" ).animate({ "right": "0%" }, "slow" );

          });

          $( ".btn-doc-hide" ).click(function(){
              $( "#doc" ).animate({ "right": "-15%" }, "slow" );
              $(".btn-doc-show").animate({ "right": "-1.6%" }, "slow" );
          });
          $(document).ready(function () {
              if (!$.browser.webkit) {
                  $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
              }
          });*/
    });

</script>
<script>
    function cl() {
        $('.as').on('click', function () {
            var idcl = $(this).data("getid");

            $('html,body').animate({
                    scrollTop: $( '#' + idcl).offset().top},
                'slow');

        })
    }
    cl()
</script>



<!--mobile-->

</body>
</html>