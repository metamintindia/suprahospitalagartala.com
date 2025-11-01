<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <h1 data-aos="fade-down">Our Medical Services</h1>
            <p data-aos="fade-up" data-aos-delay="200">Comprehensive healthcare services across multiple specialties</p>
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

<!-- Services Overview Section -->
<section class="section">
    <div class="container">
        
        <!-- Section Header -->
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-hospital"></i> Medical Excellence
            </span>
            <h2 class="section-title">Comprehensive Healthcare Services</h2>
            <p class="section-subtitle">
                State-of-the-art medical facilities and expert care across<br>
                multiple specialties for complete family healthcare
            </p>
        </div>

        <!-- Main Services Grid -->
        <div class="row g-4">
            
            <!-- Service 1: Orthopaedics -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-premium">
                    <div class="service-icon-box ortho">
                        <i class="fas fa-bone"></i>
                    </div>
                    <h3>Orthopaedics</h3>
                    <p>Comprehensive bone, joint and musculoskeletal care with advanced surgical techniques including joint replacement and arthroscopy.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Joint Replacement Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Arthroscopic Procedures</li>
                        <li><i class="fas fa-check-circle"></i> Fracture Management</li>
                        <li><i class="fas fa-check-circle"></i> Sports Injury Treatment</li>
                        <li><i class="fas fa-check-circle"></i> Spine Surgery</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 2: General Surgery -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="service-card-premium">
                    <div class="service-icon-box surgery">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>General Surgery</h3>
                    <p>Expert surgical care using minimally invasive laparoscopic techniques for faster recovery and better outcomes.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Laparoscopic Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Hernia Repair</li>
                        <li><i class="fas fa-check-circle"></i> Gallbladder Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Appendectomy</li>
                        <li><i class="fas fa-check-circle"></i> GI Surgery</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 3: Obstetrics & Gynaecology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-premium">
                    <div class="service-icon-box gynec">
                        <i class="fas fa-female"></i>
                    </div>
                    <h3>Obstetrics & Gynaecology</h3>
                    <p>Complete women's health services from pregnancy care to gynecological treatments with compassionate support.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Maternity & Delivery Care</li>
                        <li><i class="fas fa-check-circle"></i> High-Risk Pregnancy</li>
                        <li><i class="fas fa-check-circle"></i> Gynecological Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Infertility Treatment</li>
                        <li><i class="fas fa-check-circle"></i> Family Planning</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 4: General Medicine -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="service-card-premium">
                    <div class="service-icon-box medicine">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3>General Medicine</h3>
                    <p>Comprehensive medical care for acute and chronic conditions with expert diagnosis and treatment plans.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Diabetes Management</li>
                        <li><i class="fas fa-check-circle"></i> Hypertension Care</li>
                        <li><i class="fas fa-check-circle"></i> Fever & Infections</li>
                        <li><i class="fas fa-check-circle"></i> Preventive Healthcare</li>
                        <li><i class="fas fa-check-circle"></i> Health Check-ups</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 5: Paediatrics & Neonatology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-premium">
                    <div class="service-icon-box paeds">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3>Paediatrics & Neonatology</h3>
                    <p>Specialized care for infants, children and adolescents with dedicated NICU facilities for newborn care.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Newborn Care (NICU)</li>
                        <li><i class="fas fa-check-circle"></i> Child Vaccination</li>
                        <li><i class="fas fa-check-circle"></i> Growth Monitoring</li>
                        <li><i class="fas fa-check-circle"></i> Pediatric Emergencies</li>
                        <li><i class="fas fa-check-circle"></i> Child Nutrition</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 6: Urology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="service-card-premium">
                    <div class="service-icon-box uro">
                        <i class="fas fa-kidney"></i>
                    </div>
                    <h3>Urology</h3>
                    <p>Advanced urological care for kidney, bladder and prostate conditions with minimally invasive treatments.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Kidney Stone Treatment</li>
                        <li><i class="fas fa-check-circle"></i> Prostate Care</li>
                        <li><i class="fas fa-check-circle"></i> Urinary Tract Infections</li>
                        <li><i class="fas fa-check-circle"></i> Bladder Disorders</li>
                        <li><i class="fas fa-check-circle"></i> Male Infertility</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 7: Gynaecologic Oncology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card-premium featured">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Specialized
                    </div>
                    <div class="service-icon-box onco-gynec">
                        <i class="fas fa-ribbon"></i>
                    </div>
                    <h3>Gynaecologic Oncology</h3>
                    <p>Specialized cancer treatment for women's reproductive system with comprehensive surgical and medical care.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Ovarian Cancer Care</li>
                        <li><i class="fas fa-check-circle"></i> Cervical Cancer Treatment</li>
                        <li><i class="fas fa-check-circle"></i> Uterine Cancer Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Cancer Screening</li>
                        <li><i class="fas fa-check-circle"></i> Chemotherapy Support</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 8: Surgical Oncology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                <div class="service-card-premium featured">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Specialized
                    </div>
                    <div class="service-icon-box onco">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <h3>Surgical Oncology</h3>
                    <p>Expert surgical treatment for various cancers with multidisciplinary approach and advanced techniques.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Cancer Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Tumor Removal</li>
                        <li><i class="fas fa-check-circle"></i> Breast Cancer Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Colorectal Cancer Care</li>
                        <li><i class="fas fa-check-circle"></i> Post-operative Care</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 9: Neurology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card-premium">
                    <div class="service-icon-box neuro">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Neurology</h3>
                    <p>Comprehensive neurological care for brain, spine and nervous system disorders with latest diagnostic tools.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Stroke Management</li>
                        <li><i class="fas fa-check-circle"></i> Epilepsy Treatment</li>
                        <li><i class="fas fa-check-circle"></i> Headache & Migraine</li>
                        <li><i class="fas fa-check-circle"></i> Parkinson's Disease</li>
                        <li><i class="fas fa-check-circle"></i> Nerve Disorders</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 10: ENT -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="550">
                <div class="service-card-premium">
                    <div class="service-icon-box ent">
                        <i class="fas fa-deaf"></i>
                    </div>
                    <h3>ENT (Ear, Nose & Throat)</h3>
                    <p>Complete ENT care for ear, nose, throat and head-neck disorders with modern surgical facilities.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Hearing Disorders</li>
                        <li><i class="fas fa-check-circle"></i> Sinus Problems</li>
                        <li><i class="fas fa-check-circle"></i> Tonsil & Adenoid Surgery</li>
                        <li><i class="fas fa-check-circle"></i> Voice Disorders</li>
                        <li><i class="fas fa-check-circle"></i> Sleep Apnea Treatment</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 11: Diagnostics & Pathology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card-premium">
                    <div class="service-icon-box diagnostic">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Diagnostics & Pathology</h3>
                    <p>State-of-the-art diagnostic facilities with accurate and timely test results for better treatment decisions.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Laboratory Services</li>
                        <li><i class="fas fa-check-circle"></i> X-Ray & Imaging</li>
                        <li><i class="fas fa-check-circle"></i> Ultrasound Services</li>
                        <li><i class="fas fa-check-circle"></i> ECG & Echo</li>
                        <li><i class="fas fa-check-circle"></i> Blood Tests</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 12: Pharmacy -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="650">
                <div class="service-card-premium">
                    <div class="service-icon-box pharmacy">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3>In-House Pharmacy</h3>
                    <p>24/7 pharmacy services with comprehensive stock of medicines and healthcare products at affordable prices.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> 24/7 Availability</li>
                        <li><i class="fas fa-check-circle"></i> Quality Medications</li>
                        <li><i class="fas fa-check-circle"></i> Affordable Pricing</li>
                        <li><i class="fas fa-check-circle"></i> Home Delivery</li>
                        <li><i class="fas fa-check-circle"></i> Expert Consultation</li>
                    </ul>
                    <a href="service-detail.php" class="btn-service-more">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- /Services Overview Section -->

<!-- Additional Facilities Section -->
<section class="section bg-light-gray">
    <div class="container">
        
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-hospital-alt"></i> Hospital Facilities
            </span>
            <h2 class="section-title">Additional Healthcare Facilities</h2>
            <p class="section-subtitle">
                Comprehensive support services for complete patient care
            </p>
        </div>

        <div class="row g-4">
            
            <!-- Facility 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h5>24/7 Emergency</h5>
                    <p>Round-the-clock emergency services with trauma care</p>
                </div>
            </div>

            <!-- Facility 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h5>IPD & OPD Services</h5>
                    <p>Comfortable inpatient and outpatient facilities</p>
                </div>
            </div>

            <!-- Facility 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h5>ICU & CCU</h5>
                    <p>Advanced intensive and cardiac care units</p>
                </div>
            </div>

            <!-- Facility 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h5>Vaccination Center</h5>
                    <p>Complete immunization services for all ages</p>
                </div>
            </div>

            <!-- Facility 5 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-procedures"></i>
                    </div>
                    <h5>Operation Theater</h5>
                    <p>Modern OTs with latest surgical equipment</p>
                </div>
            </div>

            <!-- Facility 6 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h5>Radiology Services</h5>
                    <p>Advanced imaging and diagnostic facilities</p>
                </div>
            </div>

            <!-- Facility 7 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <h5>Health Packages</h5>
                    <p>Comprehensive health check-up packages</p>
                </div>
            </div>

            <!-- Facility 8 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="450">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-wheelchair"></i>
                    </div>
                    <h5>Patient Support</h5>
                    <p>Dedicated support services for patients</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- /Additional Facilities Section -->

<!-- Call to Action Section - FIXED COLORS -->
<section class="section cta-section-gradient">
    <div class="container">
        <div class="cta-box-services" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="cta-content">
                        <h2 class="cta-title">
                            <i class="fas fa-hand-holding-medical"></i> Need Medical Assistance?
                        </h2>
                        <p class="cta-text">
                            Book your appointment today and get expert medical consultation<br class="d-none d-lg-block">
                            from our experienced specialists.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="appointment.php" class="btn btn-light btn-lg btn-cta-white">
                        <i class="fas fa-calendar-check"></i> Book Appointment
                    </a>
                    <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="btn btn-outline-light btn-lg mt-2 mt-lg-0 ms-lg-2">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Call to Action Section -->

<?php include 'includes/footer.php'; ?>
