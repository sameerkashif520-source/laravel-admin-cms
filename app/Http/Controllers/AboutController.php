<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\CtaSection;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about()
    {
        $cta = CtaSection::first();
        $about = AboutSection::first();
        return view('frontend.about', compact('cta','about'));
    }
}
