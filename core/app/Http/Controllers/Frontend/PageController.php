<?php

namespace App\Http\Controllers\Frontend;

use App\DTO\HomePageDTO;
use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{

    public function home()
    {
        $page = Page::where('slug', 'home')->first();
        $data = new HomePageDTO($page->content['sections']);
        return view('frontend.home', compact('data'));
    }

    public function about()
    {
        $page = Page::where('slug', 'about')->first();
        $data = new HomePageDTO($page->content['sections']);
        return view('frontend.about', compact('data'));
    }

    public function meet_the_ceo()
    {
        $page = Page::where('slug', 'meet-the-ceo')->first();
        $data = new HomePageDTO($page->content['sections']);
        return view('frontend.meet-the-ceo', compact('data'));
    }

    public function registerParticipant()
    {
        return view('frontend.register');
    }
}
