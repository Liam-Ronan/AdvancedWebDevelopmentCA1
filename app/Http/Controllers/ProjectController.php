<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    //show all projects
    public function index() {
        return view('projects.index', [
            'projects' => Project::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //show single project
    public function show(Project $project) {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    //show create form
    public function create() {
        return view('projects.create');
    }

    //store project data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('projects', 'title')],
            'tags'=> 'required',
            'date_created' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required', 'email'],
            'description' => 'required'  
        ]);


        /* File Upload */
        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Project::create($formFields);

        return redirect('/')->with('message', 'Project uploaded successfully!');
    }

    //show edit form
    public function edit(Project $project) {
        return view('projects.edit', ['project' => $project]);
    }


     //Update project data
     public function update(Request $request, Project $project) {
        $formFields = $request->validate([
            'title' => 'required',
            'tags'=> 'required',
            'date_created' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required', 'email'],
            'description' => 'required'  
        ]);


        /* File Upload */
        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $project->update($formFields);

        return back()->with('message', 'Project Updated successfully!');
    }


    //Delete Project
    public function destroy(Project $project) {
        $project->delete();
        return redirect('/')->with('message', 'Project deleted successfully');
    }
}
