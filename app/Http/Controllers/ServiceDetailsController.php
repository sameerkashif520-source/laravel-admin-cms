<?php

namespace App\Http\Controllers;

use App\Models\CtaSection;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    function serviceDetails()
    {
        $cta = CtaSection::first();
        $details = ServiceDetail::first();
        return view('frontend.serviceDetails', compact('cta','details'));
    }
}
