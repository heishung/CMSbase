<?php $info=App\Settings::getSetting('contactInfo') ?>

<div class="bg-shadow-footer"></div>
<div class="container">
    <div class="row justify-content-center pt-5 ">
        <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-8 text-center mt-3">
            <a href="#" class=""><img src="images/logoft.png" alt=""></a>
        </div>
        <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6  mt-3">
            <p class="h5 pl-2 mb-4 text-white">@lang('home.Services')</p>
            <ul class="pl-2">
                <li><a class="" href="#Web-Development">@lang('home.Webdevelopmenton')</a></li>

                <li><a class="" href="#e-Commerce">@lang('home.E-Commerce')</a></li>

                <li><a class="" href="#enterprise-solutions">@lang('home.EnterpriseSolutions')</a></li>

                <li><a class="" href="#financial-technology">@lang('home.FinancialTechnology')</a></li>

                <li><a class="" href="#game">@lang('home.Game')</a></li>
            </ul>
        </div>
        <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6  mt-3">
            <p class="h5 pl-4 mb-4 text-white">@lang('home.menu')</p>
            <ul class="pl-2">
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
            </ul>
        </div>
        <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-12  mt-3">
            <p class="h5 pl-2 mb-4 text-white">@lang('home.contactinformation')</p>
            <ul class="pl-2 text-white">
                <li>Email: {{$info->contact_email}}</li>
                <li>Tel: {{$info->contact_phone}}</li>
                <li>Address: {{$info->contact_address}}</li>

            </ul>
        </div>
    </div>

</div>
<div class="text-center text-white border-top  coppy-right">
    <p>© Coppy right by Soft Entertainment DEV</p>
</div>