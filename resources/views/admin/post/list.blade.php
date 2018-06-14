@extends('admin.layout')
@section('title') Bản Tin @endsection
@section('pageContent')
    <div class="col-lg-12">
        <div class="btn-group pull-right">
            <a href="{{route('admin.post.add')}}" class="btn btn-primary">Thêm bản tin</a>
        </div>
        <table width="100%" class="table table-hover table-bordered" id="tableProduct">
            <thead>
            <tr>
                <th>#</th>
                <th>Tiêu đề</th>
                <th>Ảnh</th>
                <th>Ngày đăng</th>
                <th>Hiển thị</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr class="gradeU">
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td class="center"><img src="{{asset($item->thumbnail)}}" style="height: 50px">
                    </td>
                    <td class="center">{{dateToDDMMYY($item->updated_at)}}</td>
                    <td></td>
                    <td class="center"><a href="{{route('admin.post.edit', ['id' => $item->id])}}"><i
                                    class="fa fa-edit"></i></a></td>
                    <td class="center"><a onclick="return confirm('Bạn có chắc là muốn xóa không')" href="{{route('admin.post.delete', ['id' => $item->id])}}"><i
                                    class="fa fa-trash text-danger"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection