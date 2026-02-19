<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function contactUs()
    {
        $contactUs = ContactUs::first();
        return view('frontend.contactUs', compact('contactUs'));
    }
}
