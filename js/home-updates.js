/**
 * SBR Machines - Home Page Interactive Logic & Bilingual (EN / HI) Engine
 */

// Bilingual Dictionary
const sbrTranslations = {
    en: {
        // Nav & Header
        nav_home: "Home",
        nav_about: "About Us",
        nav_machines: "Machines",
        nav_gallery: "Gallery",
        nav_applications: "Applications",
        nav_contact: "Contact",
        nav_quote: "Request Quote",
        get_in_touch: "Get in Touch",
        lang_switch_label: "हिन्दी",

        // Stats Counters (Point 10)
        stat1_num: "12+",
        stat1_title: "Years in PET Blowing Manufacturing",
        stat1_desc: "Over a decade of high-precision engineering and continuous innovation in stretch blow moulding.",
        stat2_num: "1200+",
        stat2_title: "Machine Installations Completed",
        stat2_desc: "Successfully deployed and running round-the-clock across bottling plants worldwide.",
        stat3_num: "18+",
        stat3_title: "Exported to Global Countries",
        stat3_desc: "Trusted by international packaging enterprises across Asia, Middle East & Africa.",

        // About SBR, Plant & Director (Point 4)
        about_tag: "Who We Are & Infrastructure",
        about_title: "Leading Manufacturer of Advanced PET Blow Moulding Machines",
        plant_sub: "Mother Plant: Chakan MIDC Phase-II, Pune (50,000+ Sq. Ft. Facility)",
        plant_desc1: "SBR Machines Pvt. Ltd. is an industry pioneer in manufacturing high-speed, energy-efficient PET Stretch Blow Moulding Machines. From our state-of-the-art mother plant in Chakan Industrial Corridor, Pune, we design turnkey solutions with HAAS CNC precision machining.",
        plant_desc2: "With 24/7 dedicated testing bays and in-house component fabrication, we guarantee zero-defect production lines for water, beverages, edible oil, pharmaceuticals, and household packaging.",
        director_name: "Managing Director",
        director_title: "Founder & Managing Director, SBR Machines",
        director_quote: "\"Our commitment is simple: Deliver zero-defect, maximum-efficiency PET machines that turn our customers' packaging goals into profitable, 24/7 reality.\"",
        awards_heading: "Awards & Industry Recognitions Received",
        awards_sub: "Recognized for excellence in engineering, energy conservation, and PET machine innovation.",
        award1_title: "National Quality Excellence",
        award1_sub: "Manufacturing Benchmark",
        award2_title: "Best Innovation in PET",
        award2_sub: "Technology Leadership",
        award3_title: "Energy Efficiency Award",
        award3_sub: "Eco-Smart Technology",
        award4_title: "ISO 9001:2015 Certified",
        award4_sub: "Standardized Quality",

        // Vision & Mission (Points 5 & 6)
        vm_section_tag: "Corporate Philosophy",
        vm_section_title: "Our Guiding Principles for Global Leadership",
        vision_badge: "Future Aspiration",
        vision_title: "Our Vision",
        vision_desc: "To be universally recognized as the gold standard in high-speed, eco-efficient PET Stretch Blow Moulding engineering, driving sustainable packaging innovation across global industries.",
        mission_badge: "Core Purpose",
        mission_title: "Our Mission",
        mission_desc: "To engineer ultra-reliable, energy-saving, and high-productivity PET machines with comprehensive turnkey service support, enabling packaging manufacturers to maximize output while minimizing operational expenses.",

        // Range of Products (Point 7)
        prod_tag: "High-Performance Machinery",
        prod_title: "Range of Products - Check Model & Cavity No.",
        prod_sub: "Find the exact machine model and cavity specification tailored to your bottling capacity.",
        cavity_all: "All Models",
        cavity_1: "Single Cavity",
        cavity_2: "2 Cavity",
        cavity_4: "4 Cavity",
        cavity_jar: "5L-20L Jars",
        inquire_machine: "Inquire Machine",
        view_details: "View Machine",

        // Customer Care (Point 8)
        care_tag: "24/7 Assistance",
        care_title: "Dedicated Customer Care & Production Support",
        care_sub: "Your manufacturing continuity is our highest priority with instant technical service and rapid contact.",
        service_title: "1. Service & Support",
        service_subtitle: "Comprehensive Lifecycle Assistance",
        service_point1: "24/7 Technical Assistance Hotline & Quick Troubleshooting",
        service_point2: "Annual Maintenance Contracts (AMC) & Preventive Health Checks",
        service_point3: "Experienced Field Engineers Dispatched On-Site Within Hours",
        service_point4: "Remote Diagnostics & Live Siemens PLC Telemetry Support",
        contact_title: "2. Contact Us Now",
        contact_subtitle: "Instant Inquiry & Direct Engineer Access",
        call_hotline: "Call Technical Helpline",
        email_direct: "Email Machine Inquiries",
        whatsapp_chat: "Chat on WhatsApp Support",
        btn_contact_page: "Open Contact Page",

        // Spares & Training (Point 9)
        spares_tag: "Turnkey Operations",
        spares_section_title: "Genuine Spares & Certified Operator Training",
        spares_title: "Genuine OEM Spare Parts",
        spares_desc: "We maintain ready-stock inventory for all wear-and-tear parts at our Chakan facility, guaranteeing same-day dispatch to keep your bottling lines operating uninterrupted.",
        spares_chip1: "High-Pressure Blow Valves",
        spares_chip2: "Stretch Servo Cylinders",
        spares_chip3: "Infrared Quartz Lamps",
        spares_chip4: "Custom Precision Moulds",
        training_title: "Technical & Operator Training",
        training_desc: "Empower your operators and maintenance technicians with hands-on machinery training, recipe setting, safety compliance, and mold changeover certifications.",
        training_chip1: "Hands-on Machine Handling",
        training_chip2: "Recipe & Heat Optimization",
        training_chip3: "Fast Mould Changeovers",
        training_chip4: "Preventive Care Certification",

        // Floating & Footer
        quote_floating_text: "Request Quote",
        scroll_top_title: "Back to top",
        footer_company_name: "SBR MACHINES PVT. LTD.",
        footer_year_copy: "© 2026 SBR Machines Pvt. Ltd. All Rights Reserved.",
        footer_address: "Plot No-PAP V-90/2 & 3, PHASE-II MIDC Chakan Industrial Area, Vasuli, Tal. Khed, Pune, Maharashtra 410501, India",
        footer_social_heading: "Connect With Us:"
    },

    hi: {
        // Nav & Header
        nav_home: "होम",
        nav_about: "हमारे बारे में",
        nav_machines: "मशीनें",
        nav_gallery: "गैलरी",
        nav_applications: "अनुप्रयोग",
        nav_contact: "संपर्क करें",
        nav_quote: "कोटेशन मांगें",
        get_in_touch: "संपर्क करें",
        lang_switch_label: "English",

        // Stats Counters (Point 10)
        stat1_num: "12+",
        stat1_title: "पीईटी ब्लो मोल्डिंग मशीन निर्माण में वर्ष",
        stat1_desc: "स्ट्रेच ब्लो मोल्डिंग में एक दशक से अधिक का सटीक इंजीनियरिंग और नवाचार का अनुभव।",
        stat2_num: "1200+",
        stat2_title: "सफल मशीन इंस्टॉलेशन पूर्ण",
        stat2_desc: "देश और विदेश के बॉटलिंग प्लांट्स में 24/7 सुचारू रूप से कार्यरत मशीनें।",
        stat3_num: "18+",
        stat3_title: "वैश्विक देशों में निर्यात",
        stat3_desc: "एशिया, मध्य पूर्व और अफ्रीका के प्रमुख पैकेजिंग उद्योगों का विश्वसनीय ब्रांड।",

        // About SBR, Plant & Director (Point 4)
        about_tag: "हमारे बारे में और प्लांट संरचना",
        about_title: "उन्नत पीईटी ब्लो मोल्डिंग मशीनों के अग्रणी निर्माता",
        plant_sub: "मदर प्लांट: चाकण एमआईडीसी फेज-II, पुणे (50,000+ वर्ग फुट प्लांट)",
        plant_desc1: "एसबीआर मशीन्स प्राइवेट लिमिटेड उच्च गति और ऊर्जा की बचत करने वाली पीईटी स्ट्रेच ब्लो मोल्डिंग मशीनों के निर्माण में अग्रणी नाम है। पुणे के चाकण स्थित हमारे आधुनिक प्लांट में HAAS CNC मशीनों से सटीक निर्माण किया जाता है।",
        plant_desc2: "24/7 आधुनिक टेस्टिंग बे और इन-हाउस पार्ट्स निर्माण के साथ हम पानी, पेय पदार्थ, खाद्य तेल और फार्मास्युटिकल पैकेजिंग के लिए सर्वोत्तम बॉटलिंग लाइन्स सुनिश्चित करते हैं।",
        director_name: "प्रबंध निदेशक",
        director_title: "संस्थापक एवं प्रबंध निदेशक, एसबीआर मशीन्स",
        director_quote: "\"हमारा उद्देश्य स्पष्ट है: शून्य-दोष, अधिकतम कार्यक्षमता वाली पीईटी मशीनें प्रदान करना जो हमारे ग्राहकों को लगातार 24/7 उत्पादन और उच्च लाभ दे सकें।\"",
        awards_heading: "प्राप्त पुरस्कार एवं सम्मान",
        awards_sub: "उत्कृष्ट इंजीनियरिंग, ऊर्जा बचत और पीईटी तकनीक में नवाचार के लिए मान्यता प्राप्त।",
        award1_title: "राष्ट्रीय गुणवत्ता उत्कृष्टता पुरस्कार",
        award1_sub: "विनिर्माण मानक",
        award2_title: "पीईटी में सर्वश्रेष्ठ नवाचार",
        award2_sub: "प्रौद्योगिकी नेतृत्व",
        award3_title: "ऊर्जा दक्षता पुरस्कार",
        award3_sub: "इको-स्मार्ट तकनीक",
        award4_title: "ISO 9001:2015 प्रमाणित",
        award4_sub: "प्रमाणित गुणवत्ता",

        // Vision & Mission (Points 5 & 6)
        vm_section_tag: "कंपनी का दर्शन",
        vm_section_title: "वैश्विक नेतृत्व के लिए हमारे मार्गदर्शक सिद्धांत",
        vision_badge: "भावी लक्ष्य",
        vision_title: "हमारा विजन",
        vision_desc: "उच्च-गति, ऊर्जा-कुशल पीईटी स्ट्रेच ब्लो मोल्डिंग तकनीक में वैश्विक स्तर पर स्वर्ण मानक बनना और टिकाऊ पैकेजिंग नवाचार को नई दिशा देना।",
        mission_badge: "मूल उद्देश्य",
        mission_title: "हमारा मिशन",
        mission_desc: "विश्वसनीय, बिजली बचाने वाली और उच्च उत्पादकता वाली पीईटी मशीनें तैयार करना और संपूर्ण टर्नकी सेवा समर्थन देकर ग्राहकों की उत्पादन लागत घटाना और मुनाफा बढ़ाना।",

        // Range of Products (Point 7)
        prod_tag: "उच्च-प्रदर्शन मशीनरी",
        prod_title: "उत्पादों की रेंज - मशीन मॉडल और कैविटी नंबर जांचें",
        prod_sub: "अपनी बॉटलिंग क्षमता के अनुसार सटीक मशीन मॉडल और कैविटी का चुनाव करें।",
        cavity_all: "सभी मॉडल",
        cavity_1: "सिंगल कैविटी",
        cavity_2: "2 कैविटी",
        cavity_4: "4 कैविटी",
        cavity_jar: "5L-20L जार",
        inquire_machine: "मशीन की जानकारी लें",
        view_details: "मशीन देखें",

        // Customer Care (Point 8)
        care_tag: "24/7 सेवा सहायता",
        care_title: "समर्पित ग्राहक सेवा एवं उत्पादन सहायता",
        care_sub: "आपकी मशीन का निरंतर संचालन हमारी प्राथमिकता है - तुरंत तकनीकी सेवा और सीधा संपर्क।",
        service_title: "1. सेवा एवं तकनीकी सहायता",
        service_subtitle: "मशीन के संपूर्ण जीवनकाल के लिए सहायता",
        service_point1: "24/7 तकनीकी सहायता हेल्पलाइन और त्वरित समाधान",
        service_point2: "वार्षिक रखरखाव अनुबंध (AMC) एवं नियमित प्रिवेंटिव जांच",
        service_point3: "अनुभवी फील्ड इंजीनियर्स कुछ ही घंटों में आपके प्लांट पर उपलब्ध",
        service_point4: "रिमोट डायग्नोस्टिक्स और लाइव सीमेंस पीएलसी टेलीमेट्री सहायता",
        contact_title: "2. तुरंत संपर्क करें",
        contact_subtitle: "तत्काल पूछताछ और इंजीनियर से सीधी बात",
        call_hotline: "तकनीकी हेल्पलाइन पर कॉल करें",
        email_direct: "मशीन इन्क्वायरी ईमेल करें",
        whatsapp_chat: "व्हाट्सएप सपोर्ट पर चैट करें",
        btn_contact_page: "संपर्क पेज खोलें",

        // Spares & Training (Point 9)
        spares_tag: "टर्नकी संचालन",
        spares_section_title: "ओरिजिनल स्पेयर पार्ट्स एवं प्रमाणित ऑपरेटर प्रशिक्षण",
        spares_title: "ओरिजिनल OEM स्पेयर पार्ट्स",
        spares_desc: "चाकण स्थित हमारे वेयरहाउस में सभी जरूरी स्पेयर पार्ट्स का रेडी-स्टॉक मौजूद है, जिससे आपकी बॉटलिंग लाइन बिना रुकावट चलती रहे।",
        spares_chip1: "हाई-प्रेशर ब्लो वॉल्व्स",
        spares_chip2: "स्ट्रेच सर्वो सिलिंडर्स",
        spares_chip3: "इन्फ्रारेड क्वार्ट्ज लैंप्स",
        spares_chip4: "कस्टम प्रिसिजन मोल्ड्स",
        training_title: "तकनीकी एवं ऑपरेटर प्रशिक्षण",
        training_desc: "अपने ऑपरेटरों और मेंटेनेंस टीम को मशीन संचालन, मोल्ड चेंजओवर, सुरक्षा नियम और साइकिल ऑप्टिमाइज़ेशन का व्यवहारिक प्रशिक्षण दें।",
        training_chip1: "मशीन संचालन का व्यवहारिक ज्ञान",
        training_chip2: "तापमान एवं रेसिपी सेटिंग",
        training_chip3: "त्वरित मोल्ड चेंजओवर",
        training_chip4: "प्रिवेंटिव मेंटेनेंस सर्टिफिकेशन",

        // Floating & Footer
        quote_floating_text: "कोटेशन मांगें",
        scroll_top_title: "ऊपर जाएं",
        footer_company_name: "एसबीआर मशीन्स प्राइवेट लिमिटेड",
        footer_year_copy: "© 2026 एसबीआर मशीन्स प्राइवेट लिमिटेड। सर्वाधिकार सुरक्षित।",
        footer_address: "प्लॉट नं-PAP V-90/2 & 3, फेज-II एमआईडीसी चाकण इंडस्ट्रियल एरिया, वासुली, ताल. खेड, पुणे, महाराष्ट्र 410501, भारत",
        footer_social_heading: "सोशल मीडिया पर जुड़ें:"
    }
};

let currentLang = 'en';

// Toggle Language Function
function toggleWebsiteLanguage() {
    currentLang = (currentLang === 'en') ? 'hi' : 'en';
    localStorage.setItem('sbr_lang', currentLang);
    applyLanguage(currentLang);
}

// Apply Language Function
function applyLanguage(lang) {
    currentLang = lang;
    const t = sbrTranslations[lang];
    if (!t) return;

    document.body.classList.toggle('lang-hindi', lang === 'hi');

    // Update all elements with data-i18n
    const elements = document.querySelectorAll('[data-i18n]');
    elements.forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (t[key]) {
            if (el.id === 'scrollTopBtn' || el.classList.contains('sbr-floating-scroll-top')) {
                el.setAttribute('title', t[key]);
                el.setAttribute('aria-label', t[key]);
            } else {
                el.innerHTML = t[key];
            }
        }
    });

    // Update language toggle button labels
    const langBtns = document.querySelectorAll('.lang-toggle-btn .lang-label');
    langBtns.forEach(btnLabel => {
        btnLabel.textContent = t.lang_switch_label;
    });

    // Also trigger Google Translate if present on page
    if (typeof triggerGoogleTranslate === 'function') {
        triggerGoogleTranslate(lang);
    }
}

// Cavity & Machine Model Interactive Filtering (Point 7)
function initCavityFilter() {
    const filterButtons = document.querySelectorAll('.cavity-btn');
    const machineItems = document.querySelectorAll('.machine-item-card, .services-slider .swiper-slide');

    if (!filterButtons.length) return;

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            machineItems.forEach(item => {
                if (filterValue === 'all') {
                    item.style.display = '';
                } else {
                    const itemCavity = item.getAttribute('data-cavity');
                    if (itemCavity && itemCavity.includes(filterValue)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });

            // Update Swiper if applicable
            if (window.servicesSwiper) {
                window.servicesSwiper.update();
            }
        });
    });
}

// Scroll To Top Handler (Point 11)
function initScrollTop() {
    const scrollBtn = document.getElementById('scrollTopBtn');
    if (!scrollBtn) return;

    scrollBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Optional Google Translate Integration for Complete Page
function googleTranslateElementInit() {
    if (window.google && google.translate) {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi',
            autoDisplay: false
        }, 'google_translate_element');
    }
}

function triggerGoogleTranslate(lang) {
    try {
        const select = document.querySelector('.goog-te-combo');
        if (select) {
            select.value = lang;
            select.dispatchEvent(new Event('change'));
        }
    } catch (e) {
        // Fallback to internal dictionary
    }
}

// Initialize on DOM Ready
document.addEventListener('DOMContentLoaded', function() {
    // Check saved language
    const savedLang = localStorage.getItem('sbr_lang');
    if (savedLang && (savedLang === 'hi' || savedLang === 'en')) {
        applyLanguage(savedLang);
    }

    initCavityFilter();
    initScrollTop();
});
