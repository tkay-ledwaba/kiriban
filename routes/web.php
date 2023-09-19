<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('auth.login');
});

Route::controller(AuthController::class)->group(
    function(){
        Route::get('register', 'register')->name('register');
        Route::post('register', 'registerUser')->name('registerUser');

        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginUser')->name('loginUser');

        Route::get('logout', 'logout')->name('logout');
    }
);

Route::middleware('auth')->group(
    function (){
        Route::get('dashboard', function(){
            $projects = DB::table('projects')->get();
            return view("dashboard", ["projects" => $projects]);


        })->name('dashboard');

        Route::get('projects', function(){

            $projects = DB::table('projects')->get();
            return view("projects", ["projects" => $projects]);

        })->name('projects');

        Route::get('team', function(){
            return view('team');
        })->name('team');


    }
);
