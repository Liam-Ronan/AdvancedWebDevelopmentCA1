<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //show all projects
    public function index() {
        return view('projects.index', [
            'projects' => Project::latest()->filter(request(['tag', 'search']))->get()
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
}
