@extends('web.layout_tinh_dau')
@section('content')
    <div class="container-fluid " id="massage">
        @include('web.header')
        <div class="container content">
            <div class="row" style="padding-top: 10px">
                <p style="font-size: 13px"> Trang chủ >>Sản phẩm >> Tinh dầu nguyên chất>> tinh dầu quế</p>
            </div>
            <div class="row">
                <div class="  col-md-2 menu">
                    <div class="row kind ">
                        <div class="col-md-12 all">
                            <a id="1" href="#"><span>Tất cả sẩn phẩm</span></a>
                        </div>
                        <div class="col-md-12 all">
                            <a id="2" href="#"><span>Tinh dầu nguyên chất</span></a>
                        </div>
                        <div class="col-md-12 all">
                            <a id="3" href="#"><span>đèn xông tinh dầu</span></a>
                        </div>
                        <div class="col-md-12 all">
                            <a id="4" href="#"><span>Tất cả sẩn phẩm</span></a>
                        </div>
                        <div class="col-md-12 all">
                            <a id="5" href="#"><span>Tất cả sẩn phẩm</span></a>
                        </div>
                    </div>
                    <div class="row detail_dau_masage" style="display: none">
                        <form>
                            <input id="one" type="checkbox" name=""><label for="one">Dầu massage mặt</label><br/>
                            <input id="two" type="checkbox" name=""><label for="two">Dầu massage mặt</label><br/>
                            <input id="three" type="checkbox" name=""><label for="three">Dầu massage mặt</label><br/>
                            <input id="four" type="checkbox" name=""><label for="four">Dầu massage mặt</label><br/>
                        </form>
                    </div>
                    <div class="row detail_dau_nguyenchat" style="display: none">
                        <form>
                            @foreach($name as $prd)
                                <a href="{{route('kind.product', ['id' => $prd->id])}}"><input id="{{$prd->id}}"
                                                                                               type="checkbox"> <label
                                            for="{{$prd->id}}">{{$prd->name}}</label></a><br>
                            @endforeach
                        </form>
                    </div>
                    <div class="row detail_den" style="display: none">
                        <form>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                        </form>
                    </div>
                    <div class="row detail_dau_treoxe" style="display: none">
                        <form>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                            <input type="checkbox" name="">Dầu massage mặt<br/>
                        </form>
                    </div>
                    <div class="row detail_vol" style="display: none">
                        <form>
                            <input type="checkbox" name="">Lọ 50ml<br/>
                            <input type="checkbox" name="">Lọ 100ml<br/>
                            <input type="checkbox" name="">Lọ 150ml<br/>
                            <input type="checkbox" name="">Lọ 200ml<br/>
                        </form>
                    </div>
                    <div class="row baner"></div>
                </div>
                <div class=" col-md-9 content">
                    <div>
                        <div class="row name">
                            <div class="col-md-12">
                                <h2> Tinh dầu nguyên chất</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row highlight">
                        <div class="col-md-12">
                            <div class="row highlight_product">
                                @foreach($prices as $price)
                                    @foreach($images as $image)
                                        <div class="col-md-3"><img src="{{$image->imagePreview}}" style="width: 100%">
                                            @endforeach
                                            <div style="background-color: beige ;color: black; line-height: 1.5;text-align: center">
                                                <label>{{$ten->name}} </label><br/>
                                                <span style="color: red">{{$price->price}}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="col-md-3"><img src="{{asset('images/dauque.jpg')}}" style="width: 100%">
                                         <div style="background-color: beige ;color: black; line-height: 1.5;text-align: center">
                                             <label> Tinh dầu quế -10ml</label><br/>
                                             <span style="color: red">50 000VNĐ</span>
                                         </div>
                                     </div>
                                     <div class="col-md-3"><img src="{{asset('images/dauque.jpg')}}" style="width: 100%">
                                         <div style="background-color: beige ;color: black; line-height: 1.5;text-align: center">
                                             <label> Tinh dầu quế -10ml</label><br/>
                                             <span style="color: red">50 000VNĐ</span>
                                         </div>
                                     </div>
                                     <div class="col-md-3"><img src="{{asset('images/dauque.jpg')}}" style="width: 100%">
                                         <div style="background-color: beige ;color: black; line-height: 1.5;text-align: center">
                                             <label> Tinh dầu quế -10ml</label><br/>
                                             <span style="color: red">50 000VNĐ</span>
                                         </div>
                                     </div>--}}
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 50px">
                        <img src="{{asset('images/bgrtinhdau.jpg')}}" style="width: 100%">
                    </div>


                </div>
            </div>

        </div>
        @include('web.footer')
    </div>
    {{--<script>
        $(document).ready(function () {
            $('a').click(function () {
                $('.all').removeClass('kind_color');
                $('.all').addClass('kind_color');

            })

        })
    </script>--}}
@endsection()