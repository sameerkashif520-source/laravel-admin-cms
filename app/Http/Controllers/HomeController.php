<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use App\Models\CtaSection;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $cta = CtaSection::first();
        $contact = ContactSection::first();
        $home = HomeSection::first();
        return view('frontend.home', compact('cta', 'contact', 'home'));
    }   
}