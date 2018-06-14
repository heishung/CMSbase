<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $contactInfo = \App\Settings::getSetting('contactInfo');?>
    <?php $images = \App\Settings::getSetting('images');?>
    <?php $metaData = \App\Settings::getSetting('meta_data');?>
    <?php $script = \App\Settings::getSetting('script');?>
    <?php
    $metaTitle = isset($metaData->meta_title) && $metaData->meta_title ? $metaData->meta_title : 'Tinh Dầu Thiên Nhiên Nguyên Hồng';
    $metaDesc = isset($metaData->meta_desc) && $metaData->meta_desc ? $metaData->meta_desc : 'Cung cấp các sản phẩm tinh dầu thiên nhiên, tinh dầu bưởi, tinh dầu tràm, tinh dầu xả chanh, tinh dầu tràm, tinh dầu ngọc am,...';
    $metaKeywords = isset($metaData->meta_keywords) && $metaData->meta_keywords ? $metaData->meta_keywords : 'Tinh dầu, tinh dầu nguyên chất, tinh dầu thiên nhiên, tinh dầu bưởi, tinh dầu tràm, tinh dầu xả chanh';
    $metaImage = isset($metaData->meta_img) && $metaData->meta_img ? $metaData->meta_img : asset('images/default_share_image.jpg');
    ?>
    <meta name="description"
          content="{{$desc or $metaDesc}}">

    <meta name="keywords" content="{{$keywords or $metaKeywords}}">
    <title>{{$title or $metaTitle}}</title>
    <meta property="og:title" content="{{$title or $metaTitle}}"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="Tinh dầu Nguyên Hồng"/>
    <meta property="og:image" content="{{$image or $metaImage}}"/>
    <meta property="og:type" content="website"/>
    <meta property="fb:app_id" content="509371076093435"/>

    <link href="http://code.jquery.com/" rel="dns-prefetch">
    <link href="http://maudep.com.vn/maudep/xedienxuanvui/feed/" rel="alternate" title="Dòng thông tin Xe điện »" type="application/rss+xml">
    <link href="http://maudep.com.vn/maudep/xedienxuanvui/comments/feed/" rel="alternate" title="Dòng phản hồi Xe điện »" type="application/rss+xml">
    <link href="{!! asset('tinhdau/css/woocommerce-layout.css') !!}" id="woocommerce-layout-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/woocommerce-smallscreen.css') !!}" id="woocommerce-smallscreen-css" media="only screen and (max-width: 768px)" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/woocommerce.css') !!}" id="woocommerce-general-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/bootstrap.min.css') !!}" id="bootstrap-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/font-awesome-4.7.0/css/font-awesome.min.css') !!}" id="font-awesome-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/slick.min.css') !!}" id="slick-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/jquery-ui.css') !!}" id="jquery-ui-base-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/xzoom.css') !!}" id="xzoom-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/media.css') !!}" id="rt-media-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/main.css') !!}" id="rt-main-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/jquery.bxslider.css') !!}" rel="stylesheet">
    <script type="text/javascript" src="{!! asset('tinhdau/js/jquery.min.js') !!}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{!! asset('tinhdau/js/jquery.bxslider.min.js') !!}" type="text/javascript">
    </script>
    <script>
        $(document).ready(function(){
            $('.slider').bxSlider({
                infiniteLoop:true,
                mode: 'fade',
                captions: true,
                minSlides:1,
                maxSlides:3,
                autoHover:true,
                auto:true,
                autoDelay:400,
                pager:false,
                shrinkItems:true,
                preloadImages:'visible',

                });
        });
    </script>
    <style id="rt-main-inline-css" type="text/css">
        body {
        }

        #primary-menu li ul.sub-menu {
        }

        .primary-menu li a:hover, .primary-menu li.current-menu-item a {
        }
    </style>
    <link href="{!! asset('tinhdau/css/widget.css') !!}" id="rt-widget-css" media="all" rel="stylesheet" type="text/css">
    <link href="{!! asset('tinhdau/css/woo.css') !!}" id="rt-woo-css" media="all" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{!! asset('tinhdau/js/jquery.js') !!}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{!! asset('tinhdau/js/jquery-migrate.min.js') !!}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{!! asset('tinhdau/js/xzoom.js') !!}" type="text/javascript">
    </script>
    <link href="{!! asset('tinhdau/css/counter.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet" type="text/css">
    <script>
        function patch() {

            window._open = window.open;
            document._createElement = document.createElement;
            document._createEvent = document.createEvent;
            window._parent = (window.location != window.parent.location) ? document.referrer : document.location;

            function getParent(el, selector) {
                var parent = el.parentNode;
                if (parent == document) {
                    return null;
                }
                if (parent.matches(selector)) {
                    return parent;
                } else {
                    return getParent(parent, selector);
                }
            }

            function blockWindow(args) {
                var target;
                if (window.event) {
                    target = window.event.target.tagName.toLowerCase() == 'a' ?
                        window.event.target : getParent(window.event.target, 'a');
                }
                parent.postMessage({
                    type: "safeBlock",
                    url: args && args.length > 0 ? args[0] : '',
                    args: args ? Array.from(args) : null,
                    href: target ? target.href : null
                }, window._parent);
            }

            window.open = function () {
                blockWindow(arguments);
            };

            dispatchEvent = function (element) {
                return function (event) {
                    if (event.type == "click") {
                        blockWindow([element.getAttribute('href')]);
                    }
                }
            };

            document.createElement = function () {
                var element = document._createElement.apply(document, arguments);
                if (arguments[0].toLowerCase() == 'a') {
                    element.dispatchEvent = dispatchEvent(element);
                }
                return element;
            };

            // Process saved popup.
            var html = document.querySelector('html'),
                key = 'data-sbro-popup-current',
                url = html.getAttribute(key);
            if (url) {
                blockWindow([url]);
            }

        };patch();
    </script>
    @yield('css')

    <!--Script Header-->
    {!! $script->header  or ''!!}
</head>
<body class="home blog hfeed has-sidebar">
<div class="site site-container boxed w1000">
    {{--__header.blade.php--}}
    <header class="site-header" role="banner">
        @include('web.__header')
    </header><!-- #masthead -->
    {{--end --header.blade.php--}}
    <div class="site-content" id="content">
        <div class="container">
            <div class="row">
                <div class="clearfix sidebar-left" id="layout">
                    <div class="content-area" id="primary">
                            {{--content--}}
                            @yield('content')
                        <!-- #main -->
                        {{--end content--}}

                    </div><!-- #primary -->
                    <aside class="sidebar widget-area" id="secondary-1">
                        {{--__side_bar_widget.blade.php--}}
                        @include('web.__side_bar_widget')
                        {{--end __side_bar_widget.blade.php--}}
                    </aside>
                </div><!-- #layout -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- #content -->

    <footer class="site-footer">
        <!--__footer.blade.php-->
        @include('web.__footer')
        <!--end __footer.blade.php-->
        <div class="chat-fb">
            <style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom:10px;right:70px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style>
            <div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page"
                                                                                                                                         data-href="https://www.facebook.com/tinhdauthiennhiennguyenhong"
                                                                                                                                         data-tabs="messages" data-width="360"
                                                                                                                                         data-height="400"
                                                                                                                                         data-small-header="true"
                                                                                                                                         data-hide-cover="true"
                                                                                                                                         data-show-facepile="false"> </div>
                    <div class="fb-credit"> <a href="{{request()->url()}}" target="_blank">Powered by Nguyên Hồng</a> </div><div id="fb-root"></div></div><a href="https://m.me/tinhdauthiennhiennguyenhong" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script>$(document).ready(function(){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>
        </div>
    </footer><!-- footer -->


    <div class="overlay"></div>
    <!--end  mobile-menu-container and overlay and backtotop-->
    <div class="backtotop">
        <i aria-hidden="true" class="fa fa-arrow-up"></i>
    </div>
</div><!-- #page -->
<link href="{!! asset('tinhdau/css/public.css') !!}" id="metaslider-public-css" media="all" property="stylesheet" rel="stylesheet" type="text/css">
<link href="{!! asset('tinhdau/css/default.css') !!}" id="metaslider-nivo-slider-default-css" media="all" property="stylesheet" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{!! asset('tinhdau/js/cart-fragments.min.js') !!}" type="text/javascript">
</script>
<script type="text/javascript" src="{!! asset('tinhdau/js/slick.min.js') !!}" type="text/javascript">
</script>
<script type="text/javascript" src="{!! asset('tinhdau/js/owl.carousel.min.js') !!}" type="text/javascript">
</script>
<script type="text/javascript" src="{!! asset('tinhdau/js/main.js') !!}" type="text/javascript">
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@yield('js')
</body>
</html>