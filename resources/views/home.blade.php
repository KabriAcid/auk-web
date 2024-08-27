@extends('layout.master')
@section('content')
<body style="font-family:figtree;"></body>
   <main>
   @include('partials.carousel')
   @include('partials.dean-message')
   @include('partials.featured-news')
   @include('partials.about-college')
   @include('partials.academic-programmes')
   @include('partials.quick-links')
   </main>
</body>
@endsection