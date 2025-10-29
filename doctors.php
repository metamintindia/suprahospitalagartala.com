<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors - Supra Multi-Speciality Hospital</title>
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
                    <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link active" href="doctors.php">Our Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                    <li class="nav-item ms-3">
                        <button class="btn-appointment" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            Book Appointment
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Our Medical Specialists</h1>
            <p>Meet our team of highly qualified and experienced medical professionals</p>
        </div>
    </div>

    <!-- Doctors List Section -->
    <section class="doctors-list-section">
        <div class="container">
            <!-- Filter Buttons -->
            <div class="filter-buttons text-center mb-5">
                <button class="filter-btn active" data-filter="all">All Doctors</button>
                <button class="filter-btn" data-filter="surgery">Surgery</button>
                <button class="filter-btn" data-filter="gynecology">Gynecology</button>
                <button class="filter-btn" data-filter="pediatrics">Pediatrics</button>
                <button class="filter-btn" data-filter="medicine">Medicine</button>
                <button class="filter-btn" data-filter="orthopedics">Orthopedics</button>
                <button class="filter-btn" data-filter="ent">ENT</button>
                <button class="filter-btn" data-filter="neurology">Neurology</button>
                <button class="filter-btn" data-filter="urology">Urology</button>
            </div>

            <!-- Doctors Grid -->
            <div class="row g-4">
                <!-- Doctor 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="surgery">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" alt="Dr. Abantika Nath">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Abantika Nath</h5>
                            <span class="specialty">Laparoscopic & General Surgeon</span>
                            <p class="qualification">MBBS, MS, DMAS, FMAS</p>
                            <p class="institute">Lucknow (RML University)</p>
                            <div class="doctor-reg">Reg: TSMC002171</div>
                            <button class="btn-book-now" data-doctor="Dr. Abantika Nath" data-specialty="Surgery">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="medicine">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop" alt="Dr. Anita Baidya">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Anita Baidya</h5>
                            <span class="specialty">Sonologist</span>
                            <p class="qualification">MBBS</p>
                            <div class="doctor-reg">Reg: TSMC001615</div>
                            <button class="btn-book-now" data-doctor="Dr. Anita Baidya" data-specialty="Sonology">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="gynecology">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop" alt="Dr. Arpan Bhattacharjee">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Arpan Bhattacharjee</h5>
                            <span class="specialty">Gynecologist</span>
                            <p class="qualification">MBBS, DGO</p>
                            <button class="btn-book-now" data-doctor="Dr. Arpan Bhattacharjee" data-specialty="Gynecology">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="neurology">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop" alt="Dr. Arpan Mitra">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Arpan Mitra</h5>
                            <span class="specialty">Neurologist</span>
                            <p class="qualification">MD Medicine, DM Neurology (BHU, Varanasi)</p>
                            <p class="institute">AGMC & GBPH</p>
                            <button class="btn-book-now" data-doctor="Dr. Arpan Mitra" data-specialty="Neurology">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="gynecology">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=400&fit=crop" alt="Dr. Ashok Majumdar">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Ashok Majumdar</h5>
                            <span class="specialty">Gynecologist</span>
                            <p class="qualification">MBBS, DGO</p>
                            <button class="btn-book-now" data-doctor="Dr. Ashok Majumdar" data-specialty="Gynecology">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="gynecology">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400&h=400&fit=crop" alt="Dr. B. Sindhu">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. B. Sindhu</h5>
                            <span class="specialty">Obstetrician & Gynecologist</span>
                            <p class="qualification">MBBS, MS (O&G)</p>
                            <button class="btn-book-now" data-doctor="Dr. B. Sindhu" data-specialty="Gynecology">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="medicine">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=400&fit=crop" alt="Dr. Bidhan Chandra Roy">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Bidhan Chandra Roy</h5>
                            <span class="specialty">General Physician</span>
                            <p class="qualification">MBBS</p>
                            <button class="btn-book-now" data-doctor="Dr. Bidhan Chandra Roy" data-specialty="General Medicine">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="ent">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?w=400&h=400&fit=crop" alt="Dr. Bidhan Das">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Bidhan Das</h5>
                            <span class="specialty">ENT Specialist</span>
                            <p class="qualification">MBBS, MS (ENT)</p>
                            <button class="btn-book-now" data-doctor="Dr. Bidhan Das" data-specialty="ENT">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 9 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="medicine">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1666214280557-f1b5022eb634?w=400&h=400&fit=crop" alt="Dr. Bijayaditya Datta">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Bijayaditya Datta</h5>
                            <span class="specialty">Consultant Physician</span>
                            <p class="qualification">MBBS, MD (Medicine)</p>
                            <div class="doctor-reg">Reg: TSMC000447</div>
                            <button class="btn-book-now" data-doctor="Dr. Bijayaditya Datta" data-specialty="General Medicine">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 10 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="pediatrics">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=400&h=400&fit=crop" alt="Dr. Chayan Sarkar">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Chayan Sarkar</h5>
                            <span class="specialty">Pediatrician</span>
                            <p class="qualification">MBBS, MD Pediatric</p>
                            <p class="institute">Asst. Professor AGMC & GBPH</p>
                            <div class="doctor-reg">Reg: TSMC002483</div>
                            <button class="btn-book-now" data-doctor="Dr. Chayan Sarkar" data-specialty="Pediatrics">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 11 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="gynecology">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop" alt="Dr. Debajit Debnath">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Debajit Debnath</h5>
                            <span class="specialty">Obstetrician & Gynecologist</span>
                            <p class="qualification">MBBS, MS (O&G)</p>
                            <button class="btn-book-now" data-doctor="Dr. Debajit Debnath" data-specialty="Gynecology">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 12 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="surgery">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop" alt="Dr. Diptanu Deb">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Diptanu Deb</h5>
                            <span class="specialty">Surgeon</span>
                            <p class="qualification">MBBS, DNB (Surgery)</p>
                            <button class="btn-book-now" data-doctor="Dr. Diptanu Deb" data-specialty="Surgery">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 13 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="medicine">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=400&fit=crop" alt="Dr. Diptanu Laskar">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Diptanu Laskar</h5>
                            <span class="specialty">General Physician</span>
                            <p class="qualification">MBBS</p>
                            <button class="btn-book-now" data-doctor="Dr. Diptanu Laskar" data-specialty="General Medicine">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 14 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="surgery">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" alt="Dr. Diptendu Chaudhuri">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Diptendu Chaudhuri</h5>
                            <span class="specialty">General & Laparoscopic Surgeon</span>
                            <p class="qualification">MBBS, MS, FMAS</p>
                            <button class="btn-book-now" data-doctor="Dr. Diptendu Chaudhuri" data-specialty="Surgery">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 15 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="orthopedics">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=400&fit=crop" alt="Dr. J.K. Nag">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. J.K. Nag</h5>
                            <span class="specialty">Orthopedic Surgeon</span>
                            <p class="qualification">MS (Ortho)</p>
                            <button class="btn-book-now" data-doctor="Dr. J.K. Nag" data-specialty="Orthopedics">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 16 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="orthopedics">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop" alt="Dr. Himadri Shekhar Deb">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Himadri Shekhar Deb</h5>
                            <span class="specialty">Orthopedic Surgeon</span>
                            <p class="qualification">MBBS, MS Orthopaedic</p>
                            <p class="institute">TMC & DR BRAM Teaching Hospital</p>
                            <div class="doctor-reg">Reg: TSMC002037</div>
                            <button class="btn-book-now" data-doctor="Dr. Himadri Shekhar Deb" data-specialty="Orthopedics">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 17 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="medicine">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?w=400&h=400&fit=crop" alt="Dr. J.M. Das">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. J.M. Das</h5>
                            <span class="specialty">Emergency Medicine</span>
                            <p class="qualification">MBBS, EMOC</p>
                            <button class="btn-book-now" data-doctor="Dr. J.M. Das" data-specialty="Emergency Medicine">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 18 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="urology">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1666214280557-f1b5022eb634?w=400&h=400&fit=crop" alt="Dr. Jiban Debnath">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Jiban Debnath</h5>
                            <span class="specialty">Urologist & Renal Transplant Surgeon</span>
                            <p class="qualification">MS, DrNB Urology</p>
                            <div class="doctor-reg">Reg: TSMC000160</div>
                            <button class="btn-book-now" data-doctor="Dr. Jiban Debnath" data-specialty="Urology">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 19 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="medicine">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400&h=400&fit=crop" alt="Dr. Mamata Debbarma">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Mamata Debbarma</h5>
                            <span class="specialty">General Physician</span>
                            <p class="qualification">MBBS</p>
                            <button class="btn-book-now" data-doctor="Dr. Mamata Debbarma" data-specialty="General Medicine">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Doctor 20 -->
                <div class="col-lg-3 col-md-4 col-sm-6 doctor-item" data-category="medicine">
                    <div class="doctor-card-detailed">
                        <div class="doctor-img">
                            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=400&fit=crop" alt="Dr. Manish Kr. Sen">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Manish Kr. Sen</h5>
                            <span class="specialty">General Physician</span>
                            <p class="qualification">MBBS (Patna)</p>
                            <button class="btn-book-now" data-doctor="Dr. Manish Kr. Sen" data-specialty="General Medicine">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </button>
                        </div>
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
                    <p>Supra Multi-Speciality Hospital is committed to providing world-class healthcare services with compassion and excellence.</p>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about">About Us</a></li>
                        <li><a href="index.php#services">Services</a></li>
                        <li><a href="doctors.php">Our Doctors</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Our Services</h5>
                    <ul>
                        <li><a href="#">Joint Replacement</a></li>
                        <li><a href="#">Arthroscopy</a></li>
                        <li><a href="#">Pediatrics Care</a></li>
                        <li><a href="#">Gynecology</a></li>
                        <li><a href="#">General Medicine</a></li>
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
                <p>&copy; 2025 Supra Multi-Speciality Hospital. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Appointment Modal -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background: var(--primary-blue); color: white;">
                    <h5 class="modal-title">Book Appointment</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="doctorAppointmentForm">
                        <div class="mb-3">
                            <label class="form-label">Doctor</label>
                            <input type="text" id="selectedDoctor" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <input type="text" id="selectedSpecialty" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name *" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Phone Number *" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address *" required>
                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-control" required>
                                <option value="">Preferred Time</option>
                                <option>9:00 AM - 10:00 AM</option>
                                <option>10:00 AM - 11:00 AM</option>
                                <option>11:00 AM - 12:00 PM</option>
                                <option>12:00 PM - 1:00 PM</option>
                                <option>2:00 PM - 3:00 PM</option>
                                <option>3:00 PM - 4:00 PM</option>
                                <option>4:00 PM - 5:00 PM</option>
                                <option>5:00 PM - 6:00 PM</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" placeholder="Additional Information"></textarea>
                        </div>
                        <button type="submit" class="btn-appointment w-100">Confirm Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // Filter doctors by specialty
        $('.filter-btn').click(function() {
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            const filter = $(this).data('filter');
            
            if (filter === 'all') {
                $('.doctor-item').fadeIn();
            } else {
                $('.doctor-item').hide();
                $(`.doctor-item[data-category="${filter}"]`).fadeIn();
            }
        });

        // Book appointment button
        $('.btn-book-now').click(function() {
            const doctorName = $(this).data('doctor');
            const specialty = $(this).data('specialty');
            
            $('#selectedDoctor').val(doctorName);
            $('#selectedSpecialty').val(specialty);
            $('#appointmentModal').modal('show');
        });

        // Form submission
        $('#doctorAppointmentForm').submit(function(e) {
            e.preventDefault();
            alert('Your appointment request has been submitted successfully! We will confirm your appointment shortly via phone call.');
            $('#appointmentModal').modal('hide');
            this.reset();
        });
    </script>
</body>
</html>
