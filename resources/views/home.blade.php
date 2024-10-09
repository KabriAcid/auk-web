@extends('layout.master')

@section('content')
<body style="font-family:figtree;"></body>
<main>
    <div class="section">
        @include('partials.carousel')
    </div>
    <div class="section">
        @include('partials.dean-message', ['college' => $college]) 
    </div>
    <div class="section">
        @include('partials.featured-news')
    </div>
    <div class="section">
        @include('partials.about-college')
    </div>
    <div class="section">
        @include('partials.academic-programmes', ['programs' => $programs])
    </div>
    <div class="section">
        @include('partials.quick-links')
    </div>
</main>
</body>
@endsection
