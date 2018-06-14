@extends('admin.layout')
@section('title')Sửa đơn đặt hàng @endsection
@section('pageContent')
    <div class="col-md-6">
        <form action="{{route('admin.order.edit', ['id' =>$editcart->id])}}" id="form-edit-book" enctype="multipart/form-data"
              method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên khách hàng *</label>
                <input class="form-control" name="name" type="text" value="{{$editcart->name}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" type="email"  value="{{$editcart->email}}">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                    <input class="form-control" name="phone" type="number"  value="{{isset($editcart->phone)?'0'.$editcart->phone:''}}">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input class="form-control" name="address" type="text"  value="{{isset($editcart->address)?$editcart->address:''}}">
            </div>
            <input hidden class="total_price_input" type="text" value="" name="data[giathanhtoan]">
            <div class="form-group">
                <label>Sản phẩm</label>
                <select name="id_product" class="form-control" id="">
                    @foreach($listpr as $lpr)
                    <option
                         @if($editcart->id_product==$lpr->id)
                         selected
                         @else
                                 @endif
                            value="{{$lpr->id}}">{{$lpr->name}}
                    </option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Dung tích</label>
                <select name="data[dungtich]" onchange="selectVolume(this)" class="form-control" id="select_volume_edit">
                    <option disabled="">Dung tích</option>
                    @foreach($dungtich ->packages as $p)
                        <option data-id="{{$p->id}}"
                                data-price="{{$p->price}}"
                                data-priceUnit="{{$p->price_unit}}"
                                data-namedt="{{$p->name}}"
                        >{{$p->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="sss"></div>
            <div class="form-group">
                <label>Số lượng</label>
                <select name="data[soluong]" onchange="selectQuantity(this)" class="form-control"
                        id="select_quantity">
                    <option disabled="">Số lượng</option>
                    @for($i = 1; $i <= 10; $i++)
                        <option data-quantity="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label>Tình trạng đơn hàng</label>
                <div class="form-group">
                    <select id="" class="form-control" style="width: 70%" data-placeholder="TÌnh trạng" name="data[tinhtrangdonhang]">
                        @if(isset($editcart->data['tinhtrangdonhang']))
                            <option
                                    @if($editcart->data['tinhtrangdonhang']==0||$editcart->data['tinhtrangdonhang']==null)
                                    {{'selected'}}
                                    @else

                                    @endif
                                    value="0"></option>
                            <option
                                    @if($editcart->data['tinhtrangdonhang']==1)
                                    {{'selected'}}
                                    @else

                                    @endif
                                    value="1">Đã giao</option>

                        @else
                            <option value="0"></option>
                            <option value="1">Đã giao</option>
                        @endif


                    </select>
                </div>
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
    <script src="{{asset('tinhdau/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('tinhdau/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('libs/common.js')}}"></script>
    <script>
        function selectVolume(el) {
            updatePrice()
        }
        function selectQuantity(el) {
            updatePrice()
        }
        function updatePrice() {

            var price = $('#select_volume_edit :selected').data('price');
            var namedt = $('#select_volume_edit :selected').data('namedt');
            var quantity = $('#select_quantity :selected').data('quantity');
            var totalPrice = price * quantity;
            $('.total_price_input').val(totalPrice.formatMoney(0, ',', '.') + 'đ');
            $('.total_price').text(totalPrice.formatMoney(0, ',', '.') + 'đ');
            /*$('.quantity').text(quantity);
            $('.namedt').text(namedt);*/
        }
        updatePrice();

    </script>
    <script>
        $(document).ready(function() {

            //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
            $("#form-edit-book").validate({
                rules: {
                    address: {
                        required: true,
                        minlength: 5
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 13,
                    },
                    email:{
                        email: true
                    }
                },
                messages: {
                    address: {
                        required: "Vui lòng nhập địa chỉ",
                        minlength: "Địa chỉ quá ngắn"
                    },
                    phone: {
                        required: "Vui lòng nhập đúng số điện thoại",
                        minlength: "Số điện thoại quá ngắn",
                        maxlength: "Số điện thoại quá dài"
                    }
                }
            });
        });
    </script>
@endsection