@extends('admin.layout')
@section('title') Đơn hàng @endsection
@section('pageContent')
    <div class="col-lg-12">
        <div class="panel panel-default">
           {{-- <div class="panel-heading">
                <a href="{{route('admin.product.category.add')}}" class="btn btn-primary pull-right">Thêm</a>
                <div class="clearfix"></div>
            </div>--}}
            <div class="panel-body">
                <table width="100%" class="table table-hover" id="tableProduct">
                    <thead>
                    <tr>
                        <th>Khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Dung tích</th>
                        <th>Tổng giá</th>
                        <th>Ngày</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $carts)

                        <tr
                                style="
                                @if(isset($carts->data['tinhtrangdonhang']))
                                    @if($carts->data['tinhtrangdonhang']==1)
                                        color: #268212;background-color: #f0f0f0;
                                        @else
                                        @endif
                                @else
                                        @endif

                                        "
                                class="gradeU">

                            <td>
                                {{isset($carts->name)?$carts->name:''}}
                            </td>
                            <td>{{isset($carts->email)?$carts->email:''}}</td>
                            <td>{{isset($carts->phone)?'0'.$carts->phone:''}}</td>
                            <td>{{isset($carts->address)?$carts->address:''}}</td>
                            <?php $namepr=App\Product::where('id','=',$carts->id_product)->first() ?>
                            <td> {{isset($namepr->name)?$namepr->name:''}}</td>
                            <td>{{isset($carts->data['soluong'])?$carts->data['soluong']:''}}</td>
                            <td>{{isset($carts->data['dungtich'])?$carts->data['dungtich']:''}}</td>
                            <td>{{isset($carts->data['giathanhtoan'])?$carts->data['giathanhtoan']:''}}</td>
                            <td class="center">{{dateToDDMMYY($carts->created_at)}}</td>
                           {{-- <td class="center">
                                @if(isset($carts->data['tinhtrangdonhang']))
                                @if($carts->data['tinhtrangdonhang']==0)
                                    Kích hoạt
                                @elseif($carts->data['tinhtrangdonhang']==1)
                                    Đã giao hàng
                                @elseif($carts->data['tinhtrangdonhang']==2)
                                    Admin đã hủy
                                @else
                                    Khách hàng đã hủy
                                @endif
                                    @else
                                @endif
                            </td>--}}
                            <td class="center"><a onclick=" return confirm('Bạn có chắc là muốn xóa không')" href="{{route('admin.order.delete', ['id' => $carts->id])}}"><i
                                            class="fa fa-trash text-danger"></i></a></td>
                            <td class="center">
                                <a href="{{route('admin.order.edit', ['id' => $carts->id])}}"><i
                                            class="fa fa-edit"></i></a>
                                <a href="" hidden><i class="fa fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="paginate text-center">
                    {{ $cart->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection