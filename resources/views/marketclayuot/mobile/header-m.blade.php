<div class="m-header">

    <div class=" m-top-header container-fluid ">

        <nav class="navbar  d-flex pl-0 pr-0 justify-content-between ">
            <div class="m-bnt-menu">
                        <span class="text-white font-size-22 menu-button" style="font-size:30px;cursor:pointer ;color: #2fb4e8;" onclick="openNav()">
                            <div class="far fa-window-minimize"></div>
                            <div class="far fa-window-minimize"></div>
                        </span>
            </div>
            <a class="navbar-brand mr-0" href="{{asset('')}}">
                <img style="max-width: 80px;object-fit: cover" src="marketc/images/logo.png" alt="">
            </a>
            <ul class="mb-0 font-size-12 text-capitalize">
                <a class="text-white" href="#">En</a>
            </ul>


        </nav>
        <div id="mySidenav" class="sidenav" style="display: none;">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
            <nav id="myScrollspymb" class="navbar-example navbar pt-1 pb-1 pl-0 pr-0">

                <div id="accordion" class="w-100 pb-4">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="mb-0 text-center">
                                <button class=" w-100 btn d-flex justify-content-between btn-link text-uppercase font-fm-montserrat-medium text-white" data-toggle="collapse" data-target="#faq" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="p-2 text-uppercase text-blue-litter">Introduction</span>
                                    <span class="p-2"><i class="fas fa-angle-right text-blue-litter"></i></span>
                                </button>
                            </div>

                        </div>

                        <div id="faq" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body pl-0" style="padding: 0px">
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('mfaq')}}">Faq</a></div>
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('community')}}">Community</a></div>
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('specification')}}">Specification</a></div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 class="mb-0 text-center">
                                    <button class="w-100 btn btn-link text-uppercase font-fm-montserrat-medium text-white d-flex flex-wrap justify-content-between" data-toggle="collapse" data-target="#community" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="p-2 text-uppercase text-blue-litter">RESOURCES</span>
                                        <span class="p-2"><i class="fas fa-angle-right text-blue-litter"></i></span>
                                    </button>
                                </h3>

                            </div>

                            <div id="community" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                {{--<div class="border-bottom col-12 text-capitalize"><a href="{{route('resources')}}">RESOURCES</a></div>--}}
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('exchanges')}}">Exchanges</a></div>
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('communities')}}">comunities</a></div>
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('documentation')}}">documentation</a></div>
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('marketcore')}}">marketcore</a></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 class="mb-0 text-center">
                                    <button class="w-100 btn btn-link text-uppercase font-fm-montserrat-medium text-white d-flex flex-wrap justify-content-between" data-toggle="collapse" data-target="#annoucement" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="p-2 text-uppercase text-blue-litter">PARTICIPATE</span>
                                        <span class="p-2"><i class="fas fa-angle-right text-blue-litter"></i></span>
                                    </button>
                                </h3>

                            </div>

                            <div id="annoucement" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('support')}}">support</a></div>
                                {{--<div class="border-bottom col-12 text-capitalize"><a href="{{route('buy')}}">Buy</a></div>--}}
                                <div class="border-bottom col-12 text-capitalize"><a href="{{route('development')}}">development</a></div>

                            </div>
                        </div>
                        <div class=" col-12 m-box-doc border-bottom">
                            <div class="row text-capitalize"><a href="https://marketc.net/media/MARKETCWHITEPAPER.pdf"><img src="marketc/images/icon-mobile/icon-doc.png" alt="">WHITEPAPER</a></div>
                            <div class="row text-capitalize"><a href="#"><img src="marketc/images/icon-mobile/pickandshovel.png" alt=""> mining</a></div>
                            <div class="row text-capitalize"><a href="https://marketc.io/login"><img src="marketc/images/icon-mobile/wallet.png" alt=""> wallet</a></div>
                        </div>
                        <div class=" col-12 m-box-doc border-bottom">
                            <div class="row text-capitalize"><a href="#"> About us</a></div>
                            <div class="row text-capitalize"><a href="#"> Contact us</a></div>
                            <div class="row text-capitalize"><a href="#"> Privacy &amp; Terms</a></div>
                        </div>


                    </div>


                </div></nav>
        </div>

    </div>
    <div class="mt-5 m-mid-header pt-2">
        <div class="m-titile-header  p-3 text-center position-relative">
            <img src="marketc/images/m-banner.png" class="img-fluid" alt="">
        </div>
    </div>
    <div class="d-flex flex-row mt-4 justify-content-center mb-4">
        <div class="p-2">
            <a href="https://marketc.io/login" target="_blank"><button type="button" class="font-fm-montserrat-blod btn-head m-btn-head text-uppercase btn btn-primary font-size-12">Join Pre Sale</button></a>
        </div>
        <div class="p-2">
            <a href="https://medium.com/@MarketC/how-to-take-part-in-the-marketc-pre-ico-be48012b57c1" target="_blank"><button type="button" class="font-fm-montserrat-blod btn-head m-btn-head text-uppercase btn btn-primary font-size-12">How to buy</button></a>
        </div>
    </div>
</div>