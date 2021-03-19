<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Taskcontroller extends Controller
{

    public function index()
    {
        $task = Task::all();
        return view("pages.home")->with("tasks", $task);

    }

    public function create()
    {
       return view("pages.add");
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task -> task_column = $request-> task_input_eventName;
        $task -> date = $request-> date;
        $task -> incharge = $request-> task_input_inchargeName;
        $task -> venue = $request-> task_input_venue;
        $task -> done = false;
        $task->save();  
        return redirect()->route('tasks.index');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view("pages.task")->with("task", $task);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view("pages.edit")->with("task", $task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task -> task_column = $request-> task_input_eventName;
        $task -> date = $request-> date;
        $task -> incharge = $request-> task_input_inchargeName;
        $task -> venue = $request-> task_input_venue;
        $task->save();
        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
    public function done($id){
        $task = Task::find($id);
        $task -> done = 1;
        $task->save();
        return redirect()->route('tasks.index');
    }
}
