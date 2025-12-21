<footer class="bg-slate-900 text-slate-300 py-20 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            
            <!-- Column 1: Brand & About -->
            <div class="space-y-6">
                <a href="#" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-indigo-900/20 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <span class="text-2xl font-black text-white tracking-tight">DMCA<span class="text-indigo-500">Q</span>Cloud</span>
                </a>
                <p class="text-sm leading-relaxed text-slate-400">
                    Premium offshore hosting services with absolute privacy protection. Ignore DMCA and host your content with total freedom.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-indigo-600 hover:scale-110 transition-all">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-indigo-600 hover:scale-110 transition-all">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-indigo-600 hover:scale-110 transition-all">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-indigo-600 hover:scale-110 transition-all">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8">Quick Links</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <?php foreach($NAV_LINKS as $link): ?>
                    <li>
                        <a href="<?php echo $link['href']; ?>" class="hover:text-indigo-400 transition-colors flex items-center gap-2">
                             <?php echo $link['label']; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Column 3: Useful Links (Static from Image) -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8">Useful Links</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="#" class="hover:text-indigo-400 transition-colors">Shared Hosting</a></li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors">Dedicated Hosting</a></li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors">Reseller Hosting</a></li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors">VPS Hosting</a></li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors">Blogs</a></li>
                </ul>
            </div>

            <!-- Column 4: Mailing Address -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8">Mailing Address</h4>
                <ul class="space-y-6 text-sm font-medium">
                    <li class="flex items-start gap-4">
                        <i class="fas fa-map-marker-alt text-indigo-500 mt-1"></i>
                        <span class="text-slate-400">121 King Street, Melbourne<br>Victoria 3000 Australia</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <i class="fas fa-phone-alt text-indigo-500"></i>
                        <span class="text-slate-400">+61 3 8376 6284</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <i class="fas fa-envelope text-indigo-500"></i>
                        <a href="mailto:info@hostiko.com" class="text-slate-400 hover:text-white transition-colors">info@hostiko.com</a>
                    </li>
                </ul>
            </div>

        </div>
        
        <div class="border-t border-slate-800 mt-20 pt-8 text-center text-sm text-slate-500 font-medium">
            <p>&copy; <?php echo date('Y'); ?> DMCAQCloud. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Font Awesome (Ensure it's loaded if not already in head) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">