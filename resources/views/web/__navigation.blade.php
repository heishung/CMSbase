<?php $images = \App\Settings::getSetting('images'); ?>
<div class="container-fluid">
    <div class="row" style="text-align: center; background-color: #76b51b">
        <div class="navigation-bar" style="display: inline-block">
            <a href="/">Home</a>
            <div class="dropdown">
                <a href="#" data-toggle="dropdown">Sản phẩm<span
                            class="caret"></span></a>
                <div class="dropdown-menu">
                    @foreach(\App\Category::where('status', 1)->get() as $category)
                        <li>
                            <a href="{{route('product.category',['category' => $category->slug])}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </div>
            </div>
            <a href="{{route('about')}}">Giới thiệu</a>
        </div>
    </div>
</div>
<style>
    .navigation-bar a {
        text-decoration: none;
        text-transform: uppercase;
        color: white;
    }

    .navigation-bar > a:hover, .navigation-bar > div:hover, .dropdown > a:hover {
        color: yellow;
    }

    .navigation-bar > a:not(:last-child), .navigation-bar > div, .dropdown > a {
        display: inline-block;
        padding: 15px 18px;
        font-weight: 700;
       /* background: url({{$images->logo or asset('images/space.png')}}) right center no-repeat;*/
        border-right: 1px solid;
        max-height: 42px;
    }

    .navigation-bar > div {
        padding: 0;
    }

    .dropdown-menu {
        background-color: white;
        border-radius: 0px;
    }

    .dropdown-menu a {
        float: none;
        padding: 12px 16px !important;
        display: block;
        text-align: left;
    }

    .dropdown-menu a:hover {
        background-color:yellow !important;
    }
</style>