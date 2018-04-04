@extends('layouts.main')
@section('content')

    <!-- Begin page content -->
<div>

    <h1>Task {{ $task->id}}:<li>{{ $task->name }}</li></h1>
</div>
    @endsection

