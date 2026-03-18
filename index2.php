<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="relative bg-brandBg pt-16 pb-20 overflow-hidden -mt-[88px]">
        <!-- Right side large semi wave -->
        <div class="absolute right-0 top-0 w-1/2 h-full bg-brandOrange/80 rounded-bl-[200px] z-0 opacity-90 hidden md:block"></div>
        
        <div class="max-w-[1300px] mx-auto px-5 mt-24 flex flex-col md:flex-row items-center relative z-10">
            <!-- Left Text -->
            <div class="flex-1 pr-10">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block"><i class="fa-solid fa-heart mr-2"></i>Preschool & Child Care</span>
                <h1 class="text-5xl md:text-7xl font-heading font-bold leading-[1.1] mb-6 text-brandDarkBlue">
                    We Prepare Your <br><span class="text-brandOrange">Child</span> For Life
                </h1>
                <p class="text-textLight mb-8 max-w-md text-lg leading-relaxed">
                    Supporting your child to explore, discover, making new friends and master basic skills in a safe environment.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <a href="about.php" class="bg-brandOrange text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-brandOrange/30 hover:-translate-y-1 transition text-sm">
                        Explore More <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                    <a href="#" class="flex items-center gap-3 font-bold text-textMain hover:text-brandOrange transition">
                        <span class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center bg-white shadow-sm">
                            <i class="fa-solid fa-play text-brandOrange ml-1"></i>
                        </span>
                        Watch Video
                    </a>
                </div>
            </div>
            <!-- Right Image Blob -->
            <div class="flex-1 relative mt-16 md:mt-0 flex justify-center pb-8">
                <div class="relative w-[300px] h-[300px] sm:w-[500px] sm:h-[500px]">
                    <div class="absolute inset-0 bg-yellow-400 rounded-full border-8 border-white shadow-xl overflow-hidden z-10 border-opacity-30">
                        <img src="assets/img/hero.jpg" alt="Hero Kids" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Doodles -->
                <i class="fa-solid fa-paper-plane absolute -left-10 top-20 text-3xl text-brandOrange/60 -rotate-12"></i>
                <i class="fa-solid fa-pencil absolute left-10 bottom-10 text-3xl text-gray-300"></i>
                <i class="fa-solid fa-car absolute right-0 bottom-0 text-3xl text-brandOrange"></i>
                <i class="fa-solid fa-question absolute right-10 top-0 text-3xl text-brandBlue"></i>
            </div>
        </div>
        
        <!-- Bottom Wave Divider for Hero -->
        <div class="absolute bottom-[-2px] left-0 w-full h-[80px] z-20 pointer-events-none" style="background-image: url('data:image/svg+xml;utf8,<svg viewBox=\'0 0 1200 120\' xmlns=\'http://www.w3.org/2000/svg\' preserveAspectRatio=\'none\'><path d=\'M0,60 C150,120 250,0 400,60 C550,120 650,0 800,60 C950,120 1050,0 1200,60 L1200,120 L0,120 Z\' fill=\'%23ffffff\'/></svg>'); background-size: cover; background-repeat: no-repeat;"></div>
    </section>

    <!-- Features -->
    <section class="pt-6 pb-14 bg-white relative z-10 mt-[-20px]">
        <div class="max-w-[1300px] mx-auto px-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center relative z-20">
            <div class="px-6 relative group">
                <div class="w-24 h-24 mx-auto mb-6 bg-orange-100 rounded-blob text-brandOrange flex items-center justify-center text-4xl group-hover:bg-brandOrange group-hover:text-white transition-all duration-300 group-hover:rotate-12">
                    <i class="fa-solid fa-medal"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-3">Choose a Service</h3>
                <p class="text-textLight text-sm">A brief sentence indicating the goal of this service.</p>
            </div>
            <div class="px-6 relative group">
                <div class="w-24 h-24 mx-auto mb-6 bg-blue-100 rounded-blob text-brandBlue flex items-center justify-center text-4xl group-hover:bg-brandBlue group-hover:text-white transition-all duration-300 group-hover:-rotate-12">
                    <i class="fa-solid fa-user-graduate"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-3">Expert Teachers</h3>
                <p class="text-textLight text-sm">A brief sentence indicating the goal of this service.</p>
            </div>
            <div class="px-6 relative group">
                <div class="w-24 h-24 mx-auto mb-6 bg-teal-100 rounded-blob text-brandTeal flex items-center justify-center text-4xl group-hover:bg-brandTeal group-hover:text-white transition-all duration-300 group-hover:rotate-12">
                    <i class="fa-solid fa-desktop"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-3">E-Learning Media</h3>
                <p class="text-textLight text-sm">A brief sentence indicating the goal of this service.</p>
            </div>
            <div class="px-6 relative group">
                <div class="w-24 h-24 mx-auto mb-6 bg-red-100 rounded-blob text-brandRed flex items-center justify-center text-4xl group-hover:bg-brandRed group-hover:text-white transition-all duration-300 group-hover:-rotate-12">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-3">Full Day Programs</h3>
                <p class="text-textLight text-sm">A brief sentence indicating the goal of this service.</p>
            </div>
        </div>
    </section>

    <!-- Learn & Play (About) -->
    <section class="py-14 bg-brandBg relative">
        <div class="max-w-[1300px] mx-auto px-5 flex flex-col md:flex-row items-center gap-10">
            <div class="flex-1 w-full mx-auto relative">
                <!-- Large blob bg -->
                <div class="w-[300px] h-[300px] md:w-[450px] md:h-[450px] bg-brandDarkBlue rounded-blob m-auto overflow-hidden shadow-2xl relative z-10">
                    <img src="assets/img/learning.jpg" alt="Child learning" class="w-full h-full object-cover">
                </div>
                <div class="absolute -z-0 bg-brandOrange w-48 h-48 rounded-full blur-3xl opacity-20 -left-10 bottom-0"></div>
                <div class="absolute -right-10 top-1/2 w-8 h-8 rounded-full border-4 border-brandOrange"></div>
            </div>
            <div class="flex-1">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block">About Us</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6 text-brandDarkBlue leading-tight max-w-md">Learn To Play, Converse With Confidence</h2>
                <p class="text-textLight mb-8 max-w-md">
                    Give a spark off back at the fire all of a sudden going got a big basic needs. Everything grounded around us out.
                </p>
                <div class="grid grid-cols-2 gap-6 mb-10 max-w-md">
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-brandOrange/10 text-brandOrange flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-volleyball"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1">Sport Program</h4>
                            <p class="text-xs text-textLight">Magnam velit soluta, velique provident.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-brandOrange/10 text-brandOrange flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1">Easy To Learn</h4>
                            <p class="text-xs text-textLight">Magnam velit soluta, velique provident.</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-6 border-t border-gray-200 pt-8 max-w-md relative">
                    <div class="flex items-center gap-4 bg-white p-3 pr-8 rounded-full shadow-md">
                        <img src="assets/img/founder.jpg" alt="Hannah McDonald" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <strong class="block text-sm">Hannah McDonald</strong>
                            <span class="text-xs text-textLight">Founder</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 rounded-full bg-brandOrange text-white flex items-center justify-center">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <span class="text-xs text-textLight block">Call Us Now</span>
                            <strong class="text-sm">+1 250 500 8192</strong>
                        </div>
                    </div>
                    <!-- Cute giraffe illustration would naturally be absolutely positioned here -->
                    <img src="https://api.dicebear.com/7.x/bottts/svg?seed=giraffe&backgroundColor=transparent" alt="Giraffe" class="absolute -right-20 -top-20 w-32 h-32 opacity-80 mix-blend-multiply hidden lg:block">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / Policies -->
    <section class="py-14 bg-[#F2F8FB] relative">
        <!-- Cloud Divider Top -->
        <div class="absolute -top-[50px] left-0 w-full h-[80px] w-full" style="background-image: url('data:image/svg+xml;utf8,<svg viewBox=\'0 0 1200 120\' xmlns=\'http://www.w3.org/2000/svg\' preserveAspectRatio=\'none\'><path d=\'M0,60 C100,-20 200,80 300,30 C400,-20 500,80 600,0 C700,80 800,-20 900,40 C1000,-10 1100,70 1200,0 L1200,120 L0,120 Z\' fill=\'%23F2F8FB\'/></svg>'); background-size: cover; background-repeat: no-repeat;"></div>

        <div class="max-w-[1300px] mx-auto px-5 text-center mb-8 relative z-10">
            <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block">Our Policies</span>
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">The Best Playschool<br>For Your Kid</h2>
            
            <i class="fa-solid fa-rainbow absolute left-10 top-0 text-7xl text-gray-200/50 -z-10 -rotate-12"></i>
            <i class="fa-solid fa-planet-ringed absolute right-10 top-0 text-7xl text-gray-200/50 -z-10 rotate-12"></i>
        </div>

        <div class="max-w-[1100px] mx-auto px-5 flex flex-col lg:flex-row items-center justify-between gap-10 mt-6">
            <!-- Left Policies -->
            <div class="flex-1 space-y-12 w-full">
                <div class="flex gap-5 text-left items-start group">
                    <div class="w-16 h-16 bg-orange-100 text-brandOrange rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-brandOrange group-hover:text-white transition-colors shadow-sm">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-xl mb-2">Teacher Training And Progress</h4>
                        <p class="text-sm text-textLight">Advancing skill levels to open learners back to real life, natural logic rules as outlines.</p>
                    </div>
                </div>
                <div class="flex gap-5 text-left items-start group">
                    <div class="w-16 h-16 bg-blue-100 text-brandBlue rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-brandBlue group-hover:text-white transition-colors shadow-sm">
                        <i class="fa-solid fa-stethoscope"></i>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-xl mb-2">Nursing Detective 24/7</h4>
                        <p class="text-sm text-textLight">Advancing skill levels to open learners back to real life, natural logic rules as outlines.</p>
                    </div>
                </div>
            </div>
            
            <!-- Center Image -->
            <div class="w-full max-w-[300px] mx-auto relative hidden lg:block">
                <div class="absolute inset-0 bg-white rounded-t-full shadow-xl mt-16 scale-[1.15] -z-10"></div>
                <img src="assets/img/graduation.jpg" alt="Graduate" class="w-[280px] h-[350px] object-cover rounded-full mx-auto shadow-md border-8 border-white border-b-0 rounded-b-none">
            </div>
            
            <!-- Right Policies -->
            <div class="flex-1 space-y-12 w-full">
                <div class="flex gap-5 text-left items-start group">
                    <div class="w-16 h-16 bg-teal-100 text-brandTeal rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-brandTeal group-hover:text-white transition-colors shadow-sm">
                        <i class="fa-solid fa-gamepad"></i>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-xl mb-2">Advanced Playtime In Courses</h4>
                        <p class="text-sm text-textLight">Advancing skill levels to open learners back to real life, natural logic rules as outlines.</p>
                    </div>
                </div>
                <div class="flex gap-5 text-left items-start group">
                    <div class="w-16 h-16 bg-red-100 text-brandRed rounded-2xl flex items-center justify-center text-2xl shrink-0 group-hover:bg-brandRed group-hover:text-white transition-colors shadow-sm">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-xl mb-2">Self-Confidence Gifted Programs</h4>
                        <p class="text-sm text-textLight">Advancing skill levels to open learners back to real life, natural logic rules as outlines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Programs -->
    <section class="py-14 bg-white relative">
        <div class="max-w-[1300px] mx-auto px-5 text-center mb-8">
            <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block">Our Programs</span>
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue mb-8">We Meet Kids At Their Level<br>Regardless Of Their Age</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
                <!-- Program 1 Teal -->
                <div class="bg-brandTeal rounded-[40px] p-8 pb-12 text-center text-white relative shadow-xl transform transition hover:-translate-y-2">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm shadow-inner rotate-3">
                        <i class="fa-solid fa-baby"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">Pre Nursery</h3>
                    <p class="inline-block px-3 py-1 rounded-full text-xs font-semibold mb-4 bg-white/20">1.5 - 2.5 years</p>
                    <p class="text-sm opacity-90 mb-10 leading-relaxed max-w-[200px] mx-auto">Gentle introduction to structure</p>
                    <a href="pre-nursery.php" class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 bg-white text-brandTeal rounded-full flex items-center justify-center shadow-md font-bold hover:bg-brandDarkBlue hover:text-white transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Program 2 Orange -->
                <div class="bg-brandOrange rounded-[40px] p-8 pb-12 text-center text-white relative shadow-xl transform transition hover:-translate-y-2 lg:mt-6">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm shadow-inner -rotate-3">
                        <i class="fa-solid fa-child"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">Nursery</h3>
                    <p class="inline-block px-3 py-1 rounded-full text-xs font-semibold mb-4 bg-white/20">2.5 - 3.5 years</p>
                    <p class="text-sm opacity-90 mb-10 leading-relaxed max-w-[200px] mx-auto">Building language & motor skills</p>
                    <a href="nursery.php" class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 bg-white text-brandOrange rounded-full flex items-center justify-center shadow-md font-bold hover:bg-brandDarkBlue hover:text-white transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Program 3 Blue -->
                <div class="bg-blue-600 rounded-[40px] p-8 pb-12 text-center text-white relative shadow-xl transform transition hover:-translate-y-2">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm shadow-inner rotate-3">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">LKG</h3>
                    <p class="inline-block px-3 py-1 rounded-full text-xs font-semibold mb-4 bg-white/20">3.5 - 4.5 years</p>
                    <p class="text-sm opacity-90 mb-10 leading-relaxed max-w-[200px] mx-auto">Letters, numbers & creativity</p>
                    <a href="lkg.php" class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 bg-white text-blue-600 rounded-full flex items-center justify-center shadow-md font-bold hover:bg-brandDarkBlue hover:text-white transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Program 4 Red -->
                <div class="bg-brandRed rounded-[40px] p-8 pb-12 text-center text-white relative shadow-xl transform transition hover:-translate-y-2 lg:mt-6">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto flex items-center justify-center text-3xl mb-6 backdrop-blur-sm shadow-inner -rotate-3">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold mb-2">UKG</h3>
                    <p class="inline-block px-3 py-1 rounded-full text-xs font-semibold mb-4 bg-white/20">4.5 - 6 years</p>
                    <p class="text-sm opacity-90 mb-10 leading-relaxed max-w-[200px] mx-auto">School readiness & preparation</p>
                    <a href="ukg.php" class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 bg-white text-brandRed rounded-full flex items-center justify-center shadow-md font-bold hover:bg-brandDarkBlue hover:text-white transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Help Form (Dark block) -->
    <section class="py-10 bg-white">
        <div class="max-w-[1300px] mx-auto px-5">
            <div class="bg-brandTeal rounded-[40px] flex flex-col md:flex-row overflow-hidden shadow-2xl relative">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGNpcmNsZSBjeD0iMTAiIGN5PSIxMCIgcj0iMSIgZmlsbD0id2hpdGUiIG9wYWNpdHk9IjAuMSIvPjwvc3ZnPg==')] opacity-50 z-0"></div>
                <div class="flex-1 p-12 lg:p-16 relative z-10 text-white">
                    <h2 class="font-heading text-4xl mb-8">How May We Help<br>You?</h2>
                    <form class="space-y-4 max-w-md">
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" placeholder="Your Name" class="w-full bg-teal-700/50 border border-teal-500/50 rounded-xl px-5 py-3 text-white placeholder-white/70 focus:outline-none focus:border-white transition text-sm">
                            <input type="email" placeholder="Your Email" class="w-full bg-teal-700/50 border border-teal-500/50 rounded-xl px-5 py-3 text-white placeholder-white/70 focus:outline-none focus:border-white transition text-sm">
                        </div>
                        <input type="text" placeholder="Subject" class="w-full bg-teal-700/50 border border-teal-500/50 rounded-xl px-5 py-3 text-white placeholder-white/70 focus:outline-none focus:border-white transition text-sm">
                        <textarea placeholder="Your Message" rows="3" class="w-full bg-teal-700/50 border border-teal-500/50 rounded-xl px-5 py-3 text-white placeholder-white/70 focus:outline-none focus:border-white transition text-sm resize-none"></textarea>
                        <button type="submit" class="bg-white text-brandTeal font-bold px-8 py-3 rounded-full hover:bg-brandOrange hover:text-white transition shadow-md shadow-brandTeal/50 text-sm">
                            Send It <i class="fa-solid fa-arrow-right ml-1"></i>
                        </button>
                    </form>
                </div>
                <div class="hidden md:flex w-[500px] bg-teal-800/30 items-end justify-center relative z-10 pt-6 px-4">
                    <!-- Graduation boy inside blue block -->
                    <img src="assets/img/graduation.jpg" alt="Student pointing" class="w-[420px] h-[460px] object-cover rounded-t-full border-8 border-white border-b-0 shadow-lg translate-y-2">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-10 bg-white">
        <div class="max-w-[1000px] mx-auto px-5 text-center">
            <h2 class="text-3xl font-heading font-bold text-brandDarkBlue mb-12">What Clients Say</h2>

            <?php
            $testimonials = [
                ['quote' => 'Awesome preschool with lovely teachers who genuinely care about the kids. My child looks forward to going to school every single day. Safe and nurturing environment!', 'name' => 'Priya Sharma', 'role' => 'Mother of Ananya, 4 yrs'],
                ['quote' => 'The play-based approach gave my shy son the confidence to make friends and express himself. We\'ve seen incredible growth in just 6 months. Highly recommended!', 'name' => 'Rajesh Mehta', 'role' => 'Father of Arjun, 3 yrs'],
                ['quote' => 'As a parent, safety is my top priority. The CCTV, trained staff, and constant updates from teachers gave me complete peace of mind from day one.', 'name' => 'Sunita Patel', 'role' => 'Mother of Keya, 5 yrs'],
                ['quote' => 'The teachers truly know each child by name and personality. My daughter\'s language development has been remarkable. So grateful for The Foundation!', 'name' => 'Amit Joshi', 'role' => 'Father of Riya, 4 yrs'],
                ['quote' => 'Best decision we made for our child\'s early education. The curriculum is well-structured yet fun. The staff is always welcoming and professional.', 'name' => 'Neha Gupta', 'role' => 'Mother of Rohan, 3 yrs'],
            ];
            ?>

            <div class="relative">
                <!-- Prev Button -->
                <button id="testi-prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-8 z-10 w-11 h-11 rounded-full bg-white shadow-md border border-gray-100 flex items-center justify-center text-brandDarkBlue hover:bg-brandOrange hover:text-white hover:border-brandOrange transition-all duration-300">
                    <i class="fa-solid fa-chevron-left text-sm"></i>
                </button>
                <!-- Next Button -->
                <button id="testi-next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-8 z-10 w-11 h-11 rounded-full bg-white shadow-md border border-gray-100 flex items-center justify-center text-brandDarkBlue hover:bg-brandOrange hover:text-white hover:border-brandOrange transition-all duration-300">
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                </button>

                <?php foreach($testimonials as $i => $t): ?>
                <div class="testi-slide <?= $i === 0 ? '' : 'hidden' ?> bg-[#F2F8FB] rounded-[40px] p-10 md:p-16 relative shadow-sm border border-blue-50 transition-all duration-500">
                    <i class="fa-solid fa-quote-left text-5xl text-brandBlue/20 absolute top-8 left-10"></i>
                    <i class="fa-solid fa-quote-right text-5xl text-brandBlue/20 absolute bottom-12 right-10"></i>
                    <p class="text-lg md:text-xl font-medium text-textMain/80 mb-8 max-w-2xl mx-auto leading-relaxed relative z-10 italic">
                        "<?= htmlspecialchars($t['quote']) ?>"
                    </p>
                    <div class="flex flex-col items-center">
                        <img src="assets/img/google-review-image.png" alt="<?= htmlspecialchars($t['name']) ?>" class="w-16 h-16 rounded-full object-cover mb-3 shadow-md border-2 border-white">
                        <h5 class="font-heading font-bold text-brandDarkBlue"><?= htmlspecialchars($t['name']) ?></h5>
                        <p class="text-sm text-textLight"><?= htmlspecialchars($t['role']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="flex justify-center gap-2 mt-6" id="testi-dots">
                <?php foreach($testimonials as $i => $_): ?>
                <button class="testi-dot w-2.5 h-2.5 rounded-full transition-all duration-300 <?= $i === 0 ? 'bg-brandOrange scale-125' : 'bg-gray-200' ?>" data-index="<?= $i ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
    (function() {
        var slides = document.querySelectorAll('.testi-slide');
        var dots = document.querySelectorAll('.testi-dot');
        var current = 0;
        var timer;

        function goTo(index) {
            slides[current].classList.add('hidden');
            dots[current].classList.remove('bg-brandOrange', 'scale-125');
            dots[current].classList.add('bg-gray-200');
            current = index;
            slides[current].classList.remove('hidden');
            dots[current].classList.add('bg-brandOrange', 'scale-125');
            dots[current].classList.remove('bg-gray-200');
        }

        function next() { goTo((current + 1) % slides.length); }
        function prev() { goTo((current - 1 + slides.length) % slides.length); }

        function resetTimer() { clearInterval(timer); timer = setInterval(next, 4000); }

        dots.forEach(function(dot) {
            dot.addEventListener('click', function() {
                goTo(parseInt(this.getAttribute('data-index')));
                resetTimer();
            });
        });

        document.getElementById('testi-prev').addEventListener('click', function() { prev(); resetTimer(); });
        document.getElementById('testi-next').addEventListener('click', function() { next(); resetTimer(); });

        timer = setInterval(next, 4000);
    })();
    </script>

    <!-- ===== GALLERY SECTION ===== -->
    <section class="py-16 bg-brandBg relative z-10 overflow-hidden">
        <!-- Optional top decor if needed -->
        <i class="fa-solid fa-camera absolute left-10 top-16 text-6xl text-brandBlue/5 -rotate-12"></i>
        <i class="fa-solid fa-image absolute right-10 bottom-24 text-6xl text-brandOrange/5 rotate-12"></i>

        <div class="max-w-[1300px] mx-auto px-5 text-center mb-12 relative z-20">
            <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block">Gallery</span>
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">Captured Moments</h2>
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
                    // Print them twice for the seamless loop
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

<?php include 'footer.php'; ?>
