@extends('admin.layout')
@section('title') Chính sách giao hàng @endsection
@section('pageContent')
    <div class="col-md-12">
        <form action="{{route('admin.post.delivery')}}" enctype="multipart/form-data"
              method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <textarea id="editor" name="content" class="form-control ckeditor" required>
                        {{$post ? $post->content : ''}}</textarea>
            </div>
            <div class="form-group" style="margin-top: 50px">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="" class="btn btn-danger">Cancel</a>
            </div>
        </form>

    </div>
@endsection
@section('scripts')
    @include('include._ckeditor', ['h' => 300])
@endsection