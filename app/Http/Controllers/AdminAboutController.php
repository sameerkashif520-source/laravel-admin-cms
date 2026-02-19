<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    function showAbout()
    {
        $about = AboutSection::first();
        return view('admin.about', compact('about'));
    }

    public function update(Request $req)
    {
        $rules = [
            'hero_title' => 'required|string|max:255',
            'story_label' => 'required|string|max:255',
            'story_title' => 'required|string|max:255',
            'story_description_1' => 'required|string',
            'story_description_2' => 'required|string',
            'story_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'mission_label' => 'required|string|max:255',
            'mission_title' => 'required|string|max:255',
            'mission_description' => 'required|string',
            'mission_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'difference_label' => 'required|string|max:255',
            'difference_title' => 'required|string|max:255',
            'difference_description' => 'required|string',
        ];

        // Add rules for features, values, cards
        for ($i = 1; $i <= 3; $i++) {
            $rules["feature_{$i}_title"] = 'required|string|max:255';
            $rules["feature_{$i}_description"] = 'required|string';
        }
        for ($i = 1; $i <= 4; $i++) {
            $rules["value_{$i}_title"] = 'required|string|max:255';
            $rules["value_{$i}_description"] = 'required|string';
        }
        for ($i = 1; $i <= 6; $i++) {
            $rules["card_{$i}_title"] = 'required|string|max:255';
            $rules["card_{$i}_description"] = 'required|string';
        }

        $validated = $req->validate($rules);

        $about = AboutSection::first();

        if ($about) {
            // Handle image uploads
            foreach (['story_image', 'mission_image'] as $imageField) {
                if ($req->hasFile($imageField)) {
                    // Delete old
                    if ($about->$imageField && file_exists(public_path('frontend/images/' . $about->$imageField))) {
                        unlink(public_path('frontend/images/' . $about->$imageField));
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

            $about->update($validated);

            return redirect()->route('admin.about')->with('sweet_AboutUpdation', 'About page updated successfully!');
        }
    }

}
