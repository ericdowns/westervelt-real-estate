// Swiper Initialization Script
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize Testimonial Swiper if exists
    if (document.querySelector('.testimonial-swiper')) {
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            // Show 2 slides on desktop, 1 on mobile
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoHeight: false, // Important: keep this false to maintain equal heights
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            navigation: {
                nextEl: '.testimonial-button-next',
                prevEl: '.testimonial-button-prev',
            },
        });

        // Update button states based on swiper state
        testimonialSwiper.on('slideChange', function () {
            updateButtonStates(testimonialSwiper, '.testimonial-button-prev', '.testimonial-button-next');
        });
    }

    // Initialize Gallery Swiper if exists
    if (document.querySelector('.gallery-swiper')) {
        const gallerySwiper = new Swiper('.gallery-swiper', {
            // Show 3 slides on desktop, 1 on mobile
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            },
            navigation: {
                nextEl: '.gallery-button-next',
                prevEl: '.gallery-button-prev',
            },
        });

        // Update button states based on swiper state
        gallerySwiper.on('slideChange', function () {
            updateButtonStates(gallerySwiper, '.gallery-button-prev', '.gallery-button-next');
        });
    }

    // Helper function to update button states
    function updateButtonStates(swiper, prevSelector, nextSelector) {
        const prevButton = document.querySelector(prevSelector);
        const nextButton = document.querySelector(nextSelector);
        
        if (!prevButton || !nextButton) return;
        
        // Remove active/inactive classes first
        prevButton.classList.remove('active', 'inactive');
        nextButton.classList.remove('active', 'inactive');
        
        // Add appropriate classes based on current position
        if (swiper.isBeginning && !swiper.params.loop) {
            prevButton.classList.add('inactive');
            nextButton.classList.add('active');
        } else if (swiper.isEnd && !swiper.params.loop) {
            prevButton.classList.add('active');
            nextButton.classList.add('inactive');
        } else {
            // Both buttons active when in middle or loop is enabled
            prevButton.classList.add('active');
            nextButton.classList.add('active');
        }
    }
});