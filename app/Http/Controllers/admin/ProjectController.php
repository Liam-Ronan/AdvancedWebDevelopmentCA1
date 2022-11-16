<?php

namespace app\Http\Controllers\admin;

use app\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    //show all projects
    public function index() {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.projects.index', [
            /* Showing a total of 6 projects */
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

        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.projects.create');
    }

    //store project data
    public function store(Request $request) {

        $user = Auth::user();
        $user->authorizeRoles('admin');

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

        return redirect('/projects')->with('message', 'Project Created successfully');
    }

    //show edit form
    public function edit(Project $project) {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.projects.edit', ['project' => $project]);
    }


     //Update project data
    public function update(Request $request, Project $project) {

        $user = Auth::user();
        $user->authorizeRoles('admin');

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

        $user = Auth::user();
        $user->authorizeRoles('admin');

        $project->delete();
        return redirect('/projects')->with('message', 'Project deleted successfully');
    }
}
