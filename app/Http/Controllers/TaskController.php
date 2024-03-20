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

        return view('todo.create');
    }
    public function store(Request $request){ // $_POST $_GET
        $this->task->name = $request->name;
        $this->task->save();

        return redirect()->back();
    }
}
