<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/18/17
 * Time: 11:50 AM
 */

namespace App\Http\Controllers\Admin;


class DashboardController extends AdminController
{
    public function index()
    {
        return view('admin.index');
    }
}