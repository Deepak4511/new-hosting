<?php
include './inc/navbar.php';
include './data/refund-data.php';
?>

<!-- Decorative Background -->
<div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
    <div class="floating-blob w-[600px] h-[600px] bg-red-purple/5 top-[-15%] right-[-10%] opacity-50"></div>
    <div class="floating-blob w-[700px] h-[700px] bg-wine/5 bottom-[5%] left-[-15%] [animation-delay:4s] opacity-50"></div>
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
                <?php echo $REFUND_HERO['title']; ?>
            </h1>
            <p class="text-xl text-slate-600 font-medium max-w-2xl mx-auto leading-relaxed mb-6">
                <?php echo $REFUND_HERO['subtitle']; ?>
            </p>
            <div class="inline-block bg-white border border-slate-200 px-4 py-2 rounded-lg text-sm font-bold text-slate-500 shadow-sm">
                <?php echo $REFUND_HERO['last_updated']; ?>
            </div>
        </div>
    </section>

    <!-- Top Alerts -->
    <?php if (isset($REFUND_ALERTS)): ?>
    <section class="px-6 mb-12 max-w-4xl mx-auto space-y-6">
        <?php foreach ($REFUND_ALERTS as $alert): 
            $colors = $alert['type'] == 'danger' 
                ? 'bg-red-50 border-red-100 text-red-700' 
                : 'bg-blue-50 border-blue-100 text-blue-700';
            $icon = $alert['type'] == 'danger' ? 'fa-ban' : 'fa-info-circle';
        ?>
        <div class="<?php echo $colors; ?> border p-6 rounded-2xl text-center shadow-sm">
            <h3 class="font-black text-lg mb-2 uppercase tracking-wide flex items-center justify-center gap-2">
                <i class="fas <?php echo $icon; ?>"></i> <?php echo $alert['title']; ?>
            </h3>
            <p class="font-medium text-sm md:text-base"><?php echo $alert['text']; ?></p>
        </div>
        <?php endforeach; ?>
    </section>
    <?php endif; ?>

    <!-- Content -->
    <section class="pb-24 px-6 max-w-4xl mx-auto">
        <div class="space-y-8">
            <?php foreach ($REFUND_CONTENT as $index => $section): ?>
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

                <!-- Points -->
                <?php if (isset($section['points'])): ?>
                    <ul class="space-y-3 mb-6">
                        <?php foreach ($section['points'] as $point): ?>
                        <li class="flex items-start gap-3 text-slate-600">
                            <span class="text-red-purple mt-1.5"><i class="fas fa-times text-[10px]"></i></span>
                            <span class="leading-relaxed"><?php echo $point; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <!-- Subsections -->
                <?php if (isset($section['subsections'])): ?>
                    <div class="grid md:grid-cols-2 gap-8 mt-6">
                        <?php foreach ($section['subsections'] as $sub): ?>
                        <div>
                            <h3 class="text-lg font-bold text-wine mb-3 border-b border-wine/10 pb-2"><?php echo $sub['subtitle']; ?></h3>
                            <?php if (isset($sub['points'])): ?>
                                <ul class="space-y-2">
                                    <?php foreach ($sub['points'] as $sp): ?>
                                    <li class="flex items-center gap-2 text-slate-600 text-sm font-medium">
                                        <span class="w-1.5 h-1.5 rounded-full bg-red-purple/60"></span>
                                        <span><?php echo $sp; ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Chargeback Alert Box -->
                <?php if (isset($section['alert_box'])): ?>
                    <div class="mt-8 bg-white border-2 border-red-purple px-6 py-8 rounded-2xl text-center shadow-lg transform hover:scale-[1.02] transition-transform">
                        <p class="font-black text-deep-purple text-xl uppercase tracking-wider mb-4">
                            <i class="fas fa-gavel mr-2 text-wine"></i>
                            <?php echo $section['alert_box']; ?>
                        </p>
                        <p class="text-slate-500 text-sm">We maintain a zero-tolerance policy against fraud.</p>
                    </div>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>

        <!-- Footer Note -->
        <div class="mt-12 text-center">
            <div class="bg-slate-50 border border-slate-200 p-6 rounded-2xl inline-block max-w-2xl">
                <p class="font-bold text-deep-purple mb-2">QUESTIONS BEFORE BUYING?</p>
                <p class="text-slate-500 text-sm">
                    If you are unsure if our service is right for you, please <a href="index.php#contact" class="text-wine font-bold hover:underline">Contact Sales</a> before purchasing.
                </p>
            </div>
        </div>

    </section>

</main>

<?php include './inc/footer.php'; ?>
