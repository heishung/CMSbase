@extends('admin.layout')
@section('title')Thêm Sản Phẩm @endsection
@section('pageContent')
    <div class="col-md-12 add-product">
        <form action="{{route('admin.product.add')}}" enctype="multipart/form-data" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên sản phẩm *</label>
                <input class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Danh mục *</label>
                <select class="form-control" name="category_id" required>
                    <option disabled selected></option>
                    @foreach(\App\Category::where('status', 1)->get() as $category)
                        @if($category->parent_id)
                            <option value="{{$category->id}}">{{'|-----'.$category->name}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Mô tả ngắn *</label>
                <textarea class="form-control" rows="3" name="short_desc" required></textarea>
            </div>
            <div class="form-group">
                <label>Mô tả đầy đủ</label>
                <textarea id="editor" name="long_desc" class="form-control ckeditor" required>
                        </textarea>
            </div>
            <div class="img-slide-product"><h4>Ảnh slide sản phẩm</h4>
            @include('include._input_image', ['class'=>'class','title' => 'Ảnh 1', 'require'=>true, 'name' => 'images1'])
            @include('include._input_image', ['title' => 'ảnh 2', 'require'=>true, 'name' => 'images2'])
            @include('include._input_image', ['title' => 'ảnh 3', 'require'=>true, 'name' => 'images3'])
            @include('include._input_image', ['title' => 'ảnh 4', 'require'=>true, 'name' => 'images4'])
            </div>
            <div class="clearfix"></div>
            @include('include._input_image', ['title' => 'Ảnh đại diện', 'require'=>true, 'name' => 'image_preview'])
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