<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';

// In future, this will be dynamic: $doctorId = $_GET['id'];
// For now, this is a template for "Dr. Abantika Nath"
$doctorName = "Dr. Abantika Nath";
$doctorTitle = "Laparoscopic & General Surgeon";
$doctorSpecialty = "surgery";
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <h1 data-aos="fade-down"><?php echo $doctorName; ?></h1>
            <p data-aos="fade-up" data-aos-delay="200"><?php echo $doctorTitle; ?></p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="400">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="doctors.php">Our Doctors</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $doctorName; ?></li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /Page Header -->

<!-- Doctor Profile -->
<section class="section">
    <div class="container">
        <div class="row">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                
                <!-- Doctor Overview Card -->
                <div class="doctor-profile-card" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="doctor-profile-image">
                                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=500&fit=crop" alt="<?php echo $doctorName; ?>" class="img-fluid rounded">
                                <div class="featured-badge">
                                    <i class="fas fa-star"></i> Featured Doctor
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="doctor-profile-info">
                                <h2><?php echo $doctorName; ?></h2>
                                <p class="doctor-designation"><?php echo $doctorTitle; ?></p>
                                
                                <div class="doctor-rating mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-count">(148 Reviews)</span>
                                </div>

                                <div class="doctor-quick-info">
                                    <div class="info-item">
                                        <i class="fas fa-user-md"></i>
                                        <div>
                                            <strong>Specialty</strong>
                                            <p>Laparoscopic & General Surgery</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-briefcase"></i>
                                        <div>
                                            <strong>Experience</strong>
                                            <p>12+ Years</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-university"></i>
                                        <div>
                                            <strong>Education</strong>
                                            <p>MBBS, MS, DMAS, FMAS</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-id-card"></i>
                                        <div>
                                            <strong>Registration</strong>
                                            <p>TSMC002171</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="doctor-actions mt-4">
                                    <a href="appointment.php" class="btn btn-primary">
                                        <i class="fas fa-calendar-check"></i> Book Appointment
                                    </a>
                                    <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="btn btn-outline-primary">
                                        <i class="fas fa-phone"></i> Call Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Doctor -->
                <div class="doctor-detail-section" data-aos="fade-up">
                    <h3><i class="fas fa-user-circle"></i> About <?php echo $doctorName; ?></h3>
                    <p>Dr. Abantika Nath is a highly skilled and experienced Laparoscopic & General Surgeon at Supra Multi-Speciality Hospital. With over 12 years of extensive experience in performing complex surgical procedures, she has established herself as one of the leading surgeons in Tripura.</p>
                    
                    <p>Dr. Nath completed her MBBS from RML University, Lucknow, followed by MS in General Surgery. She further specialized in Minimal Access Surgery, obtaining DMAS and FMAS qualifications. Her expertise lies in advanced laparoscopic procedures, which offer patients minimal scarring, faster recovery, and reduced post-operative complications.</p>
                    
                    <p>Known for her patient-centric approach, Dr. Nath ensures that each patient receives personalized care and detailed counseling about their condition and treatment options. She believes in combining surgical precision with compassionate care to achieve the best outcomes for her patients.</p>
                    
                    <p>Dr. Nath is actively involved in continuing medical education and regularly attends national and international conferences to stay updated with the latest advancements in surgical techniques and technologies.</p>
                </div>

                <!-- Education & Qualifications -->
                <div class="doctor-detail-section" data-aos="fade-up">
                    <h3><i class="fas fa-graduation-cap"></i> Education & Qualifications</h3>
                    <div class="education-timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="timeline-content">
                                <h5>MBBS (Bachelor of Medicine, Bachelor of Surgery)</h5>
                                <p class="institution">RML University, Lucknow</p>
                                <p class="year">2007 - 2012</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="timeline-content">
                                <h5>MS (Master of Surgery) - General Surgery</h5>
                                <p class="institution">RML University, Lucknow</p>
                                <p class="year">2013 - 2016</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="timeline-content">
                                <h5>DMAS (Diploma in Minimal Access Surgery)</h5>
                                <p class="institution">World Laparoscopy Hospital</p>
                                <p class="year">2017</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="timeline-content">
                                <h5>FMAS (Fellowship in Minimal Access Surgery)</h5>
                                <p class="institution">Association of Minimal Access Surgeons of India</p>
                                <p class="year">2018</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Areas of Expertise -->
                <div class="doctor-detail-section" data-aos="fade-up">
                    <h3><i class="fas fa-stethoscope"></i> Areas of Expertise</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Laparoscopic Cholecystectomy (Gallbladder Surgery)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Laparoscopic Appendectomy</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Laparoscopic Hernia Repair</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Gastrointestinal Surgery</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Breast Surgery</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Colorectal Surgery</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Thyroid Surgery</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Emergency Trauma Surgery</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Surgical Oncology</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Varicose Vein Treatment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Offered -->
                <div class="doctor-detail-section" data-aos="fade-up">
                    <h3><i class="fas fa-hospital"></i> Services Offered</h3>
                    <div class="services-list">
                        <div class="service-category">
                            <h5><i class="fas fa-angle-right"></i> Minimally Invasive Surgery</h5>
                            <ul>
                                <li>All types of laparoscopic procedures</li>
                                <li>Single-incision laparoscopic surgery</li>
                                <li>Advanced endoscopic procedures</li>
                            </ul>
                        </div>
                        <div class="service-category">
                            <h5><i class="fas fa-angle-right"></i> General Surgery</h5>
                            <ul>
                                <li>Hernia repairs (inguinal, umbilical, incisional)</li>
                                <li>Appendectomy (open and laparoscopic)</li>
                                <li>Hemorrhoid surgery</li>
                                <li>Pilonidal sinus treatment</li>
                            </ul>
                        </div>
                        <div class="service-category">
                            <h5><i class="fas fa-angle-right"></i> Specialized Procedures</h5>
                            <ul>
                                <li>Gallbladder stone removal</li>
                                <li>Breast lump removal and biopsies</li>
                                <li>Thyroid surgeries</li>
                                <li>Intestinal surgeries</li>
                            </ul>
                        </div>
                        <div class="service-category">
                            <h5><i class="fas fa-angle-right"></i> Emergency Surgery</h5>
                            <ul>
                                <li>Acute abdomen conditions</li>
                                <li>Trauma surgery</li>
                                <li>Emergency appendicitis</li>
                                <li>Intestinal obstruction</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Professional Memberships -->
                <div class="doctor-detail-section" data-aos="fade-up">
                    <h3><i class="fas fa-award"></i> Professional Memberships & Awards</h3>
                    <div class="memberships-list">
                        <div class="membership-item">
                            <i class="fas fa-medal"></i>
                            <div>
                                <h5>Association of Surgeons of India (ASI)</h5>
                                <p>Life Member</p>
                            </div>
                        </div>
                        <div class="membership-item">
                            <i class="fas fa-medal"></i>
                            <div>
                                <h5>Association of Minimal Access Surgeons of India (AMASI)</h5>
                                <p>Member</p>
                            </div>
                        </div>
                        <div class="membership-item">
                            <i class="fas fa-medal"></i>
                            <div>
                                <h5>Indian Medical Association (IMA)</h5>
                                <p>Member</p>
                            </div>
                        </div>
                        <div class="membership-item">
                            <i class="fas fa-trophy"></i>
                            <div>
                                <h5>Best Surgeon Award 2022</h5>
                                <p>Tripura Medical Council</p>
                            </div>
                        </div>
                        <div class="membership-item">
                            <i class="fas fa-trophy"></i>
                            <div>
                                <h5>Excellence in Laparoscopic Surgery</h5>
                                <p>Northeast Surgeons Conference 2021</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Reviews -->
                <div class="doctor-detail-section" data-aos="fade-up">
                    <h3><i class="fas fa-comments"></i> Patient Reviews</h3>
                    
                    <div class="review-summary">
                        <div class="overall-rating">
                            <div class="rating-number">4.9</div>
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Based on 148 reviews</p>
                        </div>
                        <div class="rating-breakdown">
                            <div class="rating-bar">
                                <span>5 stars</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%"></div>
                                </div>
                                <span>126</span>
                            </div>
                            <div class="rating-bar">
                                <span>4 stars</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 10%"></div>
                                </div>
                                <span>15</span>
                            </div>
                            <div class="rating-bar">
                                <span>3 stars</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 3%"></div>
                                </div>
                                <span>5</span>
                            </div>
                            <div class="rating-bar">
                                <span>2 stars</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 1%"></div>
                                </div>
                                <span>1</span>
                            </div>
                            <div class="rating-bar">
                                <span>1 star</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 1%"></div>
                                </div>
                                <span>1</span>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-list">
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div>
                                        <h6>Anita Sharma</h6>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="review-date">2 weeks ago</span>
                            </div>
                            <div class="review-body">
                                <p>"Dr. Abantika Nath performed my laparoscopic gallbladder surgery. She explained everything clearly before the procedure and made me feel comfortable. The surgery was successful with minimal scarring. Her post-operative care was excellent. Highly recommend!"</p>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div>
                                        <h6>Rajesh Kumar</h6>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="review-date">1 month ago</span>
                            </div>
                            <div class="review-body">
                                <p>"Excellent surgeon! I had hernia repair surgery and Dr. Nath's expertise made the entire process smooth. She is very patient in addressing all concerns and follows up diligently. The recovery was faster than I expected. Thank you, Doctor!"</p>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div>
                                        <h6>Priya Das</h6>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="review-date">2 months ago</span>
                            </div>
                            <div class="review-body">
                                <p>"Best surgeon in Agartala! Dr. Abantika performed my appendectomy using laparoscopy. Very skilled, caring, and professional. The hospital staff was also very supportive. I recovered quickly and am back to my normal routine. Grateful for the excellent care!"</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="doctor-detail-section" data-aos="fade-up">
                    <h3><i class="fas fa-question-circle"></i> Frequently Asked Questions</h3>
                    
                    <div class="accordion" id="doctorFaqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What are the consultation charges?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#doctorFaqAccordion">
                                <div class="accordion-body">
                                    The consultation fee is ₹500 for first visit and ₹300 for follow-up visits. Please contact the hospital for more details about surgical procedure costs.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How can I book an appointment?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#doctorFaqAccordion">
                                <div class="accordion-body">
                                    You can book an appointment online through our website, call us at <?php echo formatPhone(HOSPITAL_PHONE_1); ?>, or visit the hospital reception directly.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What should I bring to my first appointment?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#doctorFaqAccordion">
                                <div class="accordion-body">
                                    Please bring your medical reports, previous prescriptions, any test results, insurance cards (if applicable), and a list of current medications you're taking.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Does Dr. Nath perform emergency surgeries?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#doctorFaqAccordion">
                                <div class="accordion-body">
                                    Yes, Dr. Nath is available for emergency surgical cases. The hospital has 24/7 emergency services. For urgent cases, please call the emergency number or visit the emergency department directly.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Is laparoscopic surgery available for all conditions?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#doctorFaqAccordion">
                                <div class="accordion-body">
                                    Most common surgical conditions can be treated laparoscopically. However, the suitability depends on individual cases. Dr. Nath will evaluate your condition and recommend the best surgical approach during consultation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                
                <!-- Appointment Card -->
                <div class="sidebar-card appointment-card-sticky" data-aos="fade-left">
                    <h4><i class="fas fa-calendar-check"></i> Book Appointment</h4>
                    <p>Schedule your consultation with <?php echo $doctorName; ?></p>
                    
                    <div class="availability-info">
                        <h6>Available Days:</h6>
                        <div class="day-badges">
                            <span class="badge bg-primary">Monday</span>
                            <span class="badge bg-primary">Tuesday</span>
                            <span class="badge bg-primary">Wednesday</span>
                            <span class="badge bg-primary">Thursday</span>
                            <span class="badge bg-primary">Friday</span>
                            <span class="badge bg-primary">Saturday</span>
                        </div>
                        <p class="mt-2 mb-0"><i class="fas fa-clock"></i> 10:00 AM - 6:00 PM</p>
                    </div>

                    <a href="appointment.php" class="btn btn-primary w-100 mb-2">
                        <i class="fas fa-calendar-alt"></i> Book Online
                    </a>
                    <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="btn btn-outline-primary w-100">
                        <i class="fas fa-phone"></i> Call <?php echo formatPhone(HOSPITAL_PHONE_1); ?>
                    </a>
                </div>

                <!-- Quick Info Card -->
                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="100">
                    <h4><i class="fas fa-info-circle"></i> Quick Information</h4>
                    <div class="quick-info-list">
                        <div class="quick-info-item">
                            <i class="fas fa-user-md"></i>
                            <div>
                                <strong>Specialty</strong>
                                <p>Laparoscopic & General Surgery</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <i class="fas fa-briefcase"></i>
                            <div>
                                <strong>Experience</strong>
                                <p>12+ Years</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <i class="fas fa-graduation-cap"></i>
                            <div>
                                <strong>Education</strong>
                                <p>MBBS, MS, DMAS, FMAS</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <i class="fas fa-university"></i>
                            <div>
                                <strong>University</strong>
                                <p>RML University, Lucknow</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <i class="fas fa-id-card"></i>
                            <div>
                                <strong>Registration</strong>
                                <p>TSMC002171</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <i class="fas fa-language"></i>
                            <div>
                                <strong>Languages</strong>
                                <p>English, Hindi, Bengali</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Doctors -->
                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="200">
                    <h4><i class="fas fa-user-friends"></i> Other Surgeons</h4>
                    
                    <div class="doctor-mini-card">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=100&h=100&fit=crop" alt="Dr. Diptendu Chaudhuri">
                        <div>
                            <h6>Dr. Diptendu Chaudhuri</h6>
                            <p>General & Laparoscopic Surgeon</p>
                            <a href="doctor-detail.php" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>

                    <div class="doctor-mini-card">
                        <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=100&h=100&fit=crop" alt="Dr. Kallol Saha">
                        <div>
                            <h6>Dr. Kallol Saha</h6>
                            <p>General Surgeon</p>
                            <a href="doctor-detail.php" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>

                    <a href="doctors.php" class="btn btn-sm btn-primary w-100 mt-3">
                        View All Doctors
                    </a>
                </div>

                <!-- Share Profile -->
                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="300">
                    <h4><i class="fas fa-share-alt"></i> Share Profile</h4>
                    <div class="social-share-buttons">
                        <a href="#" class="btn btn-sm btn-outline-primary" onclick="shareDoctorProfile('<?php echo $doctorName; ?>', '<?php echo $doctorTitle; ?>')">
                            <i class="fas fa-share"></i> Share
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary" onclick="printDoctorProfile(this.closest('.container'))">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Doctor Profile -->

<!-- CTA Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="cta-box-large" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white mb-3">
                        <i class="fas fa-user-md"></i> Consult <?php echo $doctorName; ?>
                    </h2>
                    <p class="text-white mb-0 lead">Book your appointment today for expert laparoscopic and general surgical care.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="appointment.php" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-check"></i> Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /CTA Section -->

<?php include 'includes/footer.php'; ?>
