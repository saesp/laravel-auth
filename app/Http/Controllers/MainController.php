<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

use Illuminate\Support\Facades\Storage;
class PostController extends Controller{
    public function store(){
        $img_path = Storage::put('uploads', $data['image']);
    }
}

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
        $data = $request -> validate([
            'name' => 'required|string|max:64',
            'description' => 'nullable|string|max:1500',
            'languages' => 'nullable|string|max:256',
            'main_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'repo_link' => 'required|string',
            'view_link' => 'nullable|string',
            'completed' => 'required|string',
            'release_date' => 'nullable|date|before:today',
        ]);

        $main_image = $request->file('main_image');
    $img_path = Storage::put('uploads', $main_image);
        // $img_path = Storage :: put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        // $project = new Project;
        
        // $project->name = $data['name'];
        // $project->description = $data['description'];
        // $project->languages = $data['languages'];
        // $project->main_image = $data['main_image'];
        // $project->repo_link = $data['repo_link'];
        // $project->view_link = $data['view_link'];
        // $project->completed = $data['completed'];
        // $project->release_date = $data['release_date'];

        // $project->save();

        $project = Project::create($data);

        return redirect()->route('home', $project);
    }

    // EDIT and UPDATE
    public function projectEdit(Project $project)
    {
        return view('pages.project-edit', compact('project'));
    }
    public function projectUpdate(Request $request, Project $project)
    {
        $data = $request -> validate([
            'name' => 'required|string|max:64',
            'description' => 'nullable|string|max:1500',
            'languages' => 'nullable|string|max:256',
            'main_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

            'repo_link' => 'required|string|unique:projects,repo_link,' . $project->id,
            // "unique: ..." cio?? unique a parte se stesso, quindi edit senza dover cambiare repo

            'view_link' => 'nullable|string',
            'completed' => 'required|string',
            'release_date' => 'nullable|date|before:today',
        ]);

        $img_path = Storage :: put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        // $project->name = $data['name'];
        // $project->description = $data['description'];
        // $project->languages = $data['languages'];
        // $project->main_image = $data['main_image'];
        // $project->repo_link = $data['repo_link'];
        // $project->view_link = $data['view_link'];
        // $project->completed = $data['completed'];
        // $project->release_date = $data['release_date'];
        // $project->save();

        $project -> update($data);
        $project->save();

        return redirect()->route('home', $project);
    }
}