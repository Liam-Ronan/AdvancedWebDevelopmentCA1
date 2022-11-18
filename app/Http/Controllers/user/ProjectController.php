<?php

namespace app\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //show all projects
    public function index()
    {

        return view('user.projects.index', [
            /* Showing a total of 6 projects */
            'projects' => Project::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //show single project
    public function show(Project $project)
    {
        return view('user.projects.show', ['project' => $project]);
    }

    //show create form deleted here

    //store project data deleted here

    //show edit form deleted here

    //Update project data deleted here

    //Delete Project deleted here
}
