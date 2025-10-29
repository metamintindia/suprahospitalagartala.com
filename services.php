<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <h1 data-aos="fade-down">Our Services</h1>
            <p data-aos="fade-up" data-aos-delay="200">Comprehensive healthcare solutions for all your medical needs</p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="400">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /Page Header -->

<!-- Services Introduction -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="section-header text-start">
                    <h2 class="section-title">Multi-Specialty Healthcare Excellence</h2>
                    <p class="section-subtitle">Advanced medical care across all specialties</p>
                </div>
                
                <p class="lead">At Supra Multi-Speciality Hospital, we offer a comprehensive range of medical services delivered by experienced specialists using state-of-the-art technology.</p>
                
                <p>Our multi-specialty approach ensures that patients receive coordinated, holistic care for all their healthcare needs under one roof. From routine check-ups to complex surgical procedures, we are equipped to handle a wide spectrum of medical conditions with expertise and compassion.</p>
                
                <ul class="list-unstyled mt-4">
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> 15+ Specialized Departments</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> Advanced Diagnostic Facilities</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> Modern Operation Theaters</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary-red me-2"></i> 24/7 Emergency Services</li>
                </ul>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&h=600&fit=crop" alt="Hospital Services" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>
<!-- /Services Introduction -->

<!-- Main Services Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Our Medical Specialties</h2>
            <p class="section-subtitle">Expert care across multiple medical disciplines</p>
        </div>
        
        <div class="row g-4">
            
            <!-- Service 1: Orthopedics -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-detailed" id="orthopedics">
                    <div class="service-icon-box">
                        <i class="fas fa-bone"></i>
                    </div>
                    <div class="service-content">
                        <h4>Orthopedics & Joint Replacement</h4>
                        <p>Comprehensive bone and joint care with advanced surgical techniques for better mobility and pain relief.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Total Joint Replacement (Hip, Knee)</li>
                            <li><i class="fas fa-check"></i> Arthroscopy & Sports Medicine</li>
                            <li><i class="fas fa-check"></i> Fracture Management</li>
                            <li><i class="fas fa-check"></i> Spine Surgery</li>
                            <li><i class="fas fa-check"></i> Ligament Repairs & Reconstruction</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 2: Gynecology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-detailed" id="gynecology">
                    <div class="service-icon-box">
                        <i class="fas fa-female"></i>
                    </div>
                    <div class="service-content">
                        <h4>Gynecology & Obstetrics</h4>
                        <p>Complete women's health services including maternity care, gynecological treatments, and high-risk pregnancy management.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Antenatal & Postnatal Care</li>
                            <li><i class="fas fa-check"></i> Normal & Cesarean Delivery</li>
                            <li><i class="fas fa-check"></i> Gynecological Surgeries</li>
                            <li><i class="fas fa-check"></i> Infertility Treatment</li>
                            <li><i class="fas fa-check"></i> Family Planning Services</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 3: Pediatrics -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-detailed" id="pediatrics">
                    <div class="service-icon-box">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="service-content">
                        <h4>Pediatrics & Neonatology</h4>
                        <p>Specialized care for infants, children, and adolescents with experienced pediatricians and child specialists.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Newborn Care & Vaccination</li>
                            <li><i class="fas fa-check"></i> Child Growth & Development</li>
                            <li><i class="fas fa-check"></i> Pediatric Emergency Care</li>
                            <li><i class="fas fa-check"></i> Treatment of Childhood Diseases</li>
                            <li><i class="fas fa-check"></i> Neonatal Intensive Care</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 4: General Surgery -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-detailed" id="surgery">
                    <div class="service-icon-box">
                        <i class="fas fa-procedures"></i>
                    </div>
                    <div class="service-content">
                        <h4>General & Laparoscopic Surgery</h4>
                        <p>Advanced surgical procedures including minimally invasive laparoscopic surgeries for faster recovery.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Laparoscopic Surgery</li>
                            <li><i class="fas fa-check"></i> Hernia Repair</li>
                            <li><i class="fas fa-check"></i> Gallbladder Surgery</li>
                            <li><i class="fas fa-check"></i> Appendectomy</li>
                            <li><i class="fas fa-check"></i> GI & Colorectal Surgery</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 5: General Medicine -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-detailed" id="medicine">
                    <div class="service-icon-box">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="service-content">
                        <h4>General Medicine & Physician</h4>
                        <p>Comprehensive medical consultation and treatment for all general health conditions and chronic diseases.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Diabetes Management</li>
                            <li><i class="fas fa-check"></i> Hypertension Treatment</li>
                            <li><i class="fas fa-check"></i> Fever & Infection Care</li>
                            <li><i class="fas fa-check"></i> Preventive Health Check-ups</li>
                            <li><i class="fas fa-check"></i> Chronic Disease Management</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 6: Neurology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-detailed" id="neurology">
                    <div class="service-icon-box">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="service-content">
                        <h4>Neurology & Neurosurgery</h4>
                        <p>Expert care for brain and nervous system disorders with advanced diagnostic and treatment facilities.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Stroke Management</li>
                            <li><i class="fas fa-check"></i> Epilepsy Treatment</li>
                            <li><i class="fas fa-check"></i> Headache & Migraine Care</li>
                            <li><i class="fas fa-check"></i> Parkinson's Disease</li>
                            <li><i class="fas fa-check"></i> Nerve Disorders</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 7: ENT -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-detailed" id="ent">
                    <div class="service-icon-box">
                        <i class="fas fa-deaf"></i>
                    </div>
                    <div class="service-content">
                        <h4>ENT (Ear, Nose & Throat)</h4>
                        <p>Specialized treatment for ear, nose, throat disorders and head & neck surgeries.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Ear Infections & Hearing Loss</li>
                            <li><i class="fas fa-check"></i> Sinusitis & Nasal Disorders</li>
                            <li><i class="fas fa-check"></i> Tonsil & Adenoid Surgery</li>
                            <li><i class="fas fa-check"></i> Voice & Throat Problems</li>
                            <li><i class="fas fa-check"></i> Endoscopic Sinus Surgery</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 8: Urology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-detailed" id="urology">
                    <div class="service-icon-box">
                        <i class="fas fa-kidneys"></i>
                    </div>
                    <div class="service-content">
                        <h4>Urology & Kidney Care</h4>
                        <p>Complete urological care including kidney stone treatment and urinary tract disorders.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Kidney Stone Treatment</li>
                            <li><i class="fas fa-check"></i> Prostate Disorders</li>
                            <li><i class="fas fa-check"></i> Urinary Tract Infections</li>
                            <li><i class="fas fa-check"></i> Bladder Problems</li>
                            <li><i class="fas fa-check"></i> Male Infertility</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 9: Diagnostics -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-detailed" id="diagnostics">
                    <div class="service-icon-box">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <div class="service-content">
                        <h4>Diagnostics & Pathology</h4>
                        <p>State-of-the-art diagnostic services with accurate and timely results for effective treatment.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Digital X-Ray</li>
                            <li><i class="fas fa-check"></i> Ultrasound & Sonography</li>
                            <li><i class="fas fa-check"></i> ECG & ECHO</li>
                            <li><i class="fas fa-check"></i> Complete Blood Tests</li>
                            <li><i class="fas fa-check"></i> Pathology Lab Services</li>
                        </ul>
                        <a href="appointment.php" class="btn-book-service">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- /Main Services Section -->

<!-- Additional Services -->
<section class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Additional Facilities</h2>
            <p class="section-subtitle">Comprehensive healthcare support services</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="additional-service-card">
                    <i class="fas fa-ambulance"></i>
                    <h5>24/7 Emergency</h5>
                    <p>Round-the-clock emergency medical services</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="additional-service-card">
                    <i class="fas fa-capsules"></i>
                    <h5>Pharmacy</h5>
                    <p>In-house pharmacy with all medicines</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="additional-service-card">
                    <i class="fas fa-bed"></i>
                    <h5>IPD Services</h5>
                    <p>Comfortable patient rooms and wards</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="additional-service-card">
                    <i class="fas fa-hospital-user"></i>
                    <h5>OPD Services</h5>
                    <p>Outpatient consultation facilities</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="additional-service-card">
                    <i class="fas fa-syringe"></i>
                    <h5>Vaccination</h5>
                    <p>Immunization services for all ages</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="additional-service-card">
                    <i class="fas fa-heartbeat"></i>
                    <h5>ICU/CCU</h5>
                    <p>Intensive & critical care units</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="additional-service-card">
                    <i class="fas fa-hospital-alt"></i>
                    <h5>Operation Theater</h5>
                    <p>Modern surgical facilities</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="additional-service-card">
                    <i class="fas fa-user-shield"></i>
                    <h5>Health Packages</h5>
                    <p>Preventive health check-ups</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Additional Services -->

<!-- CTA Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="cta-box-large" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white mb-3">
                        <i class="fas fa-hospital"></i> Need Medical Consultation?
                    </h2>
                    <p class="text-white mb-0 lead">Our expert doctors are here to help you. Book your appointment today for quality healthcare services.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="appointment.php" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-alt"></i> Book Appointment
                    </a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg ms-2">
                        <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /CTA Section -->

<?php include 'includes/footer.php'; ?>