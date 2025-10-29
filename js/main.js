// js/main.js

$(document).ready(function() {
    
    // ===================================
    // Banner Slider Functionality
    // ===================================
    let currentSlide = 0;
    const slides = $('.slide');
    const dots = $('.slider-dot');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.removeClass('active');
        dots.removeClass('active');
        $(slides[index]).addClass('active');
        $(dots[index]).addClass('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);

    // Manual slide control via dots
    $('.slider-dot').click(function() {
        currentSlide = $(this).data('slide');
        showSlide(currentSlide);
    });

    
    // ===================================
    // Smooth Scrolling for Navigation
    // ===================================
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        const target = $($(this).attr('href'));
        
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 70
            }, 800);
            
            // Update active nav link
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            
            // Close mobile menu if open
            $('.navbar-collapse').removeClass('show');
        }
    });

    
    // ===================================
    // Navbar Scroll Effects
    // ===================================
    $(window).scroll(function() {
        const scrollTop = $(this).scrollTop();
        
        // Change navbar style on scroll
        if (scrollTop > 50) {
            $('.navbar').css({
                'padding': '10px 0',
                'box-shadow': '0 5px 20px rgba(0,0,0,0.15)'
            });
        } else {
            $('.navbar').css({
                'padding': '15px 0',
                'box-shadow': '0 2px 10px rgba(0,0,0,0.1)'
            });
        }

        // Update active navigation based on scroll position
        $('section').each(function() {
            const sectionTop = $(this).offset().top - 100;
            const sectionBottom = sectionTop + $(this).outerHeight();
            const scroll = $(window).scrollTop();
            const sectionId = $(this).attr('id');

            if (scroll >= sectionTop && scroll < sectionBottom) {
                $('.nav-link').removeClass('active');
                $('.nav-link[href="#' + sectionId + '"]').addClass('active');
            }
        });
    });

    
    // ===================================
    // Counter Animation
    // ===================================
    function animateCounter() {
        $('.counter').each(function() {
            const $this = $(this);
            const countTo = parseInt($this.text());
            
            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }

    // Trigger counter animation when stats section comes into view
    let counterAnimated = false;
    $(window).scroll(function() {
        const statsSection = $('.stats-section');
        
        if (statsSection.length) {
            const statsTop = statsSection.offset().top;
            const scrollTop = $(window).scrollTop();
            const windowHeight = $(window).height();

            if (!counterAnimated && scrollTop + windowHeight > statsTop + 100) {
                animateCounter();
                counterAnimated = true;
            }
        }
    });

    
    // ===================================
    // Scroll Animation for Cards
    // ===================================
    function animateOnScroll() {
        $('.feature-card, .service-card').each(function() {
            const elementTop = $(this).offset().top;
            const elementBottom = elementTop + $(this).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom - 100) {
                $(this).css({
                    'opacity': '1',
                    'transform': 'translateY(0)'
                });
            }
        });
    }

    // Initial animation setup for cards
    $('.feature-card, .service-card').css({
        'opacity': '0',
        'transform': 'translateY(30px)',
        'transition': 'all 0.6s ease'
    });

    // Trigger animation on scroll
    $(window).scroll(animateOnScroll);
    animateOnScroll(); // Initial check on page load

    
    // ===================================
    // Form Submissions
    // ===================================
    
    // Contact Form Submission
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        
        // Show success message
        alert('Thank you for contacting us! We will get back to you soon.');
        
        // Reset form
        this.reset();
    });

    // Appointment Form Submission
    $('#appointmentForm').submit(function(e) {
        e.preventDefault();
        
        // Show success message
        alert('Your appointment request has been submitted successfully! We will confirm your appointment shortly.');
        
        // Close modal
        $('#appointmentModal').modal('hide');
        
        // Reset form
        this.reset();
    });

    
    // ===================================
    // Mobile Menu Handling
    // ===================================
    $('.navbar-nav a').click(function() {
        if ($(window).width() < 992) {
            $('.navbar-collapse').collapse('hide');
        }
    });

    
    // ===================================
    // Preloader (Optional)
    // ===================================
    $(window).on('load', function() {
        // Fade in animations
        $('body').css('opacity', '1');
    });

    
    // ===================================
    // Back to Top Button (Optional Enhancement)
    // ===================================
    // Add this HTML to your page if you want a back-to-top button:
    // <button id="backToTop" class="back-to-top"><i class="fas fa-arrow-up"></i></button>
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#backToTop').fadeIn();
        } else {
            $('#backToTop').fadeOut();
        }
    });

    $('#backToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

});


// ===================================
// Additional Helper Functions
// ===================================

// Phone number validation (can be added to forms)
function validatePhone(phone) {
    const phoneRegex = /^[6-9]\d{9}$/;
    return phoneRegex.test(phone);
}

// Email validation
function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}