<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    function faq()
    {
        $faq = Faq::first();
        return view('frontend.faq', compact('faq'));
    }
}
