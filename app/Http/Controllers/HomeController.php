<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Skill;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $about = About::get();
        $skills = Skill::get();

   
        return view('Client.home',compact('about','skills'));
    }
    // public function home()
    // {
    //     return view('Client.home');
    // }
}
