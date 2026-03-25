<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "The Foundation Play School"; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/favicon/Play_school_logo-removebg-preview (1) (1).png">
    <link rel="apple-touch-icon" href="assets/favicon/Play_school_logo-removebg-preview (1) (1).png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandOrange: '#FF944D',
                        brandBlue: '#65A1CA',
                        brandTeal: '#639b9c',
                        brandRed: '#EF6A59',
                        brandBg: '#FFF7ED',
                        brandDarkBlue: '#324E5B',
                        textMain: '#2D3748',
                        textLight: '#718096',
                    },
                    fontFamily: {
                        heading: ['"Fredoka"', 'sans-serif'],
                        body: ['Nunito', 'sans-serif'],
                    },
                    borderRadius: {
                        'blob': '50% 50% 50% 50% / 60% 60% 40% 40%',
                        'blob-reverse': '40% 60% 70% 30% / 40% 50% 60% 50%',
                        'card': '2rem',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom shapes from CSS since Tailwind can't do complex waves easily */
        .wave-top {
            clip-path: ellipse(150% 100% at 50% 100%);
        }
        .cloud-divider {
            position: absolute;
            top: -50px; left: 0; width: 100%; height: 50px;
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,60 C150,120 250,0 400,60 C550,120 650,0 800,60 C950,120 1050,0 1200,60 L1200,120 L0,120 Z" fill="%23ffffff"/></svg>');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .cloud-divider-bottom {
            position: absolute;
            bottom: -50px; left: 0; width: 100%; height: 50px;
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,60 C150,120 250,0 400,60 C550,120 650,0 800,60 C950,120 1050,0 1200,60 L1200,0 L0,0 Z" fill="%2365A1CA"/></svg>');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .bg-wave-cream {
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,60 C150,120 250,0 400,60 C550,120 650,0 800,60 C950,120 1050,0 1200,60 L1200,120 L0,120 Z" fill="%23FFF7ED"/></svg>');
            background-size: cover;
        }
        
        .float-anim { animation: float 6s ease-in-out infinite; }
        .float-anim-delay { animation: float 6s ease-in-out infinite 2s; }
        .float-anim-delay2 { animation: float 6s ease-in-out infinite 4s; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .card-hover { @apply transition-all duration-300 hover:-translate-y-2 hover:shadow-xl; }
        .rounded-blob2 { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
    </style>
</head>
<body class="font-body text-textMain bg-white overflow-x-hidden">

    <!-- Fixed Header Wrapper -->
    <div class="fixed top-0 left-0 w-full z-50">
        <!-- Top Info Bar -->
        <div class="bg-brandDarkBlue text-white/80 text-xs font-semibold py-2 px-4 md:px-8">
            <div class="max-w-[1400px] mx-auto flex flex-wrap justify-center md:justify-between items-center gap-2 md:gap-0">
                <div class="flex items-center gap-3 md:gap-6 flex-wrap justify-center">
                    <a href="https://maps.google.com/?q=Ramsons+Kshitiji+Commercial+Sector+95+Gurugram" target="_blank" class="hover:text-white transition hidden sm:inline"><i class="fa-solid fa-location-dot text-brandOrange mr-1.5"></i> 1st floor, Ramsons Kshitiji Commercial, Sector 95, Gurugram</a>
                    <a href="mailto:playschoolthefoundation@gmail.com" class="hover:text-white transition hidden md:inline"><i class="fa-solid fa-envelope text-brandOrange mr-1.5"></i> playschoolthefoundation@gmail.com</a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="tel:+918766337686" class="hover:text-white transition"><i class="fa-solid fa-phone text-brandOrange mr-1.5"></i> +91 87663 37686</a>
                </div>
            </div>
        </div>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
        <!-- Main Navbar -->
        <div class="px-3 md:px-6 py-2 bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-sm">
            <header class="py-2 px-4 md:py-3 md:px-8 max-w-[1400px] mx-auto flex justify-between items-center bg-white rounded-full shadow-sm">
                <a href="index.php" class="flex items-center gap-2 hover:opacity-80 transition">
                    <img src="assets/img/Play_school_logo-removebg-preview (1).png" alt="The Foundation Play School" class="h-12 w-auto object-contain">
                </a>
                <nav class="hidden lg:block ml-8">
                    <ul class="flex items-center gap-8 text-sm font-bold text-textMain/80">
                        <li><a href="index.php" class="<?php echo ($currentPage == 'index.php' || $currentPage == 'index.php') ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition">Home</a></li>
                        <li><a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition">About Us</a></li>
                        <li class="relative group">
                            <?php $isProgramActive = in_array($currentPage, ['pre-nursery.php', 'nursery.php', 'lkg.php', 'ukg.php']); ?>
                            <a href="#" class="<?php echo $isProgramActive ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition flex items-center gap-1 pb-4 -mb-4 pt-4 -mt-4">Programs <i class="fa-solid fa-chevron-down text-xs ml-0.5"></i></a>
                            
                            <!-- Enhanced Dropdown Menu -->
                            <div class="absolute top-12 left-1/2 -translate-x-1/2 bg-white border border-gray-100 shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] rounded-[24px] p-3 min-w-[240px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 overflow-hidden">
                                <ul class="flex flex-col gap-1">
                                    <li>
                                        <a href="pre-nursery.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-teal-50 hover:text-brandTeal transition group/item <?php echo ($currentPage == 'pre-nursery.php') ? 'bg-teal-50 text-brandTeal' : 'text-textMain'; ?>">
                                            <div class="w-8 h-8 rounded-full bg-teal-100 text-brandTeal flex items-center justify-center shadow-sm shrink-0 group-hover/item:scale-110 transition"><i class="fa-solid fa-baby-carriage text-xs"></i></div>
                                            <div class="flex flex-col">
                                                <span class="font-heading font-bold text-base leading-tight">Pre Nursery</span>
                                                <span class="text-xs text-textLight font-normal">1.5 - 2.5 Years</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="nursery.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-orange-50 hover:text-brandOrange transition group/item <?php echo ($currentPage == 'nursery.php') ? 'bg-orange-50 text-brandOrange' : 'text-textMain'; ?>">
                                            <div class="w-8 h-8 rounded-full bg-orange-100 text-brandOrange flex items-center justify-center shadow-sm shrink-0 group-hover/item:scale-110 transition"><i class="fa-solid fa-palette text-xs"></i></div>
                                            <div class="flex flex-col">
                                                <span class="font-heading font-bold text-base leading-tight">Nursery</span>
                                                <span class="text-xs text-textLight font-normal">2.5 - 3.5 Years</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="lkg.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-blue-50 hover:text-brandBlue transition group/item <?php echo ($currentPage == 'lkg.php') ? 'bg-blue-50 text-brandBlue' : 'text-textMain'; ?>">
                                            <div class="w-8 h-8 rounded-full bg-blue-100 text-brandBlue flex items-center justify-center shadow-sm shrink-0 group-hover/item:scale-110 transition"><i class="fa-solid fa-shapes text-xs"></i></div>
                                            <div class="flex flex-col">
                                                <span class="font-heading font-bold text-base leading-tight">LKG</span>
                                                <span class="text-xs text-textLight font-normal">3.5 - 4.5 Years</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ukg.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-50 hover:text-brandRed transition group/item <?php echo ($currentPage == 'ukg.php') ? 'bg-red-50 text-brandRed' : 'text-textMain'; ?>">
                                            <div class="w-8 h-8 rounded-full bg-red-100 text-brandRed flex items-center justify-center shadow-sm shrink-0 group-hover/item:scale-110 transition"><i class="fa-solid fa-flask text-xs"></i></div>
                                            <div class="flex flex-col">
                                                <span class="font-heading font-bold text-base leading-tight">UKG</span>
                                                <span class="text-xs text-textLight font-normal">4.5 - 5.5 Years</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="gallery.php" class="<?php echo ($currentPage == 'gallery.php') ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition">Gallery</a></li>
<li><a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition">Contact</a></li>
                        <!-- <li class="ml-4 border-l border-gray-200 pl-6"><i class="fa-solid fa-magnifying-glass hover:text-brandOrange cursor-pointer text-lg"></i></li> -->
                    </ul>
                </nav>
                <div class="flex items-center gap-4">
                    <a href="contact.php" class="hidden sm:inline-flex bg-brandOrange text-white px-6 py-2.5 lg:px-8 lg:py-3.5 rounded-full font-bold shadow-md hover:bg-orange-500 transition shadow-brandOrange/30 text-sm">
                        Book A Visit <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                    <!-- Mobile Hamburger Button -->
                    <button id="mobileMenuBtn" class="lg:hidden flex flex-col justify-center items-center w-10 h-10 rounded-full hover:bg-gray-100 transition" aria-label="Toggle menu">
                        <span id="hamburgerIcon" class="flex flex-col gap-1.5">
                            <span class="block w-6 h-0.5 bg-textMain rounded-full transition-all"></span>
                            <span class="block w-6 h-0.5 bg-textMain rounded-full transition-all"></span>
                            <span class="block w-4 h-0.5 bg-textMain rounded-full transition-all"></span>
                        </span>
                    </button>
                </div>
            </header>

        </div>
    </div>

    <!-- Mobile Menu Overlay (outside fixed header to avoid backdrop-blur containing block issue) -->
    <div id="mobileMenu" class="lg:hidden fixed inset-0 bg-white z-[200] transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100">
            <a href="index.php" class="flex items-center gap-2">
                <img src="assets/img/Play_school_logo-removebg-preview (1).png" alt="The Foundation Play School" class="h-10 w-auto object-contain">
            </a>
            <button id="mobileMenuClose" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-100 transition" aria-label="Close menu">
                <i class="fa-solid fa-xmark text-xl text-textMain"></i>
            </button>
        </div>
        <nav class="px-6 py-6">
            <ul class="flex flex-col gap-2 text-base font-bold text-textMain/80">
                <li><a href="index.php" class="block py-3 px-4 rounded-xl hover:bg-orange-50 <?php echo ($currentPage == 'index.php') ? 'text-brandOrange bg-orange-50' : ''; ?> transition">Home</a></li>
                <li><a href="about.php" class="block py-3 px-4 rounded-xl hover:bg-orange-50 <?php echo ($currentPage == 'about.php') ? 'text-brandOrange bg-orange-50' : ''; ?> transition">About Us</a></li>
                <li>
                    <button id="mobileProgramsToggle" class="w-full flex justify-between items-center py-3 px-4 rounded-xl hover:bg-orange-50 <?php echo $isProgramActive ? 'text-brandOrange bg-orange-50' : ''; ?> transition">
                        Programs <i class="fa-solid fa-chevron-down text-xs transition-transform" id="mobileProgramsArrow"></i>
                    </button>
                    <ul id="mobileProgramsDropdown" class="hidden flex-col gap-1 pl-4 mt-1">
                        <li><a href="pre-nursery.php" class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-teal-50 <?php echo ($currentPage == 'pre-nursery.php') ? 'bg-teal-50 text-brandTeal' : ''; ?> transition"><div class="w-8 h-8 rounded-full bg-teal-100 text-brandTeal flex items-center justify-center shrink-0"><i class="fa-solid fa-baby-carriage text-xs"></i></div><div><span class="font-heading font-bold text-sm">Pre Nursery</span><br><span class="text-xs text-textLight font-normal">1.5 - 2.5 Years</span></div></a></li>
                        <li><a href="nursery.php" class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-orange-50 <?php echo ($currentPage == 'nursery.php') ? 'bg-orange-50 text-brandOrange' : ''; ?> transition"><div class="w-8 h-8 rounded-full bg-orange-100 text-brandOrange flex items-center justify-center shrink-0"><i class="fa-solid fa-palette text-xs"></i></div><div><span class="font-heading font-bold text-sm">Nursery</span><br><span class="text-xs text-textLight font-normal">2.5 - 3.5 Years</span></div></a></li>
                        <li><a href="lkg.php" class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-blue-50 <?php echo ($currentPage == 'lkg.php') ? 'bg-blue-50 text-brandBlue' : ''; ?> transition"><div class="w-8 h-8 rounded-full bg-blue-100 text-brandBlue flex items-center justify-center shrink-0"><i class="fa-solid fa-shapes text-xs"></i></div><div><span class="font-heading font-bold text-sm">LKG</span><br><span class="text-xs text-textLight font-normal">3.5 - 4.5 Years</span></div></a></li>
                        <li><a href="ukg.php" class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-red-50 <?php echo ($currentPage == 'ukg.php') ? 'bg-red-50 text-brandRed' : ''; ?> transition"><div class="w-8 h-8 rounded-full bg-red-100 text-brandRed flex items-center justify-center shrink-0"><i class="fa-solid fa-flask text-xs"></i></div><div><span class="font-heading font-bold text-sm">UKG</span><br><span class="text-xs text-textLight font-normal">4.5 - 5.5 Years</span></div></a></li>
                    </ul>
                </li>
                <li><a href="gallery.php" class="block py-3 px-4 rounded-xl hover:bg-orange-50 <?php echo ($currentPage == 'gallery.php') ? 'text-brandOrange bg-orange-50' : ''; ?> transition">Gallery</a></li>
                <li><a href="contact.php" class="block py-3 px-4 rounded-xl hover:bg-orange-50 <?php echo ($currentPage == 'contact.php') ? 'text-brandOrange bg-orange-50' : ''; ?> transition">Contact</a></li>
            </ul>
            <a href="contact.php" class="mt-6 block text-center bg-brandOrange text-white px-8 py-3.5 rounded-full font-bold shadow-md hover:bg-orange-500 transition shadow-brandOrange/30 text-sm">
                Book A Visit <i class="fa-solid fa-arrow-right ml-1"></i>
            </a>
        </nav>
    </div>
    <!-- Mobile Menu JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('mobileMenuBtn');
            const menuClose = document.getElementById('mobileMenuClose');
            const mobileMenu = document.getElementById('mobileMenu');
            const programsToggle = document.getElementById('mobileProgramsToggle');
            const programsDropdown = document.getElementById('mobileProgramsDropdown');
            const programsArrow = document.getElementById('mobileProgramsArrow');

            function openMenu() {
                mobileMenu.classList.remove('translate-x-full');
                mobileMenu.classList.add('translate-x-0');
                document.body.style.overflow = 'hidden';
            }
            function closeMenu() {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('translate-x-full');
                document.body.style.overflow = '';
            }

            menuBtn.addEventListener('click', openMenu);
            menuClose.addEventListener('click', closeMenu);

            programsToggle.addEventListener('click', function() {
                programsDropdown.classList.toggle('hidden');
                programsArrow.classList.toggle('rotate-180');
            });
        });
    </script>

    <!-- Spacer to push content below fixed header -->
    <div class="h-[100px] md:h-[120px]"></div>
