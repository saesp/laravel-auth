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

    // DELETE
    public function projectDelete(Project $project)
    {
        $project->delete();
        return redirect()->route('home');
    }

    // CREATE and STORE
    public function projectCreate()
    {
        return view('pages.project-create');
    }
    public function projectStore(Request $request)
    {
        $data = $request;

        $project = new Project;
        
        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->languages = $data['languages'];
        $project->main_image = $data['main_image'];
        $project->repo_link = $data['repo_link'];
        $project->view_link = $data['view_link'];
        $project->completed = $data['completed'];
        $project->release_date = $data['release_date'];

        $project->save();

        return redirect()->route('home');
    }

    // EDIT and UPDATE
    public function projectEdit(Project $project)
    {
        return view('pages.project-edit', compact('project'));
    }
    public function projectUpdate(Request $request, Project $project)
    {
        $data = $request;

        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->languages = $data['languages'];
        $project->main_image = $data['main_image'];
        $project->repo_link = $data['repo_link'];
        $project->view_link = $data['view_link'];
        $project->completed = $data['completed'];
        $project->release_date = $data['release_date'];

        $project->save();

        return redirect()->route('home');
    }

    public function private ()
    {
        return view('pages.private');
    }
}