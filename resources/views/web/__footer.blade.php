<?php $footer = \App\Settings::getSetting('footer'); ?>

<div class="container">
    <div class="footer-row row clear">

        <div class="rt-footer footer-1 widget_wrap col-lg-3 col-md-3 col-sm-8 col-xs-8" id="footer-1">
            <div class="widget widget_nav_menu" id="nav_menu-3">
                <h3 class="widget-title">Giới thiệu</h3>
                <div class="menu-gioi-thieu-container">
                    <ul class="menu" id="menu-gioi-thieu">
                        <li class="menu-item " >
                            <a href="#">Về chúng tôi</a>
                        </li>
                        <li class="menu-item " >
                            <a href="#">Hướng dẫn dịch vụ</a>
                        </li>
                        <li class="menu-item " >
                            <a href="#">Chính sách dịch vụ</a>
                        </li>
                        <li class="menu-item " >
                            <a href="#">Thanh toán</a>
                        </li>
                        <li class="menu-item " >
                            <a href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php $contactInfo = \App\Settings::getSetting('contactInfo');?>
        <div style="display: inline-block" class="rt-footer footer-2 widget_wrap col-lg-5 col-md-5 col-sm-8 col-xs-8" id="footer-2">
            <div class="widget widget_text" id="text-3">
                <h3 class="widget-title">Thông tin liên hệ</h3>
                <div class="textwidget" >
                    <p><i class="fa fa-windows"></i> {{$contactInfo->branch_name or ''}}</p>
                    <p><i class="fa fa-home"></i> Địa chỉ: {{$contactInfo->contact_address or ''}}</p>
                    <p><i class="fa fa-phone"></i> Hotline: {{$contactInfo->contact_hotline or ''}} – Tel: {{$contactInfo->contact_phone or ''}}</p>
                    <p><i class="fa fa-envelope"></i><a href="mailto:{{$contactInfo->contact_email or ''}}" target="_top">Email: {{$contactInfo->contact_email or ''}}</a> </p>
                    <p><i class="fa fa-globe"></i> Fanpage: {{$contactInfo->contact_fanpage or ''}}</p>
                </div>
            </div>
        </div>
        <div class="rt-footer footer-3 widget_wrap col-lg-4 col-md-4 col-sm-8 col-xs-8" id="footer-3">
            <?php $socialInfo = \App\Settings::getSetting('socialInfo');?>
            <div class="widget img-qc" id="imgqc-2">
                <h3 class="widget-title">Liên kết với chúng tôi</h3>

                <div class="fb-page" data-href="https://www.facebook.com/tinhdauthiennhiennguyenhong/" data-height="235.76" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tinhdauthiennhiennguyenhong/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tinhdauthiennhiennguyenhong/">Tinh dầu thiên nhiên Nguyên Hồng</a></blockquote></div>
               {{-- <div class="image-adv">
                    <div class="image-item">
                        <a href="{{$socialInfo->facebook or ''}}" rel="" title=""><img alt="" src="./images/fb.png"></a>
                    </div>
                    <div class="image-item">
                        <a href="{{$socialInfo->google or ''}}" rel="" title=""><img alt="" src="./images/gg.png"></a>
                    </div>
                    <div class="image-item">
                        <a href="{{$socialInfo->youtube or ''}}" rel="" title=""><img alt="" src="./images/yt.png"></a>
                    </div>
                </div>--}}
            </div>
        </div>
       {{-- <div class="rt-footer footer-4 widget_wrap" id="footer-4">
            <div class="widget img-qc" id="imgqc-3">
                <h3 class="widget-title">Bản đồ</h3>
                <div class="image-adv">
                    <div class="image-item">
                        <a href="#" rel="" title=""><img alt="" src="./images/bd.png"></a>
                    </div>
                </div>
            </div>
        </div>--}}
    </div><!-- .bottom-footer -->
    <div class="footer-site-code row clear"></div><!-- .bottom-footer -->
</div>
<div class="coppyright">
{{--
    <div class="container">
        <div class="copyright row clear">
          --}}{{--  <div class="box_copyright col-md-8 col-sm-6">
                <a href="#" rel="nofollow noopener" target="_blank" title="thiet ke website">© 2017 XE ĐIỆN XUÂN VUI . Thiết kế và phát triển bởi RT</a>
            </div>--}}{{--
            <div class="footer_menu_class col-md-4 col-sm-6">
                <ul class="menu" id="menu-menu-footer">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-156" id="menu-item-156">
                        <a href="#">Trang chủ</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158" id="menu-item-158">
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-159" id="menu-item-159">
                        <a href="#">Tin tức</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-157" id="menu-item-157">
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>--}}
</div>