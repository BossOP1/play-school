<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "The Foundation Play School"; ?></title>
    
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
        <div class="bg-brandDarkBlue text-white/80 text-xs font-semibold py-2 px-8">
            <div class="max-w-[1400px] mx-auto flex justify-between items-center">
                <div class="flex items-center gap-6">
                    <span><i class="fa-solid fa-location-dot text-brandOrange mr-1.5"></i> 123 Learning Lane, Playville</span>
                    <span><i class="fa-solid fa-envelope text-brandOrange mr-1.5"></i> info@thefoundation.edu</span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-white/60">Follow Us On:</span>
                    <a href="#" class="hover:text-brandOrange transition"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-brandOrange transition"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="hover:text-brandOrange transition"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
        <!-- Main Navbar -->
        <div class="px-6 py-2 bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-sm">
            <header class="py-3 px-8 max-w-[1400px] mx-auto flex justify-between items-center bg-white rounded-full shadow-sm">
                <a href="index2.php" class="flex items-center gap-2 font-heading text-3xl font-bold text-brandDarkBlue hover:text-brandOrange transition">
                    <i class="fa-solid fa-sun text-brandOrange"></i>
                    The Foundation
                </a>
                <nav class="hidden lg:block ml-8">
                    <ul class="flex items-center gap-8 text-sm font-bold text-textMain/80">
                        <li><a href="index2.php" class="<?php echo ($currentPage == 'index2.php' || $currentPage == 'index.php') ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition">Home</a></li>
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
                        <li><a href="#" class="<?php echo ($currentPage == 'blog.php') ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition">Blog</a></li>
                        <li><a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'text-brandOrange' : 'hover:text-brandOrange'; ?> transition">Contact</a></li>
                        <!-- <li class="ml-4 border-l border-gray-200 pl-6"><i class="fa-solid fa-magnifying-glass hover:text-brandOrange cursor-pointer text-lg"></i></li> -->
                    </ul>
                </nav>
                <div class="flex items-center gap-4">
                    <a href="contact.php" class="bg-brandOrange text-white px-8 py-3.5 rounded-full font-bold shadow-md hover:bg-orange-500 transition shadow-brandOrange/30 text-sm">
                        Book A Visit <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </header>
        </div>
    </div>
    <!-- Spacer to push content below fixed header (top bar ~32px + navbar ~72px) -->
    <div class="h-[120px]"></div>
