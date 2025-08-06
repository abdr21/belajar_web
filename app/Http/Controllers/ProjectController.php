<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "This is the project index page";
        //
    }

    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //echo "This is the project show page for project with ID: $id";
        $project = Project::findOrFail($id);
        dd($project);
        /*$data = [
            'title' => $project->title,
            'project' => $project,
            'testimonials' => $project->testimonials()->latest()->take(3)->get(),
        ];
        return view('projects.show', $data);*/
    }
    
        //
    

   
}
