<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Qalam University Katsina</title>
    <!-- favicon -->
     <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
   <!-- baxi icons -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body style="font-family:figtree;">
    <!-- header -->
    @include('partials.nav')
    <!-- Main Body -->
    <main>
         <!-- Carousel Section -->
         <section id="carouselSection">
            <h2>Our Campus</h2>
            <div id="campusCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/carousel6.jpg') }}" class="d-block w-100" alt="carousel Image 1">
                       
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel7.jpg') }}" class="d-block w-100" alt="carousel Image 2">
                       
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel8.jpg') }}" class="d-block w-100" alt="carousel Image 3">
                       
                    </div>
                </div>
                <a class="carousel-control-prev" href="#campusCarousel" role="button" data-slide="prev">
                    <i class='bx bx-chevron-left' aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#campusCarousel" role="button" data-slide="next">
                    <i class='bx bx-chevron-right' aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- dean message -->
        <section class="dean-message">
        <div class="dean-content">
            <div class="dean-image-container">
                <img src="{{ asset('images/dean.jpg') }}" alt="Dean's Image" class="dean-image">
            </div>
            <div class="dean-text">
                <h2>The Dean CIS Welcome Message</h2>
                <p>Welcome to the Faculty of Computing and Information Science at Al-Qalam University Katsina. Our mission is to provide top-notch education and cutting-edge research opportunities in the fields of computing and information science. We are dedicated to creating an environment that encourages innovation, critical thinking, and lifelong learning.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>



        <!-- Featured News Section -->
    <section class="featured-news">
        <h2>News and Announcement</h2>
        <div class="card-deck">
            <div class="card">
                <img src="{{ asset('images/research.jpeg') }}" class="card-img-top" alt="Research Image">
                <div class="card-body">
                    <h5 class="card-title">Latest Research Achievements</h5>
                    <p class="card-text">Our faculty members have recently published groundbreaking research in the field of artificial intelligence. Read more about their achievements and how it impacts the future of technology.</p>
                    <a href="#" class="btn ">Read More>></a>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/success.jpeg') }}" class="card-img-top" alt="Success Story Image">
                <div class="card-body">
                    <h5 class="card-title">Student Success Stories</h5>
                    <p class="card-text">Meet our alumni who have made significant contributions to the tech industry. Learn about their journeys and how our programs have helped them succeed.</p>
                    <a href="#" class="btn ">Read More>></a>
                </div>
            </div>
            <!-- Additional Cards -->
            <div class="card">
                <img src="{{ asset('images/event1.jpeg') }}" class="card-img-top" alt="Event Image">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <p class="card-text">Join us for our upcoming events and workshops where experts from the industry share their insights on the latest trends in technology.</p>
                    <a href="#" class="btn ">Read More>></a>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/courses.jpeg') }}" class="card-img-top" alt="Courses Image">
                <div class="card-body">
                    <h5 class="card-title">New Courses Offered</h5>
                    <p class="card-text">Explore our newly introduced courses designed to equip you with the skills required for the future job market.</p>
                    <a href="#" class="btn ">Read More>></a>
                </div>
            </div>
            <!-- Add more cards as needed -->
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section container my-5">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-4">
                <h2>About CIS</h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Faculty Overview <i class="bx bx-chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#">Governing Council <i class="bx bx-chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#">Notable Alumni <i class="bx bx-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Right Section -->
            <div class="col-md-6">
                <p>The Faculty of Computing and Information Science at Al-Qalam University Katsina is dedicated to providing the best education and research opportunities in the fields of computing and information science. Our faculty is committed to fostering a learning environment that promotes innovation, critical thinking, and lifelong learning.</p>
                <div class="row text-center">
                    <div class="col-4">
                        <h3>4</h3>
                        <p>Departments</p>
                    </div>
                    <div class="col-4">
                        <h3>1000+</h3>
                        <p>Students</p>
                    </div>
                    <div class="col-4">
                        <h3>19+</h3>
                        <p>Years of History</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


            <!-- Academic Programs Section -->
    <section class="academic-programs container my-5">
        <h2>Academic Programs</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-box p-3">
                    <h3>Bachelor of Science in Software Engineering</h3>
                    <p>This program focuses on developing software solutions that address real-world problems. Students will gain hands-on experience in software design, development, and testing.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-box p-3">
                    <h3>Bachelor of Science in Cyber Security</h3>
                    <p>Our Cyber Security program prepares students to protect information systems from cyber threats. Learn about network security, cryptography, and ethical hacking.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-box p-3">
                    <h3>Bachelor of Science in Computer Science</h3>
                    <p>Explore the fundamentals of computer science, including algorithms, data structures, and programming languages. This program lays the foundation for a career in tech.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-box p-3">
                    <h3>Bachelor of Science in Information Technology</h3>
                    <p>Our IT program covers the management and support of information systems. Gain skills in database management, IT infrastructure, and system administration.</p>
                </div>
            </div>
        </div>
    </section>


 <!-- Quick Links Section -->
<section class="quick-links container my-5">
    <h2 class="text-center">Quick Links</h2>
    <div class="d-flex justify-content-between align-items-start">
        <!-- Left Section (Departments) -->
        <div class="quick-link-section">
            <h3><i class="bx bx-book"></i> Courses</h3>
            <ul class="list-unstyled">
                <li><a href="#">Software Engineering <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Cyber Security <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Computer Science <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Information Technology <i class="bx bx-chevron-right"></i></a></li>
            </ul>
        </div>

        <!-- Vertical Line Divider -->
        <div class="vertical-line"></div>

        <!-- Middle Section (Offices) -->
        <div class="quick-link-section">
            <h3><i class="bx bx-building"></i> Offices</h3>
            <ul class="list-unstyled">
                <li><a href="#">Dean's Office <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Registrar's Office <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Admissions Office <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Finance Office <i class="bx bx-chevron-right"></i></a></li>
            </ul>
        </div>

        <!-- Vertical Line Divider -->
        <div class="vertical-line"></div>

        <!-- Right Section (Directorates) -->
        <div class="quick-link-section">
            <h3><i class="bx bx-sitemap"></i> Directorates</h3>
            <ul class="list-unstyled">
                <li><a href="#">IT Directorate <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Research Directorate <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Student Affairs <i class="bx bx-chevron-right"></i></a></li>
                <li><a href="#">Library Services <i class="bx bx-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>



    </main>

    <!-- footer -->
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</body>

</html>
