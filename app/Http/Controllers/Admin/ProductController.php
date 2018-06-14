<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/18/17
 * Time: 10:58 AM
 */

namespace App\Http\Controllers\Admin;


use App\Package;
use App\Product;
use App\ProductPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends AdminController
{
    public function index(Request $request)
    {
        $list = Product::paginate(5);
        return view('admin.product.list', ['list' => $list]);
    }

    public function add(Request $request)
    {

        if ($request->isMethod('GET')) {
            return view('admin/product/add');
        } else {
            $name = $request->get('name');
            $product = Product::where('name', $name)->first();
            if ($product) {
                dflash('Tên sản phẩm đã tồn tại', 'danger');
                return redirect()->back();
            } else {
                $product = new Product();
            }
            $stringimg=[$request->images1,$request->images2,$request->images3,$request->images4];
            $product->name = $name;
            $product->category_id = $request->get('category_id');
            $product->short_description = $request->get('short_desc');
            $product->long_description = $request->get('long_desc');
            $product->image_preview = $request->get('image_preview');
            $product->images = json_encode($stringimg);
            if ($product->save()) {
                dflash('Thêm sản phẩm thành công!', 'success');
            }
            return back();
        }
    }

    public function edit($id, Request $request)
    {
        if ($request->isMethod('GET')) {
            $product = Product::find($id);
            if (!$product) {
                dflash('Không tìm thấy sản phẩm', 'danger');
                return back();
            }
            return view('admin.product.edit', ['product' => $product]);
        } else {
            $stringimg=[$request->images1,$request->images2,$request->images3,$request->images4];
            $product = Product::find($id);
            $product->name = $request->get('name');
            $product->short_description = $request->get('short_desc');
            $product->long_description = $request->get('long_desc');
            $product->image_preview = $request->get('image_preview');
            $product->category_id = $request->get('category_id');
            $product->images = json_encode($stringimg);
            if ($product->save()) {
                dflash('Cập nhật sản phẩm thành công!', 'success');
            }
            return back();
        }
    }

    public function delete($id)
    {
        Product::find($id)->delete();
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