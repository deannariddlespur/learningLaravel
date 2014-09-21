<?php
// app/controlers/TasksController.php

class TasksController extends BaseController
{
		public function home()
		{
				$tasks = Task::all();
				return View::make('home')->with('tasks', $tasks);
	     }
	     
	     public function create()
	     {
	     		return View::make('create');
	     }
	     
	     public function edit()
	     {
	     		return View::make('edit');
	     }
	     public function delete()
	     {
	     		return View::make('delete');
	     }
	     public function saveCreate()
	     {
	     		$input = Input::all();
	     		
	     		$task = new Task;
	     		$task->title = $input['title'];
	     		$task->body = $input['body'];
	     		$task->save();
	     		
	     		return Redirect::action('TasksController@home');
	     	}
}