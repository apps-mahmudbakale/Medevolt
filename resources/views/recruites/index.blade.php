@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Recruites</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">Recruites</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">

	        <div class="card">
	          <div class="card-body">
	            <h5 class="card-title">Recruites</h5>
	            <!-- Table with stripped rows -->
	            <table class="table datatable">
	              <thead>
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Title</th>
	                  <th scope="col">Name</th>
	                  <th scope="col">Phone</th>
	                  <th scope="col">Job Type</th>
	                  <th scope="col">Role</th>
	                  <th scope="col">Action</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach($recruites as $key => $recruite)
	                <tr>
	                  <th scope="row">{{$loop->iteration}}</th>
	                  <td>{{$recruite->title}}</td>
	                  <td>{{$recruite->firstname}} {{$recruite->lastname}}</td>
	                  <td>{{$recruite->phone}}</td>
	                  <td>Job Title</td>
	                  <td>{{$recruite->career}}</td>
	                  <td class="btn-group">
	                  	@can('read-users')
	                  	<a href="{{route('admin.recruites.show', $recruite->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
	                  	@endcan
	                  	@can('delete-users')
	                  	<a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('del#{{$recruite->id}}').submit();"><i class="bi bi-trash"></i></a>
	                  	<form id="del#{{$recruite->id}}" action="{{ route('admin.recruites.destroy', $recruite->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
	                  	@endcan
	                  </td>
	                </tr>
	                @endforeach
	              </tbody>
	            </table>
	            <!-- End Table with stripped rows -->

	          </div>
	        </div>

	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection