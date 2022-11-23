<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Services\LogsService;


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
    public function index(LogsService $analyticsLogsService)
    {
        $users = User::count();   
        $jobs = Job::count();   
        $recruites = Application::count();   
        $recents = Application::orderBy('id', 'desc')->take(5)->get();
        $doctors = Application::where('career', '=', 'MedeVolt Doctors')->count();
        $nursing = Application::where('career', '=', 'MedeVolt Nursing')->count();
        $allied = Application::where('career', '=', 'MedeVolt Allied Health')->count();
        $analytics = $analyticsLogsService->getAnalytics();
        
        return view('home',[
            'users' => $users, 
            'jobs' => $jobs, 
            'recruites' => $recruites,
            'recents'  => $recents,
            'doctors' => $doctors,
            'nursing' => $nursing,
            'allied' => $allied,
            'analytics' => $analytics,
        ]);
    }
}
