<?php

namespace App\Http\Controllers;
use App\Models\About;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $about = About::get();
    //  dd($about);
        return view('Client.home',compact('about'));
    }
    // public function home()
    // {
    //     return view('Client.home');
    // }
}
