<?php
include './inc/navbar.php';
?>

<!-- Use Cases Hero -->
    <section class="relative pt-32 pb-32 px-6 min-h-[70vh] flex items-center overflow-hidden bg-gradient-to-br from-wine/10 via-white to-red-purple/10" style="--c: 80px; mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000); -webkit-mask: radial-gradient(60% var(--c) at bottom, #0000 calc(100% - 2px), #000);">
        <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Left Content -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-wine/10 bg-white/60 text-wine text-xs font-bold mb-6 shadow-sm backdrop-blur-md mx-auto lg:mx-0">
                    <span class="flex h-2 w-2 rounded-full bg-red-purple animate-pulse"></span>
                    Versatile Solutions
                </div>
                <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight leading-tight">
                    Top <span class="gradient-text">Use Cases</span> <br> for Offshore Hosting
                </h1>
                <p class="text-xl text-slate-600 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed mb-8">
                    Unlock the power of DMCA Ignored Infrastructure. Explore the top ways professionals and businesses use our offshore servers.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                     <button onclick="window.scrollTo({top: 800, behavior: 'smooth'})" class="bg-wine hover:bg-red-purple text-white px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-xl shadow-wine/30 hover:-translate-y-1">
                        Explore Use Cases
                    </button>
                </div>
            </div>
            
             <!-- Right Image -->
            <div class="relative hidden lg:block">
                 <div class="absolute -inset-4 bg-gradient-to-r from-red-purple/20 to-wine/20 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                <img src="/assets/img/hero_illustration.png" alt="Use Cases Illustration" class="relative w-full h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500" />
            </div>
        </div>
    </section>

    <!-- Use Cases Grid (Light Theme) -->
    <section class="py-12 px-6 max-w-7xl mx-auto mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            // Reuse the USE_CASES data but render with the Light Theme style
            foreach($USE_CASES as $case): 
                // Assign a gradient based on index or random for visual variety if distinct gradients aren't in data
                // For this implementation, we'll cycle through a few standard gradients matching the site
                $gradients = [
                    'from-deep-purple via-wine to-red-purple', 
                    'from-wine via-red-purple to-wine', 
                    'from-deep-purple to-wine',
                    'from-red-purple to-deep-purple',
                    'from-deep-purple via-wine to-deep-purple'
                ];
                $g = $gradients[array_rand($gradients)];
            ?>
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden group border border-slate-100 hover:-translate-y-1">
                <!-- Top Gradient Border -->
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r <?php echo $g; ?>"></div>
                
                <div class="w-14 h-14 mb-6 flex items-center justify-center text-wine bg-wine/5 rounded-xl group-hover:scale-110 transition-transform duration-300">
                     <i class="fas <?php echo $case['icon']; ?> text-2xl"></i>
                </div>
                
                <h3 class="text-xl font-bold text-deep-purple mb-3"><?php echo $case['title']; ?></h3>
                <p class="text-slate-500 text-sm leading-relaxed font-medium"><?php echo $case['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 px-6 max-w-5xl mx-auto text-center">
        <div class="bg-deep-purple rounded-[3rem] p-12 md:p-20 relative overflow-hidden text-white shadow-2xl">
            <div class="absolute top-0 right-0 w-96 h-96 bg-red-purple rounded-full mix-blend-screen filter blur-3xl opacity-30 -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-wine rounded-full mix-blend-screen filter blur-3xl opacity-40 translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-black mb-8">Ready to Get Started?</h2>
                <p class="text-red-purple/90 text-lg mb-10 max-w-2xl mx-auto">Deploy your DMCA ignored dedicated server today and experience true offshore freedom.</p>
                <a href="dedicated.php" class="inline-block bg-white text-deep-purple hover:bg-wine hover:text-white px-10 py-4 rounded-xl font-bold text-lg transition-all transform hover:scale-105 shadow-xl">
                    View Servers
                </a>
            </div>
        </div>
    </section>

</main>

<?php include './inc/footer.php'; ?>
