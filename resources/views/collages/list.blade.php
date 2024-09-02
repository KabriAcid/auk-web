@extends('layouts.app')

@section('content')
    <h1>Colleges</h1>
    <a href="{{ route('colleges-add-form') }}" class="btn btn-primary">Add College</a>
    <ul>
        @foreach ($colleges as $college)
            <li>{{ $college->college_name }}</li>
        @endforeach
    </ul>
@endsection
