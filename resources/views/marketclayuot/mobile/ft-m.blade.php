<div class="m-footer pt-2 bg-m-color-footer">
    <div class="m-title-footer text-uppercase mt-3 mb-3  font-fm-montserrat-blod text-center"><h6 class="text-white">about us</h6></div>
    <p class="ml-2 mr-2 mb-2 font-size-8 font-fm-montserrat-regular text-center text-capitalize text-white">Stay up to date with our latest releases and developments on the MarketC ecosystem! We will only release benefical news for our users. Life’s too short to spam.</p>

    <div class="mb-3" style="border: solid 2px ;margin: auto;color: white;border-radius: 10px;max-width: 100px"></div>
    <div class=" mx-auto flex-wrap d-flex align-items-start mb-5 justify-content-around" style="width: 80%">
        <div class="p-2 mt-1 icon-footer"><a href="{{$socialInfo->facebook or ''}}"><i class="fab fa-facebook-f"></i></a></div>
        <div class="p-2 mt-1 icon-footer"><a href="{{$socialInfo->tele or ''}}"><i class="fas fa-location-arrow"></i></a></div>
        <div class="p-2 mt-1 icon-footer"><a href="mailto:{{$contactInfo->contact_email or ''}}"><i class="fas fa-envelope"></i></a></div>
        <div class="p-2 mt-1 icon-footer"><a href="{{$socialInfo->youtube or ''}}"><i class="fab fa-youtube"></i></a></div>
        <div class="p-2 mt-1 icon-footer"><a href="{{$socialInfo->twitter or ''}}"><i class="fab fa-twitter"></i></a></div>
        <div class="p-2 mt-1  icon-footer"><a href="{{$socialInfo->github or ''}}"><i class="fab fa-github"></i></a></div>
    </div>
    <div class="m-info-footer text-white mb-5">
        <div class="m-title-footer text-uppercase mt-3 mb-3  font-fm-montserrat-blod text-center"><h6 class="text-white">information</h6></div>
        {{--<p class="text-center font-size-8">Tel: +45547-5543</p>--}}
        <p class="text-center font-size-8"><a class="text-white" href="mailto:{{$contactInfo->contact_email or ''}}?Subject=Hello%20again" target="_top">Email: {{$contactInfo->contact_email or ''}}</a> </p>
{{--        <p class="text-center font-size-8">Location: 32 avanue,New york</p>--}}
    </div>
    <div id="menu-footer" class="text-white">
        <div class="m-title-footer text-uppercase mt-3  font-fm-montserrat-blod text-center"><h6 class="text-white">Services Link</h6></div>
        <nav style="padding-left: 0px;text-transform: uppercase;" id="navbar-example" class=" font-weight-bold navbar-example navbar ">
            <ul class="nav nav-pills  mx-auto">
                <li class="nav-item with-100 text-center">
                    <a id="introductionlink" class="nav-link d-inline-block font-size-8 pt-1 pb-1 mr-2 text-white" href="#">Introduction</a>
                </li>
                <li class="nav-item with-100 text-center">
                    <a id="resourceslink" class="nav-link pt-1 font-size-8 pb-1 mr-2 text-white" href="#">Resources </a>
                </li>
                <li class="nav-item with-100 text-center">
                    <a id="participatelink" class="nav-link font-size-8 pt-1 pb-1 mr-2 text-white" href="#">Participate</a>
                </li>

            </ul>
        </nav>
    </div>
    <!--<div class="border" style="border: solid 1px #2fb4e8!important;max-width: 593px"></div>-->
    <div class="copyright" style="background-color: #070e16">
        <p class=" text-justify text-white text-center mb-2" style="font-size: 13px;line-height: 40px">Copyright © 2018, MarketC</p>
    </div>
</div>