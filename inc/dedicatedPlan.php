<?php
// DEDICATED HOSTING DATA
// DEDICATED HOSTING DATA
// $DEDICATED_SERVERS is expected to be passed from the parent page
if (!isset($DEDICATED_SERVERS)) {
    $DEDICATED_SERVERS = [];
}
?>

<!-- Filter & Toggle Controls -->
<!-- This div acts as the second flex item in the parent container from dedicated.php -->
<div class="flex flex-col lg:flex-row gap-4 w-full xl:w-auto items-center justify-center ">
    <!-- Hardware Filters -->
    <!-- <div class="flex gap-4">
        <div class="relative group">
            <i class="fas fa-microchip absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-hover:text-wine transition-colors"></i>
            <select id="cpu-filter" class="appearance-none bg-white border border-slate-200 text-slate-700 font-bold pl-10 pr-10 py-3 rounded-xl text-sm focus:outline-none focus:border-wine shadow-sm cursor-pointer hover:border-wine/30 transition-colors">
                <option value="all">Any CPU</option>
                <option value="intel">Intel Xeon</option>
                <option value="amd">AMD EPYC/Ryzen</option>
            </select>
            <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
        </div>

        <div class="relative group">
            <i class="fas fa-memory absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-hover:text-wine transition-colors"></i>
            <select id="ram-filter" class="appearance-none bg-white border border-slate-200 text-slate-700 font-bold pl-10 pr-10 py-3 rounded-xl text-sm focus:outline-none focus:border-wine shadow-sm cursor-pointer hover:border-wine/30 transition-colors">
                <option value="all">Any RAM</option>
                <option value="32">32 GB+</option>
                <option value="64">64 GB+</option>
                <option value="128">128 GB+</option>
            </select>
            <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
        </div>
    </div> -->

    <!-- Billing Cycle Toggle -->
    <div class="flex bg-slate-100 p-1.5 rounded-2xl border border-slate-200">
        <button class="billing-btn active px-5 py-2.5 rounded-xl font-bold text-sm transition-all bg-white text-deep-purple shadow-sm" data-cycle="1">1 Month</button>
        <button class="billing-btn px-5 py-2.5 rounded-xl font-bold text-sm transition-all text-slate-500 hover:text-deep-purple" data-cycle="3">3 Months</button>
        <button class="billing-btn px-5 py-2.5 rounded-xl font-bold text-sm transition-all text-slate-500 hover:text-deep-purple" data-cycle="6">6 Months</button>
    </div>
</div>
</div> <!-- Closing the Header & Filters div from dedicated.php -->

<!-- Cards Grid -->
<div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-6" id="servers-grid">
    <?php foreach ($DEDICATED_SERVERS as $index => $server):
        $clean_price = (float)preg_replace('/[^0-9.]/', '', $server['price']);
        $is_high_perf = $clean_price > 200;
        $is_popular = $index < 3 || ($index > 6 && $index < 9);

        // Determine CPU Type
        $cpu_type = 'intel';
        if (stripos($server['cpu_name'], 'AMD') !== false) {
            $cpu_type = 'amd';
        }

        $ram_val = (int)filter_var($server['ram'], FILTER_SANITIZE_NUMBER_INT);
        if ($ram_val == 0) $ram_val = 1000;

        $card_classes = "server-card bg-white rounded-[2rem] p-6 border border-slate-200 shadow-sm hover:shadow-2xl hover:shadow-wine/10 transition-all duration-300 hover:-translate-y-2 relative group flex flex-col";

        if ($index === 0) {
            $card_classes .= " ring-2 ring-wine ring-offset-4 ring-offset-slate-50";
        }
    ?>
        <div class="<?php echo $card_classes; ?>"
            data-perf="<?php echo $is_high_perf ? 'true' : 'false'; ?>"
            data-popular="<?php echo $is_popular ? 'true' : 'false'; ?>"
            data-cpu="<?php echo $cpu_type; ?>"
            data-ram="<?php echo $ram_val; ?>">

            <div class="mb-6 mt-2 relative z-10">
                <div class="flex justify-between items-start mb-2">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-slate-100 text-slate-500 text-[10px] font-bold uppercase tracking-wide border border-slate-200 group-hover:bg-wine group-hover:text-white group-hover:border-wine transition-colors">
                        <i class="fas fa-microchip"></i>
                        <?php echo $cpu_type === 'amd' ? 'AMD' : 'INTEL'; ?>
                    </span>
                    <?php if ($server['uplink'] !== '1Gbps' && $server['uplink'] !== '1 Gbps'): ?>
                        <span class="text-[10px] font-bold text-wine bg-wine/5 px-2 py-1 rounded"><?php echo $server['uplink']; ?> Uplink</span>
                    <?php endif; ?>
                </div>

                <h3 class="text-lg font-black text-deep-purple leading-tight mb-0 group-hover:text-wine transition-colors min-h-[3.5rem] flex items-center">
                    <?php echo $server['cpu_name']; ?>
                </h3>
            </div>

            <!-- Price -->
            <div class="mb-6 pb-6 border-b border-slate-100">
                <div class="flex flex-col" id="price-container-<?php echo $index; ?>">
                    <div class="flex items-baseline gap-2">
                        <!-- Strikethrough Price -->
                        <span class="text-sm font-bold text-slate-400 line-through decoration-wine/50 hidden old-price"
                            data-base="<?php echo $server['price_1_month']; ?>">
                            $<?php echo $server['price_1_month']; ?>
                        </span>

                        <!-- Main Price -->
                        <div class="flex items-baseline gap-1">
                            <span class="text-lg font-bold text-wine">$</span>
                            <span class="text-4xl font-black text-deep-purple tracking-tighter price-val"
                                data-p1="<?php echo $server['price_1_month']; ?>"
                                data-p3="<?php echo $server['price_3_month']; ?>"
                                data-p6="<?php echo $server['price_6_month']; ?>">
                                <?php echo $server['price_1_month']; ?>
                            </span>
                            <span class="text-xs text-slate-400 font-bold uppercase ml-1">/ Mo</span>
                        </div>
                    </div>
                </div>
                <div class="text-[10px] font-bold text-slate-400 mt-1 billing-text">Billed Monthly</div>
            </div>

            <!-- Specs Grid -->
            <div class="grid grid-cols-2 gap-3 mb-8 flex-grow">
                <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-100 group-hover:border-wine/10 transition-colors">
                    <div class="w-8 h-8 rounded-lg bg-white shadow-sm flex items-center justify-center text-wine text-sm border border-slate-100">
                        <i class="fas fa-memory"></i>
                    </div>
                    <div>
                        <div class="text-[10px] uppercase text-slate-400 font-bold leading-none mb-1">RAM</div>
                        <div class="font-bold text-slate-700 text-xs leading-none break-words"><?php echo $server['ram']; ?></div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-100 group-hover:border-wine/10 transition-colors">
                    <div class="w-8 h-8 rounded-lg bg-white shadow-sm flex items-center justify-center text-wine text-sm border border-slate-100">
                        <i class="fas fa-hdd"></i>
                    </div>
                    <div>
                        <div class="text-[10px] uppercase text-slate-400 font-bold leading-none mb-1">Storage</div>
                        <div class="font-bold text-slate-700 text-xs leading-none break-words"><?php echo str_replace('SSD', '', $server['storage']); ?></div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-100 group-hover:border-wine/10 transition-colors">
                    <div class="w-8 h-8 rounded-lg bg-white shadow-sm flex items-center justify-center text-wine text-sm border border-slate-100">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <div class="text-[10px] uppercase text-slate-400 font-bold leading-none mb-1">Bandwidth</div>
                        <div class="font-bold text-slate-700 text-xs leading-none"><?php echo $server['bandwidth']; ?></div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-100 group-hover:border-wine/10 transition-colors">
                    <div class="w-8 h-8 rounded-lg bg-white shadow-sm flex items-center justify-center text-wine text-sm border border-slate-100">
                        <img src="https://flagcdn.com/w40/nl.png" alt="NL" class="w-4 rounded-sm shadow-sm">
                    </div>
                    <div>
                        <div class="text-[10px] uppercase text-slate-400 font-bold leading-none mb-1">Location</div>
                        <div class="font-bold text-slate-700 text-xs leading-none">Amsterdam</div>
                    </div>
                </div>
            </div>

            <a href="<?php echo $server['url']; ?>" class="w-full bg-deep-purple hover:bg-wine text-white py-3.5 rounded-xl font-bold shadow-lg shadow-deep-purple/10 hover:shadow-wine/20 hover:-translate-y-1 transition-all flex items-center justify-center gap-2 group-hover:gap-3">
                Deploy Server
                <i class="fas fa-arrow-right text-xs transition-all"></i>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const billingBtns = document.querySelectorAll('.billing-btn');
        const cpuSelect = document.getElementById('cpu-filter');
        const ramSelect = document.getElementById('ram-filter');
        const cards = document.querySelectorAll('.server-card');
        const priceVals = document.querySelectorAll('.price-val');
        const billingTexts = document.querySelectorAll('.billing-text');

        // Logic for filtering
        function filterServers() {
            const activeTypeElement = document.querySelector('.filter-btn.active');
            const activeType = activeTypeElement ? activeTypeElement.dataset.filter : 'all'; // Default to 'all' if element removed
            const activeCpu = cpuSelect.value;
            const activeRam = ramSelect.value;

            cards.forEach(card => {
                let show = true;

                // Type Filter
                if (activeType === 'popular' && card.dataset.popular !== 'true') show = false;
                if (activeType === 'high-perf' && card.dataset.perf !== 'true') show = false;

                // CPU Filter
                if (activeCpu !== 'all') {
                    if (card.dataset.cpu !== activeCpu) show = false;
                }

                // RAM Filter
                if (activeRam !== 'all') {
                    const cardRam = parseInt(card.dataset.ram);
                    const filterRam = parseInt(activeRam);
                    if (cardRam < filterRam) show = false; // "32 GB+" logic
                }

                if (show) {
                    card.classList.remove('hidden');
                    card.classList.add('flex');
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.classList.add('hidden');
                    card.classList.remove('flex');
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(10px)';
                }
            });
        }

        // Logic for Billing Cycle Toggle
        function updateBillingCycle(cycle) {
            priceVals.forEach(priceEl => {
                const p1 = priceEl.dataset.p1;
                const p3 = priceEl.dataset.p3;
                const p6 = priceEl.dataset.p6;
                const container = priceEl.closest('.flex-col');
                const oldPriceEl = container ? container.querySelector('.old-price') : null;

                let newPrice = p1;
                if (cycle === '3') newPrice = p3;
                if (cycle === '6') newPrice = p6;
                if (!oldPriceEl) return;

                const basePrice = parseFloat(oldPriceEl.dataset.base);

                // Update Main Price
                priceEl.innerText = newPrice;

                // Handle Strikethrough Logic
                if (parseFloat(newPrice) < basePrice) {
                    oldPriceEl.classList.remove('hidden');
                } else {
                    oldPriceEl.classList.add('hidden');
                }
            });

            billingTexts.forEach(txt => {
                if (cycle === '1') txt.innerText = 'Billed Monthly';
                if (cycle === '3') txt.innerText = 'Billed Quarterly';
                if (cycle === '6') txt.innerText = 'Billed Semi-Annually';
            });
        }

        // Event Listeners for Filters
        // Note: Removed type filter listeners as buttons were removed

        // Event Listeners for Billing
        billingBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                billingBtns.forEach(b => {
                    b.classList.remove('bg-white', 'text-deep-purple', 'shadow-sm', 'active');
                    b.classList.add('text-slate-500');
                });

                e.currentTarget.classList.remove('text-slate-500');
                e.currentTarget.classList.add('bg-white', 'text-deep-purple', 'shadow-sm', 'active');

                const cycle = e.currentTarget.dataset.cycle;
                updateBillingCycle(cycle);
            });
        });

        cpuSelect.addEventListener('change', filterServers);
        ramSelect.addEventListener('change', filterServers);
    });
</script>