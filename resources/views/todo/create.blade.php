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
@endsection

