@extends('admin.layout')
@section('title') Quy cách đóng gói:<b class="text-danger"> {{$product->name}}</b> @endsection
@section('pageContent')
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm Quy Cách
            </div>
            <div class="panel-body">
                <form action="{{route('admin.product.package.add', ['productId' => $product->id])}}"
                      enctype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Dung Dích *</label>
                        <select class="form-control" required name="package_id">
                            @foreach(\App\Package::all() as $package)
                                <option value="{{$package->id}}">{{$package->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giá *</label>
                        <div class="form-inline">
                            <input class="form-control" required name="price">
                            <input class="form-control" required name="priceUnit" value="vnd" readonly>
                        </div>
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
                <th>Giá</th>
                <th>Ngày Tạo</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr class="gradeU">
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{productPrice($item->price, $item->price_unit)}}</td>
                    <td class="center">{{dateToDDMMYY($item->created_at)}}</td>
                    <td class="center"><a
                                href="{{route('admin.product.package.delete', ['productId' => $item->product_id, 'id' => $item->id])}}"><i
                                    class="fa fa-trash text-danger"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection