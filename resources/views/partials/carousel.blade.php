<section id="carouselSection">
    <link rel="stylesheet" href="public/css/style.css">
   
    <div id="campusCarousel" class="carousel slide" data-ride="carousel">
        <!-- Dot navigation indicators -->
        <ol class="carousel-indicators">
            <li data-target="#campusCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#campusCarousel" data-slide-to="1"></li>
            <li data-target="#campusCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/IMG_0030.JPG') }}" class="d-block" alt="carousel Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_0524.JPG') }}" class="d-block" alt="carousel Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_0501.JPG') }}" class="d-block" alt="carousel Image 3">
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
