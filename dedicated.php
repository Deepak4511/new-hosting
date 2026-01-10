<?php
include './inc/navbar.php';
include './data/dedicated-data.php';
?>

<!-- Decorative Background -->
<div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
    <div class="floating-blob w-[600px] h-[600px] bg-deep-purple/5 top-[-15%] right-[-10%] opacity-50"></div>
    <div class="floating-blob w-[700px] h-[700px] bg-wine/5 bottom-[5%] left-[-15%] [animation-delay:4s] opacity-50"></div>
    <svg class="absolute top-0 left-0 w-full h-full opacity-[0.2]" xmlns="http://www.w3.org/2000/svg">
         <defs>
            <pattern id="grid-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                <path d="M 60 0 L 0 0 0 60" fill="none" stroke="#BF40BF" stroke-width="1"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid-pattern)" />
    </svg>
</div>

<main>
    <!-- Dedicated Hero -->
    <section class="pt-40 pb-20 px-6 text-center">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-black text-deep-purple mb-6 tracking-tight">
                <span class="gradient-text">Affordable</span> Offshore <br> Dedicated Server Hosting
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-3xl mx-auto leading-relaxed mb-10">
                Get full root access, unmetered bandwidth, and DMCA-ignored hosting in secure offshore locations in the Netherlands.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                 <button onclick="document.getElementById('server-list').scrollIntoView({behavior: 'smooth'})" class="bg-wine hover:bg-red-purple text-white px-10 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/30">
                    Choose Your Server
                </button>
                <button class="bg-white border border-slate-200 hover:bg-slate-50 px-10 py-4 rounded-xl font-bold text-lg transition-all text-slate-700 shadow-sm">
                    Contact Sales
                </button>
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

    <!-- Server List -->
    <section id="server-list" class="py-24 px-6 max-w-[1600px] mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-deep-purple mb-4">Choose Your Dedicated Server</h2>
            <p class="text-slate-500">From professional business to enterprise, we've got you covered!</p>
        </div>

        <div class="overflow-x-auto bg-white rounded-3xl border border-slate-100 shadow-sm">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-xs font-bold uppercase tracking-wider text-slate-400 border-b border-slate-100">
                        <th class="px-6 py-4">CPU Model</th>
                        <th class="px-6 py-4">Detailed Specs</th>
                        <th class="px-6 py-4">RAM</th>
                        <th class="px-6 py-4">Storage</th>
                        <th class="px-6 py-4">Bandwidth</th>
                        <th class="px-6 py-4">Uplink</th>
                        <th class="px-6 py-4">Data Center</th>
                        <th class="px-6 py-4">Price/Mo</th>
                        <th class="px-6 py-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium text-slate-600 divide-y divide-slate-100">
                    <?php foreach ($DEDICATED_SERVERS as $server): ?>
                    <tr class="hover:bg-slate-50 transition-colors group">
                        <td class="px-6 py-6 font-bold text-deep-purple text-base">
                            <span class="text-wine mr-2"><i class="fas fa-server"></i></span>
                            <?php echo $server['cpu_name']; ?>
                        </td>
                        <td class="px-6 py-6 text-slate-500"><?php echo $server['cpu_detail'] ?: '-'; ?></td>
                        <td class="px-6 py-6 font-bold text-slate-700"><?php echo $server['ram']; ?></td>
                        <td class="px-6 py-6"><?php echo $server['storage']; ?></td>
                        <td class="px-6 py-6">
                            <span class="inline-block px-2 py-1 bg-deep-purple/5 text-deep-purple rounded text-xs font-bold border border-deep-purple/10">
                                <?php echo $server['bandwidth']; ?>
                            </span>
                        </td>
                        <td class="px-6 py-6"><?php echo $server['uplink']; ?></td>
                        <td class="px-6 py-6">
                            <div class="flex items-center gap-2">
                                <img src="https://flagcdn.com/w20/nl.png" alt="Netherlands" class="rounded-sm">
                                <span>Amsterdam</span>
                            </div>
                        </td>
                        <td class="px-6 py-6">
                            <div class="text-2xl font-black text-deep-purple">$<?php echo $server['price']; ?></div>
                        </td>
                        <td class="px-6 py-6">
                            <button class="bg-wine hover:bg-red-purple text-white px-6 py-2.5 rounded-lg font-bold transition-all shadow-md shadow-wine/20 group-hover:scale-105">
                                Deploy
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
                <p class="text-thistle mb-8 font-medium">Launch your project with complete freedom and privacy! Get your server running within minutes.</p>
                <button class="bg-white text-wine px-8 py-3 rounded-xl font-bold hover:bg-thistle transition-colors w-fit">
                    Get Started
                </button>
             </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-3xl p-10 text-deep-purple relative overflow-hidden flex flex-col justify-center shadow-sm">
             <div class="relative z-10">
                <div class="w-12 h-12 bg-red-purple/10 text-wine rounded-xl flex items-center justify-center mb-6 text-2xl">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h3 class="text-3xl font-black mb-4">Website Transfer?</h3>
                <p class="text-slate-500 mb-8 font-medium">Moving from another host? Our experts handle your full migration with zero downtime.</p>
                <button class="bg-wine text-white px-8 py-3 rounded-xl font-bold hover:bg-red-purple transition-colors w-fit">
                    Migrate Now
                </button>
             </div>
        </div>
    </section>

</main>

<?php include './inc/footer.php'; ?>
