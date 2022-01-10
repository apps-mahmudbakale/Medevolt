<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Application;
use App\Models\Job;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         if ($request->hasFile('cv')) {
            $fileNameWithExt = $request->file('cv')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('cv')->getClientOriginalExtension();

            $cv = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cv')->storeAs('public/cv', $cv);
        } else {
            $cv = 'no-file.pdf';
        }

        $application = Application::create([
            'title' => $request->title,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'career' => $request->career,
            'role' => $request->role,
            'cv' => $cv
        ]);

        Mail::to($request->email)->send(new WelcomeMail());

        return redirect()->route('register-now')->with('success', 'Added');
    }

    public function roles()
    {
        $roles = Job::all();

        return view('careers.latest-roles', compact('roles'));
    }

    public function welcome()
    {
        $roles = Job::paginate(5);

        return view('welcome', compact('roles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Job::find($id);
        return view('careers.job', compact('role'));
        // dd($role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
