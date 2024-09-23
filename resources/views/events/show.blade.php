<!-- resources/views/events/show.blade.php -->
@extends('layout.master')

@section('content')
    <div class="event-details">
        <h1>{{ $event->event_name }}</h1>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Location:</strong> {{ $event->location }}</p>
        <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse($event->start_time)->format('F j, Y, g:i a') }}</p>
        <p><strong>End Time:</strong> {{ \Carbon\Carbon::parse($event->end_time)->format('F j, Y, g:i a') }}</p>
        <p><strong>Organizer:</strong> {{ $event->organizer }}</p>

        <!-- Indicate the event status -->
        <p>
            @if(now()->isBefore($event->start_time))
                <strong>Status:</strong> {{ \Carbon\Carbon::parse($event->start_time)->diffInDays(now()) }} days left until the event.
            @elseif(now()->isBetween($event->start_time, $event->end_time))
                <strong>Status:</strong> Ongoing
            @else
                <strong>Status:</strong> Finished
            @endif
        </p>

        <a href="{{ route('events.index') }}" class="back-button">Back to Events</a>
    </div>

@endsection
