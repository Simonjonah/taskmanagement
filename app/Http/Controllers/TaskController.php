<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
class TaskController extends Controller
{
    //create task function
    public function store(Request $request){
        $request->validate([
            'task_name' => ['required', 'string', 'max:255'],
        ]);

        // highest priority = 1 to top
        $highestPriority = Task::max('priority') + 1;

        $add_task = Task::create([
            'task_name' => $request->task_name,
            'priority' => $highestPriority,
        ]);
        if (!$add_task) {
            return redirect()->back()->with('success', 'Task created successfully');
        }
        return redirect()->back()->with('success', 'Task created successfully');
    }

    
    public function viewtask(){
        $view_tasks = Task::orderBy('priority')->get();
        return view('admin.viewtask', compact('view_tasks'));
    }

    public function editcategory($ref_no){
        $edit_categories = Category::where('ref_no', $ref_no)->first();
        if (!$edit_categories) {
            return redirect()->back()->with('error', 'Category not found');
        }
      

        return view('dashboard.admin.editcategory', compact('edit_categories'));
    }

    
   
    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate(
            ['task_name' => 'required']
        );
        // $highestPriority = Task::max('priority') + 1;
        $edit_task = Task::find($id);
        if (!$edit_task) {
            return redirect()->back()->with('fail', 'Task not found');
        }
        // $edit_task->priority = $highestPriority;
        $edit_task->task_name = $request->task_name;
        $edit_task->update();
   
        return redirect()->back()->with('success', 'You have created successfully');
        
    }

    public function deletecategory($ref_no){
        $delete_categories = Category::where('ref_no', $ref_no)->first();
        if (!$delete_categories) {
            return redirect()->back()->with('error', 'Category not found');
        }
        $delete_categories->delete();
        return redirect()->back()->with('success', 'You have deleted successfully');
    }


    // re-order tasks
    public function reorder(Request $request)
    {
        foreach ($request->order as $index => $taskId) {
            Task::where('id', $taskId)->update(['priority' => $index + 1]);
        }

    return redirect()->back()->with('success', 'You have reorder successfully');

    }



    public function destroy($id){
        $task = Task::findOrFail($id);
        if (!$task) {
            return redirect()->back()->with('error', 'Task not found');
        }
    
        $task->delete();
        return redirect()->back()->with('success', 'Task deleted successfully');

    }

     public function addproject($id){
        $view_task = Task::find($id);
        if (!$view_task) {
            return redirect()->back()->with('fail', 'Task not found');
        }
        $view_tasks = Task::orderBy('priority')->get();
        return view('admin.addproject', compact('view_task', 'view_tasks'));
    }



    public function createproject(Request $request, $id){
        $view_task = Task::find($id);
        if (!$view_task) {
            return redirect()->back()->with('fail', 'Task not found');
        }
        $request->validate([
            'project_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        $add_project = Project::create([
            'project_name' => $request->project_name,
            'description' => $request->description,
            'task_id' => $view_task->id,
        ]);
        if (!$add_project) {
            return redirect()->back()->with('success', 'Project created successfully');
        }
        return redirect()->back()->with('success', 'Project created successfully');
    }


    public function viewtaskproject($id){
        $view_task = Task::find($id);
        if (!$view_task) {
            return redirect()->back()->with('fail', 'Task not found');
        }
        $view_projects = Project::where('task_id', $view_task->id)->latest()->get();
        return view('admin.viewtaskproject', compact('view_task', 'view_projects'));
    }


}
