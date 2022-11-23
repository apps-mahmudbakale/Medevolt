@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Question</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.questions.index') }}">Questions</a></li>
                    <li class="breadcrumb-item active">Create Question</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Question</h5>
                            <!-- No Labels Form -->
                            <form action="{{ route('admin.questions.store') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-12">
                                    Audience
                                    <select class="form-control" name="audience">
                                        <option>Medevolt Doctors</option>
                                        <option>Medevolt Nursing</option>
                                        <option>Medevolt Allied Health</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    Question
                                    <textarea class="form-control" name="question"></textarea>
                                </div>
                                <div class="col-md-6">
                                    Option A
                                    <input type="text" name="options[]" class="form-control" placeholder="Option">
                                </div>
                                <div class="col-md-6">
                                    Option B
                                    <input type="text" name="options[]" class="form-control" placeholder="Option">
                                </div>
                                <div class="col-md-6">
                                    Option C
                                    <input type="text" name="options[]" class="form-control" placeholder="Option">
                                </div>
                                <div class="col-md-6">
                                    Correct Option
                                    <input type="text" name="correct_option" class="form-control" placeholder="Option">
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
