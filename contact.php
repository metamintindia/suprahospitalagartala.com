<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <h1 data-aos="fade-down">Contact Us</h1>
            <p data-aos="fade-up" data-aos-delay="200">Get in touch with us for any queries or appointments</p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="400">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /Page Header -->

<!-- Contact Info Cards -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Phone Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h5>Call Us</h5>
                    <p>Reach out to us anytime for immediate assistance</p>
                    <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="contact-link">
                        <?php echo formatPhone(HOSPITAL_PHONE_1); ?>
                    </a>
                    <a href="tel:<?php echo HOSPITAL_PHONE_2; ?>" class="contact-link">
                        <?php echo formatPhone(HOSPITAL_PHONE_2); ?>
                    </a>
                </div>
            </div>
            
            <!-- Email Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>Email Us</h5>
                    <p>Send us your queries and we'll respond promptly</p>
                    <a href="mailto:<?php echo HOSPITAL_EMAIL; ?>" class="contact-link">
                        <?php echo HOSPITAL_EMAIL; ?>
                    </a>
                </div>
            </div>
            
            <!-- Location Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5>Visit Us</h5>
                    <p>Come visit our hospital for in-person consultation</p>
                    <p class="contact-address">
                        <?php echo HOSPITAL_ADDRESS; ?>
                    </p>
                </div>
            </div>
            
            <!-- Timing Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Working Hours</h5>
                    <p><?php echo WORKING_HOURS; ?></p>
                    <p class="text-primary-red fw-bold"><?php echo EMERGENCY_HOURS; ?></p>
                </div>
            </div>
            
            <!-- Emergency Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h5>Emergency</h5>
                    <p>24/7 emergency medical services available</p>
                    <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="btn btn-danger btn-sm mt-2">
                        <i class="fas fa-phone"></i> Call Emergency
                    </a>
                </div>
            </div>
            
            <!-- Appointment Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h5>Book Appointment</h5>
                    <p>Schedule your visit with our specialists</p>
                    <a href="appointment.php" class="btn btn-primary btn-sm mt-2">
                        <i class="fas fa-calendar-alt"></i> Book Now
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- /Contact Info Cards -->

<!-- Contact Form & Map Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="row g-5">
            
            <!-- Contact Form -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="contact-form-wrapper">
                    <div class="section-header text-start">
                        <h2 class="section-title">Send Us a Message</h2>
                        <p class="section-subtitle">Fill out the form below and we'll get back to you soon</p>
                    </div>
                    
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            
                            <div class="col-md-6">
                                <label for="contactName" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="contactName" placeholder="Your Name" required>
                                <div class="invalid-feedback">
                                    Please enter your name.
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="contactPhone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="contactPhone" placeholder="10-digit number" maxlength="10" required>
                                <div class="invalid-feedback">
                                    Please enter a valid phone number.
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="contactEmail" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="contactEmail" placeholder="your@email.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="contactSubject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="contactSubject" placeholder="What is this regarding?" required>
                                <div class="invalid-feedback">
                                    Please enter a subject.
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="contactMessage" class="form-label">Message *</label>
                                <textarea class="form-control" id="contactMessage" rows="5" placeholder="Write your message here..." required></textarea>
                                <div class="invalid-feedback">
                                    Please enter your message.
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn-submit w-100">
                                    <i class="fas fa-paper-plane"></i> Send Message
                                </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Google Map -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-header text-start">
                    <h2 class="section-title">Find Us on Map</h2>
                    <p class="section-subtitle">Locate our hospital for easy navigation</p>
                </div>
                
                <div class="map-container">
                    <iframe 
                        src="<?php echo GOOGLE_MAPS_EMBED; ?>" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <!-- Additional Location Info -->
                <div class="location-info-box mt-4">
                    <h5><i class="fas fa-map-marked-alt text-primary-red"></i> How to Reach Us</h5>
                    <ul class="location-list">
                        <li>
                            <i class="fas fa-building"></i>
                            <strong>Landmark:</strong> Near Old Motor Stand
                        </li>
                        <li>
                            <i class="fas fa-bus"></i>
                            <strong>By Bus:</strong> Multiple bus routes available to Old Motor Stand
                        </li>
                        <li>
                            <i class="fas fa-car"></i>
                            <strong>By Car:</strong> Parking available at the hospital premises
                        </li>
                        <li>
                            <i class="fas fa-taxi"></i>
                            <strong>By Taxi:</strong> Easily accessible by local taxi/auto services
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- /Contact Form & Map Section -->

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Quick answers to common queries</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="200">
                    
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="fas fa-question-circle me-2"></i> What are your hospital visiting hours?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our OPD hours are Monday to Saturday from 9:00 AM to 8:00 PM. Emergency services are available 24/7, including Sundays and holidays.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="fas fa-question-circle me-2"></i> How can I book an appointment?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can book an appointment by calling us at <?php echo formatPhone(HOSPITAL_PHONE_1); ?>, using our online appointment booking form, or by visiting the hospital reception directly.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <i class="fas fa-question-circle me-2"></i> Do you accept health insurance?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we accept major health insurance plans. Please contact our billing department for specific insurance inquiries and cashless facility details.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <i class="fas fa-question-circle me-2"></i> Is parking available at the hospital?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we have ample parking space available for both two-wheelers and four-wheelers at the hospital premises.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <i class="fas fa-question-circle me-2"></i> Do you provide ambulance services?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we provide 24/7 ambulance services. Please call <?php echo formatPhone(HOSPITAL_PHONE_1); ?> for emergency ambulance requests.
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /FAQ Section -->

<!-- CTA Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="cta-box-large" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white mb-3">
                        <i class="fas fa-headset"></i> Need Assistance?
                    </h2>
                    <p class="text-white mb-0 lead">Our team is ready to help you. Contact us for any medical queries or appointment bookings.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="btn btn-light btn-lg">
                        <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                    <a href="appointment.php" class="btn btn-outline-light btn-lg ms-2">
                        <i class="fas fa-calendar"></i> Book
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /CTA Section -->

<?php include 'includes/footer.php'; ?>