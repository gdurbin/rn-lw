<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{

    public function home() {
        $siteName = 'RadiantNerd';
        $pageName = 'Home';


        return view('home', ['siteName' => $siteName, 'pageName' => $pageName]);
    }

    public function unreal() {
        $siteName = 'RadiantNerd';
        $pageName = 'Unreal Engine';


        return view('unreal', ['siteName' => $siteName, 'pageName' => $pageName]);
    }

    public function services() {
        $siteName = 'RadiantNerd';
        $pageName = 'Services';


        return view('services', ['siteName' => $siteName, 'pageName' => $pageName]);
    }

    public function about() {
        $siteName = 'RadiantNerd';
        $pageName = 'About';

        return view('about', ['siteName' => $siteName, 'pageName' => $pageName]);
    }

    public function contact() {
        $siteName = 'RadiantNerd';
        $pageName = 'Contact Us';

        return view('contact', ['siteName' => $siteName, 'pageName' => $pageName]);
    }
}
