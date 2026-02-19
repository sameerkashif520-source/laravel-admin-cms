<?php

namespace App\Http\Controllers;

use App\Models\CtaSection;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function projects()
    {
        $cta = CtaSection::first();
        $projects = Project::first();
        return view('frontend.projects', compact('cta','projects'));
    }
}
