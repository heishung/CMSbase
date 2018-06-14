@extends('web.layout_main')
<style>
    .about-content p, .about-content a, .about-content h1,
    .about-content h2, .about-content h3, .about-content samp {
        color: black !important;
        text-align: justify;
    }

    .about-content {
        overflow: hidden;
    }
</style>
@section('breadcrumb')
    <span><a href="{{route('home')}}">Home</a><i
                class="separator">|</i><a>Giới thiệu</a></span>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12 about-content">
            <?php $post = \App\Post::where('post_type', 'about')->first()?>
            @if(isset($post))
                {!! $post->content or '' !!}
                @else
            @endif
        </div>
    </div>
@endsection
{{--
@section('right-content')
@endsection--}}
