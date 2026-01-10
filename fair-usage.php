<?php
include './inc/navbar.php';
include './data/fair-usage-data.php';
?>

<!-- Decorative Background -->
<div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
    <div class="floating-blob w-[600px] h-[600px] bg-red-purple/5 top-[-15%] right-[-10%] opacity-50"></div>
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
    <!-- Hero Section -->
    <section class="pt-40 pb-20 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight">
                <?php echo $FAIR_USAGE_HERO['title']; ?>
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-2xl mx-auto leading-relaxed mb-6">
                <?php echo $FAIR_USAGE_HERO['subtitle']; ?>
            </p>
            <div class="inline-block bg-wine text-white px-6 py-2 rounded-full text-sm font-bold shadow-md shadow-wine/20">
                <?php echo $FAIR_USAGE_HERO['last_updated']; ?>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="pb-24 px-6 max-w-4xl mx-auto">
        <div class="space-y-8">
            <?php foreach ($FAIR_USAGE_CONTENT as $section): ?>
            <div class="bg-white p-8 md:p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
                <!-- Decorative Side Line -->
                <div class="absolute left-0 top-0 h-full w-1.5 bg-gradient-to-b from-red-purple to-wine"></div>

                <h2 class="text-2xl font-black text-deep-purple mb-4 flex items-center gap-3">
                    <?php echo $section['title']; ?>
                </h2>

                <?php if (isset($section['content'])): ?>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">
                        <?php echo $section['content']; ?>
                    </p>
                <?php endif; ?>

                <!-- Points -->
                <?php if (isset($section['points'])): ?>
                    <ul class="space-y-3 mb-6">
                        <?php foreach ($section['points'] as $point): ?>
                        <li class="flex items-start gap-3 text-slate-600">
                            <span class="text-wine mt-1.5"><i class="fas fa-chevron-right text-[10px]"></i></span>
                            <span class="leading-relaxed"><?php echo $point; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <!-- Subsections -->
                <?php if (isset($section['subsections'])): ?>
                    <div class="space-y-6 mt-8 pl-0 md:pl-4 border-l-0 md:border-l border-slate-100">
                        <?php foreach ($section['subsections'] as $sub): ?>
                        <div>
                            <h3 class="text-lg font-bold text-wine mb-3"><?php echo $sub['subtitle']; ?></h3>
                            <?php if (isset($sub['points'])): ?>
                                <ul class="space-y-2">
                                    <?php foreach ($sub['points'] as $sp): ?>
                                    <li class="flex items-start gap-3 text-slate-600 text-sm font-medium">
                                        <span class="text-red-purple/60 mt-1.5"><i class="fas fa-times text-[10px]"></i></span>
                                        <span class="leading-relaxed"><?php echo $sp; ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Alert Box -->
                <?php if (isset($section['alert_box'])): ?>
                    <div class="mt-8 bg-red-50 border border-red-100 p-6 rounded-2xl text-center shadow-inner">
                        <p class="font-black text-red-600 text-base uppercase tracking-wide">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <?php echo $section['alert_box']; ?>
                        </p>
                    </div>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php include './inc/footer.php'; ?>
