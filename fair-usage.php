<?php
include './inc/navbar.php';
include './data/fair-usage-data.php';

function slugify($text)
{
    if (!$text) return 'section';
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    return $text ?: 'n-a';
}
?>

<!-- Decorative Background -->
<div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
    <div class="floating-blob w-[600px] h-[600px] bg-red-purple/5 top-[-15%] right-[-10%] opacity-50"></div>
    <div class="floating-blob w-[700px] h-[700px] bg-wine/5 bottom-[5%] left-[-15%] [animation-delay:4s] opacity-50"></div>
    <svg class="absolute top-0 left-0 w-full h-full opacity-[0.2]" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#BF40BF" stroke-width="1" />
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
            <div class="inline-block bg-white border border-slate-200 px-4 py-2 rounded-lg text-sm font-bold text-slate-500 shadow-sm">
                <?php echo $FAIR_USAGE_HERO['last_updated']; ?>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="pb-24 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-12 gap-12 relative">

            <!-- Sidebar (Desktop) -->
            <div class="hidden lg:block lg:col-span-4 xl:col-span-3">
                <div class="sticky top-32 transition-all duration-300">
                    <h3 class="font-bold text-deep-purple mb-6 px-4 uppercase tracking-wider text-xs opacity-50">Table of Contents</h3>
                    <nav class="space-y-1 relative" id="sidebar-nav">
                        <!-- Decorative Line -->
                        <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-slate-200 ml-0.5"></div>

                        <?php foreach ($FAIR_USAGE_CONTENT as $index => $section):
                            $id = slugify($section['title']);
                        ?>
                            <a href="#<?php echo $id; ?>" class="sidebar-link block py-3 px-6 border-l-[3px] border-transparent text-slate-500 hover:text-wine hover:border-wine/50 transition-all text-sm font-bold relative z-10" data-target="<?php echo $id; ?>">
                                <?php echo $section['title']; ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-8 xl:col-span-9 space-y-16">

                <!-- Mobile TOC -->
                <div class="lg:hidden mb-8 sticky top-24 z-30">
                    <details class="bg-white/90 backdrop-blur-md border border-slate-200 rounded-2xl p-4 shadow-lg group">
                        <summary class="font-bold text-deep-purple flex items-center justify-between cursor-pointer list-none">
                            <span>Jump to Section</span>
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform text-wine"></i>
                        </summary>
                        <div class="mt-4 space-y-1 pt-4 border-t border-slate-100 max-h-[60vh] overflow-y-auto">
                            <?php foreach ($FAIR_USAGE_CONTENT as $index => $section):
                                $id = slugify($section['title']);
                            ?>
                                <a href="#<?php echo $id; ?>" class="block py-2 px-2 rounded-lg hover:bg-wine/5 text-slate-600 hover:text-wine text-sm font-medium" onclick="this.closest('details').removeAttribute('open')">
                                    <?php echo $section['title']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </details>
                </div>

                <div class="space-y-12">
                    <?php foreach ($FAIR_USAGE_CONTENT as $section):
                        $id = slugify($section['title']);
                    ?>
                        <div id="<?php echo $id; ?>" class="scroll-mt-32 border-b border-slate-100 pb-12 last:border-0">

                            <h2 class="text-3xl font-black text-deep-purple mb-6 flex items-center gap-3">
                                <?php echo $section['title']; ?>
                            </h2>

                            <?php if (isset($section['content'])): ?>
                                <p class="text-slate-600 leading-relaxed font-medium mb-6 text-lg">
                                    <?php echo $section['content']; ?>
                                </p>
                            <?php endif; ?>

                            <!-- Points -->
                            <?php if (isset($section['points'])): ?>
                                <ul class="space-y-4 mb-8 bg-slate-50 p-6 rounded-2xl border border-slate-100">
                                    <?php foreach ($section['points'] as $point): ?>
                                        <li class="flex items-start gap-4 text-slate-700">
                                            <span class="text-red-purple mt-1.5 flexOpacity-0"><i class="fas fa-chevron-right text-sm"></i></span>
                                            <span class="leading-relaxed font-medium"><?php echo $point; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <!-- Subsections -->
                            <?php if (isset($section['subsections'])): ?>
                                <div class="space-y-8 mt-8">
                                    <?php foreach ($section['subsections'] as $sub): ?>
                                        <div>
                                            <h3 class="text-xl font-bold text-wine mb-4"><?php echo $sub['subtitle']; ?></h3>
                                            <?php if (isset($sub['points'])): ?>
                                                <ul class="space-y-3 pl-4 border-l-2 border-wine/10">
                                                    <?php foreach ($sub['points'] as $sp): ?>
                                                        <li class="flex items-start gap-3 text-slate-600 text-sm font-bold">
                                                            <span class="text-red-purple/60 mt-1"><i class="fas fa-times"></i></span>
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
            </div>

        </div>
    </section>

</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
                const link = document.querySelector(`.sidebar-link[data-target="${id}"]`);
                if (entry.isIntersecting && link) {
                    // Remove active class from all
                    document.querySelectorAll('.sidebar-link').forEach(l => {
                        l.classList.remove('border-wine', 'text-wine', 'bg-gradient-to-r', 'from-wine/5', 'to-transparent');
                        l.classList.add('border-transparent', 'text-slate-500');
                    });
                    // Add active class to current
                    link.classList.remove('border-transparent', 'text-slate-500');
                    link.classList.add('border-wine', 'text-wine', 'bg-gradient-to-r', 'from-wine/5', 'to-transparent');
                }
            });
        }, {
            rootMargin: '-15% 0px -75% 0px'
        });

        document.querySelectorAll('.scroll-mt-32').forEach(section => {
            observer.observe(section);
        });
    });
</script>

<?php include './inc/footer.php'; ?>