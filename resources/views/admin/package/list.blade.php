@extends('admin.layout')
@section('title') Quy cách đóng gói @endsection
@section('pageContent')
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm Quy Cách
            </div>
            <div class="panel-body">
                <form action="{{route('admin.package.add')}}" enctype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Dung Tích *</label>
                        <input class="form-control" name="volume" required placeholder="100">
                    </div>
                    <div class="form-group">
                        <label>Đơn Vị *</label>
                        <select class="form-control" rows="3" name="unit" required>
                            <option value="ml-ml" selected>ml</option>
                            <option value="l-lit">lit</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top: 50px">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <table width="100%" class="table table-hover table-bordered" id="tableProduct">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr class="gradeU">
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td class="center">{{dateToDDMMYY($item->created_at)}}</td>
                    <td class="center"><a href="{{route('admin.package.delete', ['id' => $item->id])}}"><i
                                    class="fa fa-trash text-danger"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection