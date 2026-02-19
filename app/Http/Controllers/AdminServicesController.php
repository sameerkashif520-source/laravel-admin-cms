<?php

namespace App\Http\Controllers;

use App\Models\ServiceSection;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    function showServices()
    {
        $services = ServiceSection::first();
        return view('admin.services', compact('services'));
    }

    public function update(Request $req)
    {
        $rules = [
            'hero_title' => 'required|string|max:255',
            'services_label' => 'required|string|max:255',
            'services_title' => 'required|string|max:255',
        ];

        for ($i = 1; $i <= 4; $i++) {
            $rules["service_{$i}_name"] = 'required|string|max:255';
            $rules["service_{$i}_title"] = 'required|string|max:255';
            $rules["service_{$i}_description"] = 'required|string';
            $rules["service_{$i}_image"] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048';
        }

        $validated = $req->validate($rules);

        $services = ServiceSection::first();

        if ($services) {
            // Handle 4 service images
            for ($i = 1; $i <= 4; $i++) {
                $field = "service_{$i}_image";
                if ($req->hasFile($field)) {
                    if ($services->$field && file_exists(public_path('frontend/images/' . $services->$field))) {
                        unlink(public_path('frontend/images/' . $services->$field));
                    }
                    $file = $req->file($field);
                    $filename = time() . "_{$i}_" . $file->getClientOriginalName();
                    $file->move(public_path('frontend/images'), $filename);
                    $validated[$field] = $filename;
                } else {
                    unset($validated[$field]);
                }
            }

            $services->update($validated);

            return redirect()->route('admin.services')->with('sweet_ServiceUpdation', 'Services page updated successfully!');
        }
    }
}
