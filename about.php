<?php 
$pageTitle = "About Us - The Foundation Play School";
include 'header.php'; 
?>

<meta name="description" content="Learn about The Foundation Play School - our story, philosophy, mission, and the dedicated team nurturing your child's development.">

<style>
    .timeline-line::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 0; bottom: 0;
        width: 3px;
        background: linear-gradient(to bottom, #FF944D, #65A1CA, #639b9c);
    }
</style>

    <!-- ===== 1. HERO (REDESIGNED) ===== -->
    <section class="relative pt-32 pb-20 overflow-hidden -mt-[72px] bg-gradient-to-br from-[#FFF9F5] via-[#FFF7ED] to-[#FFF1E5]">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full opacity-30 pointer-events-none">
            <i class="fa-solid fa-cloud absolute top-20 left-[10%] text-brandBlue/20 text-7xl float-anim"></i>
            <i class="fa-solid fa-star absolute top-40 right-[15%] text-brandOrange/20 text-5xl float-anim-delay"></i>
            <i class="fa-solid fa-heart absolute bottom-40 left-[15%] text-brandRed/20 text-4xl float-anim-delay2"></i>
            <i class="fa-solid fa-circle absolute bottom-20 right-[10%] text-brandTeal/20 text-3xl float-anim"></i>
        </div>

        <div class="max-w-[1300px] mx-auto px-5 relative z-10 text-center">
            <!-- Centered Content -->
            <div class="max-w-3xl mx-auto mb-16 relative">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block inline-flex items-center gap-2 bg-orange-50 px-4 py-2 rounded-full shadow-sm">
                    <i class="fa-solid fa-heart"></i> The Heart of Our Foundation
                </span>
                <h1 class="text-5xl md:text-7xl font-heading font-bold leading-tight mb-8 text-brandDarkBlue">
                    Exploring Our World, <br>
                    <span class="text-brandOrange relative">
                        One Smile
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-brandBlue/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0 5 Q 25 0, 50 5 T 100 5" stroke="currentColor" stroke-width="4" fill="transparent"/>
                        </svg>
                    </span>
                    at a Time
                </h1>
                <p class="text-textLight mb-10 text-lg md:text-xl leading-relaxed max-w-2xl mx-auto">
                    A joyful journey from a small dream to India's most loved preschool community. Discover how we nurture curiosity and build bright futures.
                </p>
                <div class="flex flex-wrap justify-center gap-5">
                    <a href="contact.php" class="bg-brandOrange text-white px-10 py-5 rounded-full font-bold shadow-xl shadow-brandOrange/30 hover:-translate-y-1 transition duration-300 group">
                        Join Our Family <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Floating Image Collage -->
            <div class="relative h-[400px] md:h-[500px] w-full max-w-5xl mx-auto">
                <!-- Main central-ish photo -->
                <div class="absolute left-1/2 top-0 -translate-x-1/2 w-64 h-64 md:w-80 md:h-80 bg-white p-3 rounded-blob shadow-2xl z-20 hover:scale-105 transition duration-500 overflow-hidden">
                    <img src="assets/img/hero.jpg" alt="About Kidsa" class="w-full h-full object-cover rounded-blob">
                </div>
                
                <!-- Floating photo left -->
                <div class="absolute left-0 top-1/2 -translate-y-1/2 w-40 h-40 md:w-56 md:h-56 bg-white p-2 rounded-blob2 shadow-xl z-30 hover:-rotate-3 transition duration-500 overflow-hidden hidden sm:block">
                    <img src="assets/img/learning.jpg" alt="Kids learning" class="w-full h-full object-cover rounded-blob2">
                </div>

                <!-- Floating photo right -->
                <div class="absolute right-0 top-1/4 w-36 h-36 md:w-48 md:h-48 bg-white p-2 rounded-blob shadow-xl z-10 hover:rotate-6 transition duration-500 overflow-hidden hidden sm:block">
                    <img src="assets/img/graduation.jpg" alt="Happy student" class="w-full h-full object-cover rounded-blob">
                </div>

                <!-- Small accent photo -->
                <div class="absolute right-10 bottom-0 w-28 h-28 md:w-40 md:h-40 bg-white p-2 rounded-blob2 shadow-lg z-30 hover:scale-110 transition duration-500 overflow-hidden hidden md:block">
                    <img src="assets/img/teacher1.jpg" alt="Our teacher" class="w-full h-full object-cover rounded-blob2">
                </div>

                <!-- Abstract Decorations -->
                <div class="absolute left-1/4 bottom-10 w-20 h-20 bg-brandOrange/10 rounded-full border-4 border-white shadow-sm z-0 hidden lg:block float-anim-delay"></div>
                <div class="absolute right-1/4 top-10 w-16 h-16 bg-brandBlue/10 rounded-blob shadow-sm z-0 hidden lg:block float-anim"></div>
            </div>
        </div>

        <!-- Wave bottom transition -->
        <div class="absolute bottom-0 left-0 w-full h-[80px] z-50 overflow-hidden leading-[0]">
            <svg class="relative block w-[200%] h-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 400,0 600,60 C800,120 1050,30 1200,90 L1200,120 L0,120 Z" fill="#ffffff" class="transition-all duration-300"></path>
            </svg>
        </div>
    </section>


    <!-- ===== 2. WELCOME MESSAGE ===== -->
    <section class="py-14 bg-white">
        <div class="max-w-[900px] mx-auto px-5 text-center">
            <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Welcome</span>
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue mb-6">Welcome to The Foundation!</h2>
            <p class="text-textLight text-lg leading-relaxed mb-8">
                At The Foundation, we believe every child is born curious and capable. Our school is a warm, joyful, and safe haven where little minds explore, discover, and grow — through play, art, music, and friendship.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
                <div class="bg-orange-50 rounded-[30px] p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-brandOrange/10 rounded-blob text-brandOrange text-3xl flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-shield-heart"></i></div>
                    <h4 class="font-heading font-bold text-xl text-brandDarkBlue mb-2">Safe Environment</h4>
                    <p class="text-textLight text-sm">CCTV monitored, child-safe furniture, hygienic meals, and trained staff at all times.</p>
                </div>
                <div class="bg-blue-50 rounded-[30px] p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-brandBlue/10 rounded-blob text-brandBlue text-3xl flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-gamepad"></i></div>
                    <h4 class="font-heading font-bold text-xl text-brandDarkBlue mb-2">Fun Learning</h4>
                    <p class="text-textLight text-sm">Play-based curriculum that sparks creativity, curiosity, and a lifelong love of learning.</p>
                </div>
                <div class="bg-teal-50 rounded-[30px] p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-brandTeal/10 rounded-blob text-brandTeal text-3xl flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-seedling"></i></div>
                    <h4 class="font-heading font-bold text-xl text-brandDarkBlue mb-2">Early Development</h4>
                    <p class="text-textLight text-sm">Focus on cognitive, social, emotional, and physical milestones in early childhood.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 3. OUR STORY ===== -->
    <section class="py-14 bg-brandBg relative overflow-hidden">
        <i class="fa-solid fa-rainbow absolute left-5 top-10 text-8xl text-gray-200/50 -rotate-12"></i>
        <div class="max-w-[1200px] mx-auto px-5">
            <div class="text-center mb-12">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Our Journey</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">Our Story</h2>
            </div>
            <div class="relative timeline-line">
                <!-- Item 1 -->
                <div class="flex flex-col md:flex-row items-center gap-8 mb-14">
                    <div class="flex-1 md:text-right">
                        <div class="bg-white rounded-[30px] p-6 shadow-sm card-hover inline-block text-left md:text-right max-w-sm">
                            <span class="text-brandOrange font-heading font-bold text-xl">2010</span>
                            <h4 class="font-heading font-bold text-xl text-brandDarkBlue mt-1 mb-2">The Dream Begins</h4>
                            <p class="text-textLight text-sm">Founded by passionate early educators who believed in creating a nurturing space where children could truly thrive.</p>
                        </div>
                    </div>
                    <div class="w-14 h-14 bg-brandOrange rounded-full flex items-center justify-center text-white text-xl shadow-lg z-10 shrink-0">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <div class="flex-1 hidden md:block"></div>
                </div>
                <!-- Item 2 -->
                <div class="flex flex-col md:flex-row items-center gap-8 mb-14">
                    <div class="flex-1 hidden md:block"></div>
                    <div class="w-14 h-14 bg-brandBlue rounded-full flex items-center justify-center text-white text-xl shadow-lg z-10 shrink-0">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-white rounded-[30px] p-6 shadow-sm card-hover max-w-sm">
                            <span class="text-brandBlue font-heading font-bold text-xl">2014</span>
                            <h4 class="font-heading font-bold text-xl text-brandDarkBlue mt-1 mb-2">Growing Family</h4>
                            <p class="text-textLight text-sm">Expanded to 3 campuses and welcomed our 500th student, building a true community of young learners and families.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="flex flex-col md:flex-row items-center gap-8 mb-14">
                    <div class="flex-1 md:text-right">
                        <div class="bg-white rounded-[30px] p-6 shadow-sm card-hover inline-block text-left md:text-right max-w-sm">
                            <span class="text-brandTeal font-heading font-bold text-xl">2018</span>
                            <h4 class="font-heading font-bold text-xl text-brandDarkBlue mt-1 mb-2">Award for Excellence</h4>
                            <p class="text-textLight text-sm">Recognized as the Best Preschool in the region for our innovative play-based curriculum and child development outcomes.</p>
                        </div>
                    </div>
                    <div class="w-14 h-14 bg-brandTeal rounded-full flex items-center justify-center text-white text-xl shadow-lg z-10 shrink-0">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="flex-1 hidden md:block"></div>
                </div>
                <!-- Item 4 -->
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-1 hidden md:block"></div>
                    <div class="w-14 h-14 bg-brandRed rounded-full flex items-center justify-center text-white text-xl shadow-lg z-10 shrink-0">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-white rounded-[30px] p-6 shadow-sm card-hover max-w-sm">
                            <span class="text-brandRed font-heading font-bold text-xl">2024</span>
                            <h4 class="font-heading font-bold text-xl text-brandDarkBlue mt-1 mb-2">Today & Beyond</h4>
                            <p class="text-textLight text-sm">2000+ graduates and still growing. Our commitment to joyful, child-centred education is stronger than ever.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 5. MISSION & VISION ===== -->
    <section class="py-14 bg-brandDarkBlue relative overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image:url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'40\' height=\'40\'><circle cx=\'20\' cy=\'20\' r=\'2\' fill=\'white\'/></svg>');background-size:40px;"></div>
        <i class="fa-solid fa-sun float-anim absolute right-10 top-10 text-7xl text-brandOrange/10"></i>
        <div class="max-w-[1100px] mx-auto px-5 relative z-10">
            <div class="text-center mb-12">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">What Drives Us</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-white">Mission & Vision</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white/10 backdrop-blur-sm border border-white/10 rounded-[40px] p-10 text-white">
                    <div class="w-16 h-16 bg-brandOrange rounded-2xl flex items-center justify-center text-white text-3xl mb-6 shadow-lg">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="font-heading text-3xl font-bold mb-4">Our Mission</h3>
                    <p class="text-white/80 leading-relaxed">To provide every child with a joyful, safe, and stimulating early learning environment that builds a strong foundation for lifelong learning, social skills, and emotional well-being — regardless of background.</p>
                    <ul class="mt-6 space-y-2 text-white/70 text-sm">
                        <li class="flex gap-2"><i class="fa-solid fa-check text-brandOrange mt-0.5"></i> Holistic child development</li>
                        <li class="flex gap-2"><i class="fa-solid fa-check text-brandOrange mt-0.5"></i> Inclusive & caring classrooms</li>
                        <li class="flex gap-2"><i class="fa-solid fa-check text-brandOrange mt-0.5"></i> Partnership with parents</li>
                    </ul>
                </div>
                <div class="bg-brandOrange/90 rounded-[40px] p-10 text-white">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center text-white text-3xl mb-6 shadow-lg">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 class="font-heading text-3xl font-bold mb-4">Our Vision</h3>
                    <p class="text-white/90 leading-relaxed">To be the most trusted and loved early childhood school in India, where every graduate leaves as a confident, curious, and compassionate young person ready to change the world.</p>
                    <ul class="mt-6 space-y-2 text-white/80 text-sm">
                        <li class="flex gap-2"><i class="fa-solid fa-check text-white mt-0.5"></i> Leading in early education innovation</li>
                        <li class="flex gap-2"><i class="fa-solid fa-check text-white mt-0.5"></i> Reaching every corner of India</li>
                        <li class="flex gap-2"><i class="fa-solid fa-check text-white mt-0.5"></i> Empowering the next generation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 6. WHY PARENTS CHOOSE US ===== -->
    <section class="py-14 bg-[#F2F8FB] relative">
        <div class="max-w-[1300px] mx-auto px-5">
            <div class="text-center mb-12">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Trust & Safety</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">Why Parents Choose Us</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $reasons = [
                    ['img'=>'assets/img/cctv_monitored.png',       'badge'=>'bg-brandOrange', 'icon'=>'fa-camera',       'title'=>'CCTV Monitored',           'desc'=>'Full campus 24/7 CCTV surveillance for complete peace of mind.'],
                    ['img'=>'assets/img/qualified_teachers.png',    'badge'=>'bg-brandBlue',   'icon'=>'fa-user-graduate', 'title'=>'Qualified Teachers',        'desc'=>'Certified in early childhood education with years of hands-on experience.'],
                    ['img'=>'assets/img/learning.jpg',              'badge'=>'bg-brandTeal',   'icon'=>'fa-soap',          'title'=>'Hygienic Environment',      'desc'=>'Daily sanitised classrooms, fresh meals, and strict hygiene protocols.'],
                    ['img'=>'assets/img/small_class_sizes.png',     'badge'=>'bg-brandRed',    'icon'=>'fa-people-group',  'title'=>'Small Class Sizes',         'desc'=>'Low student-to-teacher ratio for personalised attention every day.'],
                    ['img'=>'assets/img/activity_curriculum.png',   'badge'=>'bg-brandOrange', 'icon'=>'fa-book-open',     'title'=>'Activity-Based Curriculum', 'desc'=>'Learning through hands-on activities, projects, and play daily.'],
                    ['img'=>'assets/img/outdoor_play.png',          'badge'=>'bg-brandBlue',   'icon'=>'fa-tree',          'title'=>'Outdoor Play Area',         'desc'=>'Large, safe outdoor playground encouraging growth and exploration.'],
                ];
                foreach($reasons as $r): ?>
                <!-- Full-image card with visible title and hover description -->
                <div class="relative h-72 rounded-[30px] overflow-hidden shadow-md group cursor-pointer transition-all duration-300 hover:shadow-xl">
                    <!-- Background image -->
                    <img src="<?= $r['img'] ?>" alt="<?= $r['title'] ?>" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    
                    <!-- Content Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent flex flex-col justify-end p-6 z-20 group-hover:from-black/95 transition-all duration-500">
                        <div class="relative overflow-hidden">
                            <!-- Title: Always visible -->
                            <h4 class="font-heading font-bold text-xl text-white transition-all duration-500 transform group-hover:-translate-y-1">
                                <?= $r['title'] ?>
                            </h4>
                            
                            <!-- Description: Expands on hover -->
                            <div class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-500 ease-in-out">
                                <div class="overflow-hidden">
                                    <p class="text-white/85 text-sm leading-relaxed mt-2 opacity-0 group-hover:opacity-100 transition-all duration-500 delay-100">
                                        <?= $r['desc'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- ===== 7. LEARNING APPROACH ===== -->
    <section class="py-14 bg-white">
        <div class="max-w-[1300px] mx-auto px-5 flex flex-col lg:flex-row items-center gap-12">
            <div class="flex-1">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">How We Educate</span>
                <h2 class="text-4xl font-heading font-bold text-brandDarkBlue mb-6">Our Learning Approach</h2>
                <p class="text-textLight mb-8 leading-relaxed">We don't just teach — we spark a love for learning. Our approach blends structured activities with open exploration, giving children agency in their own education journey.</p>
                <div class="space-y-5">
                    <?php
                    $approaches = [
                        ['icon'=>'fa-hands', 'color'=>'text-brandOrange bg-orange-50', 'title'=>'Activity-Based Learning', 'desc'=>'Hands-on projects and real-world activities make concepts stick naturally.'],
                        ['icon'=>'fa-flask', 'color'=>'text-brandBlue bg-blue-50', 'title'=>'Hands-On Experiences', 'desc'=>'Science experiments, art, building — children learn by doing, not just listening.'],
                        ['icon'=>'fa-people-arrows', 'color'=>'text-brandTeal bg-teal-50', 'title'=>'Social Interaction', 'desc'=>'Group activities build teamwork, empathy and communication skills early.'],
                        ['icon'=>'fa-wand-sparkles', 'color'=>'text-brandRed bg-red-50', 'title'=>'Creative Learning', 'desc'=>'Music, movement, storytelling and art are woven through every school day.'],
                    ];
                    foreach($approaches as $a): ?>
                    <div class="flex gap-4 items-start p-4 rounded-2xl hover:bg-gray-50 transition">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl shrink-0 <?= $a['color'] ?>">
                            <i class="fa-solid <?= $a['icon'] ?>"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-brandDarkBlue mb-1"><?= $a['title'] ?></h4>
                            <p class="text-textLight text-sm"><?= $a['desc'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex-1 relative flex justify-center">
                <div class="w-[340px] h-[400px] bg-brandBlue/10 rounded-[60px] overflow-hidden shadow-xl">
                    <img src="assets/img/learning.jpg" alt="Learning approach" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-4 -right-4 bg-brandOrange text-white rounded-[30px] p-5 shadow-xl max-w-[180px]">
                    <div class="text-3xl font-heading font-bold">15+</div>
                    <div class="text-sm font-semibold opacity-90">Years of Joyful Learning</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 8. PROGRAMS WE OFFER ===== -->
    <section class="py-14 bg-brandBg">
        <div class="max-w-[1300px] mx-auto px-5">
            <div class="text-center mb-12">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Our Programs</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">Programs We Offer</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $programs = [
                    ['color'=>'bg-brandTeal','icon'=>'fa-baby','title'=>'Pre Nursery','age'=>'1.5 – 2.5 yrs','desc'=>'A gentle introduction to structured environment through sensory play, songs, and stories.','activities'=>['Sensory play','Music & rhymes','Storytelling'],'link'=>'pre-nursery.php'],
                    ['color'=>'bg-brandOrange','icon'=>'fa-child','title'=>'Nursery','age'=>'2.5 – 3.5 yrs','desc'=>'Building language, motor skills and social confidence in a warm classroom setting.','activities'=>['Language development','Fine motor skills','Social play'],'link'=>'nursery.php'],
                    ['color'=>'bg-blue-500','icon'=>'fa-pencil','title'=>'LKG','age'=>'3.5 – 4.5 yrs','desc'=>'Introduction to numbers, letters, and structured creative activities.','activities'=>['Pre-literacy','Pre-numeracy','Art & craft'],'link'=>'lkg.php'],
                    ['color'=>'bg-brandRed','icon'=>'fa-graduation-cap','title'=>'UKG','age'=>'4.5 – 6 yrs','desc'=>'School readiness program that prepares children academically, socially and emotionally.','activities'=>['Reading readiness','Team projects','Critical thinking'],'link'=>'ukg.php'],
                ];
                foreach($programs as $p): ?>
                <div class="bg-white rounded-[40px] overflow-hidden shadow-sm card-hover">
                    <div class="<?= $p['color'] ?> p-6 text-white">
                        <i class="fa-solid <?= $p['icon'] ?> text-4xl mb-3 block opacity-90"></i>
                        <h3 class="font-heading text-2xl font-bold"><?= $p['title'] ?></h3>
                        <span class="text-xs font-bold bg-white/20 px-3 py-1 rounded-full mt-2 inline-block"><?= $p['age'] ?></span>
                    </div>
                    <div class="p-6">
                        <p class="text-textLight text-sm mb-4"><?= $p['desc'] ?></p>
                        <ul class="space-y-1">
                            <?php foreach($p['activities'] as $act): ?>
                            <li class="text-sm text-brandDarkBlue flex gap-2 items-center"><i class="fa-solid fa-circle text-[6px] text-brandOrange"></i><?= $act ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?= $p['link'] ?>" class="mt-5 inline-block text-sm font-bold text-brandOrange hover:underline">Learn More <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>



    <!-- ===== 14. TESTIMONIALS ===== -->
    <section class="py-14 bg-white">
        <div class="max-w-[1100px] mx-auto px-5">
            <div class="text-center mb-12">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Parent Reviews</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">What Parents Say</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $testis = [
                    ['quote'=>'"My child absolutely loves going to school every morning. The teachers are warm, caring and creative. Our school has been the best decision for our family."','name'=>'Priya Sharma','role'=>'Mother of Ananya, 4 yrs','img'=>'assets/img/google-review-image.png'],
                    ['quote'=>'"The daily routine and play-based approach gave my shy son the confidence to make friends and express himself. We\'ve seen incredible growth in just 6 months."','name'=>'Rajesh Mehta','role'=>'Father of Arjun, 3 yrs','img'=>'assets/img/google-review-image.png'],
                    ['quote'=>'"As a parent, safety is my top priority. The CCTV, trained staff, and constant updates from teachers gave me complete peace of mind from day one."','name'=>'Sunita Patel','role'=>'Mother of Keya, 5 yrs','img'=>'assets/img/google-review-image.png'],
                    ['quote'=>'"The teachers truly know each child by name and personality. My daughter\'s language development has been remarkable. So grateful for The Foundation!"','name'=>'Amit Joshi','role'=>'Father of Riya, 4 yrs','img'=>'assets/img/google-review-image.png'],
                ];
                foreach($testis as $t): ?>
                <div class="bg-brandBg rounded-[30px] p-8 relative card-hover">
                    <i class="fa-solid fa-quote-left text-4xl text-brandOrange/20 absolute top-6 left-6"></i>
                    <p class="text-textMain/80 italic leading-relaxed mb-6 relative z-10 pt-4"><?= $t['quote'] ?></p>
                    <div class="flex items-center gap-4 border-t border-orange-100 pt-5">
                        <img src="<?= $t['img'] ?>" alt="<?= $t['name'] ?>" class="w-12 h-12 rounded-full object-cover border-2 border-brandOrange/30">
                        <div>
                            <strong class="block text-brandDarkBlue text-sm"><?= $t['name'] ?></strong>
                            <span class="text-xs text-textLight"><?= $t['role'] ?></span>
                        </div>
                        <div class="ml-auto flex gap-1">
                            <?php for($i=0;$i<5;$i++) echo '<i class="fa-solid fa-star text-brandOrange text-xs"></i>'; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== 15. PHOTO GALLERY ===== -->
    <section class="py-14 bg-brandBg relative z-10 overflow-hidden">
        <i class="fa-solid fa-camera absolute left-10 top-16 text-6xl text-brandBlue/5 -rotate-12"></i>
        <i class="fa-solid fa-image absolute right-10 bottom-24 text-6xl text-brandOrange/5 rotate-12"></i>

        <div class="max-w-[1300px] mx-auto px-5 text-center mb-12 relative z-20">
            <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Life at Our Foundation</span>
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">Photo Gallery</h2>
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

        <div class="w-full relative z-20">
            <div class="overflow-hidden w-full pb-8 pt-4">
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
                    for($i=0; $i<2; $i++) {
                        foreach($gallery_images as $index => $img) {
                    ?>
                    <div class="w-[280px] md:w-[350px] shrink-0 mr-6 rounded-[30px] overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition-all duration-300 group relative cursor-pointer">
                        <img src="assets/gallery/<?php echo $img; ?>" alt="Gallery Image" class="w-full h-56 md:h-72 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-brandDarkBlue/0 group-hover:bg-brandDarkBlue/20 transition duration-300 flex items-center justify-center">
                            <i class="fa-solid fa-camera text-white text-3xl opacity-0 group-hover:opacity-100 transition duration-300 transform scale-50 group-hover:scale-100"></i>
                        </div>
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

            <div class="text-center mt-8 mb-8">
                <a href="gallery.php" class="inline-flex items-center gap-2 font-bold text-brandDarkBlue hover:text-brandOrange transition relative group">
                    <span class="border-b-2 border-transparent group-hover:border-brandOrange pb-0.5 transition-colors">View Full Gallery</span>
                    <span class="w-8 h-8 rounded-full bg-brandOrange text-white flex items-center justify-center shadow-md group-hover:translate-x-1 transition-transform">
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Wave Divider: Gallery → Admission -->
    <div class="relative bg-brandBg -mt-1">
        <svg class="block w-full" viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C180,80 360,0 540,40 C720,80 900,0 1080,40 C1260,80 1380,20 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
        </svg>
    </div>

    <!-- ===== 17. ADMISSION PROCESS ===== -->
    <section class="py-14 bg-white">
        <div class="max-w-[900px] mx-auto px-5 text-center">
            <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Getting Started</span>
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue mb-4">Admission Process</h2>
            <p class="text-textLight mb-12 max-w-lg mx-auto">Joining The Foundation is simple and welcoming. Here's how to get your child started on an amazing journey.</p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative">
                <div class="hidden md:block absolute top-12 left-[12%] right-[12%] h-[3px] bg-gradient-to-r from-brandOrange via-brandBlue to-brandTeal rounded-full"></div>
                <?php
                $steps=[['fa-phone','bg-brandOrange','Inquiry','Call us or fill the online inquiry form. Our team will connect within 24 hours.'],['fa-school','bg-brandBlue','School Visit','Schedule a campus tour to see our facilities and meet our teachers.'],['fa-file-lines','bg-brandTeal','Registration','Submit the registration form with required documents.'],['fa-graduation-cap','bg-brandRed','Enrollment','Pay fees, receive welcome kit, and your child is officially enrolled!']];
                foreach($steps as $i=>$s): ?>
                <div class="relative">
                    <div class="<?= $s[1] ?> w-16 h-16 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg z-10 relative">
                        <i class="fa-solid <?= $s[0] ?>"></i>
                        <span class="absolute -top-1 -right-1 w-6 h-6 bg-white rounded-full text-xs font-bold flex items-center justify-center text-brandDarkBlue border border-gray-100"><?= $i+1 ?></span>
                    </div>
                    <h4 class="font-heading font-bold text-xl text-brandDarkBlue mb-2"><?= $s[2] ?></h4>
                    <p class="text-textLight text-sm"><?= $s[3] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="contact.php" class="mt-12 inline-block bg-brandOrange text-white px-10 py-4 rounded-full font-bold shadow-lg hover:-translate-y-1 transition text-sm">
                Start Admission <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Wave Divider: Admission → CTA -->
    <div class="relative bg-white -mt-1">
        <svg class="block w-full" viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,20 C240,80 480,0 720,40 C960,80 1200,0 1440,30 L1440,80 L0,80 Z" fill="#324E5B"/>
        </svg>
    </div>

    <!-- ===== 18. CALL TO ACTION ===== -->
    <section class="py-16 bg-brandDarkBlue relative overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image:url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'40\' height=\'40\'><circle cx=\'20\' cy=\'20\' r=\'2\' fill=\'white\'/></svg>');background-size:40px;"></div>
        <i class="fa-solid fa-star float-anim absolute left-10 top-10 text-6xl text-brandOrange/10"></i>
        <i class="fa-solid fa-heart float-anim-delay absolute right-16 bottom-10 text-5xl text-brandRed/10"></i>
        <div class="max-w-[800px] mx-auto px-5 text-center relative z-10">
            <h2 class="text-4xl md:text-6xl font-heading font-bold text-white mb-6 leading-tight">
                Give Your Child the <span class="text-brandOrange">Best Start</span> in Life
            </h2>
            <p class="text-white/70 text-lg mb-10 leading-relaxed">Join thousands of happy families who've trusted The Foundation with their child's most important years. We'd love to welcome your little one!</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="contact.php" class="bg-brandOrange text-white px-10 py-4 rounded-full font-bold shadow-xl shadow-brandOrange/30 hover:-translate-y-1 transition">
                    <i class="fa-solid fa-calendar-check mr-2"></i> Schedule a Visit
                </a>
                <a href="contact.php" class="bg-white text-brandDarkBlue px-10 py-4 rounded-full font-bold hover:-translate-y-1 transition shadow-xl">
                    <i class="fa-solid fa-file-lines text-brandOrange mr-2"></i> Enroll Now
                </a>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
