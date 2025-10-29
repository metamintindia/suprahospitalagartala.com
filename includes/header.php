<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo META_DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo META_KEYWORDS; ?>">
    <meta name="author" content="<?php echo DEVELOPER_NAME; ?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo getPageTitle($current_page); ?>">
    <meta property="og:description" content="<?php echo META_DESCRIPTION; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    <meta property="og:image" content="<?php echo SITE_URL . IMG_PATH; ?>/logo.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo getPageTitle($current_page); ?>">
    <meta name="twitter:description" content="<?php echo META_DESCRIPTION; ?>">
    
    <title><?php echo getPageTitle($current_page); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo IMG_PATH; ?>/logo.png">
    <link rel="apple-touch-icon" href="<?php echo IMG_PATH; ?>/logo.png">
    
    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Font Awesome 6.5.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>/style.css">
    
    <!-- Additional Page-Specific CSS -->
    <?php if (isset($page_css)): ?>
        <link rel="stylesheet" href="<?php echo CSS_PATH . '/' . $page_css; ?>">
    <?php endif; ?>
</head>
<body>
    
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="top-bar-left">
                        <a href="tel:<?php echo HOSPITAL_PHONE_1; ?>" class="top-link">
                            <i class="fas fa-phone-alt"></i> <?php echo formatPhone(HOSPITAL_PHONE_1); ?>
                        </a>
                        <a href="tel:<?php echo HOSPITAL_PHONE_2; ?>" class="top-link">
                            <i class="fas fa-phone-alt"></i> <?php echo formatPhone(HOSPITAL_PHONE_2); ?>
                        </a>
                        <a href="mailto:<?php echo HOSPITAL_EMAIL; ?>" class="top-link">
                            <i class="fas fa-envelope"></i> <?php echo HOSPITAL_EMAIL; ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="top-bar-right">
                        <span class="top-link">
                            <i class="fas fa-clock"></i> <?php echo WORKING_HOURS; ?>
                        </span>
                        <div class="social-links">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Bar -->
