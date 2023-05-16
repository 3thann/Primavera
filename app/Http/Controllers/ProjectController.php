<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        
        return view('project.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::find($id);
        
        return view('project.show', compact('project'));
    }
}
