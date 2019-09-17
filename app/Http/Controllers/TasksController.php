<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project

class TasksController extends Controller
{
    public function create(Project $project){
    	return view('task.create')->with('project',$project);
        }
        public function store(Project $project){
            	$project->tasss()->create([
            		'title' =>reques()->title,
            		'description'=>request()->title;
            	]);
            	return redirect('/projects/',$project->id');
            }
}
