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
                FASTEST PERFORMANCE
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
            <h2 class="text-4xl font-black text-deep-purple mb-4">Ultra‑Fast Video Servers for VOD</h2>
            <p class="text-slate-500 text-lg mb-4">99.99% uptime, NVMe speed, and adaptive streaming go from upload to publish in minutes.</p>
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


<!-- Video Server Infrastructure Section -->
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
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-500"></span>
                    </span>
                    <span class="text-xs font-bold tracking-widest text-slate-400 uppercase">MEDIA NODE • V2.0</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-black text-deep-purple mb-6 leading-[1.15]">
                    Blazing-Fast Video Servers <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-wine to-red-purple">Built for Massive Traffic.</span>
                </h2>

                <p class="text-slate-500 text-lg mb-8 leading-relaxed font-medium max-w-lg">
                    Enterprise-grade video servers optimized for heavy <strong class="text-deep-purple bg-deep-purple/5 px-1 rounded">MP4 and HLS workloads</strong>. Designed for instant playback, stable downloads, and viral traffic spikes.
                </p>

                <div class="space-y-4 mb-10">
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></div>
                        <span class="text-slate-600 font-bold text-sm">Optimized Disk I/O for Large Videos</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></div>
                        <span class="text-slate-600 font-bold text-sm">Handles Millions of Daily Plays</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></div>
                        <span class="text-slate-600 font-bold text-sm">Adult & DMCA-Friendly Environment</span>
                    </div>
                </div>

                <a href="https://t.me/Dmcaqloud" class="inline-flex items-center justify-center gap-3 bg-[#0f172a] hover:bg-slate-800 text-white px-8 py-4 rounded-xl font-bold text-sm transition-all shadow-xl hover:-translate-y-1 group w-full sm:w-auto">
                    Deploy Video Node <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
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
                            <div class="text-[10px] text-slate-500 font-bold tracking-[0.2em] uppercase mb-1">ENCODE_RACK // 04</div>
                        </div>
                    </div>

                    <!-- Specs -->
                    <div class="space-y-4 text-[11px] tracking-wide">
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• FORMATS</span>
                            <span class="text-white font-bold">MP4 / HLS / WEBM</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• SOFTWARE</span>
                            <span class="text-white font-bold">FFMPEG / NGINX-VOD</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• STORAGE</span>
                            <span class="text-white font-bold">NVMe RAID-10</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• PORT SPEED</span>
                            <span class="text-white font-bold">10Gbps UNMETERED</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• CACHING</span>
                            <span class="text-white font-bold">REDIS / VARNISH</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• LOCATION</span>
                            <span class="text-white font-bold">OFFSHORE (NL)</span>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="mt-8 pt-4 border-t border-white/10 flex justify-between items-end">
                        <div>
                            <div class="text-[9px] text-slate-500 font-bold uppercase mb-1">Stream Status</div>
                            <div class="text-xs text-purple-400 font-bold bg-purple-500/10 px-2 py-1 rounded border border-purple-500/20">OPTIMIZED</div>
                        </div>
                        <div class="flex gap-1 mb-1">
                            <div class="w-1 h-1 bg-purple-500 rounded-full animate-pulse"></div>
                            <div class="w-1 h-1 bg-purple-500 rounded-full animate-pulse delay-75"></div>
                            <div class="w-1 h-1 bg-purple-500 rounded-full animate-pulse delay-150"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Cards -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Load Time -->
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1">
                <div class="flex justify-between mb-6">
                    <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center"><i class="fas fa-bolt"></i></div>
                    <span class="text-[10px] font-bold text-slate-300 uppercase">Latency</span>
                </div>
                <h4 class="font-bold text-deep-purple mb-2">Instant Load Time</h4>
                <p class="text-xs text-slate-500 leading-relaxed mb-4">Optimized routing ensures your videos start playing in under 0.8 seconds globally.</p>
                <div class="flex items-center gap-2 text-[10px] text-blue-600 font-bold">
                    <i class="fas fa-check-circle"></i>
                    < 0.8s TTFB
                        </div>
                </div>

                <!-- Daily Plays -->
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1 relative overflow-hidden group">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-wine/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
                    <div class="flex justify-between mb-6 relative z-10">
                        <div class="w-10 h-10 rounded-full bg-wine/10 text-wine flex items-center justify-center"><i class="fas fa-play"></i></div>
                        <span class="text-[10px] font-bold text-wine bg-wine/10 px-2 py-1 rounded-full border border-wine/20">HIGH TRAFFIC</span>
                    </div>
                    <h4 class="font-bold text-deep-purple mb-2">30K+ Daily Plays</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Built to handle viral spikes. Serve millions of requests without buffering or downtime.</p>
                    <div class="flex items-center gap-2 text-[10px] text-wine font-bold">
                        <i class="fas fa-check-circle"></i> Viral Ready
                    </div>
                </div>

                <!-- Uptime -->
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="flex justify-between mb-6">
                        <div class="w-10 h-10 rounded-full bg-green-50 text-green-500 flex items-center justify-center"><i class="fas fa-server"></i></div>
                        <span class="text-[10px] font-bold text-slate-300 uppercase">Reliability</span>
                    </div>
                    <h4 class="font-bold text-deep-purple mb-2">99.9% Uptime</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Redundant network and power ensure your content is always available to your viewers.</p>
                    <div class="flex items-center gap-2 text-[10px] text-green-600 font-bold">
                        <i class="fas fa-check-circle"></i> SLA Guaranteed
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
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">Fast, Secure & DMCA Ignored Offshore Hosting for Adult Content</p>
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

            <a href="#contact" class="hidden lg:inline-flex items-center gap-2 mt-12 text-deep-purple font-bold border-b border-deep-purple/30 pb-1 hover:text-wine hover:border-wine transition-all">
                Contact Support <i class="fas fa-arrow-right text-xs transform -rotate-45 group-hover:rotate-0 transition-transform"></i>
            </a>
        </div>

        <!-- Right Side -->
        <div class="lg:col-span-7 space-y-4">
            <?php foreach ($VIDEO_FAQ as $i => $item): ?>
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
<?php include './inc/footer.php'; ?>