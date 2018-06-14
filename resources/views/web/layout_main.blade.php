@extends('web.layout_base')
@section('content')
    <div class="container">
        <div class="row breadcrumb">
            <div class="col-xs-12">
                @yield('breadcrumb')
            </div>
        </div>
        <div class="row">

            <div class="col-md-3 col-md-offset-1">
                @yield('right-content')
            </div>
            <div class="col-md-8">
                @yield('left-content')
            </div>
        </div>
    </div>
    <style>
        .breadcrumb {
            padding-left: 0px;
            background: none;
            padding-bottom: 20px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #706f5f;
        }

        .breadcrumb .separator {
            margin-left: 10px;
            margin-right: 10px;
            color: #706f5f;
        }
    </style>
@endsection
