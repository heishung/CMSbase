@extends('marketclayuot.index')
@section('m-content')

    <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative;line-height: 50px">
        exchanges
    </div>
    <div class="pb-5 border-bottom" id="ss2" style="background-image: url(marketc/images/bg-m-resources.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;cursor: -webkit-grab;">

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
