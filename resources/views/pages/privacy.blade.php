@extends('layout.Layout')

@section('title', 'Prizm Production')

@section('css')

    <style>
        /* Main styling matching Production theme */
        .services {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        .services-section {
            background: rgba(0, 0, 0, 0.8);
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }

        .services-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 30% 20%, rgba(255, 165, 0, 0.1) 0%, transparent 70%),
                radial-gradient(circle at 70% 80%, rgba(255, 193, 7, 0.1) 0%, transparent 70%),
                linear-gradient(45deg, rgba(255, 165, 0, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .section-content {
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #ff6b35, #f7931e, #ffc107);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: linear-gradient(45deg, #ff6b35, #ffc107);
            border-radius: 2px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .service-category {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 193, 7, 0.2);
            border-radius: 20px;
            padding: 40px 30px;
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            height: fit-content;
        }

        .service-category::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .service-category:hover::before {
            left: 100%;
        }

        .service-category:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(255, 193, 7, 0.15);
            border-color: rgba(255, 193, 7, 0.5);
        }

        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            position: relative;
            z-index: 2;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #ff6b35, #ffc107);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 1.8rem;
            color: #000;
            transition: all 0.3s ease;
        }

        .service-category:hover .category-icon {
            transform: rotate(360deg) scale(1.1);
        }

        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffc107;
            margin: 0;
            flex: 1;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
            z-index: 2;
        }

        .service-item {
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            padding-left: 25px;
        }

        .service-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: #ffc107;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .service-item:hover::before {
            background: #ff6b35;
            transform: translateY(-50%) scale(1.5);
        }

        .service-item:hover {
            color: #ffc107;
            padding-left: 35px;
        }

        .service-item:last-child {
            border-bottom: none;
        }



        /* Animation classes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInFromLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInFromRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-up {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .animate-slide-left {
            opacity: 0;
            animation: slideInFromLeft 0.8s ease forwards;
        }

        .animate-slide-right {
            opacity: 0;
            animation: slideInFromRight 0.8s ease forwards;
        }

        .animate-delay-1 {
            animation-delay: 0.2s;
        }

        .animate-delay-2 {
            animation-delay: 0.4s;
        }

        .animate-delay-3 {
            animation-delay: 0.6s;
        }

        .animate-delay-4 {
            animation-delay: 0.8s;
        }

        .animate-delay-5 {
            animation-delay: 1.0s;
        }

        .animate-delay-6 {
            animation-delay: 1.2s;
        }

        /* Stats counter */
        .stats-section {
            background: rgba(255, 193, 7, 0.05);
            border-radius: 20px;
            padding: 50px 0;
            margin: 60px 0;
            text-align: center;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #ffc107;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #e0e0e0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .service-category {
                padding: 30px 20px;
            }

            .category-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }

            .services-section {
                padding: 60px 0;
            }
        }

        /* Floating elements */
        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 8s infinite ease-in-out;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }
    </style>
@endsection

@section('content')


    <div class="services">
        <section class="services-section">
            <!-- Floating decorative elements -->
            <div class="floating-element" style="top: 10%; left: 5%; font-size: 2rem; color: #ffc107;">
                <i class="ti ti-movie"></i>
            </div>
            <div class="floating-element"
                style="top: 20%; right: 10%; font-size: 1.5rem; color: #ff6b35; animation-delay: -2s;">
                <i class="ti ti-music"></i>
            </div>
            <div class="floating-element"
                style="bottom: 30%; left: 8%; font-size: 1.8rem; color: #ffc107; animation-delay: -4s;">
                <i class="ti ti-camera"></i>
            </div>
            <div class="floating-element"
                style="bottom: 15%; right: 15%; font-size: 2.2rem; color: #ff6b35; animation-delay: -6s;">
                <i class="ti ti-palette"></i>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title animate-fade-up">OUR SERVICES</h2>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="stats-section animate-fade-up animate-delay-1">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="500">0</span>
                                    <span class="stat-label">Projects</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="20">0</span>
                                    <span class="stat-label">Services</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="100">0</span>
                                    <span class="stat-label">Clients</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="15">0</span>
                                    <span class="stat-label">Years</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Grid -->
                    <div class="services-grid">
                        <!-- Production Services -->
                        <div class="service-category featured-service animate-slide-left animate-delay-2">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-movie"></i>
                                </div>
                                <h3 class="category-title">Production Services</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">All India Line Production</li>
                                <li class="service-item">Feature Films Production</li>
                                <li class="service-item">Pre Production Services</li>
                                <li class="service-item">Production Services</li>
                                <li class="service-item">All India Location Management</li>
                            </ul>
                        </div>

                        <!-- Post Production -->
                        <div class="service-category animate-fade-up animate-delay-3">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-edit"></i>
                                </div>
                                <h3 class="category-title">Post Production</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Post Production Services</li>
                                <li class="service-item">Visual Effect Services</li>
                                <li class="service-item">Animation Film Production</li>
                                <li class="service-item">Digital Cinema Services</li>
                                <li class="service-item">All Multimedia Solution</li>
                            </ul>
                        </div>

                        <!-- Audio & Music -->
                        <div class="service-category animate-slide-right animate-delay-4">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-music"></i>
                                </div>
                                <h3 class="category-title">Audio & Music</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Audio Services</li>
                                <li class="service-item">Music Video Production</li>
                                <li class="service-item">Musical Recordings</li>
                                <li class="service-item">Voice Over Services</li>
                            </ul>
                        </div>

                        <!-- Cinematography -->
                        <div class="service-category animate-slide-left animate-delay-5">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-camera"></i>
                                </div>
                                <h3 class="category-title">Cinematography</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Cinematography</li>
                                <li class="service-item">TV Commercials</li>
                                <li class="service-item">Ad Films</li>
                                <li class="service-item">Corporate Videos Services</li>
                            </ul>
                        </div>

                        <!-- Creative & Design -->
                        <div class="service-category featured-service animate-fade-up animate-delay-6">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-palette"></i>
                                </div>
                                <h3 class="category-title">Creative & Design</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Graphic Art Films</li>
                                <li class="service-item">Film Distribution</li>
                                <li class="service-item">Artist Management Services</li>
                                <li class="service-item">Crowd Supplies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.animation = entry.target.style.animation || entry.target
                            .className.includes('fade-up') ? 'fadeInUp 0.8s ease forwards' :
                            entry.target.className.includes('slide-left') ?
                            'slideInFromLeft 0.8s ease forwards' :
                            'slideInFromRight 0.8s ease forwards';
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('[class*="animate-"]').forEach(el => {
                observer.observe(el);
            });

            // Counter animation
            function animateCounter(element) {
                const target = parseInt(element.dataset.count);
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    element.textContent = Math.floor(current) + (target >= 100 ? '+' : '');
                }, 16);
            }

            // Stats counter observer
            const statsObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('[data-count]');
                        counters.forEach(counter => {
                            animateCounter(counter);
                        });
                        statsObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            const statsSection = document.querySelector('.stats-section');
            if (statsSection) {
                statsObserver.observe(statsSection);
            }

            // Enhanced hover effects
            document.querySelectorAll('.service-category').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    // Add subtle glow effect
                    this.style.boxShadow =
                        '0 25px 50px rgba(255, 193, 7, 0.2), 0 0 50px rgba(255, 193, 7, 0.1)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '';
                });
            });

            // Button hover effect
            const ctaButton = document.querySelector('.btn');
            if (ctaButton) {
                ctaButton.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                    this.style.boxShadow = '0 15px 30px rgba(255, 193, 7, 0.3)';
                });

                ctaButton.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                    this.style.boxShadow = 'none';
                });
            }

            // Service item click effects
            document.querySelectorAll('.service-item').forEach(item => {
                item.addEventListener('click', function() {
                    // Add click animation
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });
        });
    </script>
@endsection
