<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $contactInfo = \App\Settings::getSetting('contactInfo');?>
    <?php $images = \App\Settings::getSetting('images');?>
    <?php $metaData = \App\Settings::getSetting('meta_data');?>
    <?php $script = \App\Settings::getSetting('script');?>

    <?php
    $metaTitle = isset($metaData->meta_title) && $metaData->meta_title ? $metaData->meta_title : '';
    $metaDesc = isset($metaData->meta_desc) && $metaData->meta_desc ? $metaData->meta_desc : '';
    $metaKeywords = isset($metaData->meta_keywords) && $metaData->meta_keywords ? $metaData->meta_keywords : '';
    $metaImage = isset($metaData->meta_img) && $metaData->meta_img ? $metaData->meta_img : asset('');
    ?>
    {{--<meta name="robots" content="noodp,index,follow" />--}}
    <title>{{$metaTitle}}</title>
    <meta name="description" content="{{$metaDesc}}" />
    <meta name="keywords" content="{{$metaKeywords}}" />
    <link href="{{asset('')}}{{$metaImage}}" rel="shortcut icon" type="image/x-icon" />
    <meta name="author" content="MaketC" />
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('js/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body style=" position: relative;" data-spy="scroll" data-target="#navbar-example">

<div class="wraper">
    <header>
        @include('devsoft.__header')
    </header>
    <article >
            @yield('content')
    </article>
    <footer>
        @include('devsoft.__footer')
    </footer>

    <script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
    <script>
        $('body').scrollspy({ target: '#navbar-example' })
        $('[data-spy="scroll"]').each(function () {
            var $spy = $(this).scrollspy('refresh')
        })
    </script>

</div>

</body>
</html>