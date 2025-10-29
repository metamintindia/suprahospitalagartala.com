    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="<?php echo IMG_PATH; ?>/logo.png" alt="<?php echo SITE_NAME; ?> Logo" class="logo">
                <span class="brand-text">
                    <span class="brand-supra">SUPRA</span> 
                    <span class="brand-multi">MULTI-SPECIALITY</span> 
                    <span class="brand-hospital">HOSPITAL</span>
                </span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('index'); ?>" href="index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('about'); ?>" href="about.php">
                            <i class="fas fa-info-circle"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('services'); ?>" href="services.php">
                            <i class="fas fa-stethoscope"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('doctors'); ?>" href="doctors.php">
                            <i class="fas fa-user-md"></i> Our Doctors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('contact'); ?>" href="contact.php">
                            <i class="fas fa-phone"></i> Contact
                        </a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="appointment.php" class="btn btn-appointment">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navigation -->
