<?php
include './data/home-data.php'; // Reusing FAQ data
$page = 'contact';
include './inc/navbar.php';
?>

<main>
    <!-- Light Theme Hero Section -->
    <section class="relative pt-40 pb-20 px-6 min-h-[60vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-wine/5 via-white to-red-purple/5">
        <!-- Background Decor (Matching Home) -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none -z-10">
            <div class="floating-blob w-[600px] h-[600px] bg-deep-purple/5 top-[-10%] right-[-10%] opacity-50"></div>
            <div class="floating-blob w-[500px] h-[500px] bg-red-purple/5 bottom-[0%] left-[-5%] opacity-50"></div>
            <svg class="absolute top-0 left-0 w-full h-full opacity-[0.2]" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-pattern-contact" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#BF40BF" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-pattern-contact)" />
            </svg>
        </div>

        <div class="text-center relative z-10 max-w-4xl mx-auto">
            <span class="inline-block px-4 py-1.5 mb-6 text-sm font-bold text-wine border border-wine/10 bg-white/80 rounded-full uppercase tracking-wider shadow-sm backdrop-blur-sm">
                <i class="fas fa-globe-americas mr-2 text-red-purple"></i> Global Reach &bullet; Reliable Support
            </span>
            <h1 class="text-5xl md:text-7xl font-black mb-8 text-deep-purple tracking-tight leading-tight">
                Connect with our <br>
                <span class="gradient-text bg-clip-text text-transparent bg-gradient-to-r from-wine to-red-purple">Infrastructure Experts</span>
            </h1>
            <p class="text-slate-600 text-lg md:text-xl mb-10 leading-relaxed font-medium max-w-2xl mx-auto">
                Whether you're scaling a startup or maintaining enterprise infrastructure, our dedicated team at Dmcaqloud is ready to assist you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#channels" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/20 hover:-translate-y-1">
                    Explore Channels <i class="fas fa-chevron-right ml-2 text-sm"></i>
                </a>
                <a href="dedicated.php" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-sm hover:-translate-y-1">
                    View Technical Specs
                </a>
            </div>
        </div>
    </section>

    <!-- Channels Section (Light Theme) -->
    <section id="channels" class="py-24 px-6 relative bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Telegram Card -->
                <div class="bg-white border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-wine/5 rounded-bl-full -mr-16 -mt-16 transition-transform group-hover:scale-110"></div>

                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-wine group-hover:text-white transition-colors text-wine shadow-sm">
                        <i class="fab fa-telegram-plane"></i>
                    </div>
                    <span class="block text-red-purple text-xs font-bold uppercase tracking-wider mb-2">Instant Chat</span>
                    <h3 class="text-2xl font-bold text-deep-purple mb-4">Telegram</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 min-h-[3rem]">
                        Get lightning fast responses for urgent queries, technical support, and quick sales estimates. Available 24/7.
                    </p>
                    <a href="http://t.me/Dmcaqloud" class="inline-flex items-center text-wine font-bold text-sm group-hover:text-red-purple transition-colors">
                        Get in Touch <i class="fas fa-external-link-alt ml-2 text-xs opacity-70"></i>
                    </a>
                </div>

                <!-- Sales Department Card -->
                <div class="bg-white border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-red-purple/5 rounded-bl-full -mr-16 -mt-16 transition-transform group-hover:scale-110"></div>

                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-red-purple group-hover:text-white transition-colors text-red-purple shadow-sm">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <span class="block text-red-purple text-xs font-bold uppercase tracking-wider mb-2">New Projects</span>
                    <h3 class="text-2xl font-bold text-deep-purple mb-4">Sales Department</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 min-h-[3rem]">
                        Discuss custom infrastructure needs, enterprise plans, and high-volume hosting discounts with our sales engineers.
                    </p>
                    <a href="mailto:sales@dmcaqloud.com" class="inline-flex items-center text-wine font-bold text-sm group-hover:text-red-purple transition-colors">
                        Get in Touch <i class="fas fa-external-link-alt ml-2 text-xs opacity-70"></i>
                    </a>
                </div>

                <!-- Technical Support Card -->
                <div class="bg-white border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-wine/5 rounded-bl-full -mr-16 -mt-16 transition-transform group-hover:scale-110"></div>

                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-wine group-hover:text-white transition-colors text-wine shadow-sm">
                        <i class="fas fa-headset"></i>
                    </div>
                    <span class="block text-red-purple text-xs font-bold uppercase tracking-wider mb-2">Maintenance</span>
                    <h3 class="text-2xl font-bold text-deep-purple mb-4">Technical Support</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 min-h-[3rem]">
                        Report issues, request server configurations, or seek technical advice regarding your active Dmcaqloud instances.
                    </p>
                    <a href="mailto:support@dmcaqloud.com" class="inline-flex items-center text-wine font-bold text-sm group-hover:text-red-purple transition-colors">
                        Get in Touch <i class="fas fa-external-link-alt ml-2 text-xs opacity-70"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Operational Core Section (Light Theme) -->
    <section class="py-24 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <!-- Using a white card container for the 'core' to make it pop against slate-50 -->
            <div class="bg-white rounded-[3rem] p-8 md:p-16 border border-slate-200 shadow-xl relative overflow-hidden">
                <!-- Grid decoration (Darker grid for light bg) -->
                <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#301934 1px, transparent 1px); background-size: 30px 30px;"></div>

                <div class="relative z-10 grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Text Content -->
                    <div>
                        <h2 class="text-3xl md:text-5xl font-black text-deep-purple mb-6">Our Operational <span class="text-red-purple">Core</span></h2>
                        <p class="text-slate-600 text-lg mb-12 leading-relaxed">
                            While our infrastructure is globally distributed, our support and management operations are centralized to ensure maximum security and efficiency.
                        </p>

                        <div class="space-y-8">
                            <!-- Hours -->
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 rounded-full bg-slate-50 flex flex-shrink-0 items-center justify-center text-wine text-xl border border-slate-100 group-hover:bg-wine group-hover:text-white transition-colors shadow-sm">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div>
                                    <h4 class="text-deep-purple font-bold text-lg mb-1">Business Hours</h4>
                                    <p class="text-slate-500 text-sm">Mon - Fri: 09:00 - 18:00 (EST)</p>
                                    <p class="text-red-purple text-sm font-bold mt-1">SLA Critical Support: 24/7</p>
                                </div>
                            </div>

                            <!-- Hub -->
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 rounded-full bg-slate-50 flex flex-shrink-0 items-center justify-center text-wine text-xl border border-slate-100 group-hover:bg-wine group-hover:text-white transition-colors shadow-sm">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="text-deep-purple font-bold text-lg mb-1">Regional Hub</h4>
                                    <p class="text-slate-500 text-sm">Strategic Data Center Park</p>
                                    <p class="text-slate-500 text-sm">Zurich, Switzerland</p>
                                </div>
                            </div>

                            <!-- Global -->
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 rounded-full bg-slate-50 flex flex-shrink-0 items-center justify-center text-wine text-xl border border-slate-100 group-hover:bg-wine group-hover:text-white transition-colors shadow-sm">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div>
                                    <h4 class="text-deep-purple font-bold text-lg mb-1">Global Presence</h4>
                                    <p class="text-slate-500 text-sm">Nodes in 24+ global regions including New York, Tokyo, and Frankfurt.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Visual Right Side -->
                    <div class="relative">
                        <!-- Card visual similar to image but light -->
                        <div class="bg-deep-purple rounded-3xl p-6 border border-slate-100 aspect-square flex items-center justify-center relative shadow-2xl overflow-hidden group">

                            <!-- Keep this dark for contrast as a 'server status' monitor look, or make it light? 
                                  User said "I want in light theme". But monitors are usually dark. 
                                  Let's compromise: The card stays dark purple because it represents a "Core/System" and looks premium, 
                                  but it sits on a light background. This fits the "Light Theme Page" request while keeping the UI element looking cool.
                                  actually, let's stick to the user request.
                             -->
                            <!-- Background Image/Map Effect -->
                            <div class="absolute inset-0 opacity-20 bg-center" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
                            <div class="absolute inset-0 bg-[url('assets/img/grain.webp')] opacity-10 mix-blend-overlay"></div>

                            <!-- Status Pulse -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

                            <div class="relative z-10 text-center p-8 bg-white/10 backdrop-blur-md rounded-2xl border border-white/10 shadow-lg group-hover:scale-105 transition-transform duration-500">
                                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-red-purple to-wine rounded-full flex items-center justify-center text-2xl text-white shadow-lg animate-pulse">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4 class="text-white font-bold uppercase tracking-widest text-sm mb-2">Status</h4>
                                <div class="text-[#4ade80] text-2xl font-black tracking-wider drop-shadow-md">OPERATIONAL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 px-6 relative overflow-hidden bg-slate-50">
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

</main>

<?php include './inc/footer.php'; ?>