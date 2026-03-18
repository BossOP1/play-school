<?php 
$pageTitle = "Nursery Program - The Foundation Play School";
include 'header.php'; 
?>

<meta name="description" content="Our Nursery program provides an engaging and playful learning environment for children aged 2.5 to 3.5 years, fostering growth, curiosity, and early academic readiness.">

    <!-- ===== HERO SECTION ===== -->
    <section class="relative pt-32 pb-20 overflow-hidden -mt-[72px] bg-brandOrange/10">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full opacity-50 pointer-events-none">
            <i class="fa-solid fa-cloud absolute top-20 left-[10%] text-white text-7xl float-anim drop-shadow-sm"></i>
            <i class="fa-solid fa-star absolute top-40 right-[15%] text-brandOrange/40 text-5xl float-anim-delay"></i>
            <i class="fa-solid fa-baby absolute bottom-40 left-[15%] text-brandTeal/20 text-4xl float-anim-delay2"></i>
            <i class="fa-solid fa-puzzle-piece absolute bottom-20 right-[10%] text-brandOrange/30 text-3xl float-anim"></i>
            <i class="fa-solid fa-shapes absolute top-32 right-[30%] text-brandBlue/20 text-4xl float-anim-delay -rotate-12"></i>
        </div>

        <div class="max-w-[1300px] mx-auto px-5 relative z-10 flex flex-col md:flex-row items-center gap-12 mt-8">
            <!-- Left Text Content -->
            <div class="flex-1 text-center md:text-left">
                <span class="inline-flex items-center gap-2 bg-white text-brandOrange font-bold text-sm tracking-widest uppercase mb-6 px-4 py-2 rounded-full shadow-sm">
                    <i class="fa-solid fa-shapes"></i> Ages 2.5 - 3.5 Years
                </span>
                <h1 class="text-5xl md:text-7xl font-heading font-bold leading-tight mb-6 text-brandDarkBlue">
                    Nursery <br>
                    <span class="text-brandOrange relative">
                        Program
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-brandOrange/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0 5 Q 25 0, 50 5 T 100 5" stroke="currentColor" stroke-width="4" fill="transparent"/>
                        </svg>
                    </span>
                </h1>
                <p class="text-textLight mb-8 text-lg md:text-xl leading-relaxed max-w-lg mx-auto md:mx-0">
                    A joyful and vibrant learning environment focused on developing curiosity, creativity, and foundational social skills for your fast-growing toddler.
                </p>
                <div class="flex flex-wrap justify-center md:justify-start gap-4">
                    <a href="contact.php" class="bg-brandOrange text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-brandOrange/30 hover:-translate-y-1 transition duration-300">
                        Enroll Now <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Right Image Content -->
            <div class="flex-1 relative flex justify-center w-full max-w-lg mx-auto">
                <div class="relative w-72 h-72 sm:w-[400px] sm:h-[400px] bg-white p-3 rounded-blob shadow-2xl z-20 hover:scale-[1.02] transition duration-500 overflow-hidden border-brandOrange/20 border-4">
                    <img src="assets/img/nursery_hero.png" alt="Nursery Children" class="w-full h-full object-cover rounded-blob">
                </div>
                
                <!-- Floating decorations -->
                <div class="absolute -left-6 top-10 w-20 h-20 bg-brandOrange/20 rounded-full border-4 border-white shadow-sm z-30 float-anim flex items-center justify-center text-brandOrange text-3xl">
                    <i class="fa-solid fa-music"></i>
                </div>
                <div class="absolute -right-6 bottom-20 w-16 h-16 bg-brandBlue/20 rounded-blob shadow-sm z-30 float-anim-delay flex items-center justify-center text-brandBlue text-2xl">
                    <i class="fa-solid fa-palette"></i>
                </div>
            </div>
        </div>

        <!-- Wave bottom transition -->
        <div class="absolute bottom-0 left-0 w-full h-[80px] z-50 overflow-hidden leading-[0]">
            <svg class="relative block w-[200%] h-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 400,0 600,60 C800,120 1050,30 1200,90 L1200,120 L0,120 Z" fill="#ffffff" class="transition-all duration-300"></path>
            </svg>
        </div>
    </section>

    <!-- ===== OVERVIEW & FOCUS AREAS ===== -->
    <section class="pt-10 pb-16 bg-white relative">
        <div class="max-w-[1300px] mx-auto px-5">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Program Overview</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue mb-6">Fostering Joyful Discovery</h2>
                <p class="text-textLight text-lg leading-relaxed">
                    Our Nursery curriculum bridges the gap between toddlerhood and structured learning. We introduce more engaging academic concepts naturally through play, storytelling, and collaborative activities, helping children build lasting confidence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Focus 1 -->
                <div class="bg-teal-50 rounded-[30px] p-8 text-center card-hover border border-teal-100">
                    <div class="w-20 h-20 bg-white rounded-blob mx-auto flex items-center justify-center text-brandTeal text-4xl mb-6 shadow-sm">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-brandDarkBlue mb-4">Sensory Play</h3>
                    <p class="text-textLight leading-relaxed select-none">
                        Engaging all five senses through tactile materials, water play, and safe art supplies to support cognitive growth and fine motor skills.
                    </p>
                </div>
                
                <!-- Focus 2 -->
                <div class="bg-orange-50 rounded-[30px] p-8 text-center card-hover border border-orange-100">
                    <div class="w-20 h-20 bg-white rounded-blob mx-auto flex items-center justify-center text-brandOrange text-4xl mb-6 shadow-sm">
                        <i class="fa-solid fa-music"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-brandDarkBlue mb-4">Music & Movement</h3>
                    <p class="text-textLight leading-relaxed select-none">
                        Daily nursery rhymes, singing, and dancing routines that help toddlers develop rhythm, coordination, and early language skills.
                    </p>
                </div>
                
                <!-- Focus 3 -->
                <div class="bg-blue-50 rounded-[30px] p-8 text-center card-hover border border-blue-100">
                    <div class="w-20 h-20 bg-white rounded-blob mx-auto flex items-center justify-center text-brandBlue text-4xl mb-6 shadow-sm">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-brandDarkBlue mb-4">Interactive Storytelling</h3>
                    <p class="text-textLight leading-relaxed select-none">
                        Building a foundation for literacy and imagination with visual stories, puppetry, and engaging picture books tailored for short attention spans.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Wave bottom transition to brandBg -->
        <div class="absolute bottom-0 left-0 w-full h-[60px] z-20 overflow-hidden leading-[0]">
            <svg class="relative block w-[200%] h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,60 C150,0 350,120 600,60 C850,0 1050,120 1200,60 L1200,120 L0,120 Z" fill="#FFF7ED"></path>
            </svg>
        </div>
    </section>

    <!-- ===== TYPICAL DAY SCHEDULE ===== -->
    <section class="pt-12 pb-20 bg-brandBg relative overflow-hidden">
        <!-- Abstract wave background -->
        <i class="fa-solid fa-sun absolute -right-10 top-10 text-9xl text-brandOrange/5 rotate-45 pointer-events-none"></i>
        <i class="fa-solid fa-rainbow absolute -left-10 bottom-10 text-9xl text-brandBlue/5 -rotate-12 pointer-events-none"></i>

        <div class="max-w-[1100px] mx-auto px-5 relative z-10">
            <div class="text-center mb-16">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Daily Routine</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-brandDarkBlue">A Day in Nursery</h2>
            </div>
            
            <div class="space-y-6 max-w-3xl mx-auto">
                <!-- Schedule Item -->
                <div class="flex flex-col sm:flex-row gap-6 items-center bg-white p-6 rounded-[30px] shadow-sm hover:shadow-md transition">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-2xl overflow-hidden shrink-0">
                        <img src="assets/img/gallery1.jpg" alt="Morning Greeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <div class="text-brandTeal font-bold mb-1"><i class="fa-regular fa-clock mr-1"></i> 09:00 AM - 09:30 AM</div>
                        <h4 class="font-heading text-xl font-bold text-brandDarkBlue mb-2">Welcome & Free Play</h4>
                        <p class="text-textLight text-sm m-0">A warm greeting followed by unstructured play to help children settle in comfortably and interact with peers.</p>
                    </div>
                </div>
                
                <!-- Schedule Item -->
                <div class="flex flex-col sm:flex-row gap-6 items-center bg-white p-6 rounded-[30px] shadow-sm hover:shadow-md transition">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-2xl overflow-hidden shrink-0">
                        <img src="assets/img/gallery2.jpg" alt="Circle Time" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <div class="text-brandOrange font-bold mb-1"><i class="fa-regular fa-clock mr-1"></i> 09:30 AM - 10:00 AM</div>
                        <h4 class="font-heading text-xl font-bold text-brandDarkBlue mb-2">Circle Time & Music</h4>
                        <p class="text-textLight text-sm m-0">Group seating for morning songs, rhymes, and a brief interactive story to build attention span and vocabulary.</p>
                    </div>
                </div>
                
                <!-- Schedule Item -->
                <div class="flex flex-col sm:flex-row gap-6 items-center bg-white p-6 rounded-[30px] shadow-sm hover:shadow-md transition">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-2xl overflow-hidden shrink-0">
                        <img src="assets/img/gallery3.jpg" alt="Snack Time" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <div class="text-brandBlue font-bold mb-1"><i class="fa-regular fa-clock mr-1"></i> 10:00 AM - 10:30 AM</div>
                        <h4 class="font-heading text-xl font-bold text-brandDarkBlue mb-2">Healthy Snack & Potty Break</h4>
                        <p class="text-textLight text-sm m-0">Encouraging self-feeding, hand washing routines, and basic hygiene practices in a supportive setting.</p>
                    </div>
                </div>

                <!-- Schedule Item -->
                <div class="flex flex-col sm:flex-row gap-6 items-center bg-white p-6 rounded-[30px] shadow-sm hover:shadow-md transition">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-2xl overflow-hidden shrink-0">
                        <img src="assets/img/learning.jpg" alt="Sensory Activities" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <div class="text-brandTeal font-bold mb-1"><i class="fa-regular fa-clock mr-1"></i> 10:30 AM - 11:30 AM</div>
                        <h4 class="font-heading text-xl font-bold text-brandDarkBlue mb-2">Guided Sensory Activities</h4>
                        <p class="text-textLight text-sm m-0">Hands-on activities such as finger painting, playing with dough, or outdoor exploration to develop motor skills.</p>
                    </div>
                </div>

                <!-- Schedule Item -->
                <div class="flex flex-col sm:flex-row gap-6 items-center bg-white p-6 rounded-[30px] shadow-sm hover:shadow-md transition">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-2xl overflow-hidden shrink-0">
                        <img src="assets/img/graduation.jpg" alt="Departure" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <div class="text-brandRed font-bold mb-1"><i class="fa-regular fa-clock mr-1"></i> 11:30 AM - 12:00 PM</div>
                        <h4 class="font-heading text-xl font-bold text-brandDarkBlue mb-2">Goodbye Circle & Pick-up</h4>
                        <p class="text-textLight text-sm m-0">A calm down period with a goodbye song, packing up belongings, and transitioning back to parents.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wave bottom transition to FAQ bg -->
        <div class="absolute bottom-0 left-0 w-full h-[60px] z-20 overflow-hidden leading-[0]">
            <svg class="relative block w-[200%] h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,90 C300,0 600,120 900,30 C1050,-15 1150,40 1200,60 L1200,120 L0,120 Z" fill="#F2F8FB"></path>
            </svg>
        </div>
    </section>

    <!-- ===== FAQ / CURRICULUM DETAILS ===== -->
    <section class="pt-12 pb-20 bg-[#F2F8FB] relative p-1">
        <div class="max-w-[900px] mx-auto px-5">
            <div class="text-center mb-12">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Curriculum Details</span>
                <h2 class="text-4xl font-heading font-bold text-brandDarkBlue">Frequently Asked Questions</h2>
            </div>
            
            <div class="space-y-4">
                <!-- FAQ 1 -->
                <details class="group bg-white rounded-[20px] shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold font-heading text-xl cursor-pointer list-none p-6 text-brandDarkBlue hover:text-brandOrange transition">
                        <span>What are the key focus areas in the Nursery curriculum?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down text-brandBlue"></i>
                        </span>
                    </summary>
                    <div class="p-6 pt-0 text-textLight leading-relaxed">
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brandOrange text-sm"></i> Advanced social skills and collaborative play</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brandOrange text-sm"></i> Fine and gross motor skill enhancement</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brandOrange text-sm"></i> Math Readiness (Counting, sorting, sizes)</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brandOrange text-sm"></i> Language Readiness (Phonics, vocabulary expansion)</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brandOrange text-sm"></i> Environmental awareness and exploration</li>
                        </ul>
                    </div>
                </details>

                <!-- FAQ 2 -->
                <details class="group bg-white rounded-[20px] shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold font-heading text-xl cursor-pointer list-none p-6 text-brandDarkBlue hover:text-brandOrange transition">
                        <span>What special activities are included?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down text-brandBlue"></i>
                        </span>
                    </summary>
                    <div class="p-6 pt-0 text-textLight leading-relaxed">
                        <p class="mb-4">We offer a variety of special engaging activities designed to nurture diverse talents:</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Creative Arts</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Personality Development</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Showstopper</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Mental Might</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Augmented Reality - Fantasy Box</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Eco-conscious</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Tell-a-Tale (Storytelling)</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Library Time</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Sciencify (Early Science)</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Whirl & Twirl</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Sensorium</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Critical Thinking</span>
                            <span class="bg-white border border-gray-200 px-4 py-1.5 rounded-full text-sm text-brandDarkBlue shadow-sm">Integrated Sanskar</span>
                        </div>
                    </div>
                </details>

                <!-- FAQ 3 -->
                <details class="group bg-white rounded-[20px] shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold font-heading text-xl cursor-pointer list-none p-6 text-brandDarkBlue hover:text-brandOrange transition">
                        <span>What does a typical session consist of?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down text-brandBlue"></i>
                        </span>
                    </summary>
                    <div class="p-6 pt-0 text-textLight leading-relaxed">
                        <p class="mb-4">Our daily sessions balance academic foundations with joyful play:</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Circle Time</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Structured Play</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Knowledge Time</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Language Arts</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Numeracy Focus</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Show & Tell</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Outdoor Exploration</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Indoor Crafts</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Festivals & Celebrations</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Field Visits</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Roleplay & Skits</span>
                            <span class="bg-white border border-brandOrange/20 text-brandOrange px-4 py-1.5 rounded-full text-sm font-bold shadow-sm">Healthy Snack</span>
                        </div>
                    </div>
                </details>
            </div>
        </div>
        
        <!-- Wave bottom transition to Blog bg -->
        <div class="absolute bottom-0 left-0 w-full h-[60px] z-20 overflow-hidden leading-[0]">
            <svg class="relative block w-[200%] h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,40 C100,100 250,10 400,60 C550,110 700,20 850,70 C1000,120 1100,30 1200,60 L1200,120 L0,120 Z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>


    <!-- ===== GALLERY SECTION ===== -->
    <section class="py-16 bg-brandBg relative z-10 overflow-hidden">
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

    <!-- ===== CALL TO ACTION ===== -->
    <section class="pt-10 pb-20 bg-brandDarkBlue relative overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image:url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'40\' height=\'40\'><circle cx=\'20\' cy=\'20\' r=\'2\' fill=\'white\'/></svg>');background-size:40px;"></div>
        <i class="fa-solid fa-shapes float-anim absolute left-10 top-10 text-6xl text-brandTeal/20"></i>
        <i class="fa-solid fa-heart float-anim-delay absolute right-16 bottom-10 text-5xl text-brandOrange/20"></i>
        
        <div class="max-w-[800px] mx-auto px-5 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6 leading-tight">
                Ready to take the <span class="text-brandOrange">next step?</span>
            </h2>
            <p class="text-white/70 text-lg mb-10 leading-relaxed">
                Give your child the perfect engaging start to their academic journey. Contact us to schedule a tour of our Nursery classrooms.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="contact.php" class="bg-brandOrange text-white px-10 py-4 rounded-full font-bold shadow-xl shadow-brandOrange/30 hover:-translate-y-1 transition">
                    <i class="fa-solid fa-calendar-check mr-2"></i> Schedule a Tour
                </a>
            </div>
        </div>
        
        <!-- Wave bottom transition to Footer bg -->
        <div class="absolute bottom-0 left-0 w-full h-[60px] z-20 overflow-hidden leading-[0]">
            <svg class="relative block w-[200%] h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,90 C300,0 600,120 900,30 C1050,-15 1150,40 1200,60 L1200,120 L0,120 Z" fill="#FFF7ED"></path>
            </svg>
        </div>
    </section>

<?php include 'footer.php'; ?>
