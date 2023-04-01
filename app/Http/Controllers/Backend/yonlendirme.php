<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class yonlendirme extends Controller
{
    function hakkimizda(){

        return view("frontend/hakkimizda");
    }
    function iletisim(){

        return view("frontend/iletisim");
    }
    function homepage(){

        return view("frontend/homepage");
    }
    function giris(){

        return view("frontend/giris");
    }
    function kayit(){

        return view("frontend/kayitol");
    }
    function cast(){

        return view("frontend/cast");
    }
    function admin(){

        return view("admin/master");
    }
}
