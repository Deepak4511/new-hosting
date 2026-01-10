<?php
include './inc/navbar.php';
?>

<!-- Background Decor -->
<div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
    <div class="floating-blob w-[600px] h-[600px] bg-red-purple/5 top-[-15%] right-[-10%] opacity-60"></div>
    <div class="floating-blob w-[700px] h-[700px] bg-deep-purple/5 bottom-[5%] left-[-15%] [animation-delay:4s] opacity-60"></div>
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
    <!-- Use Cases Hero -->
    <section class="pt-40 pb-20 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight">
                Top <span class="gradient-text">Use Cases</span>
            </h1>
            <p class="text-xl text-slate-500 font-medium max-w-2xl mx-auto leading-relaxed">
                Unlock the power of DMCA Ignored Infrastructure. Explore the top ways professionals and businesses use our offshore servers.
            </p>
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
