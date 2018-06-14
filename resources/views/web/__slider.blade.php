<?php $images = \App\Settings::getSetting('images'); ?>
<div class="test">

    <img src="{{$images->logo or asset('images/slider.jpg')}}" alt="">
</div>

