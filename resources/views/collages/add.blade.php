@extends('layouts.app')

@section('content')
    <h1>Add College</h1>
    <form action="{{ route('colleges-save') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="college_name">College Name</label>
            <input type="text" name="college_name" id="college_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add College</button>
    </form>
@endsection
