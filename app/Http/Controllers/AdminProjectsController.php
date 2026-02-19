<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    function showProjects()
    {
        $projects = Project::first();
        return view('admin.projects', compact('projects'));
    }

    public function update(Request $req)
    {
        $rules = [
            'hero_title_line1' => 'required|string|max:255',
            'hero_title_line2' => 'required|string|max:255',
        ];

        for ($i = 1; $i <= 3; $i++) {
            $rules["project_{$i}_title"] = 'required|string|max:255';
            $rules["project_{$i}_description"] = 'required|string';
            $rules["project_{$i}_location"] = 'required|string|max:255';
            $rules["project_{$i}_type"] = 'required|string|max:255';
            $rules["project_{$i}_scope"] = 'required|string|max:255';
            $rules["project_{$i}_image"] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048';
        }

        $validated = $req->validate($rules);

        $projects = Project::first();

        if ($projects) {
            // Handle 3 project images
            for ($i = 1; $i <= 3; $i++) {
                $field = "project_{$i}_image";
                if ($req->hasFile($field)) {
                    if ($projects->$field && file_exists(public_path('frontend/images/' . $projects->$field))) {
                        unlink(public_path('frontend/images/' . $projects->$field));
                    }
                    $file = $req->file($field);
                    $filename = time() . "_{$i}_" . $file->getClientOriginalName();
                    $file->move(public_path('frontend/images'), $filename);
                    $validated[$field] = $filename;
                } else {
                    unset($validated[$field]);
                }
            }

            $projects->update($validated);

            return redirect()->route('admin.projects')->with('sweet_ProjectsUpdation', 'Projects page updated successfully!');
        }
    }
}
