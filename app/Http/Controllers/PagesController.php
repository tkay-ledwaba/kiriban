<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Session;

class PagesController extends Controller
{
    //
    public function dashboard(){

        $projects = DB::table('projects')->select('*')->get();
        return view("dashboard",compact('projects'));
    }

    public function projects(){
        $projects = DB::table('projects')->get();
        return view("projects", ["projects" => $projects]);
    }

    public function diary(){
        return view("diary");
    }

    public function team(){
        return view("team");
    }
}
