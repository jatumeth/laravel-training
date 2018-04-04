@extends('layouts.main')
@section('content')
    <!-- Begin page content -->

    <h1>Task</h1>
    <ul>
    @foreach($tasks as $task)
    <a href="/tasks/{{ $task->id}}">
    <li>{{ $task->name }}</li>
    </a>
    @endforeach
    </ul>

@endsection

