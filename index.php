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
                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#BF40BF" stroke-width="1"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid-pattern)" />
    </svg>
</div>

<main>
    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 px-6 min-h-[75vh] flex flex-col items-center justify-center text-center">
        <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-wine/10 bg-white/80 text-deep-purple text-sm font-bold mb-10 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-red-purple animate-pulse"></span>
            Total Privacy Freedom
        </div>
        <h1 class="text-5xl md:text-7xl font-black mb-8 leading-tight text-deep-purple max-w-5xl">
            <?php echo $HERO_DATA['title']; ?>
        </h1>
        <p class="text-slate-600 text-xl mb-10 leading-relaxed font-medium max-w-3xl">
            <?php echo $HERO_DATA['subtitle']; ?>
        </p>
        
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <?php foreach ($HERO_DATA['features'] as $feat): ?>
                <div class="flex items-center gap-2 bg-white/80 px-4 py-2 rounded-full border border-wine/10 shadow-sm text-wine text-sm font-bold backdrop-blur-sm">
                    <i class="fas fa-check-circle text-red-purple"></i>
                    <?php echo $feat; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex gap-4">
            <button class="bg-wine hover:bg-red-purple text-white px-10 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/20">
                Get Started
            </button>
            <button class="bg-white border border-slate-200 hover:bg-slate-50 px-10 py-4 rounded-xl font-bold text-lg transition-all text-slate-700 shadow-sm">
                View Plans
            </button>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-24 px-6 relative w-full max-w-[1600px] mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-4xl md:text-5xl font-black mb-6 text-deep-purple">Affordable DMCA Ignored Hosting</h2>
            <p class="text-slate-500 text-lg font-medium">Warm fuzzies included.</p>
        </div>

        <!-- 3-Way Duration Toggle (1m, 6m, 1y) -->
        <div class="flex justify-center mb-16">
            <div class="bg-slate-100 p-1.5 rounded-2xl flex gap-1 shadow-inner">
                <button onclick="setDuration('1m')" id="btn-1m" class="duration-btn px-6 py-2.5 rounded-xl text-sm font-bold transition-all bg-white text-wine shadow-sm">1 Month</button>
                <button onclick="setDuration('6m')" id="btn-6m" class="duration-btn px-6 py-2.5 rounded-xl text-sm font-bold transition-all text-slate-500 hover:text-slate-900">6 Months</button>
                <button onclick="setDuration('1y')" id="btn-1y" class="duration-btn px-6 py-2.5 rounded-xl text-sm font-bold transition-all text-slate-500 hover:text-slate-900">1 Year</button>
            </div>
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
                    $basePrice = is_numeric($plan['price']) ? $plan['price'] : 0;
                    $isContact = !is_numeric($plan['price']);
                ?>
                <div class="<?php echo $cardBase . ' ' . $bgClass; ?>">
                    <h3 class="text-xl font-black text-deep-purple mb-2"><?php echo $plan['name']; ?></h3>
                    
                    <div class="flex items-baseline gap-1 my-4 min-h-[4rem] justify-center">
                        <?php if (!$isContact): ?>
                            <span class="text-sm font-bold text-slate-500">$</span>
                            <!-- Price span with data attributes for JS -->
                            <span class="price-val text-5xl font-black text-deep-purple tracking-tighter" data-base="<?php echo $basePrice; ?>"><?php echo $basePrice; ?></span>
                            <span class="price-period text-xs font-bold text-slate-400">/mo</span>
                        <?php else: ?>
                            <span class="text-3xl font-black text-deep-purple tracking-tighter my-auto">Contact Us</span>
                        <?php endif; ?>
                    </div>
                    
                    <?php if (isset($plan['subtitle'])): ?>
                        <p class="text-wine/70 text-xs font-bold uppercase tracking-wide mb-6"><?php echo $plan['subtitle']; ?></p>
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
                    
                    <button class="mt-auto w-full py-3 rounded-xl font-bold text-sm transition-all shadow-sm <?php echo $btnClass; ?>">
                        <?php echo $plan['button_text']; ?>
                    </button>
                </div>
                <?php endforeach; ?>
            </div>

             <!-- Illustration Right -->
             <div class="hidden 2xl:block absolute right-0 bottom-0 top-20 w-56 pointer-events-none translate-x-4 translate-y-12 flex items-end">
                <img src="/assets/img/pricing_woman_standing.png" alt="Woman standing" class="w-full h-auto object-contain drop-shadow-xl" />
            </div>
        </div>
    </section>

    <!-- Script for Duration Toggle -->
    <script>
        function setDuration(mode) {
            // Update buttons
            document.querySelectorAll('.duration-btn').forEach(btn => {
                btn.classList.remove('bg-white', 'text-wine', 'shadow-sm');
                btn.classList.add('text-slate-500');
            });
            document.getElementById('btn-' + mode).classList.add('bg-white', 'text-wine', 'shadow-sm');
            document.getElementById('btn-' + mode).classList.remove('text-slate-500');

            // Update Prices
            document.querySelectorAll('.price-val').forEach(el => {
                const base = parseFloat(el.getAttribute('data-base'));
                if (!base) return;

                let final = base;
                let period = '/mo';

                if (mode === '6m') {
                    final = base * 0.95; // 5% Discount logic
                } else if (mode === '1y') {
                    final = base * 0.90; // 10% Discount logic
                }

                // Animate change
                el.style.opacity = 0;
                setTimeout(() => {
                   el.innerText = final.toLocaleString('en-US', {minimumFractionDigits: 0, maximumFractionDigits: 2});
                   el.style.opacity = 1;
                }, 200);
            });
        }
    </script>

    <!-- Why Choose Features Section -->
    <section id="features" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="text-3xl md:text-5xl font-black mb-6 text-deep-purple">Why Choose DMCAQCloud?</h2>
            <p class="text-slate-500 text-base max-w-2xl mx-auto">Bulletproof privacy meets enterprise performance.</p>
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
                
                <div class="space-y-8">
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
                                <?php for($i=0; $i<$t['stars']; $i++): ?><i class="fas fa-star"></i><?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 px-6 max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-black mb-12 text-center text-deep-purple">Frequently asked questions</h2>
        <div class="space-y-4">
            <?php foreach ($FAQ_ITEMS as $i => $item): ?>
                <div class="bg-white rounded-xl border border-slate-100 overflow-hidden transition-all duration-300 hover:border-wine/30 group">
                    <button 
                        onclick="toggleFaq(<?php echo $i; ?>)"
                        class="w-full px-6 py-5 text-left flex justify-between items-center cursor-pointer focus:outline-none"
                    >
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
    </section>

    <!-- Contact Us Section (New - No Form) -->
    <section id="contact" class="py-24 px-6  text-deep-purple mt-12">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-black mb-6">Need Help? Get in Touch</h2>
            <p class="text-slate-500 text-lg mb-16 max-w-2xl mx-auto">We are here to help you 24/7 with any pre-sales questions or technical issues.</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Live Chat -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-wine transition-colors group shadow-sm hover:shadow-md">
                    <div class="w-16 h-16 bg-red-purple/10 text-wine rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Live Chat</h3>
                    <p class="text-slate-500 mb-6 text-sm">Instant answers from our agents.</p>
                    <button class="text-white font-bold bg-wine hover:bg-red-purple px-6 py-2 rounded-lg transition-colors">Start Chat</button>
                </div>

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
                    <a href="#" class="text-white font-bold bg-wine hover:bg-red-purple px-6 py-2 rounded-lg transition-colors inline-block">Message Us</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
include './inc/footer.php';
?>