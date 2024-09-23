<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Add your stylesheets here -->
</head>
<body>
    <div class="navbar">
        <!-- Navigation links go here -->
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.colleges.index') }}">Colleges</a>
        <a href="{{ route('admin.departments.index') }}">Departments</a>
        <a href="{{ route('admin.programs.index') }}">Programs</a>
        <a href="{{ route('admin.staff.index') }}">Staff Management</a>
        <a href="{{ route('admin.courses.index') }}">Courses</a>
        <a href="{{ route('admin.events.index') }}">Events</a>
        <!-- Add other links as needed -->
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
