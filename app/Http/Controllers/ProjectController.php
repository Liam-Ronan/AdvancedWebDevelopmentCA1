<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //show all projects
    public function index() {
        return view('projects.index', [
            'projects' => Project::latest()->filter(request(['tag']))->get()
        ]);
    }

    //show single project
    public function show(Project $project) {
        return view('projects.show', [
            'project' => $project
        ]);
    }
}
