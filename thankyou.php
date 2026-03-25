<?php
$pageTitle = "Thank You - The Foundation Play School";
include 'header.php';
?>

<!-- ===== THANK YOU SECTION ===== -->
<section class="relative py-28 bg-gradient-to-br from-[#E6F3FA] via-[#FFF7ED] to-[#FFF9F5] overflow-hidden min-h-[70vh] flex items-center">
    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-24 h-24 bg-brandOrange/20 rounded-blob animate-blob border border-white/50 blur-[2px]"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-brandBlue/20 rounded-blob2 animate-blob border border-white/50 blur-[2px]"></div>
    <i class="fa-solid fa-paper-plane float-anim absolute top-32 right-[20%] text-4xl text-brandBlue/20"></i>
    <i class="fa-solid fa-heart float-anim-delay absolute bottom-20 left-[15%] text-5xl text-brandOrange/20"></i>
    <i class="fa-solid fa-star float-anim-delay2 absolute top-[40%] left-[8%] text-3xl text-brandTeal/20"></i>

    <!-- SVG Wave Bottom -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
        <svg class="relative block w-[calc(140%+1.3px)] h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white"></path>
        </svg>
    </div>

    <div class="container mx-auto px-5 max-w-3xl text-center relative z-20">
        <!-- Success Icon -->
        <div class="w-28 h-28 mx-auto bg-green-100 rounded-full flex items-center justify-center text-green-500 text-5xl mb-8 shadow-lg shadow-green-100/50">
            <i class="fa-solid fa-circle-check"></i>
        </div>

        <h1 class="text-5xl md:text-6xl font-heading font-bold leading-tight mb-6 text-brandDarkBlue">
            Thank <span class="text-brandOrange">You!</span>
        </h1>
        <p class="text-xl text-textLight leading-relaxed max-w-2xl mx-auto mb-10">
            Your message has been sent successfully. Our team will get back to you within <strong class="text-brandDarkBlue">24 hours</strong>. We're excited to connect with you!
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="index.php" class="bg-brandOrange text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-brandOrange/30 hover:-translate-y-1 hover:shadow-xl hover:shadow-brandOrange/40 transition-all duration-300 inline-flex items-center justify-center gap-2">
                <i class="fa-solid fa-house"></i> Back to Home
            </a>
            <a href="contact.php" class="bg-white text-brandDarkBlue border-2 border-gray-200 px-8 py-4 rounded-full font-bold hover:-translate-y-1 hover:shadow-lg transition-all duration-300 inline-flex items-center justify-center gap-2">
                <i class="fa-solid fa-envelope"></i> Send Another Message
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
