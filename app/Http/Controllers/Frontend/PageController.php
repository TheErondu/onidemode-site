<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function meet_the_ceo()
    {
        return view('frontend.meet-the-ceo');
    }

    public function contact_us()
    {
        return view('frontend.contact');
    }

    public function registerParticipant()
    {
        return view('frontend.register');
    }
}
