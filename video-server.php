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
    <section id="server-list" class="py-12 px-6 max-w-[1600px] mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-deep-purple mb-4">Ultra-Fast Video Servers for VOD</h2>
            <p class="text-slate-500">Massive Storage. Unmetered Bandwidth.</p>
        </div>

        <div class="flex flex-col gap-6">
            <?php foreach ($VIDEO_SERVERS as $server): ?>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6 hover:shadow-lg hover:-translate-y-1 transition-all group">
                
                <!-- Server Info -->
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-xl font-bold text-deep-purple mb-2">
                        <i class="fas fa-server text-wine mr-2"></i> <?php echo $server['cpu']; ?>
                    </h3>
                    <div class="flex flex-wrap gap-4 text-sm text-slate-600 justify-center md:justify-start">
                        <span class="flex items-center gap-1"><i class="fas fa-memory text-red-purple/70"></i> <?php echo $server['ram']; ?></span>
                        <span class="flex items-center gap-1"><i class="fas fa-hdd text-red-purple/70"></i> <?php echo $server['storage']; ?></span>
                        <span class="flex items-center gap-1"><i class="fas fa-tachometer-alt text-red-purple/70"></i> <?php echo $server['bandwidth']; ?></span>
                    </div>
                </div>

                <!-- Price & Action -->
                <div class="flex items-center gap-6">
                    <div class="text-right">
                        <div class="text-3xl font-black text-deep-purple">$<?php echo $server['price']; ?><span class="text-sm text-slate-400 font-bold ml-1">/mo</span></div>
                        <div class="text-xs text-green-500 font-bold uppercase tracking-wider"><?php echo $server['setup']; ?></div>
                    </div>
                    <button class="bg-gradient-to-r from-wine to-red-purple text-white px-8 py-3 rounded-xl font-bold hover:shadow-lg hover:shadow-wine/25 transition-all transform active:scale-95">
                        Deploy Now
                    </button>
                </div>

            </div>
            <?php endforeach; ?>
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
