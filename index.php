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
            <a class="navbar-brand" href="index.php">
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
                    <li class="nav-item"><a class="nav-link" href="#doctors">Our Doctors</a></li>
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
                        <img src="assets/supra-hospital-agartala.jpg" alt="Hospital Building">
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

    <!-- Our Medical Specialists Section -->
    <section id="doctors" class="doctors-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Medical Specialists</h2>
                <p>Meet our team of highly qualified and experienced medical professionals</p>
            </div>
            <div class="row g-4">
                <!-- Doctor 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" alt="Dr. Abantika Nath">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Abantika Nath</h5>
                            <span class="specialty">Laparoscopic & General Surgeon</span>
                            <p class="qualification">MBBS, MS, DMAS, FMAS</p>
                            <div class="doctor-reg">Reg: TSMC002171</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop" alt="Dr. Anita Baidya">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Anita Baidya</h5>
                            <span class="specialty">Sonologist</span>
                            <p class="qualification">MBBS</p>
                            <div class="doctor-reg">Reg: TSMC001615</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop" alt="Dr. Arpan Bhattacharjee">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Arpan Bhattacharjee</h5>
                            <span class="specialty">Gynecologist</span>
                            <p class="qualification">MBBS, DGO</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop" alt="Dr. Arpan Mitra">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Arpan Mitra</h5>
                            <span class="specialty">Neurologist</span>
                            <p class="qualification">MD Medicine, DM Neurology</p>
                            <div class="doctor-reg">AGMC & GBPH</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=400&fit=crop" alt="Dr. Ashok Majumdar">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Ashok Majumdar</h5>
                            <span class="specialty">Gynecologist</span>
                            <p class="qualification">MBBS, DGO</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400&h=400&fit=crop" alt="Dr. B. Sindhu">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. B. Sindhu</h5>
                            <span class="specialty">Obstetrician & Gynecologist</span>
                            <p class="qualification">MBBS, MS (O&G)</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=400&fit=crop" alt="Dr. Bidhan Chandra Roy">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Bidhan Chandra Roy</h5>
                            <span class="specialty">General Physician</span>
                            <p class="qualification">MBBS</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?w=400&h=400&fit=crop" alt="Dr. Bidhan Das">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Bidhan Das</h5>
                            <span class="specialty">ENT Specialist</span>
                            <p class="qualification">MBBS, MS (ENT)</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 9 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1666214280557-f1b5022eb634?w=400&h=400&fit=crop" alt="Dr. Bijayaditya Datta">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Bijayaditya Datta</h5>
                            <span class="specialty">Consultant Physician</span>
                            <p class="qualification">MBBS, MD (Medicine)</p>
                            <div class="doctor-reg">Reg: TSMC000447</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 10 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=400&h=400&fit=crop" alt="Dr. Chayan Sarkar">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Chayan Sarkar</h5>
                            <span class="specialty">Pediatrician</span>
                            <p class="qualification">MBBS, MD Pediatric</p>
                            <div class="doctor-reg">Reg: TSMC002483</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 11 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop" alt="Dr. Debajit Debnath">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Debajit Debnath</h5>
                            <span class="specialty">Obstetrician & Gynecologist</span>
                            <p class="qualification">MBBS, MS (O&G)</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 12 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop" alt="Dr. Diptanu Deb">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Diptanu Deb</h5>
                            <span class="specialty">Surgeon</span>
                            <p class="qualification">MBBS, DNB (Surgery)</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 13 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=400&fit=crop" alt="Dr. Diptanu Laskar">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Diptanu Laskar</h5>
                            <span class="specialty">General Physician</span>
                            <p class="qualification">MBBS</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 14 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" alt="Dr. Diptendu Chaudhuri">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Diptendu Chaudhuri</h5>
                            <span class="specialty">General & Laparoscopic Surgeon</span>
                            <p class="qualification">MBBS, MS, FMAS</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 15 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=400&fit=crop" alt="Dr. J.K. Nag">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. J.K. Nag</h5>
                            <span class="specialty">Orthopedic Surgeon</span>
                            <p class="qualification">MS (Ortho)</p>
                            <div class="doctor-reg">Registered Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 16 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="doctor-card">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop" alt="Dr. Himadri Shekhar Deb">
                            <div class="doctor-overlay">
                                <a href="doctors.php" class="btn btn-light btn-sm">Book Appointment</a>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Himadri Shekhar Deb</h5>
                            <span class="specialty">Orthopedic Surgeon</span>
                            <p class="qualification">MBBS, MS Orthopaedic</p>
                            <div class="doctor-reg">Reg: TSMC002037</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Doctors Button -->
            <div class="text-center mt-5">
                <a href="doctors.php" class="btn-view-all">
                    <i class="fas fa-user-md"></i> View All Doctors & Book Appointment
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>Comprehensive healthcare services for all your medical needs</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-bone"></i>
                        </div>
                        <div class="service-content">
                            <h4>Orthopedics</h4>
                            <p>Expert care for bones, joints, and muscles. Specializing in joint replacement, arthroscopy, and ligament repairs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-baby"></i>
                        </div>
                        <div class="service-content">
                            <h4>Pediatrics</h4>
                            <p>Comprehensive child healthcare services with experienced pediatricians and child specialists.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-female"></i>
                        </div>
                        <div class="service-content">
                            <h4>Gynecology</h4>
                            <p>Complete women's health services including obstetrics, gynecology, and maternity care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="service-content">
                            <h4>General Medicine</h4>
                            <p>Expert medical consultation and treatment for all general health conditions and diseases.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <div class="service-content">
                            <h4>Surgery</h4>
                            <p>Advanced surgical procedures including laparoscopic and minimally invasive surgeries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas fa-x-ray"></i>
                        </div>
                        <div class="service-content">
                            <h4>Diagnostics</h4>
                            <p>State-of-the-art diagnostic facilities including X-ray, ultrasound, and laboratory services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="fas fa-user-md"></i>
                        <h3 class="counter">25</h3>
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="fas fa-smile"></i>
                        <h3 class="counter">5000</h3>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="fas fa-procedures"></i>
                        <h3 class="counter">2500</h3>
                        <p>Successful Surgeries</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="fas fa-award"></i>
                        <h3 class="counter">10</h3>
                        <p>Years Experience</p>
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
                <p>Get in touch with us for appointments and inquiries</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4 class="mb-4">Get In Touch</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5>Location</h5>
                                <p>Old Motor Stand, Agartala<br>Tripura, India</p>
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
                        <li><a href="#doctors">Our Doctors</a></li>
                        <li><a href="doctors.php">Book Doctor</a></li>
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
                                <option>Surgery</option>
                                <option>ENT</option>
                                <option>Neurology</option>
                                <option>Urology</option>
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
