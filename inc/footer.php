<footer class="bg-deep-purple text-white py-24 border-t border-white/10 relative overflow-hidden">
    <!-- Decorative Glow -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-1 bg-gradient-to-r from-transparent via-red-purple to-transparent opacity-50"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Column 1: Brand & About -->
            <div class="space-y-6">
                <a href="#" class="flex items-center gap-2 group">
                    <!-- <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white font-bold text-xl border border-white/10 group-hover:bg-white group-hover:text-wine transition-all duration-300">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <span class="text-2xl font-black text-white tracking-tight">DMCA<span class="text-thistle">Q</span>Cloud</span> -->
                    <img src="assets/img/footer-logo.webp" alt="logo" class="w-40">
                </a>
                <p class="text-sm leading-relaxed text-white/70">
                    At DMCAQloud, we deliver Offshore DMCA-Ignored Hosting with blazing-fast NVMe SSD performance, enterprise-grade security, and rock-solid 99.99% uptime trusted by creators, businesses, agencies worldwide.
                </p>
                <div class="flex gap-4">
                    <a href="https://www.facebook.com/profile.php?id=61587004352864" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-white hover:text-wine hover:scale-110 transition-all border border-white/10">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/dmcaqloud" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-white hover:text-wine hover:scale-110 transition-all border border-white/10">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/dmcaqloud/" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-white hover:text-wine hover:scale-110 transition-all border border-white/10">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/dmcaqloud/" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-white hover:text-wine hover:scale-110 transition-all border border-white/10">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.pinterest.com/dmcaqloud/" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-white hover:text-wine hover:scale-110 transition-all border border-white/10">
                        <i class="fa-brands fa-pinterest"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8">Quick Links</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <?php foreach ($NAV_LINKS as $link): ?>
                        <li>
                            <a href="<?php echo $link['href']; ?>" class="text-white/70 hover:text-thistle transition-colors flex items-center gap-2 group">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-purple group-hover:bg-thistle transition-colors"></span>
                                <?php echo $link['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Column 3: Useful Links -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8">Useful Links</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="terms.php" class="hover:text-white transition-colors">Terms of Service</a></li>
                    <li> <a href="fair-usage.php" class="hover:text-white transition-colors">Fair Usage Policy</a></li>
                    <li> <a href="refund-policy.php" class="hover:text-white transition-colors">Refund Policy</a></li>
                    <li><a href="report-abuse.php" class="hover:text-white transition-colors">Report Abuse</a></li>
                </ul>
            </div>

            <!-- Column 4: Mailing Address -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8">Mailing Address</h4>
                <ul class="space-y-6 text-sm font-medium">

                    <!-- <li class="flex items-center gap-4">
                        <i class="fas fa-phone-alt text-thistle"></i>
                        <span class="text-white/70">+61 3 8376 6284</span>
                    </li> -->
                    <li class="flex items-center gap-4">
                        <i class="fas fa-envelope text-thistle"></i>
                        <a href="mailto:support@dmcaqloud.com" class="text-white/70 hover:text-white transition-colors">support@dmcaqloud.com</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-white/10 mt-20 pt-8 flex flex-col md:flex-row items-center justify-between text-sm text-white/40 font-medium">
            <p>&copy; <?php echo date('Y'); ?> DMCAQCloud. All Rights Reserved.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="sitemap.xml" class="hover:text-white transition-colors">Sitemap</a>




            </div>
        </div>
    </div>
</footer>

<!-- Close Body/HTML -->
</body>

</html>