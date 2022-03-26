@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Update Job</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item"><a href="{{route('admin.jobs.index')}}">jobs</a></li>
	        <li class="breadcrumb-item active">Update Job</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">
	      		<div class="card">
	      		  <div class="card-body">
	      		    <h5 class="card-title">Update Job</h5>
	      		    <!-- No Labels Form -->
	      		    <form  action="{{route('admin.jobs.update', $job->id)}}" method="POST" class="row g-3">
	      		    	@csrf
	      		    	@method('PUT')
	      		      <div class="col-md-6">
	      		        <input type="text" name="role" value="{{ old('firstname', isset($job) ? $job->role : '') }}" class="form-control" placeholder="Role">
	      		      </div>
	      		      <div class="col-md-6">
	      		        <input type="text" name="location" value="{{ old('firstname', isset($job) ? $job->location : '') }}" class="form-control" placeholder="Location">
	      		      </div>
	      		      <div class="col-md-6">
	      		        <input type="number" name="qty" value="{{ old('firstname', isset($job) ? $job->qty : '') }}" class="form-control" placeholder="Quantity">
	      		      </div>
	      		      <div>
	      		        <button type="submit" class="btn btn-primary">Submit</button>
	      		      </div>
	      		    </form><!-- End No Labels Form -->

	      		  </div>
	      		</div>
	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection