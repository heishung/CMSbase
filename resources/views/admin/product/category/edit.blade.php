@extends('admin.layout')
@section('title')Thêm Danh Mục @endsection
@section('pageContent')
    <div class="col-md-6">
        <form action="{{route('admin.product.category.edit', ['id' =>$item->id])}}" enctype="multipart/form-data"
              method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên Danh Mục *</label>
                <input class="form-control" name="name" required value="{{$item->name}}">
            </div>
            <div class="form-group">
                <label>Danh mục cha</label>
                <div class="form-group">
                    <select id="select5" class="form-control" style="width: 70%"
                            data-placeholder="Choose Parent Category" name="parent_id">
                        <option value="{{0}}">[Root]</option>
                        @foreach(\App\Category::where('parent_id', '>=', 0)->get() as $category)
                            @if($category->id == $item->id)
                                @continue
                            @endif
                            @if($category->parentId)
                                <option {{$item->id == $category->id  ? 'selected' : ''}} value="{{$category->id}}">
                                    |---{{$category->name}}</option>
                            @else
                                <option {{$item->id == $category->id  ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea id="editor" name="long_desc" class="form-control ckeditor"
                          required>{{$item->desc}}</textarea>
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