<?php
require_once 'config.php';
include 'includes/header.php';
include 'includes/nav.php';

// In future, this will be dynamic: $serviceId = $_GET['id'];
// For now, this is a template for "Orthopedics & Joint Replacement"
$serviceName = "Orthopedics & Joint Replacement";
$serviceIcon = "fa-bone";
$serviceSpecialty = "orthopedics";
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <h1 data-aos="fade-down"><?php echo $serviceName; ?></h1>
            <p data-aos="fade-up" data-aos-delay="200">Expert orthopedic care for bones, joints, and mobility</p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="400">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $serviceName; ?></li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /Page Header -->

<!-- Service Overview -->
<section class="section">
    <div class="container">
        <div class="row">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                
                <!-- Service Introduction -->
                <div class="service-detail-card" data-aos="fade-up">
                    <div class="service-detail-header">
                        <div class="service-icon-large">
                            <i class="fas <?php echo $serviceIcon; ?>"></i>
                        </div>
                        <div>
                            <h2>About Orthopedics Department</h2>
                            <p class="text-muted">Advanced bone and joint care solutions</p>
                        </div>
                    </div>
                    
                    <div class="service-detail-body">
                        <p class="lead">Our Orthopedics Department at Supra Multi-Speciality Hospital is dedicated to providing comprehensive care for all musculoskeletal conditions, from simple fractures to complex joint replacements.</p>
                        
                        <p>With state-of-the-art facilities and a team of highly experienced orthopedic surgeons, we offer both surgical and non-surgical treatments for a wide range of bone, joint, ligament, tendon, and muscle problems. Our department is equipped with the latest technology including arthroscopy systems, C-arm imaging, and modern operation theaters designed specifically for orthopedic procedures.</p>
                        
                        <p>We believe in a patient-centered approach, where each treatment plan is customized based on the individual's condition, lifestyle, and recovery goals. Our specialists work closely with physiotherapists and rehabilitation experts to ensure complete recovery and optimal outcomes.</p>
                    </div>
                </div>

                <!-- Service Image Gallery -->
                <div class="service-gallery" data-aos="fade-up">
                    <h3 class="mb-4">Our Orthopedic Facilities</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&h=500&fit=crop" alt="Orthopedic Surgery" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800&h=500&fit=crop" alt="Joint Replacement" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-12">
                            <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?w=1200&h=400&fit=crop" alt="Orthopedic Department" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>

                <!-- Conditions We Treat -->
                <div class="service-detail-card" data-aos="fade-up">
                    <h3>Conditions We Treat</h3>
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="condition-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Arthritis</h5>
                                    <p>Osteoarthritis, rheumatoid arthritis, and other joint inflammatory conditions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="condition-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Fractures & Trauma</h5>
                                    <p>All types of bone fractures, dislocations, and traumatic injuries</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="condition-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Sports Injuries</h5>
                                    <p>ACL tears, meniscus injuries, rotator cuff problems, and more</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="condition-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Spine Disorders</h5>
                                    <p>Back pain, herniated discs, spinal stenosis, scoliosis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="condition-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Joint Degeneration</h5>
                                    <p>Wear and tear of hip, knee, shoulder, and other joints</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="condition-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Bone Infections</h5>
                                    <p>Osteomyelitis and other bone-related infections</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Treatments & Procedures -->
                <div class="service-detail-card" data-aos="fade-up">
                    <h3>Treatments & Procedures We Offer</h3>
                    
                    <div class="accordion" id="treatmentsAccordion">
                        
                        <!-- Treatment 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#treatment1">
                                    <i class="fas fa-crutch me-2"></i> Joint Replacement Surgery
                                </button>
                            </h2>
                            <div id="treatment1" class="accordion-collapse collapse show" data-bs-parent="#treatmentsAccordion">
                                <div class="accordion-body">
                                    <p><strong>Total Hip Replacement (THR) and Total Knee Replacement (TKR)</strong> are our specialty procedures performed using the latest techniques and implants.</p>
                                    <ul>
                                        <li>Minimally invasive techniques for faster recovery</li>
                                        <li>High-quality implants from leading manufacturers</li>
                                        <li>Computer-assisted surgery for precise alignment</li>
                                        <li>Comprehensive post-operative rehabilitation program</li>
                                        <li>Excellent success rates with minimal complications</li>
                                    </ul>
                                    <p class="mb-0"><strong>Recovery Time:</strong> 6-12 weeks for full recovery with physiotherapy</p>
                                </div>
                            </div>
                        </div>

                        <!-- Treatment 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#treatment2">
                                    <i class="fas fa-microscope me-2"></i> Arthroscopic Surgery
                                </button>
                            </h2>
                            <div id="treatment2" class="accordion-collapse collapse" data-bs-parent="#treatmentsAccordion">
                                <div class="accordion-body">
                                    <p><strong>Minimally Invasive Keyhole Surgery</strong> for joint problems with smaller incisions and faster recovery.</p>
                                    <ul>
                                        <li>Arthroscopic ACL reconstruction</li>
                                        <li>Meniscus repair and trimming</li>
                                        <li>Rotator cuff repair</li>
                                        <li>Cartilage procedures</li>
                                        <li>Joint cleaning and debridement</li>
                                    </ul>
                                    <p class="mb-0"><strong>Benefits:</strong> Less pain, smaller scars, faster recovery, reduced infection risk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Treatment 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#treatment3">
                                    <i class="fas fa-band-aid me-2"></i> Fracture Management
                                </button>
                            </h2>
                            <div id="treatment3" class="accordion-collapse collapse" data-bs-parent="#treatmentsAccordion">
                                <div class="accordion-body">
                                    <p><strong>Expert care for all types of fractures</strong> from simple to complex, using both surgical and non-surgical methods.</p>
                                    <ul>
                                        <li>Open reduction and internal fixation (ORIF)</li>
                                        <li>External fixation for complex fractures</li>
                                        <li>Intramedullary nailing</li>
                                        <li>Cast and brace application</li>
                                        <li>Emergency trauma care 24/7</li>
                                    </ul>
                                    <p class="mb-0"><strong>Approach:</strong> We prioritize bone healing while maintaining joint function</p>
                                </div>
                            </div>
                        </div>

                        <!-- Treatment 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#treatment4">
                                    <i class="fas fa-spine me-2"></i> Spine Surgery
                                </button>
                            </h2>
                            <div id="treatment4" class="accordion-collapse collapse" data-bs-parent="#treatmentsAccordion">
                                <div class="accordion-body">
                                    <p><strong>Advanced spinal procedures</strong> for various back and neck conditions.</p>
                                    <ul>
                                        <li>Discectomy for herniated discs</li>
                                        <li>Spinal fusion surgery</li>
                                        <li>Laminectomy for spinal stenosis</li>
                                        <li>Vertebroplasty for compression fractures</li>
                                        <li>Minimally invasive spine surgery</li>
                                    </ul>
                                    <p class="mb-0"><strong>Focus:</strong> Pain relief and restoring spinal stability</p>
                                </div>
                            </div>
                        </div>

                        <!-- Treatment 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#treatment5">
                                    <i class="fas fa-walking me-2"></i> Physiotherapy & Rehabilitation
                                </button>
                            </h2>
                            <div id="treatment5" class="accordion-collapse collapse" data-bs-parent="#treatmentsAccordion">
                                <div class="accordion-body">
                                    <p><strong>Comprehensive rehabilitation program</strong> to ensure complete recovery and return to normal activities.</p>
                                    <ul>
                                        <li>Post-operative physiotherapy</li>
                                        <li>Manual therapy techniques</li>
                                        <li>Strengthening exercises</li>
                                        <li>Gait training and balance exercises</li>
                                        <li>Pain management through physical therapy</li>
                                    </ul>
                                    <p class="mb-0"><strong>Goal:</strong> Restore function, mobility, and quality of life</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Why Choose Us for This Service -->
                <div class="service-detail-card" data-aos="fade-up">
                    <h3>Why Choose Our Orthopedic Department?</h3>
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="feature-box-detailed">
                                <div class="feature-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <h5>Expert Surgeons</h5>
                                <p>Our orthopedic surgeons have extensive experience in complex joint replacements and surgeries with proven track records.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box-detailed">
                                <div class="feature-icon">
                                    <i class="fas fa-hospital"></i>
                                </div>
                                <h5>Modern Infrastructure</h5>
                                <p>State-of-the-art operation theaters with C-arm imaging and advanced arthroscopy equipment for precise procedures.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box-detailed">
                                <div class="feature-icon">
                                    <i class="fas fa-hand-holding-medical"></i>
                                </div>
                                <h5>Personalized Care</h5>
                                <p>Each patient receives a customized treatment plan based on their specific condition and recovery goals.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box-detailed">
                                <div class="feature-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <h5>Holistic Approach</h5>
                                <p>We combine surgical expertise with physiotherapy and pain management for comprehensive care.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Success Stories -->
                <div class="service-detail-card" data-aos="fade-up">
                    <h3>Patient Success Stories</h3>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div>
                                <h5>Ramesh Kumar</h5>
                                <p class="text-muted">Total Knee Replacement Patient</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>"I was suffering from severe knee pain for 3 years. Dr. Himadri Shekhar Deb performed my knee replacement surgery. The care I received was exceptional. Now I can walk without pain and have returned to my daily activities. Highly recommend Supra Hospital!"</p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div>
                                <h5>Priya Sharma</h5>
                                <p class="text-muted">ACL Reconstruction Patient</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>"As an athlete, my ACL tear was devastating. The orthopedic team at Supra performed arthroscopic surgery and guided me through rehabilitation. I'm back to playing sports within 6 months. Thank you to the entire team!"</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="service-detail-card" data-aos="fade-up">
                    <h3>Frequently Asked Questions</h3>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How long does joint replacement surgery take?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Total hip or knee replacement surgery typically takes 1.5 to 3 hours. The hospital stay is usually 3-5 days, and full recovery with physiotherapy takes 6-12 weeks.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    When should I consider joint replacement?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Joint replacement is recommended when conservative treatments (medication, physiotherapy) fail to relieve chronic pain and joint stiffness significantly affects your quality of life and daily activities.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Is arthroscopy better than open surgery?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Arthroscopy offers smaller incisions, less pain, faster recovery, and reduced scarring. However, not all conditions can be treated arthroscopically. Your surgeon will recommend the best approach for your specific condition.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    How long do joint implants last?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Modern joint implants typically last 15-20 years or more. The longevity depends on factors like patient age, activity level, weight, and implant quality. We use high-quality implants from leading manufacturers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Do you accept health insurance?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we accept major health insurance plans for orthopedic treatments and surgeries. Please contact our billing department for specific insurance inquiries and cashless facility details.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                
                <!-- Book Appointment Card -->
                <div class="sidebar-card appointment-card" data-aos="fade-left">
                    <h4><i class="fas fa-calendar-check"></i> Book Appointment</h4>
                    <p>Schedule a consultation with our orthopedic specialists</p>
                    <a href="appointment.php" class="btn btn-primary w-100 mb-2">
                        <i class="fas fa-calendar-alt"></i> Book Online
                    </a>
                    <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="btn btn-outline-primary w-100">
                        <i class="fas fa-phone"></i> Call <?php echo formatPhone(HOSPITAL_PHONE_1); ?>
                    </a>
                </div>

                <!-- Our Orthopedic Doctors -->
                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="100">
                    <h4><i class="fas fa-user-md"></i> Our Orthopedic Specialists</h4>
                    
                    <div class="doctor-mini-card">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=100&h=100&fit=crop" alt="Dr. Himadri Shekhar Deb">
                        <div>
                            <h6>Dr. Himadri Shekhar Deb</h6>
                            <p>Orthopedic Surgeon</p>
                            <small>MBBS, MS Ortho</small>
                        </div>
                    </div>

                    <div class="doctor-mini-card">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=100&h=100&fit=crop" alt="Dr. M.L. Deb">
                        <div>
                            <h6>Dr. M.L. Deb</h6>
                            <p>Orthopedic Surgeon</p>
                            <small>MBBS, MS Ortho</small>
                        </div>
                    </div>

                    <div class="doctor-mini-card">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=100&h=100&fit=crop" alt="Dr. Sandipan Deb">
                        <div>
                            <h6>Dr. Sandipan Deb</h6>
                            <p>Orthopedic Surgeon</p>
                            <small>MBBS, MS Ortho</small>
                        </div>
                    </div>

                    <a href="doctors.php" class="btn btn-sm btn-outline-primary w-100 mt-3">
                        View All Doctors
                    </a>
                </div>

                <!-- Quick Links -->
                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="200">
                    <h4><i class="fas fa-link"></i> Related Services</h4>
                    <ul class="quick-links-list">
                        <li><a href="service-detail.php"><i class="fas fa-angle-right"></i> General Surgery</a></li>
                        <li><a href="service-detail.php"><i class="fas fa-angle-right"></i> Neurology</a></li>
                        <li><a href="service-detail.php"><i class="fas fa-angle-right"></i> Physiotherapy</a></li>
                        <li><a href="service-detail.php"><i class="fas fa-angle-right"></i> Pain Management</a></li>
                        <li><a href="services.php"><i class="fas fa-angle-right"></i> View All Services</a></li>
                    </ul>
                </div>

                <!-- Working Hours -->
                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="300">
                    <h4><i class="fas fa-clock"></i> Working Hours</h4>
                    <div class="working-hours">
                        <div class="hour-item">
                            <span>Monday - Saturday</span>
                            <strong>9:00 AM - 8:00 PM</strong>
                        </div>
                        <div class="hour-item">
                            <span>Sunday</span>
                            <strong>Closed</strong>
                        </div>
                        <div class="hour-item emergency">
                            <span>Emergency</span>
                            <strong>24/7 Available</strong>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="400">
                    <h4><i class="fas fa-info-circle"></i> Need Help?</h4>
                    <p>Contact us for any queries or emergency</p>
                    <div class="contact-info-small">
                        <i class="fas fa-phone"></i>
                        <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>"><?php echo formatPhone(HOSPITAL_PHONE_1); ?></a>
                    </div>
                    <div class="contact-info-small">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo HOSPITAL_EMAIL; ?>"><?php echo HOSPITAL_EMAIL; ?></a>
                    </div>
                    <div class="contact-info-small">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo HOSPITAL_ADDRESS; ?></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Service Overview -->

<!-- CTA Section -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="cta-box-large" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white mb-3">
                        <i class="fas fa-bone"></i> Need Orthopedic Consultation?
                    </h2>
                    <p class="text-white mb-0 lead">Book an appointment with our expert orthopedic surgeons for comprehensive bone and joint care.</p>
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
