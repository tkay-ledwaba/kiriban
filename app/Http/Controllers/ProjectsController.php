<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class ProjectsController extends Controller
{

    public function project(){
        return view("projects.project");
    }

    //
    public function addProject(Request $request){

        $request->validate([
            'name' => 'required',
            'overview' => 'required',
            'objectives' => 'required',
            'due_date' => 'required',
            'goals' => 'required',
            'owner' => 'required',
            'uid' => 'required'
        ]);

        $project = new Project();
        $project ->name = $request->name;
        $project ->overview = $request->overview;
        $project ->objectives = $request->objectives;
        $project ->due_date= $request->due_date;
        $project ->goals= $request->goals;
        $project ->owner = $request->owner;
        $project ->uid = $request->uid;

        //Save data
        $res = $project -> save();

        // Get Response
        if ($res){
            // If response is successful redirect
            return redirect()->intended(route('projects'));
        } else {
            // If response was not successful display error
            return back()-> with('error', 'Something wrong');
        }
    }

    public function tasks(Request $request ){

        $project_id = $request->route('id');

        return view("tasks.task");
    }

}
