<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $tasks = Task::all();
       return view("task.tasks", compact("tasks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("task.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {  
      $formField = $request->validated();
      $formField["profile_id"] = Auth::id();

       Task::create($formField);
       return to_route("tasks.index")->with("success", "task added successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view("task.edit", compact("task"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {   
        //validation
        $formField = $request->validated();
        $task->fill($formField)->save();
        
        return to_route("tasks.index")->with("success", "task updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return to_route("tasks.index")->with("success", "task deleted successfuly");
    }
}
