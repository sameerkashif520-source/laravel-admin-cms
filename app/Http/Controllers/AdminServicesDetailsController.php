<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class AdminServicesDetailsController extends Controller
{
    function showServicesDetails()
    {
        $details = ServiceDetail::first();
        return view('admin.servicesDetails', compact('details'));
    }

    public function update(Request $req)
    {
        $rules = [
            'hero_title' => 'required|string|max:255',
            'main_heading' => 'required|string|max:255',
            'main_description' => 'required|string',
            'subheading_1' => 'required|string|max:255',
            'subheading_1_desc' => 'required|string',
            'why_choose_heading' => 'required|string|max:255',
            'industries_heading' => 'required|string|max:255',
            'trusted_heading' => 'required|string|max:255',
            'trusted_description' => 'required|string',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ];

        for ($i = 1; $i <= 6; $i++) {
            $rules["feature_{$i}_title"] = 'required|string|max:255';
            $rules["feature_{$i}_desc"] = 'required|string';
        }
        for ($i = 1; $i <= 5; $i++) {
            $rules["why_choose_point_{$i}"] = 'required|string|max:255';
        }
        for ($i = 1; $i <= 4; $i++) {
            $rules["industry_{$i}"] = 'required|string|max:255';
        }

        $validated = $req->validate($rules);

        $details = ServiceDetail::first();

        if ($details) {
            // Handle image
            if ($req->hasFile('hero_image')) {
                if ($details->hero_image && file_exists(public_path('frontend/images/' . $details->hero_image))) {
                    unlink(public_path('frontend/images/' . $details->hero_image));
                }
                $file = $req->file('hero_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('frontend/images'), $filename);
                $validated['hero_image'] = $filename;
            } else {
                unset($validated['hero_image']);
            }

            $details->update($validated);

            return redirect()->route('admin.services.details')->with('sweet_ServiceDetailsUpdation', 'Service details updated successfully!');
        }
    }
}
