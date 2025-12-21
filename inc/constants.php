<?php

$NAV_LINKS = [
    ['label' => 'Home', 'href' => 'index.php'],
    ['label' => 'Servers', 'href' => 'dedicated.php'], // Updated Link
    ['label' => 'Features', 'href' => 'index.php#features'],
    ['label' => 'FAQ', 'href' => 'index.php#faq'],
    ['label' => 'Contact', 'href' => 'index.php#contact'], // Updated to scroll to contact section
];

// Hero Content
$HERO_DATA = [
    'title' => 'Your Content Protected - <span class="gradient-text">Always Fastest.</span> ',
    'subtitle' => 'Offshore servers, 100% anonymous & privacy protection. Ignore DMCA & legal issues. Host what you want with total freedom.',
    'features' => [
        '100% DMCA Ignored Server',
        'High Speed NVMe SSD Hosting',
        'Offshore Privacy Protection',
        'Anonymous Hosting',
        '24/7 Expert Support'
    ]
];

// Why Choose Features
$FEATURES = [
    [
        'id' => '1',
        'title' => '100% DMCA-Ignored Privacy',
        'description' => 'Operate with complete anonymity. We ignore jurisdictional requests and ensure your data remains private.',
        'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />', // Shield
        'gradient' => 'from-indigo-500 via-purple-500 to-pink-500'
    ],
    [
        'id' => '2',
        'title' => 'Unrestricted Content Flexibility',
        'description' => 'Host any legal content—adult, streaming, or video—without fear of takedowns or suspensions.',
        'icon' => '<path d="M13 10V3L4 14h7v7l9-11h-7z" />', // Lightning
        'gradient' => 'from-pink-500 via-rose-500 to-orange-500'
    ],
    [
        'id' => '3',
        'title' => 'Anti-DDoS & Network Hardening',
        'description' => 'Military-grade protection against volumetric attacks to keep your services online 24/7.',
        'icon' => '<path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />', // Lock/Shield
        'gradient' => 'from-blue-400 via-cyan-400 to-teal-400'
    ],
    [
        'id' => '4',
        'title' => 'Full Root Control',
        'description' => 'Take full command of your server environment with complete root access and IPMI/KVM.',
        'icon' => '<path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />', // Code
        'gradient' => 'from-emerald-400 via-green-400 to-lime-400'
    ],
    [
        'id' => '5',
        'title' => '24/7 Human Expert Support',
        'description' => 'Real engineers ready to help you migrate, secure, and optimize your infrastructure.',
        'icon' => '<path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />', // Group
        'gradient' => 'from-orange-400 via-amber-400 to-yellow-400'
    ],
    [
        'id' => '6',
        'title' => 'Free SSL & Setup',
        'description' => 'We handle the complexities. Get free SSL certificates and instant provisioning.',
        'icon' => '<path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />', // Check Circle
        'gradient' => 'from-violet-400 via-purple-400 to-fuchsia-400'
    ]
];

$PRICING_PLANS = [
    [
        'name' => 'Adult Servers',
        'price' => '79.99',
        'subtitle' => 'per Month',
        'description' => 'Optimized for high-traffic adult content.',
        'features' => [
            '100% DMCA Ignored',
            '10 TB Bandwidth',
            '1 Gbps Port Speed',
            'Privacy Protected',
            'Instant Setup',
            'Free Migration'
        ],
        'button_text' => 'Order Now',
        'highlight' => false,
        'has_badge' => false
    ],
    [
        'name' => 'Video Server',
        'price' => '139',
        'subtitle' => 'per Month',
        'description' => 'High storage and streaming capabilities.',
        'features' => [
            'Intel Xeon E5',
            'Storage Optimized',
            'Unmetered Bandwidth',
            '10 Gbps Uplink',
            'Anti-DDoS Pro',
            '24/7 Support'
        ],
        'button_text' => 'Order Now',
        'highlight' => true,
        'has_badge' => true
    ],
    [
        'name' => 'Streaming Server',
        'price' => '249',
        'subtitle' => 'per Month',
        'description' => 'Dedicated power for live streaming.',
        'features' => [
            'Dual Xeon Gold',
            'NVMe Storage Array',
            'Dedicated Resources',
            'GPU Options Available',
            'Low Latency Network',
            'Full Root Access'
        ],
        'button_text' => 'Order Now',
        'highlight' => false,
        'has_badge' => false
    ],
    [
        'name' => 'Need Something Bigger?',
        'price' => 'Contact Us',
        'subtitle' => 'Custom Solutions',
        'description' => 'For enterprise scale and clusters.',
        'features' => [
            'Custom Hardware',
            'Private Racks',
            'Load Balancing',
            'Managed Services',
            'SLA Guarantee',
            'Priority Support'
        ],
        'button_text' => 'Request Quote',
        'highlight' => false,
        'has_badge' => false
    ]
];

$TESTIMONIALS = [
    [
        'quote' => "When we migrated our streaming platform, we needed absolute privacy and zero interference. DMCAQCloud delivered exactly that. The speed is phenomenal.",
        'author' => "Sarah J.",
        'role' => "CTO, StreamOp",
        'stars' => 5
    ],
    [
        'quote' => "I've dealt with so many hosts that claim to be 'offshore' but fold at the first email. These guys are the real deal. Rock solid uptime for 2 years straight.",
        'author' => "Mike R.",
        'role' => "Founder, LibertyNet",
        'stars' => 5
    ],
    [
        'quote' => "Support that actually knows Linux. They helped me optimize my Nginx config at 2 AM. Worth every penny for the peace of mind.",
        'author' => "David K.",
        'role' => "SysAdmin",
        'stars' => 5
    ]
];

$FAQ_ITEMS = [
    [
        'question' => "Will my content ever be taken down due to DMCA?",
        'answer' => "No. We host in jurisdictions that do not recognize DMCA. Your content is safe unless it violates local laws (e.g., CP, Terrorism)."
    ],
    [
        'question' => "Can I run 4K streaming or large file hosting?",
        'answer' => "Absolutely. Our Video and Streaming servers are specifically optimized with high bandwidth ports and NVMe storage for this purpose."
    ],
    [
        'question' => "What if my site gets DDoS attacked?",
        'answer' => "We include up to 500Gbps DDoS protection with all plans. We sanitize traffic before it reaches your server."
    ],
    [
        'question' => "Do I get full control over the server?",
        'answer' => "Yes, you receive full root/administrator access via SSH or RDP/KVM."
    ],
    [
        'question' => "How much does it cost to start?",
        'answer' => "Plans start at $79.99/mo for dedicated resources. We accept Crypto, Credit Cards, and PayPal."
    ],
    [
        'question' => "What if I need help at 3 AM?",
        'answer' => "Our support team operates 24/7/365. We are always online to assist via ticket or live chat."
    ]
];

// DEDICATED HOSTING DATA
$DEDICATED_SERVERS = [
    [
        'cpu_name' => 'AMD Ryzen 5',
        'cpu_detail' => '3600 (6c/12t @ 3.6 GHz)',
        'price' => '79.99',
        'ram' => '32 GB DDR4',
        'storage' => '480 GB NVMe',
        'bandwidth' => '50TB',
        'uplink' => '1Gbps',
    ],
    [
        'cpu_name' => 'AMD Ryzen 7',
        'cpu_detail' => '3700X (8c/16t @ 3.6 GHz)',
        'price' => '159',
        'ram' => '64 GB DDR4',
        'storage' => '960 GB NVMe',
        'bandwidth' => '50TB',
        'uplink' => '1Gbps',
    ],
    [
        'cpu_name' => 'AMD Ryzen 9',
        'cpu_detail' => '7900 (12c/24t @ 3.7 - 5.4 GHz)',
        'price' => '229',
        'ram' => '128 GB DDR5',
        'storage' => '1.92 TB NVMe',
        'bandwidth' => '50TB',
        'uplink' => '1Gbps',
    ],
    [
        'cpu_name' => 'AMD EPYC 7402P',
        'cpu_detail' => '(24c/48t @ 2.8 - 3.35 GHz)',
        'price' => '249',
        'ram' => '128 GB DDR4',
        'storage' => '960 GB NVMe',
        'bandwidth' => '100TB',
        'uplink' => '1Gbps',
    ],
    [
        'cpu_name' => 'AMD EPYC 7443P',
        'cpu_detail' => '(24c/48t @ 2.85 - 4.0 GHz)',
        'price' => '349',
        'ram' => '256 GB DDR4',
        'storage' => '1.92 TB NVMe',
        'bandwidth' => '100TB',
        'uplink' => '1Gbps',
    ],
    [
        'cpu_name' => 'AMD EPYC 9654P',
        'cpu_detail' => '(24c/48t @ 2.85 - 4.0 GHz)',
        'price' => '1899',
        'ram' => '512 GB DDR5',
        'storage' => '2 x 960 GB NVME',
        'bandwidth' => '330TB',
        'uplink' => '10 Gbps',
    ],
    [
        'cpu_name' => 'Intel Xeon E5-2683 v4',
        'cpu_detail' => '',
        'price' => '149',
        'ram' => '128 GB DDR4',
        'storage' => '960 GB SSD',
        'bandwidth' => '50TB',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Intel Xeon E3-1230',
        'cpu_detail' => '',
        'price' => '139',
        'ram' => '16GB DDR3-1333',
        'storage' => '2 x 1 TB SATA or SSD',
        'bandwidth' => '100 TB',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Intel Xeon E3-1230v6',
        'cpu_detail' => '',
        'price' => '189',
        'ram' => '32 or 64 GB DDR4',
        'storage' => '2 x 480 GB SSD',
        'bandwidth' => '100 TB',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Intel Xeon E-2334G',
        'cpu_detail' => '',
        'price' => '249',
        'ram' => 'Up to 128 GB DDR4',
        'storage' => '960 GB NVMe',
        'bandwidth' => 'Unlimited',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Intel Xeon E3-1280v6',
        'cpu_detail' => '',
        'price' => '299',
        'ram' => '32 or 64 GB DDR4',
        'storage' => '2 x 500 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Intel Xeon E-2356G',
        'cpu_detail' => '',
        'price' => '329',
        'ram' => 'Up to 128 GB DDR4',
        'storage' => '960 GB NVMe',
        'bandwidth' => 'Unlimited',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Intel Xeon E-2388G',
        'cpu_detail' => '',
        'price' => '369',
        'ram' => 'Up to 128 GB DDR4',
        'storage' => '960 GB NVMe',
        'bandwidth' => 'Unlimited',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Xeon E5-2680v4',
        'cpu_detail' => '',
        'price' => '399',
        'ram' => '128 GB DDR4',
        'storage' => '2 x 512 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Xeon E5-2680v4',
        'cpu_detail' => '(Upgrade)',
        'price' => '499',
        'ram' => '128 GB DDR4',
        'storage' => '2 x 512 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '2 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Gold 6138',
        'cpu_detail' => '',
        'price' => '599',
        'ram' => '128 GB DDR4',
        'storage' => '960 GB NVMe',
        'bandwidth' => 'Unlimited',
        'uplink' => '1 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Xeon E5-2620v4',
        'cpu_detail' => '',
        'price' => '899',
        'ram' => '128 GB DDR4',
        'storage' => '6 x 10 TB SATA',
        'bandwidth' => 'Unlimited',
        'uplink' => '2 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Xeon E5-2620v2',
        'cpu_detail' => '',
        'price' => '1299',
        'ram' => '112 GB DDR3',
        'storage' => '2 x 500 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '5 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Xeon E5-2620v4',
        'cpu_detail' => 'High Uplink',
        'price' => '1499',
        'ram' => '128 GB DDR4',
        'storage' => '960 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '5 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Xeon E5-2620v2',
        'cpu_detail' => '10Gbps',
        'price' => '2049',
        'ram' => '128 GB DDR3',
        'storage' => '2 x 256 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '10 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Xeon E5-2620v4',
        'cpu_detail' => '10Gbps',
        'price' => '2399',
        'ram' => '128 GB DDR4',
        'storage' => '960 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '10 Gbps',
    ],
    [
        'cpu_name' => 'Dual Intel Gold 6138',
        'cpu_detail' => '10Gbps',
        'price' => '2599',
        'ram' => '128 GB DDR4',
        'storage' => '960 GB SSD',
        'bandwidth' => 'Unlimited',
        'uplink' => '10 Gbps',
    ]
];

$USE_CASES = [
    ['icon' => 'fa-copyright', 'title' => 'Hosting Copyright-Sensitive Projects', 'desc' => 'Stay live without fear of DMCA takedowns. Our Netherlands-based offshore servers protect your creative or media content.'],
    ['icon' => 'fa-video', 'title' => 'Adult & High-Traffic Entertainment', 'desc' => 'Power adult and video streaming sites with high bandwidth, fast SSD performance, and complete DMCA freedom.'],
    ['icon' => 'fa-play-circle', 'title' => 'Video Streaming & File Hosting', 'desc' => 'Deliver HD video and large files globally with blazing-fast transfer speeds and uninterrupted uptime.'],
    ['icon' => 'fa-database', 'title' => 'Secure Offshore Data Backup', 'desc' => 'Store business or personal data safely offshore with end-to-end encryption and total privacy.'],
    ['icon' => 'fa-user-secret', 'title' => 'Proxy, VPN & Anonymity Solutions', 'desc' => 'Host privacy-centric VPN or proxy infrastructures to ensure secure connections and anonymous online activity.'],
    ['icon' => 'fa-bitcoin', 'title' => 'Cryptocurrency & Blockchain Projects', 'desc' => 'Run blockchain nodes, exchanges, or crypto services securely with ultra-stable offshore dedicated servers.'],
    ['icon' => 'fa-search', 'title' => 'SEO, Crawling & Automation Tools', 'desc' => 'Deploy SEO bots, analytics crawlers, and marketing automation software privately without interruptions.'],
    ['icon' => 'fa-gamepad', 'title' => 'Gaming & App Hosting', 'desc' => 'Host private gaming servers or app backends with full control, high bandwidth, and zero restrictions.'],
    ['icon' => 'fa-comments', 'title' => 'Anonymous Business & Communication', 'desc' => 'Operate communication platforms or business tools securely offshore, keeping your operations private.']
];
