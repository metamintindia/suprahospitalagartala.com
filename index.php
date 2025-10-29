<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supra Multi-Speciality Hospital - We Take Care of Your Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="tel:+919077331555"><i class="fas fa-phone"></i> +91 90773 31555</a>
                    <a href="mailto:info@suprahospital.com"><i class="fas fa-envelope"></i> info@suprahospital.com</a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#"><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 8:00 PM</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <span class="supra">SUPRA</span> <span class="multi">MULTI-SPECIALITY</span> <span class="hospital">HOSPITAL</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#specialities">Specialities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-3">
                        <button class="btn-appointment" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            Book Appointment
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Slider -->
    <section id="home" class="banner-slider">
        <div class="slide active">
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=1920&h=800&fit=crop" alt="Hospital">
            <div class="slide-content">
                <h1>Expert Orthopedic Care</h1>
                <h2>Advanced Joint Replacement & Arthroscopy</h2>
                <p>State-of-the-art facilities for comprehensive orthopedic treatments</p>
                <button class="btn-appointment" data-bs-toggle="modal" data-bs-target="#appointmentModal">Get Started</button>
            </div>
        </div>
        <div class="slide">
            <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1920&h=800&fit=crop" alt="Hospital Care">
            <div class="slide-content">
                <h1>We Take Care of Your Health</h1>
                <h2>Multi-Specialty Excellence</h2>
                <p>Comprehensive healthcare services under one roof</p>
                <button class="btn-appointment" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
            </div>
        </div>
        <div class="slide">
            <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=1920&h=800&fit=crop" alt="Medical Technology">
            <div class="slide-content">
                <h1>Advanced Medical Technology</h1>
                <h2>Super Specialty OPD Services</h2>
                <p>Latest equipment and experienced specialists for better outcomes</p>
                <button class="btn-appointment" data-bs-toggle="modal" data-bs-target="#appointmentModal">Contact Us</button>
            </div>
        </div>
        <div class="slider-controls">
            <span class="slider-dot active" data-slide="0"></span>
            <span class="slider-dot" data-slide="1"></span>
            <span class="slider-dot" data-slide="2"></span>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Expert Doctors</h4>
                        <p>Highly qualified and experienced medical professionals dedicated to your health</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h4>Modern Facilities</h4>
                        <p>State-of-the-art infrastructure with latest medical equipment and technology</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h4>24/7 Emergency</h4>
                        <p>Round-the-clock emergency services with immediate medical attention</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>About Supra Hospital</h2>
                <p>Leading Multi-Specialty Healthcare Provider in Agartala</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-img">
                        <img src="https://lh3.googleusercontent.com/gps-cs-s/AG0ilSxuufdEEpSCpGfn8Icpbcyr2MsoL2xf9uMrD2-0UhTan2cNhbhTM7XBnA0bAY8euVoJxh5SfM9pPVvmoN3sMU-97XSzbC-VelPtZhFEcXRtLQkO6t2NEKXlGx4gI5XnM2hIg8Anz7zlZbfK=s1360-w1360-h1020-rw" alt="Hospital Building">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>We Take Care of Your Health</h3>
                        <p>Supra Multi-Speciality Hospital is a premier healthcare institution in Agartala, Tripura, committed to providing world-class medical services. Our hospital combines advanced medical technology with compassionate care to ensure the best possible outcomes for our patients.</p>
                        <p>With a team of highly qualified specialists and state-of-the-art infrastructure, we offer comprehensive healthcare solutions across multiple specialties. Our focus on patient-centered care and clinical excellence has made us a trusted name in healthcare.</p>
                        <ul class="check-list">
                            <li><i class="fas fa-check-circle"></i> Experienced Medical Professionals</li>
                            <li><i class="fas fa-check-circle"></i> Advanced Diagnostic Facilities</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Emergency Care</li>
                            <li><i class="fas fa-check-circle"></i> Patient-Centric Approach</li>
                            <li><i class="fas fa-check-circle"></i> Affordable Healthcare Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <i class="fas fa-user-md"></i>
                        <h3 class="counter">50</h3>
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <i class="fas fa-bed"></i>
                        <h3 class="counter">100</h3>
                        <p>Hospital Beds</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <i class="fas fa-procedures"></i>
                        <h3 class="counter">5000</h3>
                        <p>Surgeries Done</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <i class="fas fa-smile"></i>
                        <h3 class="counter">10000</h3>
                        <p>Happy Patients</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialities Section -->
    <section id="specialities" class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>What We Do</h2>
                <p>Our Core Specialities</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-bone"></i>
                        </div>
                        <div class="service-content">
                            <h4>Joint Replacement</h4>
                            <p>Expert hip and knee replacement surgery using advanced techniques and prosthetics for improved mobility and pain relief.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-x-ray"></i>
                        </div>
                        <div class="service-content">
                            <h4>Arthroscopy</h4>
                            <p>Minimally invasive joint surgery for diagnosis and treatment of various orthopedic conditions with faster recovery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-band-aid"></i>
                        </div>
                        <div class="service-content">
                            <h4>Ligament Repair</h4>
                            <p>Advanced ligament reconstruction surgery for sports injuries and trauma with rehabilitation support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-crutch"></i>
                        </div>
                        <div class="service-content">
                            <h4>Osteoarthritis</h4>
                            <p>Comprehensive treatment for osteoarthritis including medication, therapy, and surgical interventions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="service-content">
                            <h4>Rheumatoid Arthritis</h4>
                            <p>Specialized care for rheumatoid arthritis with personalized treatment plans and ongoing management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-spine"></i>
                        </div>
                        <div class="service-content">
                            <h4>Hip/Spine Deformation</h4>
                            <p>Expert treatment for spinal and hip deformities with corrective surgery and rehabilitation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>Comprehensive Healthcare Solutions</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h4>Multi Specialty OPD</h4>
                        <p>Outpatient department with multiple specialties for comprehensive medical consultations</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <h4>Super Specialty OPD</h4>
                        <p>Advanced super specialty consultation services with expert doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h4>Pediatrics Treatment</h4>
                        <p>Comprehensive child healthcare services with experienced pediatricians</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-female"></i>
                        </div>
                        <h4>Gynecology Treatment</h4>
                        <p>Complete women's health services including obstetrics and gynecology</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in Touch with Us</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3 class="mb-4">Contact Information</h3>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5>Address</h5>
                                <p>Old Motor Stand, Oppo. of Yamaha Showroom, Agartala, Tripura, 799001</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h5>Phone</h5>
                                <p>+91 90773 31555</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h5>Email</h5>
                                <p>info@suprahospital.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h5>Working Hours</h5>
                                <p>Mon - Sat: 9:00 AM - 8:00 PM<br>Sunday: Emergency Only</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h3 class="mb-4">Send Us a Message</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-appointment">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h5>About Supra Hospital</h5>
                    <p>Supra Multi-Speciality Hospital is committed to providing world-class healthcare services with compassion and excellence. We combine advanced medical technology with experienced specialists to ensure the best outcomes for our patients.</p>
                    <div class="social-links mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#specialities">Specialities</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Our Services</h5>
                    <ul>
                        <li><a href="#">Joint Replacement</a></li>
                        <li><a href="#">Arthroscopy</a></li>
                        <li><a href="#">Ligament Repair</a></li>
                        <li><a href="#">Multi Specialty OPD</a></li>
                        <li><a href="#">Pediatrics Care</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact Info</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Old Motor Stand, Agartala, Tripura</li>
                        <li><i class="fas fa-phone"></i> +91 90773 31555</li>
                        <li><i class="fas fa-envelope"></i> info@suprahospital.com</li>
                        <li><i class="fas fa-clock"></i> Mon - Sat: 9 AM - 8 PM</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Supra Multi-Speciality Hospital. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color: var(--primary-red);"></i> for Better Healthcare</p>
            </div>
        </div>
    </footer>

    <!-- Appointment Modal -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background: var(--primary-blue); color: white;">
                    <h5 class="modal-title">Book an Appointment</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="appointmentForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-control" required>
                                <option value="">Select Department</option>
                                <option>Orthopedics</option>
                                <option>Pediatrics</option>
                                <option>Gynecology</option>
                                <option>General Medicine</option>
                                <option>Emergency</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" placeholder="Additional Information"></textarea>
                        </div>
                        <button type="submit" class="btn-appointment w-100">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>