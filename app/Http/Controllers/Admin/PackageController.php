<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/28/17
 * Time: 10:04 AM
 */

namespace App\Http\Controllers\Admin;


use App\Package;
use Illuminate\Http\Request;

class PackageController extends AdminController
{
    public function index()
    {
        $list = Package::orderBy('volume', 'asc')->get();
        return view('admin.package.list', ['list' => $list]);
    }

    public function add(Request $request)
    {
        $package = new Package();
        $package->volume = $request->get('volume');
        $unitValues = explode('-', $request->get('unit'));
        $package->unit = $unitValues[0];
        $package->unit_text = $unitValues[1];

        $code = $package->volume . '' . $package->unit;
        if (Package::where('code', $code)->count() > 0) {
            dflash('Quy cách đã tồn tại!', 'warning');
        } else {
            $package->code = $code;
            $package->save();
        }
        return back();
    }

    public function delete($id, Request $request)
    {
        Package::find($id)->delete();
        return back();
    }
}