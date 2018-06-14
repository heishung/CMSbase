@extends('web.layout_main', ['title' => $post->title,
                                'image' => $post->thumbnail])
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
    .headingpost {
        background-color: #268212;
        color: white;
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 400;
        padding: 11.5px;
        border-radius: 5px 5px 0 0;
        text-align: left;
        margin-top: 0;
    }
</style>
@section('breadcrumb')
    <span><a href="{{route('home')}}">Home</a><i
                class="separator">|</i><a>{{$post->title}}</a></span>
@endsection
@section('content')
    <div class="post-detail">
        <div class="row title" style="margin: 0px">
            <h2 class="headingpost" style="color: white ;font-size: 16px">{{$post->title}}</h2>
            <p class="publish-time" style="color: grey!important;">Ngày đăng:{{dateToDDMMYY($post->updated_at)}}</p>
        </div>

        <div class="row content_post"  style="margin: 0px; margin-top: 30px">
            {!! $post->content !!}
        </div>
    </div>
@endsection
@section('right-content')
@endsection