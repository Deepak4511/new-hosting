<?php
$PAGE_TITLE = "About DMCAQloud - Professional DMCA-Tolerant Hosting";
include './inc/navbar.php';
?>

<style>
    .bg-dmca-light {
        background-color: #fdf4ff;
    }

    .text-dmca-dark {
        color: #301934;
    }

    .text-dmca-bright {
        color: #bf40bf;
    }

    .bg-dmca-dark {
        background-color: #301934;
    }

    .bg-dmca-bright {
        background-color: #bf40bf;
    }

    .border-dmca-bright {
        border-color: #bf40bf;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #301934 0%, #4a264e 100%);
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spin-reverse-slow {
        from {
            transform: rotate(360deg);
        }

        to {
            transform: rotate(0deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }

    .animate-spin-reverse-slow {
        animation: spin-reverse-slow 15s linear infinite;
    }
</style>

<main class="flex-grow">
    <!-- Hero -->
    <div class="relative overflow-hidden bg-dmca-light pt-20 pb-24 md:pt-32 md:pb-40">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-dmca-bright/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-dmca-bright/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-dmca-bright/10 text-dmca-bright font-bold text-xs uppercase tracking-widest mb-6">
                    <span class="mr-2">●</span> About DMCAQloud.com
                </div>
                <h1 class="text-5xl md:text-7xl font-black text-dmca-dark mb-8 leading-[1.1]">
                    Privacy. Freedom. <br />
                    <span class="text-dmca-bright">Reliability.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-2xl mx-auto">
                    DMCAQloud is a professional DMCA-tolerant hosting provider delivering secure, high-performance server solutions for privacy-focused and high-risk online projects.
                </p>
                <div class="mt-12 flex flex-wrap justify-center gap-4">
                    <button class="bg-dmca-dark text-white px-10 py-4 rounded-xl text-lg font-bold hover:bg-opacity-90 transition-all shadow-xl shadow-dmca-dark/30">
                        Get Started
                    </button>
                    <button class="bg-white text-dmca-dark border-2 border-gray-100 px-10 py-4 rounded-xl text-lg font-bold hover:border-dmca-bright transition-all">
                        View Plans
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Company Overview -->
    <section id="overview" class="py-24 md:py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-black mb-6 text-dmca-dark">Company Overview</h2>
                <p class="text-lg text-gray-500 font-medium">Empowering businesses to operate with confidence, stability, and discretion through specialized offshore infrastructure.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                <?php
                $overview_items = [
                    ['icon' => "fa-server", 'title' => "Specialized Infrastructure", 'text' => "Focused on DMCA-tolerant dedicated servers for high-risk projects."],
                    ['icon' => "fa-globe", 'title' => "Offshore Locations", 'text' => "Privacy-friendly server locations strategically chosen for digital freedom."],
                    ['icon' => "fa-shield-halved", 'title' => "Niche Focused", 'text' => "Designed for content-intensive and compliance-sensitive digital operations."],
                    ['icon' => "fa-brain", 'title' => "Expert Backed", 'text' => "Years of hands-on experience in secure hosting environments and compliance."]
                ];
                foreach ($overview_items as $item): ?>
                    <div class="p-8 border border-gray-100 rounded-2xl hover:shadow-xl transition-all duration-300 group hover:-translate-y-1">
                        <div class="w-14 h-14 bg-dmca-light rounded-xl flex items-center justify-center mb-6 text-dmca-bright group-hover:scale-110 transition-transform">
                            <i class="fa-solid <?php echo $item['icon']; ?> text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3"><?php echo $item['title']; ?></h3>
                        <p class="text-gray-600 leading-relaxed"><?php echo $item['text']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Feature Grid (Core Services) -->
    <section class="py-24 bg-dmca-dark text-white overflow-hidden relative">
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div class="max-w-xl">
                    <h2 class="text-4xl font-black mb-6">Our Core Services</h2>
                    <p class="text-gray-400 text-lg">Powerful infrastructure built for serious projects that demand stability, privacy, and control.</p>
                </div>
                <button class="bg-dmca-bright text-white px-8 py-3 rounded-xl font-bold hover:brightness-110 transition-all">
                    See All Specifications
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $services = [
                    ['title' => "DMCA-Tolerant Dedicated Servers", 'desc' => "Enterprise-grade hardware with SSD / NVMe storage for maximum throughput.", 'icon' => "fa-microchip"],
                    ['title' => "High-Bandwidth Network", 'desc' => "Optimized routing with 1 Gbps to 10 Gbps uplinks for seamless streaming.", 'icon' => "fa-bolt"],
                    ['title' => "Fully Customizable Configs", 'desc' => "Tailor your server infrastructure exactly to your project's unique requirements.", 'icon' => "fa-puzzle-piece"],
                    ['title' => "Scalable Infrastructure", 'desc' => "Easily upgrade your resources as your platform grows without downtime.", 'icon' => "fa-arrow-trend-up"]
                ];
                foreach ($services as $service): ?>
                    <div class="glass-card p-8 rounded-3xl group">
                        <div class="w-12 h-12 bg-dmca-bright/20 rounded-xl flex items-center justify-center text-dmca-bright mb-6 group-hover:bg-dmca-bright group-hover:text-white transition-all">
                            <i class="fa-solid <?php echo $service['icon']; ?> text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4"><?php echo $service['title']; ?></h3>
                        <p class="text-gray-400 text-sm leading-relaxed"><?php echo $service['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Decorative Background Icon -->
        <i class="fa-solid fa-server absolute -right-20 -bottom-20 text-[25rem] text-white/5 pointer-events-none"></i>
    </section>

    <!-- Compliance Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 bg-dmca-bright blur-3xl opacity-10 rounded-full"></div>
                        <img
                            src="https://picsum.photos/id/160/800/600"
                            alt="Secure Operations"
                            class="relative rounded-3xl shadow-2xl border-8 border-white" />
                        <div class="absolute -bottom-8 -right-8 bg-dmca-dark text-white p-8 rounded-3xl shadow-xl max-w-xs hidden md:block">
                            <i class="fa-solid fa-gavel text-3xl text-dmca-bright mb-4"></i>
                            <h4 class="font-bold text-lg mb-2">Fair Use Validation</h4>
                            <p class="text-sm text-gray-400">Abuse reports are reviewed manually and fairly. No instant suspensions without validation.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-4xl md:text-5xl font-black text-dmca-dark mb-8">DMCA & Compliance Handling</h2>
                    <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                        We operate in carefully selected jurisdictions where DMCA notices are not automatically enforced, providing you with the operational freedom your project needs.
                    </p>

                    <div class="space-y-6">
                        <?php
                        $compliance_items = [
                            ['title' => "Offshore Jurisdictions", 'desc' => "Servers hosted in privacy-friendly legal zones.", 'icon' => "fa-landmark"],
                            ['title' => "Operational Confidentiality", 'desc' => "Strong emphasis on client privacy and data protection.", 'icon' => "fa-user-secret"],
                            ['title' => "Manual Review Process", 'desc' => "Expert assessment of every abuse report received.", 'icon' => "fa-eye"]
                        ];
                        foreach ($compliance_items as $item): ?>
                            <div class="flex gap-5">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-dmca-light flex items-center justify-center text-dmca-bright">
                                    <i class="fa-solid <?php echo $item['icon']; ?>"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-1"><?php echo $item['title']; ?></h4>
                                    <p class="text-gray-500"><?php echo $item['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Highlight -->
    <section class="py-24 bg-dmca-light relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2 order-2 lg:order-1">
                    <h2 class="text-4xl md:text-5xl font-black text-dmca-dark mb-6">Premium Locations: <span class="text-dmca-bright">Netherlands</span></h2>
                    <p class="text-xl text-gray-600 mb-8 font-medium">Amsterdam – The heart of European digital connectivity.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <?php
                        $location_feats = [
                            "Privacy-Friendly Laws",
                            "Tier-3 Data Centers",
                            "Low Latency to Europe",
                            "100+ Gbps Network Backbone",
                            "DMCA-Resistant Policies",
                            "24/7 Physical Security"
                        ];
                        foreach ($location_feats as $feat): ?>
                            <div class="flex items-center gap-3 bg-white p-4 rounded-xl border border-gray-100 shadow-sm">
                                <i class="fa-solid fa-circle-check text-dmca-bright"></i>
                                <span class="font-semibold text-dmca-dark"><?php echo $feat; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="text-gray-500 leading-relaxed italic">
                        "Our Amsterdam facility is chosen specifically for its robust legal framework regarding hosting services and its world-class peering capabilities, making it the perfect hub for media and high-traffic platforms."
                    </p>
                </div>

                <div class="w-full lg:w-1/2 order-1 lg:order-2">
                    <div class="relative group">
                        <!-- Map Illustration Placeholder -->
                        <div class="w-full aspect-square bg-white rounded-full p-8 shadow-inner flex items-center justify-center border-8 border-white">
                            <div class="text-center">
                                <i class="fa-solid fa-location-dot text-7xl text-dmca-bright mb-4 animate-bounce"></i>
                                <div class="text-2xl font-black text-dmca-dark">Amsterdam</div>
                                <div class="text-dmca-bright font-bold uppercase tracking-widest text-sm">Active Hub</div>
                            </div>
                            <!-- Visual "Connections" -->
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                <div class="w-[80%] h-[80%] border-2 border-dashed border-dmca-bright/20 rounded-full animate-spin-slow"></div>
                                <div class="absolute w-[60%] h-[60%] border border-dashed border-dmca-bright/10 rounded-full animate-spin-reverse-slow"></div>
                            </div>
                        </div>

                        <!-- Overlay Stat -->
                        <div class="absolute top-4 right-4 bg-dmca-dark text-white px-6 py-4 rounded-2xl shadow-xl">
                            <div class="text-2xl font-bold">99.99%</div>
                            <div class="text-xs text-gray-400 font-bold uppercase">Uptime Guarantee</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-4xl md:text-5xl font-black text-dmca-dark mb-6">Industries & Use Cases</h2>
                <p class="text-lg text-gray-500">Tailored infrastructure for the web's most demanding niches.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $useCases = [
                    ['title' => "Streaming & Media", 'icon' => "fa-clapperboard", 'desc' => "Optimized for massive throughput and high-concurrency viewing."],
                    ['title' => "File-Hosting", 'icon' => "fa-folder-open", 'desc' => "Reliable storage solutions for massive download and upload volumes."],
                    ['title' => "SaaS Developers", 'icon' => "fa-code", 'desc' => "Stable environments for building and deploying complex cloud applications."],
                    ['title' => "Resellers", 'icon' => "fa-users", 'desc' => "Wholesale infrastructure ready for your own client base."],
                    ['title' => "High-Risk Business", 'icon' => "fa-globe", 'desc' => "Privacy-centric operations for businesses in sensitive niches."],
                    ['title' => "Tech Startups", 'icon' => "fa-rocket", 'desc' => "Scalable power for projects requiring operational freedom and reliability."]
                ];
                foreach ($useCases as $useCase): ?>
                    <div class="group p-8 bg-white border-2 border-gray-50 rounded-3xl hover:border-dmca-bright transition-all duration-300">
                        <div class="w-14 h-14 bg-dmca-light rounded-2xl flex items-center justify-center text-dmca-bright mb-6 group-hover:bg-dmca-bright group-hover:text-white transition-all">
                            <i class="fa-solid <?php echo $useCase['icon']; ?> text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dmca-dark mb-3"><?php echo $useCase['title']; ?></h3>
                        <p class="text-gray-500 leading-relaxed"><?php echo $useCase['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Payment & Billing -->
    <section class="py-24 md:py-32 bg-dmca-light">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-black mb-6 text-dmca-dark">Payment & Billing</h2>
                <p class="text-lg text-gray-500 font-medium">We believe in financial privacy as a core component of your digital independence.</p>
            </div>

            <div class="max-w-4xl mx-auto mt-12 bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-dmca-bright/10 flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/3 flex justify-center">
                    <div class="w-32 h-32 md:w-48 md:h-48 bg-dmca-bright rounded-full flex items-center justify-center text-white shadow-lg shadow-dmca-bright/20">
                        <i class="fa-brands fa-bitcoin text-6xl md:text-8xl"></i>
                    </div>
                </div>
                <div class="w-full md:w-2/3">
                    <h3 class="text-2xl font-bold mb-6">Cryptocurrency & Privacy First</h3>
                    <ul class="space-y-4">
                        <?php
                        $payment_features = [
                            "Full support for Bitcoin and major altcoins",
                            "Secure, private, and borderless transactions",
                            "Ideal for international clients and offshore businesses",
                            "Reduced dependency on traditional banking systems"
                        ];
                        foreach ($payment_features as $li): ?>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-dmca-bright mt-1"></i>
                                <span class="text-gray-700 font-medium"><?php echo $li; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="gradient-bg rounded-[3rem] p-12 md:p-20 text-white text-center relative overflow-hidden">
                <!-- Abstract background shapes -->
                <div class="absolute top-0 left-0 w-64 h-64 bg-dmca-bright/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-2xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-dmca-bright/20 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>

                <div class="relative z-10 max-w-4xl mx-auto">
                    <h2 class="text-4xl md:text-6xl font-black mb-8 leading-tight">
                        Looking for a hosting partner that understands your niche?
                    </h2>
                    <p class="text-xl md:text-2xl text-white/80 mb-12">
                        DMCAQloud.com is built for serious projects that demand stability, privacy, and control.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-12">
                        <?php
                        $contact_methods = [
                            // ['title' => "Live Chat", 'icon' => "fa-comments", 'color' => "bg-dmca-dark"],
                            ['title' => "Email Support", 'icon' => "fa-envelope", 'color' => "bg-dmca-bright", 'link' => "mailto:support@dmcaqloud.com"],
                            ['title' => "Telegram", 'icon' => "fa-paper-plane", 'color' => "bg-[#24A1DE]", 'link' => "https://t.me/Dmcaqloud"]
                        ];
                        foreach ($contact_methods as $method): ?>
                            <a href="<?php echo $method['link']; ?>" target="_blank" class="<?php echo $method['color']; ?> p-6 rounded-2xl shadow-xl hover:-translate-y-1 transition-all flex flex-col items-center gap-3">
                                <i class="fa-solid <?php echo $method['icon']; ?> text-2xl"></i>
                                <span class="font-bold"><?php echo $method['title']; ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <p class="text-white/60 font-medium">
                        Our 24/7 team is ready to assist with pre-sales questions or technical challenges.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include './inc/footer.php'; ?>