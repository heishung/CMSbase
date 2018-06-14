@extends('web.layout_base')
@section('content')

    <main class="site-main" id="main" role="main">
        <!-- MetaSlider -->
        @if(isset($slide))
            <?php $slide = \App\Settings::getSetting('slide');
            ?>
            @if($slide->images1==null&&$slide->images2==null&&$slide->images3==null)
            @else

                <div class="slider">
                    @foreach($slide as $key=>$value)
                        {{--  {{dd($slide)}}--}}
                        @if($slide->$key == null )
                        @else
                            @if($slide->$key=='slide')
                            @else
                                <div><img alt="" src="{{$slide->$key or ''}}"></div>
                            @endif
                        @endif

                    @endforeach
                </div>
        @endif
    @else

    @endif


    <!--// MetaSlider-->

        <div class="page_home clear"></div>

            <div class="product_home clear">

                {{--{{dd($category->name)}}--}}
                    <div class="product_list clear">
                        <h2 class="heading">{!! $category->name or "Sản Phẩm" !!}</h2>
                        <div class="home-product row">
                            <ul class="woocommerce product_style_1">

                                @foreach($products as $product)
                                    <li class="col-lg-4 col-md-4  col-sm-4 col-xs-6 product type-product">
                                        <div class="product_item">
                                            <a class="rt-tooltip" data-tooltip="{image: {{asset($product->image_preview)}}}" href="{{route('product.detail',['category' => $product->category->slug, 'slug'=>$product->slug])}}">
                                                <div class="rt-thumb"><img alt="2-2" class="attachment-500x500 size-500x500 wp-post-image" height="500" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" src="{{asset($product->image_preview)}}" srcset="{{asset($product->image_preview)}} 502w, {{asset($product->image_preview)}} 150w, {{asset($product->image_preview)}} 300w, {{asset($product->image_preview)}} 180w" width="500"></div></a>
                                            <h2 class="rt_woocommerce-loop-product__title"><a href="{{route('product.detail',['category' => $product->category->slug, 'slug'=>$product->slug])}}">{!! $product -> name!!}</a></h2><span class="price">

                                                <span class="regular-price" style="text-decoration: none">
                                                    @foreach($product->packages as $package)
                                                        <p >{{$package->name . ' - ' . productPrice($package->price, $package->price_unit)}}</p>
                                                    @endforeach</span> <span class="sale-price">3.900.000đ</span></span>

                                        </div>
                                    </li>
                                @endforeach



                            </ul>
                        </div>
                    </div>


            </div>
        <div class="clear"></div><!-- End Product -->
        <!-- End News -->
    </main>
@endsection