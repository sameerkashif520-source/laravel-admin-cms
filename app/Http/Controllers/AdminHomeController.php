<?php

namespace App\Http\Controllers;

use App\Models\CtaSection;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    function showDashboard()
    {
        return view('admin.dashboard');
    }
    function home()
    {
        $home = HomeSection::first();
        return view('admin.home', compact('home'));
    }

    public function update(Request $req)
    {
        $rules = [
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string|max:255',
            'hero_description' => 'required|string',
            'hero_button_text' => 'required|string|max:255',
            'hero_bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'hero_engineer_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'solutions_title' => 'required|string|max:255',
            'solutions_subtitle' => 'required|string',
            'process_title' => 'required|string|max:255',
            'process_subtitle' => 'required|string|max:255',
            'learn_more_title' => 'required|string|max:255',
            'learn_more_subtitle' => 'required|string',
            'tab_1_title' => 'required|string|max:255',
            'tab_2_title' => 'required|string|max:255',
        ];

        // Add rules for stats, cards, tools, steps dynamically
        for ($i = 1; $i <= 3; $i++) {
            $rules["stat_{$i}_number"] = 'required|string|max:255';
            $rules["stat_{$i}_label"] = 'required|string|max:255';
        }
        for ($i = 1; $i <= 6; $i++) {
            $rules["card_{$i}_title"] = 'required|string|max:255';
            $rules["card_{$i}_description"] = 'required|string';
        }
        for ($i = 1; $i <= 4; $i++) {
            $rules["card_{$i}_tools"] = 'nullable|string';
        }
        for ($i = 1; $i <= 4; $i++) {
            $rules["step_{$i}_number"] = 'required|string|max:255';
            $rules["step_{$i}_title"] = 'required|string|max:255';
            $rules["step_{$i}_description"] = 'required|string';
        }

        $validated = $req->validate($rules);

        $home = HomeSection::first();

        if ($home) {
            // Handle image uploads
            foreach (['hero_bg_image', 'hero_engineer_image'] as $imageField) {
                if ($req->hasFile($imageField)) {
                    // Delete old
                    if ($home->$imageField && file_exists(public_path('frontend/images/' . $home->$imageField))) {
                        unlink(public_path('frontend/images/' . $home->$imageField));
                    }
                    // Upload new
                    $file = $req->file($imageField);
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('frontend/images'), $filename);
                    $validated[$imageField] = $filename;
                } else {
                    unset($validated[$imageField]);
                }
            }

            $home->update($validated);

            return redirect()->route('admin.home')->with('sweet_HomeUpdation', 'Home page updated successfully!');
        }
    }
}
