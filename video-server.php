<?php
include './inc/navbar.php';
include './data/video-data.php';
?>

<!-- Video Hero -->
<section class="relative pt-32 pb-32 px-6 min-h-[70vh] flex items-center overflow-hidden bg-gradient-to-br from-wine/10 via-white to-red-purple/10" style="--c: 80px; mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000); -webkit-mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000);">
    <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 gap-16 items-center relative z-10">
        <!-- Left Content -->
        <div class="text-center lg:text-left">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-wine/10 bg-white/60 text-wine text-xs font-bold mb-6 shadow-sm backdrop-blur-md mx-auto lg:mx-0">
                <span class="flex h-2 w-2 rounded-full bg-red-purple animate-pulse"></span>
                Optimized Networks
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight leading-tight">
                <?php echo $VIDEO_HERO['title']; ?>
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed mb-8">
                <?php echo $VIDEO_HERO['subtitle']; ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <button onclick="document.getElementById('server-list').scrollIntoView({behavior: 'smooth'})" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/30 hover:-translate-y-1">
                    <?php echo $VIDEO_HERO['cta']; ?>
                </button>
            </div>
        </div>

        <!-- Right Image -->
        <div class="relative hidden lg:block">
            <div class="absolute -inset-4 bg-gradient-to-r from-red-purple/20 to-wine/20 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <img src="/assets/img/hero_illustration.png" alt="Video Servers" class="relative w-full h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500" />
        </div>
    </div>
</section>


<!-- Server List -->
<section id="server-list" class=" px-6 max-w-[1600px] mx-auto">
    <!-- Header & Filters -->
    <div class=" items-center mb-12 gap-8">
        <div class="text-center  w-full xl:w-auto">
            <h2 class="text-4xl font-black text-deep-purple mb-4">Ultra-Fast Video Servers for VOD</h2>
            <p class="text-slate-500 text-lg mb-4">Massive Storage. Unmetered Bandwidth.</p>
        </div>

        <?php
        include './data/dedicated-server-plans.php';

        // Filter for Video Plans using the 'type' field
        $DEDICATED_SERVERS = array_filter($DEDICATED_SERVERS, function ($server) {
            return isset($server['type']) && in_array('video', $server['type']);
        });

        include './inc/dedicatedPlan.php';
        ?>
</section>

<!-- Eco Server Banner -->
<?php include './inc/eco-server-banner.php'; ?>

<!-- Video Server Infrastructure Section -->
<section class="py-24 px-6 relative overflow-hidden bg-white">
    <!-- Background Decor -->
    <div class="absolute inset-0 pointer-events-none -z-10">
        <div class="absolute right-[-10%] top-[40%] w-[500px] h-[500px] bg-red-purple/5 rounded-full blur-[80px]"></div>
    </div>

    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
        <!-- Left: Content -->
        <div class="relative z-10">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 mb-6 text-xs font-bold tracking-widest text-deep-purple uppercase bg-deep-purple/5 border border-deep-purple/10 rounded-full">
                <i class="fas fa-video"></i> VIDEO SERVER INFRASTRUCTURE
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-deep-purple mb-8 leading-tight">
                Blazing-Fast Video Servers<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-wine to-red-purple">Built for Massive Traffic.</span>
            </h2>

            <p class="text-slate-600 text-lg mb-10 leading-relaxed font-medium">
                Enterprise-grade video servers optimized for heavy <strong class="text-deep-purple bg-deep-purple/5 px-1 rounded">MP4 and HLS workloads</strong>.
                Designed for instant playback, stable downloads, and viral traffic spikes.
            </p>

            <!-- Points -->
            <div class="space-y-4 mb-12">
                <div class="flex items-center gap-4 group">
                    <div class="w-6 h-6 rounded-full bg-green-100 flex-shrink-0 flex items-center justify-center text-green-600 text-xs">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="text-slate-600 font-semibold group-hover:text-deep-purple transition-colors">Optimized Disk I/O for Large Videos</span>
                </div>
                <div class="flex items-center gap-4 group">
                    <div class="w-6 h-6 rounded-full bg-green-100 flex-shrink-0 flex items-center justify-center text-green-600 text-xs">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="text-slate-600 font-semibold group-hover:text-deep-purple transition-colors">Handles Millions of Daily Plays</span>
                </div>
                <div class="flex items-center gap-4 group">
                    <div class="w-6 h-6 rounded-full bg-green-100 flex-shrink-0 flex items-center justify-center text-green-600 text-xs">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="text-slate-600 font-semibold group-hover:text-deep-purple transition-colors">Adult & DMCA-Friendly Environment</span>
                </div>
                <div class="flex items-center gap-4 group">
                    <div class="w-6 h-6 rounded-full bg-green-100 flex-shrink-0 flex items-center justify-center text-green-600 text-xs">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="text-slate-600 font-semibold group-hover:text-deep-purple transition-colors">No Speed Throttling</span>
                </div>
            </div>

            <!-- Metrics -->
            <div class="grid grid-cols-3 gap-6 border-t border-slate-100 pt-8 mb-10">
                <div class="text-center group">
                    <strong class="block text-3xl font-black text-deep-purple mb-1 group-hover:scale-110 transition-transform">0.8s</strong>
                    <span class="text-xs uppercase font-bold text-slate-400 tracking-wider">Load Time</span>
                </div>
                <div class="text-center group border-l border-slate-100">
                    <strong class="block text-3xl font-black text-deep-purple mb-1 group-hover:scale-110 transition-transform">30K+</strong>
                    <span class="text-xs uppercase font-bold text-slate-400 tracking-wider">Daily Plays</span>
                </div>
                <div class="text-center group border-l border-slate-100">
                    <strong class="block text-3xl font-black text-deep-purple mb-1 group-hover:scale-110 transition-transform">99.9%</strong>
                    <span class="text-xs uppercase font-bold text-slate-400 tracking-wider">Uptime</span>
                </div>
            </div>

            <a href="https://t.me/Dmcaqloud" class="inline-flex items-center justify-center gap-3 bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/20 hover:-translate-y-1 w-full sm:w-auto">
                <i class="fab fa-telegram-plane"></i> Talk to Video Server Expert
            </a>
        </div>

        <!-- Right: Visual -->
        <div class="relative">
            <!-- Card Content -->
            <div class="bg-[#1a0f1d] rounded-[2rem] overflow-hidden border border-white/5 shadow-2xl relative group">
                <!-- Player Header -->
                <div class="bg-black/40 p-4 flex items-center gap-3 border-b border-white/5">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400/80"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
                    </div>
                    <div class="mx-auto text-[10px] font-mono text-slate-500 uppercase tracking-wider">player_preview.mp4</div>
                </div>

                <!-- Fake Player -->
                <div class="relative aspect-video bg-[#0f0811] flex items-center justify-center overflow-hidden border-b border-white/5 group-hover:border-wine/30 transition-colors">
                    <!-- Animated Waveform BG -->
                    <div class="absolute inset-0 opacity-20 flex items-end justify-center gap-1 pb-10">
                        <div class="w-2 bg-purple-500 h-10 animate-pulse"></div>
                        <div class="w-2 bg-purple-500 h-16 animate-pulse [animation-delay:0.1s]"></div>
                        <div class="w-2 bg-purple-500 h-8 animate-pulse [animation-delay:0.2s]"></div>
                        <div class="w-2 bg-purple-500 h-20 animate-pulse [animation-delay:0.3s]"></div>
                        <div class="w-2 bg-purple-500 h-12 animate-pulse [animation-delay:0.4s]"></div>
                    </div>

                    <div class="w-20 h-20 rounded-full bg-white/5 backdrop-blur-sm border border-white/10 flex items-center justify-center text-white text-3xl pl-2 shadow-2xl shadow-purple-900/40 group-hover:scale-110 group-hover:bg-wine transition-all duration-300 z-10">
                        <i class="fas fa-play"></i>
                    </div>
                </div>

                <!-- Specs Panel -->
                <div class="p-8">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8 text-sm border-b border-white/5 pb-6 mb-6">
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">Video Type</span>
                            <span class="text-white font-medium">MP4 / HLS</span>
                        </div>
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">Use Case</span>
                            <span class="text-white font-medium">Hosting / Adult</span>
                        </div>
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">CPU</span>
                            <span class="text-white font-medium">Ryzen / Xeon</span>
                        </div>
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">RAM</span>
                            <span class="text-white font-medium">32GB – 256GB</span>
                        </div>
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">Storage</span>
                            <span class="text-white font-medium">NVMe SSD</span>
                        </div>
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">Network</span>
                            <span class="text-white font-medium">1–10Gbps</span>
                        </div>
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">Bandwidth</span>
                            <span class="text-white font-medium">High / Unmetered</span>
                        </div>
                        <div>
                            <span class="block text-slate-500 text-xs font-bold uppercase mb-1">Locations</span>
                            <span class="text-white font-medium flex gap-2">
                                <img src="https://flagcdn.com/nl.svg" class="w-4 rounded-sm" alt="NL">
                                <img src="https://flagcdn.com/de.svg" class="w-4 rounded-sm" alt="DE">
                                <img src="https://flagcdn.com/us.svg" class="w-4 rounded-sm" alt="US">
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <span class="px-3 py-1.5 rounded-lg bg-green-500/10 border border-green-500/20 text-green-400 text-xs font-bold flex items-center gap-2">
                            <i class="fas fa-shield-alt"></i> Anti-DDoS Protection
                        </span>
                        <span class="px-3 py-1.5 rounded-lg bg-purple-500/10 border border-purple-500/20 text-purple-400 text-xs font-bold flex items-center gap-2">
                            <i class="fas fa-rocket"></i> Instant Deployment
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features ZigZag -->

<section class="py-24 px-6 overflow-hidden">
    <div class="max-w-7xl mx-auto space-y-24 md:space-y-32">

        <!-- Feature 1: Performance (Text Left, Image Right) -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-deep-purple/5 text-deep-purple text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="w-2 h-2 rounded-full bg-wine"></span> Performance
                </div>
                <h3 class="text-3xl md:text-4xl font-black text-deep-purple mb-6 leading-tight">
                    Video Hosting & Streaming Performance
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    Host massive video libraries with buffer-free playback and ultra-low latency. Powered by high-density NVMe/SATA storage, high-frequency CPUs, 10Gbps uplinks, and unmetered bandwidth perfect for tube sites, VOD platforms, cinema streaming, and global audiences.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> 99.99% Uptime Guarantee
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> 10Gbps Ports & Uplinks
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Pure NVMe + High-Density Storage
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Unmetered Bandwidth on Premium Plans
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Amsterdam AMS-IX Peering for Worldwide Low Latency
                    </li>
                </ul>
            </div>
            <div class="order-1 lg:order-2 relative group">
                <!-- Abstract UI Mockup -->
                <div class="absolute -inset-4 bg-gradient-to-r from-wine/20 to-deep-purple/20 rounded-3xl blur-2xl opacity-40 group-hover:opacity-60 transition-opacity"></div>
                <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-6 relative overflow-hidden transform group-hover:scale-[1.02] transition-transform duration-500">
                    <div class="flex items-center gap-4 mb-6 border-b border-slate-100 pb-4">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <div class="text-xs font-mono text-slate-400 ml-auto">server_status.log</div>
                    </div>
                    <!-- Fake Metrics -->
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-xs font-bold text-slate-500 mb-1"><span>CPU Usage</span> <span>12%</span></div>
                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                                <div class="w-[12%] h-full bg-green-500 rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold text-slate-500 mb-1"><span>Memory</span> <span>4.2GB / 64GB</span></div>
                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                                <div class="w-[8%] h-full bg-wine rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold text-slate-500 mb-1"><span>Network I/O</span> <span>850 MB/s</span></div>
                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                                <div class="w-[45%] h-full bg-deep-purple rounded-full animate-pulse"></div>
                            </div>
                        </div>
                        <!-- Code Snippet -->
                        <div class="mt-6 bg-slate-900 rounded-lg p-4 font-mono text-xs text-green-400">
                            <p>$ status check --all</p>
                            <p class="text-white mt-1">> System Optimal</p>
                            <p class="text-white">> Latency: 12ms</p>
                            <p class="text-white">> 0 Packets Dropped</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 2: Security (Text Right, Image Left) -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative group">
                <!-- Abstract UI Mockup -->
                <div class="absolute -inset-4 bg-gradient-to-l from-red-purple/20 to-wine/20 rounded-3xl blur-2xl opacity-40 group-hover:opacity-60 transition-opacity"></div>
                <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-8 relative overflow-hidden transform group-hover:scale-[1.02] transition-transform duration-500">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-deep-purple">Security Shield</div>
                                <div class="text-xs text-green-600 font-bold">Active & Monitoring</div>
                            </div>
                        </div>
                        <div class="px-2 py-1 bg-green-50 text-green-600 text-xs font-bold rounded border border-green-100">Protected</div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-100">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-check text-green-500 text-xs"></i>
                                <span class="text-sm font-bold text-slate-600">DDoS Mitigation</span>
                            </div>
                            <span class="text-xs text-slate-400">Running</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-100">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-check text-green-500 text-xs"></i>
                                <span class="text-sm font-bold text-slate-600">Malware Scan</span>
                            </div>
                            <span class="text-xs text-slate-400">Updated</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-100">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-check text-green-500 text-xs"></i>
                                <span class="text-sm font-bold text-slate-600">Firewall Rules</span>
                            </div>
                            <span class="text-xs text-slate-400">Strict</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-purple/5 text-red-purple text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="w-2 h-2 rounded-full bg-red-purple"></span> Security
                </div>
                <h3 class="text-3xl md:text-4xl font-black text-deep-purple mb-6 leading-tight">
                    Rock-Solid Protection for Your Video Content
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    Your videos stay online and private forever. Advanced DDoS mitigation, strict firewalls, full disk encryption, and no content monitoring – 100% DMCA ignored with offshore privacy in Netherlands.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Active DDoS Mitigation
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Always-Updated Malware Scans
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Enforced Firewall Rules
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Full Privacy & Encryption
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> DMCA Ignored No Takedown Enforcement
                    </li>
                </ul>
                <a href="#" class="text-wine font-bold hover:text-red-purple transition-colors inline-flex items-center gap-2">
                    Learn about our security <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Feature 3: Scalability (Text Left, Image Right) -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-wine/5 text-wine text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="w-2 h-2 rounded-full bg-wine"></span> Scalability
                </div>
                <h3 class="text-3xl md:text-4xl font-black text-deep-purple mb-6 leading-tight">
                    Scale Limitlessly for Your Video Empire
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    From basic video hosting to petabyte-scale VOD libraries upgrade storage, RAM, bandwidth, or ports instantly. Handle explosive growth in viewers and content without any downtime.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Instant Resource Provisioning
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Flexible Upgrades in Seconds
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> High-Density Storage & Unmetered Bandwidth
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Basic to Enterprise – Grow Without Limits
                    </li>
                </ul>
            </div>

            <div class="order-1 lg:order-2 relative group">
                <!-- Abstract UI Mockup -->
                <div class="absolute -inset-4 bg-gradient-to-tr from-deep-purple/20 to-wine/20 rounded-3xl blur-2xl opacity-40 group-hover:opacity-60 transition-opacity"></div>

                <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-8 relative overflow-hidden flex flex-col items-center text-center transform group-hover:scale-[1.02] transition-transform duration-500">
                    <div class="w-full grid grid-cols-3 gap-4 mb-6">
                        <div class="h-24 bg-slate-50 rounded-xl border border-slate-100 flex flex-col items-center justify-center p-2">
                            <div class="h-8 w-1 bg-slate-200 rounded-full mb-2"></div>
                            <div class="text-[10px] font-bold text-slate-400">Basic</div>
                        </div>
                        <div class="h-24 bg-slate-50 rounded-xl border border-slate-100 flex flex-col items-center justify-center p-2 opacity-50">
                            <div class="h-12 w-1 bg-slate-200 rounded-full mb-2"></div>
                            <div class="text-[10px] font-bold text-slate-400">Pro</div>
                        </div>
                        <div class="h-24 bg-wine/5 rounded-xl border border-wine/20 flex flex-col items-center justify-center p-2 shadow-sm scale-110 ring-2 ring-wine ring-offset-2">
                            <div class="h-16 w-1 bg-gradient-to-t from-wine to-red-purple rounded-full mb-2"></div>
                            <div class="text-[10px] font-bold text-wine">Enterprise</div>
                        </div>
                    </div>

                    <div class="w-full bg-slate-50 rounded-lg p-4 border border-slate-100">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-xs font-bold text-slate-600">Storage Capacity</span>
                            <span class="text-xs font-bold text-wine">Upgrading...</span>
                        </div>
                        <div class="w-full h-2 bg-slate-200 rounded-full overflow-hidden relative">
                            <div class="absolute top-0 left-0 h-full w-2/3 bg-wine rounded-full"></div>
                            <div class="absolute top-0 left-2/3 h-full w-1/3 bg-wine/30 rounded-full animate-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Features Grid -->
<section class="py-24 px-6 relative bg-slate-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-deep-purple mb-4">Netherlands Video Hosting</h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">Fast, Secure, and DMCA Ignored servers tailored for content creators.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($VIDEO_FEATURES as $feat): ?>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-lg transition-all hover:-translate-y-1 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-wine/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-wine/10 transition-colors border border-wine/10">
                        <i class="<?php echo $feat['icon']; ?> text-wine text-2xl group-hover:scale-110 transition-transform"></i>
                    </div>
                    <h3 class="text-lg font-bold text-deep-purple mb-3"><?php echo $feat['title']; ?></h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        <?php echo $feat['desc']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Trusted Stats -->
<?php include './inc/trusted-stats.php'; ?>

<!-- FAQ Section -->
<section class="py-24 px-6 max-w-4xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-black text-deep-purple mb-4">Frequently Asked Questions</h2>
        <p class="text-slate-500">Answers to your video hosting queries.</p>
    </div>

    <div class="space-y-4">
        <?php foreach ($VIDEO_FAQ as $i => $item): ?>
            <div class="bg-white rounded-xl border border-slate-100 overflow-hidden transition-all duration-300 hover:border-wine/30 group">
                <button onclick="toggleFaq(<?php echo $i; ?>)" class="w-full px-6 py-5 text-left flex justify-between items-center cursor-pointer focus:outline-none">
                    <span class="text-lg font-bold text-slate-700 transition-colors group-hover:text-wine"><?php echo $item['question']; ?></span>
                    <div class="relative w-6 h-6 flex items-center justify-center">
                        <div class="absolute w-4 h-0.5 bg-red-purple transition-transform duration-300 ease-out origin-center" id="icon-minus-<?php echo $i; ?>"></div>
                        <div class="absolute w-0.5 h-4 bg-red-purple transition-transform duration-300 ease-out origin-center" id="icon-plus-<?php echo $i; ?>"></div>
                    </div>
                </button>
                <div id="faq-answer-<?php echo $i; ?>" class="transition-[max-height,opacity] duration-500 ease-in-out overflow-hidden max-h-0 opacity-0 bg-slate-50">
                    <div class="px-6 pb-6 pt-2 text-base text-slate-600 leading-7 font-medium">
                        <?php echo $item['answer']; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

</main>
<script>
    function toggleFaq(index) {
        const answer = document.getElementById(`faq-answer-${index}`);
        const minus = document.getElementById(`icon-minus-${index}`);
        const plus = document.getElementById(`icon-plus-${index}`);
        const isOpen = !answer.classList.contains('max-h-0');

        if (isOpen) {
            answer.classList.add('max-h-0', 'opacity-0');
            answer.classList.remove('max-h-96', 'opacity-100');
            plus.classList.remove('rotate-90', 'opacity-0');
            minus.classList.remove('rotate-180');
        } else {
            answer.classList.remove('max-h-0', 'opacity-0');
            answer.classList.add('max-h-96', 'opacity-100');
            plus.classList.add('rotate-90', 'opacity-0');
            minus.classList.add('rotate-180');
        }
    }
</script>
<?php include './inc/footer.php'; ?>