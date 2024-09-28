<!-- Sidebar Toggle Button -->
<button id="sidebarToggle">☰</button>

<div class="admin-wrapper">
    <!-- Sidebar -->
    <div class="admin-sidebar" id="sidebar">
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Departments</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Students</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Events</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="admin-content" id="mainContent">
        <h1>Dashboard</h1>
        <!-- Key Metrics -->
        <div class="row">
            <!-- Add cards for metrics here -->
        </div>
    </div>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('sidebarToggle');
    const mainContent = document.getElementById('mainContent');

    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('hide'); // Toggle sidebar visibility
        mainContent.classList.toggle('shift'); // Shift content margin
    });
</script>
