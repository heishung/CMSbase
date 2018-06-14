<?php $images = \App\Settings::getSetting('images'); ?>
<?php $banners = \App\Settings::getSetting('banners'); ?>
<?php $contact = \App\Settings::getSetting('contactInfo');?>
<style>
    .header {
        padding-top: 10px;
        padding-bottom: 10px;
        background-image: url("{{$banners->banner_image or ''}}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 220px;
    }
    .logo {
        overflow: hidden;
        position: relative;
        height: 100%;
    }

    .logo img {
        position: absolute;
        bottom: 0;
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    @font-face {
        font-family: 'Snell Roundhand';
        src: url('{!! asset('themes/fonts/SVN-Snell Roundhand Script.ttf') !!}');
    }

    .banner-title {
        height: 100%;
        text-align: center;
    }
    .name-shop {
        padding-top: 48px;
        /*font-family: Snell Roundhand;*/
        font-size: 38px !important;
        color: #6b1511;;
    }
    .slogan {
        font-family: Snell Roundhand;
        font-size: 36px !important;
        color: #6b1511;;
        /*text-shadow: 1px 1px 3px black;*/
        padding-left: 10px;
        margin-top: 10px;
    }
    .box-dr > .cat-dropdown {
        display: none;
    }
    .box-dr:hover > .cat-dropdown{
        display: block!important;
    }
    .bx-wrapper .bx-controls-direction a {
        z-index: 1000!important;
    }
</style>
{{--{{$contactInfo->branch_name or ''}}--}}
<div class="top_bar">
    <div class="container">
        <div class="row">

            <aside id="nav_menu-4" class="widget widget_nav_menu"><div class="menu-menu-header-container"><ul id="menu-menu-header" class="menu">
                        <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a target="_blank" href="{{route('delivery')}}">Chính sách giao hàng</a></li>
                        <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="{{route('about')}}">Giới thiệu</a></li>
                    </ul></div></aside>
        </div>
    </div>
</div>
<div class="site-branding">
    <div class="container box-head">

        <div class="row header" >

            <div class="col-lg-2 col-md-2 col-sm-12 col-md-offset-1 col-xs-3" id="box-logo">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{$images->logo or asset('images/default-logo.png')}}"></a>
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-xs-7 col-sm-12 banner-title">
                <div class="name-shop">{{$contactInfo->branch_name or ''}}</div>

                <h1 class="slogan" style="text-align: center">{{$banners->banner_title}}</h1>
                <div class="hotline-head"><i class="fa fa-phone-square"></i> {!! $contact->contact_hotline !!}</div>
            </div>
            <div class="col-md-1"></div>

        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .site-branding -->
<nav class="main-navigation" id="site-navigation">
    <div class="container">

        <div class="row">
            <div class="primary-menu-container visible-lg col-lg-12">

                <ul class="primary-menu menu clearfix" id="primary-menu">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="box-dr" style="position: relative">

                        <a class="btn-dr"> Sản Phẩm </a>
                        <ul class="cat-dropdown">
                            @foreach(\App\Category::where('status', 1)->get() as $category)
                                <li class="menu-item menu-item-type-post_type">
                                    <a href="<?php echo e(route('category.list.product',['category' => $category->slug])); ?>">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>

                        {{--<script>
                            $(document).ready(function(){
                                $(".btn-dr").click(function(){
                                    $(".cat-dropdown").toggle();
                                });
                                $(window).click(function(e) {
                                    alert('asdasd')
                                });
                            });
                        </script>--}}
                    </li>

                        <li class="menu-item menu-item-type-post_type">
                            <a href="{{route('about')}}">Giới thiệu</a>
                        </li>
                </ul>
            </div>
            <div class="hidden-lg col-xs-12">

                <div id="menu-toggle" class="mobile-menu-no-search">
                    <span id="">Menu</span>
                    <button id="" type="button" class="rt-navbar-toggle hidden-lg">
                        <span class="screen-reader-text sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
    <!--__mobile-menu.blade.php-->
    <div class="mobile-menu-container">
        <div class="close-menu">
           <h4> {{$contactInfo->branch_name or ''}}</h4> {{--<i aria-hidden="true" class="fa fa-times"></i>--}}
        </div>
        <ul class="mobile-menu" id="moblie-menu">
            <li>
                <a href="/">Home</a>
            </li>
            <li style="position: relative">

                <a class="btn-dr1"> Sản Phẩm </a>
                <ul  class="cat-dropdown1" style="display: block;">
                    @foreach(\App\Category::where('status', 1)->get() as $category)
                        <li style="background-color:#dbdbdb" class="menu-item menu-item-type-post_type">
                            <a href="{{route('product.category',['category' => $category->slug])}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>

                <script>
                    var catdr = document.getElementsByClassName("cat-dropdown1");
                    $(document).ready(function(){
                        $(".btn-dr1").click(function(){
                            $(catdr).toggle();
                        });

                    });
                </script>
            </li>

            <li class="menu-item menu-item-type-post_type">
                <a href="{{route('about')}}">Giới thiệu</a>
            </li>

        </ul>
    </div>
    <!-- end __mobile-menu.blade.php-->
</nav><!-- #site-navigation -->


