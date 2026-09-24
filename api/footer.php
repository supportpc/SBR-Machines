<!-- Professional SBR Machines Footer Component -->
<style>
/* --------------------------------------------------------------------------
   SBR Machines - Professional Industrial Footer Styles
   -------------------------------------------------------------------------- */
.sbr-pro-footer {
    background: linear-gradient(180deg, #0d1a2d 0%, #070e17 100%) !important;
    border-top: 2px solid rgba(255, 94, 20, 0.4) !important;
    padding-top: 60px !important;
    padding-bottom: 25px !important;
    color: #cbd5e1 !important;
    font-family: 'DM Sans', sans-serif !important;
    position: relative !important;
    z-index: 10 !important;
}

/* Col 1: Brand */
.sbr-f-brand-box {
    padding-right: 15px;
}
.sbr-f-brand-lockup {
    display: inline-flex !important;
    align-items: center !important;
    gap: 14px !important;
    text-decoration: none !important;
    margin-bottom: 18px !important;
}
.sbr-f-logo-img {
    width: 58px !important;
    height: 58px !important;
    max-width: 58px !important;
    object-fit: contain !important;
    flex-shrink: 0 !important;
    filter: drop-shadow(0 4px 10px rgba(255, 94, 20, 0.35));
    transition: transform 0.3s ease;
}
.sbr-f-brand-lockup:hover .sbr-f-logo-img {
    transform: scale(1.05);
}
.sbr-f-brand-info {
    display: flex !important;
    flex-direction: column !important;
}
.sbr-f-brand-title {
    font-size: 19px !important;
    font-weight: 800 !important;
    color: #ffffff !important;
    letter-spacing: 0.6px !important;
    line-height: 1.2 !important;
    text-transform: uppercase !important;
}
.sbr-f-brand-sub {
    font-size: 11px !important;
    font-weight: 700 !important;
    color: #ff5e14 !important;
    letter-spacing: 1px !important;
    text-transform: uppercase !important;
    margin-top: 3px !important;
}
.sbr-f-desc {
    font-size: 13.5px !important;
    line-height: 1.65 !important;
    color: #94a3b8 !important;
    margin-bottom: 16px !important;
}
.sbr-f-trust-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}
.sbr-f-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 94, 20, 0.25);
    color: #e2e8f0;
    font-size: 11.5px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
}
.sbr-f-pill i {
    color: #ff5e14;
    font-size: 11px;
}

/* Col Headings & Divider */
.sbr-f-title {
    font-size: 17px !important;
    font-weight: 800 !important;
    color: #ffffff !important;
    letter-spacing: 0.4px !important;
    text-transform: uppercase !important;
    margin-bottom: 8px !important;
    margin-top: 0 !important;
}
.sbr-f-divider {
    width: 36px;
    height: 3px;
    background: #ff5e14;
    border-radius: 2px;
    margin-bottom: 20px;
    box-shadow: 0 0 8px rgba(255, 94, 20, 0.6);
}

/* Col 2: Navigation Links */
.sbr-f-nav-list {
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
}
.sbr-f-nav-list li {
    margin-bottom: 11px !important;
    list-style: none !important;
    padding: 0 !important;
}
.sbr-f-nav-list li:last-child {
    margin-bottom: 0 !important;
}
.sbr-f-nav-link {
    color: #cbd5e1 !important;
    font-size: 14px !important;
    text-decoration: none !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    transition: all 0.25s ease !important;
}
.sbr-f-nav-link i {
    font-size: 11px !important;
    color: #ff5e14 !important;
    transition: transform 0.25s ease;
}
.sbr-f-nav-link:hover {
    color: #ff5e14 !important;
    transform: translateX(4px) !important;
}
.sbr-f-nav-link:hover i {
    transform: translateX(2px);
}

/* Col 3: Contact Info */
.sbr-f-contact-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
}
.sbr-f-contact-item {
    display: flex !important;
    align-items: flex-start !important;
    gap: 12px !important;
}
.sbr-f-icon-circle {
    width: 34px !important;
    height: 34px !important;
    background: rgba(255, 94, 20, 0.12) !important;
    border: 1px solid rgba(255, 94, 20, 0.3) !important;
    border-radius: 8px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #ff5e14 !important;
    font-size: 13px !important;
    flex-shrink: 0 !important;
    margin-top: 2px;
}
.sbr-f-contact-text {
    flex: 1;
}
.sbr-f-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #ff5e14;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 2px;
}
.sbr-f-contact-text p {
    color: #cbd5e1 !important;
    font-size: 13px !important;
    line-height: 1.5 !important;
    margin: 0 !important;
}
.sbr-f-contact-text a {
    color: #cbd5e1 !important;
    text-decoration: none !important;
    transition: color 0.2s ease;
}
.sbr-f-contact-text a:hover {
    color: #ff5e14 !important;
}
.sbr-f-phone-link {
    color: #ffffff !important;
    font-weight: 700 !important;
    font-size: 14px !important;
}

/* Col 4: Map */
.sbr-f-map-wrap {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.14);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    background: #000;
}
.sbr-f-map-wrap iframe {
    display: block;
    width: 100%;
}
.sbr-f-map-action {
    display: block;
    background: rgba(255, 255, 255, 0.06);
    color: #ff5e14 !important;
    font-size: 12px;
    font-weight: 700;
    text-align: center;
    padding: 7px 10px;
    text-decoration: none !important;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    transition: background 0.2s ease;
}
.sbr-f-map-action:hover {
    background: rgba(255, 94, 20, 0.15);
    color: #ffffff !important;
}

/* Corporate Strip (Point 12) */
.sbr-f-corp-banner {
    background: rgba(255, 255, 255, 0.035) !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
    border-radius: 14px !important;
    padding: 20px 24px !important;
    margin-top: 40px !important;
    margin-bottom: 20px !important;
    backdrop-filter: blur(8px);
}
.sbr-f-corp-title {
    font-size: 16px !important;
    font-weight: 800 !important;
    color: #ffffff !important;
    letter-spacing: 0.5px !important;
}
.sbr-f-corp-est {
    background: rgba(255, 94, 20, 0.18);
    border: 1px solid rgba(255, 94, 20, 0.35);
    color: #ff8b4d;
    font-size: 11px;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 6px;
}
.sbr-f-corp-sub {
    font-size: 13px !important;
    color: #94a3b8 !important;
    line-height: 1.5 !important;
}
.sbr-f-social-box {
    display: inline-flex;
    align-items: center;
    gap: 12px;
}
.sbr-f-social-label {
    font-size: 13px;
    font-weight: 700;
    color: #ffffff;
}
.sbr-f-social-icons {
    display: inline-flex;
    align-items: center;
    gap: 10px;
}
.sbr-f-social-btn {
    width: 38px !important;
    height: 38px !important;
    border-radius: 50% !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #ffffff !important;
    text-decoration: none !important;
    font-size: 16px !important;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
}
.sbr-f-fb {
    background: #1877f2 !important;
    box-shadow: 0 4px 12px rgba(24, 119, 242, 0.35);
}
.sbr-f-fb:hover {
    background: #0d65d9 !important;
    transform: translateY(-3px) scale(1.08) !important;
    box-shadow: 0 6px 16px rgba(24, 119, 242, 0.55);
}
.sbr-f-insta {
    background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%) !important;
    box-shadow: 0 4px 12px rgba(220, 39, 67, 0.35);
}
.sbr-f-insta:hover {
    transform: translateY(-3px) scale(1.08) !important;
    box-shadow: 0 6px 16px rgba(220, 39, 67, 0.55);
}

/* Bottom Row */
.sbr-f-bottom-bar {
    border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
    padding-top: 18px !important;
    margin-top: 10px !important;
    padding-left: 65px !important;
    padding-right: 185px !important;
}
.sbr-f-tech-badge {
    font-size: 12px !important;
    color: #64748b !important;
    letter-spacing: 0.3px;
}
.sbr-f-dev-box {
    /* Developer accreditation */
}
.sbr-f-dev-text {
    font-size: 12px !important;
    color: #94a3b8 !important;
}
.sbr-f-dev-link {
    display: inline-block;
    vertical-align: middle;
}

/* Floating Controls (Point 11) */
.sbr-pro-scroll-top {
    position: fixed !important;
    bottom: 24px !important;
    left: 24px !important;
    width: 46px !important;
    height: 46px !important;
    border-radius: 50% !important;
    background: #0b1523 !important;
    border: 2px solid #ff5e14 !important;
    color: #ff5e14 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 16px !important;
    z-index: 99999 !important;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5) !important;
    text-decoration: none !important;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
}
.sbr-pro-scroll-top:hover {
    background: #ff5e14 !important;
    color: #ffffff !important;
    transform: translateY(-4px) !important;
    box-shadow: 0 10px 25px rgba(255, 94, 20, 0.55) !important;
}

.sbr-pro-quote-btn {
    position: fixed !important;
    bottom: 24px !important;
    right: 24px !important;
    background: linear-gradient(135deg, #ff5e14 0%, #e04803 100%) !important;
    color: #ffffff !important;
    padding: 12px 22px !important;
    border-radius: 50px !important;
    font-weight: 700 !important;
    font-size: 13.5px !important;
    letter-spacing: 0.3px !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    z-index: 99999 !important;
    box-shadow: 0 6px 22px rgba(255, 94, 20, 0.45) !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
    animation: sbrPulseQuote 2.5s infinite !important;
}
.sbr-pro-quote-btn:hover {
    background: linear-gradient(135deg, #e04a05 0%, #ff701e 100%) !important;
    color: #ffffff !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 10px 25px rgba(255, 94, 20, 0.65) !important;
}
@keyframes sbrPulseQuote {
    0% { box-shadow: 0 0 0 0 rgba(255, 94, 20, 0.6); }
    70% { box-shadow: 0 0 0 12px rgba(255, 94, 20, 0); }
    100% { box-shadow: 0 0 0 0 rgba(255, 94, 20, 0); }
}

@media (max-width: 991px) {
    .sbr-f-dev-box {
        padding-right: 0 !important;
    }
    .sbr-pro-footer {
        padding-bottom: 85px !important;
    }
}
@media (max-width: 576px) {
    .sbr-pro-scroll-top {
        bottom: 18px !important;
        left: 14px !important;
        width: 40px !important;
        height: 40px !important;
        font-size: 14px !important;
    }
    .sbr-pro-quote-btn {
        bottom: 18px !important;
        right: 14px !important;
        padding: 10px 16px !important;
        font-size: 12.5px !important;
    }
}
</style>

<footer class="main-footer sbr-pro-footer">
    <div class="container">
        <!-- Main 4-Column Grid -->
        <div class="row g-4 align-items-start">
            <!-- Col 1: Brand Profile & Overview -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="sbr-f-brand-box">
                    <a href="index.php" class="sbr-f-brand-lockup">
                        <img src="images/sbr.png" alt="SBR Machines" class="sbr-f-logo-img">
                        <div class="sbr-f-brand-info">
                            <span class="sbr-f-brand-title">SBR MACHINES</span>
                            <span class="sbr-f-brand-sub">PET Blow Moulding Technology</span>
                        </div>
                    </a>
                    <p class="sbr-f-desc" data-i18n="footer_desc">
                        Advanced PET Stretch Blow Moulding Machines engineered for high precision, extreme energy efficiency, and non-stop 24/7 industrial performance across global beverage and packaging operations.
                    </p>
                    <div class="sbr-f-trust-pills">
                        <span class="sbr-f-pill"><i class="fa-solid fa-industry"></i> MIDC Chakan Mother Plant</span>
                        <span class="sbr-f-pill"><i class="fa-solid fa-bolt"></i> Eco-Smart Energy Saver</span>
                    </div>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <div class="sbr-f-widget">
                    <h4 class="sbr-f-title" data-i18n="quick_links">Quick Links</h4>
                    <div class="sbr-f-divider"></div>
                    <ul class="sbr-f-nav-list">
                        <li><a href="index.php" class="sbr-f-nav-link" data-i18n="nav_home"><i class="fa-solid fa-chevron-right"></i> <span>Home</span></a></li>
                        <li><a href="about.php" class="sbr-f-nav-link" data-i18n="nav_about"><i class="fa-solid fa-chevron-right"></i> <span>About Us</span></a></li>
                        <li><a href="index.php#machines" class="sbr-f-nav-link" data-i18n="nav_machines"><i class="fa-solid fa-chevron-right"></i> <span>Machines</span></a></li>
                        <li><a href="gallery.php" class="sbr-f-nav-link" data-i18n="nav_gallery"><i class="fa-solid fa-chevron-right"></i> <span>Gallery</span></a></li>
                        <li><a href="contact.php" class="sbr-f-nav-link" data-i18n="nav_contact"><i class="fa-solid fa-chevron-right"></i> <span>Contact</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- Col 3: Contact Info -->
            <div class="col-lg-3 col-md-6 col-6">
                <div class="sbr-f-widget">
                    <h4 class="sbr-f-title" data-i18n="footer_contact_title">Contact Info</h4>
                    <div class="sbr-f-divider"></div>
                    <div class="sbr-f-contact-list">
                        <div class="sbr-f-contact-item">
                            <div class="sbr-f-icon-circle"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="sbr-f-contact-text">
                                <span class="sbr-f-label">Mother Plant:</span>
                                <p data-i18n="footer_address">Plot No-PAP V-90/2 &amp; 3, PHASE-II MIDC Chakan Industrial Area, Vasuli, Tal. Khed, Pune, Maharashtra 410501, India</p>
                            </div>
                        </div>
                        <div class="sbr-f-contact-item">
                            <div class="sbr-f-icon-circle"><i class="fa-solid fa-envelope"></i></div>
                            <div class="sbr-f-contact-text">
                                <span class="sbr-f-label">Sales &amp; Inquiry:</span>
                                <p><a href="mailto:sales@sbrmachines.com">sales@sbrmachines.com</a></p>
                            </div>
                        </div>
                        <div class="sbr-f-contact-item">
                            <div class="sbr-f-icon-circle"><i class="fa-solid fa-phone"></i></div>
                            <div class="sbr-f-contact-text">
                                <span class="sbr-f-label">Direct Helpline:</span>
                                <p><a href="tel:+918793044005" class="sbr-f-phone-link">+91 8793044005</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Col 4: Mother Plant Location Map -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="sbr-f-widget">
                    <h4 class="sbr-f-title" data-i18n="plant_location_map">Mother Plant Location</h4>
                    <div class="sbr-f-divider"></div>
                    <div class="sbr-f-map-wrap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.374533050657!2d73.76208887107053!3d18.78190372218426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b5002ddcdb65%3A0x97d137bd022e66ea!2sSBR%20MACHINES%20PVT%20LTD%20(Mother%20Plant)!5e1!3m2!1sen!2sin!4v1788847443383!5m2!1sen!2sin"
                            width="100%" height="150" style="border:0; display:block;" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        <a href="https://maps.google.com/?q=SBR+MACHINES+PVT+LTD+(Mother+Plant)+Pune" target="_blank" rel="noopener noreferrer" class="sbr-f-map-action">
                            <i class="fa-solid fa-location-arrow me-1"></i> Open Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Point 12: Corporate Trust Banner & Social Links -->
        <div class="sbr-f-corp-banner">
            <div class="row align-items-center g-3">
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="sbr-f-corp-info">
                        <div class="d-flex align-items-center gap-2 mb-1 flex-wrap">
                            <span class="sbr-f-corp-title" data-i18n="footer_company_name">SBR MACHINES PVT. LTD.</span>
                            <span class="sbr-f-corp-est">Est. 2026 • Mother Plant, Pune</span>
                        </div>
                        <p class="sbr-f-corp-sub mb-0 text-muted" data-i18n="footer_year_copy">
                            © <?php echo date('Y'); ?> SBR Machines Pvt. Ltd. All Rights Reserved. • Innovation &amp; Precision in PET Blow Moulding
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-12 text-md-end text-start">
                    <div class="sbr-f-social-box">
                        <span class="sbr-f-social-label" data-i18n="footer_social_heading">Follow SBR:</span>
                        <div class="sbr-f-social-icons">
                            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="sbr-f-social-btn sbr-f-fb" title="Follow us on Facebook" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="sbr-f-social-btn sbr-f-insta" title="Follow us on Instagram" aria-label="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright & Developer Accreditation Row -->
        <div class="sbr-f-bottom-bar">
            <div class="row align-items-center">
                <div class="col-md-7 col-12 text-md-start text-center mb-md-0 mb-2">
                    <p class="sbr-f-tech-badge mb-0">
                        PET Stretch Blow Moulding Technology • Industrial Engineering Excellence
                    </p>
                </div>
                <div class="col-md-5 col-12 text-md-end text-center sbr-f-dev-box">
                    <p class="sbr-f-dev-text mb-0">
                        Design &amp; Developed By 
                        <a href="https://www.weblinkservices.net/" target="_blank" rel="noopener noreferrer" class="sbr-f-dev-link">
                            <img src="https://www.weblinkservices.net/assets-web/logo-main.png" alt="Weblink Services" height="22px" style="vertical-align: middle; margin-left: 5px;">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

     <style>
        /* ======================================
        ||         FULL STYLESHEET           ||
        ====================================== */

        /* Shared Styles */
        body {
            font-family: 'Inter', sans-serif; 
            margin: 0;
            background-color: #f0f2f5;
        }

        .btn-box {
            padding: 20px;
            text-align: center;
        }

        .theme-btn {
            display: inline-block;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .whatsappbtn {
            background-color: #25D366;
            border: none;
        }

        .whatsappbtn:hover {
            background-color: #128C7E;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
            cursor: pointer;
        }
        
        /* --- Floating Buttons Container --- */
        .floating-contact-btn {
            position: fixed;
            bottom: 90px; /* Space from the bottom */
            right: 20px; /* Space from the right */
            display: flex;
            flex-direction: column;
            align-items: center; /* Aligns items to the center of the container */
            gap: 10px; /* Creates space between the buttons */
            z-index: 1050;
        }

        /* Floating Button Styles */
        .floating-contact-btn > div,
        .floating-contact-btn > a {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
            text-decoration: none; /* For the link element */
        }

        .floating-contact-btn > div:hover,
        .floating-contact-btn > a:hover {
            transform: scale(1.1);
        }

        .floating-whatsapp-btn {
            background-color: #25D366;
        }
        
        .floating-phone-btn {
            background-color: #34B7F1;
        }

        .floating-contact-btn img {
            width: 40px;
        }

        .floating-contact-btn i {
            color: white;
            font-size: 2rem;
        }

        .icon-btn {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
        }

        /* Modal Overlay and Container */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1050;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.show {
            display: flex;
            opacity: 1;
        }

        .modal-content-wrapper {
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
            transition: transform 0.3s ease, opacity 0.3s ease;
            transform: translateY(-50px);
            opacity: 0;
        }

        .modal-overlay.show .modal-content-wrapper {
            transform: translateY(0);
            opacity: 1;
        }

        /* Modal Header */
        .modal-header {
            background-color: #25D366;
            color: white;
            padding: 1rem;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h5 {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 500;
        }

        .modal-header .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            line-height: 1;
        }

        /* Modal Body */
        .modal-body {
            padding: 1.5rem;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            font-weight: 500;
            color: #4a4a4a;
            display: block;
            margin-bottom: 0.5rem;
        }

        .form-control {
            width: 100%;
            border-radius: 0.75rem;
            border: 1px solid #e0e0e0;
            padding: 0.75rem 1rem;
            box-sizing: border-box;
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .form-control:focus {
            outline: none;
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .btn-submit {
            background-color: #25d366;
            border: none;
            font-weight: bold;
            color: white;
            border-radius: 0.75rem;
            padding: 0.75rem 1.5rem;
            width: 100%;
            cursor: pointer;
            transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;
        }

        .btn-submit:hover {
            background-color: #128c7e;
            transform: translateY(-2px);
        }

        /* Corner Modal Specific Styles */
        .corner-modal-overlay {
            justify-content: flex-end;
            align-items: flex-end;
            padding: 20px;
        }

        .corner-modal-overlay .modal-content-wrapper {
            width: 100%;
            max-width: 400px;
            transform: translateY(50px);
            margin: 0;
        }
        
        /* --- MOBILE RESPONSIVE STYLES --- */
        @media (max-width: 768px) {
            .floating-contact-btn {
                bottom: 2rem; /* Space from the bottom on mobile */
                right: 1rem; /* Space from the right on mobile */
                gap: 0.75rem;
            }
            .floating-contact-btn > div,
            .floating-contact-btn > a {
                width: 50px;
                height: 50px;
            }
            .floating-contact-btn img {
                width: 35px;
            }
        }
    </style>

     <div class="floating-contact-btn">
        <!-- WhatsApp Button to open the corner modal -->
        <div id="openCornerModalBtn" class="floating-whatsapp-btn">
             <i class="fab fa-whatsapp"></i>
        </div>
        
        <!-- Call Button -->
        <a href="tel:+918793044005" class="floating-phone-btn">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>
<div class="modal-overlay" id="whatsappModalCenter">
    <div class="modal-content-wrapper">
        <div class="modal-header">
            <h5 class="modal-title">Hi there! 👋</h5>
            <button class="close-btn" id="closeCenteredModalBtn">&times;</button>
        </div>
        <div class="modal-body">
            <p class="text-muted">Fill out the form below to start a conversation with us on WhatsApp.</p>
            <form id="whatsappFormCenter" action="https://www.weblinkservices.net/career/inquiry/mysql_whatsapp_leads.php" method="POST">
                <input type="hidden" name="company_domain">
                <input type="hidden" name="company_name">
                <input type="hidden" name="id_admin">
                <div class="form-group">
                    <label for="name1" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name1" name="name" required>
                </div>
                <div class="form-group">
                    <label for="mobile_number1" class="form-label">Mobile Number</label>
                    <input
                        type="tel"
                        class="form-control"
                        id="mobile_number1"
                        name="mobile_number"
                        minlength="6"
                        maxlength="15"
                        inputmode="numeric"
                        pattern="[0-9]{6,15}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service1" class="form-label">Service</label>
                    <input type="text" class="form-control" id="service1" name="service" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-submit">Start Chat</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-overlay corner-modal-overlay" id="whatsappModalCorner">
    <div class="modal-content-wrapper">
        <div class="modal-header">
            <h5 class="modal-title">Hi there! 👋</h5>
            <button class="close-btn" id="closeCornerModalBtn">&times;</button>
        </div>
        <div class="modal-body">
            <p class="text-muted">Fill out the form below to start a conversation with us on WhatsApp.</p>
            <form id="whatsappFormCorner" action="https://www.weblinkservices.net/career/inquiry/mysql_whatsapp_leads.php" method="POST">
                <input type="hidden" name="company_domain">
                <input type="hidden" name="company_name">
                <input type="hidden" name="id_admin">
                <div class="form-group">
                    <label for="name2" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name2" name="name" required>
                </div>
                <div class="form-group">
                    <label for="mobile_number2" class="form-label">Mobile Number</label>
                    <input
                        type="tel"
                        class="form-control"
                        id="mobile_number2"
                        name="mobile_number"
                        minlength="6"
                        maxlength="15"
                        inputmode="numeric"
                        pattern="[0-9]{6,15}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service2" class="form-label">Service</label>
                    <input type="text" class="form-control" id="service2" name="service" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-submit">Start Chat</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // A single, reusable function to handle the form submission logic for both modals
    const handleFormSubmit = async (event, modalId) => {
        event.preventDefault(); // Prevent default form submission

        const form = event.target;
        const formData = new FormData(form);

        // Validate mobile number format on the client side
        const mobileNumber = formData.get('mobile_number');
        if (!/^\d{6,15}$/.test(mobileNumber)) {
            Swal.fire('Validation Error', 'Please enter a valid mobile number (6-15 digits).', 'warning');
            return;
        }

        // Get the current page URL and append it to the form data
        const customerUrl = window.location.href;
        formData.set('customer_url', customerUrl);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error(`Server responded with status: ${response.status}`);
            }
            const data = await response.json();

            if (data.status === 'success') {
                Swal.fire('Success!', data.message, 'success');

                const clientMobileNumber = formData.get('id_admin');
                const userName = formData.get('name');
                const userMobile = formData.get('mobile_number');
                const userService = formData.get('service');
                const pageUrl = formData.get('customer_url');

                // Construct the WhatsApp URL with dynamic data
                const message = `*Hello, I'm* ${userName}\n` +
                    `*I'm interested in the service:* ${userService}\n` +
                    `*My mobile number is:* ${userMobile}\n` +
                    `*Source page:* ${pageUrl}`;

                const whatsappUrl = `https://wa.me/+91${clientMobileNumber}?text=${encodeURIComponent(message)}`;
                window.open(whatsappUrl, '_blank');
            } else {
                Swal.fire('Error!', data.message, 'error');
            }
        } catch (error) {
            console.error('Error:', error);
            Swal.fire('Error!', 'An error occurred. Please try again. Check the browser console for details.', 'error');
        }

        // Hide the modal after submission
        document.getElementById(modalId).classList.remove('show');
    };

    document.addEventListener('DOMContentLoaded', function() {
        // Define the values for the hidden inputs in one place
        const companyDomain = 'amaryalaser.com';
        const companyName = 'Amayra Laser';
        const idAdmin = '8793044005';

        // Set the values for all hidden input fields with the specified names
        document.querySelectorAll('input[name="company_domain"]').forEach(input => input.value = companyDomain);
        document.querySelectorAll('input[name="company_name"]').forEach(input => input.value = companyName);
        document.querySelectorAll('input[name="id_admin"]').forEach(input => input.value = idAdmin);
        
        // Get all relevant elements
        const centeredModal = document.getElementById('whatsappModalCenter');
        const openCenteredBtn = document.getElementById('openCenteredModalBtn');
        const closeCenteredBtn = document.getElementById('closeCenteredModalBtn');
        const cornerModal = document.getElementById('whatsappModalCorner');
        const openCornerBtn = document.getElementById('openCornerModalBtn');
        const closeCornerBtn = document.getElementById('closeCornerModalBtn');
        const formCenter = document.getElementById('whatsappFormCenter');
        const formCorner = document.getElementById('whatsappFormCorner');

        // Check and add listeners for centered modal
        if (centeredModal && openCenteredBtn) {
            openCenteredBtn.addEventListener('click', () => {
                centeredModal.classList.add('show');
            });
        }
        if (centeredModal && closeCenteredBtn) {
            closeCenteredBtn.addEventListener('click', () => {
                centeredModal.classList.remove('show');
            });
        }

        // Check and add listeners for corner modal
        if (cornerModal && openCornerBtn) {
            openCornerBtn.addEventListener('click', () => {
                cornerModal.classList.add('show');
            });
        }
        if (cornerModal && closeCornerBtn) {
            closeCornerBtn.addEventListener('click', () => {
                cornerModal.classList.remove('show');
            });
        }

        // Attach form submission listeners only if forms exist
        if (formCenter) {
            formCenter.addEventListener('submit', (event) => handleFormSubmit(event, 'whatsappModalCenter'));
        }
        if (formCorner) {
            formCorner.addEventListener('submit', (event) => handleFormSubmit(event, 'whatsappModalCorner'));
        }
    });
</script>
</footer>

<!-- Point 11: Professional Floating Controls -->
<!-- Left: Scroll to Top Button -->
<a href="#top" class="sbr-pro-scroll-top" id="scrollTopBtn" title="Back to Top" aria-label="Back to Top">
    <i class="fa-solid fa-arrow-up"></i>
</a>

<!-- Right: Floating Quotation Button -->
<a href="contact.php" class="sbr-pro-quote-btn" id="quoteFloatingBtn" title="Request Quotation">
    <i class="fa-solid fa-file-invoice-dollar"></i>
    <span class="sbr-quote-text" data-i18n="quote_floating_text">Request Quote</span>
</a>