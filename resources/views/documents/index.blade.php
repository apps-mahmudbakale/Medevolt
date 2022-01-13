@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Documents</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">Documents</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">

	        <div class="card">
	          <div class="card-body">
	            <h5 class="card-title">Documents</h5>
	            <!-- Table with stripped rows -->
	            <table class="table datatable">
	              <thead>
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Full Name</th>
	                  <th scope="col">Date Uploaded</th>
	                  <th scope="col">Action</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach($documents as $key => $document)
	                <tr>
	                  <th scope="row">{{$loop->iteration}}</th>
	                  <td>{{$document->fullname}}</td>
	                  <td>{{$document->created_at->diffForHumans()}}</td>
	                  <td class="btn-group">
	                  	@can('read-users')
	                  	<a href="{{route('admin.documents.show', $document->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
	                  	@endcan
	                  	@can('delete-users')
	                  	<a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('del#{{$document->id}}').submit();"><i class="bi bi-trash"></i></a>
	                  	<form id="del#{{$document->id}}" action="{{ route('admin.documents.destroy', $document->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
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