    <!-- Footer -->
    <footer class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row g-4">
                    <!-- About Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <img src="<?php echo IMG_PATH; ?>/logo.png" alt="<?php echo SITE_NAME; ?>" class="mb-3">
                                <h5><?php echo SITE_NAME; ?></h5>
                            </div>
                            <p class="footer-description">
                                <?php echo SITE_TAGLINE; ?>. We are committed to providing world-class healthcare services 
                                with compassion and excellence. Our team of experienced specialists uses advanced 
                                medical technology to ensure the best outcomes for our patients.
                            </p>
                            <div class="footer-social">
                                <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="<?php echo TWITTER_URL; ?>" target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" aria-label="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" aria-label="YouTube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Links Column -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">Quick Links</h5>
                            <ul class="footer-links">
                                <li><a href="index.php"><i class="fas fa-angle-right"></i> Home</a></li>
                                <li><a href="about.php"><i class="fas fa-angle-right"></i> About Us</a></li>
                                <li><a href="services.php"><i class="fas fa-angle-right"></i> Services</a></li>
                                <li><a href="doctors.php"><i class="fas fa-angle-right"></i> Our Doctors</a></li>
                                <li><a href="appointment.php"><i class="fas fa-angle-right"></i> Appointment</a></li>
                                <li><a href="contact.php"><i class="fas fa-angle-right"></i> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Our Services Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">Our Services</h5>
                            <ul class="footer-links">
                                <li><a href="services.php#orthopedics"><i class="fas fa-angle-right"></i> Orthopedics</a></li>
                                <li><a href="services.php#pediatrics"><i class="fas fa-angle-right"></i> Pediatrics</a></li>
                                <li><a href="services.php#gynecology"><i class="fas fa-angle-right"></i> Gynecology</a></li>
                                <li><a href="services.php#surgery"><i class="fas fa-angle-right"></i> General Surgery</a></li>
                                <li><a href="services.php#neurology"><i class="fas fa-angle-right"></i> Neurology</a></li>
                                <li><a href="services.php#urology"><i class="fas fa-angle-right"></i> Urology</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Contact Info Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">Contact Info</h5>
                            <ul class="footer-contact">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span><?php echo HOSPITAL_ADDRESS; ?></span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>
                                        <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>"><?php echo formatPhone(HOSPITAL_PHONE_1); ?></a><br>
                                        <a href="tel:<?php echo HOSPITAL_PHONE_2; ?>"><?php echo formatPhone(HOSPITAL_PHONE_2); ?></a>
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <span><a href="mailto:<?php echo HOSPITAL_EMAIL; ?>"><?php echo HOSPITAL_EMAIL; ?></a></span>
                                </li>
                                <li>
                                    <i class="fas fa-clock"></i>
                                    <span><?php echo WORKING_HOURS; ?><br><?php echo EMERGENCY_HOURS; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">
                            &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="developer-credit">
                            Design &amp; Hosted By: 
                            <a href="<?php echo DEVELOPER_URL; ?>" target="_blank" rel="noopener noreferrer">
                                <?php echo DEVELOPER_NAME; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    
    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <!-- jQuery 3.7.1 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap 5.3.2 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo JS_PATH; ?>/main.js"></script>
    
    <!-- Additional Page-Specific JS -->
    <?php if (isset($page_js)): ?>
        <script src="<?php echo JS_PATH . '/' . $page_js; ?>"></script>
    <?php endif; ?>
    
</body>
</html>
