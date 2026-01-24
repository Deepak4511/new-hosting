<?php
include './inc/navbar.php';
include './data/home-data.php';
$page = 'home';
// Home page logic is inline below

?>

<!-- Background Decor -->
<div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
    <div class="floating-blob w-[600px] h-[600px] bg-deep-purple/5 top-[-15%] left-[-10%] opacity-50"></div>
    <div class="floating-blob w-[700px] h-[700px] bg-red-purple/5 bottom-[5%] right-[-15%] [animation-delay:4s] opacity-50"></div>
    <svg class="absolute top-0 left-0 w-full h-full opacity-[0.2]" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#BF40BF" stroke-width="1" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid-pattern)" />
    </svg>
</div>

<main>
    <!-- Hero Section -->
    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-32 px-6 min-h-[85vh] flex items-center overflow-hidden bg-gradient-to-br from-wine/10 via-white to-red-purple/10" style="--c: 80px; mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000); -webkit-mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000);">
        <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Left Side: Content -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-wine/10 bg-white/80 text-deep-purple text-sm font-bold mb-8 shadow-sm backdrop-blur-md mx-auto lg:mx-0">
                    <span class="flex h-2 w-2 rounded-full bg-red-purple animate-pulse"></span>
                    Total Privacy Freedom
                </div>

                <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight text-deep-purple">
                    <?php echo $HERO_DATA['title']; ?>
                </h1>

                <p class="text-slate-600 text-xl mb-8 leading-relaxed font-medium max-w-2xl mx-auto lg:mx-0">
                    <?php echo $HERO_DATA['subtitle']; ?>
                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-2 mb-10">
                    <?php foreach ($HERO_DATA['features'] as $feat): ?>
                        <div class="flex items-center gap-2  px-4 py-2 text-wine text-sm font-bold">
                            <i class="fas fa-check-circle text-red-purple"></i>
                            <?php echo $feat; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#pricing" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/20 hover:-translate-y-1">
                        Get Started
                    </a>
                    <a href="" class="bg-white border border-slate-200 hover:bg-slate-50 px-8 py-4 rounded-xl font-bold text-lg transition-all text-slate-700 shadow-sm hover:-translate-y-1">
                        View Plans
                    </a>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="relative hidden lg:block">
                <!-- <div class="absolute -inset-4 bg-gradient-to-r from-red-purple/20 to-wine/20 rounded-full blur-3xl opacity-30 animate-pulse"></div> -->
                <img src="assets/img/dmca-hero-img.png" alt="Cloud Hosting Infrastructure" class="relative w-full h-auto object-contain transition-transform duration-500" />
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-24 px-6 relative w-full max-w-[1600px] mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-4xl md:text-5xl font-black mb-6 text-deep-purple">Affordable DMCA Ignored Hosting Plans Built for Freedom</h2>
            <p class="text-slate-500 text-lg font-medium">Experience top-tier offshore hosting with complete privacy, speed, and data protection starting at just $79.99/month.</p>
        </div>

        <div class="relative flex flex-col xl:flex-row justify-center items-start gap-6 z-10">
            <!-- Illustration Left -->
            <div class="hidden 2xl:block absolute left-0 bottom-0 w-64 pointer-events-none -translate-x-4 translate-y-12">
                <img src="/assets/img/pricing_woman_laptop.png" alt="Woman with laptop" class="w-full h-auto object-contain drop-shadow-xl" />
            </div>

            <!-- Pricing Cards -->
            <div class="flex flex-wrap justify-center gap-6 w-full px-4">
                <?php foreach ($PRICING_PLANS as $index => $plan):
                    $isRec = $plan['highlight'];
                    $cardBase = "flex-1 min-w-[280px] max-w-[360px] rounded-2xl p-8 border shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center relative hover:-translate-y-2";
                    $bgClass = $isRec ? 'bg-wine/5 border-wine/20 shadow-md' : 'bg-white border-slate-100';
                    $btnClass = $isRec ? 'bg-wine text-white hover:bg-wine/90 shadow-wine/20' : 'bg-white border-2 border-slate-200 text-wine hover:border-wine/30 hover:bg-wine/5';

                    // Handle 'Contact Us' or numeric price
                    // Apply 1 Year Discount logic (10% off) directly
                    $basePrice = is_numeric($plan['price']) ? ($plan['price']) : 0;
                    // Format to 2 decimal places if it's a float, or just clean integer if .00 (but usually prices are like 79.99 -> 99)
                    if (is_numeric($basePrice)) $basePrice = number_format($basePrice, 2);

                    $isContact = !is_numeric($plan['price']);
                ?>
                    <div class="<?php echo $cardBase . ' ' . $bgClass; ?>">
                        <h3 class="text-xl font-black text-deep-purple mb-2"><?php echo $plan['name']; ?></h3>

                        <div class="flex items-baseline gap-1 my-4 min-h-[4rem] justify-center">
                            <?php if (!$isContact): ?>
                                <span class="text-sm font-bold text-slate-500">$</span>
                                <span class="text-5xl font-black text-deep-purple tracking-tighter"><?php echo $basePrice; ?></span>
                                <span class="price-period text-xs font-bold text-slate-400">/mo</span>
                            <?php else: ?>
                                <span class="text-3xl font-black text-deep-purple tracking-tighter my-auto">Contact Us</span>
                            <?php endif; ?>
                        </div>

                        <!-- Subtitle/Billing Cycle Badge -->
                        <?php if (!$isContact): ?>

                        <?php else: ?>
                            <?php if (isset($plan['subtitle'])): ?>
                                <p class="text-wine/70 text-xs font-bold uppercase tracking-wide mb-6"><?php echo $plan['subtitle']; ?></p>
                            <?php endif; ?>
                        <?php endif; ?>

                        <p class="text-slate-500 text-sm mb-8 leading-relaxed px-2 min-h-[3rem]"><?php echo $plan['description']; ?></p>

                        <ul class="space-y-3 mb-8 w-full text-left px-2">
                            <?php foreach ($plan['features'] as $feat): ?>
                                <li class="flex items-start gap-3">
                                    <span class="text-red-purple mt-0.5"><i class="fas fa-check text-xs"></i></span>
                                    <span class="text-slate-600 text-sm font-semibold"><?php echo $feat; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <?php if (isset($plan['button_link']) && !empty($plan['button_link'])): ?>
                            <a href="<?php echo $plan['button_link']; ?>" class="mt-auto w-full text-center py-3 rounded-xl font-bold text-sm transition-all shadow-sm inline-block <?php echo $btnClass; ?>">
                                <?php echo $plan['button_text']; ?>
                            </a>
                        <?php else: ?>
                            <button class="mt-auto w-full py-3 rounded-xl font-bold text-sm transition-all shadow-sm <?php echo $btnClass; ?>">
                                <?php echo $plan['button_text']; ?>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Illustration Right -->
            <div class="hidden 2xl:block absolute right-0 bottom-0 top-20 w-56 pointer-events-none translate-x-4 translate-y-12 flex items-end">
                <img src="/assets/img/pricing_woman_standing.png" alt="Woman standing" class="w-full h-auto object-contain drop-shadow-xl" />
            </div>
        </div>
    </section>

    <!-- Eco Server Banner -->

    <!-- Reality Check Section -->
    <!-- Reality Check Section -->
    <section class="py-24 px-6 relative overflow-hidden bg-slate-50">
        <!-- Background Decor -->
        <div class="absolute inset-0 pointer-events-none -z-10">
            <div class="absolute left-0 top-0 w-2/3 h-full bg-gradient-to-r from-white to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto space-y-12">
            <!-- Main Feature Card -->
            <div class="bg-white rounded-[2.5rem] p-8 lg:p-12 shadow-2xl shadow-slate-200/50 border border-slate-100 grid lg:grid-cols-2 gap-16 items-center relative overflow-hidden">

                <!-- Left: Content -->
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                        </span>
                        <span class="text-xs font-bold tracking-widest text-slate-400 uppercase">REALITY CHECK • V1.0</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black text-deep-purple mb-6 leading-[1.15]">
                        Not Another <br>
                        Hosting Company. <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-wine to-red-purple">We Build for Reality.</span>
                    </h2>

                    <p class="text-slate-500 text-lg mb-8 leading-relaxed font-medium max-w-lg">
                        Most hosting companies are built for blogs. We build infrastructure for projects that generate <strong class="text-deep-purple bg-deep-purple/5 px-1 rounded">real traffic, real risk, and real money</strong>.
                    </p>

                    <div class="flex flex-wrap gap-3 mb-10">
                        <div class="px-4 py-2 rounded-lg bg-wine/5 text-wine text-xs font-bold uppercase tracking-wide border border-wine/10">
                            <i class="fas fa-check mr-2"></i> Adult Friendly
                        </div>
                        <div class="px-4 py-2 rounded-lg bg-wine/5 text-wine text-xs font-bold uppercase tracking-wide border border-wine/10">
                            <i class="fas fa-check mr-2"></i> Crypto Ready
                        </div>
                        <div class="px-4 py-2 rounded-lg bg-wine/5 text-wine text-xs font-bold uppercase tracking-wide border border-wine/10">
                            <i class="fas fa-check mr-2"></i> Streaming
                        </div>
                    </div>

                    <a href="#plans" class="inline-flex items-center justify-center gap-3 bg-[#0f172a] hover:bg-slate-800 text-white px-8 py-4 rounded-xl font-bold text-sm transition-all shadow-xl hover:-translate-y-1 group w-full sm:w-auto">
                        See Server Options <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Right: Terminal/Rack Visual -->
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-wine/20 to-deep-purple/20 rounded-[2rem] blur-xl opacity-50"></div>
                    <div class="bg-[#0b0c15] text-slate-300 rounded-2xl p-8 shadow-2xl font-mono text-sm relative border border-white/5 mx-auto max-w-md w-full z-10">
                        <!-- Header -->
                        <div class="flex justify-between items-start mb-8 border-b border-white/10 pb-4">
                            <div class="flex gap-1.5 pt-1">
                                <div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
                            </div>
                            <div class="text-right">
                                <div class="text-[10px] text-slate-500 font-bold tracking-[0.2em] uppercase mb-1">SHIELD_NODE // PRIMARY</div>
                            </div>
                        </div>

                        <!-- Specs -->
                        <div class="space-y-4 text-[11px] tracking-wide">
                            <div class="flex justify-between items-center group cursor-default">
                                <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• OVERSUB_RATIO</span>
                                <span class="text-white font-bold">1:1 (Dedicated)</span>
                            </div>
                            <div class="flex justify-between items-center group cursor-default">
                                <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• DMCA_ACTION</span>
                                <span class="text-white font-bold">/dev/null</span>
                            </div>
                            <div class="flex justify-between items-center group cursor-default">
                                <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• TRAFFIC_CAP</span>
                                <span class="text-white font-bold">UNLIMITED</span>
                            </div>
                            <div class="flex justify-between items-center group cursor-default">
                                <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• CONTENT_TYPE</span>
                                <span class="text-white font-bold">ANY / ALL</span>
                            </div>
                            <div class="flex justify-between items-center group cursor-default">
                                <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• THROTTLING</span>
                                <span class="text-white font-bold">DISABLED</span>
                            </div>
                            <div class="flex justify-between items-center group cursor-default">
                                <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• PRIVACY</span>
                                <span class="text-white font-bold">MAXIMUM</span>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="mt-8 pt-4 border-t border-white/10 flex justify-between items-end">
                            <div>
                                <div class="text-[9px] text-slate-500 font-bold uppercase mb-1">Provisioned Status</div>
                                <div class="text-xs text-green-500 font-bold bg-green-500/10 px-2 py-1 rounded border border-green-500/20">ACTIVE PROTECTION</div>
                            </div>
                            <div class="flex gap-1 mb-1">
                                <div class="w-1 h-1 bg-red-500 rounded-full animate-pulse"></div>
                                <div class="w-1 h-1 bg-red-500 rounded-full animate-pulse delay-75"></div>
                                <div class="w-1 h-1 bg-red-500 rounded-full animate-pulse delay-150"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Cards -->
            <div class="grid md:grid-cols-3 gap-6">
                <!-- No Overselling -->
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="flex justify-between mb-6">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center"><i class="fas fa-server"></i></div>
                        <span class="text-[10px] font-bold text-slate-300 uppercase">Resources</span>
                    </div>
                    <h4 class="font-bold text-deep-purple mb-2">No Resource Overselling</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">We never share your RAM or CPU. What you buy is exactly what allows your project to scale.</p>
                    <div class="flex items-center gap-2 text-[10px] text-blue-600 font-bold">
                        <i class="fas fa-check-circle"></i> Dedicated Hardware
                    </div>
                </div>

                <!-- DMCA Immunity -->
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1 relative overflow-hidden group">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-wine/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
                    <div class="flex justify-between mb-6 relative z-10">
                        <div class="w-10 h-10 rounded-full bg-wine/10 text-wine flex items-center justify-center"><i class="fas fa-shield-alt"></i></div>
                        <span class="text-[10px] font-bold text-wine bg-wine/10 px-2 py-1 rounded-full border border-wine/20">IGNORED</span>
                    </div>
                    <h4 class="font-bold text-deep-purple mb-2">Zero Panic on DMCA</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">We don’t panic on abuse reports. Your content stays online, always protected by our offshore policies.</p>
                    <div class="flex items-center gap-2 text-[10px] text-wine font-bold">
                        <i class="fas fa-check-circle"></i> 100% Immunity
                    </div>
                </div>

                <!-- Viral Traffic -->
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="flex justify-between mb-6">
                        <div class="w-10 h-10 rounded-full bg-green-50 text-green-500 flex items-center justify-center"><i class="fas fa-bolt"></i></div>
                        <span class="text-[10px] font-bold text-slate-300 uppercase">Performance</span>
                    </div>
                    <h4 class="font-bold text-deep-purple mb-2">Viral Traffic Ready</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">No throttling when you go viral. Push unlimited bandwidth 24/7 without speed caps or hidden fees.</p>
                    <div class="flex items-center gap-2 text-[10px] text-green-600 font-bold">
                        <i class="fas fa-check-circle"></i> Unmetered Uplink
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Features Section -->
    <section id="features" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="text-3xl md:text-5xl font-black mb-6 text-deep-purple">Why Choose DMCAQLoud for DMCA Ignored Servers?</h2>
            <p class="text-slate-500 text-base max-w-2xl mx-auto">Better than others: No takedowns, faster loading, stronger protection perfect for adult, streaming, file lockers & torrent.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($FEATURES as $f): ?>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden group border border-slate-100 hover:-translate-y-1">
                    <!-- Top Gradient Border -->
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r <?php echo $f['gradient']; ?>"></div>

                    <div class="w-12 h-12 mb-6 flex items-center justify-center text-slate-700 bg-slate-50 rounded-xl group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <?php echo $f['icon']; ?>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-deep-purple mb-3"><?php echo $f['title']; ?></h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium"><?php echo $f['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Email Solutions Section -->
    <section class="py-24 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <!-- <span class="inline-block px-4 py-1 mb-6 text-sm font-bold text-deep-purple bg-deep-purple/5 rounded-full">Smarter email</span> -->
                <h2 class="text-4xl md:text-5xl font-black text-deep-purple leading-tight mb-6">Host Crypto & Streaming Projects Without Limits</h2>
                <p class="text-slate-600 text-xl mb-8 leading-relaxed font-medium max-w-2xl mx-auto text-center">
                    Power your crypto platforms, streaming sites, and high-traffic applications on DMCA-friendly dedicated servers built for privacy, speed, and uptime.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Card 1: Business -->
                <div class="bg-white rounded-3xl p-8 pb-0 border border-slate-100 shadow-sm flex flex-col items-start overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                    <!-- <span class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold uppercase tracking-wider rounded-lg mb-6">Business</span> -->
                    <h3 class="text-2xl font-bold text-deep-purple mb-4">CRYPTO-READY INFRASTRUCTURE</h3>
                    <p class="text-slate-500 font-medium leading-relaxed mb-8">Built for blockchain & privacy-first platforms Optimized servers for crypto exchanges, wallets, mining dashboards, and Web3 apps—secure, scalable, and resilient.</p>

                    <ul class="space-y-3 mb-8 w-full">
                        <li class="flex items-start gap-3">
                            <span class="text-wine mt-1"><i class="fas fa-check"></i></span>
                            <span class="text-slate-600 text-sm font-semibold">Crypto-friendly environment</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-wine mt-1"><i class="fas fa-check"></i></span>
                            <span class="text-slate-600 text-sm font-semibold"> High I/O performance</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-wine mt-1"><i class="fas fa-check"></i></span>
                            <span class="text-slate-600 text-sm font-semibold">Enhanced security & isolation</span>
                        </li>
                    </ul>

                    <a href="#" class="text-wine font-bold text-sm hover:text-red-purple transition-colors mb-10 inline-flex items-center gap-2">
                        Learn more <i class="fas fa-arrow-right text-xs"></i>
                    </a>

                    <div class="mt-auto w-full relative">
                        <img src="/assets/img/email_business_ui.png" class="w-full rounded-t-xl shadow-lg border border-slate-100 group-hover:scale-105 transition-transform duration-500 origin-bottom" alt="Business Email Interface">
                    </div>
                </div>

                <!-- Card 2: Marketing -->
                <div class="bg-white rounded-3xl p-8 pb-0 border border-slate-100 shadow-sm flex flex-col items-start overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                    <!-- <span class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold uppercase tracking-wider rounded-lg mb-6">Marketing</span> -->
                    <h3 class="text-2xl font-bold text-deep-purple mb-4">STREAMING-OPTIMIZED SERVERS</h3>
                    <p class="text-slate-500 font-medium leading-relaxed mb-8">Stream faster. Stay online longer. Deliver smooth video, IPTV, and media streaming with high bandwidth, low latency, and DMCA-aware hosting.</p>

                    <ul class="space-y-3 mb-8 w-full">
                        <li class="flex items-start gap-3">
                            <span class="text-wine mt-1"><i class="fas fa-check"></i></span>
                            <span class="text-slate-600 text-sm font-semibold">High-bandwidth network</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-wine mt-1"><i class="fas fa-check"></i></span>
                            <span class="text-slate-600 text-sm font-semibold"> Low-latency streaming</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-wine mt-1"><i class="fas fa-check"></i></span>
                            <span class="text-slate-600 text-sm font-semibold">Smart abuse handling</span>
                        </li>
                    </ul>

                    <a href="#" class="text-wine font-bold text-sm hover:text-red-purple transition-colors mb-10 inline-flex items-center gap-2">
                        Learn more <i class="fas fa-arrow-right text-xs"></i>
                    </a>

                    <div class="mt-auto w-full relative">
                        <img src="/assets/img/marketing_email_ui.png" class="w-full rounded-t-xl shadow-lg border border-slate-100 group-hover:scale-105 transition-transform duration-500 origin-bottom" alt="Email Marketing Interface">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Image -->
            <div class="relative">
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-red-purple/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-thistle/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
                <!-- Image masked or darkened if needed, but keeping as is with opacity check on container if needed -->
                <img src="/assets/img/testimonial_meeting.png" alt="Customer Success Team" class="relative rounded-3xl shadow-2xl w-full object-cover h-[500px] z-10" />
            </div>

            <!-- Right Content -->
            <div>
                <div class="inline-block px-3 py-1 mb-6 text-xs font-semibold tracking-wider text-wine uppercase bg-red-purple/10 rounded-full">
                    Customer Stories
                </div>
                <h2 class="text-4xl font-black text-deep-purple mb-12">Here's what our customers <br> say about us</h2>

                <div id="testimonial-mask" class="h-[500px] overflow-hidden relative">
                    <div id="testimonial-track" class="flex flex-col gap-8">
                        <?php foreach ($TESTIMONIALS as $t): ?>
                            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow relative">
                                <!-- Quote Icon -->
                                <div class="absolute top-6 right-6 text-slate-100 text-4xl font-serif">"</div>

                                <p class="text-slate-600 italic font-medium mb-6 relative z-10 leading-relaxed">
                                    "<?php echo $t['quote']; ?>"
                                </p>

                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-red-purple to-wine flex items-center justify-center text-white font-bold text-sm shadow-md border border-white/10">
                                        <?php echo substr($t['author'], 0, 1); ?>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-deep-purple text-sm"><?php echo $t['author']; ?></h4>
                                        <p class="text-slate-500 text-xs font-bold uppercase tracking-wide"><?php echo $t['role']; ?></p>
                                    </div>
                                    <div class="ml-auto flex gap-0.5 text-wine text-xs">
                                        <?php for ($i = 0; $i < $t['stars']; $i++): ?><i class="fas fa-star"></i><?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const track = document.getElementById('testimonial-track');
                        if (!track) return;

                        // Duplicate content for infinite scroll
                        track.innerHTML += track.innerHTML;

                        let position = 0;
                        const speed = 1;

                        function animate() {
                            position -= speed;

                            // Reset position when we've scrolled past half the height
                            if (Math.abs(position) >= track.scrollHeight / 2) {
                                position = 0;
                            }

                            track.style.transform = `translateY(${position}px)`;
                            requestAnimationFrame(animate);
                        }

                        animate();
                    });
                </script>
            </div>
        </div>
    </section>

    <!-- Trusted Stats -->
    <?php include './inc/trusted-stats.php'; ?>

    <!-- FAQ Section -->
    <section class="py-24 px-6 relative overflow-hidden bg-slate-50">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-wine/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-deep-purple/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-12 lg:gap-24 items-start relative z-10">
            <!-- Left Side -->
            <div class="lg:col-span-5 text-left sticky top-24">
                <span class="inline-block text-wine font-bold tracking-[0.2em] uppercase text-sm mb-6">FAQ</span>
                <h2 class="text-5xl md:text-7xl font-black text-deep-purple mb-8 tracking-tight">All the <br> details.</h2>
                <p class="text-slate-600 text-xl font-medium max-w-sm leading-relaxed">
                    Got a question? We're here to help. If you don't see your question here, drop us a line.
                </p>

                <a href="contact.php" class="hidden lg:inline-flex items-center gap-2 mt-12 text-deep-purple font-bold border-b border-deep-purple/30 pb-1 hover:text-wine hover:border-wine transition-all">
                    Contact Support <i class="fas fa-arrow-right text-xs transform -rotate-45 group-hover:rotate-0 transition-transform"></i>
                </a>
            </div>

            <!-- Right Side -->
            <div class="lg:col-span-7 space-y-4">
                <?php foreach ($FAQ_ITEMS as $i => $item): ?>
                    <div class="group relative bg-white border border-slate-200 rounded-[2rem] overflow-hidden hover:border-wine/30 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <button onclick="toggleFaq(<?php echo $i; ?>)" class="w-full p-6 md:p-8 text-left flex justify-between items-center focus:outline-none">
                            <span class="text-lg md:text-xl font-bold text-deep-purple pr-8"><?php echo $item['question']; ?></span>

                            <div class="relative w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center shrink-0 group-hover:bg-wine/10 transition-colors">
                                <div class="absolute w-3 h-0.5 bg-deep-purple transition-opacity duration-300" id="icon-minus-<?php echo $i; ?>" style="opacity: 0;"></div>
                                <div class="absolute w-3 h-0.5 bg-deep-purple transition-transform duration-300 rotate-90" id="icon-plus-v-<?php echo $i; ?>"></div>
                                <div class="absolute w-3 h-0.5 bg-deep-purple transition-transform duration-300" id="icon-plus-h-<?php echo $i; ?>"></div>
                            </div>
                        </button>

                        <div id="faq-answer-<?php echo $i; ?>" class="transition-[max-height,opacity,margin] duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] overflow-hidden max-h-0 opacity-0 bg-slate-50/50">
                            <div class="px-6 md:px-8 pb-8 pt-0 text-lg text-slate-500 leading-relaxed font-medium">
                                <?php echo $item['answer']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <script>
            function toggleFaq(index) {
                const answer = document.getElementById(`faq-answer-${index}`);
                const minus = document.getElementById(`icon-minus-${index}`);
                const plusV = document.getElementById(`icon-plus-v-${index}`);
                const plusH = document.getElementById(`icon-plus-h-${index}`);
                // Button is parent of icon container
                // const btn = answer.previousElementSibling; 

                const isOpen = !answer.classList.contains('max-h-0');

                if (isOpen) {
                    // Close
                    answer.classList.add('max-h-0', 'opacity-0');
                    answer.classList.remove('max-h-[500px]', 'opacity-100');

                    // Icon to Plus
                    minus.style.opacity = '0';
                    plusV.style.transform = 'rotate(90deg)';
                    plusV.style.opacity = '1';
                } else {
                    // Open
                    answer.classList.remove('max-h-0', 'opacity-0');
                    answer.classList.add('max-h-[500px]', 'opacity-100');

                    // Icon to Minus
                    minus.style.opacity = '1';
                    plusV.style.transform = 'rotate(0deg)';
                    plusV.style.opacity = '0';
                }
            }
        </script>
    </section>

    <!-- Contact Us Section (New - No Form) -->
    <section id="contact" class="pb-24 px-6  text-deep-purple ">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-black mb-6">Need Help? Get in Touch</h2>
            <p class="text-slate-500 text-lg mb-16 max-w-2xl mx-auto">We are here to help you 24/7 with any pre-sales questions or technical issues.</p>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Live Chat -->
                <!-- <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-wine transition-colors group shadow-sm hover:shadow-md">
                    <div class="w-16 h-16 bg-red-purple/10 text-wine rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Live Chat</h3>
                    <p class="text-slate-500 mb-6 text-sm">Instant answers from our agents.</p>
                    <button class="text-white font-bold bg-wine hover:bg-red-purple px-6 py-2 rounded-lg transition-colors">Start Chat</button>
                </div> -->

                <!-- Email -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-red-purple transition-colors group shadow-sm hover:shadow-md">
                    <div class="w-16 h-16 bg-red-purple/10 text-red-purple rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Email Support</h3>
                    <p class="text-slate-500 mb-6 text-sm">Send us a detailed message.</p>
                    <a href="mailto:support@dmcaqloud.com" class="text-white font-bold bg-red-purple hover:bg-wine px-6 py-2 rounded-lg transition-colors inline-block">Send Email</a>
                </div>

                <!-- Telegram/Direct -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-wine transition-colors group shadow-sm hover:shadow-md">
                    <div class="w-16 h-16 bg-wine/10 text-wine rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fab fa-telegram"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Telegram</h3>
                    <p class="text-slate-500 mb-6 text-sm">Fast direct messaging.</p>
                    <a href="http://t.me/Dmcaqloud" class="text-white font-bold bg-wine hover:bg-red-purple px-6 py-2 rounded-lg transition-colors inline-block">Message Us</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
include './inc/footer.php';
?>