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
        <!-- Main Navbar -->
        <div class="px-6 py-2 bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-sm">
            <header class="py-3 px-8 max-w-[1400px] mx-auto flex justify-between items-center bg-white rounded-full shadow-sm">
                <div class="flex items-center gap-2 font-heading text-3xl font-bold text-brandDarkBlue">
                    <i class="fa-solid fa-sun text-brandOrange"></i>
                    The Foundation
                </div>
                <nav class="hidden lg:block ml-8">
                    <ul class="flex items-center gap-8 text-sm font-bold text-textMain/80">
                        <li><a href="index2.php" class="hover:text-brandOrange transition">Home</a></li>
                        <li><a href="about.php" class="hover:text-brandOrange transition">About Us</a></li>
                        <li><a href="#" class="hover:text-brandOrange transition">Programs</a></li>
                        <li><a href="#" class="hover:text-brandOrange transition">Teachers</a></li>
                        <li><a href="#" class="hover:text-brandOrange transition">Blog</a></li>
                        <li><a href="contact.php" class="hover:text-brandOrange transition">Contact</a></li>
                        <li class="ml-4 border-l border-gray-200 pl-6"><i class="fa-solid fa-magnifying-glass hover:text-brandOrange cursor-pointer text-lg"></i></li>
                    </ul>
                </nav>
                <div class="flex items-center gap-4">
                    <a href="#" class="bg-brandOrange text-white px-8 py-3.5 rounded-full font-bold shadow-md hover:bg-orange-500 transition shadow-brandOrange/30 text-sm">
                        Book A Visit <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </header>
        </div>
    </div>
    <!-- Spacer to push content below fixed header (top bar ~32px + navbar ~72px) -->
    <div class="h-[120px]"></div>
