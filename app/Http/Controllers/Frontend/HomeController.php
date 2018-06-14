<?php

namespace App\Http\Controllers\Frontend;

/*use App\Category;*/
use App\Http\Controllers\Controller;
use App\Post;
use App\Cart;
/*use App\Product;*/
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function show () {

        return view('marketclayuot.index');
    }
    public function mfaq () {

        return view('marketclayuot.mobile.introduction.mfaq');
    }
    public function community () {

        return view('marketclayuot.mobile.introduction.community');
    }
    public function specification () {

        return view('marketclayuot.mobile.introduction.specification');
    }
    public function resources () {

        return view('marketclayuot.mobile.resources.resources');
    }
    public function exchanges () {

        return view('marketclayuot.mobile.resources.exchanges');
    }
    public function communities () {

        return view('marketclayuot.mobile.resources.communities');
    }
    public function documentation () {

        return view('marketclayuot.mobile.resources.documentation');
    }
    public function marketcore () {

        return view('marketclayuot.mobile.resources.marketcore');
    }
    public function support () {

        return view('marketclayuot.mobile.participate.support');
    }
    public function buy () {

        return view('marketclayuot.mobile.participate.buy');
    }
    public function development () {

        return view('marketclayuot.mobile.participate.development');
    }
    public function contact(Request $request){
        $mail=Settings::getSetting('contactInfo');

        $data=[
            "name" => $request->name,
              "telephone" => $request->telephone,
              "email" => $request->email,
              "country" => $request->country,
              "comments" => $request->comments,
        ];

        Mail::send('marketclayuot.email.emails', $data, function ($m)  {
            $mail=Settings::getSetting('contactInfo');
            $m->from(str_replace('','',$mail->contact_email), 'Your Application');

            $m->to(str_replace('','',$mail->contact_email))->subject('New mail form MarketC.net');
        });
        return redirect("/")->with( 'notificationmail', 'Send mail succsess' );
       /* if ( cart::create( $request->all() ) ) {

            return redirect("/")->with( 'notification', 'Chúng tôi sẽ liên hệ bạn sớm' );

        } else {
            return redirect("/")->with( 'notification', ' Liên hệ thất bại' );
        }*/
    }
}
