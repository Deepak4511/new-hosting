<?php
include './inc/navbar.php';
include './data/streaming-data.php';
?>

<!-- Streaming Hero -->
<section class="relative pt-32 pb-32 px-6 min-h-[70vh] flex items-center overflow-hidden bg-gradient-to-br from-wine/10 via-white to-red-purple/10" style="--c: 80px; mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000); -webkit-mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000);">
    <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 gap-16 items-center relative z-10">
        <!-- Left Content -->
        <div class="text-center lg:text-left">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-wine/10 bg-white/60 text-wine text-xs font-bold mb-6 shadow-sm backdrop-blur-md mx-auto lg:mx-0">
                <span class="flex h-2 w-2 rounded-full bg-red-purple animate-pulse"></span>
                FASTEST PERFORMANCE
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight leading-tight">
                Robust Offshore <span class="gradient-text">Streaming Server</span>
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed mb-8">
                Launch your IPTV service or movie streaming site on enterprise-grade dedicated servers in Amsterdam’s secure, privacy-centric data centers.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <button onclick="document.getElementById('server-list').scrollIntoView({behavior: 'smooth'})" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/30 hover:-translate-y-1">
                    Deploy Your Streaming Server Today
                </button>
            </div>
        </div>

        <!-- Right Image -->
        <div class="relative hidden lg:block">
            <div class="absolute -inset-4 bg-gradient-to-r from-red-purple/20 to-wine/20 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <img src="/assets/img/hero_illustration.png" alt="Streaming Servers" class="relative w-full h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500" />
        </div>
    </div>
</section>


<!-- Server List -->
<section id="server-list" class=" px-6 max-w-[1600px] mx-auto">
    <!-- Header & Filters -->
    <div class=" items-center mb-12 gap-8">
        <div class="text-center  w-full xl:w-auto">
            <h2 class="text-4xl font-black text-deep-purple mb-4">Amsterdam DMCA-Ignored Streaming Enterprise Reliability, Instant Scale</h2>
            <p class="text-slate-500 text-lg mb-4">Choose battle-tested dedicated servers in Amsterdam for IPTV, VOD, live TV, or movie platforms – engineered for 100% DMCA immunity and zero interruptions.</p>
        </div>

        <?php
        include './data/dedicated-server-plans.php';

        // Filter for Streaming Plans using the 'type' field
        $DEDICATED_SERVERS = array_filter($DEDICATED_SERVERS, function ($server) {
            return isset($server['type']) && in_array('streaming', $server['type']);
        });

        include './inc/dedicatedPlan.php';
        ?>
</section>



<!-- Streaming Server Solutions Section -->
<section class="py-24 px-6 relative overflow-hidden bg-white">
    <!-- Background Decor -->
    <div class="absolute inset-0 pointer-events-none -z-10">
        <div class="absolute left-[-10%] top-[40%] w-[500px] h-[500px] bg-wine/5 rounded-full blur-[80px]"></div>
    </div>

    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
        <!-- Left: Content -->
        <div class="relative z-10">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 mb-6 text-xs font-bold tracking-widest text-deep-purple uppercase bg-deep-purple/5 border border-deep-purple/10 rounded-full">
                <i class="fas fa-video"></i> STREAMING SERVER SOLUTIONS
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-deep-purple mb-8 leading-tight">
                Ultra-Fast Streaming Servers<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-wine to-red-purple">Buffer-Free Playback.</span>
            </h2>

            <p id="streamText" class="text-slate-600 text-lg mb-10 leading-relaxed font-medium min-h-[3.5rem]">
                High-performance streaming servers optimized for HLS, RTMP and VOD, delivering smooth playback even during peak traffic.
            </p>

            <!-- Trust Points -->
            <div class="grid grid-cols-2 gap-4 mb-10">
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-wine"></i> <span class="text-slate-700 font-bold text-sm">Low Latency Streaming</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-wine"></i> <span class="text-slate-700 font-bold text-sm">Unlimited Viewers</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-wine"></i> <span class="text-slate-700 font-bold text-sm">OBS / RTMP Ready</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-wine"></i> <span class="text-slate-700 font-bold text-sm">24/7 Monitoring</span>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-6 border-y border-slate-100 py-8 mb-10">
                <div class="text-center">
                    <strong id="s1" class="block text-3xl font-black text-deep-purple mb-1">0</strong>
                    <span class="text-xs uppercase font-bold text-slate-400 tracking-wider">Avg Latency (ms)</span>
                </div>
                <div class="text-center border-l border-slate-100">
                    <strong id="s2" class="block text-3xl font-black text-deep-purple mb-1">0</strong>
                    <span class="text-xs uppercase font-bold text-slate-400 tracking-wider">Concurrent Viewers</span>
                </div>
                <div class="text-center border-l border-slate-100">
                    <strong id="s3" class="block text-3xl font-black text-deep-purple mb-1">0</strong>
                    <span class="text-xs uppercase font-bold text-slate-400 tracking-wider">Stream Uptime %</span>
                </div>
            </div>

            <!-- Tabs -->
            <div class="stream-tabs flex flex-wrap gap-3 mb-10">
                <button class="px-5 py-2 rounded-lg font-bold text-sm transition-all bg-wine text-white shadow-md active-tab" onclick="streamUse(this,'Video On Demand (VOD)')">VOD</button>
                <button class="px-5 py-2 rounded-lg font-bold text-sm transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" onclick="streamUse(this,'Live Streaming Platforms')">Live</button>
                <button class="px-5 py-2 rounded-lg font-bold text-sm transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" onclick="streamUse(this,'Adult Streaming Sites')">Adult</button>
                <button class="px-5 py-2 rounded-lg font-bold text-sm transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" onclick="streamUse(this,'OTT Streaming Services')">OTT</button>
            </div>

            <a href="https://t.me/Dmcaqloud" class="inline-flex items-center justify-center gap-3 bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/20 hover:-translate-y-1 w-full sm:w-auto">
                <i class="fab fa-telegram-plane"></i> Talk to Streaming Expert
            </a>
        </div>

        <!-- Right: Terminal Visual -->
        <div class="relative">
            <!-- Decorative BG -->
            <div class="absolute -inset-4 bg-gradient-to-bl from-[#301934] to-[#702963] rounded-[2.5rem] rotate-1 opacity-10"></div>

            <div class="relative bg-[#1a0f1d] rounded-[2rem] p-10 border border-white/5 shadow-2xl overflow-hidden group font-mono text-sm leading-relaxed">
                <!-- Grid Pattern -->
                <div class="absolute inset-0 opacity-[0.05]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 24px 24px;"></div>

                <!-- Terminal Header -->
                <div class="flex items-center gap-2 mb-6 opacity-50 border-b border-white/10 pb-4">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    <span class="ml-2 text-xs">streaming_config.conf</span>
                </div>

                <div class="relative z-10 space-y-4">
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">Protocol Support:</span>
                        <span class="text-white">HLS / RTMP / DASH</span>
                    </div>
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">Encoder:</span>
                        <span class="text-white">OBS / FFmpeg</span>
                    </div>
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">CPU:</span>
                        <span class="text-white">AMD Ryzen / Intel Xeon</span>
                    </div>
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">RAM:</span>
                        <span class="text-white">32GB – 256GB</span>
                    </div>
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">Storage:</span>
                        <span class="text-white">NVMe SSD</span>
                    </div>
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">Port Speed:</span>
                        <span class="text-white">1Gbps – 10Gbps</span>
                    </div>
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">Bandwidth:</span>
                        <span class="text-white">High / Unmetered</span>
                    </div>
                    <div class="flex justify-between border-b border-white/5 pb-2">
                        <span class="text-red-purple font-bold">Locations:</span>
                        <span class="text-white flex gap-2">
                            <img src="https://flagcdn.com/nl.svg" class="w-4 rounded-sm" alt="NL">
                            <img src="https://flagcdn.com/de.svg" class="w-4 rounded-sm" alt="DE">
                            <img src="https://flagcdn.com/us.svg" class="w-4 rounded-sm" alt="US">
                        </span>
                    </div>

                    <div class="pt-6 grid grid-cols-2 gap-4">
                        <div class="bg-white/5 p-3 rounded border border-white/10 flex items-center gap-2 text-xs text-green-400">
                            <i class="fas fa-bolt"></i> Low-Latency Delivery
                        </div>
                        <div class="bg-white/5 p-3 rounded border border-white/10 flex items-center gap-2 text-xs text-green-400">
                            <i class="fas fa-shield-alt"></i> Anti-DDoS Protection
                        </div>
                        <div class="bg-white/5 p-3 rounded border border-white/10 flex items-center gap-2 text-xs text-green-400">
                            <i class="fas fa-chart-area"></i> Real-Time Monitoring
                        </div>
                        <div class="bg-white/5 p-3 rounded border border-white/10 flex items-center gap-2 text-xs text-green-400">
                            <i class="fas fa-rocket"></i> Instant Deployment
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Counter Animation
    function counter(id, end, duration) {
        let start = 0;
        let range = end - start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));

        // Handle large numbers by adjusting step size
        if (range > 1000) {
            stepTime = 20;
            increment = Math.ceil(range / (duration / 20));
        }

        let obj = document.getElementById(id);
        let current = start;

        let timer = setInterval(function() {
            current += increment;
            if (current >= end) {
                current = end;
                clearInterval(timer);
            }
            obj.innerHTML = current.toLocaleString();
        }, stepTime);
    }

    // Start counters when in view (simple implementation, starts on load for now)
    document.addEventListener('DOMContentLoaded', () => {
        counter("s1", 120, 1500);
        counter("s2", 18450, 2000);
        counter("s3", 99, 1000);
    });

    // Tab Functionality
    function streamUse(btn, text) {
        // Reset all buttons
        const buttons = document.querySelectorAll('.stream-tabs button');
        buttons.forEach(b => {
            b.classList.remove('bg-wine', 'text-white', 'shadow-md');
            b.classList.add('bg-slate-100', 'text-slate-600');
        });

        // Activate clicked button
        btn.classList.remove('bg-slate-100', 'text-slate-600');
        btn.classList.add('bg-wine', 'text-white', 'shadow-md');

        // Update Text with fade effect
        const textEl = document.getElementById("streamText");
        textEl.style.opacity = 0;
        setTimeout(() => {
            textEl.innerText = "Optimized streaming infrastructure for " + text + " with ultra-low latency, adaptive bitrate and stable playback.";
            textEl.style.opacity = 1;
        }, 200);
    }
</script>



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
                    Blazing-Fast Streaming Performance
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    Get zero-buffer, crystal-clear streaming for IPTV, VOD, live events, and adult content. Our servers deliver ultra-low latency with high-frequency CPUs, pure NVMe SSDs, 10Gbps ports, and truly unmetered bandwidth – handling thousands of concurrent viewers effortlessly.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> 99.99% Uptime Guarantee
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> 10Gbps Uplinks & Ports
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Pure NVMe SSD Storage
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Unmetered Bandwidth on All Plans
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Amsterdam – AMS-IX Peering for Global Speed
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
                    Rock-Solid Protection for Your Streams
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    Your content stays safe and private. Advanced DDoS protection, strict firewalls, and real-time monitoring keep attacks at bay while ensuring complete privacy – no logs, no monitoring, full DMCA ignored hosting.
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
                        <i class="fas fa-check-circle text-wine"></i> 100% Privacy – No Content Checks
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
                    Scale Seamlessly as Your Audience Grows
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    From small IPTV setups to massive live streaming empires – upgrade storage, RAM, bandwidth, or ports instantly. Handle explosive growth without downtime or limits.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Instant Resource Provisioning
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Flexible Upgrades in Seconds
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Unmetered Bandwidth & 10Gbps Ready
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Basic to Enterprise – Grow Limitless
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

<!-- Use Cases -->
<section class="py-24 px-6 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-deep-purple mb-4">Most Popular Streaming Use Cases</h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-lg">Optimized for high-demand media delivery.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($STREAMING_USE_CASES as $case): ?>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-lg transition-all hover:-translate-y-1 group flex flex-col items-center text-center">
                    <div class="w-20 h-20 bg-wine/5 rounded-full flex items-center justify-center mb-6 group-hover:bg-wine/10 transition-colors border border-wine/10">
                        <i class="<?php echo $case['icon']; ?> text-wine text-3xl group-hover:scale-110 transition-transform"></i>
                    </div>
                    <h3 class="text-xl font-bold text-deep-purple mb-3"><?php echo $case['title']; ?></h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        <?php echo $case['desc']; ?>
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
        <p class="text-slate-500">You secure, we stream.</p>
    </div>

    <div class="space-y-4">
        <?php foreach ($STREAMING_FAQ as $i => $item): ?>
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