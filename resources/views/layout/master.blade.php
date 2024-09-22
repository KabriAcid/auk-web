<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/stafflist.css') }}">
    <!-- Add any other stylesheets or scripts here -->
</head>
<body>
    @include('partials.top')
    @include('partials.nav')
    
    @yield('content')

    @include('partials.footer')
</body>
</html>
