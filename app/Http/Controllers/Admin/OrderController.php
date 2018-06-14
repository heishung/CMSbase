<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\cart;
use App\Product;
use Illuminate\Support\Facades\Mail;

class OrderController extends AdminController
{
    //


    public function index(Request $request)
    {
        $cart = cart::paginate(5);
        return view('admin.order.list', ['cart' => $cart]);
    }


    public function edit($id, Request $request)
    {

        $idpr=cart::find($id);

        $dungtich = Product::where('id','=',$idpr->id_product)->first();
       /* dd($dungtich->packages());*/
        $listpr=Product::all();
        if ($request->isMethod('GET')) {
            $editcart = cart::find($id);
            if (!$editcart) {
                dflash('Không tìm thấy đơn hàng', 'danger');
                return back();
            }
            return view('admin.order.edit', ['dungtich'=>$dungtich,'editcart' => $editcart,'listpr'=>$listpr]);
        }
        else {
            $editcartstore = cart::find($id);
            /*dd($request);*/
            if ($editcartstore->update($request->all())) {
                dflash('Cập nhật sản phẩm thành công!', 'success');
            }
            return back();
        }
    }

    public function delete($id)
    {
        cart::find($id)->delete();
        return back();
    }

    public function listPackages($productId, Request $request)
    {

        $product = Product::find($productId);
        return view('admin.product.package.list', ['list' => $product->packages, 'product' => $product]);
    }

    public function addPackage($productId, Request $request)
    {
        if ($request->isMethod('POST')) {
            $packageInfo = Package::find($request->get('package_id'));

            $productPackage = new ProductPackage();
            $productPackage->product_id = $productId;
            $productPackage->volume = $packageInfo->volume;
            $productPackage->volume_unit = $packageInfo->unit;
            $productPackage->volume_unit_text = $packageInfo->unit_text;
            $productPackage->price = $request->get('price');
            $productPackage->price_unit = $request->get('priceUnit');
            $productPackage->save();
            return back();
        }
    }

    public function deletePackage($productId, $id)
    {
        ProductPackage::where('id', $id)->delete();
        return back();
    }


}
