<?php 
$pageTitle = "Contact Us - The Foundation Play School";
include 'header.php'; 
?>

<!-- ===== 1. PAGE HERO ===== -->
<section class="relative pt-20 pb-28 bg-gradient-to-br from-[#E6F3FA] via-[#FFF7ED] to-[#FFF9F5] overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-24 h-24 bg-brandOrange/20 rounded-blob animate-blob border border-white/50 blur-[2px]"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-brandBlue/20 rounded-blob2 animate-blob border border-white/50 blur-[2px]"></div>
    <i class="fa-solid fa-paper-plane float-anim absolute top-32 right-[20%] text-4xl text-brandBlue/20"></i>
    <i class="fa-solid fa-envelope-open-text float-anim-delay absolute bottom-20 left-[15%] text-5xl text-brandOrange/20"></i>

    <!-- SVG Wave Bottom -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
        <svg class="relative block w-[calc(140%+1.3px)] h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white"></path>
        </svg>
    </div>

    <div class="container mx-auto px-5 max-w-4xl text-center relative z-20">
        <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block inline-flex items-center gap-2 bg-white/60 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm">
            <i class="fa-solid fa-headset"></i> We're Here to Help
        </span>
        <h1 class="text-5xl md:text-7xl font-heading font-bold leading-tight mb-8 text-brandDarkBlue">
            Let's Get In <span class="text-brandOrange relative inline-block">
                Touch
                <svg class="absolute w-full h-3 -bottom-1 left-0 text-brandOrange/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                    <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round"/>
                </svg>
            </span>
        </h1>
        <p class="text-xl text-textLight leading-relaxed max-w-2xl mx-auto">
            Have questions about admissions, our curriculum, or want to schedule a campus tour? Our team is always happy to hear from you.
        </p>
    </div>
</section>

<!-- ===== 2. CONTACT INFO CARDS ===== -->
<section class="py-16 bg-white relative z-20 -mt-10">
    <div class="container mx-auto px-5 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Address Card -->
            <div class="bg-white rounded-[30px] p-8 shadow-sm hover:shadow-xl border border-gray-50 text-center transition-all duration-300 card-hover group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brandBlue/5 rounded-bl-[100px] -z-10 transition-all group-hover:scale-110"></div>
                <div class="w-20 h-20 mx-auto bg-brandBlue/10 rounded-blob flex items-center justify-center text-brandBlue text-3xl mb-6 group-hover:bg-brandBlue group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brandDarkBlue mb-3">Our Location</h3>
                <p class="text-textLight leading-relaxed">
                    123 Learning Lane, Playville<br>
                    Education District, ED 45678
                </p>
            </div>

            <!-- Phone Card -->
            <div class="bg-white rounded-[30px] p-8 shadow-sm hover:shadow-xl border border-gray-50 text-center transition-all duration-300 card-hover group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brandOrange/5 rounded-bl-[100px] -z-10 transition-all group-hover:scale-110"></div>
                <div class="w-20 h-20 mx-auto bg-brandOrange/10 rounded-blob flex items-center justify-center text-brandOrange text-3xl mb-6 group-hover:bg-brandOrange group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brandDarkBlue mb-3">Phone Number</h3>
                <p class="text-textLight leading-relaxed">
                    +1 250 500 8192<br>
                    +1 250 500 8193
                </p>
            </div>

            <!-- Email Card -->
            <div class="bg-white rounded-[30px] p-8 shadow-sm hover:shadow-xl border border-gray-50 text-center transition-all duration-300 card-hover group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brandTeal/5 rounded-bl-[100px] -z-10 transition-all group-hover:scale-110"></div>
                <div class="w-20 h-20 mx-auto bg-brandTeal/10 rounded-blob flex items-center justify-center text-brandTeal text-3xl mb-6 group-hover:bg-brandTeal group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brandDarkBlue mb-3">Email Address</h3>
                <p class="text-textLight leading-relaxed">
                    admissions@thefoundation.edu<br>
                    info@thefoundation.edu
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ===== 3. CONTACT FORM & MAP ===== -->
<section class="py-20 bg-brandBg relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-40 left-0 w-64 h-64 bg-brandTeal/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-0 w-96 h-96 bg-brandOrange/5 rounded-full blur-3xl -z-10"></div>

    <div class="container mx-auto px-5 max-w-7xl">
        <div class="bg-white rounded-[40px] shadow-sm border border-gray-100 overflow-hidden flex flex-col lg:flex-row">
            
            <!-- Left: Contact Form -->
            <div class="w-full lg:w-1/2 p-10 lg:p-14 relative z-10">
                <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-3 block">Send a Message</span>
                <h2 class="text-3xl lg:text-4xl font-heading font-bold text-brandDarkBlue mb-8">Drop Us a Line</h2>
                
                <form action="#" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Parent's Name *</label>
                            <input type="text" placeholder="John Doe" required class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Email Address *</label>
                            <input type="email" placeholder="john@example.com" required class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Phone Number</label>
                            <input type="tel" placeholder="+1 234 567 8900" class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Subject</label>
                            <select class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain text-sm appearance-none cursor-pointer">
                                <option>Admission Inquiry</option>
                                <option>Schedule a Tour</option>
                                <option>General Question</option>
                                <option>Feedback</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Your Message *</label>
                        <textarea rows="4" placeholder="How can we help you?" required class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400 resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-brandOrange text-white font-heading font-bold text-lg py-4 px-8 rounded-full shadow-lg shadow-brandOrange/30 hover:-translate-y-1 hover:shadow-xl hover:shadow-brandOrange/40 transition-all duration-300 flex justify-center items-center gap-2 group">
                        Send Message 
                        <i class="fa-solid fa-paper-plane group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            </div>

            <!-- Right: Interactive Map / Graphic -->
            <div class="w-full lg:w-1/2 min-h-[400px] lg:min-h-full bg-brandBlue/5 relative overflow-hidden group">
                <!-- Using a stylized Map graphic placeholder since real maps need API keys. 
                     This provides a much more premium look than a grey iframe. -->
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cartographer.png')] opacity-30 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-brandDarkBlue/5 group-hover:bg-brandDarkBlue/0 transition duration-500 z-10"></div>
                
                <!-- Stylized Location Pin -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 text-center animate-bounce-slow">
                    <div class="w-20 h-20 bg-brandOrange rounded-full shadow-2xl flex items-center justify-center text-white text-3xl mx-auto mb-4 border-4 border-white relative before:absolute before:w-6 before:h-6 before:bg-brandOrange before:-bottom-2 before:rotate-45 before:-z-10">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div class="bg-white/90 backdrop-blur-md px-6 py-3 rounded-xl shadow-lg inline-block border border-white">
                        <span class="font-heading font-bold text-brandDarkBlue block text-lg">The Foundation</span>
                        <span class="text-xs text-textLight font-semibold">Play School</span>
                    </div>
                </div>

                <!-- Abstract map roads styling -->
                <svg class="absolute inset-0 w-full h-full opacity-20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-100,100 C150,50 300,400 600,200 C800,50 900,300 1200,100" fill="none" stroke="#2D3748" stroke-width="8" stroke-linecap="round"/>
                    <path d="M-50,300 C200,400 400,100 700,300 C900,500 1000,200 1300,400" fill="none" stroke="#74A2B8" stroke-width="12" stroke-linecap="round"/>
                    <path d="M300,-50 C350,200 100,400 400,600 C600,800 500,900 700,1200" fill="none" stroke="#EB9A61" stroke-width="6" stroke-linecap="round"/>
                </svg>
            </div>
            
        </div>
    </div>
</section>

<!-- ===== 4. FAQ TEASER ===== -->
<section class="py-16 bg-white border-t border-brandBg">
    <div class="max-w-[700px] mx-auto px-5 text-center">
        <h3 class="font-heading text-3xl font-bold text-brandDarkBlue mb-4">Frequently Asked Questions</h3>
        <p class="text-textLight mb-8">Before reaching out, you might find the answer you're looking for in our FAQ section. We cover admissions, curricula, and daily un-dos.</p>
        <a href="#" class="inline-block bg-white border-2 border-brandBlue text-brandBlue font-bold py-3 px-8 rounded-full hover:bg-brandBlue hover:text-white transition-colors duration-300">
            View All FAQs
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
