@extends('layouts.master')
@section('content')

<a class="btn btn-primary" value="Add new Project" href="/projects/{{$project->id}}/tasks">Add New Task</a>
@endsection