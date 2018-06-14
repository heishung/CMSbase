@extends('admin.layout')
@section('title')Sửa Sản phẩm: <b class="text-danger"> {{$product->name}}</b>@endsection
@section('pageContent')
    <div class="col-md-12">
        <form action="{{route('admin.product.edit', ['id' => $product->id])}}" enctype="multipart/form-data"
              method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên sản phẩm *</label>
                <input class="form-control" name="name" required value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label>Danh mục *</label>

                <select class="form-control" name="category_id"  required>
                    @foreach(\App\Category::where('status', 1)->get() as $category)
                        <option
                                @if($product->category_id==$category->id)
                                        selected
                        @else
                                    @endif
                                value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Mô tả ngắn *</label>
                <textarea class="form-control" rows="3" name="short_desc"
                          required>{{$product->short_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Mô tả đầy đủ</label>
                <textarea id="editor" name="long_desc" class="form-control ckeditor"
                          required>{{$product->long_description}}</textarea>
            </div>
            <?php
            $countimg=count(json_decode($product->images));
            $imgsl=json_decode($product->images);
        /*    dd($imgsl[1])*/
            ?>
            <div class="img-slide-product"><h4>Ảnh slide sản phẩm</h4>
                @include('include._input_image', ['title' => 'Ảnh 1', 'require'=>true, 'name' => 'images1','image'=>$imgsl[0]])
                @include('include._input_image', ['title' => 'ảnh 2', 'require'=>true, 'name' => 'images2','image'=> $imgsl[1]])
                @include('include._input_image', ['title' => 'ảnh 3', 'require'=>true, 'name' => 'images3','image'=> $imgsl[2]])
                @include('include._input_image', ['title' => 'ảnh 4', 'require'=>true, 'name' => 'images4','image'=> $imgsl[3]])
            </div>
            @include('include._input_image', ['title' => 'Ảnh đại diện', 'require'=>true, 'name' => 'image_preview', 'image'=> $product->image_preview])
            <div class="form-group" style="margin-top: 50px">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('admin.product.list')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
@section('css')
    <style>
        .img-slide-product > div{
            width: 40%;
            display: inline-block;
            margin-bottom: 15px;

        }
    </style>
@endsection
@section('scripts')
    @include('include._ckeditor')
@endsection