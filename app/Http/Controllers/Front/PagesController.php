<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function menu()
    {
        return view('front.menu');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact', [
            'latitude' => 1.0000,
            'longitude' => 2.2123
        ]);
    }

    public function reservation()
    {
        return view('front.reservation');
    }
}
