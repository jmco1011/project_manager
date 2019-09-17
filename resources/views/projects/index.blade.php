@extends('layouts.master')
@section('content')
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Descrition</th>
      <th scope="col">Due Date</th>
    </tr>
  </thead>
  <tbody>
   	@foreach($projects as $projects)
   	    <tr>
   		     <td>{{$projects->id}}</td>
   		     <td>{{$projects->title}}</td>
   		     <td>{{$projects->description}}</td>
   		     <td>{{\Carbon\Carbon::parse($projects->due_date)->toFormattedDateString()}}</td>
           <td><a href="/projects/{{$project->id}}">View</a></td>
   	    </tr>
   	@endforeach
  </tbody>

</table>
<a class="btn btn-primary" value="Add new Project" href="/projects/add">Add New Project </a>
@endsection