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
                <a href="https://maps.google.com/?q=Ramsons+Kshitiji+Commercial+Sector+95+Gurugram+Haryana+122505" target="_blank" class="text-textLight leading-relaxed hover:text-brandBlue transition block">
                    1st floor, Ramsons Kshitiji Commercial,<br>
                    Sector 95, Gurugram, Haryana 122505
                </a>
            </div>

            <!-- Phone Card -->
            <div class="bg-white rounded-[30px] p-8 shadow-sm hover:shadow-xl border border-gray-50 text-center transition-all duration-300 card-hover group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brandOrange/5 rounded-bl-[100px] -z-10 transition-all group-hover:scale-110"></div>
                <div class="w-20 h-20 mx-auto bg-brandOrange/10 rounded-blob flex items-center justify-center text-brandOrange text-3xl mb-6 group-hover:bg-brandOrange group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brandDarkBlue mb-3">Phone Number</h3>
                <a href="tel:+918766337686" class="text-textLight leading-relaxed hover:text-brandOrange transition block">
                    +91 87663 37686
                </a>
            </div>

            <!-- Email Card -->
            <div class="bg-white rounded-[30px] p-8 shadow-sm hover:shadow-xl border border-gray-50 text-center transition-all duration-300 card-hover group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brandTeal/5 rounded-bl-[100px] -z-10 transition-all group-hover:scale-110"></div>
                <div class="w-20 h-20 mx-auto bg-brandTeal/10 rounded-blob flex items-center justify-center text-brandTeal text-3xl mb-6 group-hover:bg-brandTeal group-hover:text-white transition-colors duration-300">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <h3 class="font-heading font-bold text-2xl text-brandDarkBlue mb-3">Email Address</h3>
                <a href="mailto:playschoolthefoundation@gmail.com" class="text-textLight leading-relaxed hover:text-brandTeal transition block">
                    playschoolthefoundation@gmail.com
                </a>
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
                
                <form action="https://formsubmit.co/playschoolthefoundation@gmail.com" method="POST">
                    <!-- FormSubmit Configuration -->
                    <input type="hidden" name="_subject" value="New Inquiry from Play School Website">
                    <input type="hidden" name="_next" value="https://thefoundationschools.in/thankyou">
                    <input type="hidden" name="_cc" value="roreveryone27@gmail.com">
                    <input type="hidden" name="_captcha" value="true">
                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_template" value="box">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Parent's Name *</label>
                            <input type="text" name="name" placeholder="John Doe" required class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Email Address *</label>
                            <input type="email" name="email" placeholder="john@example.com" required class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Phone Number</label>
                            <input type="tel" name="phone" placeholder="+91 98765 43210" class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Subject</label>
                            <select name="subject" class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain text-sm appearance-none cursor-pointer">
                                <option>Admission Inquiry</option>
                                <option>Schedule a Tour</option>
                                <option>General Question</option>
                                <option>Feedback</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-textMain mb-2 ml-1">Your Message *</label>
                        <textarea rows="4" name="message" placeholder="How can we help you?" required class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:outline-none focus:border-brandOrange focus:bg-white transition-colors text-textMain placeholder-gray-400 resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-brandOrange text-white font-heading font-bold text-lg py-4 px-8 rounded-full shadow-lg shadow-brandOrange/30 hover:-translate-y-1 hover:shadow-xl hover:shadow-brandOrange/40 transition-all duration-300 flex justify-center items-center gap-2 group">
                        Send Message
                        <i class="fa-solid fa-paper-plane group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            </div>

            <!-- Right: Google Map -->
            <div class="w-full lg:w-1/2 min-h-[400px] lg:min-h-full relative">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.5!2d76.9735!3d28.3925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3c00000001%3A0x0!2sRamsons%20Kshitiji%20Commercial%2C%20Sector%2095%2C%20Gurugram%2C%20Haryana%20122505!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                    class="absolute inset-0 w-full h-full border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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
