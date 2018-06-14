<?php $required = (!(isset($image) && $image) && (isset($required) && $required)) ? 'required' : '' ?>
<div class="form-group">
    <label>{{$title or __('Logo')}} <span class="text-required"> {{$required ? '*' : ''}}</span></label>
    <div class="row mb20">
        <div class="col-sm-3">
            <input type="file" onchange="readURL(this)" name="{{$name or 'image'}}" accept=".jpg, .png, .jpeg, images/*"
                    {{$required}}>
        </div>
    </div>
    <div style="width: {{isset($width) ? $width : '100'}}px; height: 100px; border: 1px solid lightgrey">
        <img class="pick-image-viewer" src="{{isset($image) ? asset($image) : ''}}"
             style="width: 100%; height: auto; max-height: 100%;">
    </div>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.pick-image-viewer')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>