@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>View Documents</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">View Documents</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->
	    <section class="section profile">
	      <div class="row">
	        <div class="col-xl-4">

	          <div class="card">
	            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

	              <img src="{{asset('img/avatar.jpg')}}" alt="Profile" class="rounded-circle">
	              <h2>{{$document->fullname}}</h2>
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
	                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"> Documents</button>
	                </li>
	              </ul>
	              <div class="tab-content pt-2">

	                <div class="tab-pane fade show active profile-overview" id="profile-overview">
	              		<div class="card">
	              		  <div class="card-body">
	              		    <h5 class="card-title">Uploaded Documents</h5>

	              		    <!-- List group with custom content -->
	              		    <ol class="list-group list-group-numbered">
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Cv</div>
	              		          {{$document->cv}}
	              		        </div>
	              		        <a href="/storage/cv/{{$document->cv}}" download><span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Guarantor Form</div>
	              		          	{{$document->cv}}
	              		        </div>
	              		       <a href="/storage/documents/{{$document->refone}}" download><span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Reference One</div>
	              		         	{{$document->refone}} 	
	              		        </div>
	              		       <a href="/storage/documents/{{$document->refone}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Reference Two</div>
	              		         	{{$document->reftwo}} 	
	              		        </div>
	              		       <a href="/storage/documents/{{$document->reftwo}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Professional Degree/Certificate</div>
	              		         	{{$document->degree}} 	
	              		        </div>
	              		       <a href="/storage/documents/{{$document->degree}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Professional Licence</div>
	              		         	{{$document->licence}} 	
	              		        </div>
	              		       <a href="/storage/documents/{{$document->licence}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Drivers Licence</div>
	              		         	{{$document->drivers_licence}} 	
	              		        </div>
	              		       <a href="/storage/documents/{{$document->drivers_licence}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Photo</div>
	              		         	{{$document->photo}} 	
	              		        </div>
	              		       <a href="/storage/photos/{{$document->photo}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Proof of Address One</div>
	              		         	{{$document->proof_add_one}} 	
	              		        </div>
	              		       <a href="/storage/documents/{{$document->proof_add_one}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		      <li class="list-group-item d-flex justify-content-between align-items-start">
	              		        <div class="ms-2 me-auto">
	              		          <div class="fw-bold">Proof of Address Two</div>
	              		         	{{$document->proof_add_two}} 	
	              		        </div>
	              		       <a href="/storage/documents/{{$document->proof_add_two}}" download> <span class="badge bg-primary rounded-pill">Download</span></a>
	              		      </li>
	              		    </ol><!-- End with custom content -->

	              		  </div>
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