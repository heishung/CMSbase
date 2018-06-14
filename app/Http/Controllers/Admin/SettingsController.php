<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/28/17
 * Time: 1:57 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function information(Request $request)
    {

        if ($request->isMethod("GET")) {
            return view('admin.settings.information');
        } else {
            $key = $request->get('key');

            $settings = Settings::where('key', $key)->first();
            if (!$settings) {
                $settings = new Settings();
                $settings->key = $key;
            }
            $settings->value = json_encode($request->except('_token'));
            $settings->save();
            return back();
        }
    }
}