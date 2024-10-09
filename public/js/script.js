$(document).ready(function () {
    // Initialize Carousel
    $('#campusCarousel').carousel({
        interval: 5000, // Change slide every 5 seconds
        pause: 'hover' // Pause on hover
    });

    // Optional: Smooth scroll for internal links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        const target = this.hash;
        const $target = $(target);

        $('html, body').animate({
            scrollTop: $target.offset().top
        }, 5000, function () { // Duration set to 5 seconds
            window.location.hash = target; // Add the hash to the URL
        });
    });

    // Scroll Animation for Sections
    const sections = $('.section');
    const delay = 300; // Delay in milliseconds before sections start to appear

    function checkVisibility() {
        const triggerBottom = window.innerHeight / 5 * 4; // Adjust trigger point if necessary

        sections.each(function (index) {
            const box = $(this).get(0).getBoundingClientRect();
            const section = $(this); // Store the section reference

            if (box.top < triggerBottom) {
                setTimeout(() => {
                    section.addClass('visible');
                }, delay * index); // Add an increasing delay for each section
            } else {
                section.removeClass('visible');
            }
        });
    }

    $(window).on('scroll', checkVisibility);
    checkVisibility(); // Initial check
});
