@extends('admin.layout')
@section('title') Danh Mục @endsection
@section('pageContent')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{route('admin.product.category.add')}}" class="btn btn-primary pull-right">Thêm</a>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <table width="100%" class="table table-hover" id="tableProduct">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Vị Trí</th>
                        <th>Lượt Xem</th>
                        <th>Sản Phẩm</th>
                        <th>Ngày Sửa</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($list as $item)
                        <tr class="gradeU">
                            <td>{{$item->id}}</td>
                            <td>
                                @if($item->parent_id)
                                    {{'|-----'.$item->name}}
                                @else
                                    {{$item->name}}
                                @endif
                            </td>
                            <td class="center">{{$item->position}}</td>
                            <td></td>
                            <td></td>
                            <td class="center">{{dateToDDMMYY($item->updated_at)}}</td>
                            <td class="center">
                                <a href="{{route('admin.product.category.edit', ['id' => $item->id])}}"><i
                                            class="fa fa-edit"></i></a>
                                <a href="" hidden><i class="fa fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection