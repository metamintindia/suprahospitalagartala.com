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
    if (slides.length > 0) {
        setInterval(nextSlide, 5000);
    }

    // Manual slide control via dots
    $('.slider-dot').click(function() {
        currentSlide = $(this).data('slide');
        showSlide(currentSlide);
    });

    
    // ===================================
    // Smooth Scrolling for Navigation
    // ===================================
    $('a[href^="#"]').click(function(e) {
        const href = $(this).attr('href');
        
        // Only prevent default for anchor links, not for empty hrefs
        if (href && href !== '#' && href.startsWith('#')) {
            const target = $(href);
            
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 800);
                
                // Update active nav link
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
                
                // Close mobile menu if open
                $('.navbar-collapse').removeClass('show');
            }
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
        $('.feature-card, .service-card, .doctor-card').each(function() {
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
    $('.feature-card, .service-card, .doctor-card').css({
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
    // Back to Top Button
    // ===================================
    // Create back to top button if it doesn't exist
    if ($('#backToTop').length === 0) {
        $('body').append('<button id="backToTop" class="back-to-top"><i class="fas fa-arrow-up"></i></button>');
    }
    
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


    // ===================================
    // Doctor Filter Functionality (for doctors page)
    // ===================================
    $('.filter-btn').click(function() {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        
        const filter = $(this).data('filter');
        
        if (filter === 'all') {
            $('.doctor-item').fadeIn(300);
        } else {
            $('.doctor-item').hide();
            $('.doctor-item[data-category="' + filter + '"]').fadeIn(300);
        }
    });


    // ===================================
    // Doctor Appointment Booking
    // ===================================
    $('.btn-book-now').click(function() {
        const doctorName = $(this).data('doctor');
        const specialty = $(this).data('specialty');
        
        $('#selectedDoctor').val(doctorName);
        $('#selectedSpecialty').val(specialty);
        $('#appointmentModal').modal('show');
    });

    // Doctor Appointment Form Submission
    $('#doctorAppointmentForm').submit(function(e) {
        e.preventDefault();
        
        // Get form data
        const doctorName = $('#selectedDoctor').val();
        
        // Show success message
        alert('Your appointment with ' + doctorName + ' has been successfully booked! We will contact you shortly to confirm the details.');
        
        // Close modal
        $('#appointmentModal').modal('hide');
        
        // Reset form
        this.reset();
    });


    // ===================================
    // Search Functionality (Optional Enhancement)
    // ===================================
    if ($('#doctorSearch').length) {
        $('#doctorSearch').on('keyup', function() {
            const searchTerm = $(this).val().toLowerCase();
            
            $('.doctor-item').each(function() {
                const doctorName = $(this).find('h5').text().toLowerCase();
                const specialty = $(this).find('.specialty').text().toLowerCase();
                
                if (doctorName.includes(searchTerm) || specialty.includes(searchTerm)) {
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                }
            });
        });
    }


    // ===================================
    // Loading Animation
    // ===================================
    // Add staggered animation to doctor cards on page load
    $('.doctor-item').each(function(index) {
        $(this).css({
            'animation-delay': (index * 0.1) + 's'
        });
    });


    // ===================================
    // Testimonials Slider (Optional)
    // ===================================
    if ($('.testimonial-slider').length) {
        let testimonialIndex = 0;
        const testimonials = $('.testimonial-item');
        const totalTestimonials = testimonials.length;

        function showTestimonial(index) {
            testimonials.removeClass('active');
            $(testimonials[index]).addClass('active');
        }

        function nextTestimonial() {
            testimonialIndex = (testimonialIndex + 1) % totalTestimonials;
            showTestimonial(testimonialIndex);
        }

        setInterval(nextTestimonial, 5000);
    }


    // ===================================
    // Emergency Contact Highlight
    // ===================================
    $('.emergency-contact').on('click', function() {
        $(this).addClass('pulse');
        setTimeout(() => {
            $(this).removeClass('pulse');
        }, 1000);
    });

});


// ===================================
// Additional Helper Functions
// ===================================

// Phone number validation (Indian format)
function validatePhone(phone) {
    const phoneRegex = /^[6-9]\d{9}$/;
    return phoneRegex.test(phone);
}

// Email validation
function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Date validation (no past dates)
function validateDate(dateString) {
    const selectedDate = new Date(dateString);
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    return selectedDate >= today;
}

// Format phone number
function formatPhoneNumber(phone) {
    if (phone.length === 10) {
        return phone.replace(/(\d{5})(\d{5})/, '$1 $2');
    }
    return phone;
}

// Show loading spinner
function showLoading() {
    if ($('.loading-overlay').length === 0) {
        $('body').append(`
            <div class="loading-overlay">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `);
    }
}

// Hide loading spinner
function hideLoading() {
    $('.loading-overlay').fadeOut(300, function() {
        $(this).remove();
    });
}

// Toast notification
function showToast(message, type = 'success') {
    const toastColors = {
        success: '#28a745',
        error: '#dc3545',
        warning: '#ffc107',
        info: '#17a2b8'
    };

    const toast = $(`
        <div class="custom-toast" style="background: ${toastColors[type]}">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
            <span>${message}</span>
        </div>
    `);

    $('body').append(toast);
    
    setTimeout(() => {
        toast.addClass('show');
    }, 100);

    setTimeout(() => {
        toast.removeClass('show');
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}


// ===================================
// Print Functionality (for appointment receipts)
// ===================================
function printAppointment(appointmentDetails) {
    const printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write('<html><head><title>Appointment Details</title>');
    printWindow.document.write('<style>body{font-family:Arial;padding:20px;}h2{color:#1e3a8a;}</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h2>Supra Multi-Speciality Hospital</h2>');
    printWindow.document.write('<h3>Appointment Details</h3>');
    printWindow.document.write('<p>' + appointmentDetails + '</p>');
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}
