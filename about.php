<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <h1 data-aos="fade-down">About Us</h1>
            <p data-aos="fade-up" data-aos-delay="200">Learn more about Supra Multi-Speciality Hospital</p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="400">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /Page Header -->

<!-- About Main Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="about-img">
                    <img src="<?php echo IMG_PATH; ?>/supra-hospital-agartala.jpg" alt="Supra Hospital Building" class="img-fluid rounded shadow-lg">
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-header text-start">
                    <h2 class="section-title">Welcome to Supra Multi-Speciality Hospital</h2>
                    <p class="section-subtitle">Your Health is Our Priority</p>
                </div>
                
                <p class="lead">Supra Multi-Speciality Hospital is a premier healthcare institution in Agartala, Tripura, dedicated to providing world-class medical services with compassion and excellence.</p>
                
                <p>Established with a vision to deliver comprehensive healthcare solutions, we combine cutting-edge medical technology with the expertise of highly qualified specialists. Our state-of-the-art facility is equipped with modern diagnostic and treatment equipment to ensure accurate diagnosis and effective treatment.</p>
                
                <p>We believe in patient-centered care, where every individual receives personalized attention and treatment tailored to their specific needs. Our team of experienced doctors, nurses, and support staff work together to provide the highest standard of medical care in a comfortable and caring environment.</p>
                
                <div class="row mt-4">
                    <div class="col-sm-6 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-hospital text-primary-red"></i>
                            <h5>Modern Facilities</h5>
                            <p>State-of-the-art infrastructure</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-user-md text-primary-red"></i>
                            <h5>Expert Doctors</h5>
                            <p>25+ qualified specialists</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-clock text-primary-red"></i>
                            <h5>24/7 Emergency</h5>
                            <p>Round-the-clock care</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="feature-box">
                            <i class="fas fa-heart text-primary-red"></i>
                            <h5>Patient Care</h5>
                            <p>Compassionate service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About Main Section -->

<!-- Mission & Vision Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="mission-vision-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide accessible, affordable, and high-quality healthcare services to the people of Tripura and surrounding regions. We are committed to improving the health and well-being of our community through compassionate care, clinical excellence, and continuous innovation in medical practices.</p>
                    <ul class="mission-points">
                        <li><i class="fas fa-check-circle"></i> Deliver patient-centered, compassionate care</li>
                        <li><i class="fas fa-check-circle"></i> Maintain highest standards of medical excellence</li>
                        <li><i class="fas fa-check-circle"></i> Provide affordable healthcare for all</li>
                        <li><i class="fas fa-check-circle"></i> Foster continuous learning and improvement</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="mission-vision-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be the most trusted and preferred multi-specialty hospital in Northeast India, recognized for our commitment to excellence in healthcare delivery, medical education, and research. We aspire to set new benchmarks in patient care while remaining accessible to all segments of society.</p>
                    <ul class="mission-points">
                        <li><i class="fas fa-check-circle"></i> Become a leading healthcare institution</li>
                        <li><i class="fas fa-check-circle"></i> Integrate advanced medical technology</li>
                        <li><i class="fas fa-check-circle"></i> Expand specialized medical services</li>
                        <li><i class="fas fa-check-circle"></i> Create a center of medical excellence</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Mission & Vision Section -->

<!-- Why Choose Us Section -->
<section class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Why Choose Supra Hospital?</h2>
            <p class="section-subtitle">Your health deserves the best care available</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-choose-card">
                    <div class="number">01</div>
                    <div class="icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h4>Experienced Specialists</h4>
                    <p>Our team comprises highly qualified doctors with years of experience in their respective specialties. Each specialist is committed to providing evidence-based, personalized care.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-choose-card">
                    <div class="number">02</div>
                    <div class="icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h4>Advanced Technology</h4>
                    <p>We invest in the latest medical equipment and technology to ensure accurate diagnosis and effective treatment. Our modern infrastructure supports cutting-edge medical procedures.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-choose-card">
                    <div class="number">03</div>
                    <div class="icon">
                        <i class="fas fa-user-nurse"></i>
                    </div>
                    <h4>Compassionate Care</h4>
                    <p>We treat every patient with dignity, respect, and compassion. Our caring staff ensures a comfortable and supportive environment throughout your healthcare journey.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-choose-card">
                    <div class="number">04</div>
                    <div class="icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Safety Standards</h4>
                    <p>Patient safety is our top priority. We follow strict protocols and international quality standards to ensure safe and effective medical care at all times.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-choose-card">
                    <div class="number">05</div>
                    <div class="icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h4>Affordable Healthcare</h4>
                    <p>Quality healthcare should be accessible to everyone. We offer competitive pricing and flexible payment options to make healthcare affordable for all.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-choose-card">
                    <div class="number">06</div>
                    <div class="icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h4>24/7 Emergency</h4>
                    <p>Our emergency department operates round-the-clock with experienced doctors and support staff ready to handle any medical emergency promptly and efficiently.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Why Choose Us Section -->

<!-- Our Values Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Our Core Values</h2>
            <p class="section-subtitle">The principles that guide us every day</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="value-card">
                    <i class="fas fa-heart-pulse"></i>
                    <h5>Excellence</h5>
                    <p>Striving for the highest standards in medical care and service delivery</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h5>Integrity</h5>
                    <p>Maintaining honesty, transparency, and ethical practices in all our actions</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="value-card">
                    <i class="fas fa-hands-holding-heart"></i>
                    <h5>Compassion</h5>
                    <p>Treating every patient with empathy, dignity, and respect</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="value-card">
                    <i class="fas fa-lightbulb"></i>
                    <h5>Innovation</h5>
                    <p>Embracing new technologies and methods to improve patient outcomes</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Our Values Section -->

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
<section class="section">
    <div class="container">
        <div class="cta-box-large" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white mb-3">
                        <i class="fas fa-calendar-check"></i> Book Your Appointment Today
                    </h2>
                    <p class="text-white mb-0 lead">Experience world-class healthcare with our team of expert doctors and modern facilities.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="appointment.php" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-alt"></i> Book Now
                    </a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg ms-2">
                        <i class="fas fa-phone"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /CTA Section -->

<?php include 'includes/footer.php'; ?>