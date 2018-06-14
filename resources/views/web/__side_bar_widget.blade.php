<?php $footer = \App\Settings::getSetting('footer'); ?>
<div class="widget widget_nav_menu" id="nav_menu-2">
    <h3 class="widget-title">Danh mục sản phẩm</h3>
    <div class="menu-danh-muc-san-pham-container">
        <ul class="menu" id="menu-danh-muc-san-pham">

            <?php $__currentLoopData = \App\Category::where('status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" >
                <a href="<?php echo e(route('category.list.product',['category' => $category->slug])); ?>"><?php echo e($category->name); ?></a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<div class="widget support-online-widget" id="support_online-2">
    <div class="fb-page" data-href="https://www.facebook.com/tinhdauthiennhiennguyenhong/" data-height="235.76" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tinhdauthiennhiennguyenhong/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tinhdauthiennhiennguyenhong/">Tinh dầu thiên nhiên Nguyên Hồng</a></blockquote></div>
</div>
<div id="fb-root"></div>

<div class="widget rt-widget rt-post-category" id="rt_widget_post-2">
    <h3 class="widget-title">Tin tức</h3><!-- start file -->
    <!-- no slide -->
    <div class="news-widget no-slide">

        @foreach($news as $p)
        <div class="featured-post">
            <div class="align-left"><img style="   object-fit: cover;
    width: 100%;
    height: 70px;" src="{{$p->thumbnail}}"></div><a class="news-title" href="{{route('post.detail', ['slug' => $p->slug])}}">{!! $p->title !!}</a>
        </div>
        @endforeach
    </div><!-- has slide -->
</div>

