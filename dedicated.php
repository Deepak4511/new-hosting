<?php
include './inc/navbar.php';
include './data/dedicated-data.php';
include './data/dedicated-server-plans.php';
?>

<!-- Dedicated Hero -->
<section class="relative pt-32 pb-32 px-6 min-h-[70vh] flex items-center overflow-hidden bg-gradient-to-br from-wine/10 via-white to-red-purple/10" style="--c: 80px; mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000); -webkit-mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000);">
    <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 gap-16 items-center relative z-10">
        <!-- Left Content -->
        <div class="text-center lg:text-left">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-wine/10 bg-white/60 text-wine text-xs font-bold mb-6 shadow-sm backdrop-blur-md mx-auto lg:mx-0">
                <span class="flex h-2 w-2 rounded-full bg-red-purple animate-pulse"></span>
                FASTEST PERFORMANCE
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight leading-tight">
                <span class="gradient-text">Affordable</span> Offshore <br> Dedicated Server Hosting
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed mb-8">
                Get full root access, unmetered bandwidth, and DMCA-ignored hosting in secure offshore locations.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <button onclick="document.getElementById('explore').scrollIntoView({behavior: 'smooth'})" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/30 hover:-translate-y-1">
                    Choose Your Server
                </button>
                <button class="bg-white border border-slate-200 hover:bg-slate-50 px-8 py-4 rounded-xl font-bold text-lg transition-all text-slate-700 shadow-sm hover:-translate-y-1">
                    Contact Sales
                </button>
            </div>
        </div>

        <!-- Right Image -->
        <div class="relative hidden lg:block">
            <div class="absolute -inset-4 bg-gradient-to-r from-red-purple/20 to-wine/20 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <img src="assets/img/dedicated-hero.jpeg" alt="Dedicated Servers" class="relative w-full h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500" />
        </div>
    </div>
</section>



<!-- Server List -->
<section id="explore" class=" px-6 max-w-[1600px] mx-auto pb-24">
    <!-- Header & Filters -->
    <div class=" items-center mb-12 gap-8">
        <div class="text-center  w-full xl:w-auto">
            <h2 class="text-4xl font-black text-deep-purple mb-4">Choose Your Dedicated Server</h2>
            <p class="text-slate-500 text-lg mb-4">From professional business to enterprise, we’ve got you covered!</p>
        </div>

        <?php include './inc/dedicatedPlan.php'; ?>
</section>

<!-- Eco Server Banner -->

<!-- Dedicated Bare-Metal Section -->
<section class="pb-24 px-6 relative overflow-hidden bg-slate-50">
    <!-- Background Decor -->
    <div class="absolute inset-0 pointer-events-none -z-10">
        <div class="absolute right-0 bottom-0 w-2/3 h-full bg-gradient-to-l from-white to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto space-y-12">
        <!-- Main Feature Card -->
        <div class="bg-white rounded-[2.5rem] p-8 lg:p-12 shadow-2xl shadow-slate-200/50 border border-slate-100 grid lg:grid-cols-2 gap-16 items-center relative overflow-hidden">

            <!-- Left: Terminal/Rack Visual (Flipped Layout) -->
            <div class="relative order-last lg:order-first">
                <div class="absolute -inset-1 bg-gradient-to-l from-wine/20 to-deep-purple/20 rounded-[2rem] blur-xl opacity-50"></div>
                <div class="bg-[#0b0c15] text-slate-300 rounded-2xl p-8 shadow-2xl font-mono text-sm relative border border-white/5 mx-auto max-w-md w-full z-10">
                    <!-- Header -->
                    <div class="flex justify-between items-start mb-8 border-b border-white/10 pb-4">
                        <div class="text-left">
                            <div class="text-[10px] text-slate-500 font-bold tracking-[0.2em] uppercase mb-1">PHYSICAL_LAYER // ISOLATED</div>
                        </div>
                        <div class="flex gap-1.5 pt-1">
                            <div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
                        </div>
                    </div>

                    <!-- Specs -->
                    <div class="space-y-4 text-[11px] tracking-wide">
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• HYPERVISOR</span>
                            <span class="text-white font-bold">NONE (DISABLED)</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• ACCESS_LEVEL</span>
                            <span class="text-white font-bold">UID 0 (ROOT)</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• CORE_SHARING</span>
                            <span class="text-white font-bold">FORBIDDEN</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• I/O PRIORITY</span>
                            <span class="text-white font-bold">REALTIME</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• UPLINK_MODE</span>
                            <span class="text-white font-bold">DEDICATED</span>
                        </div>
                        <div class="flex justify-between items-center group cursor-default">
                            <span class="text-slate-500 font-bold group-hover:text-wine transition-colors">• KERNEL</span>
                            <span class="text-white font-bold">HARDENED</span>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="mt-8 pt-4 border-t border-white/10 flex justify-between items-end">
                        <div class="flex gap-1 mb-1">
                            <div class="w-1 h-1 bg-blue-500 rounded-full animate-pulse"></div>
                            <div class="w-1 h-1 bg-blue-500 rounded-full animate-pulse delay-75"></div>
                            <div class="w-1 h-1 bg-blue-500 rounded-full animate-pulse delay-150"></div>
                        </div>
                        <div class="text-right">
                            <div class="text-[9px] text-slate-500 font-bold uppercase mb-1">Hardware Health</div>
                            <div class="text-xs text-blue-400 font-bold bg-blue-500/10 px-2 py-1 rounded border border-blue-500/20">100% HEALTHY</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="relative z-10">
                <div class="flex items-center gap-2 mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-deep-purple/50 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-deep-purple"></span>
                    </span>
                    <span class="text-xs font-bold tracking-widest text-slate-400 uppercase">DEDICATED BARE-METAL</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-black text-deep-purple mb-6 leading-[1.15]">
                    Pure Dedicated Power. <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-wine to-red-purple">No Sharing. No Limits.</span>
                </h2>

                <p class="text-slate-500 text-lg mb-8 leading-relaxed font-medium max-w-lg">
                    These are not virtual machines. This is <strong class="text-deep-purple bg-deep-purple/5 px-1 rounded">bare-metal hardware</strong> reserved entirely for you. No noisy neighbors, no CPU steal, just raw, unadulterated performance.
                </p>

                <div class="space-y-4 mb-10">
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></div>
                        <span class="text-slate-600 font-bold text-sm">Full Root Control (IPMI/KVM)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></div>
                        <span class="text-slate-600 font-bold text-sm">Zero Virtualization Layer</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></div>
                        <span class="text-slate-600 font-bold text-sm">Ideal for Encoding / Streaming</span>
                    </div>
                </div>

                <a href="#explore" class="inline-flex items-center justify-center gap-3 bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-sm transition-all shadow-xl hover:-translate-y-1 group w-full sm:w-auto">
                    Configure Server <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Bottom Cards -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Raw Metal -->
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1">
                <div class="flex justify-between mb-6">
                    <div class="w-10 h-10 rounded-full bg-indigo-50 text-indigo-500 flex items-center justify-center"><i class="fas fa-microchip"></i></div>
                    <span class="text-[10px] font-bold text-slate-300 uppercase">Hardware</span>
                </div>
                <h4 class="font-bold text-deep-purple mb-2">Raw Metal Performance</h4>
                <p class="text-xs text-slate-500 leading-relaxed mb-4">Direct access to CPU instructions and memory. No hypervisor tax eating up your cycles.</p>
                <div class="flex items-center gap-2 text-[10px] text-indigo-600 font-bold">
                    <i class="fas fa-check-circle"></i> 100% Resource Usage
                </div>
            </div>

            <!-- Single Tenancy -->
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1">
                <div class="flex justify-between mb-6">
                    <div class="w-10 h-10 rounded-full bg-green-50 text-green-500 flex items-center justify-center"><i class="fas fa-user-lock"></i></div>
                    <span class="text-[10px] font-bold text-slate-300 uppercase">Tenancy</span>
                </div>
                <h4 class="font-bold text-deep-purple mb-2">Total Isolation</h4>
                <p class="text-xs text-slate-500 leading-relaxed mb-4">You are the only tenant. Physically isolated storage, RAM, and network interface cards.</p>
                <div class="flex items-center gap-2 text-[10px] text-green-600 font-bold">
                    <i class="fas fa-check-circle"></i> Single Tenant
                </div>
            </div>

            <!-- Security -->
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-wine/5 hover:shadow-xl transition-all hover:-translate-y-1 relative overflow-hidden group">
                <div class="absolute right-0 top-0 w-24 h-24 bg-wine/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
                <div class="flex justify-between mb-6 relative z-10">
                    <div class="w-10 h-10 rounded-full bg-wine/10 text-wine flex items-center justify-center"><i class="fas fa-shield-virus"></i></div>
                    <span class="text-[10px] font-bold text-wine bg-wine/10 px-2 py-1 rounded-full border border-wine/20">HARDENED</span>
                </div>
                <h4 class="font-bold text-deep-purple mb-2">Physical Security</h4>
                <p class="text-xs text-slate-500 leading-relaxed mb-4">Hosted in Tier-3+ secure data centers with biometric access control and 24/7 staff.</p>
                <div class="flex items-center gap-2 text-[10px] text-wine font-bold">
                    <i class="fas fa-check-circle"></i> ISO Certified
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dedicated Features -->
<section class="py-12 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-black text-deep-purple mb-4"><?php echo $DEDICATED_FEATURES_INTRO['title']; ?></h2>
            <p class="text-slate-500 max-w-3xl mx-auto"><?php echo $DEDICATED_FEATURES_INTRO['description']; ?></p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php foreach ($DEDICATED_FEATURES as $feature): ?>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 relative overflow-hidden group hover:-translate-y-1 transition-all">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-deep-purple to-wine"></div>
                    <i class="<?php echo $feature['icon']; ?> text-wine text-3xl mb-4"></i>
                    <h3 class="font-bold text-deep-purple text-lg mb-2"><?php echo $feature['title']; ?></h3>
                    <p class="text-sm text-slate-500 leading-relaxed"><?php echo $feature['description']; ?></p>
                </div>
            <?php endforeach; ?>
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
                    Unmatched Speed & Reliability
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    Experience blazing fast load times with our enterprise-grade hardware. We utilize the latest NVMe storage and high-frequency CPUs to ensure your applications run at peak performance, even under heavy loads.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> 99.99% Uptime SLA
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> 10Gbps Uplinks Available
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> NVMe Pure SSD Storage
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
                    Fortified Security Standards
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    We take your privacy and security seriously. Our infrastructure is protected by advanced DDoS mitigation systems and strictly enforced firewalls, ensuring your data remains safe and accessible only to you.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> DDoS Mitigation Active & Monitoring
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Malware Scan Updated
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Firewall Rules Strict
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
                    Grow Without Limits
                </h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    Your business never stops evolving, and neither should your hosting. Scale your resources instantly with a few clicks. Whether you need more storage, RAM, or bandwidth, we've got you covered.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Instant Provisioning
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> Flexible Upgrades
                    </li>
                    <li class="flex items-center gap-3 text-slate-700 font-medium">
                        <i class="fas fa-check-circle text-wine"></i> From Basic to Enterprise
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
            <h2 class="text-4xl font-black text-deep-purple mb-4"><?php echo $DEDICATED_USE_CASES_INTRO['title']; ?></h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-lg"><?php echo $DEDICATED_USE_CASES_INTRO['subtitle']; ?></p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($DEDICATED_USE_CASES as $case): ?>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-lg transition-all hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-wine/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-wine/10 transition-colors">
                        <i class="<?php echo $case['icon']; ?> text-wine text-2xl group-hover:scale-110 transition-transform"></i>
                    </div>
                    <h3 class="text-xl font-bold text-deep-purple mb-3"><?php echo $case['title']; ?></h3>
                    <p class="text-slate-500 leading-relaxed">
                        <?php echo $case['description']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTAs -->
<section class="py-20 px-6 max-w-7xl mx-auto grid md:grid-cols-2 gap-8">
    <div class="bg-gradient-to-br from-red-purple to-wine rounded-3xl p-10 text-white relative overflow-hidden flex flex-col justify-center border border-white/10 shadow-2xl">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>

        <div class="relative z-10">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-6 text-2xl backdrop-blur-sm">
                <i class="fas fa-rocket"></i>
            </div>
            <h3 class="text-3xl font-black mb-4">New Website?</h3>
            <p class="text-white mb-8 font-medium">Launch your project with complete freedom and privacy! Get your DMCA Ignored Offshore Dedicated Server up and running within minutes built for high performance, anonymity, and total control. Whether it’s streaming, adult content, or high-traffic apps, DmcaQloud gives you the perfect start.</p>
            <a href="#explore" class="bg-white text-wine px-8 py-3 rounded-xl font-bold hover:bg-thistle transition-colors w-fit">
                Get Started
            </a>
        </div>
    </div>

    <div class="bg-white border border-slate-200 rounded-3xl p-10 text-deep-purple relative overflow-hidden flex flex-col justify-center shadow-sm">
        <div class="relative z-10">
            <div class="w-12 h-12 bg-red-purple/10 text-wine rounded-xl flex items-center justify-center mb-6 text-2xl">
                <i class="fas fa-exchange-alt"></i>
            </div>
            <h3 class="text-3xl font-black mb-4">Website Transfer?</h3>
            <p class="text-slate-500 mb-8 font-medium">Moving from another host? We’ve got you covered!
                Our experts handle your full website migration data, files, and configurations with zero downtime and 100% data safety.
                Switch to DmcaQloud and experience faster speed, stronger privacy, and total stability from day one.</p>
            <a href="https://pos.dmcaqloud.com/submitticket.php" class="bg-wine text-white px-8 py-3 rounded-xl font-bold hover:bg-red-purple transition-colors w-fit">
                Migrate Now
            </a>
        </div>
    </div>
</section>

</main>

<?php include './inc/footer.php'; ?>