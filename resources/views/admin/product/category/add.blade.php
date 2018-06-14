@extends('admin.layout')
@section('title')Thêm Danh Mục @endsection
@section('pageContent')
    <div class="col-md-6">
        <form action="{{route('admin.product.category.add')}}" enctype="multipart/form-data" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên Danh Mục *</label>
                <input class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Danh mục cha</label>
                <div class="form-group">
                    <select id="select5" class="form-control" style="width: 70%"
                            data-placeholder="Choose Parent Category" name="parent_id">
                        <option value="{{0}}">[Root]</option>
                        @foreach(\App\Category::all() as $category)
                            @if($category->parentId)
                                <option value="{{$category->id}}">|---{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
            <div class="form-group" style="margin-top: 50px">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('admin.product.category.list')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    @include('include._ckeditor')
@endsection