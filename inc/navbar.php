<?php
// Include the meta data
include_once __DIR__ . '/meta.php';
// Include constants here to ensure variables are available
include_once __DIR__ . '/constants.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_data[basename($_SERVER['PHP_SELF'])]['title'] ?? $meta_data['default']['title']; ?></title>
    <meta name="description" content="<?php echo $meta_data[basename($_SERVER['PHP_SELF'])]['description'] ?? $meta_data['default']['description']; ?>">
    <meta name="keywords" content="<?php echo $meta_data[basename($_SERVER['PHP_SELF'])]['keywords'] ?? $meta_data['default']['keywords']; ?>">

    <link rel="canonical" href="https://hostimakers.online/<?php echo htmlspecialchars($url); ?>" />

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- TailWind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wine: '#702963', // Primary (Byzantium)
                        'red-purple': '#BF40BF', // Accent (Orchid/Bright Purple)
                        thistle: '#E0B0FF', // Lighter Lavender (Derived closest to palette or kept soft) - USER said ONLY these colors.
                        // Actually user said "use only these colors".
                        // #301934, #702963, #BF40BF
                        // So I will map strictly:
                        primary: '#702963',
                        highlight: '#BF40BF',
                        dark: '#301934',
                        // Keep backwards compatibility keys but map them to the 3 colors
                        wine: '#702963',
                        'red-purple': '#BF40BF',
                        thistle: '#BF40BF', // Using the bright purple for light accents might be too strong, but user insisted.
                        'deep-purple': '#301934',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        .floating-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            z-index: -1;
            animation: float 10s infinite ease-in-out;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-20px, 20px);
            }
        }

        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(191, 64, 191, 0.2);
        }

        /* Navbar Glassmorphism */
        .navbar-glass {
            background: rgba(253, 248, 243, 0.85);
            /* Matches Hero #FDF8F3 */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(112, 41, 99, 0.05);
        }

        .nav-link {
            position: relative;
            font-weight: 600;
            color: #301934;
            /* Deep Purple instead of Slate */
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #BF40BF;
            /* Bright Purple */
        }

        /* Active Link State */
        .nav-link.active {
            color: #702963;
            /* Main Wine/Purple */
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #BF40BF;
            border-radius: 2px;
        }

        .gradient-text {
            background: linear-gradient(90deg, #301934 0%, #BF40BF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="bg-slate-50 text-deep-purple antialiased overflow-x-hidden">

    <!-- Fixed Navbar -->
    <nav class="fixed w-full z-50 navbar-glass px-6 py-4 transition-all duration-300" id="mainHeader">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-2 group z-50 relative">
                <img src="assets/img/logo.webp" alt="Logo" class="w-45 h-10 object-contain">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-8">
                <ul class="flex items-center gap-8">
                    <?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                    foreach ($NAV_LINKS as $link):
                        $activeClass = ($current_page == $link['href']) ? 'active' : '';
                    ?>
                        <li>
                            <a href="<?php echo $link['href']; ?>" class="nav-link text-sm uppercase tracking-wide <?php echo $activeClass; ?>">
                                <?php echo $link['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Desktop CTA -->
            <div class="hidden lg:flex items-center gap-4">
                <a href="https://pos.dmcaqloud.com/clientarea.php" class="text-slate-600 font-bold hover:text-wine transition-colors text-sm">Login</a>
                <a href="https://pos.dmcaqloud.com/register.php" class="bg-wine hover:bg-red-purple text-white px-6 py-2.5 rounded-xl font-bold transition-all shadow-md shadow-wine/20 text-sm transform hover:scale-105">
                    Sign Up
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-white text-2xl focus:outline-none z-50 relative" id="mobileMenuBtn" onclick="toggleMobileMenu()">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Offcanvas Sidebar -->
    <div id="mobileOffcanvas" class="fixed inset-y-0 left-0 w-80 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out z-[60] flex flex-col h-full lg:hidden">
        <!-- Header -->
        <div class="p-6 flex items-center justify-between border-b border-white/10">
            <span class="text-xl font-black text-slate-800 tracking-tight">DMCA<span class="text-red-purple">Q</span>Cloud</span>
            <button class="text-slate-400 hover:text-wine transition-colors text-xl" onclick="toggleMobileMenu()">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Links -->
        <div class="p-6 flex-1 overflow-y-auto">
            <ul class="space-y-4">
                <?php foreach ($NAV_LINKS as $link): ?>
                    <li>
                        <a href="<?php echo $link['href']; ?>" class="block px-4 py-3 rounded-xl hover:bg-wine/5 text-slate-600 font-bold hover:text-wine transition-all">
                            <?php echo $link['label']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Footer CTA -->
        <div class="p-6 border-t border-slate-100 bg-slate-50">
            <a href="#" class="block w-full bg-wine text-white text-center py-3 rounded-xl font-bold shadow-md mb-4 hover:bg-red-purple transition-colors">
                Client Area
            </a>
            <a href="#" class="block w-full bg-white border border-slate-200 text-slate-600 text-center py-3 rounded-xl font-bold hover:border-wine hover:text-wine transition-colors">
                Login
            </a>
        </div>
    </div>


    <!-- Backdrop -->
    <div id="mobileBackdrop" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 z-[55] lg:hidden" onclick="toggleMobileMenu()"></div>

    <script>
        function toggleMobileMenu() {
            const offcanvas = document.getElementById('mobileOffcanvas');
            const backdrop = document.getElementById('mobileBackdrop');
            const btnIcon = document.querySelector('#mobileMenuBtn i');

            // Check if open (translate-x-0 means open otherwise it is -translate-x-full)
            if (offcanvas.classList.contains('-translate-x-full')) {
                // Open
                offcanvas.classList.remove('-translate-x-full');
                backdrop.classList.remove('opacity-0', 'pointer-events-none');
            } else {
                // Close
                offcanvas.classList.add('-translate-x-full');
                backdrop.classList.add('opacity-0', 'pointer-events-none');
            }
        }
    </script>