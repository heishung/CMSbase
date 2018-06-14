@extends('web.layout_main')
@section('breadcrumb')
    <span><a href="{{route('home')}}">Home</a>
        <span> class="separator">|</span>
        <a href="{{route('product.detail', [$product->slug])}}">{{$product->name}}</a>
        <span> class="separator">|</span>
        <a>Đặt hàng</a>
    </span>
@endsection
@section('left-content')
    <div class="row">
        
    </div>
@endsection
@section('right-content')