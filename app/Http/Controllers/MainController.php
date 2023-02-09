<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
    // HOME
    public function home()
    {
        $projects = Project::all();

        return view('pages.home', compact('projects'));
    }

    // SHOW
    public function projectShow(Project $project)
    {
        return view('pages.project-show', compact('project'));
    }


    public function private ()
    {
        return view('pages.private');
    }
}