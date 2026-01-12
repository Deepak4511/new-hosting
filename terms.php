<?php
include './inc/navbar.php';
include './data/terms-data.php';
?>

<!-- Decorative Background -->
<div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
    <div class="floating-blob w-[600px] h-[600px] bg-wine/5 top-[-15%] right-[-10%] opacity-50"></div>
    <div class="floating-blob w-[700px] h-[700px] bg-red-purple/5 bottom-[5%] left-[-15%] [animation-delay:4s] opacity-50"></div>
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
    <section class="pt-40 pb-20 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-black text-deep-purple mb-6 tracking-tight">
                <?php echo $TERMS_HERO['title']; ?>
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-2xl mx-auto leading-relaxed mb-6">
                <?php echo $TERMS_HERO['subtitle']; ?>
            </p>
            <div class="inline-block bg-white border border-slate-200 px-4 py-2 rounded-lg text-sm font-bold text-slate-500 shadow-sm">
                <?php echo $TERMS_HERO['last_updated']; ?>
            </div>
        </div>
    </section>

    <!-- Terms Content -->
    <section class="pb-24 px-6 max-w-5xl mx-auto">
        <div class="space-y-8">
            <?php foreach ($TERMS_CONTENT as $section): ?>
            <div class="bg-white p-8 md:p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
                <!-- Decorative Side Line -->
                <div class="absolute left-0 top-0 h-full w-1.5 bg-gradient-to-b from-wine to-red-purple"></div>

                <h2 class="text-2xl font-black text-deep-purple mb-4 flex items-center gap-3">
                    <?php echo $section['title']; ?>
                </h2>

                <?php if (isset($section['content'])): ?>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">
                        <?php echo $section['content']; ?>
                    </p>
                <?php endif; ?>

                <!-- Main Points -->
                <?php if (isset($section['points'])): ?>
                    <ul class="space-y-3 mb-6">
                        <?php foreach ($section['points'] as $point): ?>
                        <li class="flex items-start gap-3 text-slate-600">
                            <span class="text-red-purple mt-1.5"><i class="fas fa-circle text-[6px]"></i></span>
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
                                        <span class="text-red-purple/60 mt-1.5"><i class="fas fa-check text-[10px]"></i></span>
                                        <span class="leading-relaxed"><?php echo $sp; ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Highlight Box (for Contact) -->
                <?php if (isset($section['highlight_box'])): ?>
                    <div class="mt-6 bg-red-purple/5 border border-red-purple/20 p-6 rounded-xl text-center">
                        <p class="font-bold text-deep-purple">
                            <?php echo $section['highlight_box']; ?>
                        </p>
                    </div>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php include './inc/footer.php'; ?>
