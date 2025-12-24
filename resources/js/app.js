// DOM Elements
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
const navLinks = document.querySelectorAll('.nav-link');
const contactForm = document.getElementById('contactForm');

// Mobile Navigation Toggle
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Close mobile menu when clicking on a link
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
    });
});

// Smooth scrolling for navigation links
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = link.getAttribute('href');
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
            const offsetTop = targetSection.offsetTop - 70; // Account for fixed navbar
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Navbar background change on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
        navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.15)';
    } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
    }
});

// Active navigation link highlighting
window.addEventListener('scroll', () => {
    let current = '';
    const sections = document.querySelectorAll('section');

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

// Extra files discovered in Portfolio folders — these will be added to the gallery if not present in designData
const extraFiles = [
    // Banner
    { image: '/build/assets/Images/Portfolio/Banner/1.jpg', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/2.jpg', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/3.png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/4.png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/Generated image 1 (1).png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/Generated image 1 (2).png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/Generated image 1 (3).png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/Generated image 1 (4).png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/Generated image 1 (5).png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/Generated image 1.png', category: 'banner' },
    { image: '/build/assets/Images/Portfolio/Banner/Google_AI_Studio_2025-11-25T11_27_16.446Z.446Z.png', category: 'banner' },

    // Branding
    { image: '/build/assets/Images/Portfolio/Branding/FASHIO~1.JPG', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1 (1).png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1 (2).png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1 (3).png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1 (4).png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1 (5).png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1 (6).png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1 (7).png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Generated image 1.png', category: 'branding' },
    { image: '/build/assets/Images/Portfolio/Branding/Shop-branding-design.jpg', category: 'branding' },

    // Brochure
    { image: '/build/assets/Images/Portfolio/Brochure/1.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/2.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/3.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/4.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/5.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/6.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/7.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/8.png', category: 'brochure' },
    { image: '/build/assets/Images/Portfolio/Brochure/9.png', category: 'brochure' },

    // Bussiness Card
    { image: '/build/assets/Images/Portfolio/Bussiness Card/Generate3d image 1.png', category: 'business-card' },
    { image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1 (1).png', category: 'business-card' },
    { image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1 (2).png', category: 'business-card' },
    { image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1 (3).png', category: 'business-card' },
    { image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1 (4).png', category: 'business-card' },
    { image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1 (8).png', category: 'business-card' },
    { image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1.png', category: 'business-card' },

    // Logo Design
    { image: '/build/assets/Images/Portfolio/Logo Design/1.jpg', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/2.724Z.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/2.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/3.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/4.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/6.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/66.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/6666.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Gemini_Generated_Image_e6wmpje6wmpje6wm.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated image 1 (1).png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated image 1 (2).png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated image 1 (3).png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated image 1 (4).png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated image 1 (6).png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated image 1.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated Image November 10, 2025 - 2_17AM.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated Image November 12, 2025 - 3_56AM.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Generated Image November 15, 2025 - 5_38AM.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Google_AI_Studio_2025-11-11T22_00_43.281Z.png', category: 'logo' },
    { image: '/build/assets/Images/Portfolio/Logo Design/Google_AI_Studio_2025-11-17T07_47_26.388Z.png', category: 'logo' },

    // T-shirt Design
    { image: '/build/assets/Images/Portfolio/T-shirt Design/Generated image 1.png', category: 'tshirt' },
    { image: '/build/assets/Images/Portfolio/T-shirt Design/Generated image 1 (1).png', category: 'tshirt' },

    // UI_Ux Design
    { image: '/build/assets/Images/Portfolio/UI_Ux Design/Generated image 1.png', category: 'ui' },
    { image: '/build/assets/Images/Portfolio/UI_Ux Design/Generated image 1 (1).png', category: 'ui' },
    { image: '/build/assets/Images/Portfolio/UI_Ux Design/Generated image 1 (2).png', category: 'ui' }
];

// Function to sanitize ids from image paths
function makeIdFromPath(path) {
    return 'auto_' + path.replace(/[^a-z0-9]+/gi, '_').replace(/^_+|_+$/g, '').toLowerCase();
}

// On DOMContentLoaded, append any extraFiles that are not already in designData
document.addEventListener('DOMContentLoaded', () => {
    const gallery = document.querySelector('.design-gallery');
    if (!gallery) return;

    let added = 0;
    extraFiles.forEach(file => {
        // Skip if file path already used in designData
        const already = Object.values(designData).some(d => d && d.image === file.image);
        if (already) return;

        const id = makeIdFromPath(file.image);
        // avoid id collision
        let uniqueId = id;
        let i = 1;
        while (designData[uniqueId]) {
            uniqueId = id + '_' + i;
            i++;
        }

        // Add to designData
        const categoryDisplayNames = {
            'banner': 'Banner',
            'branding': 'Branding',
            'brochure': 'Brochure',
            'business-card': 'Business Card',
            'logo': 'Logo Design',
            'tshirt': 'T-shirt Design',
            'ui': 'UI/UX Design'
        };

        designData[uniqueId] = {
            title: file.image.split('/').pop(),
            category: categoryDisplayNames[file.category] || file.category,
            image: file.image,
            description: 'Design preview for ' + file.image.split('/').pop(),
            tags: [file.category.charAt(0).toUpperCase() + file.category.slice(1)]
        };

        // Create HTML element
        const item = document.createElement('div');
        item.className = 'design-item';
        item.setAttribute('data-category', file.category);

        item.innerHTML = `
            <div class="design-image">
                <img src="${file.image}" alt="${designData[uniqueId].title}">
                <div class="design-overlay">
                    <div class="design-info">
                        <h3>${designData[uniqueId].title}</h3>
                        <p>${designData[uniqueId].description}</p>
                        <button class="view-btn" onclick="openDesignModal('${uniqueId}')">View Details</button>
                    </div>
                </div>
            </div>
        `;

        gallery.appendChild(item);
        added++;
    });

    if (added > 0) console.log(`Added ${added} extra design items to gallery.`);
});

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
        }
    });
}, observerOptions);

// Observe elements for animation
const animateElements = document.querySelectorAll('.skill-category, .project-card, .stat, .about-text, .contact-info');
animateElements.forEach(el => {
    observer.observe(el);
});

// Typing animation for hero title
function typeWriter(element, text, speed = 100) {
    let i = 0;
    element.innerHTML = '';

    function type() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }

    type();
}

// Initialize typing animation when page loads
window.addEventListener('load', () => {
    const heroTitle = document.querySelector('.hero-title');
    const originalText = heroTitle.textContent;
    typeWriter(heroTitle, originalText, 50);
});

// Counter animation for stats
function animateCounters() {
    const counters = document.querySelectorAll('.stat h4');

    counters.forEach(counter => {
        const target = parseInt(counter.textContent.replace(/\D/g, ''));
        const increment = target / 100;
        let current = 0;

        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.ceil(current) + (counter.textContent.includes('%') ? '%' : '+');
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + (counter.textContent.includes('%') ? '%' : '+');
            }
        };

        updateCounter();
    });
}

// Trigger counter animation when stats section is visible
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

const statsSection = document.querySelector('.about-stats');
if (statsSection) {
    statsObserver.observe(statsSection);
}

// Contact form handling
contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // Get form data
    const formData = new FormData(contactForm);
    const name = formData.get('name');
    const email = formData.get('email');
    const subject = formData.get('subject');
    const message = formData.get('message');

    // Simple validation
    if (!name || !email || !subject || !message) {
        showNotification('Please fill in all fields', 'error');
        return;
    }

    if (!isValidEmail(email)) {
        showNotification('Please enter a valid email address', 'error');
        return;
    }

    // Simulate form submission
    showNotification('Message sent successfully!', 'success');
    contactForm.reset();
});

// Email validation function
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Notification system
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotifications = document.querySelectorAll('.notification');
    existingNotifications.forEach(notification => notification.remove());

    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;

    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
        font-weight: 500;
        max-width: 300px;
    `;

    document.body.appendChild(notification);

    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);

    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Parallax effect for hero section
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero');
    const heroContent = document.querySelector('.hero-content');

    if (hero && heroContent) {
        heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});

// Skill items hover effect
const skillItems = document.querySelectorAll('.skill-item');
skillItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.style.transform = 'scale(1.1) rotate(5deg)';
    });

    item.addEventListener('mouseleave', () => {
        item.style.transform = 'scale(1) rotate(0deg)';
    });
});

// Project cards tilt effect
const projectCards = document.querySelectorAll('.project-card');
projectCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
    });
});

// Loading animation
window.addEventListener('load', () => {
    document.body.classList.add('loaded');

    // Add loading animation styles
    const style = document.createElement('style');
    style.textContent = `
        body:not(.loaded) {
            overflow: hidden;
        }
        
        body:not(.loaded)::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        body:not(.loaded)::after {
            content: 'Loading...';
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2rem;
            font-weight: 600;
            z-index: 10001;
        }
    `;
    document.head.appendChild(style);
});

// Scroll to top functionality
const scrollToTopBtn = document.createElement('button');
scrollToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
scrollToTopBtn.className = 'scroll-to-top';
scrollToTopBtn.style.cssText = `
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: #4f46e5;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1000;
    box-shadow: 0 5px 15px rgba(79, 70, 229, 0.3);
`;

document.body.appendChild(scrollToTopBtn);

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        scrollToTopBtn.style.opacity = '1';
        scrollToTopBtn.style.visibility = 'visible';
    } else {
        scrollToTopBtn.style.opacity = '0';
        scrollToTopBtn.style.visibility = 'hidden';
    }
});

// Add hover effect to scroll to top button
scrollToTopBtn.addEventListener('mouseenter', () => {
    scrollToTopBtn.style.transform = 'scale(1.1)';
    scrollToTopBtn.style.background = '#3730a3';
});

scrollToTopBtn.addEventListener('mouseleave', () => {
    scrollToTopBtn.style.transform = 'scale(1)';
    scrollToTopBtn.style.background = '#4f46e5';
});

// Design Portfolio Functionality
const filterButtons = document.querySelectorAll('.filter-btn');
const designItems = document.querySelectorAll('.design-item');

// Filter functionality
function getItemFolderCategory(item) {
    try {
        const img = item.querySelector('img');
        if (!img) return null;
        // Prefer the original src attribute (relative path)
        const srcAttr = img.getAttribute('src') || img.src || '';
        const m = srcAttr.match(/Portfolio\/(.+?)\//i);
        if (!m) return null;
        const folder = m[1].toLowerCase();

        if (folder.includes('logo')) return 'logo';
        if (folder.includes('brochure')) return 'brochure';
        if (folder.includes('banner')) return 'banner';
        if (folder.includes('buss') || folder.includes('business')) return 'business-card';
        if (folder.includes('t-shirt') || folder.includes('tshirt') || folder.includes('t shirt')) return 'tshirt';
        if (folder.includes('brand')) return 'branding';
        if (folder.includes('ui') || folder.includes('ux')) return 'ui';

        return folder.replace(/[^a-z0-9\-]+/g, '-');
    } catch (e) {
        return null;
    }
}

// Derive a display-friendly category name from an image path
function getCategoryFromPath(path) {
    if (!path) return null;
    const m = path.match(/Portfolio\/(.+?)\//i);
    if (!m) return null;
    const folder = m[1].toLowerCase();
    const map = {
        'logo': 'Logo Design',
        'logo design': 'Logo Design',
        'brochure': 'Brochure',
        'banner': 'Banner',
        'bussiness card': 'Business Card',
        'bussiness card': 'Business Card',
        'business-card': 'Business Card',
        't-shirt design': "T-shirt Design",
        't-shirt': "T-shirt Design",
        'tshirt': "T-shirt Design",
        'branding': 'Branding',
        'ui_ux design': 'UI/UX Design',
        'ui_ux design': 'UI/UX Design',
        'ui_ux': 'UI/UX Design',
        'ui': 'UI/UX Design'
    };

    // try direct map
    if (map[folder]) return map[folder];

    // fallback checks
    if (folder.includes('logo')) return 'Logo Design';
    if (folder.includes('brochure')) return 'Brochure';
    if (folder.includes('banner')) return 'Banner';
    if (folder.includes('buss') || folder.includes('business')) return 'Business Card';
    if (folder.includes('t') && folder.includes('shirt')) return "T-shirt Design";
    if (folder.includes('brand')) return 'Branding';
    if (folder.includes('ui') || folder.includes('ux')) return 'UI/UX Design';

    // default: return capitalized folder
    return folder.replace(/[-_]/g, ' ').replace(/\b\w/g, c => c.toUpperCase());
}

// Derive canonical folder key from image path (used for data-category)
function getFolderKeyFromPath(path) {
    if (!path) return null;
    const m = path.match(/Portfolio\/(.+?)\//i);
    if (!m) return null;
    const folder = m[1].toLowerCase();
    if (folder.includes('logo')) return 'logo';
    if (folder.includes('brochure')) return 'brochure';
    if (folder.includes('banner')) return 'banner';
    if (folder.includes('buss') || folder.includes('business')) return 'business-card';
    if (folder.includes('t') && folder.includes('shirt') || folder.includes('tshirt')) return 'tshirt';
    if (folder.includes('brand')) return 'branding';
    if (folder.includes('ui') || folder.includes('ux')) return 'ui';
    // fallback: sanitized folder
    return folder.replace(/[^a-z0-9\-]+/g, '-');
}

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filterValue = button.getAttribute('data-filter');

        // Re-query items each time so dynamically added items are included
        const allItems = document.querySelectorAll('.design-item');
        // Debug: when UI filter clicked, log each item's src + derived category
        const isUIFilter = filterValue === 'ui';
        allItems.forEach(item => {
            const itemCategoryAttr = item.getAttribute('data-category');
            const itemFolderCategory = getItemFolderCategory(item);
            const itemCategory = itemFolderCategory || itemCategoryAttr;

            if (isUIFilter) {
                const img = item.querySelector('img');
                const src = img ? (img.getAttribute('src') || img.src) : 'no-src';
                console.log('[UI DEBUG]', src, '->', itemFolderCategory, 'declared:', itemCategoryAttr);
            }

            // Only show item when its folder-derived category exactly matches the filter
            if (filterValue === 'all' || itemCategory === filterValue) {
                item.classList.remove('hidden');
                setTimeout(() => { item.style.display = 'block'; }, 100);
            } else {
                item.classList.add('hidden');
                setTimeout(() => { item.style.display = 'none'; }, 300);
            }
        });
    });
});

// Design Modal functionality
const designModal = document.getElementById('designModal');
const closeModal = document.querySelector('.close-modal');

// Design data for modal
const designData = {
    logo1: {
        title: 'Modern Logo Design',
        category: 'Logo Design',
        image: '/build/assets/Images/Portfolio/Logo Design/400w-R-Meu_EcnME.webp',
        description: 'A clean and minimalist logo design that represents modern aesthetics and professional branding. This design focuses on simplicity and memorable visual impact.',
        tags: ['Adobe Illustrator', 'Logo Design', 'Brand Identity']
    },
    logo2: {
        title: 'Creative Logo Design',
        category: 'Logo Design',
        image: '/build/assets/Images/Portfolio/Logo Design/1.jpg',
        description: 'An innovative brand identity design that combines creativity with functionality. This logo represents growth, innovation, and modern business values.',
        tags: ['Photoshop', 'Creative Design', 'Brand Strategy']
    },
    logo3: {
        title: 'Professional Logo Design',
        category: 'Logo Design',
        image: '/build/assets/Images/Portfolio/Logo Design/2.png',
        description: 'A corporate branding solution designed for professional businesses. This logo conveys trust, reliability, and corporate excellence.',
        tags: ['Adobe Illustrator', 'Corporate Design', 'Professional Branding']
    },
    poster1: {
        title: 'Event Poster Design',
        category: 'Poster Design',
        image: '/build/assets/Images/Portfolio/Brochure/1.png',
        description: 'Dynamic event promotion design featuring bold typography and vibrant colors. This poster captures the energy and excitement of live events.',
        tags: ['Photoshop', 'Event Design', 'Typography']
    },
    poster2: {
        title: 'Corporate Poster Design',
        category: 'Poster Design',
        image: '/build/assets/Images/Portfolio/Brochure/2.png',
        description: 'Professional business poster design with clean layout and corporate aesthetics. Perfect for business presentations and corporate communications.',
        tags: ['Adobe Illustrator', 'Corporate Design', 'Business Communication']
    },
    poster3: {
        title: 'Business Poster Design',
        category: 'Poster Design',
        image: '/build/assets/Images/Portfolio/Brochure/3.png',
        description: 'Modern business promotion design with contemporary layout and professional color scheme. Ideal for marketing campaigns and business promotions.',
        tags: ['Photoshop', 'Business Design', 'Marketing']
    },
    branding1: {
        title: 'Complete Brand Identity',
        category: 'Branding',
        image: '/build/assets/Images/Portfolio/Branding/Shop-branding-design.jpg',
        description: 'Comprehensive branding package including logo, color palette, typography, and brand guidelines. Created for modern businesses seeking complete brand identity.',
        tags: ['Brand Strategy', 'Adobe Illustrator', 'Brand Guidelines']
    },
    branding2: {
        title: 'Fashion Brand Design',
        category: 'Branding',
        image: '/build/assets/Images/Portfolio/Branding/Generated image 1.png',
        description: 'Elegant fashion branding solution with sophisticated design elements. This branding package includes stationery, business cards, and marketing materials.',
        tags: ['Fashion Design', 'Adobe Illustrator', 'Brand Identity']
    },
    branding3: {
        title: 'Shop Branding Design',
        category: 'Branding',
        image: '/build/assets/Images/Portfolio/Branding/Shop-branding-design.jpg',
        description: 'Retail brand identity design created for shop and retail businesses. This design focuses on attracting customers and building brand recognition.',
        tags: ['Retail Design', 'Adobe Illustrator', 'Shop Branding']
    },
    ui1: {
        title: 'Mobile App UI Design',
        category: 'UI/UX Design',
        image: '/build/assets/Images/Portfolio/UI_Ux Design/g3JeyNK2QoJaa2fF93h82aBgaU.avif',
        description: 'Modern mobile app interface design with intuitive user experience. Clean, user-friendly design with smooth interactions and modern aesthetics.',
        tags: ['Figma', 'Mobile Design', 'UI/UX']
    },
    ui2: {
        title: 'Website UI Design',
        category: 'UI/UX Design',
        image: '/build/assets/Images/Portfolio/UI_Ux Design/Generated image 1.png',
        description: 'Responsive website interface design with modern layout and engaging user experience. Focus on usability, accessibility, and visual appeal.',
        tags: ['Figma', 'Web Design', 'Responsive Design']
    },
    ui3: {
        title: 'Dashboard UI Design',
        category: 'UI/UX Design',
        image: '/build/assets/Images/Portfolio/UI_Ux Design/Generated image 1 (1).png',
        description: 'Admin panel interface design with clean dashboard layout and intuitive navigation. Designed for efficient data management and user productivity.',
        tags: ['Dashboard Design', 'Admin Panel', 'Data Visualization']
    }
    ,
    /* Additional items discovered in Portfolio folder */
    banner1: {
        title: 'Banner Design 1',
        category: 'Banner',
        image: '/build/assets/Images/Portfolio/Banner/1.jpg',
        description: 'Large hero banner for promotions and campaigns.',
        tags: ['Banner', 'Promotional', 'Photoshop']
    },
    banner2: {
        title: 'Banner Design 2',
        category: 'Banner',
        image: '/build/assets/Images/Portfolio/Banner/2.jpg',
        description: 'Event promotion banner with bold typography.',
        tags: ['Event', 'Banner', 'Design']
    },
    card1: {
        title: 'Business Card 1',
        category: 'Branding',
        image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1.png',
        description: 'Clean corporate business card layout.',
        tags: ['Business Card', 'Identity']
    },
    card2: {
        title: 'Business Card 2',
        category: 'Branding',
        image: '/build/assets/Images/Portfolio/Bussiness Card/Generated image 1 (1).png',
        description: 'Stylish and modern contact card.',
        tags: ['Business Card', 'Print']
    },
    tshirt1: {
        title: 'T-shirt Design',
        category: 'Branding',
        image: '/build/assets/Images/Portfolio/T-shirt Design/1.png',
        description: 'Print-ready apparel design for tees.',
        tags: ['Apparel', 'Print']
    },
    brochure4: {
        title: 'Brochure Design 4',
        category: 'Poster Design',
        image: 'Portfolio/Brochure/4.png',
        description: 'Marketing brochure layout.',
        tags: ['Brochure', 'Print']
    },
    brochure5: {
        title: 'Brochure Design 5',
        category: 'Poster Design',
        image: 'Portfolio/Brochure/5.png',
        description: 'Product brochure design.',
        tags: ['Brochure', 'Product']
    },
    brochure6: {
        title: 'Brochure Design 6',
        category: 'Poster Design',
        image: 'Portfolio/Brochure/6.png',
        description: 'Service brochure layout.',
        tags: ['Brochure', 'Services']
    },
    brochure7: {
        title: 'Brochure Design 7',
        category: 'Poster Design',
        image: '/build/assets/Images/Portfolio/Brochure/7.png',
        description: 'Promotional brochure.',
        tags: ['Brochure', 'Promo']
    },
    brochure8: {
        title: 'Brochure Design 8',
        category: 'Poster Design',
        image: '/build/assets/Images/Portfolio/Brochure/8.png',
        description: 'Corporate brochure design.',
        tags: ['Brochure', 'Corporate']
    },
    brochure9: {
        title: 'Brochure Design 9',
        category: 'Poster Design',
        image: '/build/assets/Images/Portfolio/Brochure/9.png',
        description: 'Informational brochure.',
        tags: ['Brochure', 'Info']
    },
    logo4: {
        title: 'Logo Example A',
        category: 'Logo Design',
        image: '/build/assets/Images/Portfolio/Logo Design/400w-R-Meu_EcnME.webp',
        description: 'Sample logo concept with modern styling.',
        tags: ['Logo', 'Brand']
    },
    logo5: {
        title: 'Logo Example B',
        category: 'Logo Design',
        image: '/build/assets/Images/Portfolio/Logo Design/55.png',
        description: 'Brand mark concept exploration.',
        tags: ['Logo', 'Mark']
    },
    logo6: {
        title: 'Logo Example C',
        category: 'Logo Design',
        image: '/build/assets/Images/Portfolio/Logo Design/555.png',
        description: 'Emblem-style logo proposal.',
        tags: ['Logo', 'Emblem']
    },
    branding4: {
        title: 'Fashion Branding',
        category: 'Branding',
        image: '/build/assets/Images/Portfolio/Branding/FASHIO~1.JPG',
        description: 'Fashion brand presentation with mockups.',
        tags: ['Branding', 'Fashion']
    },
    ui4: {
        title: 'UI Mockup 1',
        category: 'UI/UX Design',
        image: '/build/assets/Images/Portfolio/UI_Ux Design/Generated image 1.png',
        description: 'Screen mockup for mobile interface.',
        tags: ['Figma', 'Mobile']
    },
    ui5: {
        title: 'UI Mockup 2',
        category: 'UI/UX Design',
        image: '/build/assets/Images/Portfolio/UI_Ux Design/Generated image 1 (2).png',
        description: 'Responsive website mockup.',
        tags: ['Figma', 'Web']
    }
};

// Open design modal
// Open design modal
function openDesignModal(id, title, category, image, description) {
    let data;

    if (arguments.length > 1) {
        // Dynamic mode (passed all details)
        data = {
            title: title,
            category: category,
            image: image,
            description: description,
            tags: [category] // Use category as a tag
        };
    } else {
        // Legacy mode (lookup by ID)
        data = designData[id];
    }

    if (data) {
        document.getElementById('modalTitle').textContent = data.title;
        // derive category display from image path to ensure folder-based accuracy (only if image is present)
        const derivedCategory = getCategoryFromPath(data.image) || data.category;
        document.getElementById('modalCategory').textContent = derivedCategory;

        const modalImg = document.getElementById('modalImage');
        modalImg.src = data.image;
        modalImg.alt = data.title;

        document.getElementById('modalDescription').textContent = data.description;

        // Update tags
        const tagsContainer = document.querySelector('.modal-tags');
        tagsContainer.innerHTML = '';
        if (data.tags && Array.isArray(data.tags)) {
            data.tags.forEach(tag => {
                const tagElement = document.createElement('span');
                tagElement.className = 'tag';
                tagElement.textContent = tag;
                tagsContainer.appendChild(tagElement);
            });
        }

        designModal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
}
// Make globally available
window.openDesignModal = openDesignModal;

// Close modal
function closeDesignModal() {
    designModal.style.display = 'none';
    document.body.style.overflow = 'auto';
}
window.closeDesignModal = closeDesignModal;

// Event listeners for modal
closeModal.addEventListener('click', closeDesignModal);

// Close modal when clicking outside
designModal.addEventListener('click', (e) => {
    if (e.target === designModal) {
        closeDesignModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && designModal.style.display === 'block') {
        closeDesignModal();
    }
});

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    console.log('Portfolio website loaded successfully!');

    // Add any additional initialization code here
    const currentYear = new Date().getFullYear();
    const footerYear = document.querySelector('.footer p');
    if (footerYear) {
        footerYear.textContent = footerYear.textContent.replace('2024', currentYear);
    }

    // Validation: check designData category vs folder-derived category
    try {
        // Auto-fix designData categories from image folder and update DOM items' data-category
        const mismatches = [];
        Object.keys(designData).forEach(key => {
            const entry = designData[key];
            if (!entry || !entry.image) return;
            const derivedDisplay = getCategoryFromPath(entry.image) || '';
            const derivedKey = getFolderKeyFromPath(entry.image) || '';
            const declared = (entry.category || '').toString();

            // If declared display name doesn't match derived display, fix it in-memory
            const norm = s => s.toLowerCase().replace(/[^a-z0-9]+/g, '');
            if (derivedDisplay && norm(derivedDisplay) !== norm(declared)) {
                mismatches.push({ id: key, image: entry.image, declared, derived: derivedDisplay });
                designData[key].category = derivedDisplay; // fix
            }

            // Also update any existing DOM items that reference this image to have correct data-category key
            const allItems = document.querySelectorAll('.design-item');
            allItems.forEach(item => {
                const img = item.querySelector('img');
                if (!img) return;
                const src = img.getAttribute('src') || img.src || '';
                // compare relative paths (endsWith) to be tolerant of full URLs
                if (src && src.endsWith(entry.image) || src === entry.image) {
                    if (derivedKey) item.setAttribute('data-category', derivedKey);
                }
            });
        });

        if (mismatches.length) {
            console.warn('designData category mismatches found and auto-fixed (updated designData in-memory and DOM attributes):', mismatches);
        } else {
            console.log('designData categories validated: no mismatches.');
        }
    } catch (err) {
        console.error('Validation check failed:', err);
    }
});
