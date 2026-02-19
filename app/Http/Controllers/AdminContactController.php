<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    function showContact()
    {
        $contact = ContactSection::first();
        return view('admin.contact', compact('contact'));
    }

    public function update(Request $req)
    {
        $validated = $req->validate([
            'label' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'support_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'info_title_1' => 'required|string|max:255',
            'info_text_1' => 'required|string|max:255',
            'info_title_2' => 'required|string|max:255',
            'info_text_2' => 'required|string|max:255',
        ], [
            'label.required' => 'Please enter the section label.',
            'heading.required' => 'Please enter the main heading.',
            'description.required' => 'Please enter the description.',
            'support_image.image' => 'Please upload a valid image file.',
            'support_image.mimes' => 'Image must be JPG, PNG, or GIF.',
            'support_image.max' => 'Image size must not exceed 5MB.',
            'info_title_1.required' => 'Please enter the first info card title.',
            'info_text_1.required' => 'Please enter the first info card description.',
            'info_title_2.required' => 'Please enter the second info card title.',
            'info_text_2.required' => 'Please enter the second info card description.',
        ]);

        $contact = ContactSection::first();

        if ($contact) {
            // Handle image upload
            if ($req->hasFile('support_image')) {
                // Delete old image if exists
                if ($contact->support_image && file_exists(public_path('frontend/images/' . $contact->support_image))) {
                    unlink(public_path('frontend/images/' . $contact->support_image));
                }
                // Upload new image
                $file = $req->file('support_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('frontend/images'), $filename);

                $validated['support_image'] = $filename;
            } else {
                unset($validated['support_image']);
            }

            $contact->update($validated);

            return redirect()->route('admin.contact')->with('sweet_ContactUpdation', 'Contact section updated successfully!');
        }
    }
}
