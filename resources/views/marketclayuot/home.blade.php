@extends('marketclayuot.index')
@section('d-content')
    <div id="desktop" >
        <!--<div class="btn-doc-show text-uppercase rotate-90 d-flex flex-column" >
            <div class="">document</div>
            <div class=" text-center"><i class="fas fa-angle-down"></i></div>
        </div>
        <div id="doc" class="row animated">

            <div class="d-flex flex-row bd-highlight container-doc ">
                <div class="p-2 flex-shrink-1 btn-doc-hide"  ><i class="fas fa-angle-right"></i></div>
                <ul class="p2 box-doc text-uppercase font-fm-montserrat-semi-bold">
                    <li><a class="text-secondary" href="http://www.cmkpool.org/">mining</a></li>
                    <li><a class="text-secondary" href="http://www.cmkpool.org/">Wallet</a></li>
                </ul>
            </div>
        </div>-->

        <div  class="header  position-relative">
            <div id="particles-js" style="padding-bottom: 48px">
                <div  class="row top-head  pt-5 mb-5 w-100" >
                    <div class="col-2 box-logo">
                        <a class=" pl-5 w-100 " href="{{asset('')}}">
                            <img class="img-fluid" style="max-width: 150px;" id="logo" src="{{$images->logo or asset('marketc/images/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="col-9" id="mn-top">
                        <!--menu-des-->
                        <nav id="myScrollspy" class="navbar-example navbar ">
                            <ul class="nav nav-pills mx-auto menu-des-top text-capitalize">

                                <li class="nav-item  " aria-selected="true">
                                    <a class="nav-link pt-1 pb-1 mr-2 " href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a  id = "introductionlink" class="nav-link pt-1 pb-1 mr-2" href="#">introduction </a>
                                </li>
                                <li class="nav-item">
                                    <a  id = "resourceslink" class="nav-link pt-1 pb-1 mr-2" href="#">Resources </a>
                                </li>
                                <li class="nav-item">
                                    <a  id = "participatelink" class="nav-link pt-1 pb-1 mr-2" href="#">Participate</a>
                                </li>
                                <li class="nav-item">
                                    <a  id = "marketc-walletlink" class="nav-link pt-1 pb-1 mr-2" href="#">wallet</a>
                                </li>
                                <ul class="nav border-left">
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-1 mr-2" target="_blank" href="https://marketc.net/media/MARKETCWHITEPAPER.pdf"><!--<img src="marketc/images/location-en.png" alt="en">-->WHITEPAPER</a>
                                    </li>

                                </ul>
                            </ul>
                        </nav>
                        <!--menu-des-->

                    </div>
                </div>
                <div class="container top-des mt-5 pt-5" >
                    <div class="row">
                        <div class="col-md-6">
                            <!--<p class="src="marketc/images/ mb-0 col-12 background-blue-color-white" style="max-width: 348px;">Achain is a public blockchain platform that ena</p>-->
                            <div class="h1 w-100 text-blue-litter mb-1 text-uppercase text-white" style="line-height: 50px;font-size: 33.75px;font-family: Montserrat-blod">
                                Digital payment anywhere, anytime
                            </div>

                            <div class="mt-3 mb-3">
                                <p class=" text-justify text-white  ligh-height-30">MarketC is a modern ecosystem developed on a blockchain basis. MarketC development team is aiming to build a new financial-trading system by applying Blockchain technology to solve the existing problems of traditional trading methods.
                                    MarketC provides solutions that help users take control of their personal finances and experience superior functionality.</p>
                            </div>
                            <div class="d-flex flex-row justify-content-center mt-4">
                                <div class="p-2">
                                    <a href="https://marketc.io/login" target="_parent"><button class="position-relative font-fm-montserrat-blod btn-head text-uppercase btn btn-primary font-size-15" style="z-index: 3;" type="button">Join Pre Sale</button></a>
                                </div>
                                <div class="p-2">
                                    <a href="https://medium.com/@MarketC/how-to-take-part-in-the-marketc-pre-ico-be48012b57c1" target="_blank"><button type="button" class="font-fm-montserrat-blod btn-head m-btn-head text-uppercase btn btn-primary font-size-15">How to buy</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative  col-sm-6   part2-box clearfix">
                            <img  class="position-absolute img-fluid blockchaincoin "  src="marketc/images/head/animate.png" >
                            <img class="position-absolute img-fluid services1 "  src="marketc/images/head/animate1.png">
                            <img class="position-absolute img-fluid services2 " src="marketc/images/head/animate2.png">
                        </div>
                    </div>
                    <a style="z-index: 3;position: absolute;bottom: 1vh;left: 50%;right: 50%;" class="position-relative mx-auto" id="" href="#introduction"><img src="marketc/images/btn-croll-down-head.png" alt=""></a>

                    <div class="row mt-5">
                        <div class="mx-auto mb-3 text-white text-center font-fm-montserrat-extrabold"><img src="marketc/images/WE-ARE-TRUSTED.png" alt=""> </div>
                        <h5 class="mb-5 col-10 mx-auto float-none text-white ligh-height-30 text-center">The world's latest blockchain-powered online business platform with token investment & grow your business. Redug. </h5>
                        <div class="d-flex flex-wrap justify-content-around">
                            <div class="p-2"><img src="marketc/images/head/img-1-ft.png" alt=""></div>
                            <div class="p-2"><img src="marketc/images/head/img-2-ft.png" alt=""></div>
                            <div class="p-2"><img src="marketc/images/head/img-3-ft.png" alt=""></div>
                            <div class="p-2"><img src="marketc/images/head/img-4-ft.png" alt=""></div>
                            <div class="p-2"><img src="marketc/images/head/img-5-ft.png" alt=""></div>
                            <div class="p-2"><img src="marketc/images/head/img-6-ft.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="bg"></div>-->
        </div>
        <div class="content  background-whitesmoke">

            <section class="ss1 background-whitesmoke" id="introduction">
                <div class="container">
                    <div class="row " >

                        <div style="position: relative" class="text-white mb-0 title-ss h1 mx-auto font-weight-bold text-center text-uppercase">
                            <!--<h1 class="text-white number-ss" >01</h1>-->
                            introduction
                        </div>
                    </div>
                    <div class="row"><p class="mx-auto text-center text-white text-justify des-ss ">CMK is the simplest way to exchange money at very low cost.</p></div>

                    <ul class="nav nav-tabs d-flex justify-content-between w-50  myTab" id="myTab" role="tablist">
                        <li class="p-2  nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">FAQ</a>
                        </li>
                        <li class="p-2  nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">COMMUNITY</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">SPECIFICATION</a>
                        </li>
                        <!-- <li class="p-2 nav-item">
                             <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">ANNOUNCEMENT</a>
                         </li>-->
                    </ul>

                    <div class="tab-content pt-5 col-12 " >
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="frame">
                                <!--content-->
                                <ul class="box-content-faq">
                                    <li>
                                        <div>
                                            <div class="text-uppercase title-faq">What is MarketC?</div>
                                            <p class="text-justify">MarketC is a blockchain network – Different from other,
                                                where all work is done by the miner on a single network, MarketC uses a
                                                two-tier network.
                                                Our goal is build MarketC be ecosystem for every people in the world.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="text-uppercase title-faq">What payment method is accepted?</div>
                                            <p class="text-justify">Bitcoin (BTC), Ether (ETH).</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="text-uppercase text-right title-faq">WHERE WILL I KEEP MY CMK
                                                COINS?
                                            </div>
                                            <p class="text-justify">You can keep CMK in the Market Wallet that MarketC
                                                develops.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-right">
                                            <div class="text-uppercase title-faq">When will Internal Exchange launch?</div>
                                            <p class="text-justify">
                                                Market Trade will supply Internal Exchange for MarketC Ecosystem at 15th of July</p>
                                    </li>
                                    <li>
                                        <div class="text-right">
                                            <div class="text-uppercase title-faq">WHY SHOULD I CHOOSE MARKETC?</div>
                                            <p class="text-justify">Because MarketC have real Product and working now.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-right">
                                            <div class="text-uppercase title-faq">How can i join PRE-SALE?</div>
                                            <p class="text-justify">Please enter Marketc.io and follow the rules</p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- center and paths -->
                                <div class="center">
                                    <div class="box-text-center">
                                        <div class="text-center item-text-center pt-4" >
                                            <h1 class="text-uppercase font-weight-bold" style="font-family: SVN-Bebas; color:#ec008c;font-size: 45px;margin-bottom: 0px;">introduction</h1>
                                            <h4 class="text-uppercase font-weight-bold" style="font-family: Montserrat-blod;color: white;font-size: 19.5px">Individuals </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner"></div>
                                <div class="middle"></div>
                                <div class="outer"></div>

                                <!-- loaders -->
                                <div class="loader" id="inner"></div>
                                <div class="loader" id="middle"></div>
                                <div class="loader" id="outer"></div>


                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="h3 text-center text-justify text-white">MarketC is a great community all over the world, so we are present in almost every country in the world.</p>
                            <div class="row h-100">
                                <img class="img-fluid" src="marketc/images/comunity.jpg" alt="">
                            </div>
                        </div>
                        <div class="tab-pane text-center" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <img class="img-fluid" style="height: 100%;" src="marketc/images/speci.jpg" alt="">
                        </div>
                        <!--<div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">4</div>-->
                    </div>
                </div>
                <div class="bg">
                </div>
            </section>
            <div class="clearfix"></div>
            <section id="resources" class="ss2 background-whitesmoke">
                <div class="container">
                    <div class="row " >
                        <div style="position: relative;font-size: 33px" class="mb-0 title-ss h1 mx-auto font-weight-bold text-center text-uppercase">

                            resources
                        </div>
                    </div>
                    <div class="row"><p class="mx-auto text-center text-justify des-ss text-secondary  ">Places to buy marketC in exchange for other currencies.</p></div>

                    <ul class="col-12 nav nav-tabs d-flex justify-content-between " id="myTab2" role="tablist">
                        <li class="p-2  nav-item">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Resources</a>
                        </li>
                        <li class="p-2  nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">exchanges</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="nav-link" id="messages-tab2" data-toggle="tab" href="#messages2" role="tab" aria-controls="messages" aria-selected="false">communities</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="nav-link" id="settings-tab2" data-toggle="tab" href="#settings2" role="tab" aria-controls="settings" aria-selected="false">documentation</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="nav-link" id="settings-tab6" data-toggle="tab" href="#maketcore" role="tab" aria-controls="settings" aria-selected="false">marketC core</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="tab-content  col-12" >
                        <div class="tab-pane active resoures-cat" id="home2" role="tabpanel" aria-labelledby="home-tab">
                            <?php

                            for ($i=1;$i<=31;$i++)
                            {
                            ?>
                            <style>#profile2 .box-nonprofit .p-2:nth-child(<?php echo $i ?>) > .item-communities .row:before{content:'<?php echo $i ?>.';color: #323439;font-size: 12px;font-weight: bold;margin-right: 10px; }</style>
                            <?php
                            }

                            ?>
                            <div class="d-flex flex-wrap justify-content-around ">
                                <div class="p-2 pl-0 col-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/resources.png" alt=""></div>
                                            <div style="position: relative" class="h3 title-item1-ss2 text-center">

                                                Learning resources
                                            </div>
                                            <!--<p class="des-item1-ss2 text-capitalize">Lorem ipsum dolor sit amet, </p>-->
                                            <div class="content-item1-ss2" >
                                                <ul class="text-capitalize text-center" >
                                                    <li>CMK wiki</li>
                                                    <li>let talk CMK</li>
                                                    <li>CMK Knowledge Podcast</li>
                                                    <li>CMKpool.org</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-2 pl-0 col-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources1.png" alt=""></div>
                                            <div style="position: relative" class="h3 title-item1-ss2 text-center">
                                                Directories
                                            </div>
                                            <!--<p class="des-item1-ss2 text-capitalize">Lorem ipsum dolor sit amet, </p>-->
                                            <div class="content-item1-ss2" >
                                                <ul class="text-capitalize text-center" >
                                                    <li>Wallets</li>
                                                    <li>Merchants</li>
                                                    <li>Exchanges</li>
                                                    <li>Merchant tools</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-2 pl-0 col-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources2.png" alt=""></div>
                                            <div style="position: relative" class="h3 title-item1-ss2 text-center">
                                                NEWS
                                            </div>
                                            <!--<p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>-->
                                            <div class="content-item1-ss2" >
                                                <ul class="text-capitalize text-center" >
                                                    <li>CoinTelegraph</li>
                                                    <li>CMK Magazine</li>
                                                    <li>CoinJournal</li>
                                                    <li>MarketC Talk press links</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-2 pl-0 col-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources3.png" alt=""></div>
                                            <div style="position: relative" class="h3 text-center title-item1-ss2">

                                                Document
                                            </div>
                                            <!--<p class="des-item1-ss2 text-capitalize">Lorem ipsum dolor sit amet, </p>-->
                                            <div class="content-item1-ss2" >
                                                <ul class="text-capitalize text-center" >
                                                    <li>CMKFilm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-2 col-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources6.png" alt=""></div>
                                            <div style="position: relative" class="text-center h3 title-item1-ss2">

                                                Vouchers
                                            </div>
                                            <!--<p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>-->
                                            <div class="content-item1-ss2" >
                                                <ul class="text-capitalize text-center" >
                                                    <li>Fold</li>
                                                    <li>Opendime</li>
                                                    <li>Projects</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-2 col-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources4.png" alt=""></div>
                                            <div style="position: relative" class="h3 title-item1-ss2">
                                                Charts and
                                                statistics
                                            </div>
                                            <!--<p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>-->
                                            <div class="content-item1-ss2" >
                                                <ul class="text-capitalize text-center" >
                                                    <li>Trade Block</li>
                                                    <li>CMKcharts</li>
                                                    <li>CMK Volatility Index</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
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
                                                <img src="marketc/images/flag/download.png" alt="">
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
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/flag/Flag_of_Australia.svg"></div>
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
                                                <img src="marketc/images/flag/argentinian-flag-graphic.png" alt="">
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
                                                <img src="marketc/images/flag/1280px-Flag_of_Brazil.svg.png" alt="">
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
                                                <img src="marketc/images/flag/255px-Flag_of_Cambodia.svg.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_Chile.svg.png" alt="">
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
                                                <img src="marketc/images/flag/Flag_of_Canada_(Pantone).svg.png" alt="">
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
                                                <img src="marketc/images/flag/255px-Flag_of_the_People's_Republic_of_China.svg.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_Costa_Rica_(state).svg.png" alt="">
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
                                                <img src="marketc/images/flag/co.png" alt="">
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
                                                <img src="marketc/images/flag/1200px-Flag_of_India.svg.png" alt="">
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
                                                <img src="marketc/images/flag/1200px-Flag_of_Indonesia.svg.png" alt="">
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
                                                <img src="marketc/images/flag/1024px-Flag_of_Israel.svg.png" alt="">
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
                                                <img src="marketc/images/flag/Flag_of_Italy.svg" alt="">
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
                                                <img src="marketc/images/flag/japan-flag.png" alt="">
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
                                                <img src="marketc/images/flag/Flag_of_Malaysia.svg" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_Mexico.svg.png" alt="">
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
                                                <img src="marketc/images/flag/np.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_New_Zealand.svg.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_Nigeria.svg.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_Peru_(state).svg.png" alt="">
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
                                                <img src="marketc/images/flag/Flag_of_Poland.svg" alt="">
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
                                                <img src="marketc/images/flag/255px-Flag_of_Singapore.svg.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_South_Africa.svg.png" alt="">
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
                                                <img src="marketc/images/flag/640px-Flag_of_South_Korea.svg.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_Ukraine.svg.png" alt="">
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
                                                <img src="marketc/images/flag/Flag_of_the_United_Arab_Emirates.svg.png" alt="">
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
                                                <img src="marketc/images/flag/images.jpg" alt="">
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
                                                <img src="marketc/images/flag/1280px-Flag_of_the_United_States.svg.png" alt="">
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
                                                <img src="marketc/images/flag/2000px-Flag_of_Venezuela.svg.png" alt="">
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
                        <div class="tab-pane" id="messages2" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="row">
                                <div style="width: 100%" class="d-flex justify-content-between">
                                    <div class="p-2 col-3 ">
                                        <div class="item-communities">
                                            <div class="card w-100" style="width: 18rem;">
                                                <div class="card-body">
                                                    <div class="title-img-ss3 text-center mb-4 ">
                                                        <img src="marketc/images/community-lock.png" alt="">
                                                    </div>
                                                    <div class="text-center mb-3 font-fm-montserrat-extrabold">forums</div>
                                                    <p class="text-justify text-center">
                                                        MarketCTalk Forum <br>
                                                        Reddit's MarketC Community <br>
                                                        MarketC StackExchange (Q&amp;A)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 col-3 ">

                                        <div class="item-communities">
                                            <div class="card w-100" style="width: 18rem;">
                                                <div class="card-body">
                                                    <div class="img-head-cm mb-3">
                                                        <img src="marketc/images/wordwide-community.png" alt="">
                                                    </div>
                                                    <div class="text-center mb-3 font-fm-montserrat-extrabold">SOCIAL NETWORKS</div>
                                                    <p class="text-center">
                                                        Google+ MarketC Community <br>
                                                        Twitter Search<br>
                                                        Facebook Page
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 col-3 ">
                                        <div class="item-communities">
                                            <div class="card w-100" style="width: 18rem;">
                                                <div class="card-body">
                                                    <div class="img-head-cm mb-3">
                                                        <img src="marketc/images/tag-community.png" alt="">
                                                    </div>
                                                    <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                        Meetups
                                                    </div>
                                                    <p class="text-center">
                                                        MarketC Conferences And Events<br>
                                                        MarketC Meetup Groups<br>
                                                        MarketC Meetups On MarketCTalk<br>
                                                        MarketC Meetups On The Wiki
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="p-2 col-3 ">
                                        <div class="item-communities">
                                            <div class="card w-100" style="width: 18rem;">
                                                <div class="card-body">
                                                    <div class="img-head-cm mb-3">
                                                        <img src="marketc/images/dollar-community.png" alt="">
                                                    </div>
                                                    <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                        IRC Chat
                                                    </div>
                                                    <p class="text-center">
                                                        IRC Channels on freenode.<br>
                                                        #MarketC (General MarketC-related)<br>
                                                        #MarketC-dev (Development and technical)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <h6 class="text-left mb-3 with-100 font-fm-montserrat-blod">Non-profit organizations</h6>

                                <?php

                                for ($i=1;$i<=22;$i++)
                                {
                                ?>
                                <style>
                                    #messages2 .box-nonprofit .p-2:nth-child(<?php echo $i ?>) > .item-communities .row:before{content:'<?php echo $i ?>.';color: #323439;font-size: 12px;font-weight: bold;margin-right: 10px;
                                </style>
                                <?php
                                }

                                ?>

                                <div class="d-flex flex-wrap box-nonprofit  with-100">
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/argentinian-flag-graphic.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Argentina
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row">

                                                <div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/Flag_of_Australia.svg" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Australia
                                                </div>


                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Australia</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/at.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Austria
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Austria</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/aaaa.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    belgium
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Belgian MarketC Association</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/Flag_of_Canada_(Pantone).svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    canada
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Embassy</li>
                                                    <li>MarketC Alliance of Canada</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/co.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    colombia
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Fundación MarketC Colombia</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/2000px-Flag_of_Denmark.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Denmark
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Dansk MarketCforening</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/255px-Flag_of_France.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    france
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC France</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/1280px-Flag_of_Germany.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    germany
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Bundesverband MarketC e.V.</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/ie.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    ireland
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Irish MarketC Foundation</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/1024px-Flag_of_Israel.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Israel
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>איגוד הביטקוין הישראלי</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/Flag_of_Italy.svg" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    italy
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Foundation Italia</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/nl.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Netherlands
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Stichting MarketC Nederland</li>
                                                    <li>Stichting MarketC Nederland</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/2000px-Flag_of_the_Philippines.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Philippines
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Organization of the Philippines</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/Flag_of_Poland.svg" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    poland
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Polish MarketC Association</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/20120812153730!Flag_of_Russia.svg" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Russia
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Crypto Currencies Foundation Russia</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/2000px-Flag_of_Ukraine.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    ukraine
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Foundation Ukraine</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/si.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Slovenia
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Društvo Slovenije</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/1280px-Flag_of_Spain.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    spain
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Avalbit</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/Flag_of_Sweden.svg" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    sweden
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Svenska MarketCföreningen</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/download(2).png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Switzerland
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>MarketC Association Switzerland</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                        <div class="item-communities">
                                            <div class="row"><div class="img-head-cm mb-3">
                                                    <img src="marketc/images/flag/2000px-Flag_of_Venezuela.svg.png" alt="">
                                                </div>
                                                <div style="position: relative" class="title-ss h6 font-weight-bold text-uppercase">

                                                    Venezuela
                                                </div>
                                            </div><div class="content-item1-ss2">
                                                <ul>
                                                    <li>Fundación MarketC de Venezuela</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings2" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="d-flex flex-row justify-content-around flex-wrap " id="box-card-doc" style="width: 100%">
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/1.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                Block Chain
                                            </div>
                                            <p class="text-center">Block Chain Guide<br>
                                                Block Chain Reference<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/2.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                Transactions
                                            </div>
                                            <p class="text-center">Transactions Guide<br>
                                                Transactions Reference<br>
                                                Transactions Examples</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/3.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                Contracts
                                            </div>
                                            <p class="text-center">Contracts Guide<br>
                                                More Contracts - Wiki<br>
                                                Micropayment Channel Example</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/4.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                Wallets
                                            </div>
                                            <p class="text-center">Wallets Guide<br>
                                                HD Wallets - BIP32<br>
                                                Mnemonic Code - BIP39</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/5.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                P2P Network
                                            </div>
                                            <p class="text-center"><a href="https://twitter.com/MarketcOfficial">https://twitter.com/MarketcOfficial</a> <a href="https://www.facebook.com/Marketc-Community-2056174477973802/">https://www.facebook.com/Marketc-Community-2056174477973802/</a> <a href="https://t.me/joinchat/HiPVKRMFh7-oleJ_dTpcVA">https://t.me/joinchat/HiPVKRMFh7-oleJ_dTpcVA</a> <a href="https://www.youtube.com/marketc">https://www.youtube.com/marketc</a> <a href="support@marketc.net">support@marketc.net</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/6.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                Payment Processing
                                            </div>
                                            <p class="text-center">Payment Processing Guide<br>
                                                Payment Processing Examples<br>
                                                Payment Protocol - BIP70</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/7.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                Operating Modes
                                            </div>
                                            <p class="text-center">Operating Modes Guide</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/8.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                block template
                                            </div>
                                            <p class="text-center">- getblocktemplate Fundamentals - BIP22</p>
                                            <p class="text-center">- getblocktemplate Pooled Mining - BIP23</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="card w-100" style="width: 18rem;max-height: 100%!important">
                                        <div class="item-communities">
                                            <div class="img-head-cm mb-3"><img alt="" src="marketc/images/documentation/9.png"></div>
                                            <div class="h6 mb-3 font-fm-montserrat-blod text-uppercase title-cm">
                                                additional resources
                                            </div>

                                            <p class="text-center comment">
                                                MarketC: A Peer-to-Peer Electronic Cash System - Satoshi Nakamoto<br>
                                                MarketC Improvement Proposals - GitHub<br>
                                                MarketC Developer Reference (working paper) - Krzysztof Okupski<br>
                                                MarketC Developer Documentation - marketCj.org<br>
                                                The C# MarketC book (NMarketC Developer Documentation) - Nicolas Dorier<br>
                                                Technical Pages - Wiki</p>
                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>
                        <div class="tab-pane" id="maketcore" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row"><h3 class="pl-3 text-capitalize mb-4">marketC core</h3></div>
                            <div class="row">
                                <div class="col-7">
                                    <h6 class="text-capitalize"><a class="pt-2" style="text-decoration: underline;" href="https://github.com/cmkcoin/cmkcore">Download MarketC Core</a></h6>
                                    <p class="text-left text-justify">
                                        MarketC Core is programmed to decide which block chain contains valid transactions. The users of MarketC Core only accept transactions for that block chain, making it the MarketC block chain that everyone else wants to use

                                        It is these users who keep MarketC decentralized. They individually run their own MarketC Core full nodes, and each of those full nodes separately follows the exact same rules to decide which block chain is valid.
                                        <br>
                                        There’s no voting or other corruptible process involved: there’s just individual software following identical rules—”math”—to evaluate identical blocks and coming to identical conclusions about which block chain is valid.
                                        <br>
                                        This shared agreement (called consensus) allows people like you to only accept valid marketCs, enforcing MarketC’s rules against even the most powerful miners.
                                        <br>
                                        In addition to improving MarketC’s decentralization, MarketC Core users get better security for their marketCs, privacy features not available in other wallets, a choice of user interfaces and several other powerful features.
                                    </p>
                                </div>
                                <div class="col-5">
                                    <ul class="fa-ul bc-core-2">
                                        <li class="mb-2">
                                            <p><span class="fa-li fa fa-download fa-2x"></span>
                                                <b><a href="https://github.com/cmkcoin/cmkcore">Download</a></b><br>Download MarketC Core&nbsp;0.16.0</p>
                                        </li>
                                        <li class="mb-2">
                                            <p><span class="fa-li fa fa-rocket fa-2x"></span>
                                                <b><a href="#">Features</a></b><br>Discover what MarketC Core offers</p>
                                        </li>
                                        <li class="mb-2">
                                            <p><span class="fa-li fa fa-question fa-2x"></span>
                                                <b><a href="#">Get help</a></b><br>Documentation, forums, chat rooms</p>
                                        </li>
                                        <li class="mb-2">
                                            <p><span class="fa-li fa fas fa-code-branch fa-2x"></span>
                                                <b><a href="#">Contribute</a></b><br>Code, translations, and more</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <div class="clearfix"></div>
            <section id="marketc-wallet">
                <div class="container ">
                    <div class="row justify-content-end">
                        <div class="col-5 ct-left-wallet"><img class="img-fluid" src="marketc/images/img-ss4.png" alt=""></div>
                        <div class="col-6 ct-right-wallet">
                            <div class="title-right-wallet mb-2 text-uppercase font-size-22 d-flex justify-content-center">
                                <img src="marketc/images/marketc-wallet.png" alt="">
                            </div>
                            <div class="text-grey-extra text-center">No need to install. Use straight after decompressing!</div>
                            <div class="d-flex mt-4 flex-wrap justify-content-around">
                                <div class="p-2 text-center">
                                    <img class=" img-fluid" src="marketc/images/icon-ss4-1.png" alt="">
                                    <div class="">
                                        <div class="d-flex mt-2 flex-wrap w-100 justify-content-center">
                                            <div class="devices col-5 inline-table"><a class="font-fm-montserrat-semi-bold text-dark" href="https://github.com/cmkcoin/cmkcore/releases/download/v0.12.2/CMKCore-0.12.2-wallet-win32.zip">WIN32</a></div>
                                            <div style="border-left: solid"></div>
                                            <div class="devices col-5 inline-table"><a class="font-fm-montserrat-semi-bold text-dark" href="https://github.com/cmkcoin/cmkcore/releases/download/v0.12.2/CMKCore-0.12.2-wallet-win64.zip">WIN64</a></div>
                                        </div>
                                        <div class="row mt-2 w-100 justify-content-center" style="font-size: 9px">
                                            <div class="devices col-6">V 0.12.02</div>
                                            <!-- <div class="" style="border-left: solid"></div>-->
                                            <div class="devices col-5">V 0.12.02</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 text-center">
                                    <img class=" img-fluid" src="marketc/images/icon-phone.png" alt="">
                                    <div class="mt-1">
                                        <a class="font-fm-montserrat-semi-bold text-dark" href="#">PHONE</a>
                                    </div>
                                </div>
                                <div class="p-2 text-center">
                                    <img class=" img-fluid" src="marketc/images/linux.png" alt="">
                                    <div class="">
                                        <div class="d-flex mt-2 flex-wrap w-100 justify-content-center">
                                            <div class="devices col-5 inline-table"><a class="font-fm-montserrat-semi-bold text-dark" href="https://github.com/cmkcoin/cmkcore/releases/download/v0.12.2/cmkCore-0.12.2-linux32.tar.gz">LINUX32</a></div>
                                            <div style="border-left: solid"></div>
                                            <div class="devices col-5 inline-table"><a class="font-fm-montserrat-semi-bold text-dark" href="https://github.com/cmkcoin/cmkcore/releases/download/v0.12.2/cmkCore-0.12.2-linux64.tar.gz">LINUX64</a></div>
                                        </div>
                                        <div class="row mt-2 w-100 justify-content-center" style="font-size: 9px">
                                            <div class="devices col-6">V 0.12.02</div>
                                            <!-- <div class="" style="border-left: solid"></div>-->
                                            <div class="devices col-5">V 0.12.02</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bg"></div>
            </section>
            <div class="clearfix"></div>
            <section id="participate" class="ss3 background-whitesmoke">
                <div class="container">
                    <div class="row " >
                        <div style="position: relative" class="title-ss h1 mx-auto font-weight-bold text-center text-uppercase">

                            participate
                        </div>
                    </div>
                    <!--<div class="row"><p class="mx-auto text-center text-justify des-ss text-secondary  ">CMK is the simplest way to exchange money at very low cost.</p></div>-->

                    <ul class="nav nav-tabs d-flex w-50 justify-content-between " id="myTab3" role="tablist">

                        <li class="p-2  nav-item">
                            <a class="nav-link " id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">support</a>
                        </li>
                        <li class="p-2  nav-item">
                            <a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Buy</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="nav-link" id="settings-tab3" data-toggle="tab" href="#settings3" role="tab" aria-controls="settings" aria-selected="false">development</a>
                        </li>
                    </ul>

                    <div class="tab-content  row " >
                        <div class="tab-pane " id="home3" role="tabpanel" aria-labelledby="home-tab">
                            <div class="d-flex flex-wrap justify-content-between ">
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico-multi.png" style="max-width: 100px"></div>
                                            <p class="des-item1-ss2 text-capitalize">Using CMK</p>
                                            <p class="text-center">Using CMK is the first thing you can do to support CMK. There are probably many cases where it can make your life easier. You can accept payments and make purchases with CMK.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico_mining.png"></div>
                                            <p class="des-item1-ss2 text-capitalize">Minning</p>
                                            <p class="text-center">You can start mining marketCs to help processing transactions. In order to protect the network, you should join smaller mining pools and prefer decentralized pools like P2Pool or pools with getblocktemplate (GBT) support.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico-network.png"></div>
                                            <p class="des-item1-ss2 text-capitalize">Be the network</p>
                                            <p class="text-center">If you have a good Internet connection, you can strengthen the CMK network by keeping full node software running on your computer or server with port 8333 open. Full nodes are securing and relaying all transactions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico-translate.png" style="max-width: 100px"></div>
                                            <p class="des-item1-ss2 text-capitalize">Translate</p>
                                            <p class="text-center">You can help to increase CMK availability by translating or improving translations inside important parts of the CMK ecosystem. Just pick a project you would like to help.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6 text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico_conf.png"></div>
                                            <p class="des-item1-ss2 text-capitalize">development</p>
                                            <p class="text-center">CMK is free software. So if you are a developer, you can use your super-powers to do good and improve CMK. Or you can build amazing new services or software that can use CMK.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico-hand.png"></div>
                                            <p class="des-item1-ss2 text-capitalize">donation</p>
                                            <p class="text-center">The easiest way to help is to donate a few marketCs to CMK. Or you can help directly fund any project related to CMK that you believe will be helpful in the future.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico_speak.png" style="max-width: 100px"></div>
                                            <p class="des-item1-ss2 text-capitalize">organizations</p>
                                            <p class="text-justify">Many non-profit organizations are dedicated to protecting and promoting CMK. You can help these groups by joining them and taking part in their projects, discussions and events.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico-i.png"></div>
                                            <p class="des-item1-ss2 text-capitalize">spread</p>
                                            <p class="text-center">Speak about CMK to interested people. Write about it on your blog. Tell your favorite shops you would like to pay with CMK. Help to keep merchant directories up to date. Or be creative and make yourself a nice CMK T-shirt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/ico-help.png"></div>
                                            <p class="des-item1-ss2 text-capitalize">Documentation</p>
                                            <p class="text-center">market.net and the CMK wiki provide useful documentation and we are constantly improving the information they contain. You can help to improve these resources and keep them up to date.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col-lg-6 col-xl-6  text-center col-md-6 col-sm-6 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 mb-3"><img alt="" src="marketc/images/group-comunity.png"></div>
                                            <p class="des-item1-ss2 text-capitalize">meet the communities</p>
                                            <p class="text-center">You can join CMK communities and talk with other CMK enthusiasts. You can learn more about CMK every day, give help to new users and get involved in interesting projects.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="d-flex justify-content-around ">
                                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 text-center mb-4 ">
                                                <img src="marketc/images/iconbank-ss3.png" alt="">
                                            </div>
                                            <div class="font-fm-montserrat-extrabold">Use Market trade</div>
                                            <p class=""> Market Trade allows you to pay with a simple two step scan-and-pay.
                                                No need to sign up, swipe your card.</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 text-center mb-4 ">
                                                <img src="marketc/images/icon2-ss3.png" alt="">

                                            </div>
                                            <div class="font-fm-montserrat-extrabold">Discover people selling CMK in your community</div>
                                            <p> CMK on mobiles allows you to pay with a simple two step scan-and-pay. No need to sign up, swipe your card. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                    <div class="card w-100" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="title-img-ss3 text-center mb-4 ">
                                                <img src="marketc/images/icon3-ss3.png" alt="">

                                            </div>
                                            <div class="font-fm-montserrat-extrabold">Use Market wallet </div>

                                            <p>  Market wallet allows you to pay with a simple two step scan-and-pay. No need to sign up, swipe your card. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings3" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="d-flex flex-wrap ">
                                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                                    <div style="position: relative" class="h4 title-item1-ss2">

                                        Code Review
                                    </div>
                                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level </p>
                                    <div class="content-item1-ss2">
                                        <p class="text-justify">CMK Core is security software that helps protect assets worth billions of dollars, so every code change needs to be reviewed by experienced developers.</p>
                                        <p class="text-justify">It can take a long time for other developers to review your pull requests. Remember that all reviewers are taking time away from their own projects to review your pull requests, so be patient and respectful of their time.</p>
                                        <p class="text-justify">Please also consider helping to review other people’s pull requests. You don’t need to be an expert in CMK, the CMK Core codebase, or C++ (although all these things help). There are almost always open pull requests that any programmer can review.</p>
                                    </div>
                                </div>
                                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                                    <div style="position: relative" class="h4 title-item1-ss2">

                                        Starter Projects
                                    </div>
                                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level </p>
                                    <div class="content-item1-ss2">
                                        <p class="text-justify">Do you want to begin coding for CMK Core but don’t have a specific improvement in mind? Here are a few ideas:</p>
                                        <p class="text-justify">Fix existing issues: the issue tracker is the best place to find a useful way to contribute to CMK Core. Before starting to write any patches for issues you find, you may want to comment on the issue to make sure nobody else is already working on it.</p>
                                        <p class="text-justify">Write tests: CMK Core is covered by many tests, but patches that improve test coverage are always welcome and are a great way to build familiarity with the codebase. See the documentation about automated testing.</p>
                                    </div>
                                </div>
                                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                                    <div style="position: relative" class="h4 title-item1-ss2">

                                        Documentation
                                    </div>
                                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level </p>
                                    <div class="content-item1-ss2">
                                        <p class="text-justify">If you are interested in learning more about the technical details of CMK and how to use existing tools and APIs, it is recommended you start by exploring the developer documentation.</p>
                                    </div>
                                    <form action="">
                                        <input style="color: #2fb4e8;border-radius: 5px ;border: #2fb4e8 solid 1px; line-height: 30px; max-width: 464px;margin-right: 15px" type="text" class="form-control" placeholder="Search the Glossary, RPCS, ...." aria-label="" aria-describedby="basic-addon2">
                                    </form>
                                </div>
                                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                                    <div style="position: relative" class="h4 title-item1-ss2">

                                        Developer communities
                                    </div>
                                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level </p>
                                    <div class="content-item1-ss2">
                                        <p class="text-justify">CMK Core is security software that helps protect assets worth billions of dollars, so every code change needs to be reviewed by experienced developers.</p>
                                        <ul class="text-capitalize">
                                            <li>RC Channel #marketC-core-dev on freenode.</li>
                                            <li>CMK Core Slack Channel</li>
                                            <li>CMK StackExchange</li>
                                            <li>CMKTalk Development & Technical Discussion Forum</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                                    <div style="position: relative" class="h4 title-item1-ss2">

                                        CMK Core contributors
                                    </div>
                                    <p class="des-item1-ss2 text-capitalize">Ordered by number of commits </p>
                                    <div class="content-item1-ss2">
                                        <p class="text-justify">CMK Core is security software that helps protect assets worth billions of dollars, so every code change needs to be reviewed by experienced developers.</p>
                                        <!--<div class="row">
                                            <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                            <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></di<div class=" col-6" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                <div class=" collapse w-100 row pl-3 pr-0" id="collapseExample1">
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                </div>
                                            </div>
                                            <p class="mt-3">
                                                <a class="text-capitalize" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <i class="fas fa-chevron-down mr-2"></i> show more
                                                </a>
                                            </p>
                                        </div>-->
                                    </div>


                                </div>
                                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                                    <div style="position: relative" class="h4 title-item1-ss2">

                                        more free software projects
                                    </div>
                                    <p class="des-item1-ss2 text-capitalize">Ordered by number of commits</p>
                                    <div class="content-item1-ss2">
                                        <p class="text-justify">Want to contribute to a different project?</p>
                                        <ul class="text-capitalize">
                                            <li>MarKet Pay</li>
                                            <li>MarKet Wallet</li>
                                            <li>MarKet Trade</li>
                                            <li>MarKet Game</li>
                                            <li>API</li>
                                            <!--<li>Armory - A wallet with enhanced security features, written in C++..</li>
                                            <li>BFGMiner - A modular miner, written in C.</li>
                                            <li>CMK Wallet - A SPV wallet for Android and Blackberry, written in Java.</li>
                                            <li>marketCj - A library for SPV wallets, written in Java.</li>
                                            <li>btcd - A full node, written in Go.</li>
                                            <li>btcwallet - A hierarchical deterministic wallet daemon, written in Go.</li>
                                            <li>ckpool - A fast mining pool server application, written in C.</li>
                                            <li>Electrum - A fast server-trusting wallet, written in Python.</li>
                                            <li>Eloipool - A fast mining pool server application, written in Python.</li>
                                            <li>Haskoin - An implementation of the CMK protocol, written in Haskell.</li>
                                            <li>LibmarketC - A cross-platform development toolkit, written in C++.</li>
                                            <li>LibmarketC Server - A full node and query server, built on libmarketC.</li>
                                            <li>LibmarketC Explorer - A command line tool, built on libmarketC.</li>
                                            <li>Libblkmaker - A client library for the getblocktemplate mining protocol, written in C.</li>
                                            <div class="collapse" id="collapseExample">
                                                <li>LibmarketC - A cross-platform development toolkit, written in C++.</li>
                                                <li>LibmarketC Server - A full node and query server, built on libmarketC.</li>
                                                <li>LibmarketC Explorer - A command line tool, built on libmarketC.</li>
                                            </div>
                                            <p class="mt-3">
                                                <a class="text-capitalize" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <i class="fas fa-chevron-down mr-2"></i> show more
                                                </a>
                                            </p>-->


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

            </section>
            <div class="clearfix"></div>
            <div id="video" class="container-fluid d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-7" >
                            <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img class="img-fluid" src="marketc/images/imd-video.png" alt="">
                            </button>

                            <div class="modal animated zoomIn bd-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/mNqMs23ipd4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-5 pt-3">
                            <div class="title-right-wallet text-uppercase font-size-22 ">
                                <div class="title-right-wallet text-uppercase font-size-22 ">
                                    <p class="text-blue-litter font-fm-montserrat-extrabold mr-1 mb-1">
                                        <img class="img-fluid" src="marketc/images/title-video%20.png" alt=""></p>
                                </div>
                            </div>
                            <div class="font-fm-montserrat-regular">
                                <p class="text-white font-size-15 mb-1">The world's Latest blockchain-powered online business platform with token investment & grow your business. The world's Latest blockchain-powered online business platform with token investment & grow your business. Redug Lagre dolor sit amet consectetu The world's Latest blockchain-powered online business platform with token investment & grow your business. Redug Lagre dolor sit amet consectetu</p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="bg"></div>
            </div>
            <div class="clearfix"></div>
            <section id="ourteam" class="ss4 background-f4">
                <div class="container">
                    <div class="row " >
                        <div style="position: relative" class="title-ss h1 mx-auto font-weight-bold text-center text-uppercase">
                            our team
                        </div>
                    </div>
                    <div class="row"><p class="mx-auto text-left text-center">The team behind Marketc has been working together since 2010. It currently numbers 60+ developers and top management and advisor talent. We fearlessly focus on turning new technology into widely-adopted customer experience.</p></div>
                    <div class="d-flex flex-wrap justify-content-around ">
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/1.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white  font-size-15 text-uppercase font-fm-montserrat-semi-bold">Abner Smith</h4>
                                        <h6 class="text-white  font-size-15 font-fm-montserrat-light" >CEO and Co-founder of MarketC project</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p class="text-white src="marketc/images/ ligh-height-30">
                                                6/2012 - 7/2014:  Engineer at EYF group - Developed and integrated payment system for client
                                                <br>
                                                8/2014 - 5/2017: founder -   OSP sofware solutions- Working through a worldwide network of distributors, we supply mobile data capture products which can be used in a variety of applications such as supply chain management, stock inventory control, ticketing, data management and biometric scanning.
                                                <br>
                                                6/2017 - present : CEO and Co-founder of MarketC Community
                                                Education
                                                University of Melbourne
                                                MBA, BEng (Electrical)
                                                Melbourne high school
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/2.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Ambrose Bartlett</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" >Co-founder and president</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <div class="text-white ligh-height-30 src="marketc/images/ ">
                                                5/2005 - 1/2009: Financial Advisor of ICB Bank
                                                <br>
                                                4/2009 - 1/2012: Financial Analyst Investment Banking. The bank offers a variety of products and services, ddressing needs ranging from basic requirements of individuals to the more complex requirements of corporate entities. Electronic delivery channels, ably supported by an extensive network of banking centers encompassing over 56 locations across all the Emirates.
                                                <br>
                                                9/2012 - president: CEO of Green Sky Media Green Sky Media is a multi-media advertising company. The services we offer to the market include: Panel construction, television advertising magazines, conferences gratitude customers, complete business procedures.
                                                education:
                                                -	University of cape town
                                                -	Bachelor of Business Science
                                                -	MBA
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/3.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Baron Williams</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" >Co-founder and CFO</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <div class="text-white ligh-height-30 src="marketc/images/ ">
                                                4/2008 - 5/2012: IOS App Developer at Techkid company
                                                -	Programming learning applications for children <br>
                                                12/2012 - president  :
                                                invest in financial corporations<br>
                                                -	5/2014 -  5/2017  : founder of MyLocationFood application
                                                Education
                                                University of Manchester

                                                MBA, specializing in technology and finance.
                                                Baron has worked with many clients in the fintech, blockchain, and cybersecurity space,
                                                developing a passion for these dynamic and evolving areas

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/photo_2018-05-03_15-22-09.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Tracy Phillips</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" > Chief Marketing Officer.</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p class="text-white src="marketc/images/ ligh-height-30 ">
                                                Tracy Phillips  is a Marketing and Sales  expert who develops innovative sales and  marketing strategies for global companies.  As well as international consultancy,
                                                Tracy  is Managing Director of Crissty , a German marketing agency
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/5.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Rasheek Brooks</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" >Blockchain Solutions</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p class="text-white src="marketc/images/ ligh-height-30 ">
                                                The cloud development floor for NabTech network. The strongest point is the security and the system. 6 years of research on blockchain
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/photo_2018-05-03_15-21-41.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Kyle Zverev</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" >Cloud Computing Advisor</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p class="text-white src="marketc/images/ ligh-height-30 ">
                                                Kyle is a Start-up founder, a growth hacker, with 7+ years of experience. His Software Company is currently helped hundreds of businesses in Germany, Austria, and Switzerland achieve exponential growth.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto img-fluid" height="450px" src="marketc/images/team2/7.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">David Lucio</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" >Financial Advisor</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p class="text-white src="marketc/images/ ligh-height-30 ">
                                                A resourceful financial professional with 10+ years experience in financial management, telecommunications, software/multimedia, public accounting for a variety of public and closely held companies.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/8.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold"> Vincent Kapoor</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" >Strategic Advisor</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p class="text-white  ligh-height-30">
                                                Blockchain developer, early-day Ethereum enthusiast and ex-Cyber Security Officer (res.) at CISCO
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-6 col-sm-6  ">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img class="card-img-top mx-auto" src="marketc/images/team2/9.png" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Rick Moley</h4>
                                        <h6 class="text-white font-size-15 font-fm-montserrat-light" >Cryptocurrency Advisor</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p class="text-white src="marketc/images/ ligh-height-30">
                                                Rick is an entrepreneur, an owner, and a co-owner of dozens of successful business projects. In addition, he is an ICO Advisor and a Blockchain Expert. Nikolay has 5+ years of experience in large-scale transaction projects and has many awards and titles in the IT business
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <div class="clearfix"></div>
            <section id="ouradvisors" class="ss5 background-white ">
                <div class="container">
                    <div class="row " >
                        <div style="position: relative" class="title-ss h1 mx-auto font-weight-bold text-center text-uppercase">
                            our partners
                        </div>
                    </div>
                    <div class="row"><p class="mx-auto text-left text-justify">Our Board of Advisors includes pedigreed global business professionals and influencers, it is not stacked with pre-ICO hype-makers, all are our long-term trusted business partners.</p></div>

                    <div class="d-flex flex-wrap justify-content-around ">
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/1.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/2.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/3.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/4.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/5.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/6.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/7.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/8.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/9.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/10.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/11.png" alt="Card image cap">
                        </div>
                        <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6  ">
                            <img class="" src="marketc/images/ourpartners/12.png" alt="Card image cap">
                        </div>

                    </div>
                </div>

            </section>

        </div>
        <div class="footer">
            <?php $contactInfo = \App\Settings::getSetting('contactInfo');?>
            <?php $socialInfo = \App\Settings::getSetting('socialInfo');?>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12  mt-5 pt-5">
                        <div class="font-size-22 title-form-footer text-uppercase text-white font-weight-bold">about us</div>
                        <p class="text-justify ">Stay up to date with our latest releases and developments on the MarketC ecosystem! We will only release benefical news for our users. Life’s too short to spam.</p>
                        <div class="mb-3" style="border: solid 2px ;color: white;border-radius: 10px;max-width: 50px"></div>
                        <div class="d-flex align-items-start mb-3" style="color: #2fb4e8">

                            <div class="p-2 icon-footer"><a href="{{$socialInfo->facebook or ''}}"><i class="fab fa-facebook-f"></i></a></div>
                            <div class="p-2 icon-footer"><a href="{{$socialInfo->tele or ''}}"><i class="fas fa-location-arrow"></i></a></div>
                            <div class="p-2 icon-footer"><a href="mailto:{{$contactInfo->contact_email or ''}}"><i class="fas fa-envelope"></i></a></div>
                            <div class="p-2 icon-footer"><a href="{{$socialInfo->youtube or ''}}"><i class="fab fa-youtube"></i></a></div>
                            <div class="p-2 icon-footer"><a href="{{$socialInfo->twitter or ''}}"><i class="fab fa-twitter"></i></a></div>
                            <div class="p-2 icon-footer"><a href="{{$socialInfo->github or ''}}"><i class="fab fa-github"></i></a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12  mt-5 pt-5">
                        <div class="font-size-22 title-form-footer text-uppercase text-white font-weight-bold">information</div>
                        <p class="text-justify mb-3">You can contact us consectetur adipisicing elit like that:</p>
                        <!--<p class="font-fm-montserrat-semi-bold">Tel: +45547-5543</p>-->
                        <p class="font-fm-montserrat-semi-bold"><a class="text-white" href="mailto:{{$contactInfo->contact_email or ''}}?Subject=Hello%20again" target="_top">Email: {{$contactInfo->contact_email or ''}}</a></p>
                        <!--<p class="font-fm-montserrat-semi-bold">Location: 32 avanue,New york</p>-->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12  mt-5 pt-5">
                        <div class="font-size-22 title-form-footer text-uppercase text-white font-weight-bold">Services Link</div>
                        <a href="#introduction"><p class="text-uppercase font-fm-montserrat-semi-bold">introduction</p></a>
                        <a href="#resources"><p class="text-uppercase font-fm-montserrat-semi-bold">resources </p></a>
                        <a href="#marketc-wallet"><p class="text-uppercase font-fm-montserrat-semi-bold">Wallet</p></a>
                        <a href="#participate"><p class="text-uppercase font-fm-montserrat-semi-bold">Participate</p></a>
                    </div>
                </div>
            </div>
            <div class="copyright" style="background-color: #070e16">
                <p class=" mt-3 text-justify text-white text-center mb-0" style="font-size: 13px;line-height: 60px">Copyright © 2018, MarketC.All trademarks and copyrights belong to their respective owners</p>
            </div>
        </div>
    </div>
    @endsection


@section('m-home-content')

        <div class="mb-3 mt-3 col-12 mx-auto border-bottom pb-2" id="m-video">
            <iframe width="100%" height="200px" src="https://www.youtube.com/embed/mNqMs23ipd4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
        <div class="mb-3 mt-3 col-12 mx-auto border-bottom pb-2" id="community" style="    padding-bottom: 20px!important;">
            <div class="row ">
                <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative">
                    community
                </div>
            </div>
            <img src="marketc/images/comunity.jpg" class="img-fluid" alt="">
        </div>

        <div class="clearfix"></div>
        <div class="mb-5 mt-2 border-bottom" id="ss2">
            <div class="row ">
                <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative">
                    resources
                </div>
            </div>
            <div class="clearfix"></div>

            <!-- Swiper -->
            <div class="swiper-container pt-4 pb-2" style="background-image:url(marketc/images/bg-m-resources.jpg);	background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                        <div class="card w-100" style="width: 18rem;">
                            <div class="card-body">
                                <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/resources.png" alt=""></div>
                                <div style="position: relative" class="h3 title-item1-ss2 text-center">

                                    Learning resources
                                </div>
                                <!--<p class="des-item1-ss2 text-capitalize">Lorem ipsum dolor sit amet, </p>-->
                                <div class="content-item1-ss2 m-comment">
                                    <ul class="text-capitalize text-center">
                                        <li>CMK wiki</li>
                                        <li>let talk CMK</li>
                                        <li>CMK Knowledge Podcast</li>
                                        <li>CMKpool.org</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" >
                        <div class="card w-100" style="width: 18rem;">
                            <div class="card-body">
                                <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources1.png" alt=""></div>
                                <div style="position: relative" class="h3 title-item1-ss2 text-center">
                                    Directories
                                </div>
                                <!--<p class="des-item1-ss2 text-capitalize">Lorem ipsum dolor sit amet, </p>-->
                                <div class="content-item1-ss2 m-comment">
                                    <ul class="text-capitalize text-center">
                                        <li>Wallets</li>
                                        <li>Merchants</li>
                                        <li>Exchanges</li>
                                        <li>Merchant tools</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" >
                        <div class="card w-100" style="width: 18rem;">
                            <div class="card-body">
                                <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources2.png" alt=""></div>
                                <div style="position: relative" class="h3 title-item1-ss2 text-center">
                                    NEWS
                                </div>
                                <!--<p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>-->
                                <div class="content-item1-ss2 m-comment">
                                    <ul class="text-capitalize text-center">
                                        <li>CoinTelegraph</li>
                                        <li>CMK Magazine</li>
                                        <li>CoinJournal</li>
                                        <li>MarketC Talk press links</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card w-100" style="width: 18rem;">
                            <div class="card-body">
                                <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources3.png" alt=""></div>
                                <div style="position: relative" class="h3 text-center title-item1-ss2">

                                    Document
                                </div>
                                <!--<p class="des-item1-ss2 text-capitalize">Lorem ipsum dolor sit amet, </p>-->
                                <div class="content-item1-ss2 m-comment">
                                    <ul class="text-capitalize text-center">
                                        <li>CMKFilm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" >
                        <div class="card w-100" style="width: 18rem;">
                            <div class="card-body">
                                <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources6.png" alt=""></div>
                                <div style="position: relative" class="text-center h3 title-item1-ss2">

                                    Vouchers
                                </div>
                                <!--<p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>-->
                                <div class="content-item1-ss2 m-comment">
                                    <ul class="text-capitalize text-center">
                                        <li>Fold</li>
                                        <li>Opendime</li>
                                        <li>Projects</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" >
                        <div class="card w-100" style="width: 18rem;">
                            <div class="card-body">
                                <div class="img-title-resoures d-flex justify-content-center mb-4"><img src="marketc/images/icon-resources4.png" alt=""></div>
                                <div style="position: relative" class="h3 title-item1-ss2">
                                    Charts and
                                    statistics
                                </div>
                                <!--<p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>-->
                                <div class="content-item1-ss2">
                                    <ul class="text-capitalize text-center">
                                        <li>Trade Block</li>
                                        <li>CMKcharts</li>
                                        <li>CMK Volatility Index</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <div class="clearfix "></div>
        <div class="mb-5 mt-2 border-bottom" id="ss3" style="background-image:url(marketc/images/bg-m-resources.jpg);	background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;">
            <div class="row ">
                <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative">
                    buy
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="d-flex justify-content-around flex-wrap">
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8 ">
                    <div class="card w-100" style="width: 18rem;">
                        <div class="card-body">
                            <div class="title-img-ss3 text-center mb-4 ">
                                <img src="marketc/images/iconbank-ss3.png" alt="">
                            </div>
                            <div class="font-fm-montserrat-extrabold">Use Market trade</div>
                            <p class="m-comment"> Market Trade allows you to pay with a simple two step scan-and-pay.
                                No need to sign up, swipe your card.</p>
                        </div>
                    </div>

                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8 ">
                    <div class="card w-100" style="width: 18rem;">
                        <div class="card-body">
                            <div class="title-img-ss3 text-center mb-4 ">
                                <img src="marketc/images/icon2-ss3.png" alt="">

                            </div>
                            <div class="font-fm-montserrat-extrabold">Discover people selling CMK in your community</div>
                            <p class="m-comment"> CMK on mobiles allows you to pay with a simple two step scan-and-pay. No need to sign up, swipe your card. </p>
                        </div>
                    </div>

                </div>
                <div class="p-2 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8 ">
                    <div class="card w-100" style="width: 18rem;">
                        <div class="card-body">
                            <div class="title-img-ss3 text-center mb-4 ">
                                <img src="marketc/images/icon3-ss3.png" alt="">

                            </div>
                            <div class="font-fm-montserrat-extrabold">Use Market wallet </div>

                            <p class="m-comment">  Market wallet allows you to pay with a simple two step scan-and-pay. No need to sign up, swipe your card. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix "></div>
        <div class="mb-5 mt-2 border-bottom background-white "  style="display: inline-block" id="ss4">
            <div id="m-our-team">
                <div class="row ">
                    <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative">
                        our partners
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex flex-wrap justify-content-around m-box-uor-team">
                    <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-4 col-sm-4  ">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img class="card-img-top mx-auto" src="marketc/images/team2/1.png" alt="Card image cap">
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-title">
                                    <h4 class="text-white  font-size-15 text-uppercase font-fm-montserrat-semi-bold">Abner Smith</h4>
                                    <h6 class="text-white  font-size-15 font-fm-montserrat-light">CEO and Co-founder of MarketC project</h6>
                                </div>
                                <div class="team-share">
                                    <div class="team-share">
                                        <p class="text-white src="marketc/images/ ligh-height-30">
                                            6/2012 - 7/2014:  Engineer at EYF group - Developed and integrated payment system for client
                                            <br>
                                            8/2014 - 5/2017: founder -   OSP sofware solutions- Working through a worldwide network of distributors, we supply mobile data capture products which can be used in a variety of applications such as supply chain management, stock inventory control, ticketing, data management and biometric scanning.
                                            <br>
                                            6/2017 - present : CEO and Co-founder of MarketC Community
                                            Education
                                            University of Melbourne
                                            MBA, BEng (Electrical)
                                            Melbourne high school
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-4 col-sm-4  ">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img class="card-img-top mx-auto" src="marketc/images/team2/2.png" alt="Card image cap">
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-title">
                                    <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Ambrose Bartlett</h4>
                                    <h6 class="text-white font-size-15 font-fm-montserrat-light">Co-founder and president</h6>
                                </div>
                                <div class="team-share">
                                    <div class="team-share">
                                        <div class="text-white ligh-height-30 src="marketc/images/ ">
                                            5/2005 - 1/2009: Financial Advisor of ICB Bank
                                            <br>
                                            4/2009 - 1/2012: Financial Analyst Investment Banking. The bank offers a variety of products and services, ddressing needs ranging from basic requirements of individuals to the more complex requirements of corporate entities. Electronic delivery channels, ably supported by an extensive network of banking centers encompassing over 56 locations across all the Emirates.
                                            <br>
                                            9/2012 - president: CEO of Green Sky Media Green Sky Media is a multi-media advertising company. The services we offer to the market include: Panel construction, television advertising magazines, conferences gratitude customers, complete business procedures.
                                            education:
                                            -	University of cape town
                                            -	Bachelor of Business Science
                                            -	MBA
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-4 col-sm-4  ">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img class="card-img-top mx-auto" src="marketc/images/team2/3.png" alt="Card image cap">
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-title">
                                    <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Baron Williams</h4>
                                    <h6 class="text-white font-size-15 font-fm-montserrat-light">Co-founder and CFO</h6>
                                </div>
                                <div class="team-share">
                                    <div class="team-share">
                                        <div class="text-white ligh-height-30 src="marketc/images/ ">
                                            4/2008 - 5/2012: IOS App Developer at Techkid company
                                            -	Programming learning applications for children <br>
                                            12/2012 - president  :
                                            invest in financial corporations<br>
                                            -	5/2014 -  5/2017  : founder of MyLocationFood application
                                            Education
                                            University of Manchester

                                            MBA, specializing in technology and finance.
                                            Baron has worked with many clients in the fintech, blockchain, and cybersecurity space,
                                            developing a passion for these dynamic and evolving areas

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-4 col-sm-4  ">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img class="card-img-top mx-auto" src="marketc/images/team2/photo_2018-05-03_15-22-09.png" alt="Card image cap">
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-title">
                                    <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Tracy Phillips</h4>
                                    <h6 class="text-white font-size-15 font-fm-montserrat-light"> Chief Marketing Officer.</h6>
                                </div>
                                <div class="team-share">
                                    <div class="team-share">
                                        <p class="text-white src="marketc/images/ ligh-height-30 ">
                                            Tracy Phillips  is a Marketing and Sales  expert who develops innovative sales and  marketing strategies for global companies.  As well as international consultancy,
                                            Tracy  is Managing Director of Crissty , a German marketing agency
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-4 col-sm-4  ">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img class="card-img-top mx-auto" src="marketc/images/team2/5.png" alt="Card image cap">
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-title">
                                    <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Rasheek Brooks</h4>
                                    <h6 class="text-white font-size-15 font-fm-montserrat-light">Blockchain Solutions</h6>
                                </div>
                                <div class="team-share">
                                    <div class="team-share">
                                        <p class="text-white src="marketc/images/ ligh-height-30 ">
                                            The cloud development floor for NabTech network. The strongest point is the security and the system. 6 years of research on blockchain
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="p-2 col-lg-4 col-md-4 col-xl-4 col-xs-4 col-sm-4  ">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img class="card-img-top mx-auto" src="marketc/images/team2/photo_2018-05-03_15-21-41.png" alt="Card image cap">
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-title">
                                    <h4 class="text-white font-size-15 text-uppercase font-fm-montserrat-semi-bold">Kyle Zverev</h4>
                                    <h6 class="text-white font-size-15 font-fm-montserrat-light">Cloud Computing Advisor</h6>
                                </div>
                                <div class="team-share">
                                    <div class="team-share">
                                        <p class="text-white src="marketc/images/ ligh-height-30 ">
                                            Kyle is a Start-up founder, a growth hacker, with 7+ years of experience. His Software Company is currently helped hundreds of businesses in Germany, Austria, and Switzerland achieve exponential growth.
                                        </p>

                                    </div>
                                </div>
                            </div>
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
                        <img class="img-fluid"  alt="Card image cap" src="marketc/images/ourpartners/1.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/2.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/3.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/4.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/5.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/6.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/7.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/8.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/9.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/10.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/11.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/12.png">
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix "></div>

    @endsection