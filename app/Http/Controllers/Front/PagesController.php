<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ChefRepository;

class PagesController extends Controller
{
    public function menu()
    {
        return view('front.menu');
    }

    public function about(ChefRepository $chef)
    {
        $data = $chef->get();
        return view('front.about', [
            'chefs' => $data
        ]);
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
