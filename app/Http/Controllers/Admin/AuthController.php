<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/1/16
 * Time: 16:58
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends AdminController
{
    public function login(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view('admin.login');
        } else {
            $credentials = [
                'email' => $request->get('email'),
                'password' => $request->get('password')
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.home');
            }
            dflash('Invalide username or password', 'danger');
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function changePassword(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view('admin.change_password');
        } else {
            $oldPassword = $request->get('old_password');
            $user = Auth::user();
            if (Hash::check($oldPassword, $user->getAuthPassword())) {
                $password = $request->get('password');
                $user->password = Hash::make($password);
                $user->save();
                dflash('Password has been changed.', 'success');
            } else {
                dflash('Old password is wrong', 'danger');
            }
            return back();
        }
    }
}