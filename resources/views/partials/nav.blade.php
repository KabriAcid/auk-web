<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computing and Information Sciences - Al-Qalam University</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>

<body>
    <header>
        <!-- Top Navbar -->
        <div class="top-navbar">
            <nav class="navbar">
                <ul class="left">
                    <li><a href="#"><i class="bx bx-phone"></i> +2349037237738</a></li>
                    <li><a href="mailto:info@example.com"><i class="bx bx-envelope"></i> info@cis/auk.com</a></li>
                    <li><a href="#"><i class="bx bx-map"></i> P.M.B 820101, Katsina, Nigeria</a></li>
                </ul>
                <ul class="right">
                    <li><a href="https://twitter.com/yourprofile" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="https://www.facebook.com/yourprofile" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="https://www.instagram.com/yourprofile" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                </ul>
            </nav>
        </div>

        <!-- Bottom Navbar -->
        <div class="bottom-navbar">
            <div class="logo-container">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="school-logo">
                <div>
                    <h1>Computing and Information Sciences</h1>
                    <p>Al-Qalam University Katsina</p>
                </div>
            </div>
            <div>
                <ul class="bottom-nav text-capitalize">
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Academics</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="{{route('staff-list')}}">staff</a></li>
                    <li><a href="#">Students</a></li>
                </ul>
            </div>
            <button class="menu-toggle" id="menu-toggle-btn">
                <!-- Toggle Menu Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    id="menu-icon">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
                <!-- Cancel Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    id="cancel-icon" style="display: none;">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <nav class="mobile-menu" id="mobile-menu" style="display: none;">
            <ul>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Academics</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="{{route('staff-list')}}">staff</a></li>
                <li><a href="#">Students</a></li>
            </ul>
        </nav>
        </div>
    </header>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var menuToggleBtn = document.getElementById('menu-toggle-btn');
            var menuIcon = document.getElementById('menu-icon');
            var cancelIcon = document.getElementById('cancel-icon');
            var mobileMenu = document.getElementById('mobile-menu');

            // Toggle mobile menu display and icons on button click
            menuToggleBtn.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent the click from closing the menu immediately

                // Toggle between menu icon and cancel icon
                menuIcon.style.display = menuIcon.style.display === 'none' ? 'block' : 'none';
                cancelIcon.style.display = cancelIcon.style.display === 'none' ? 'block' : 'none';

                // Toggle the mobile menu display
                mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'flex' : 'none';
            });

            // Hide the mobile menu when clicking outside of it
            document.addEventListener('click', function(e) {
                if (mobileMenu.style.display === 'flex' && !mobileMenu.contains(e.target) && !menuToggleBtn.contains(e.target)) {
                    mobileMenu.style.display = 'none';
                    menuIcon.style.display = 'block'; // Reset to show the menu icon
                    cancelIcon.style.display = 'none'; // Hide the cancel icon
                }
            });

            // Optional: Hide the mobile menu and reset icons when the window is resized above a certain width
            window.addEventListener('resize', function() {
                if (window.innerWidth > 992) {
                    mobileMenu.style.display = 'none';
                    menuIcon.style.display = 'block';
                    cancelIcon.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>