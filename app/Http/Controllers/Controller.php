<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $users = User::with('projects','roles')->get();
        $projects = Project::with('users')->get();
        return view('welcome',compact('users','projects'));
    }
    public function post(Request $request)
    {
        $user = User::all()->where('email' , $request->email)->first();
        $project = Project::all()->where('name',$request->location)->pluck('id');
        $user->projects()->attach($project);
        $users = User::with('projects','roles')->get();
        $projects = Project::with('users')->get();
        return view('welcome',compact('users','projects'));


    }
}
