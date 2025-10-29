<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Hero Slider -->
<section class="hero-slider">
    <div class="hero-slide active">
        <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=1920&h=800&fit=crop" alt="Expert Healthcare">
        <div class="hero-content">
            <h1 data-aos="fade-down">Expert Orthopedic Care</h1>
            <h2 data-aos="fade-up" data-aos-delay="200">Advanced Joint Replacement & Arthroscopy</h2>
            <p data-aos="fade-up" data-aos-delay="400">State-of-the-art facilities for comprehensive orthopedic treatments</p>
            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="600">
                <a href="appointment.php" class="btn-hero-primary">
                    <i class="fas fa-calendar-check"></i> Book Appointment
                </a>
                <a href="about.php" class="btn-hero-secondary">
                    <i class="fas fa-info-circle"></i> Learn More
                </a>
            </div>
        </div>
    </div>
    
    <div class="hero-slide">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1920&h=800&fit=crop" alt="Healthcare Excellence">
        <div class="hero-content">
            <h1 data-aos="fade-down">We Take Care of Your Health</h1>
            <h2 data-aos="fade-up" data-aos-delay="200">Multi-Specialty Excellence</h2>
            <p data-aos="fade-up" data-aos-delay="400">Comprehensive healthcare services under one roof</p>
            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="600">
                <a href="doctors.php" class="btn-hero-primary">
                    <i class="fas fa-user-md"></i> Our Doctors
                </a>
                <a href="services.php" class="btn-hero-secondary">
                    <i class="fas fa-stethoscope"></i> Our Services
                </a>
            </div>
        </div>
    </div>
    
    <div class="hero-slide">
        <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=1920&h=800&fit=crop" alt="Advanced Technology">
        <div class="hero-content">
            <h1 data-aos="fade-down">Advanced Medical Technology</h1>
            <h2 data-aos="fade-up" data-aos-delay="200">Super Specialty OPD Services</h2>
            <p data-aos="fade-up" data-aos-delay="400">Latest equipment and experienced specialists for better outcomes</p>
            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="600">
                <a href="contact.php" class="btn-hero-primary">
                    <i class="fas fa-phone"></i> Contact Us
                </a>
                <a href="services.php" class="btn-hero-secondary">
                    <i class="fas fa-hospital"></i> View Services
                </a>
            </div>
        </div>
    </div>
    
    <div class="slider-controls">
        <span class="slider-dot active" data-slide="0"></span>
        <span class="slider-dot" data-slide="1"></span>
        <span class="slider-dot" data-slide="2"></span>
    </div>
</section>
<!-- /Hero Slider -->

<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h4>Expert Doctors</h4>
                    <p>Highly qualified and experienced medical professionals dedicated to providing the best healthcare services with compassion and expertise.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h4>Modern Facilities</h4>
                    <p>State-of-the-art infrastructure equipped with the latest medical technology and equipment for accurate diagnosis and treatment.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h4>24/7 Emergency</h4>
                    <p>Round-the-clock emergency services with immediate medical attention from our dedicated healthcare professionals.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Features Section -->

<!-- About Section -->
<section class="section bg-light-gray" id="about-preview">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">About Supra Hospital</h2>
            <p class="section-subtitle">Leading Multi-Specialty Healthcare Provider in Agartala</p>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="about-img">
                    <img src="<?php echo IMG_PATH; ?>/supra-hospital-agartala.jpg" alt="Supra Hospital Building" class="img-fluid rounded">
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <h3 class="text-primary-blue mb-4">We Take Care of Your Health</h3>
                <p>Supra Multi-Speciality Hospital is a premier healthcare institution in Agartala, Tripura, committed to providing world-class medical services. Our hospital combines advanced medical technology with compassionate care to ensure the best possible outcomes for our patients.</p>
                <p>With a team of highly qualified specialists and state-of-the-art infrastructure, we offer comprehensive healthcare solutions across multiple specialties. Our focus on patient-centered care and clinical excellence has made us a trusted name in healthcare.</p>
                
                <ul class="list-unstyled mt-4">
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> Experienced Medical Professionals</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> Advanced Diagnostic Facilities</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> 24/7 Emergency Care</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> Patient-Centric Approach</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> Affordable Healthcare Services</li>
                </ul>
                
                <a href="about.php" class="btn-hero-primary mt-3">
                    <i class="fas fa-arrow-right"></i> Read More
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /About Section -->

<!-- Services Section -->
<section class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive healthcare services for all your medical needs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-bone"></i>
                    </div>
                    <div class="service-content">
                        <h4>Orthopedics</h4>
                        <p>Expert care for bones, joints, and muscles. Specializing in joint replacement, arthroscopy, and ligament repairs.</p>
                        <a href="services.php#orthopedics" class="btn-learn-more">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="service-content">
                        <h4>Pediatrics</h4>
                        <p>Comprehensive child healthcare services with experienced pediatricians and child specialists.</p>
                        <a href="services.php#pediatrics" class="btn-learn-more">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-female"></i>
                    </div>
                    <div class="service-content">
                        <h4>Gynecology & Obstetrics</h4>
                        <p>Complete women's health services including obstetrics, gynecology, and maternity care.</p>
                        <a href="services.php#gynecology" class="btn-learn-more">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="service-content">
                        <h4>General Medicine</h4>
                        <p>Expert medical consultation and treatment for all general health conditions and diseases.</p>
                        <a href="services.php#medicine" class="btn-learn-more">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-procedures"></i>
                    </div>
                    <div class="service-content">
                        <h4>General Surgery</h4>
                        <p>Advanced surgical procedures including laparoscopic and minimally invasive surgeries.</p>
                        <a href="services.php#surgery" class="btn-learn-more">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <div class="service-content">
                        <h4>Diagnostics</h4>
                        <p>State-of-the-art diagnostic facilities including X-ray, ultrasound, and laboratory services.</p>
                        <a href="services.php#diagnostics" class="btn-learn-more">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="services.php" class="btn-hero-primary">
                <i class="fas fa-th-large"></i> View All Services
            </a>
        </div>
    </div>
</section>
<!-- /Services Section -->

<!-- ============================================
     ENHANCED DOCTORS SECTION - PREMIUM DESIGN
     ============================================ -->
<section class="doctors-section">
    <div class="container">
        <!-- Section Header with Improved Design -->
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-user-md"></i> Medical Experts
            </span>
            <h2 class="section-title">Meet Our Specialist Doctors</h2>
            <p class="section-subtitle">
                Highly qualified medical professionals with years of experience in their respective specialties,<br>
                committed to providing exceptional patient care and clinical excellence.
            </p>
        </div>

        <!-- Specialty Filter Tabs -->
        <div class="specialty-filter" data-aos="fade-up" data-aos-delay="100">
            <button class="specialty-btn active" data-specialty="all">
                <i class="fas fa-th"></i> All Specialists
            </button>
            <button class="specialty-btn" data-specialty="surgery">
                <i class="fas fa-user-md"></i> Surgery
            </button>
            <button class="specialty-btn" data-specialty="gynecology">
                <i class="fas fa-female"></i> Gynecology
            </button>
            <button class="specialty-btn" data-specialty="pediatrics">
                <i class="fas fa-baby"></i> Pediatrics
            </button>
            <button class="specialty-btn" data-specialty="orthopedics">
                <i class="fas fa-bone"></i> Orthopedics
            </button>
            <button class="specialty-btn" data-specialty="neurology">
                <i class="fas fa-brain"></i> Neurology
            </button>
        </div>

        <!-- Doctors Grid -->
        <div class="row g-4 mt-4" id="doctorsGrid">
            
            <!-- Doctor 1 - Featured -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="surgery" data-aos="fade-up" data-aos-delay="100">
                <div class="doctor-card-enhanced">
                    <div class="doctor-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=500&fit=crop" alt="Dr. Abantika Nath">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn" title="Book Appointment">
                                <i class="fas fa-calendar-check"></i>
                            </a>
                            <a href="doctors.php" class="quick-action-btn" title="View Profile">
                                <i class="fas fa-user"></i>
                            </a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn" title="Call Now">
                                <i class="fas fa-phone"></i>
                            </a>
                        </div>
                        <div class="specialty-badge surgery">
                            <i class="fas fa-user-md"></i> Surgery
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Abantika Nath</h5>
                        <p class="doctor-specialty">Laparoscopic & General Surgeon</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS</span>
                            <span class="qualification-tag">DMAS</span>
                            <span class="qualification-tag">FMAS</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-university"></i>
                                <span>RML University, Lucknow</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC002171</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="medicine" data-aos="fade-up" data-aos-delay="150">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=500&fit=crop" alt="Dr. Anita Baidya">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="doctors.php" class="quick-action-btn"><i class="fas fa-user"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge medicine">
                            <i class="fas fa-stethoscope"></i> Sonology
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Anita Baidya</h5>
                        <p class="doctor-specialty">Sonologist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001615</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="gynecology" data-aos="fade-up" data-aos-delay="200">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=500&fit=crop" alt="Dr. Arpan Bhattacharjee">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="doctors.php" class="quick-action-btn"><i class="fas fa-user"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge gynecology">
                            <i class="fas fa-female"></i> Gynecology
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Arpan Bhattacharjee</h5>
                        <p class="doctor-specialty">Gynecologist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">DGO</span>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 4 - Featured -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="neurology" data-aos="fade-up" data-aos-delay="250">
                <div class="doctor-card-enhanced">
                    <div class="doctor-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=500&fit=crop" alt="Dr. Arpan Mitra">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="doctors.php" class="quick-action-btn"><i class="fas fa-user"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge neurology">
                            <i class="fas fa-brain"></i> Neurology
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Arpan Mitra</h5>
                        <p class="doctor-specialty">Neurologist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MD Medicine</span>
                            <span class="qualification-tag">DM Neurology</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-university"></i>
                                <span>BHU, Varanasi</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-hospital"></i>
                                <span>AGMC & GBPH</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="gynecology" data-aos="fade-up" data-aos-delay="100">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400&h=500&fit=crop" alt="Dr. B. Sindhu">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="doctors.php" class="quick-action-btn"><i class="fas fa-user"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge gynecology">
                            <i class="fas fa-female"></i> OB/GYN
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. B. Sindhu</h5>
                        <p class="doctor-specialty">Obstetrician & Gynecologist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS (O&G)</span>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="pediatrics" data-aos="fade-up" data-aos-delay="150">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=400&h=500&fit=crop" alt="Dr. Chayan Sarkar">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="doctors.php" class="quick-action-btn"><i class="fas fa-user"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge pediatrics">
                            <i class="fas fa-baby"></i> Pediatrics
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Chayan Sarkar</h5>
                        <p class="doctor-specialty">Pediatrician</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MD Pediatric</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-hospital"></i>
                                <span>Asst. Prof AGMC & GBPH</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC002483</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="orthopedics" data-aos="fade-up" data-aos-delay="200">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=500&fit=crop" alt="Dr. Himadri Shekhar Deb">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="doctors.php" class="quick-action-btn"><i class="fas fa-user"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge orthopedics">
                            <i class="fas fa-bone"></i> Orthopedics
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Himadri Shekhar Deb</h5>
                        <p class="doctor-specialty">Orthopedic Surgeon</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS Orthopaedic</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-hospital"></i>
                                <span>TMC & DR BRAM Hospital</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC002037</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="surgery" data-aos="fade-up" data-aos-delay="250">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=500&fit=crop" alt="Dr. Diptendu Chaudhuri">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="doctors.php" class="quick-action-btn"><i class="fas fa-user"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge surgery">
                            <i class="fas fa-user-md"></i> Surgery
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Diptendu Chaudhuri</h5>
                        <p class="doctor-specialty">General & Laparoscopic Surgeon</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS</span>
                            <span class="qualification-tag">FMAS</span>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- View All Doctors CTA -->
        <div class="text-center mt-5" data-aos="fade-up">
            <div class="doctors-cta-box">
                <div class="cta-content">
                    <h3><i class="fas fa-users-medical"></i> Meet All Our Specialists</h3>
                    <p>Explore our complete team of 20+ expert doctors across all specialties</p>
                </div>
                <a href="doctors.php" class="btn-view-all-doctors">
                    <span>View All Doctors</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Enhanced Doctors Section -->

<!-- Statistics Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="stat-number">25</div>
                    <div class="stat-label">Expert Doctors</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <div class="stat-number">5000</div>
                    <div class="stat-label">Happy Patients</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fas fa-procedures"></i>
                    </div>
                    <div class="stat-number">2500</div>
                    <div class="stat-label">Successful Surgeries</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-box">
                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number">10</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Statistics Section -->

<!-- CTA Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="text-primary-blue mb-3">Need Medical Assistance?</h2>
                <p class="lead mb-0">Book your appointment today and get expert medical consultation from our experienced specialists.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="appointment.php" class="btn-hero-primary">
                    <i class="fas fa-calendar-check"></i> Book Appointment Now
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /CTA Section -->

<?php include 'includes/footer.php'; ?>