<!-- Universal Header & Topbar Component Styles (Applies across all pages) -->
<style>
/* --------------------------------------------------------------------------
   SBR Machines - Universal Header & Topbar Component Styles
   -------------------------------------------------------------------------- */
.sbr-topbar {
    background: #09121d !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
    padding: 7px 0 !important;
    font-size: 13px !important;
    line-height: 1.4 !important;
    color: #cbd5e1 !important;
    position: relative !important;
    z-index: 101 !important;
}

.sbr-topbar::before {
    display: none !important;
}

.sbr-topbar .topbar-contact-info ul {
    display: flex !important;
    align-items: center !important;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
    gap: 24px !important;
}

.sbr-topbar .topbar-contact-info ul li {
    display: inline-flex !important;
    align-items: center !important;
    font-size: 13px !important;
    color: #cbd5e1 !important;
}

.sbr-topbar .topbar-contact-link {
    color: #e2e8f0 !important;
    text-decoration: none !important;
    font-weight: 600 !important;
    display: inline-flex !important;
    align-items: center !important;
    transition: color 0.2s ease !important;
}

.sbr-topbar .topbar-contact-link:hover {
    color: #ff5e14 !important;
}

.sbr-topbar .topbar-lang-tab {
    background: rgba(255, 255, 255, 0.08) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    color: #ffffff !important;
    padding: 4px 12px !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    border-radius: 20px !important;
    cursor: pointer !important;
    outline: none !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 6px !important;
    transition: all 0.25s ease !important;
    user-select: none !important;
    white-space: nowrap !important;
}

.sbr-topbar .topbar-lang-tab:hover {
    background: #ff5e14 !important;
    border-color: #ff5e14 !important;
    color: #ffffff !important;
    box-shadow: 0 2px 10px rgba(255, 94, 20, 0.4) !important;
}

.sbr-topbar .topbar-lang-tab i {
    color: #ff5e14 !important;
    transition: color 0.25s ease !important;
}

.sbr-topbar .topbar-lang-tab:hover i {
    color: #ffffff !important;
}

.sbr-topbar .topbar-social-links ul {
    display: flex !important;
    align-items: center !important;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
    gap: 12px !important;
}

.sbr-topbar .topbar-social-links ul li {
    border-right: none !important;
    margin: 0 !important;
    padding: 0 !important;
}

.sbr-topbar .topbar-social-links ul li a i {
    color: #cbd5e1 !important;
    font-size: 14px !important;
    transition: color 0.2s ease !important;
}

.sbr-topbar .topbar-social-links ul li a:hover i {
    color: #ff5e14 !important;
}

/* Main Header & Navbar across all pages - Fixed/Sticky on Scroll */
header.main-header {
    position: -webkit-sticky !important;
    position: sticky !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    z-index: 9999 !important;
    background: #ffffff !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08) !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.06) !important;
    transition: box-shadow 0.3s ease !important;
}

header.main-header .header-sticky {
    position: relative !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    background: #ffffff !important;
    transform: none !important;
    transition: none !important;
}

header.main-header .header-sticky.hide {
    transform: none !important;
    display: block !important;
}

header.main-header .header-sticky.active {
    position: relative !important;
    top: 0 !important;
    transform: none !important;
    background: #ffffff !important;
}

.navbar-brand {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    text-decoration: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.brand-logo-img {
    width: 60px !important;
    height: 60px !important;
    max-width: 60px !important;
    object-fit: contain !important;
    transition: transform 0.3s ease !important;
}

.navbar-brand:hover .brand-logo-img {
    transform: scale(1.05) !important;
}

.brand-text-block {
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
}

.brand-title {
    font-family: 'DM Sans', sans-serif !important;
    font-size: 20px !important;
    font-weight: 800 !important;
    letter-spacing: 0.5px !important;
    color: #FF5E14 !important;
    line-height: 1.1 !important;
    text-transform: uppercase !important;
}

/* Nav Menu Space & No Wrapping on Any Screen */
.main-menu .nav-menu-wrapper {
    flex: 1 !important;
    margin: 0 20px !important;
}

.main-menu .nav-menu-wrapper > ul {
    align-items: center !important;
    display: inline-flex !important;
    gap: 2px !important;
}

.main-menu ul li a {
    white-space: nowrap !important;
    padding: 18px 12px !important;
    font-size: 15px !important;
    color: #0b1a30 !important;
    font-weight: 600 !important;
    text-decoration: none !important;
    display: inline-block !important;
    transition: color 0.25s ease !important;
}

.main-menu ul li a:hover,
.main-menu ul li.active > a {
    color: #ff5e14 !important;
}

.header-contact-btn {
    display: flex !important;
    align-items: center !important;
}

.header-contact-btn .btn-default {
    background: #ff5e14 !important;
    color: #ffffff !important;
    padding: 10px 22px !important;
    border-radius: 6px !important;
    font-weight: 700 !important;
    font-size: 14px !important;
    text-decoration: none !important;
    white-space: nowrap !important;
    display: inline-block !important;
    transition: all 0.3s ease !important;
}

.header-contact-btn .btn-default:hover {
    background: #e04803 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 4px 15px rgba(255, 94, 20, 0.4) !important;
}

/* Mobile Actions */
.header-mobile-actions {
    display: none;
    align-items: center;
    gap: 8px;
}

.header-get-in-touch {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: linear-gradient(135deg, #ff5e14, #ff7e3d);
    color: #ffffff !important;
    padding: 7px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-decoration: none !important;
    box-shadow: 0 4px 10px rgba(255, 94, 20, 0.25);
    white-space: nowrap;
}

/* Mobile Sticky Enforcement across ALL pages */
@media (max-width: 991px) {
    .sbr-topbar {
        display: none !important;
    }

    header.main-header {
        position: -webkit-sticky !important;
        position: sticky !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        width: 100% !important;
        background: #ffffff !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12) !important;
        z-index: 9999 !important;
    }

    header.main-header .header-sticky {
        position: relative !important;
        top: 0 !important;
        background: #ffffff !important;
        box-shadow: none !important;
        padding: 6px 0 !important;
    }

    body {
        padding-top: 0 !important;
    }

    .brand-logo-img {
        width: 52px !important;
        height: 52px !important;
    }

    .brand-title {
        font-size: 15px !important;
    }

    .header-mobile-actions {
        display: flex !important;
        margin-left: auto;
    }

    .main-header .navbar-toggle {
        display: flex !important;
        align-items: center;
        justify-content: center;
    }

    .main-menu {
        display: none !important;
    }
}
</style>

<!-- Topbar Section Start (Mobile Number & Language Tab above Main Navbar) -->
<div class="topbar sbr-topbar">
    <div class="container">
        <div class="row align-items-center">
            <!-- Topbar Left: Phone & Email -->
            <div class="col-lg-8 col-md-7 col-12">
                <div class="topbar-contact-info">
                    <ul>
                        <li>
                            <a href="tel:+918793044005" class="topbar-contact-link">
                                <i class="fa-solid fa-phone me-1 text-accent" style="color: #ff5e14;"></i>
                                <span>+91 8793044005</span>
                            </a>
                        </li>
                        <li class="d-none d-sm-inline-block">
                            <a href="mailto:sales@sbrmachines.com" class="topbar-contact-link">
                                <i class="fa-solid fa-envelope me-1 text-accent" style="color: #ff5e14;"></i>
                                <span>sales@sbrmachines.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Topbar Right: Language Switcher Tab & Social Links -->
            <div class="col-lg-4 col-md-5 col-12 text-md-end text-center">
                <div class="topbar-right-box d-inline-flex align-items-center justify-content-end gap-3">
                    <!-- Language Switcher Tab -->
                    <button type="button" class="lang-toggle-btn topbar-lang-tab" onclick="toggleWebsiteLanguage()" title="Switch Language / भाषा बदलें">
                        <i class="fa-solid fa-language"></i> <span class="lang-label">हिन्दी</span>
                    </button>

                    <!-- Topbar Social Links -->
                    <div class="topbar-social-links d-none d-sm-inline-block">
                        <ul>
                            <li><a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fa-brands text-light fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fa-brands text-light fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/sbr.png" alt="SBR Machines" class="brand-logo-img">
                    <div class="brand-text-block">
                        <span class="brand-title" >SBR MACHINES</span>
                    </div>
                </a>
                
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="index.php" data-i18n="nav_home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php" data-i18n="nav_about">About Us</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="index.php#machines" data-i18n="nav_machines">Machines</a>
                                <ul>
                                    <li><a href="se-star-series-energy-saving.php">SE - STAR SERIES ENERGY SAVING</a></li>
                                    <li><a href="se-star-series-energy-saving-two.php">SE - STAR SERIES ENERGY SAVING (0.7L)</a></li>
                                    <li><a href="h14ae-eco-smart-energy-saving.php">H14AE-ECO SMART ENERGY SAVING</a></li>
                                    <li><a href="s14ae-energy-saving-4-cavity.php">S14AE - ENERGY SAVING 4-CAVITY</a></li>
                                    <li><a href="advance-single-cavity.php">ADVANCE SINGLE - CAVITY</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php" data-i18n="nav_gallery">Gallery</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="applications.php" data-i18n="nav_applications">Applications</a>
                                <ul>
                                    <li><a href="water-bottles.php">Water Bottles</a></li>
                                    <li><a href="beverage.php">Beverage</a></li>
                                    <li><a href="edible-oil.php">Edible Oil</a></li>
                                    <li><a href="personal-care.php">Personal Care</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.php" data-i18n="nav_contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="header-contact-btn">
                        <a href="contact.php" class="btn-default" data-i18n="nav_quote">Request Quote</a>
                    </div>
                </div>

                <!-- Mobile Header Taskbar Controls (Always visible when scrolling on mobile) -->
                <div class="header-mobile-actions">
                    <button type="button" class="lang-toggle-btn" onclick="toggleWebsiteLanguage()" title="Switch Language / भाषा बदलें">
                        <i class="fa-solid fa-language"></i> <span class="lang-label">हिन्दी</span>
                    </button>
                    <a href="tel:+918793044005" class="header-get-in-touch" title="Get in Touch">
                        <i class="fa-solid fa-phone-volume"></i>
                        <span class="git-text" data-i18n="get_in_touch">Get in Touch</span>
                    </a>
                    <div class="navbar-toggle"></div>
                </div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>