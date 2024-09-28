@extends('layout.admin')

@section('content')
<div class="container">
    <h2>Dashboard</h2>
    
    <!-- Key Metrics -->
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Staff Members</h5>
                    <p class="card-text">{{ $staffCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Departments</h5>
                    <p class="card-text">{{ $departmentCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Programs</h5>
                    <p class="card-text">{{ $programCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">{{ $studentCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Courses</h5>
                    <p class="card-text">{{ $courseCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <p class="card-text">{{ $eventCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add more sections such as recent activities or quick links here -->
    
</div>
@endsection
