<?php include 'header.php'; ?>
<body class="font-body text-textDark bg-white overflow-x-hidden leading-relaxed">


    <!-- Hero Section -->
    <section class="pt-40 pb-24 bg-cream relative overflow-hidden">
        <div class="absolute top-0 right-0 w-full md:w-[45%] h-[60%] md:h-full bg-primary rounded-bl-[60px] md:rounded-bl-[100px] z-0 opacity-80"></div>
        
        <div class="container mx-auto px-5 max-w-7xl flex flex-col md:flex-row items-center gap-12 relative z-10">
            <div class="flex-1 text-center md:text-left">
                <span class="inline-block px-4 py-1.5 bg-[#FFF0E5] text-primary rounded-full font-heading font-bold text-sm mb-6">Preschool & Child Care</span>
                <h1 class="font-heading text-5xl md:text-6xl font-extrabold text-textDark leading-tight mb-6">
                    We Prepare Your <span class="text-primary">Child</span> For Life
                </h1>
                <p class="text-textLight text-lg mb-8 max-w-lg mx-auto md:mx-0">
                    Nurturing children through engaging, play-based learning in a safe and supportive environment where every child blossoms.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-6 justify-center md:justify-start">
                    <a href="#explore" class="inline-block bg-primary text-white font-heading font-bold py-3 px-8 rounded-full shadow-btn hover:bg-primaryHover hover:-translate-y-1 hover:shadow-btn-hover transition-all duration-300">
                        Explore More <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#video" class="flex items-center gap-3 font-heading font-bold text-textDark hover:text-primary transition-colors group">
                        <span class="w-12 h-12 bg-white text-primary rounded-full flex items-center justify-center shadow-soft group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-play ml-1"></i>
                        </span>
                        Watch Video
                    </a>
                </div>
            </div>
            
            <div class="flex-1 relative flex justify-center mt-12 md:mt-0">
                <div class="w-72 h-72 sm:w-[400px] sm:h-[400px] md:w-[450px] md:h-[450px] bg-[#FFE5D0] border-[10px] border-white shadow-soft overflow-hidden blob-morph relative">
                    <img src="assets/img/hero.jpg" alt="Happy Kids" class="w-full h-full object-cover">
                </div>
                <!-- Decorative elements -->
                <i class="fa-solid fa-paper-plane absolute -top-4 md:top-6 left-0 md:left-6 text-3xl text-primary -rotate-12 animate-float"></i>
                <i class="fa-solid fa-star absolute bottom-6 right-6 md:bottom-12 md:right-12 text-3xl text-yellow-400 animate-bounce-slow"></i>
                <i class="fa-solid fa-cloud absolute top-1/4 -right-4 text-4xl text-white opacity-60 animate-float-delayed"></i>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-5 max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-6 rounded-3xl transition-all duration-300 hover:shadow-hover hover:-translate-y-2 group">
                    <div class="w-20 h-20 mx-auto mb-6 bg-[#FFF0E5] text-primary rounded-blob flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-shield-cat"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-3">Safe Environment</h3>
                    <p class="text-textLight">A secure, monitored campus ensures peace of mind for parents.</p>
                </div>
                <!-- Feature 2 -->
                <div class="text-center p-6 rounded-3xl transition-all duration-300 hover:shadow-hover hover:-translate-y-2 group">
                    <div class="w-20 h-20 mx-auto mb-6 bg-[#E6F3FA] text-softBlue rounded-blob flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-3">Expert Teachers</h3>
                    <p class="text-textLight">Qualified, passionate educators who understand child development.</p>
                </div>
                <!-- Feature 3 -->
                <div class="text-center p-6 rounded-3xl transition-all duration-300 hover:shadow-hover hover:-translate-y-2 group">
                    <div class="w-20 h-20 mx-auto mb-6 bg-[#EAF2F4] text-accentTeal rounded-blob flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-puzzle-piece"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-3">Play Based Learning</h3>
                    <p class="text-textLight">Interactive activities that foster cognitive and social skills.</p>
                </div>
                <!-- Feature 4 -->
                <div class="text-center p-6 rounded-3xl transition-all duration-300 hover:shadow-hover hover:-translate-y-2 group">
                    <div class="w-20 h-20 mx-auto mb-6 bg-[#FDECEC] text-accentRed rounded-blob flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-3">Full Day Programs</h3>
                    <p class="text-textLight">Flexible schedules adapting to modern working parents.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Learning Section -->
    <section class="py-24 bg-cream" id="about">
        <div class="container mx-auto px-5 max-w-7xl flex flex-col md:flex-row items-center gap-16">
            <div class="flex-1 w-full order-2 md:order-1">
                <div class="w-full max-w-[450px] aspect-square mx-auto bg-white p-4 rounded-blob-alt shadow-soft relative">
                    <img src="assets/img/learning.jpg" alt="Child Learning" class="w-full h-full object-cover rounded-blob-alt">
                    <i class="fa-solid fa-shapes absolute -bottom-6 -left-6 text-5xl text-accentRed animate-float"></i>
                </div>
            </div>
            
            <div class="flex-1 order-1 md:order-2">
                <span class="inline-block px-4 py-1.5 bg-[#FFF0E5] text-primary rounded-full font-heading font-bold text-sm mb-4">About Us</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold mb-6 text-textDark leading-tight">Learn To Play, Converse With Confidence</h2>
                <p class="text-textLight text-lg mb-8">
                    We provide a creative environment where children feel encouraged to explore and express themselves confidently through interactive structured play.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center text-sm shrink-0 mt-1">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold mb-1 text-xl">Sport Program</h4>
                            <p class="text-textLight m-0">Engaging physical activities</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center text-sm shrink-0 mt-1">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold mb-1 text-xl">Easy To Learn</h4>
                            <p class="text-textLight m-0">Simplified, joyous curriculum</p>
                        </div>
                    </div>
                </div>

                <div class="inline-flex items-center gap-4 bg-white p-3 pr-6 rounded-full shadow-soft hover:shadow-hover transition-shadow">
                    <img src="assets/img/founder.jpg" alt="Founder" class="w-14 h-14 rounded-full object-cover">
                    <div>
                        <strong class="block text-textDark font-heading">Call Us Now</strong>
                        <p class="text-primary font-bold m-0 leading-none mt-1">+1 250 500 8192</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white relative">
        <i class="fa-solid fa-rainbow absolute top-12 left-10 text-6xl text-warmNeutral opacity-20 hidden md:block animate-float"></i>
        <div class="container mx-auto px-5 max-w-7xl">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-[#FFF0E5] text-primary rounded-full font-heading font-bold text-sm mb-4">Our Policies</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-textDark">The Best Playschool<br>For Your Kid</h2>
            </div>
            
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1 w-full relative">
                    <img src="assets/img/graduation.jpg" alt="Graduation" class="w-full rounded-3xl shadow-soft">
                    <i class="fa-solid fa-rocket absolute -right-6 -top-6 text-5xl text-softBlue animate-bounce-slow hidden sm:block"></i>
                </div>
                
                <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-8 w-full">
                    <div class="flex gap-4 bg-cream p-5 rounded-2xl hover:shadow-soft transition-shadow">
                        <div class="w-14 h-14 bg-[#FFF0E5] text-primary rounded-blob-img flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg mb-2 leading-tight">Teacher Training And Progress</h4>
                            <p class="text-textLight text-sm m-0">Ensuring our educators remain updated</p>
                        </div>
                    </div>
                    <div class="flex gap-4 bg-cream p-5 rounded-2xl hover:shadow-soft transition-shadow">
                        <div class="w-14 h-14 bg-[#E6F3FA] text-softBlue rounded-blob-img flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-user-nurse"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg mb-2 leading-tight">Nursing Detective 24/7</h4>
                            <p class="text-textLight text-sm m-0">Full-time care and health monitoring</p>
                        </div>
                    </div>
                    <div class="flex gap-4 bg-cream p-5 rounded-2xl hover:shadow-soft transition-shadow">
                        <div class="w-14 h-14 bg-[#EAF2F4] text-accentTeal rounded-blob-img flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg mb-2 leading-tight">Advanced Playtime In Courses</h4>
                            <p class="text-textLight text-sm m-0">Interactive and advanced early education</p>
                        </div>
                    </div>
                    <div class="flex gap-4 bg-cream p-5 rounded-2xl hover:shadow-soft transition-shadow">
                        <div class="w-14 h-14 bg-[#FDECEC] text-accentRed rounded-blob-img flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg mb-2 leading-tight">Self-Confidence Gifted Programs</h4>
                            <p class="text-textLight text-sm m-0">Holistic personality development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-softBlue relative">
        <div class="absolute inset-0 overflow-hidden opacity-10 pointer-events-none">
            <!-- Decorative wave background pattern if needed -->
            <svg viewBox="0 0 1440 320" class="absolute bottom-0 w-full h-auto text-white fill-current">
                <path d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
        <div class="container mx-auto px-5 max-w-7xl relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center text-white">
                <div class="p-4 hover:-translate-y-2 transition-transform">
                    <i class="fa-solid fa-paper-plane text-4xl mb-4 opacity-90"></i>
                    <h2 class="font-heading text-5xl font-bold mb-2">25+</h2>
                    <p class="font-semibold text-white/80">Years of Experience</p>
                </div>
                <div class="p-4 hover:-translate-y-2 transition-transform">
                    <i class="fa-solid fa-users text-4xl mb-4 opacity-90"></i>
                    <h2 class="font-heading text-5xl font-bold mb-2">6,500+</h2>
                    <p class="font-semibold text-white/80">Class Completed</p>
                </div>
                <div class="p-4 hover:-translate-y-2 transition-transform">
                    <i class="fa-solid fa-chalkboard-user text-4xl mb-4 opacity-90"></i>
                    <h2 class="font-heading text-5xl font-bold mb-2">100+</h2>
                    <p class="font-semibold text-white/80">Expert Instructors</p>
                </div>
                <div class="p-4 hover:-translate-y-2 transition-transform">
                    <i class="fa-solid fa-graduation-cap text-4xl mb-4 opacity-90"></i>
                    <h2 class="font-heading text-5xl font-bold mb-2">6,561+</h2>
                    <p class="font-semibold text-white/80">Students Enrolled</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-24 bg-cream relative" id="programs">
        <i class="fa-solid fa-puzzle-piece absolute bottom-12 right-10 text-6xl text-primary opacity-10 hidden md:block animate-float-delayed"></i>
        <div class="container mx-auto px-5 max-w-7xl">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-[#FFF0E5] text-primary rounded-full font-heading font-bold text-sm mb-4">Our Programs</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-textDark">We Meet Kids At Their Level<br>Regardless Of Their Age</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Program 1 -->
                <div class="bg-accentTeal rounded-[40px] p-10 text-center text-white group hover:-translate-y-3 transition-transform duration-300 relative overflow-hidden shadow-soft">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-20 h-20 bg-white/20 rounded-blob mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm group-hover:rotate-12 transition-transform">
                        <i class="fa-solid fa-baby"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">Pre Nursery</h3>
                    <p class="bg-white/20 inline-block px-3 py-1 rounded-full text-sm font-semibold mb-4">1.5 - 2.5 years</p>
                    <p class="text-sm opacity-90 mb-8">Gentle introduction to structure</p>
                    <a href="pre-nursery.php" class="inline-flex w-12 h-12 bg-white text-accentTeal rounded-full items-center justify-center hover:bg-textDark hover:text-white transition-colors relative z-10 shadow-soft">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Program 2 -->
                <div class="bg-primary rounded-[40px] p-10 text-center text-white group hover:-translate-y-3 transition-transform duration-300 relative overflow-hidden shadow-soft">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-20 h-20 bg-white/20 rounded-blob mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm group-hover:-rotate-12 transition-transform">
                        <i class="fa-solid fa-child"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">Nursery</h3>
                    <p class="bg-white/20 inline-block px-3 py-1 rounded-full text-sm font-semibold mb-4">2.5 - 3.5 years</p>
                    <p class="text-sm opacity-90 mb-8">Building language & motor skills</p>
                    <a href="nursery.php" class="inline-flex w-12 h-12 bg-white text-primary rounded-full items-center justify-center hover:bg-textDark hover:text-white transition-colors relative z-10 shadow-soft">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Program 3 -->
                <div class="bg-softBlue rounded-[40px] p-10 text-center text-white group hover:-translate-y-3 transition-transform duration-300 relative overflow-hidden shadow-soft">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-20 h-20 bg-white/20 rounded-blob mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm group-hover:rotate-12 transition-transform">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">LKG</h3>
                    <p class="bg-white/20 inline-block px-3 py-1 rounded-full text-sm font-semibold mb-4">3.5 - 4.5 years</p>
                    <p class="text-sm opacity-90 mb-8">Letters, numbers & creativity</p>
                    <a href="lkg.php" class="inline-flex w-12 h-12 bg-white text-softBlue rounded-full items-center justify-center hover:bg-textDark hover:text-white transition-colors relative z-10 shadow-soft">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Program 4 -->
                <div class="bg-accentRed rounded-[40px] p-10 text-center text-white group hover:-translate-y-3 transition-transform duration-300 relative overflow-hidden shadow-soft">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-20 h-20 bg-white/20 rounded-blob mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm group-hover:-rotate-12 transition-transform">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">UKG</h3>
                    <p class="bg-white/20 inline-block px-3 py-1 rounded-full text-sm font-semibold mb-4">4.5 - 6 years</p>
                    <p class="text-sm opacity-90 mb-8">School readiness & preparation</p>
                    <a href="ukg.php" class="inline-flex w-12 h-12 bg-white text-accentRed rounded-full items-center justify-center hover:bg-textDark hover:text-white transition-colors relative z-10 shadow-soft">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-white overflow-hidden" id="gallery">
        <div class="container mx-auto px-5 max-w-7xl text-center mb-12 relative z-10">
            <span class="inline-block px-4 py-1.5 bg-[#FFF0E5] text-primary rounded-full font-heading font-bold text-sm mb-4">Gallery</span>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-textDark">Captured Moments</h2>
        </div>

        <style>
        .animate-scroll-gallery {
            animation: scroll-gallery 40s linear infinite;
            display: flex;
            width: max-content;
        }
        @keyframes scroll-gallery {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-scroll-gallery:hover {
            animation-play-state: paused;
        }
        </style>

        <div class="w-full relative z-10 pb-4">
            <div class="animate-scroll-gallery items-center">
                <?php 
                $gallery_images = [
                    "IMG_20250814_105055_373.webp",
                    "IMG_20250814_105326_276.webp",
                    "IMG_20250814_105534_078.webp",
                    "IMG_20250814_115028_061.webp",
                    "IMG_20250814_115045_945.webp",
                    "IMG_20250814_115103_087.webp",
                    "IMG_20250814_115119_815.webp",
                    "IMG_20250814_115128_872.webp"
                ];
                shuffle($gallery_images);
                // Print them twice for the seamless loop
                for($i=0; $i<2; $i++) {
                    foreach($gallery_images as $index => $img) {
                ?>
                <div class="w-[280px] md:w-[320px] shrink-0 mr-6 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                    <img src="assets/gallery/<?php echo $img; ?>" alt="Gallery Image" class="w-full h-48 md:h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
        <script>
        (function() {
            var gallery = document.querySelector('.animate-scroll-gallery');
            if (!gallery) return;
            var items = Array.from(gallery.children);
            var half = items.length / 2;
            var originals = items.slice(0, half);
            for (var i = originals.length - 1; i > 0; i--) {
                var j = Math.floor(Math.random() * (i + 1));
                var t = originals[i]; originals[i] = originals[j]; originals[j] = t;
            }
            gallery.innerHTML = '';
            originals.forEach(function(el) { gallery.appendChild(el); });
            originals.forEach(function(el) { gallery.appendChild(el.cloneNode(true)); });
        })();
        </script>
    </section>


    <!-- Testimonials -->
    <section class="py-24 bg-white relative">
        <i class="fa-solid fa-music absolute top-20 right-20 text-5xl text-softBlue opacity-10 animate-float hidden md:block"></i>
        <div class="container mx-auto px-5 max-w-7xl">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-1.5 bg-[#FFF0E5] text-primary rounded-full font-heading font-bold text-sm mb-4">Testimonials</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-textDark">What Clients Say</h2>
            </div>
            
            <div class="max-w-4xl mx-auto bg-cream p-12 md:p-16 rounded-[40px] text-center shadow-soft relative mt-16">
                <!-- Avatar overlapping top -->
                <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-24 h-24 rounded-full border-4 border-white shadow-soft bg-white">
                    <img src="assets/img/parent.jpg" alt="Parent" class="w-full h-full rounded-full object-cover">
                </div>
                
                <i class="fa-solid fa-quote-left text-6xl text-primary/20 block mb-6 mt-4"></i>
                <p class="text-xl md:text-2xl font-body italic text-textDark mb-10 leading-relaxed">
                    "The playschool provides such a nurturing and vibrant environment. Our child has developed immense confidence and foundational skills. The teachers are exceptional and truly care! We couldn't be happier with our choice."
                </p>
                <div>
                    <strong class="block text-xl font-heading text-textDark">Sarah Johnson</strong>
                    <span class="text-primary font-semibold">Happy Parent</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-cream" id="contact">
        <div class="container mx-auto px-5 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16">
                <div class="flex-1">
                    <span class="inline-block px-4 py-1.5 bg-[#EAF2F4] text-accentTeal rounded-full font-heading font-bold text-sm mb-4">Contact Us</span>
                    <h2 class="font-heading text-4xl md:text-5xl font-bold text-textDark mb-8 leading-tight">Let's Talk About Your<br>Child's Future</h2>
                    <p class="text-textLight mb-12">We are here to answer any questions you may have about our curriculum, enrollment process, or facilities. Feel free to reach out.</p>
                    
                    <div class="space-y-8">
                        <div class="flex gap-6 items-start">
                            <div class="w-14 h-14 bg-white text-primary rounded-full flex items-center justify-center text-2xl shrink-0 shadow-sm">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-xl mb-1">Our Location</h4>
                                <p class="text-textLight m-0">1st floor, Ramsons Kshitiji Commercial, Sector 95, Gurugram, Haryana 122505</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-start">
                            <div class="w-14 h-14 bg-white text-primary rounded-full flex items-center justify-center text-2xl shrink-0 shadow-sm">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-xl mb-1">Phone Number</h4>
                                <p class="text-textLight m-0">+91 87663 37686</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-start">
                            <div class="w-14 h-14 bg-white text-primary rounded-full flex items-center justify-center text-2xl shrink-0 shadow-sm">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-xl mb-1">Email Address</h4>
                                <p class="text-textLight m-0">playschoolthefoundation@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex-1">
                    <div class="bg-white p-10 md:p-12 rounded-[40px] shadow-hover border border-gray-100 relative">
                        <!-- Decorative element on form -->
                        <div class="absolute -right-6 -top-6 w-20 h-20 bg-primary/10 rounded-blob -z-10 animate-blobMorph"></div>
                        <h3 class="font-heading text-3xl font-bold mb-8 text-center">Enrollment Inquiry</h3>
                        <form action="#" method="POST">
                            <div class="mb-6">
                                <input type="text" placeholder="Parent's Name" required class="w-full px-6 py-4 bg-cream border-2 border-transparent rounded-2xl focus:outline-none focus:border-primary transition-colors text-textDark">
                            </div>
                            <div class="mb-6">
                                <input type="email" placeholder="Email Address" required class="w-full px-6 py-4 bg-cream border-2 border-transparent rounded-2xl focus:outline-none focus:border-primary transition-colors text-textDark">
                            </div>
                            <div class="mb-6">
                                <select class="w-full px-6 py-4 bg-cream border-2 border-transparent rounded-2xl focus:outline-none focus:border-primary transition-colors text-textLight appearance-none">
                                    <option value="" disabled selected>Select Program of Interest</option>
                                    <option value="pre-nursery">Pre Nursery (1.5 - 2.5 Yrs)</option>
                                    <option value="nursery">Nursery (2.5 - 3.5 Yrs)</option>
                                    <option value="lkg">LKG (3.5 - 4.5 Yrs)</option>
                                    <option value="ukg">UKG (4.5 - 6 Yrs)</option>
                                </select>
                            </div>
                            <div class="mb-8">
                                <textarea placeholder="Message or Questions" rows="4" class="w-full px-6 py-4 bg-cream border-2 border-transparent rounded-2xl focus:outline-none focus:border-primary transition-colors text-textDark resize-none"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-primary text-white font-heading font-bold text-lg py-4 px-8 rounded-full shadow-btn hover:bg-primaryHover hover:-translate-y-1 hover:shadow-btn-hover transition-all duration-300">
                                Send Message <i class="fa-solid fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>
