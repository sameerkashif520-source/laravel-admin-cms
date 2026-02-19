<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use App\Models\CtaSection;
use App\Models\ServiceSection;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function services()
    {
        $cta = CtaSection::first();
        $contact = ContactSection::first();
        $services= ServiceSection::first();
        return view('frontend.services', compact('cta','contact','services'));
    }
}
