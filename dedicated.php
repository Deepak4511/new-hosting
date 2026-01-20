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
                Premium Hardwarwe
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight leading-tight">
                <span class="gradient-text">Affordable</span> Offshore <br> Dedicated Server Hosting
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed mb-8">
                Get full root access, unmetered bandwidth, and DMCA-ignored hosting in secure offshore locations in the Netherlands.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <button onclick="document.getElementById('server-list').scrollIntoView({behavior: 'smooth'})" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/30 hover:-translate-y-1">
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
            <img src="/assets/img/hero_illustration.png" alt="Dedicated Servers" class="relative w-full h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500" />
        </div>
    </div>
</section>



<!-- Server List -->
<section id="server-list" class=" px-6 max-w-[1600px] mx-auto">
    <!-- Header & Filters -->
    <div class=" items-center mb-12 gap-8">
        <div class="text-center  w-full xl:w-auto">
            <h2 class="text-4xl font-black text-deep-purple mb-4">Choose Your Dedicated Server</h2>
            <p class="text-slate-500 text-lg mb-4">Power, performance, and privacy combined.</p>
        </div>

        <?php include './inc/dedicatedPlan.php'; ?>
</section>

<!-- Eco Server Banner -->
<?php include './inc/eco-server-banner.php'; ?>

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
<?php include './inc/features-zigzag.php'; ?>

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