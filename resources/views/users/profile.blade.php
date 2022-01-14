@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>User Profile</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">User Profile</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->
	    <section class="section profile">
	      <div class="row">
	        <div class="col-xl-4">

	          <div class="card">
	            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

	              <img src="{{asset('img/avatar.jpg')}}" alt="Profile" class="rounded-circle">
	              <h2>{{auth()->user()->name}}</h2>
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
	                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"> Profile Details</button>
	                </li>

	                <li class="nav-item">
	                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Details</button>
	                </li>
	              </ul>
	              <div class="tab-content pt-2">

	                <div class="tab-pane fade show active profile-overview" id="profile-overview">
	                  <h5 class="card-title">User Details</h5>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
	                    <div class="col-lg-9 col-md-8">{{auth()->user()->name}}</div>
	                  </div>

	                  <div class="row">
	                    <div class="col-lg-3 col-md-4 label">Email</div>
	                    <div class="col-lg-9 col-md-8">{{auth()->user()->email}}</div>
	                  </div>
	                </div>

	                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

	                  <!-- Profile Edit Form -->
	                  <form action="{{route('admin.update.profile', auth()->user()->id)}}" method="POST">
	                  @csrf
	                  @method('PUT') 
	                   <div class="row mb-3">
	                      <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
	                      <div class="col-md-8 col-lg-9">
	                        <input name="name" type="text" class="form-control" id="name" value="{{auth()->user()->name}}">
	                      </div>
	                    </div>
	                    <div class="row mb-3">
	                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
	                      <div class="col-md-8 col-lg-9">
	                        <input name="email" type="email" class="form-control" id="email" value="{{auth()->user()->email}}">
	                      </div>
	                    </div>
	                    <div class="text-center">
	                      <button type="submit" class="btn btn-primary">Save Changes</button>
	                    </div>
	                  </form><!-- End Profile Edit Form -->

	                </div>

	              </div><!-- End Bordered Tabs -->

	            </div>
	          </div>

	        </div>
	      </div>
	    </section>

	  </main><!-- End #main -->

 @endsection