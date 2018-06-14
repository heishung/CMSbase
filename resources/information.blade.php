@extends('admin.layout')
@section('title') Cài Đặt Trang Web @endsection
@section('pageContent')
    <div class="col-md-12">
        {{--<div class="panel-heading"> Thông tin liên hệ</div>--}}
        <ul class="nav nav-tabs">
            <li class="active"><a href="#contact" data-toggle="tab" aria-expanded="false">Thông tin liên hệ</a></li>
            <li><a href="#bank_info" data-toggle="tab" aria-expanded="false">Thông tin chuyển khoản</a></li>
            <li><a href="#social_info" data-toggle="tab" aria-expanded="false">Mạng xã hội</a></li>
            <li><a href="#footer" data-toggle="tab" aria-expanded="false">Footer</a></li>
            <li><a href="#website" data-toggle="tab" aria-expanded="false">Logo</a></li>
            <li><a href="#banner" data-toggle="tab" aria-expanded="false">Banner</a></li>
            <li><a href="#slide" data-toggle="tab" aria-expanded="false">Slide</a></li>
            <li><a href="#seo" data-toggle="tab" aria-expanded="false">SEO</a></li>
            <li><a href="#script" data-toggle="tab" aria-expanded="false">Scripts</a></li>
        </ul>
        <div class="tab-content" style="margin-top: 20px">
            <div class="tab-pane" id="footer">
                <?php $footer = \App\Settings::getSetting('footer');?>
                <form class="col-md-12" action="{{route('admin.settings.info', ['key' => 'footer'])}}"
                      enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="footer_content" class="ckeditor">{{$footer->footer_content or ''}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-group" style="margin-top: 50px">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane active" id="contact">
                <?php $contactInfo = \App\Settings::getSetting('contactInfo');?>
                <form class="col-md-6" action="{{route('admin.settings.info', ['key' => 'contactInfo'])}} "
                      enctype="multipart/form-data"
                      method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Tên thương hiệu</label>
                        <input class="form-control" name="branch_name"
                               value="{{$contactInfo->branch_name or ''}}">
                    </div>
                    <div class="form-group">
                        <label>Tên công ty</label>
                        <input class="form-control" name="contact_name"
                               value="{{$contactInfo->contact_name or ''}}">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="contact_address"
                               value="{{$contactInfo->contact_address or ''}}">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="contact_phone"
                               value="{{$contactInfo->contact_phone or ''}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="contact_email"
                               value="{{$contactInfo->contact_email or ''}}">
                    </div>
                    <div class="form-group">
                        <label>Hotline</label>
                        <input class="form-control" name="contact_hotline"
                               value="{{$contactInfo->contact_hotline or ''}}">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input class="form-control" name="contact_fanpage"
                               value="{{$contactInfo->contact_fanpage or ''}}">
                    </div>
                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="bank_info">
                <?php $bankInfo = \App\Settings::getSetting('bankInfo');?>
                <form class="col-md-6" action="{{route('admin.settings.info', ['key' => 'bankInfo'])}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Tên Ngân Hàng *</label>
                        <input value="{{$bankInfo->bank_name or ''}}" class="form-control" type="text" name="bank_name"
                               required>
                    </div>
                    <div class="form-group">
                        <label>Số Tài Khoản *</label>
                        <input value="{{$bankInfo->bank_account_number or ''}}" class="form-control" type="text"
                               name="bank_account_number" required>
                    </div>
                    <div class="form-group">
                        <label>Chủ Tài Khoản *</label>
                        <input value="{{$bankInfo->bank_account_name or ''}}" class="form-control" type="text"
                               name="bank_account_name" required>
                    </div>
                    <div class="form-group">
                        <label>Chi Nhánh</label>
                        <input value="{{$bankInfo->bank_account_branch or ''}}" class="form-control" type="text"
                               name="bank_account_branch">
                    </div>

                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="social_info">
                <?php $socialInfo = \App\Settings::getSetting('socialInfo');?>
                <form class="col-md-6" action="{{route('admin.settings.info', ['key' => 'socialInfo'])}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Facebook</label>
                        <input value="{{$socialInfo->facebook or ''}}" class="form-control" type="text" name="facebook">
                    </div>
                    <div class="form-group">
                        <label>Google+</label>
                        <input value="{{$socialInfo->google or ''}}" class="form-control" type="text" name="google">
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        <input value="{{$socialInfo->youtube or ''}}" class="form-control" type="text" name="youtube">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input value="{{$socialInfo->twitter or ''}}" class="form-control" type="text" name="twitter">
                    </div>

                    <div class="form-group">
                        <label>Linkedin</label>
                        <input value="{{$socialInfo->linkedin or ''}}" class="form-control" type="text" name="linkedin">
                    </div>

                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="website">
                <?php $images = \App\Settings::getSetting('images');?>
                <form class="col-md-6" action="{{route('admin.settings.info', ['key' => 'images'])}}" method="POST">
                    {{csrf_field()}}
                    @include('include._input_image', ['title' => 'Logo', 'name' => 'logo', 'image'=> isset($images->logo)? $images->logo : ''])
                    @include('include._input_image', ['title' => 'Favicon ', 'name' => 'favicon', 'image' => isset($images->favicon) ? $images->favicon : ''])

                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>

            {{--<dropzone>--}}
            <div class="tab-pane" class="dropzone needsclick dz-clickable" id="slide">
                <?php $slide = \App\Settings::getSetting('slide');?>
                <form class="col-md-6" action="{{route('admin.slide.upload', ['key' => 'slide'])}}" enctype="multipart/form-data" method="post" >
                    {{csrf_field()}}
                    @include('include._input_image', ['title' => 'images 1', 'name' => 'images1', 'image'=> isset($slide->images1)? $slide->images1 : ''])
                    @include('include._input_image', ['title' => 'images 2', 'name' => 'images2', 'image'=> isset($slide->images2)? $slide->images2 : ''])
                    @include('include._input_image', ['title' => 'images 3', 'name' => 'images3', 'image'=> isset($slide->images3)? $slide->images3 : ''])

                    <div class="form-group" style="margin-top: 50px">
                   {{-- <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>--}}
                    <button type="submit" class="btn btn-default"> Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
                </form>
            </div>
            {{--</dropzone>--}}


            <div class="tab-pane" id="banner">
                <?php $banners = \App\Settings::getSetting('banners');?>
                <form class="col-md-6" action="{{route('admin.settings.info', ['key' => 'banners'])}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" value="{{$banners->banner_title or ''}}" name="banner_title"
                               type="text">
                    </div>
                    @include('include._input_image', ['title' => 'Banner', 'name' => 'banner_image', 'image'=> isset($banners->banner)? $banners->banner : ''])
                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="seo">
                <?php $metaData = \App\Settings::getSetting('meta_data');?>
                <form class="col-md-6" action="{{route('admin.settings.info', ['key' => 'meta_data'])}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input value="{{$metaData->meta_title or ''}}" class="form-control" type="text"
                               name="meta_title">
                    </div>
                    <div class="form-group">
                        <label>Meta keywords</label>
                        <input value="{{$metaData->meta_keywords or ''}}" class="form-control" type="text"
                               name="meta_keywords">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input value="{{$metaData->meta_desc or ''}}" class="form-control" type="text"
                               name="meta_desc">
                    </div>
                    @include('include._input_image', ['title' => 'Meta Image', 'name' => 'meta_img', 'image' => isset($metaData->meta_img) ? $metaData->meta_img : ''])

                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="script">
                <?php $script = \App\Settings::getSetting('script');?>
                <form class="col-md-6" action="{{route('admin.settings.info', ['key' => 'script'])}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Header</label>
                        <textarea class="form-control" rows="10"
                                  name="header">{{$script->header or ''}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control" rows="10"
                                  name="body">{{$script->body or ''}}</textarea>
                    </div>

                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript:window.location.reload();" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{!! asset('css/dropzone.css') !!}">
    @endsection
@section('scripts')
    @include('include._ckeditor')
    <script src="{!! asset('js/dropzone.js') !!}"></script>

@endsection