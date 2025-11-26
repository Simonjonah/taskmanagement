<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

   public function viewproject(){
        $view_projects = Project::latest()->get();
        return view('admin.viewproject', compact('view_projects'));
    }   

    public function editproject($id){
        $view_tasks = Task::orderBy('priority')->get();
        $edit_prooject = Project::find($id);
        if (!$edit_prooject) {
            return redirect()->back()->with('error', 'Task not found');
        }
        return view('admin.editproject', compact('view_tasks', 'edit_prooject'));
    }  
    
    

    public function updateproject(Request $request, $id){
        
        $request->validate(
            [
                'project_name' => 'required',
                'description' => 'required',
            ]
        );
        
        $edit_prooject = Project::find($id);
        if (!$edit_prooject) {
            return redirect()->back()->with('fail', 'Project not found');
        }
        
        $edit_prooject->project_name = $request->project_name;
        $edit_prooject->description = $request->description;
        $edit_prooject->task_id = $request->task_id;
        $edit_prooject->update();
        if (!$edit_prooject) {
            return redirect()->back()->with('fail', 'Project update failed');
        }
        return redirect()->back()->with('success', 'Project updated successfully');
    }       


    public function deleteproject($id){
        $delete_project = Project::find($id);
        if (!$delete_project) {
            return redirect()->back()->with('error', 'Project not found');
        }
        $delete_project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully');
    }   
}
