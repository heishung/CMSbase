@extends('web.layout_main')

        @if (!isset($post))

        @else
            Không có bài viết
        @endif

<style>
    .post-detail p, .post-detail a,
    .post-detail h2, .post-detail h3, .post-detail samp {
        text-align: justify;
        font-family: "Raleway", sans-serif;
        font-size: 14px;
        line-height: 1.6;
        color: #131414;
    }
    .content_post {
        background-color: #fbfbfb;
        padding-right: 5px;
        padding-left: 5px;
    }
    .post-detail {
        overflow: hidden;

    }
    .content-area{
        margin-bottom: 15px;
    }
</style>
<?php $post=\App\Post::where('post_type','delivery')->first() or '' ?>
@section('breadcrumb')
    <span><a href="{{route('home')}}">Home</a><i
                class="separator">|</i><a>{{isset($post->title)?$post->title:''}}</a></span>
@endsection
@section('content')
    <div class="post-detail">
        <div class="row title" style="margin: 0px">
            <h2 style="text-align: center ;font-size: 30px;font-weight: 700;">{{isset($post->title)?$post->title:'Chưa có bài viết'}}</h2>
            {{--<p class="publish-time" style="color: grey!important;">Ngày đăng:{{isset(dateToDDMMYY($post->updated_at))?dateToDDMMYY($post->updated_at):''}}</p>--}}
        </div>

        <div class="row content_post"  style="margin: 0px; margin-top: 30px">
            {!! isset($post->content)?$post->content:'' !!}
        </div>
    </div>
@endsection
@section('right-content')
@endsection