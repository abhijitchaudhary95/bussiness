<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function getBanner(){
        return view('admin.pages.banner');
    }

    public function showBannerForm(){
        return view('admin.pages.banner-add');
    }
}
