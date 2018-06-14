@extends('admin.layout')
@section('title') Sản Phẩm @endsection
@section('pageContent')
    <div class="col-lg-12">
        <div class="btn-group pull-right">
            <a href="{{route('admin.product.add')}}" class="btn btn-primary">Thêm sản phẩm</a>
        </div>
        <table width="100%" class="table table-hover table-bordered" id="tableProduct">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Danh Mục</th>
                <th>Quy Cách</th>
                {{--<th>Ngày tạo</th>--}}
                <th>Ngày Sửa</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr class="gradeU">
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td class="center"><img src="{{asset($item->image_preview)}}" style="width: 50px;height: 50px">
                    </td>
                    <td>{{$item->category->name}}</td>
                    <td>
                        @foreach($item->packages as $package)
                            <p>{{$package->name . ' - ' . productPrice($package->price, $package->price_unit)}}</p>
                        @endforeach
                        <p><a href="{{route('admin.product.package.list', ['productId' => $item->id])}}"><i
                                        class="fa fa-plus-circle"></i> Thêm</a></p>
                    </td>
                    {{--                    <td class="center">{{dateToDDMMYY($item->created_at)}}</td>--}}
                    <td class="center">{{dateToDDMMYY($item->updated_at)}}</td>
                    <td class="center"><a href="{{route('admin.product.edit', ['id' => $item->id])}}"><i
                                    class="fa fa-edit"></i></a></td>
                    <td class="center"><a onclick="return confirm('Bạn có chắc là muốn xóa không')" href="{{route('admin.product.delete', ['id' => $item->id])}}"><i
                                    class="fa fa-trash text-danger"></i></a></td>
                </tr>
            @endforeach

            </tbody>

        </table>
        <div class="row">
            <div class="paginate text-center">
                {{ $list->links() }}
            </div>
        </div>
    </div>
@endsection