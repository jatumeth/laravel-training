@extends('layouts.main')
@section('content')
<p>1</p>
<p>2</p>
<p>3</p>
<div>
<form method="POST" action="/tasks">
    {{csrf_field()}}

    <label for="name">Task Name</label>
    <input type="text" name="name" class="form-control" id="name">
    <input type="submit" name="submit" value="submit!">
</form>
</div>
@endsection
