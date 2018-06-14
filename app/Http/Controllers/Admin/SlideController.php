<?php

namespace App\Http\Controllers\Admin;

use App\slide;
use App\Settings;
use Illuminate\Http\Request;

class SlideController extends AdminController
{
    //
    public function upanh(Request $request){

        if ($request->isMethod("GET")) {
            return view('admin.settings.information');
        } else {
            $key = $request->get('key');
          /*  dd($key);*/
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
    public function listslide(){
        $list=Settings::getSetting('slide');
          echo $list->images1;
    }

}
