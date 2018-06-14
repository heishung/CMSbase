@extends('admin.layout')
@section('title') Sửa bản tin @endsection
@section('pageContent')
    <div class="col-md-12">
        <form action="{{route('admin.post.edit', ['id' => $post->id])}}" enctype="multipart/form-data" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tiêu đề *</label>
                <input class="form-control" name="title" required value="{{$post->title or ''}}">
            </div>
            <div class="form-group">
                <label>Tóm lược</label>
                <textarea class="form-control" rows="3" name="description">{{$post->description}}</textarea>
            </div>
            <div class="form-group">
                <label>Chi tiết</label>
                <textarea id="editor" name="content" class="form-control ckeditor"
                          required>{{$post->content}}</textarea>
            </div>
            @include('include._input_image', ['title' => 'Ảnh đại diện', 'name'=>'thumbnail', 'require' => true, 'image'=>$post->thumbnail])

            <div class="form-group" style="margin-top: 50px">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('admin.post.list')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    @include('include._ckeditor')
@endsection