@extends('layouts.master')
@section('content')
    <div class = 'container'>
      <form method="POST" action="/projects/{{$project->id}}/tasks">
  <div class="form-group">
  	@csrf
    <label for="Title">Title</label>
    <input type="text" class="form-control" name='Task'  placeholder="Title">
  </div>
  <div class="form-group">
    <label for="Description">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Description">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection