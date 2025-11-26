<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

   public function viewproject(){
        $view_projects = Project::latest()->get();
        return view('admin.viewproject', compact('view_projects'));
    }   
}
