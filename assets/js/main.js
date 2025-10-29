/**
 * Supra Multi-Speciality Hospital
 * Complete Main JavaScript File
 * 
 * @version 2.0.0
 * @requires jQuery 3.7.1+
 * @requires Bootstrap 5.3.2+
 * @requires AOS 2.3.1+
 * @author Meta Mint Private Limited
 */

(function($) {
    'use strict';

    // ========================================
    // DOCUMENT READY
    // ========================================
    $(document).ready(function() {
        
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Initialize all components
        initNavbar();
        initHeroSlider();
        initCounters();
        initBackToTop();
        initMobileMenu();
        initFormValidation();
        initSmoothScroll();
        initDoctorFilter();
        initDoctorCardAnimations();
        initDoctorQuickActions();
        
    });

    // ========================================
    // NAVBAR SCROLL EFFECT
    // ========================================
    function initNavbar() {
        const navbar = $('.navbar');
        
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 50) {
                navbar.addClass('scrolled');
            } else {
                navbar.removeClass('scrolled');
            }
        });
    }

    // ========================================
    // HERO SLIDER
    // ========================================
    function initHeroSlider() {
        let currentSlide = 0;
        const slides = $('.hero-slide');
        const dots = $('.slider-dot');
        const totalSlides = slides.length;

        if (totalSlides === 0) return;

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
        let slideInterval = setInterval(nextSlide, 5000);

        // Manual slide control
        dots.on('click', function() {
            clearInterval(slideInterval);
            currentSlide = $(this).data('slide');
            showSlide(currentSlide);
            slideInterval = setInterval(nextSlide, 5000);
        });

        // Keyboard navigation
        $(document).on('keydown', function(e) {
            if (e.keyCode === 37) { // Left arrow
                clearInterval(slideInterval);
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
                slideInterval = setInterval(nextSlide, 5000);
            } else if (e.keyCode === 39) { // Right arrow
                clearInterval(slideInterval);
                nextSlide();
                slideInterval = setInterval(nextSlide, 5000);
            }
        });

        // Pause on hover
        $('.hero-slider').hover(
            function() {
                clearInterval(slideInterval);
            },
            function() {
                slideInterval = setInterval(nextSlide, 5000);
            }
        );
    }

    // ========================================
    // ANIMATED COUNTERS
    // ========================================
    function initCounters() {
        let counterAnimated = false;
        
        function animateCounters() {
            $('.stat-number').each(function() {
                const $this = $(this);
                const countTo = parseInt($this.text().replace(/,/g, ''));
                const duration = 2000;
                
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: duration,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum).toLocaleString());
                    },
                    complete: function() {
                        $this.text(this.countNum.toLocaleString());
                    }
                });
            });
        }

        $(window).on('scroll', function() {
            const statsSection = $('.stats-section');
            
            if (statsSection.length && !counterAnimated) {
                const statsTop = statsSection.offset().top;
                const scrollTop = $(window).scrollTop();
                const windowHeight = $(window).height();

                if (scrollTop + windowHeight > statsTop + 100) {
                    animateCounters();
                    counterAnimated = true;
                }
            }
        });
    }

    // ========================================
    // BACK TO TOP BUTTON
    // ========================================
    function initBackToTop() {
        const backToTop = $('#backToTop');

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300) {
                backToTop.fadeIn();
            } else {
                backToTop.fadeOut();
            }
        });

        backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 800);
        });
    }

    // ========================================
    // MOBILE MENU
    // ========================================
    function initMobileMenu() {
        $('.navbar-nav .nav-link').on('click', function() {
            if ($(window).width() < 992) {
                $('.navbar-collapse').collapse('hide');
            }
        });
    }

    // ========================================
    // SMOOTH SCROLL
    // ========================================
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            const href = $(this).attr('href');
            
            if (href && href !== '#' && href.length > 1) {
                const target = $(href);
                
                if (target.length) {
                    e.preventDefault();
                    
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            }
        });
    }

    // ========================================
    // FORM VALIDATION
    // ========================================
    function initFormValidation() {
        // Custom validation styles
        const forms = document.querySelectorAll('.needs-validation');
        
        Array.from(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });

        // Phone number validation
        $('input[type="tel"]').on('input', function() {
            let value = $(this).val().replace(/\D/g, '');
            if (value.length > 10) {
                value = value.slice(0, 10);
            }
            $(this).val(value);
        });

        // Email validation
        $('input[type="email"]').on('blur', function() {
            const email = $(this).val();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });
    }

    // ========================================
    // ENHANCED DOCTOR FILTER
    // ========================================
    function initDoctorFilter() {
        // Filter button click handler
        $('.specialty-btn').on('click', function() {
            const specialty = $(this).data('specialty');
            
            // Update active button with animation
            $('.specialty-btn').removeClass('active');
            $(this).addClass('active');
            
            // Add pulse animation to clicked button
            $(this).css('transform', 'scale(0.95)');
            setTimeout(() => {
                $(this).css('transform', '');
            }, 150);
            
            // Filter doctors with smooth animation
            filterDoctors(specialty);
        });

        // Search functionality (if search box exists)
        $('#doctorSearch').on('keyup', function() {
            const searchTerm = $(this).val().toLowerCase();
            
            $('.doctor-item').each(function() {
                const doctorName = $(this).find('.doctor-name').text().toLowerCase();
                const specialty = $(this).find('.doctor-specialty').text().toLowerCase();
                
                if (doctorName.includes(searchTerm) || specialty.includes(searchTerm)) {
                    $(this).removeClass('hidden').fadeIn(400);
                } else {
                    $(this).addClass('hidden').fadeOut(400);
                }
            });
        });
    }

    /**
     * Filter Doctors by Specialty
     */
    function filterDoctors(specialty) {
        const $doctorItems = $('.doctor-item');
        
        if (specialty === 'all') {
            // Show all doctors with staggered animation
            $doctorItems.each(function(index) {
                const $this = $(this);
                setTimeout(function() {
                    $this.removeClass('hidden').fadeIn(400);
                }, index * 50); // 50ms stagger
            });
        } else {
            // Filter and show/hide with animation
            $doctorItems.each(function(index) {
                const $this = $(this);
                const doctorSpecialty = $this.data('specialty');
                
                if (doctorSpecialty === specialty) {
                    setTimeout(function() {
                        $this.removeClass('hidden').fadeIn(400);
                    }, index * 50);
                } else {
                    $this.addClass('hidden').fadeOut(400);
                }
            });
        }

        // Update visible count
        setTimeout(function() {
            updateDoctorCount();
        }, 500);
    }

    /**
     * Count and display visible doctors
     */
    function updateDoctorCount() {
        const visibleCount = $('.doctor-item:visible').length;
        const totalCount = $('.doctor-item').length;
        
        console.log(`Showing ${visibleCount} of ${totalCount} doctors`);
        
        // Optional: Display count to user
        if ($('.doctor-count-display').length) {
            $('.doctor-count-display').text(`Showing ${visibleCount} doctors`);
        }
    }

    // ========================================
    // DOCTOR CARD ANIMATIONS
    // ========================================
    function initDoctorCardAnimations() {
        // Card hover effect
        $('.doctor-card-enhanced').hover(
            function() {
                // On hover in
                $(this).find('.doctor-image-wrapper').css({
                    'box-shadow': '0 20px 50px rgba(0, 0, 0, 0.3)'
                });
            },
            function() {
                // On hover out
                $(this).find('.doctor-image-wrapper').css({
                    'box-shadow': ''
                });
            }
        );

        // Scroll animation
        animateDoctorCardsOnScroll();
    }

    /**
     * Animate cards when scrolling into view
     */
    function animateDoctorCardsOnScroll() {
        $(window).on('scroll', function() {
            $('.doctor-card-enhanced').each(function() {
                const elementTop = $(this).offset().top;
                const elementBottom = elementTop + $(this).outerHeight();
                const viewportTop = $(window).scrollTop();
                const viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom - 100) {
                    $(this).addClass('visible');
                }
            });
        });
    }

    // ========================================
    // DOCTOR QUICK ACTIONS
    // ========================================
    function initDoctorQuickActions() {
        /**
         * Quick Action Button Click with Ripple Effect
         */
        $('.quick-action-btn').on('click', function(e) {
            e.preventDefault();
            
            const $btn = $(this);
            const href = $btn.attr('href');
            
            // Add ripple effect
            const ripple = $('<span class="ripple"></span>');
            $btn.append(ripple);
            
            setTimeout(function() {
                ripple.remove();
            }, 600);
            
            // Navigate after animation
            setTimeout(function() {
                window.location.href = href;
            }, 300);
        });

        /**
         * Book Doctor Button Click
         */
        $('.btn-book-doctor').on('click', function(e) {
            const doctorCard = $(this).closest('.doctor-card-enhanced');
            const doctorName = doctorCard.find('.doctor-name').text();
            const specialty = doctorCard.find('.doctor-specialty').text();
            
            // Store doctor info in session storage
            if (typeof(Storage) !== "undefined") {
                sessionStorage.setItem('selectedDoctor', doctorName);
                sessionStorage.setItem('selectedSpecialty', specialty);
            }
            
            // Optional: Show quick confirmation
            showNotification('Success', `Redirecting to book appointment with ${doctorName}`, 'success');
        });

        /**
         * View All Doctors Button Animation
         */
        $('.btn-view-all-doctors').hover(
            function() {
                $(this).find('i').css('transform', 'translateX(5px)');
            },
            function() {
                $(this).find('i').css('transform', 'translateX(0)');
            }
        );
    }

    // ========================================
    // APPOINTMENT FORM HANDLER
    // ========================================
    $('#appointmentForm').on('submit', function(e) {
        e.preventDefault();
        
        if (this.checkValidity()) {
            // Show loading
            showLoading();
            
            // Get form data
            const formData = {
                name: $('#patientName').val(),
                phone: $('#patientPhone').val(),
                email: $('#patientEmail').val(),
                date: $('#appointmentDate').val(),
                time: $('#appointmentTime').val(),
                department: $('#department').val(),
                doctor: $('#doctor').val(),
                message: $('#message').val()
            };
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function() {
                hideLoading();
                
                // Show success message
                showNotification(
                    'Appointment Booked!', 
                    'Your appointment request has been submitted successfully. We will contact you shortly to confirm.', 
                    'success'
                );
                
                // Reset form
                $('#appointmentForm')[0].reset();
                $('#appointmentForm').removeClass('was-validated');
                
                // Redirect after 2 seconds
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 2000);
            }, 1500);
        }
    });

    // ========================================
    // CONTACT FORM HANDLER
    // ========================================
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        if (this.checkValidity()) {
            // Show loading
            showLoading();
            
            // Get form data
            const formData = {
                name: $('#contactName').val(),
                email: $('#contactEmail').val(),
                phone: $('#contactPhone').val(),
                subject: $('#contactSubject').val(),
                message: $('#contactMessage').val()
            };
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function() {
                hideLoading();
                
                // Show success message
                showNotification(
                    'Thank You!', 
                    'Your message has been sent successfully. We will get back to you soon.', 
                    'success'
                );
                
                // Reset form
                $('#contactForm')[0].reset();
                $('#contactForm').removeClass('was-validated');
            }, 1500);
        }
    });

    // ========================================
    // NOTIFICATION SYSTEM
    // ========================================
    function showNotification(title, message, type = 'success') {
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-times-circle',
            warning: 'fa-exclamation-triangle',
            info: 'fa-info-circle'
        };

        const colors = {
            success: '#10b981',
            error: '#ef4444',
            warning: '#f59e0b',
            info: '#3b82f6'
        };

        const notification = $(`
            <div class="custom-notification" style="background: ${colors[type]}">
                <div class="notification-content">
                    <i class="fas ${icons[type]} notification-icon"></i>
                    <div class="notification-text">
                        <strong>${title}</strong>
                        <p>${message}</p>
                    </div>
                </div>
                <button class="notification-close">&times;</button>
            </div>
        `);

        // Add CSS if not exists
        if ($('#notification-styles').length === 0) {
            $('head').append(`
                <style id="notification-styles">
                    .custom-notification {
                        position: fixed;
                        top: 100px;
                        right: 20px;
                        min-width: 300px;
                        max-width: 400px;
                        padding: 20px;
                        border-radius: 10px;
                        color: white;
                        box-shadow: 0 10px 40px rgba(0,0,0,0.2);
                        z-index: 9999;
                        animation: slideInRight 0.5s ease;
                    }
                    .notification-content {
                        display: flex;
                        gap: 15px;
                        align-items: flex-start;
                    }
                    .notification-icon {
                        font-size: 24px;
                    }
                    .notification-text strong {
                        display: block;
                        margin-bottom: 5px;
                        font-size: 16px;
                    }
                    .notification-text p {
                        margin: 0;
                        font-size: 14px;
                        opacity: 0.95;
                    }
                    .notification-close {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        background: transparent;
                        border: none;
                        color: white;
                        font-size: 24px;
                        cursor: pointer;
                        opacity: 0.8;
                        transition: opacity 0.3s ease;
                    }
                    .notification-close:hover {
                        opacity: 1;
                    }
                    @keyframes slideInRight {
                        from {
                            transform: translateX(400px);
                            opacity: 0;
                        }
                        to {
                            transform: translateX(0);
                            opacity: 1;
                        }
                    }
                </style>
            `);
        }

        $('body').append(notification);

        // Close button
        notification.find('.notification-close').on('click', function() {
            notification.fadeOut(300, function() {
                $(this).remove();
            });
        });

        // Auto remove after 5 seconds
        setTimeout(function() {
            notification.fadeOut(300, function() {
                $(this).remove();
            });
        }, 5000);
    }

    // ========================================
    // LOADING ANIMATION
    // ========================================
    function showLoading() {
        if ($('.loading-overlay').length === 0) {
            $('body').append(`
                <div class="loading-overlay">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `);
            
            if ($('#loading-styles').length === 0) {
                $('head').append(`
                    <style id="loading-styles">
                        .loading-overlay {
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.7);
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            z-index: 99999;
                        }
                        .loading-overlay .spinner-border {
                            width: 3rem;
                            height: 3rem;
                            border-width: 0.3rem;
                        }
                    </style>
                `);
            }
        }
    }

    function hideLoading() {
        $('.loading-overlay').fadeOut(300, function() {
            $(this).remove();
        });
    }

    // ========================================
    // RIPPLE EFFECT STYLES
    // ========================================
    if ($('#ripple-styles').length === 0) {
        $('head').append(`
            <style id="ripple-styles">
                .ripple {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 0;
                    height: 0;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
                    transform: translate(-50%, -50%);
                    animation: ripple-animation 0.6s ease-out;
                    pointer-events: none;
                }
                
                @keyframes ripple-animation {
                    to {
                        width: 100px;
                        height: 100px;
                        opacity: 0;
                    }
                }
            </style>
        `);
    }

    // ========================================
    // HELPER FUNCTIONS
    // ========================================
    
    // Format phone number
    window.formatPhone = function(phone) {
        return phone.replace(/(\d{5})(\d{5})/, '$1 $2');
    };

    // Validate Indian phone number
    window.validatePhone = function(phone) {
        const phoneRegex = /^[6-9]\d{9}$/;
        return phoneRegex.test(phone);
    };

    // Validate email
    window.validateEmail = function(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    };

    // Get current date in YYYY-MM-DD format
    window.getCurrentDate = function() {
        const today = new Date();
        const dd = String(today.getDate()).padStart(2, '0');
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const yyyy = today.getFullYear();
        return `${yyyy}-${mm}-${dd}`;
    };

    // Set minimum date for date inputs to today
    $('input[type="date"]').attr('min', getCurrentDate());

    // ========================================
    // DOCTOR UTILITY FUNCTIONS
    // ========================================

    /**
     * Get doctor specialty color
     */
    window.getSpecialtyColor = function(specialty) {
        const colors = {
            'surgery': '#DC143C',
            'gynecology': '#EC4899',
            'pediatrics': '#3B82F6',
            'orthopedics': '#22C55E',
            'neurology': '#A855F7',
            'medicine': '#0EA5E9',
            'ent': '#F59E0B',
            'urology': '#8B5CF6',
            'cardiology': '#EF4444'
        };
        return colors[specialty] || '#6B7280';
    };

    /**
     * Format doctor name for URL
     */
    window.formatDoctorUrl = function(name) {
        return name.toLowerCase()
            .replace(/\s+/g, '-')
            .replace(/\./g, '')
            .replace(/dr-/g, '');
    };

    /**
     * Share doctor profile (Web Share API)
     */
    window.shareDoctorProfile = function(doctorName, specialty) {
        const text = `Check out ${doctorName}, ${specialty} at Supra Multi-Speciality Hospital`;
        const url = window.location.href;
        
        if (navigator.share) {
            navigator.share({
                title: doctorName,
                text: text,
                url: url
            }).catch(err => console.log('Error sharing:', err));
        } else {
            // Fallback - copy to clipboard
            const tempInput = document.createElement('input');
            document.body.appendChild(tempInput);
            tempInput.value = `${text} - ${url}`;
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            
            showNotification('Copied!', 'Link copied to clipboard', 'success');
        }
    };

    /**
     * Print doctor profile
     */
    window.printDoctorProfile = function(doctorCard) {
        const $card = $(doctorCard);
        const doctorName = $card.find('.doctor-name').text();
        const specialty = $card.find('.doctor-specialty').text();
        const qualifications = $card.find('.qualification-tag').map(function() {
            return $(this).text();
        }).get().join(', ');
        const meta = $card.find('.meta-item span').map(function() {
            return $(this).text();
        }).get().join(' | ');
        
        const printContent = `
            <html>
            <head>
                <title>${doctorName} - Profile</title>
                <style>
                    body { 
                        font-family: 'Inter', Arial, sans-serif; 
                        padding: 40px;
                        color: #333;
                    }
                    h1 { 
                        color: #1e3a8a;
                        margin-bottom: 10px;
                    }
                    .specialty { 
                        color: #DC143C; 
                        font-size: 20px;
                        font-weight: 600;
                        margin-bottom: 20px;
                    }
                    .qualifications { 
                        margin: 20px 0;
                        padding: 15px;
                        background: #f8f9fa;
                        border-left: 4px solid #1e3a8a;
                    }
                    .meta {
                        margin: 15px 0;
                        color: #666;
                    }
                    .hospital {
                        margin-top: 30px;
                        padding-top: 20px;
                        border-top: 2px solid #e5e7eb;
                    }
                    .logo {
                        text-align: center;
                        margin-bottom: 30px;
                    }
                </style>
            </head>
            <body>
                <div class="logo">
                    <h2>SUPRA MULTI-SPECIALITY HOSPITAL</h2>
                    <p>Old Motor Stand, Agartala, Tripura - 799001</p>
                </div>
                
                <h1>${doctorName}</h1>
                <p class="specialty">${specialty}</p>
                
                <div class="qualifications">
                    <strong>Qualifications:</strong> ${qualifications}
                </div>
                
                <div class="meta">
                    ${meta}
                </div>
                
                <div class="hospital">
                    <p><strong>Contact Hospital:</strong></p>
                    <p>Phone: +91 9362244977, +91 7085660887</p>
                    <p>Website: www.suprahospital.com</p>
                </div>
                
                <p style="margin-top: 30px; font-size: 12px; color: #999;">
                    Printed on ${new Date().toLocaleDateString()}
                </p>
            </body>
            </html>
        `;
        
        const printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write(printContent);
        printWindow.document.close();
        printWindow.print();
    };

    // ========================================
    // PAGE LOAD ANIMATIONS
    // ========================================
    $(window).on('load', function() {
        // Fade in page content
        $('body').css('opacity', '1');
        
        // Refresh AOS
        AOS.refresh();
        
        // Trigger any delayed animations
        setTimeout(function() {
            $('.section').addClass('loaded');
        }, 300);
    });

    // ========================================
    // PREVENT FORM RESUBMISSION
    // ========================================
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    // ========================================
    // LAZY LOAD IMAGES (if needed)
    // ========================================
    function lazyLoadImages() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.classList.add('loaded');
                            observer.unobserve(img);
                        }
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    // Initialize lazy loading if images have data-src
    lazyLoadImages();

    // ========================================
    // CONSOLE WELCOME MESSAGE
    // ========================================
    console.log('%c🏥 Supra Multi-Speciality Hospital', 'color: #1e3a8a; font-size: 20px; font-weight: bold;');
    console.log('%cWebsite by Meta Mint Private Limited', 'color: #DC143C; font-size: 14px;');
    console.log('%chttps://www.metamintindia.com/', 'color: #666; font-size: 12px;');

})(jQuery);

// ========================================
// GLOBAL FUNCTIONS (Outside jQuery wrapper)
// ========================================

/**
 * Print appointment confirmation
 */
function printAppointment(details) {
    const printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write('<html><head><title>Appointment Details</title>');
    printWindow.document.write('<style>body{font-family:Arial,sans-serif;padding:40px;}h2{color:#1e3a8a;}.details{margin:20px 0;line-height:2;}</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h2>Supra Multi-Speciality Hospital</h2>');
    printWindow.document.write('<h3>Appointment Confirmation</h3>');
    printWindow.document.write('<div class="details">' + details + '</div>');
    printWindow.document.write('<p><small>Please bring this confirmation to your appointment.</small></p>');
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}

/**
 * Share on social media
 */
function shareOnSocial(platform, url, text) {
    const shareUrls = {
        facebook: `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`,
        twitter: `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`,
        linkedin: `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(url)}&title=${encodeURIComponent(text)}`,
        whatsapp: `https://wa.me/?text=${encodeURIComponent(text + ' ' + url)}`
    };
    
    if (shareUrls[platform]) {
        window.open(shareUrls[platform], '_blank', 'width=600,height=400');
    }
}

/**
 * Get URL parameters
 */
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    const results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

/**
 * Scroll to element
 */
function scrollToElement(elementId, offset = 80) {
    const element = document.getElementById(elementId);
    if (element) {
        const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
            top: elementPosition - offset,
            behavior: 'smooth'
        });
    }
}

// ========================================
// SERVICE WORKER (Optional - for PWA)
// ========================================
if ('serviceWorker' in navigator) {
    // Uncomment to enable service worker
    // navigator.serviceWorker.register('/sw.js');
}