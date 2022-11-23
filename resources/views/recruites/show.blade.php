@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>View User</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item"><a href="{{route('admin.recruites.index')}}">Recruites</a></li>
	        <li class="breadcrumb-item active">View Recruites</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->
	    <section class="section profile">
	      <div class="row">
	        <div class="col-xl-4">

	          <div class="card">
	            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

	              <img src="{{asset('img/avatar.jpg')}}" alt="Profile" class="rounded-circle">
	              <h2>{{$recruite->title}}  {{$recruite->firstname}} {{$recruite->lastname}}</h2>
	              <h3></h3>
	            </div>
	          </div>

	        </div>

	        <div class="col-xl-8">

	          <div class="card">
	            <div class="card-body pt-3">
	              <!-- Bordered Tabs -->
	              <ul class="nav nav-tabs nav-tabs-bordered">

	                <li class="nav-item">
	                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"> Recruite Deatails</button>
	                </li>

	               {{--  <li class="nav-item">
	                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit User</button>
	                </li> --}}
	              </ul>
	              <div class="tab-content pt-2">

	                <div class="tab-pane fade show active profile-overview" id="profile-overview">
	                  <h5 class="card-title">Recruite Details</h5>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
	                    <div class="col-lg-9 col-md-8">{{$recruite->title}} {{$recruite->firstname}} {{$recruite->lastname}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Email</div>
						@role('admin')
	                    <div class="col-lg-9 col-md-8">{{$recruite->email}}</div>
						@else
						<div class="col-lg-9 col-md-8">***********</div>
						@endrole
	                  </div>
	                   <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Phone</div>
						@role('admin')
						<div class="col-lg-9 col-md-8">{{$recruite->phone}}</div>
						@else
						<div class="col-lg-9 col-md-8">***********</div>
						@endrole
	                  </div>
	                   <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Job Applied</div>
	                    <div class="col-lg-9 col-md-8">{{ optional($recruite->job)->getJobTitle() ?? ''}}</div>
	                  </div>
	                   <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Job Type</div>
	                    <div class="col-lg-9 col-md-8">{{$recruite->job_type}}</div>
	                  </div>
	                   <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Career</div>
	                    <div class="col-lg-9 col-md-8">{{$recruite->career}}</div>
	                  </div>
	                   <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Role</div>
	                    <div class="col-lg-9 col-md-8">{{$recruite->role}}</div>
	                  </div>
	                   <div class="row">
						@role('admin')
	                    <div class="col-lg-9 col-md-8"><a href="{{asset('storage/cv/'.$recruite->cv)}}" download class="btn btn-primary btn-block"><i class="bi bi-card-text"></i> Download Cv</a></div>
						@endrole
	                  </div>
	                </div>
	              </div><!-- End Bordered Tabs -->

	            </div>
	          </div>

	        </div>
	      </div>
	    </section>

	  </main><!-- End #main -->

 @endsection
