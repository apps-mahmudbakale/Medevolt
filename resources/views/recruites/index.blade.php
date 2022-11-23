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
	            <form action="">	
	            	<div class="row">
	            	<div class="col-md-3">
	            	Job-Type
					<select name="type" id="" class="form-control">
						<option>Any</option>
						<option>Full-Time</option>
						<option>Part-Time</option>
						<option>Locum</option>
					</select>            		
	            	</div>
	            	<div class="col-md-3">
	            	Role 
					<select name="role" id="" class="form-control">
						<option>Any</option>
						<option>MedeVolt Doctors</option>
						<option>MedeVolt Nursing</option>
						<option>Medevolt Allied Health</option>
					</select>            		
	            	</div>
	            	<div class="col-md-3">
	            	Location
	            	<input type="text" name="location" class="form-control">             		
	            	</div>
	            	<div class="col-md-3">
	            	<br>
		            <button class="btn btn-info" type="submit"><i class="bi bi-search"></i></button>             		
	            	</div>
	            </div>
	            </form>
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
					  @role('admin')
	                  <td>{{$recruite->phone}}</td>
					  @else
	                  <td>*********</td>
					  @endrole
	                  <td>{{$recruite->job_type ?? ''}}</td>
	                  <td>{{$recruite->career}}</td>
	                  <td class="btn-group">
	                  	@can('read-recruites')
	                  	<a href="{{route('admin.recruites.show', $recruite->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
	                  	@endcan
	                  	@can('delete-recruites')
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

	<script type="text/javascript">
		const datatables = select('.datatable', true)
		datatables.forEach(datatable => {
		  new simpleDatatables.DataTable(datatable);
		})
	</script>

 @endsection