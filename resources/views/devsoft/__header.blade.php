
    @if ($setting = \App\Settings::all())
        @if($slide = \App\Settings::getSetting('slide') )
            <?php $slide = \App\Settings::getSetting('slide') ?>
            @else
            @endif
        @if($slide = \App\Settings::getSetting('images') )
            <?php $slide = \App\Settings::getSetting('images') ?>
        @else
        @endif
    @else
        <?php $slide=null ?>
        @endif
<div id="top" class="">

    <div class="container top-des">
        <div class="row ">
            <div class="col-3 box-logo">
                <a class=" pl-3 w-100" href="/"><img style="width: 135px;" id="logo" src="{{asset('')}}{{$images->logo or asset('images/default-logo.png')}}" alt="logo"></a>
            </div>
            <div class="col-9" id="sidebar" >
                <!--menu-des-->
                <nav id="navbar-example" class="navbar">
                    <ul class="nav nav-pills menu-des-top">
                        <li class="nav-item dropdown" >
                            <a  class="text-capitalize nav-link dropdown-toggle pt-1 pb-1 mr-2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">@lang('home.Services')</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#Web-Development">@lang('home.Webdevelopmenton')</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#e-Commerce">@lang('home.E-Commerce')</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#enterprise-solutions">@lang('home.EnterpriseSolutions')</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#financial-technology">@lang('home.FinancialTechnology')</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#game">@lang('home.Game')</a>
                            </div>
                        </li>
                        <li class="nav-item  " aria-selected="true">
                            <a class="nav-link pt-1 pb-1 mr-2"  href="#technology">@lang('home.Technologies')</a>
                        </li>
                        <li class="nav-item ">
                            <a  class="nav-link pt-1 pb-1 mr-2"  href="#process" >@lang('home.Process')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pt-1 pb-1 mr-2"   href="#about-us" >@lang('home.About') </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pt-1 pb-1 mr-2"  href="#contact-us">@lang('home.Contact us')</a>
                        </li>
                        <ul class="nav border-left">
                            <li class="nav-item">
                                <a class="nav-link pt-1 pb-1 mr-2"  href="{{URL::asset('')}}language/en"><img src="images/location-en.png" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pt-1 pb-1 mr-2"  href="{{URL::asset('')}}language/vn"><img src="images/location-vn.png" alt=""></a>
                            </li>

                        </ul>
                    </ul>
                </nav>
                <!--menu-des-->

            </div>

        </div>
    </div>
    <div class=" top-mobile">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="images/logotop.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle pl-2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">@lang('home.Services')</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#Web-Development">@lang('home.Webdevelopmenton')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#e-Commerce">@lang('home.E-Commerce')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#enterprise-solutions">@lang('home.EnterpriseSolutions')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#financial-technology">@lang('home.FinancialTechnology')</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#game">@lang('home.Game')</a>
                        </div>
                    </li>
                    <li class="nav-item  " aria-selected="true">
                        <a class="nav-link pt-1 pb-1 mr-2"  href="#technology">@lang('home.Technologies')</a>
                    </li>
                    <li class="nav-item ">
                        <a  class="nav-link pt-1 pb-1 mr-2"  href="#process" >@lang('home.Process')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-1 pb-1 mr-2"   href="#about-us" >@lang('home.About') </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-1 pb-1 mr-2"  href="#contact-us">@lang('home.Contact us')</a>
                    </li>
                    <p class="border-left"></p>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link pt-1 pb-1 mr-2"  href="{{URL::asset('')}}language/en"><img src="images/location-en.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pt-1 pb-1 mr-2"  href="{{URL::asset('')}}language/vn"><img src="images/location-vn.png" alt=""></a>
                        </li>

                    </ul>
                </ul>
            </div>
        </nav>
    </div>
</div>


<div id="slide-header" class="container-fluid pl-0 pr-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>-->

        @if(isset($slide))
            <?php $slide = \App\Settings::getSetting('slide');
            ?>

            @if($slide->images1==null&&$slide->images2==null&&$slide->images3==null)
            @else

                    <div class="carousel-inner">
                    @foreach($slide as $key=>$value)
                        {{--  {{dd($slide)}}--}}
                        @if($slide->$key == null )
                        @else
                            @if($slide->$key=='slide')
                            @else
                                    @if ($loop->first)
                                        <div class="carousel-item active ">
                                            <img class="d-block w-100" src="{{$slide->$key or ''}}" alt="">
                                        </div>
                                    @endif
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{$slide->$key or ''}}" alt="">
                                    </div>

                            @endif
                        @endif

                    @endforeach
                </div>
            @endif
        @else

        @endif

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div  class="content-sllide container-fluid">
        <img data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400" class="img-content-slide img-fluid " style="max-height: 100%" src="images/contentslide.png" alt="">
    </div>
</div>