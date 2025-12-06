<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Rifat Hossain Shan - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation --->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h2>RH.Shan</h2>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#skills" class="nav-link">Skills</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#design-portfolio" class="nav-link">Design</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Hi, I'm <span class="highlight">Md. Rifat Hossain Shan</span>
                </h1>
                <h2 class="hero-subtitle">Full Stack Web Developer & Graphic Designer</h2>
                <p class="hero-description">
                    I'm a passionate full-stack developer and creative graphic designer with 4 years of experience. I love creating beautiful, functional websites and stunning visual designs that make a difference.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="profile-card">
                <div class="profile-img">
                    <img src="/build/assets/Profile.jpg" alt="Profile Picture">
                </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">About Me</h2>
                <p class="section-subtitle">Get to know me better</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>I'm a passionate full-stack developer and graphic designer</h3>
                    <p>
                        With 4 years of experience in web development and graphic design, I specialize in creating 
                        modern, responsive websites and stunning visual designs. I love turning complex problems 
                        into simple, beautiful solutions that users love.
                    </p>
                    <p>
                        I'm certified in Professional Graphic Design by Creative IT Institute and have worked on 
                        numerous projects ranging from web applications to brand identity designs. When I'm not coding 
                        or designing, you can find me exploring new technologies or enjoying a good cup of coffee.
                    </p>
                    <div class="about-stats">
                        <div class="stat">
                            <h4>50+</h4>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat">
                            <h4>4+</h4>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat">
                            <h4>100%</h4>
                            <p>Client Satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="about-img-wrapper">
                        <img src="/build/assets/Profile.jpg" alt="About Me">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Skills & Technologies</h2>
                <p class="section-subtitle">What I work with</p>
            </div>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3><i class="fas fa-laptop-code"></i> Frontend Development</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-css3-alt"></i>
                            <span>CSS3</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-js-square"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-react"></i>
                            <span>React</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-vue"></i>
                            <span>Vue.js</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-bootstrap"></i>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3><i class="fas fa-server"></i> Backend Development</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-php"></i>
                            <span>PHP</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database"></i>
                            <span>MongoDB</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database"></i>
                            <span>MySQL</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-git-alt"></i>
                            <span>Git</span>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3><i class="fas fa-palette"></i> Graphic Design</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-adobe"></i>
                            <span>Adobe Illustrator</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-adobe"></i>
                            <span>Photoshop</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-figma"></i>
                            <span>Figma</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-paint-brush"></i>
                            <span>Logo Design</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-image"></i>
                            <span>Poster Design</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-layer-group"></i>
                            <span>Brand Identity</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">My Projects</h2>
                <p class="section-subtitle">Some of my recent work</p>
            </div>
            <div class="projects-grid">
                @forelse($projects as $project)
                <div class="project-card">
                    <div class="project-image">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                        @else
                            <img src="/build/assets/placeholder.jpg" alt="Project Image">
                        @endif
                        <div class="project-overlay">
                            <div class="project-links">
                                @if($project->live_link)
                                    <a href="{{ $project->live_link }}" target="_blank" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                                @endif
                                @if($project->github_link)
                                    <a href="{{ $project->github_link }}" target="_blank" class="project-link"><i class="fab fa-github"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ Str::limit($project->description, 150) }}</p>
                        <div class="project-tech">
                            @foreach(explode(',', $project->techs) as $tech)
                                <span class="tech-tag">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">No projects available yet.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Design Portfolio Section -->
    <section id="design-portfolio" class="design-portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Design Portfolio</h2>
                <p class="section-subtitle">My creative design work</p>
            </div>
            
            <!-- Design Categories Filter -->
            <div class="design-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="logo">Logo Design</button>
                <button class="filter-btn" data-filter="brochure">Brochure</button>
                <button class="filter-btn" data-filter="banner">Banner</button>
                <button class="filter-btn" data-filter="business-card">Bussiness Card</button>
                <button class="filter-btn" data-filter="tshirt">T-shirt Design</button>
                <button class="filter-btn" data-filter="branding">Branding</button>
                <button class="filter-btn" data-filter="ui">UI/UX Design</button>
            </div>

            <!-- Design Gallery -->
            <div class="design-gallery">
                <!-- Logo Designs -->
                <div class="design-item" data-category="logo">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Logo Design/400w-R-Meu_EcnME.webp" alt="Modern Logo Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Modern Logo Design</h3>
                                <p>Clean and minimalist logo design</p>
                                <button class="view-btn" onclick="openDesignModal('logo1')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="logo">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Logo Design/1.jpg" alt="Creative Logo Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Creative Logo Design</h3>
                                <p>Innovative brand identity design</p>
                                <button class="view-btn" onclick="openDesignModal('logo2')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="logo">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Logo Design/2.png" alt="Professional Logo Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Professional Logo Design</h3>
                                <p>Corporate branding solution</p>
                                <button class="view-btn" onclick="openDesignModal('logo3')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Poster Designs -->
                <div class="design-item" data-category="poster">
                    <div class="design-image">
                        <img src="Portfolio/Brochure/1.png" alt="Event Poster Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Event Poster Design</h3>
                                <p>Dynamic event promotion design</p>
                                <button class="view-btn" onclick="openDesignModal('poster1')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="poster">
                    <div class="design-image">
                        <img src="Portfolio/Brochure/2.png" alt="Corporate Poster Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Corporate Poster Design</h3>
                                <p>Professional business poster</p>
                                <button class="view-btn" onclick="openDesignModal('poster2')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="poster">
                    <div class="design-image">
                        <img src="Portfolio/Brochure/3.png" alt="Business Poster Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Business Poster Design</h3>
                                <p>Modern business promotion design</p>
                                <button class="view-btn" onclick="openDesignModal('poster3')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Branding Designs -->
                <div class="design-item" data-category="branding">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Branding/Shop-branding-design.jpg" alt="Complete Brand Identity">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Complete Brand Identity</h3>
                                <p>Comprehensive branding package</p>
                                <button class="view-btn" onclick="openDesignModal('branding1')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="branding">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Branding/Generated image 1.png" alt="Fashion Brand Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Fashion Brand Design</h3>
                                <p>Elegant fashion branding solution</p>
                                <button class="view-btn" onclick="openDesignModal('branding2')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="branding">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Branding/Shop-branding-design.jpg" alt="Shop Branding Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Shop Branding Design</h3>
                                <p>Retail brand identity design</p>
                                <button class="view-btn" onclick="openDesignModal('branding3')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI/UX Designs -->
                <div class="design-item" data-category="ui">
                    <div class="design-image">
                        <img src="Portfolio/UI_Ux Design/g3JeyNK2QoJaa2fF93h82aBgaU.avif" alt="Mobile App UI Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Mobile App UI Design</h3>
                                <p>Modern mobile interface design</p>
                                <button class="view-btn" onclick="openDesignModal('ui1')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="ui">
                    <div class="design-image">
                        <img src="Portfolio/UI_Ux Design/Generated image 1.png" alt="Website UI Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Website UI Design</h3>
                                <p>Responsive web interface design</p>
                                <button class="view-btn" onclick="openDesignModal('ui2')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="ui">
                    <div class="design-image">
                        <img src="Portfolio/UI_Ux Design/Generated image 1 (1).png" alt="Dashboard UI Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Dashboard UI Design</h3>
                                <p>Admin panel interface design</p>
                                <button class="view-btn" onclick="openDesignModal('ui3')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banner Designs -->
                <div class="design-item" data-category="banner">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Banner/1.jpg" alt="Banner Design 1">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Banner Design 1</h3>
                                <p>Large hero banner for promotions</p>
                                <button class="view-btn" onclick="openDesignModal('banner1')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="banner">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Banner/2.jpg" alt="Banner Design 2">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Banner Design 2</h3>
                                <p>Event promotion banner</p>
                                <button class="view-btn" onclick="openDesignModal('banner2')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Card Designs -->
                <div class="design-item" data-category="business-card">
                    <div class="design-image">
                        <img src="Portfolio/Bussiness Card/Generated image 1.png" alt="Business Card 1">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Business Card 1</h3>
                                <p>Clean corporate business card</p>
                                <button class="view-btn" onclick="openDesignModal('card1')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="business-card">
                    <div class="design-image">
                        <img src="Portfolio/Bussiness Card/Generated image 1 (1).png" alt="Business Card 2">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Business Card 2</h3>
                                <p>Stylish contact card</p>
                                <button class="view-btn" onclick="openDesignModal('card2')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- T-shirt Design -->
                <div class="design-item" data-category="tshirt">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/T-shirt Design/1.png" alt="T-shirt Design">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>T-shirt Design</h3>
                                <p>Print-ready apparel design</p>
                                <button class="view-btn" onclick="openDesignModal('tshirt1')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brochure additional designs -->
                <div class="design-item" data-category="brochure">
                    <div class="design-image">
                        <img src="Portfolio/Brochure/4.png" alt="Brochure 4">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Brochure Design 4</h3>
                                <p>Marketing brochure layout</p>
                                <button class="view-btn" onclick="openDesignModal('brochure4')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="brochure">
                    <div class="design-image">
                        <img src="Portfolio/Brochure/5.png" alt="Brochure 5">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Brochure Design 5</h3>
                                <p>Product brochure</p>
                                <button class="view-btn" onclick="openDesignModal('brochure5')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="brochure">
                    <div class="design-image">
                        <img src="Portfolio/Brochure/6.png" alt="Brochure 6">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Brochure Design 6</h3>
                                <p>Service brochure layout</p>
                                <button class="view-btn" onclick="openDesignModal('brochure6')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="brochure">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Brochure/7.png" alt="Brochure 7">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Brochure Design 7</h3>
                                <p>Promotional brochure</p>
                                <button class="view-btn" onclick="openDesignModal('brochure7')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="brochure">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Brochure/8.png" alt="Brochure 8">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Brochure Design 8</h3>
                                <p>Corporate brochure</p>
                                <button class="view-btn" onclick="openDesignModal('brochure8')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="brochure">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Brochure/9.png" alt="Brochure 9">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Brochure Design 9</h3>
                                <p>Informational brochure</p>
                                <button class="view-btn" onclick="openDesignModal('brochure9')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Logo items -->
                <div class="design-item" data-category="logo">
                    <div class="design-image">
                        <img src="Portfolio/Logo Design/400w-R-Meu_EcnME.webp" alt="Logo Example">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Logo Example A</h3>
                                <p>Sample logo</p>
                                <button class="view-btn" onclick="openDesignModal('logo4')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="logo">
                    <div class="design-image">
                        <img src="Portfolio/Logo Design/55.png" alt="Logo Example B">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Logo Example B</h3>
                                <p>Brand mark concept</p>
                                <button class="view-btn" onclick="openDesignModal('logo5')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="logo">
                    <div class="design-image">
                        <img src="Portfolio/Logo Design/555.png" alt="Logo Example C">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Logo Example C</h3>
                                <p>Emblem design</p>
                                <button class="view-btn" onclick="openDesignModal('logo6')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Branding extras -->
                <div class="design-item" data-category="branding">
                    <div class="design-image">
                        <img src="/build/assets/Images/Portfolio/Branding/FASHIO~1.JPG" alt="Fashion Branding">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>Fashion Branding</h3>
                                <p>Elegant brand presentation</p>
                                <button class="view-btn" onclick="openDesignModal('branding4')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI/UX extras -->
                <div class="design-item" data-category="ui">
                    <div class="design-image">
                        <img src="Portfolio/UI_Ux Design/Generated image 1.png" alt="UI Mockup 1">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>UI Mockup 1</h3>
                                <p>Screen mockup</p>
                                <button class="view-btn" onclick="openDesignModal('ui4')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="design-item" data-category="ui">
                    <div class="design-image">
                        <img src="Portfolio/UI_Ux Design/Generated image 1 (2).png" alt="UI Mockup 2">
                        <div class="design-overlay">
                            <div class="design-info">
                                <h3>UI Mockup 2</h3>
                                <p>Responsive web mockup</p>
                                <button class="view-btn" onclick="openDesignModal('ui5')">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Modal -->
    <div id="designModal" class="design-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>

            <div class="modal-header">
                <h2 id="modalTitle">Design Title</h2>
                <p id="modalCategory">Category</p>
            </div>

            <div class="modal-body">
                <div class="modal-image">
                    <img id="modalImage" src="" alt="Design Work">
                </div>
                <div class="modal-details">
                    <h3>Project Details</h3>
                    <p id="modalDescription">Project description will appear here.</p>
                    <div class="modal-tags"></div>
                    <div class="modal-actions">
                        <button class="btn btn-primary">View Full Size</button>
                        <button class="btn btn-secondary">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">Let's work together</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Let's talk about your project</h3>
                    <p>I'm always interested in new opportunities and exciting projects. Feel free to reach out!</p>
                    <div class="contact-items">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>rifathossainshan@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Phone</h4>
                                <p>+8801953225259</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Location</h4>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2024 Md. Rifat Hossain Shan. All rights reserved.</p>
                <p>Made with <i class="fas fa-heart"></i> and lots of coffee</p>
            </div>
        </div>
    </footer>

</body>
</html>
