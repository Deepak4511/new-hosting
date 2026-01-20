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
                High Bandwidth
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight leading-tight">
                <span class="gradient-text">Robust</span> Offshore <br> Streaming Servers
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed mb-8">
                <?php echo $STREAMING_HERO['subtitle']; ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <button onclick="document.getElementById('server-list').scrollIntoView({behavior: 'smooth'})" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/30 hover:-translate-y-1">
                    <?php echo $STREAMING_HERO['cta']; ?>
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
            <h2 class="text-4xl font-black text-deep-purple mb-4">Amsterdam DMCA-Ignored Streaming</h2>
            <p class="text-slate-500 text-lg mb-4">Enterprise Reliability, Instant Scale.</p>
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

<!-- Eco Server Banner -->
<?php include './inc/eco-server-banner.php'; ?>

<!-- Features ZigZag -->
<?php include './inc/features-zigzag.php'; ?>

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