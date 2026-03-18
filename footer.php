    <!-- Footer -->
    <footer class="bg-brandBg pt-10 pb-10 relative">
        <div class="max-w-[1300px] mx-auto px-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 border-b border-gray-200 pb-12 mb-8">
            <div class="pr-6">
                <div class="flex items-center gap-2 font-heading text-2xl font-bold text-textMain mb-6">
                    <i class="fa-solid fa-child-reaching text-brandOrange text-3xl"></i>
                    The Foundation
                </div>
                <p class="text-sm text-textLight mb-6">Building strong foundations for lifelong learning, social skills, and emotional well-being since 2010.</p>
            </div>
            
            <div>
                <h4 class="font-heading font-bold text-brandDarkBlue text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3 text-sm text-textLight font-medium">
                    <li><a href="index2.php" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> Home</a></li>
                    <li><a href="about.php" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> About Us</a></li>
                    <li><a href="#" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> Programs</a></li>
                    <li><a href="contact.php" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-heading font-bold text-brandDarkBlue text-lg mb-6">Categories</h4>
                <ul class="space-y-3 text-sm text-textLight font-medium">
                    <li><a href="#" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> Preschool</a></li>
                    <li><a href="#" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> Kindergarten</a></li>
                    <li><a href="#" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> Kindergarten 2</a></li>
                    <li><a href="#" class="hover:text-brandOrange flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-brandOrange"></i> Preschool 2</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-heading font-bold text-brandDarkBlue text-lg mb-6">Our Gallery</h4>
                <div class="grid grid-cols-3 gap-2">
                    <img src="assets/gallery/IMG_20250814_105055_373.webp" alt="Gallery" class="w-full h-16 object-cover rounded-xl shadow-sm border border-white">
                    <img src="assets/gallery/IMG_20250814_105326_276.webp" alt="Gallery" class="w-full h-16 object-cover rounded-xl shadow-sm border border-white">
                    <img src="assets/gallery/IMG_20250814_105534_078.webp" alt="Gallery" class="w-full h-16 object-cover rounded-xl shadow-sm border border-white">
                    <img src="assets/gallery/IMG_20250814_115028_061.webp" alt="Gallery" class="w-full h-16 object-cover rounded-xl shadow-sm border border-white">
                    <img src="assets/gallery/IMG_20250814_115045_945.webp" alt="Gallery" class="w-full h-16 object-cover rounded-xl shadow-sm border border-white">
                    <img src="assets/gallery/IMG_20250814_115103_087.webp" alt="Gallery" class="w-full h-16 object-cover rounded-xl shadow-sm border border-white">
                </div>
            </div>
        </div>
        
        <div class="text-center text-sm text-textLight font-medium">
            &copy; <?= date('Y') ?> The Foundation Play School. All rights reserved by the Author.
        </div>

        <!-- Bottom Wave for footer -->
        <!-- <div class="w-full h-[60px] bg-white absolute bottom-0 left-0" style="background-image: url('data:image/svg+xml;utf8,<svg viewBox=\'0 0 1200 120\' xmlns=\'http://www.w3.org/2000/svg\' preserveAspectRatio=\'none\'><path d=\'M0,60 C100,-20 200,80 300,30 C400,-20 500,80 600,0 C700,80 800,-20 900,40 C1000,-10 1100,70 1200,0 L1200,120 L0,120 Z\' fill=\'%23FFF7ED\'/></svg>'); background-size: cover;"></div> -->
    </footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/918766337686" target="_blank" rel="noopener"
   class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] rounded-full flex items-center justify-center shadow-lg hover:scale-110 hover:shadow-xl transition-all duration-300"
   aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp text-white text-3xl"></i>
</a>

</body>
</html>
