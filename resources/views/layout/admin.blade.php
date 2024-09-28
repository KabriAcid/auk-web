<!-- resources/views/layout/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Add your custom stylesheets here -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<div class="admin-wrapper">
    <!-- Sidebar -->
    <div class="admin-sidebar">
        <nav>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.colleges.index') }}">Colleges</a></li>
                <li><a href="{{ route('admin.departments.index') }}">Departments</a></li>
                <li><a href="{{ route('admin.programs.index') }}">Programs</a></li>
                <li><a href="{{ route('admin.staff.index') }}">Staff Management</a></li>
                <li><a href="{{ route('admin.courses.index') }}">Courses</a></li>
                <li><a href="{{ route('admin.events.index') }}">Events</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="admin-content">
        <div class="admin-title">ADMIN PANEL</div>
        <!-- Your main content goes here -->
        @yield('content')
    </div>
</div>
</body>
</html>

