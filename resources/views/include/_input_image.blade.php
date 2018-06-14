
<div class="form-group">
    <?php $name = (isset($name) && $name) ? $name : 'image'; ?>
    <?php $require = isset($require) && $require ?>
    <label>{{$title or 'Image'}} {{$require ? '*': ''}}</label>
    <div class="input-group {{$class or ''}}">
     <span class="input-group-btn">
     <a id="{{$name}}_picker" data-input="{{$name}}" data-preview="{{$name}}_holder" class="btn btn-default"><i
                 class="fa fa-picture-o"></i> Choose</a>
   </span>
        <input multiple {{$require  ? 'required': ''}} id="{{$name}}" class="form-control" type="text"
               name="{{$name}}" value="{{$image or ''}}">
    </div>


    <img id="{{$name}}_holder" style="margin-top:15px;max-height:100px;" src="{{isset($image) ? asset($image) : ''}}">
</div>

<script src="{{asset('/themes/admin/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script>
    var $prefix = '{{asset('/filemanager')}}';
    $('#{{$name}}_picker').filemanager('image', {'prefix': $prefix});
</script>