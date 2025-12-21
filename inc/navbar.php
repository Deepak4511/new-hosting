<?php
// Include the meta data
// include './meta.php';
include 'constants.php'; // Include constants for navigation

// Determine the current page
$page = basename($page ?? '');
// Set a default class if needed
$page_class = $page ? $page : 'default';
// Check if the meta data for the current page exists
if (!isset($meta_data[$page])) {
    // Fallback to a default meta data if the page is not defined
    $page = 'default';
}

// Get the current URL path
$url = trim($_SERVER['REQUEST_URI'], '/');
if ($url === '') {
    $url = '';
} else {
    $url .= '/';
}
?>

<!DOCTYPE html>
<html lang="en-US" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dynamic Meta Tags -->
    <title><?php echo $meta_data[$page]['title'] ?? 'Lumina Nexus'; ?></title>
    <meta name="description" content="<?php echo $meta_data[$page]['description'] ?? ''; ?>">
    <meta name="keywords" content="<?php echo $meta_data[$page]['keywords'] ?? ''; ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($url); ?>" />

    <!-- JSON-LD Schema -->
    <?php echo $meta_data[$page]['schema'] ?? ''; ?>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN for immediate usage) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        outfit: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        indigo: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1', // Primary
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .outfit-font {
            font-family: 'Outfit', sans-serif;
        }
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        .gradient-text {
            background: linear-gradient(90deg, #3730a3 0%, #a855f7 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .blob {
            position: absolute;
            background-blend-mode: multiply;
            filter: blur(90px);
            opacity: 0.5;
            z-index: -10;
        }
        .floating-blob {
            position: absolute;
            border-radius: 50%;
            opacity: 0.6;
            filter: blur(80px);
            z-index: -10;
            animation: float 20s infinite ease-in-out;
        }
        @keyframes float {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .bento-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .bento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <!-- Existing CSS if needed, but Tailwind might override conflict -->
    <!-- <link rel="stylesheet" href="/assets/css/stylesheet.css"> -->

    <!-- Google Tag Manager (from original file) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWWSKYXNZ5"></script>
    <meta name=“google-site-verification” content=“gmNgStlIMkMBk5WiS_o5y5Uaw9q3vdU8dczMv1ROX2w” />
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DWWSKYXNZ5');
    </script>
</head>

<body class="bg-slate-50 text-slate-900">

    <!-- Scripts for Navbar Scroll -->
    <script>
        document.addEventListener('scroll', () => {
            const nav = document.getElementById('main-navbar');
            if (window.scrollY > 20) {
                nav.classList.add('glass', 'py-4', 'shadow-lg');
                nav.classList.remove('py-8');
            } else {
                nav.classList.remove('glass', 'py-4', 'shadow-lg');
                nav.classList.add('py-8');
            }
        });
    </script>

    <nav id="main-navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 py-8">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-tr from-indigo-500 to-pink-500 rounded-xl flex items-center justify-center font-bold text-xl text-white shadow-lg">L</div>
                <span class="text-2xl font-black tracking-tight text-slate-900 outfit-font">LUMINA</span>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex gap-10 items-center">
                <?php foreach ($NAV_LINKS as $link): ?>
                    <a href="<?php echo $link['href']; ?>" class="text-slate-500 hover:text-indigo-600 transition-colors font-semibold text-sm tracking-wide uppercase"><?php echo $link['label']; ?></a>
                <?php endforeach; ?>
                <button class="bg-indigo-600 text-white px-7 py-2.5 rounded-full font-bold text-sm hover:bg-indigo-700 transition-all transform active:scale-95 shadow-xl shadow-indigo-200">Get Started</button>
            </div>

            <!-- Mobile Menu Button (Simple implementation) -->
            <button class="md:hidden text-slate-900" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md absolute top-full left-0 w-full shadow-lg border-t border-slate-100">
            <div class="flex flex-col p-6 space-y-4">
                <?php foreach ($NAV_LINKS as $link): ?>
                    <a href="<?php echo $link['href']; ?>" class="text-slate-600 font-bold text-lg hover:text-indigo-600 block"><?php echo $link['label']; ?></a>
                <?php endforeach; ?>
                <button class="w-full bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700">Get Started</button>
            </div>
        </div>
    </nav>
