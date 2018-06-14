<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <?php $contactInfo = \App\Settings::getSetting('contactInfo');?>
    <?php $images = \App\Settings::getSetting('images');?>
    <?php $metaData = \App\Settings::getSetting('meta_data');?>
    <?php $script = \App\Settings::getSetting('script');?>
    <?php
    $metaTitle = isset($metaData->meta_title) && $metaData->meta_title ? $metaData->meta_title : '';
    $metaDesc = isset($metaData->meta_desc) && $metaData->meta_desc ? $metaData->meta_desc : '';
    $metaKeywords = isset($metaData->meta_keywords) && $metaData->meta_keywords ? $metaData->meta_keywords : '';
    $metaImage = isset($metaData->meta_img) && $metaData->meta_img ? $metaData->meta_img : asset('marketc/images/logo.png');
    ?>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="Marketc"/>
    <meta name="description"content="{{$desc or $metaDesc}}">
    <meta name="author" content="MarketC">
    <link rel="shortcut icon" href="{{$image or $metaImage}}">
    <link rel="apple-touch-icon image_src" href="{{$image or $metaImage}}">

    <meta property="og:image" content="{{$image or $metaImage}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>{{$title or $metaTitle}}</title>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="marketc/css/bootstrap.min.css">
    <link rel="stylesheet" href="marketc/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="marketc/css/style.css?ver=1.4">
    <link rel="stylesheet" href="marketc/front/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="marketc/css/customstyle.css?ver=1.3">
    <link rel="stylesheet" href="marketc/front/Themify/themify-icons/themify-icons.css">
   {{-- <script type="text/javascript" src="marketc/js/particles.min.js"></script>--}}
    <link rel="stylesheet" href="marketc/css/animate.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 992px)" href="marketc/css/style-mobile.css" >
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="marketc/css/swiper.min.css">

    @yield('m-css')
    {!! $script->header  or ''!!}
</head>
<body data-spy="scroll" data-target="#navbar-example">

<div id="wraper background-whitesmoke">

    <div class="position-fixed col-lg-4 col-xl-4 col-md-5 col-xs-10 col-sm-10 form-contact modal-content w-100  " style="right: 0%;z-index: 112;top: 32%;display: none;" >
        <div class="modal-header">
            <h6 class="mx-auto modal-title text-capitalize" id="exampleModalLabel">ASK A QUESTION</h6>

            <button type="button" class="close pl-0 ml-0" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate="" name="contactform" method="post" action="{{route('contact')}}">
                {{ csrf_field() }}
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
    <div class="btn-contact-form" ><img style="max-width: 53px;object-fit: fill;left: -17%;position: absolute;top: -17%;" src="marketc/images/clipboard-with-pencil.png" alt=""></div>
    @yield('d-content')
    <div id="mobile" class="">
        @include('marketclayuot.mobile.header-m')

        <div class="clearfix"></div>
        <div class="m-container">
        @yield('m-content')
        @yield(('m-home-content'))
        </div>
        <div class="clearfix"></div>
       @include('marketclayuot.mobile.ft-m')
    </div>
    <a href="https://t.me/joinchat/HiPVKRMFh7-oleJ_dTpcVA" target="_blank" class="fixed-btn w-inline-block"><img src="marketc/images/tele.png" class="plane-ico" data-ix="plane-loop" ></a>
</div>

<script src="marketc/js/jquery.min.js"  crossorigin="anonymous"></script>
<script src="marketc/js/popper.min.js" crossorigin="anonymous"></script>
<script src="marketc/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="marketc/js/jquery.min.js"></script>
<script type="text/javascript" src="marketc/js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="marketc/js/jquery.shorten.min.js"></script>

@yield('m-js')
<!-- Swiper JS -->
<script src="marketc/js/swiper.min.js"></script>

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
    $(".comment").shorten({
        "showChars" : 250,
        "moreText"  : "\"<i class=\\\"fas fa-circle\\\"></i> <i class=\\\"fas fa-circle\\\"></i> <i class=\\\"fas fa-circle\\\"></i>",
        "lessText"  : "\"<i class=\\\"fas fa-circle\\\"></i> <i class=\\\"fas fa-circle\\\"></i> <i class=\\\"fas fa-circle\\\"></i>",

    });
    $(".m-comment").shorten({
        "showChars" : 60,
        "moreText"  : "<i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i>",
        "lessText"  : "<i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i>",
    });
</script>
@if (session('notificationmail'))

    <script type='text/javascript'>
        $.notify({
            message: "{{ session('notificationmail') }}"
        },{

            type: 'success'
        });
    </script>
@endif





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

<script src="marketc/js/jquery.min.js"  crossorigin="anonymous"></script>
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
{{--<script>
    particlesJS("particles-js",
        {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},
                "shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},
                    "polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},
                "opacity":{"value":0.5,"random":false,
                    "anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},
                "size":{"value":3,"random":true,
                    "anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},
                "line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},
                "move":{"enable":true,"speed":6,"direction":"none",
                    "random":false,"straight":false,"out_mode":"out",
                    "bounce":false,
                    "attract":{"enable":false,"rotateX":600,"rotateY":1200}}},
            "interactivity":{"detect_on":"canvas",
                "events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>--}}


<!--mobile-->

</body>
</html>