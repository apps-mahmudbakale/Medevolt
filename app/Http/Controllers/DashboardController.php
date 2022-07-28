<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();   
        $jobs = Job::count();   
        $recruites = Application::count();   
        $recents = Application::orderBy('id', 'desc')->take(5)->get();
        $doctors = Application::where('career', '=', 'MedeVolt Doctors')->count();
        $nursing = Application::where('career', '=', 'MedeVolt Nursing')->count();
        $allied = Application::where('career', '=', 'MedeVolt Allied Health')->count();
        
        return view('home',[
            'users' => $users, 
            'jobs' => $jobs, 
            'recruites' => $recruites,
            'recents'  => $recents,
            'doctors' => $doctors,
            'nursing' => $nursing,
            'allied' => $allied
        ]);
    }
}
