<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    function showFaq()
    {
        $faq = Faq::first();
        return view('admin.faq', compact('faq'));
    }

    public function update(Request $req)
    {
        $rules = [
            'hero_title' => 'required|string|max:255',
        ];

        for ($i = 1; $i <= 10; $i++) {
            $rules["faq_{$i}_question"] = 'required|string|max:255';
            $rules["faq_{$i}_answer"] = 'required|string';
        }

        $validated = $req->validate($rules);

        $faq = Faq::first();

        if ($faq) {
            $faq->update($validated);

            return redirect()->route('admin.faq')->with('sweet_FaqUpdation', 'FAQ page updated successfully!');
        }
    }
}
