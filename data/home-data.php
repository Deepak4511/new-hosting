<?php

$PAGE_TITLE = "DMCA Ignored Hosting – DMCAQCloud";

/* HERO */
$HERO_DATA = [
    'title' => 'Your Content Protected <span class="gradient-text">Always. Fastest.</span>',
    'subtitle' => 'Offshore servers built for creators who demand privacy & power. Instant VPS setup + clear delivery for Dedicated. Support whenever you need. No vague promises.',
    'features' => [
        '100% DMCA Ignored Servers',
        'Blazing Fast NVMe SSD Hosting',
        'Offshore Privacy Protection',
        'Anonymous Hosting',
        '24/7 Expert Support'
    ],
    'cta' => 'Get Started'
];



$PRICING_PLANS = [
    [
        'name' => 'Adult Servers',
        'price' => '139',
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
        'button_link' => 'dedicated.php',
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
        'button_link' => 'video-server.php',
        'highlight' => true,
        'has_badge' => true
    ],
    [
        'name' => 'Streaming Server',
        'price' => '149',
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
        'button_link' => 'streaming-server.php',
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
        'button_link' => 'contact-us.php',
        'highlight' => false,
        'has_badge' => false
    ]
];

// Why Choose Features
$FEATURES = [
    [
        'id' => '1',
        'title' => '100% DMCA-Ignored Privacy',
        'description' => 'Operate with complete anonymity. Offshore jurisdiction + encrypted infrastructure ensures zero traceability and full DMCA immunity for your content.',
        'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />', // Shield
        'gradient' => 'from-deep-purple via-wine to-deep-purple'
    ],
    [
        'id' => '2',
        'title' => 'Unrestricted Content Flexibility',
        'description' => 'Host any legal content adult, streaming, file lockers, or warez without fear of takedowns. No compliance, no interruptions.',
        'icon' => '<path d="M13 10V3L4 14h7v7l9-11h-7z" />', // Lightning
        'gradient' => 'from-wine via-red-purple to-wine'
    ],
    [
        'id' => '3',
        'title' => 'Anti-DDoS & Network Hardening',
        'description' => 'Military-grade protection with real-time DDoS mitigation, multi-layer firewalls, and 99.99% uptime SLA your site stays online, always.',
        'icon' => '<path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />', // Lock/Shield
        'gradient' => 'from-deep-purple to-red-purple'
    ],
    [
        'id' => '4',
        'title' => 'Full Root Control',
        'description' => 'Total server dominance install custom software, configure OS, and scale resources on-demand with unrestricted root access.',
        'icon' => '<path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />', // Code
        'gradient' => 'from-wine to-deep-purple'
    ],
    [
        'id' => '5',
        'title' => '24/7 Human Expert Support',
        'description' => 'Auto-installed Let’s Encrypt SSL on every domain secure connections, HTTPS by default, and Google ranking boost included.',
        'icon' => '<path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />', // Group
        'gradient' => 'from-red-purple via-wine to-deep-purple'
    ],
    [
        'id' => '6',
        'title' => 'Free SSL & Setup',
        'description' => 'Vivamus elementum semper nisiaene an vulputate eleifend tellus.',
        'icon' => '<path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />', // Check Circle
        'gradient' => 'from-deep-purple via-red-purple to-wine'
    ]
];

/* FAQ */
$FAQ_ITEMS = [
    [
        'question' => "Will my content ever be taken down due to DMCA?",
        'answer' => "Never. We operate under full DMCA immunity in offshore jurisdictions. No forwarding, no compliance your files and links stay permanently online."
    ],
    [
        'question' => "Can I run 4K streaming or large file hosting?",
        'answer' => "Yes unlimited bandwidth + NVMe SSD. High-speed 1Gbps+ ports and optimized storage handle 10K+ concurrent users smoothly."
    ],
    [
        'question' => "What if my site gets DDoS attacked?",
        'answer' => "Protected 24/7 — free Anti-DDoS up to 10Gbps. Real-time mitigation + cloud firewall keeps your site up even during heavy attacks."
    ],
    [
        'question' => "Do I get full control over the server?",
        'answer' => "100% root access — VPS & Dedicated. Install Yetishare, WordPress, UNIT3D, custom scrapers your server, your rules."
    ],
    [
        'question' => "How much does it cost to start?",
        'answer' => " $79.99/month (Dedicated). No contracts, crypto payments accepted, free migration."
    ],
    [
        'question' => "What if I need help at 3 AM?",
        'answer' => "24/7 human support live chat & ticket."
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
