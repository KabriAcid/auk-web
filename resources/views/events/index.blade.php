@extends('layout.master')

@section('content')
    <h1>Upcoming Events</h1>

    <div class="event-cards">
        @foreach ($events as $event)
            <div class="event-card">
                <h2>{{ $event->event_name }}</h2>
                <p>{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
                <p><strong>Location:</strong> {{ $event->location }}</p>
                <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse($event->start_time)->format('F j, Y, g:i a') }}</p>
                <p><strong>Organizer:</strong> {{ $event->organizer }}</p>
                <a href="{{ route('events.show', $event->id) }}" class="more-details-button">More Details</a>
            </div>
        @endforeach
    </div>
@endsection
