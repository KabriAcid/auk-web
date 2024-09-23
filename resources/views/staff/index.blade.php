@extends('layout.master')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/stafflist.css') }}">
@endsection

@section('content')
    <h1>Staff List</h1>
    <div class="staff-list">
        @foreach ($staff as $member)
            <div class="staff-member">
                @if($member->image)
                    <img src="{{ asset($member->image) }}" alt="{{ $member->first_name }} {{ $member->last_name }}" class="staff-image">
                @else
                    <img src="{{ asset('path/to/default-image.jpg') }}" alt="No Image" class="staff-image">
                @endif
                <h2 class="staff-name">{{ $member->first_name }} {{ $member->last_name }}</h2>
                <p class="staff-rank">Rank: {{ $member->rank }}</p>
                <p class="staff-biography">{{ Str::limit($member->biography, 150) }}</p>
            </div>
        @endforeach
    </div>
@endsection
