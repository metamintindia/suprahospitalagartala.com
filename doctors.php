<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <h1 data-aos="fade-down">Our Doctors</h1>
            <p data-aos="fade-up" data-aos-delay="200">Meet our team of highly qualified medical specialists</p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="400">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Doctors</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /Page Header -->

<!-- Doctors Directory -->
<section class="doctors-section">
    <div class="container">
        
        <!-- Section Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-user-md"></i> Medical Experts
            </span>
            <h2 class="section-title">Complete Doctors Directory</h2>
            <p class="section-subtitle">
                Our team of 25+ experienced doctors are dedicated to providing exceptional<br>
                medical care across multiple specialties
            </p>
        </div>

        <!-- Search Box -->
        <div class="doctor-search-box" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="search-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" id="doctorSearch" class="form-control" placeholder="Search doctors by name or specialty...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Specialty Filter Tabs -->
        <div class="specialty-filter" data-aos="fade-up" data-aos-delay="200">
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
            <button class="specialty-btn" data-specialty="medicine">
                <i class="fas fa-stethoscope"></i> Medicine
            </button>
            <button class="specialty-btn" data-specialty="ent">
                <i class="fas fa-deaf"></i> ENT
            </button>
        </div>

        <!-- Doctors Grid -->
        <div class="row g-4 mt-4" id="doctorsGrid">
            
            <!-- Doctor 1 - Dr. Abantika Nath -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="surgery" data-aos="fade-up">
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

            <!-- Doctor 2 - Dr. Anita Baidya -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="medicine" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=500&fit=crop" alt="Dr. Anita Baidya">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
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

            <!-- Doctor 3 - Dr. Arpan Bhattacharjee -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="gynecology" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=500&fit=crop" alt="Dr. Arpan Bhattacharjee">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
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

            <!-- Doctor 4 - Dr. Arpan Mitra -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="neurology" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=500&fit=crop" alt="Dr. Arpan Mitra">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
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

            <!-- Doctor 5 - Dr. Ashok Majumdar -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="gynecology" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=500&fit=crop" alt="Dr. Ashok Majumdar">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge gynecology">
                            <i class="fas fa-female"></i> Gynecology
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Ashok Majumdar</h5>
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

            <!-- Doctor 6 - Dr. B. Sindhu -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="gynecology" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400&h=500&fit=crop" alt="Dr. B. Sindhu">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
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

            <!-- Doctor 7 - Dr. Bidhan Chandra Roy -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="medicine" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=500&fit=crop" alt="Dr. Bidhan Chandra Roy">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge medicine">
                            <i class="fas fa-stethoscope"></i> Medicine
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Bidhan Chandra Roy</h5>
                        <p class="doctor-specialty">General Physician</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 8 - Dr. Bidhan Das -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="ent" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?w=400&h=500&fit=crop" alt="Dr. Bidhan Das">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge ent">
                            <i class="fas fa-deaf"></i> ENT
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Bidhan Das</h5>
                        <p class="doctor-specialty">ENT Specialist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS (ENT)</span>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 9 - Dr. Chayan Sarkar -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="pediatrics" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=400&h=500&fit=crop" alt="Dr. Chayan Sarkar">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
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

            <!-- Doctor 10 - Dr. Diptendu Chaudhuri -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="surgery" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=500&fit=crop" alt="Dr. Diptendu Chaudhuri">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
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

            <!-- Doctor 11 - Dr. Himadri Shekhar Deb -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="orthopedics" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=500&fit=crop" alt="Dr. Himadri Shekhar Deb">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
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
                            <span class="qualification-tag">MS Ortho</span>
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

            <!-- Doctor 12 - Dr. Jagat Debbarma -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="medicine" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=500&fit=crop" alt="Dr. Jagat Debbarma">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge medicine">
                            <i class="fas fa-stethoscope"></i> Medicine
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Jagat Debbarma</h5>
                        <p class="doctor-specialty">General Physician</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 13 - Dr. Jonaki Acharjee -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="gynecology" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=500&fit=crop" alt="Dr. Jonaki Acharjee">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge gynecology">
                            <i class="fas fa-female"></i> Gynecology
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Jonaki Acharjee</h5>
                        <p class="doctor-specialty">Consultant Gynecologist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">DGO</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001659</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 14 - Dr. Kunal Pal -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="medicine" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=500&fit=crop" alt="Dr. Kunal Pal">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge medicine">
                            <i class="fas fa-stethoscope"></i> Medicine
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Kunal Pal</h5>
                        <p class="doctor-specialty">General Physician</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001673</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 15 - Dr. Kallol Saha -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="surgery" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400&h=500&fit=crop" alt="Dr. Kallol Saha">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge surgery">
                            <i class="fas fa-user-md"></i> Surgery
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Kallol Saha</h5>
                        <p class="doctor-specialty">General Surgeon</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-hospital"></i>
                                <span>TMC & DR BRAM Hospital</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001983</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 16 - Dr. M.L. Deb -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="orthopedics" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=500&fit=crop" alt="Dr. M.L. Deb">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge orthopedics">
                            <i class="fas fa-bone"></i> Orthopedics
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. M.L. Deb</h5>
                        <p class="doctor-specialty">Orthopedic Surgeon</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS Ortho</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001617</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 17 - Dr. Moumita Karmakar -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="pediatrics" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?w=400&h=500&fit=crop" alt="Dr. Moumita Karmakar">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge pediatrics">
                            <i class="fas fa-baby"></i> Pediatrics
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Moumita Karmakar</h5>
                        <p class="doctor-specialty">Consultant Pediatrician</p>
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
                                <span>Reg: TSMC002482</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 18 - Dr. Partha Chakraborty -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="ent" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=400&h=500&fit=crop" alt="Dr. Partha Chakraborty">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge ent">
                            <i class="fas fa-deaf"></i> ENT
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Partha Chakraborty</h5>
                        <p class="doctor-specialty">ENT Specialist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS ENT</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001985</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 19 - Dr. Pranab Kumar Paul -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="medicine" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=500&fit=crop" alt="Dr. Pranab Kumar Paul">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge medicine">
                            <i class="fas fa-stethoscope"></i> Medicine
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Pranab Kumar Paul</h5>
                        <p class="doctor-specialty">General Physician</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001622</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 20 - Dr. Prosenjit Deb -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="surgery" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=500&fit=crop" alt="Dr. Prosenjit Deb">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge surgery">
                            <i class="fas fa-user-md"></i> Surgery
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Prosenjit Deb</h5>
                        <p class="doctor-specialty">General Surgeon</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001869</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 21 - Dr. Rathindra Nath Deb -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="gynecology" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=500&fit=crop" alt="Dr. Rathindra Nath Deb">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge gynecology">
                            <i class="fas fa-female"></i> Gynecology
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Rathindra Nath Deb</h5>
                        <p class="doctor-specialty">Consultant Gynecologist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">DGO</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC001617</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 22 - Dr. S.K. Roy -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="medicine" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=500&fit=crop" alt="Dr. S.K. Roy">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge medicine">
                            <i class="fas fa-stethoscope"></i> Medicine
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. S.K. Roy</h5>
                        <p class="doctor-specialty">Consultant Physician</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MD</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-hospital"></i>
                                <span>Senior Consultant</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 23 - Dr. Sandipan Deb -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="orthopedics" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=500&fit=crop" alt="Dr. Sandipan Deb">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge orthopedics">
                            <i class="fas fa-bone"></i> Orthopedics
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Sandipan Deb</h5>
                        <p class="doctor-specialty">Orthopedic Surgeon</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MS Ortho</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC002189</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 24 - Dr. Saurabh Deb -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="neurology" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400&h=500&fit=crop" alt="Dr. Saurabh Deb">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge neurology">
                            <i class="fas fa-brain"></i> Neurology
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Saurabh Deb</h5>
                        <p class="doctor-specialty">Consultant Neurologist</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MD</span>
                            <span class="qualification-tag">DM Neurology</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-hospital"></i>
                                <span>Senior Consultant</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 25 - Dr. Subhajit Sarkar -->
            <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-specialty="pediatrics" data-aos="fade-up">
                <div class="doctor-card-enhanced">
                    <div class="doctor-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=500&fit=crop" alt="Dr. Subhajit Sarkar">
                        <div class="doctor-quick-actions">
                            <a href="appointment.php" class="quick-action-btn"><i class="fas fa-calendar-check"></i></a>
                            <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="quick-action-btn"><i class="fas fa-phone"></i></a>
                        </div>
                        <div class="specialty-badge pediatrics">
                            <i class="fas fa-baby"></i> Pediatrics
                        </div>
                    </div>
                    <div class="doctor-details">
                        <h5 class="doctor-name">Dr. Subhajit Sarkar</h5>
                        <p class="doctor-specialty">Pediatrician</p>
                        <div class="doctor-qualifications">
                            <span class="qualification-tag">MBBS</span>
                            <span class="qualification-tag">MD Pediatrics</span>
                        </div>
                        <div class="doctor-meta">
                            <div class="meta-item">
                                <i class="fas fa-id-card"></i>
                                <span>Reg: TSMC002591</span>
                            </div>
                        </div>
                        <a href="appointment.php" class="btn-book-doctor">
                            <i class="fas fa-calendar-alt"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Results Count -->
        <div class="doctor-count-display text-center mt-5" data-aos="fade-up">
            <p class="text-muted fs-5">Showing <span id="visibleCount" class="fw-bold text-primary-red">25</span> of <span class="fw-bold">25</span> specialist doctors</p>
        </div>

    </div>
</section>
<!-- /Doctors Directory -->

<!-- CTA Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="cta-box-large" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white mb-3">
                        <i class="fas fa-user-md"></i> Consult Our Expert Doctors
                    </h2>
                    <p class="text-white mb-0 lead">Book an appointment with our specialists for personalized medical care and treatment.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="appointment.php" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-check"></i> Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /CTA Section -->

<?php include 'includes/footer.php'; ?>
