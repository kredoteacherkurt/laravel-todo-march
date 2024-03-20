@extends('layouts.app')

@section('title','Todo')

@section('content')

    <form action="{{route('store')}}" method="post" class="mt-5">
        @csrf
        <div class="row">
            <h2 class="text-center mb-3">Todo App</h2>
            <div class="col-10">
                <input type="text" name="name" id="" class="form-control" placeholder="Enter task">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
    <ul class="mt-5 list-group">
        @forelse ($all_tasks as $task)
            <li class="list-group-item">
                {{$task->name}}
            </li>
        @empty
            <div class="alert alert-info">
              <i class="fa-regular fa-exclamation"></i>  No tasks created yet
            </div>
        @endforelse
    </ul>


@endsection

