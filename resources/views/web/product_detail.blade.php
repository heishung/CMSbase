@extends('web.layout_main', ['title'=> $product->name,
                                'image'=> $product->image_preview])
@section('css')
    <style>
        #product_detail .product_name h1, #product_detail .product_price p {
            color: #cdbd62;
        }

        #product_detail p, #product_detail a, #product_detail span, #product_detail h1, #product_detail h2,
        #product_detail h3, #product_detail span, #product_detail td {
            color: #c4c4a9;
        }

        #product_detail .product_image img {
            width: 100%;
            height: auto;
        }

        #product_detail .product_price {
            padding: 10px 0 10px 0;
        }

        #product_detail .desc {
            text-align: justify;
        }

        .btn-add-to-cart > a {
            color: white !important;
        }
    </style>
@endsection

@section('breadcrumb')
    <span><a href="{{route('home')}}">Home</a><i
                class="separator">|</i><a>{{$product->name}}</a></span>
@endsection

@section('content')
    @if (session('notification'))
        <style>
            #box-notification{
                position: fixed;
                z-index: 1;
                width: 100%;
                height: 100%;
                left: 0px;
                top: 0%;
                padding-top: 15%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.4);
            }
        </style>
            <div class="modal-dialog" id="box-notification">
                <div id="notification" class="modal-content">
                    <span class="dongmodal">&times;</span>
                    <h1  class="modal-title" style="color:#268212">{{session('notification')}}</h1>
                </div>
            </div>


        <script>
            var modalthongbao = document.getElementById('box-notification');
            // Lấy phần span đóng Modal
            var spanthongbao = document.getElementsByClassName("dongmodal")[0];
            // Khi span được click thì đóng Modal
            spanthongbao.onclick = function() {
                modalthongbao.style.display = "none";
            }

            // Khi click ngoài Modal thì đóng Modal
            window.onclick = function(event) {
                if (event.target == modalthongbao) {
                    modalthongbao.style.display = "none";
                }
            }
        </script>
    @endif
    <div class="product" id="product-165">
        <div class="row">
            <div class="col-xs-12">
                <div class="woocommerce-product-gallery " id="thumnail-singer-pr">
                    <figure class="woocommerce-product-gallery__wrapper">
                        <style>
                            /* The Modal (background) */
                            .modal {
                                display: none; /* Hidden by default */
                                position: fixed; /* Stay in place */
                                z-index: 1; /* Sit on top */
                                padding-top: 100px; /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%; /* Full width */
                                height: 100%; /* Full height */
                                overflow: auto; /* Enable scroll if needed */
                                background-color: rgb(0,0,0); /* Fallback color */
                                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                            }

                            /* Modal Content */
                            .modal-content {
                                background-color: #fefefe;
                                margin: auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            /* The Close Button */
                            .close {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close:hover,
                            .close:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                            /* The Close Button */
                            .dongmodal {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .dongmodal:hover,
                            .dongmodal:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                            * {
                                box-sizing: border-box;
                            }

                            img {
                                vertical-align: middle;
                            }

                            /* Position the image container (needed to position the left and right arrows) */
                            .container {
                                position: relative;
                            }

                            /* Hide the images by default */
                            .mySlides {
                                display: none;
                            }

                            /* Add a pointer when hovering over the thumbnail images */
                            .cursor {
                                cursor: pointer;
                            }

                            /* Next & previous buttons */
                            .prev,
                            .next {
                                cursor: pointer;
                                position: absolute;
                                top: 40%;
                                width: auto;
                                padding: 16px;
                                margin-top: -50px;
                                color: white;
                                font-weight: bold;
                                font-size: 20px;
                                border-radius: 0 3px 3px 0;
                                user-select: none;
                                -webkit-user-select: none;
                            }

                            /* Position the "next button" to the right */
                            .next {
                                right: 0;
                                border-radius: 3px 0 0 3px;
                            }

                            /* On hover, add a black background color with a little bit see-through */
                            .prev:hover,
                            .next:hover {
                                background-color: rgba(0, 0, 0, 0.8);
                            }

                            /* Number text (1/3 etc) */
                            .numbertext {
                                color: #f2f2f2;
                                font-size: 12px;
                                padding: 8px 12px;
                                position: absolute;
                                top: 0;
                            }

                            /* Container for image text */
                            .caption-container {
                                text-align: center;
                                background-color: #222;
                                padding: 2px 16px;
                                color: white;
                            }

                            .row:after {
                                content: "";
                                display: table;
                                clear: both;
                            }

                            /* Six columns side by side */
                            .column {
                                float: left;
                                width: 16.66%;
                            }

                            /* Add a transparency effect for thumnbail images */
                            .demo {
                                opacity: 0.6;
                            }

                            .active,
                            .demo:hover {
                                opacity: 1;
                            }
                        </style>

                        <div class="container-pr">
                           <?php
                            $countimg=count(json_decode($product->images));
                                $bimgsl=json_decode($product->images);
                            ?>
                                @for ($sl=0;$sl<$countimg;$sl++)
                            <div class="mySlides">
                                <div class="numbertext">
                                    @if($sl==0)
                                        1
                                    @elseif($sl==1)
                                        2
                                    @elseif($sl==2)
                                        3
                                    @elseif($sl==3)
                                        4
                                    @endif
                                   / {!! $countimg !!}</div>
                                <img  src="{!! $bimgsl[$sl]!!}" style="width:100%;height: 320px;object-fit: cover;">
                            </div>
                               @endfor
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" style="right: 57%" onclick="plusSlides(1)">❯</a>
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>

                            <div class="row box-small-img">
                                @if(isset($bimgsl))
                                    @foreach($bimgsl as $key=>$value)
                                <div class="small-img-product col-lg-3 col-md-3 col-xs-3 col-sm-3" >
                                    {{--@for($i=0;$i<$countimg;$i++)--}}
                                    <img style="max-height: 80px;width: 100%;object-fit: cover;" class="demo cursor small-img-pr" src="{!! $value or ''!!}" style="width:100%"
                                         onclick="currentSlide(
                                        @if($key==0)
                                                 1
                                         @elseif($key==1)
                                                 2
                                         @elseif($key==2)
                                                 3
                                         @elseif($key==3)
                                                 0
                                         @endif
                                             )" alt="">
                                   {{-- @endfor--}}
                                </div>
                                    @endforeach

                                @else
                                    <div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                                        <img style="opacity: 1;margin-top: 56px;  " class="demo cursor small-img-pr" src="{{asset($product->image_preview)}}" style="width:100%" onclick="currentSlide(1)">
                                    </div>
                                    @endif
                            </div>
                        </div>

                        <script>
                            var slideIndex = 1;
                            showSlides(slideIndex);

                            function plusSlides(n) {
                                showSlides(slideIndex += n);
                            }

                            function currentSlide(n) {
                                showSlides(slideIndex = n);
                            }

                            function showSlides(n) {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("demo");
                                var captionText = document.getElementById("caption");
                                if (n > slides.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = slides.length}
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex-1].style.display = "block";
                                dots[slideIndex-1].className += " active";
                                captionText.innerHTML = dots[slideIndex-1].alt;
                            }
                        </script>
                    </figure>
                </div>
                <div class="rt-summary entry-summary" id="detail-singer-pr">
                    <h1 class="product_title entry-title">{{$product->name}}</h1>
                    <div class="rt_woocommerce_single_product_summary clearfix">
                       {{-- <div class="">
                            <p class="price"><span class="rt_price_text">Giá bán:</span> --}}{{--<span class="rt_single_regular_price">4.500.000đ</span>--}}{{-- <span class="rt_single_sale_price">{{$product->priceText()}}</span></p><!-- <div class="info_products clearfix">
        </div> -->
                        </div>--}}
                    </div>
                    <div class="psupport"></div>
                    <ul class="attribute-single number-one">
                        <li class="left">
                            {{$product->short_description}}
                        </li>

                    </ul>


                    <div class="row product_price" style="padding-right: 0px">
                     {{--   {{dd($categorys->slug)}}--}}
                        <form action="{{route('checkout',['category'=>$product->category->slug,'slug'=>$product->slug])}}" enctype="multipart/form-data" id="form-book" method="POST">
                           {{-- <input type="hidden" name="token" value="{!! csrf_token() !!}">--}}
                            {{csrf_field()}}

                        <div class="col-xs-12">
                            <p class="total_price" style="font-size: 26px">{{$product->priceText()}}</p>

                                {{--modal--}}
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content" style="width: 40%">

                                        <span class="close">&times;</span>
                                        <h2 style="text-align: center">Phiếu đặt hàng</h2>
                                            <input type="number" hidden name="id_product" value="{{$product->id}}">
                                            <input type="text" hidden name="data[product]" value="{{$product->name}}">
                                        <div class="form-group">
                                            <label for="name-product-form">Tên sản phẩm:</label>
                                            <div  type="text" name="data[tensanpham]" disabled {{--value="{{$product->name}}"--}} class="form-control" id="name-product-form">
                                                <p>{{$product->name}}&nbsp;</p>
                                                &nbsp;<p class="quantity" ></p>
                                                <p class="namedt" ></p>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="bill">Giá thanh toán:</label>
                                            <p class="total_price" value="{{$product->priceText()}}" style="font-size: 26px">{{$product->priceText()}}</p>
                                            <input hidden class="total_price_input" type="text" value="" name="data[giathanhtoan]">
                                            {{-- <input disabled type="text" class="total_price form-control" value="{{$product->priceText()}}" id="bill">--}}
                                        </div>
                                        <input type="number" name="data[tinhtrangdonhang]" value="0" hidden>
                                        <div class="form-group">
                                            <label for="name-product-form">Họ và tên khách hàng:</label>
                                            <input type="text" value="" name="name" class="form-control" id="name-product-form">
                                        </div>
                                            <div class="form-group">
                                                <label for="address-form-book">Địa chỉ:</label>
                                                <input type="text" placeholder="Bắt buộc" name="address" class="form-control" id="address-form-book">
                                                @if ($errors->any())
                                                    <span class="help-block" >
                                                            {{$errors->first('address')}}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email address:</label>
                                                <input type="email" name="email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="content-form-book">Số điện thoại:</label>
                                                <input required type="number" placeholder="Bắt buộc" name="phone" class="numb form-control" id="content-form-book">
                                                @if ($errors->any())
                                                    <span class="help-block" >
                                                            {{$errors->first('phone')}}
                                                    </span>
                                                @endif

                                            </div>

                                        <div class="form-group">
                                        {{--<a target="_blank" href="{{route('delivery')}}">chính sách bảo hành</a>--}}
                                        </div>
                                            {{--<div class="checkbox">
                                                <label><input type="checkbox"> Remember me</label>
                                            </div>--}}
                                        <input hidden type="text" name="data[slugproduct]" value="{{$product->slug}}">
                                        <input hidden type="text" name="data[slugcat]" value="{{$product->category->slug}}">

                                            <button type="submit" class="btn btn-default">Gửi</button>

                                    </div>



                                </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4" style="padding-left: 0px">
                                <select name="data[dungtich]" onchange="selectVolume(this)" class="form-control" id="select_volume">
                                    <option disabled="">Dung tích</option>
                                    @foreach($product->packages as $p)

                                        <option data-id="{{$p->id}}"
                                                data-price="{{$p->price}}"
                                                data-priceUnit="{{$p->price_unit}}"
                                                data-namedt="{{$p->name}}"
                                        >{{$p->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-3" style="padding-left: 0px">
                                <select name="data[soluong]" onchange="selectQuantity(this)" class="form-control"
                                        id="select_quantity">
                                    <option disabled="">Số lượng</option>
                                    @for($i = 1; $i <= 10; $i++)
                                        <option data-quantity="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-xs-5 btn-add-to-cart" style="padding-left: 0px; padding-right: 0px">


                                <a id="myBtn" class="btn btn-success text-uppercase" style="width: 100%"><i
                                            class="glyphicon glyphicon-shopping-cart fa-lg"></i> Đặt hàng</a>
                            </div>
                        </div>
                        </form>


                    </div>

                </div>
            </div><!-- .col-xs-12 -->
        </div>
    </div><!-- .summary -->
    <div class="post-165 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-xe-may-dien-fuji-m33s product_cat-xe-may-dien-giant product_cat-xe-may-dien-gogopro product_cat-xe-may-dien-vespa product_cat-xe-may-dien-xmen instock sale shipping-taxable purchasable product-type-simple">
        <div class="woocommerce-tabs wc-tabs-wrapper">
            <ul class="rt_woocommerce_tabs wc-tabs list-unstyled clearfix" role="tablist">
                <li aria-controls="tab-description" class="description_tab active" id="tab-title-description" role="tab">
                    <a href="#tab-description">Mô tả sản phẩm</a>
                </li>
            </ul>
            <div aria-labelledby="tab-title-description"  id="tab-description" role="tabpanel" style="display: block;">
                {!! $product->long_description !!}
                <div class="rt-social">
                    <a class="rt-link rt-facebook" href="#" target="_blank">Facebook</a>
                    <a class="rt-link rt-twitter" href="#" target="_blank">Twitter</a>
                    <a class="rt-link rt-googleplus" href="#" target="_blank">Google+</a>
                    <a class="rt-link rt-pinterest" data-pin-custom="true" href="#" target="_blank">Pin It</a>
                </div>
            </div>
        </div>
        <div class="related">
            <h3 class="heading">Sản phẩm liên quan</h3>
            <ul class="list-unstyled woocommerce row">
                @foreach($productrlt as $prlt)
                <li class="col-lg-4 lg-3-cl col-md-4 md-3-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl product type-product status-publish has-post-thumbnail  instock sale shipping-taxable purchasable product-type-simple">
                    <div class="product_item">
                        <a class="rt-tooltip" data-tooltip="{image: {{asset($prlt->image_preview)}}}" href="{{route('product.detail',['category' => $prlt->category->slug, 'slug'=>$prlt->slug])}}">
                            <div class="rt-thumb"><img alt="2-2" class="attachment-500x500 size-500x500 wp-post-image" height="500" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" src="{{asset($prlt->image_preview)}}" srcset="{{asset($prlt->image_preview)}} 502w, {{asset($prlt->image_preview)}} 150w, {{asset($prlt->image_preview)}} 300w, {{asset($prlt->image_preview)}} 180w" width="500"></div></a>
                        <h2 class="rt_woocommerce-loop-product__title"><a href="{{route('product.detail',['category' => $prlt->category->slug, 'slug'=>$prlt->slug])}}">{{$prlt->name}}</a></h2><span class="price"><span class="regular-price">{{str_limit($prlt->short_description,'40')}}</span> {{--<span class="sale-price">3.900.000đ</span></span>--}}

                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
@endsection

<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=509371076093435';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

@section('js')
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(window).on('load', (function () {
                if ($('.content_menu').length > 0) {
                    var _top = 200;
                    $(window).scroll(function () {
                        var _y = $(this).scrollTop();
                        if (_y > _top) {
                            $('.content_menu').addClass('fixed');
                        } else {
                            $('.content_menu').removeClass('fixed');

                        }
                    })
                }
            }));
        });
    </script>
    <script src="{{asset('libs/common.js')}}"></script>

    <script>
        function selectVolume(el) {
            updatePrice()
        }
        function selectQuantity(el) {
            updatePrice()
        }
        function updatePrice() {
            var price = $('#select_volume :selected').data('price');
            var namedt = $('#select_volume :selected').data('namedt');
            var quantity = $('#select_quantity :selected').data('quantity');
            var totalPrice = price * quantity;
            $('.total_price').text(totalPrice.formatMoney(0, ',', '.') + 'đ');
            $('.total_price_input').val(totalPrice.formatMoney(0, ',', '.') + 'đ');
            $('.quantity').text(quantity);
            $('.namedt').text(namedt);

        }

       updatePrice();

    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script src="{{asset('tinhdau/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('tinhdau/js/jquery.validate.min.js')}}"></script>
    <script>
        $(document).ready(function() {

            //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
            $("#form-book").validate({
                rules: {
                    address: {
                        required: true,
                        minlength: 5
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 13,
                    },
                    email:{
                        email: true
                    }
                },
                messages: {
                    address: {
                        required: "Vui lòng nhập địa chỉ",
                        minlength: "Địa chỉ quá ngắn"
                    },
                    phone: {
                        required: "Vui lòng nhập đúng số điện thoại",
                        minlength: "Số điện thoại quá ngắn",
                        maxlength: "Số điện thoại quá dài"
                    }
                }
            });
        });
    </script>
@endsection
