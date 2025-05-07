<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function workouts()
    {
        return view('workouts');
    }
    public function exercise()
    {
        return view('exercise');
    }
    public function profile()
    {
        return view('profile');
    }
}
