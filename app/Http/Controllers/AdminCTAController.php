<?php

namespace App\Http\Controllers;

use App\Models\CtaSection;
use Illuminate\Http\Request;

class AdminCTAController extends Controller
{
    function showCTA()
    {
        $cta = CtaSection::first();
        return view('admin.cta', compact('cta'));
    }

    function update(Request $req)
    {
        $validated = $req->validate([
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'primary_button_text' => 'required|string|max:255',
            'secondary_button_text' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'availability' => 'required|string|max:255',
        ], [
            // Heading
            'heading.required' => 'Please enter the main heading for the CTA section.',
            'heading.max' => 'The heading must not exceed 255 characters.',
            // Description
            'description.string' => 'The description must be valid text.',
            // Primary Button
            'primary_button_text.required' => 'Please enter the text for the primary call-to-action button.',
            'primary_button_text.max' => 'The primary button text must not exceed 255 characters.',
            // Secondary Button
            'secondary_button_text.required' => 'Please enter the text for the secondary contact button.',
            'secondary_button_text.max' => 'The secondary button text must not exceed 255 characters.',
            // Email
            'email.required' => 'Please enter a contact email address.',
            'email.email' => 'Please enter a valid email address (e.g., info@company.com).',
            'email.max' => 'The email address must not exceed 255 characters.',
            // Availability
            'availability.required' => 'Please enter the availability information.',
            'availability.max' => 'The availability text must not exceed 255 characters.',
        ]);

        $cta = CtaSection::first();
        if ($cta) {
            $cta->update($validated);
            return redirect()->route('admin.cta')->with('sweet_CtaUpdation', 'CTA updated successfully!');
        }
    }
}
