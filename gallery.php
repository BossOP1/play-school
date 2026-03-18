<?php
$pageTitle = "Gallery - The Foundation Play School";
include 'header.php';
?>

<!-- Hero -->
<section class="relative pt-16 pb-16 overflow-hidden bg-gradient-to-br from-[#FFF9F5] via-[#FFF7ED] to-[#FFF1E5]">
    <div class="absolute top-0 left-0 w-full h-full opacity-30 pointer-events-none">
        <i class="fa-solid fa-camera absolute top-20 left-[10%] text-brandOrange/20 text-7xl float-anim"></i>
        <i class="fa-solid fa-images absolute top-40 right-[15%] text-brandBlue/20 text-5xl float-anim-delay"></i>
        <i class="fa-solid fa-star absolute bottom-10 left-[40%] text-brandTeal/20 text-4xl float-anim-delay2"></i>
    </div>
    <div class="max-w-[1300px] mx-auto px-5 relative z-10 text-center">
        <span class="text-brandOrange font-bold text-sm tracking-widest uppercase mb-4 block inline-flex items-center gap-2 bg-orange-50 px-4 py-2 rounded-full shadow-sm">
            <i class="fa-solid fa-camera"></i> Our Gallery
        </span>
        <h1 class="text-5xl md:text-6xl font-heading font-bold leading-tight mb-6 text-brandDarkBlue">
            Captured <span class="text-brandOrange">Moments</span>
        </h1>
        <p class="text-textLight text-lg max-w-xl mx-auto">
            A glimpse into the joyful, colorful, and memory-filled world of The Foundation Play School.
        </p>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-16 bg-white">
    <div class="max-w-[1300px] mx-auto px-5">
        <?php
        $all_images = [
            "IMG_20250814_105055_373.webp",
            "IMG_20250814_105326_276.webp",
            "IMG_20250814_105534_078.webp",
            "IMG_20250814_115028_061.webp",
            "IMG_20250814_115045_945.webp",
            "IMG_20250814_115103_087.webp",
            "IMG_20250814_115119_815.webp",
            "IMG_20250814_115128_872.webp",
            "IMG_20250815_100110_006.webp",
            "IMG_20250815_100159_509.webp",
            "IMG_20250815_100337_876.webp",
            "IMG_20250815_100419_530.webp",
            "IMG_20250815_104125_406.webp",
            "IMG_20250815_104138_913.webp",
            "IMG_20250815_104154_866.webp",
            "IMG_20250815_104212_584.webp",
            "IMG_20251015_122050.jpg",
            "20250509_115829.jpg",
            "IMG-20251017-WA0009.jpg",
            "IMG-20251017-WA0010.jpg",
            "IMG-20260215-WA0066.jpg",
            "Snapchat-101729502.jpg",
            "Snapchat-1213888458.jpg",
            "Snapchat-1235252430.jpg",
            "Snapchat-147866039.jpg",
            "Snapchat-1735655510.jpg",
            "Snapchat-189203823.jpg",
        ];
        shuffle($all_images);
        ?>

        <div id="galleryGrid" class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
            <?php foreach ($all_images as $i => $img): ?>
            <div class="break-inside-avoid rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer group gallery-item"
                 data-index="<?php echo $i; ?>"
                 data-src="assets/gallery/<?php echo htmlspecialchars($img); ?>">
                <img src="assets/gallery/<?php echo htmlspecialchars($img); ?>"
                     alt="Gallery Image"
                     class="w-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="fixed inset-0 z-[100] bg-black/90 flex items-center justify-center hidden" role="dialog" aria-modal="true">
    <button id="lbClose" class="absolute top-5 right-6 text-white text-4xl leading-none hover:text-brandOrange transition">&times;</button>
    <button id="lbPrev" class="absolute left-4 md:left-8 text-white text-5xl leading-none hover:text-brandOrange transition select-none">&#8249;</button>
    <button id="lbNext" class="absolute right-4 md:right-8 text-white text-5xl leading-none hover:text-brandOrange transition select-none">&#8250;</button>
    <img id="lbImg" src="" alt="Gallery full view" class="max-h-[90vh] max-w-[90vw] rounded-2xl shadow-2xl object-contain">
    <div id="lbCounter" class="absolute bottom-5 left-1/2 -translate-x-1/2 text-white/60 text-sm font-bold"></div>
</div>

<script>
(function () {
    var items = Array.from(document.querySelectorAll('.gallery-item'));
    var srcs = items.map(function (el) { return el.getAttribute('data-src'); });
    var current = 0;

    var lb = document.getElementById('lightbox');
    var lbImg = document.getElementById('lbImg');
    var lbCounter = document.getElementById('lbCounter');

    function show(index) {
        current = (index + srcs.length) % srcs.length;
        lbImg.src = srcs[current];
        lbCounter.textContent = (current + 1) + ' / ' + srcs.length;
        lb.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function close() {
        lb.classList.add('hidden');
        document.body.style.overflow = '';
    }

    items.forEach(function (el, i) {
        el.addEventListener('click', function () { show(i); });
    });

    document.getElementById('lbClose').addEventListener('click', close);
    document.getElementById('lbPrev').addEventListener('click', function () { show(current - 1); });
    document.getElementById('lbNext').addEventListener('click', function () { show(current + 1); });

    lb.addEventListener('click', function (e) {
        if (e.target === lb) close();
    });

    document.addEventListener('keydown', function (e) {
        if (lb.classList.contains('hidden')) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') show(current - 1);
        if (e.key === 'ArrowRight') show(current + 1);
    });
})();
</script>

<?php include 'footer.php'; ?>
