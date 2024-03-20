<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    private $task;
    public function __construct(Task $task) // $task = new Task;
    {

        $this->task = $task;
    }
    public function index(){

        $all_tasks = $this->task->all();

        return view('todo.create')
                ->with('all_tasks', $all_tasks);
    }
    public function store(Request $request){ // $_POST $_GET
        $this->task->name = $request->name;
        $this->task->save();

        return redirect()->back();
    }
}
