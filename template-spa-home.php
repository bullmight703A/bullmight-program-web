<?php
/*
Template Name: WIMPER SPA Home
*/

get_header();
?>

<!-- ================================================================================= -->
<!-- NEW DESIGN: PROVIDED BY USER                                                      -->
<!-- ================================================================================= -->
<div id="home" class="page-view flex-grow bg-slate-50 text-slate-900 active">

    <!-- Hero Section -->
    <header class="relative pt-20 pb-24 lg:pt-32 lg:pb-40 overflow-hidden gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Optimized for $1M - $10M Revenue Teams
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        <?php 
                            $dyn_h1 = get_post_meta(get_the_ID(), 'wimper_dynamic_h1', true);
                            echo !empty($dyn_h1) ? esc_html($dyn_h1) : 'Turn Your Payroll Tax Into <span class="text-blue-600">Retained Profit.</span>';
                        ?>
                    </h1>
                    <p class="text-xl text-slate-600 mb-10 leading-relaxed max-w-xl">
                        <?php
                            $dyn_sub = get_post_meta(get_the_ID(), 'wimper_dynamic_sub', true);
                            echo !empty($dyn_sub) ? esc_html($dyn_sub) : 'Wimper uses Section 125 & 105 protocols to save mid-market businesses an average of <strong>$1,120 per employee annually</strong> while increasing employee take-home pay.';
                        ?>
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" onclick="navigateTo('contact'); return false;" class="bg-brand text-white px-8 py-4 rounded-xl text-lg font-bold shadow-md text-center">
                            Get Your Custom Savings Quote
                        </a>
                        <div class="flex items-center gap-3 px-4">
                            <div class="flex -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=1" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=2" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=3" alt="">
                            </div>
                            <span class="text-sm text-slate-500 font-medium">Trusted by 200+ Growth CEOs</span>
                        </div>
                    </div>
                </div>
                <!-- Visual Savings Hook -->
                <div class="relative">
                    <div class="bg-white rounded-3xl p-8 card-shadow border border-slate-200">
                        <h3 class="text-lg font-bold mb-6 flex items-center gap-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Annual Impact for a 50-Person Team
                        </h3>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-slate-500 font-medium">Estimated Payroll Tax Savings</span>
                                    <span class="text-sm font-bold text-green-600">+$45,000</span>
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full w-full"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-slate-500 font-medium">Employee Benefit Value Added</span>
                                    <span class="text-sm font-bold text-blue-600">+$120,000</span>
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full w-[85%]"></div>
                                </div>
                            </div>
                            <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-slate-900 font-bold">Total Net Profit Increase</span>
                                <span class="text-2xl font-black text-brand">$45,000 /yr</span>
                            </div>
                        </div>
                    </div>
                    <!-- Absolute decorative badge -->
                    <div class="absolute -bottom-6 -right-6 bg-yellow-400 text-brand p-4 rounded-2xl shadow-lg font-bold transform rotate-3 z-20" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        IRS Compliant
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- NEW: Home Page 3-Tile Framework -->
    <section class="pb-24 pt-12 bg-slate-50 overflow-hidden text-slate-900 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-8 relative z-10">
                <!-- Tile 1 -->
                <div class="group cursor-pointer" onclick="navigateTo('logic')">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                            <i class="fas fa-chart-line text-2xl text-blue-600 group-hover:text-white"></i>
                        </div>
                        <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Stage 01</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">FICA Recapture</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Leverage tax codes to turn fixed operating costs back into working capital instantly.</p>
                        <div class="text-sm font-semibold text-blue-600 flex items-center gap-2">Discover How <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
                <!-- Tile 2 -->
                <div class="group cursor-pointer" onclick="navigateTo('method')">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                            <i class="fas fa-shield-alt text-2xl text-blue-600 group-hover:text-white"></i>
                        </div>
                        <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Stage 02</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Zero-Cost Benefits</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Provide Fortune 500-level wellness benefits to your staff without touching your budget.</p>
                        <div class="text-sm font-semibold text-blue-600 flex items-center gap-2">See The Chassis <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
                <!-- Tile 3 -->
                <div class="group cursor-pointer" onclick="navigateTo('iul')">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                            <i class="fas fa-gem text-2xl text-blue-600 group-hover:text-white"></i>
                        </div>
                        <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Stage 03</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Wealth Strategy</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Capture the surplus into a tax-advantaged IUL policy with a guaranteed 0% market floor.</p>
                        <div class="text-sm font-semibold text-blue-600 flex items-center gap-2">View Strategy <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <!-- Bottom Result Bar -->
            <div class="mt-12 bg-blue-100 border border-blue-200 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-6 cursor-pointer hover:bg-blue-200 transition-all" onclick="navigateTo('contact')">
                <div>
                    <h4 class="text-lg font-bold text-slate-900 mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">The Net Result:</h4>
                    <p class="text-sm text-slate-700 max-w-2xl">Every $10,000 reallocated yields ~$765 in direct employer savings plus infinite employee upside.</p>
                </div>
                <div class="text-blue-700 font-bold whitespace-nowrap">Request Audit <i class="fas fa-arrow-right ml-2"></i></div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 2: LOGIC SECTION                                                             -->
<!-- ================================================================================= -->
<div id="logic" class="page-view flex-grow bg-white">
    <!-- The Logic Section: Redesigned for Visual Clarity and Impact -->
    <section class="py-24 bg-white overflow-hidden text-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4 tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">The Wimper Financial Architecture</h2>
                <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
                    We replace traditional payroll tax losses with a high-value benefit ecosystem, leveraging IRC Sections 125 and 105 to recapture trapped capital.
                </p>
            </div>

            <div class="relative">
                <!-- Desktop Connection Line -->
                <div class="hidden lg:block absolute top-1/2 left-0 w-full h-0.5 bg-slate-100 -translate-y-1/2 z-0"></div>

                <div class="grid lg:grid-cols-3 gap-12 relative z-10">
                    <!-- Step 1 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 card-shadow transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-8 transition-colors group-hover:bg-blue-600">
                                <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg>
                            </div>
                            <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Phase 01</div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Strategic Reallocation</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Employees elect to reallocate a portion of their gross salary into a Section 125 Wellness Plan. This shift immediately lowers the company's taxable wage base.
                            </p>
                            <div class="pt-4 border-t border-slate-100 flex items-center gap-2 text-sm font-semibold text-slate-900">
                                <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Lowers FICA & FUTA Liability
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 card-shadow transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-8 transition-colors group-hover:bg-blue-600">
                                <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Phase 02</div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Tax Arbitrage Yield</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                The employer saves 7.65% in FICA taxes on every dollar reallocated. This creates a surplus of cash flow that typically exceeds the cost of the plan administration.
                            </p>
                            <div class="pt-4 border-t border-slate-100 flex items-center gap-2 text-sm font-semibold text-slate-900">
                                <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Immediate Operating Cash Increase
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 card-shadow transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-8 transition-colors group-hover:bg-blue-600">
                                <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Phase 03</div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Reimbursement Loop</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Under Section 105, employees receive tax-free reimbursements for wellness claims, resulting in higher take-home pay and zero-cost premium benefits.
                            </p>
                            <div class="pt-4 border-t border-slate-100 flex items-center gap-2 text-sm font-semibold text-slate-900">
                                <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                0% Income Tax on Benefit Payouts
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Result Callout -->
            <div class="mt-16 bg-blue-50 border border-blue-100 rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">The Net Result:</h4>
                    <p class="text-slate-600 max-w-xl">Every $10,000 reallocated results in ~$765 in direct employer savings, while providing employees with hundreds in tax-free wellness services.</p>
                </div>
                <a href="#contact" onclick="navigateTo('contact')" class="text-blue-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">
                    Request technical brief
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 3: SAVINGS & ROI CALC                                                        -->
<!-- ================================================================================= -->
<div id="savings" class="page-view flex-grow bg-brand text-white">
    <!-- Mid-Market Specific Pain Points -->
    <section class="py-24 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-8 !text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Keeping Money In Your Business</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4 text-white">
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Cutting Expenses Down In Your Business</h4>
                                <p class="text-slate-300">For a $5M company with 40 employees, Wimper systematically cuts expenses by putting roughly $36,000 back into your operating budget every single year.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 text-white">
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Making Your Staff Healthier And Happier</h4>
                                <p class="text-slate-300">Offer benefits usually reserved for Fortune 500 companies (Telemedicine, Mental Health, Accident coverage) at zero net-cost to you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 p-8 rounded-3xl border border-white/10 backdrop-blur-sm relative">
                    <h3 class="text-2xl font-bold mb-6 !text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Calculate How Much Money You Can Keep In Your Business</h3>
                    <form id="roiCalculatorForm" class="space-y-4">
                        <div class="grid grid-cols-1 gap-4">
                            <input type="text" id="roiFirstName" required placeholder="First Name" class="bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <input type="email" id="roiEmail" required placeholder="Company Email" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select id="roiEmployees" required class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Number of Employees</option>
                            <?php for($i=1; $i<=15; $i++) { echo "<option value='$i'>$i</option>"; } ?>
                            <?php for($i=25; $i<=150; $i+=25) { echo "<option value='$i'>$i</option>"; } ?>
                            <option value="200+">200+</option>
                        </select>
                        <button type="submit" id="roiSubmitBtn" class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-500 transition-all shadow-lg flex justify-center items-center gap-2">
                            <span>Get Your Savings Estimate</span>
                        </button>
                    </form>
                    
                    <script>
                    document.getElementById('roiCalculatorForm').addEventListener('submit', function(e) {
                        e.preventDefault();
                        const btn = document.getElementById('roiSubmitBtn');
                        const originalText = btn.innerHTML;
                        
                        btn.innerHTML = '<svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Analyzing...';
                        
                        const payload = {
                            firstName: document.getElementById('roiFirstName').value,
                            email: document.getElementById('roiEmail').value,
                            employees: document.getElementById('roiEmployees').value,
                            source: 'Wimper Virtual SEO Matrix'
                        };
                        
                        // Fire to GoHighLevel / n8n Webhook
                        fetch('https://hook.us1.make.com/ROICalculatorEndpoint', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify(payload)
                        }).then(res => {
                            btn.innerHTML = '<svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Report Sent to Email!';
                            btn.classList.replace('bg-blue-600', 'bg-green-700');
                        }).catch(err => {
                            btn.innerHTML = 'Error Sending - Try contact form';
                        });
                    });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <!-- SAVINGS: 3-TILE FRAMEWORK OVERRIDE -->
    <section class="py-24 bg-slate-50 text-slate-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Tile 1 -->
                <div class="group">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                            <i class="fas fa-calculator text-2xl text-blue-600 group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Automated Audits</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Wimper systematically scrubs existing payroll outputs to safely maximize your eligible reallocations without manual guesswork.</p>
                        <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                            <i class="fas fa-bolt"></i> Instant Optimization
                        </div>
                    </div>
                </div>
                <!-- Tile 2 -->
                <div class="group">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                            <i class="fas fa-hand-holding-usd text-2xl text-blue-600 group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Immediate Relief</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">See your FICA leakage plug within 45 days, injecting thousands of dollars back into your operating budget instantly.</p>
                        <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                            <i class="fas fa-arrow-up"></i> Improved Cash Flow
                        </div>
                    </div>
                </div>
                <!-- Tile 3 -->
                <div class="group">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                            <i class="fas fa-project-diagram text-2xl text-blue-600 group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Reinvestment Matrix</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Funnel the newly recaptured structural earnings toward growth hires, marketing, or premium corporate infrastructure.</p>
                        <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                            <i class="fas fa-arrow-up"></i> Executive Control
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Result Bar -->
            <div class="mt-12 bg-blue-100 border border-blue-200 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-6 cursor-pointer hover:bg-blue-200 transition-all" onclick="navigateTo('contact')">
                <div>
                    <h4 class="text-lg font-bold text-slate-900 mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Next Stage ROI:</h4>
                    <p class="text-sm text-slate-700 max-w-2xl">Use your free custom calculation to generate a precise financial feasibility model for your specific company profile.</p>
                </div>
                <div class="bg-blue-600 text-white rounded-lg px-6 py-3 font-bold hover:bg-blue-800 transition-colors text-center">Verify Feasibility <i class="fas fa-arrow-right ml-2"></i></div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 4: COMPLIANCE                                                                -->
<!-- ================================================================================= -->
<div id="compliance" class="page-view flex-grow bg-slate-50">
    <!-- Compliance / Safety Section -->
    <section class="py-24 text-slate-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold mb-6 text-slate-900 tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Total Compliance. Zero Headache.</h2>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Wimper is not a "loophole." It is a strictly governed administration of existing Federal Tax Codes. We handle the paperwork, the enrollment, and the monthly auditing so your HR team stays focused on growth.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-500"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-slate-900">IRS Section 125</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-500"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-slate-900">ACA Compliant</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-500"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-slate-900">ERISA Wrap Docs</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-500"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-slate-900">HIPAA Secured</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-0 bg-blue-600/10 blur-3xl rounded-full"></div>
                        <div class="relative bg-white p-8 rounded-3xl shadow-xl border border-slate-200">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <h4 class="font-bold text-slate-900" style="font-family: 'Plus Jakarta Sans', sans-serif;">Guaranteed Safe Harbor</h4>
                            </div>
                            <p class="text-sm text-slate-500 italic leading-relaxed">"The Wimper implementation was the easiest benefits transition we've ever done. The payroll tax savings alone covered our entire Q4 marketing budget."</p>
                            <div class="mt-4 flex items-center gap-2">
                                <span class="text-xs font-bold text-slate-900">— CFO, Service Logistics Firm ($8.2M Rev)</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- COMPLIANCE: 3-TILE FRAMEWORK OVERRIDE -->
            <div class="mt-24 w-full">
                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Tile 1 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                                <i class="fas fa-file-signature text-2xl text-blue-600 group-hover:text-white"></i>
                            </div>
                            <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Pillar 01</div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">IRS Section 125</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Fully administered compliant protocols ensuring pre-tax deductions are legitimately logged and protected entirely from audit exposure.</p>
                            <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                                <i class="fas fa-check-circle"></i> Federal Protection
                            </div>
                        </div>
                    </div>
                    <!-- Tile 2 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                                <i class="fas fa-notes-medical text-2xl text-blue-600 group-hover:text-white"></i>
                            </div>
                            <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Pillar 02</div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">ACA Safe Harbor</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Meets stringent Department of Labor and Affordable Care Act guidelines as an Excepted Benefit, preventing employer mandate penalties.</p>
                            <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                                <i class="fas fa-check-circle"></i> Penalty Avoidance
                            </div>
                        </div>
                    </div>
                    <!-- Tile 3 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                                <i class="fas fa-folder-open text-2xl text-blue-600 group-hover:text-white"></i>
                            </div>
                            <div class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2">Pillar 03</div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">ERISA Wrap Docs</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Complete generation and 10-year archival of Plan Documents, SPDs, and Section 105 reimbursements handled 100% implicitly by us.</p>
                            <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                                <i class="fas fa-check-circle"></i> Turnkey Administration
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bottom Bar -->
                <div class="mt-12 bg-blue-100 border border-blue-200 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-6 cursor-pointer hover:bg-blue-200 transition-all" onclick="navigateTo('contact')">
                    <div>
                        <h4 class="text-lg font-bold text-slate-900 mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">The Net Result:</h4>
                        <p class="text-sm text-slate-700 max-w-2xl">Complete off-loading of compliance responsibilities so you retain the entire financial benefit with zero administrative overhead.</p>
                    </div>
                    <div class="bg-blue-600 text-white rounded-lg px-6 py-3 font-bold hover:bg-blue-800 transition-colors text-center">Run Audit <i class="fas fa-arrow-right ml-2"></i></div>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 5: METHOD (THE CHASSIS)                                                      -->
<!-- ================================================================================= -->
<div id="method" class="page-view flex-grow bg-white text-slate-900">
    <section class="pt-40 pb-24">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-black text-slate-900 mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">The W.I.M.P.E.R. Chassis</h1>
            <p class="text-xl text-slate-500 font-medium max-w-2xl mx-auto">
                The secret is in the automated "Claims Trigger." Our platform ensures compliance by verifying health
                activity daily.
            </p>
        </div>
    </section>

    <section class="pb-24">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="bg-blue-50 p-12 rounded-3xl border border-blue-100 shadow-sm">
                <h3 class="text-3xl font-black text-brand mb-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">Integrated Medical Access</h3>
                <p class="text-slate-600 mb-8">Powered by <strong>Revive Health</strong>, the chassis satisfies all IRS
                    bona-fide requirement triggers automatically.</p>
                <ul class="space-y-6">
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600">
                            <i class="fas fa-video"></i>
                        </div>
                        <span class="font-semibold text-slate-700">24/7 Virtual Urgent Care</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <span class="font-semibold text-slate-700">Virtual Primary Care</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600">
                            <i class="fas fa-pills"></i>
                        </div>
                        <span class="font-semibold text-slate-700">Pharmacy Savings Benefit</span>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="text-4xl font-black text-slate-900 mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">Guaranteed Issue <br><span class="text-blue-600">No Underwriting.</span></h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-8">
                    Unlike traditional supplemental plans, W.I.M.P.E.R. is a guaranteed issue protocol. Your entire
                    workforce can join without medical exams or history checks.
                </p>
                <div class="bg-slate-50 border-l-4 border-blue-600 p-8 rounded-r-xl mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">Institutional Compliance</h4>
                    <p class="text-sm text-slate-500">Our plan documents and PHP triggers have been audited for over 20
                        years without a single adverse finding.</p>
                </div>
                <button onclick="navigateTo('contact')"
                    class="text-blue-600 font-bold text-lg hover:text-blue-900 transition">Get an Audit <i
                        class="fas fa-arrow-right ml-2"></i></button>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 6: WEALTH STRATEGY (IUL)                                                     -->
<!-- ================================================================================= -->
<div id="iul" class="page-view flex-grow bg-white text-slate-900">
    <header class="pt-40 pb-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="text-blue-600 text-xs font-bold uppercase tracking-widest mb-4 block">Phase 2: Wealth Accumulation</span>
            <h1 class="text-5xl font-black text-slate-900 mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">The Zero-Cost Wealth Engine</h1>
            <p class="text-xl text-slate-600 font-medium leading-relaxed">
                You've reduced the tax surface area. Now, capture the surplus to secure the future.
            </p>
        </div>
    </header>

    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl font-black text-slate-900 mb-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">Recaptured Savings <br>Meet Market Growth</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    By utilizing the FICA recapture from the W.I.M.P.E.R. chassis, employees can fund a tax-free
                    **Indexed Universal Life (IUL)** policy. This creates a powerful retirement vehicle without
                    decreasing their net take-home pay.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100">
                        <h4 class="font-bold text-blue-600 mb-2">0% Market Floor</h4>
                        <p class="text-xs text-slate-500">Protect your principal. Participate in the gains, never the losses.</p>
                    </div>
                    <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100">
                        <h4 class="font-bold text-blue-600 mb-2">Tax-Free Access</h4>
                        <p class="text-xs text-slate-500">Access your wealth through policy loans without IRS intervention.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-brand p-12 rounded-3xl text-white shadow-2xl relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-600 rounded-full blur-3xl opacity-20"></div>
                    <h3 class="text-3xl font-black mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">Private Client Access</h3>
                    <p class="text-blue-100 mb-8 leading-relaxed text-sm">
                        Not in a corporate W.I.M.P.E.R. program? You can still structure an individual IUL policy
                        directly. We offer **Private Client** access to the same high-performance vehicles.
                    </p>
                    <a href="#contact" onclick="navigateTo('contact')"
                        class="block w-full bg-blue-600 text-white text-center py-4 rounded-xl font-bold hover:bg-white hover:text-brand transition shadow-lg">Schedule Private Quote</a>
                </div>
            </div>

            <!-- WEALTH: 3-TILE FRAMEWORK OVERRIDE MINIMAL MODE -->
            <div class="lg:col-span-2 pt-16 border-t border-slate-100 mt-10">
                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Tile 1 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                                <i class="fas fa-level-down-alt text-2xl text-blue-600 group-hover:text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">0% Market Floor</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Protect the principal of your recaptured FICA funds against market down-turns unconditionally.</p>
                            <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                                <i class="fas fa-arrow-up"></i> Absolute Protection
                            </div>
                        </div>
                    </div>
                    <!-- Tile 2 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                                <i class="fas fa-unlock text-2xl text-blue-600 group-hover:text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Tax-Free Access</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Liquidate your wealth accumulation via policy loans without invoking aggressive tax events.</p>
                            <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                                <i class="fas fa-arrow-up"></i> High Liquidity
                            </div>
                        </div>
                    </div>
                    <!-- Tile 3 -->
                    <div class="group">
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm transition-all group-hover:-translate-y-2 group-hover:border-blue-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                                <i class="fas fa-piggy-bank text-2xl text-blue-600 group-hover:text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Infinite Yield</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Use the monthly margins generated by the Wimper program to fuel premium multi-generational wealth.</p>
                            <div class="border-t border-slate-100 pt-4 flex items-center gap-2 text-sm font-semibold text-green-600">
                                <i class="fas fa-arrow-up"></i> Legacy Building
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 7: TIMELINE (IMPLEMENTATION)                                                 -->
<!-- ================================================================================= -->
<div id="timeline" class="page-view flex-grow bg-slate-50 text-slate-900">
    <header class="pt-40 pb-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-black text-slate-900 mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">Execution Protocol</h1>
            <p class="text-xl text-slate-500 font-medium">Simple deployment. Zero disruption. Savings realized in 45 days.</p>
        </div>
    </header>

    <div class="max-w-3xl mx-auto px-4 py-20">
        <div class="flex items-start mb-16 relative">
            <div class="w-12 h-12 bg-brand text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">1</div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Weekly Briefing & Fit Check</h3>
                <p class="text-slate-600">Join our weekly info session to determine if the program is a good fit for
                    your corporate structure. We verify feasibility and estimate savings.</p>
            </div>
        </div>
        <div class="flex items-start mb-16 relative">
            <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">2</div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Guaranteed Issue Enrollment</h3>
                <p class="text-slate-600">We launch your custom Revive Health portal. Employees enroll paperlessly.
                    Since it is guaranteed issue, there are no medical underwriting barriers.</p>
            </div>
        </div>
        <div class="flex items-start relative">
            <div class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">
                <i class="fas fa-check"></i>
            </div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Activation & Recapture</h3>
                <p class="text-slate-600">Go live. Employees access virtual care instantly. The business receives FICA
                    savings back, often offsetting the entire benefits cost.</p>
            </div>
        </div>

        <div class="mt-20 p-12 bg-white rounded-3xl text-center border border-slate-200">
            <h3 class="text-2xl font-bold text-slate-900 mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Ready for the Mock Run?</h3>
            <button onclick="navigateTo('contact')"
                class="bg-brand text-white px-10 py-4 rounded-xl font-bold hover:bg-blue-600 transition shadow-xl">Get Started</button>
        </div>
    </div>
</div>

<!-- ================================================================================= -->
<!-- VIEW 8: BLOG / INSIGHTS                                                           -->
<!-- ================================================================================= -->
<div id="blog" class="page-view flex-grow bg-white text-slate-900">
    <header class="pt-40 pb-20 bg-slate-900 text-white text-center">
        <h1 class="text-5xl font-black mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">The Executive Digest</h1>
        <p class="text-xl text-slate-400">Tax code updates and EBITDA strategy briefings.</p>
    </header>
    <div class="max-w-5xl mx-auto px-4 py-24 space-y-12">
        <article
            class="flex flex-col md:flex-row bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer">
            <div class="md:w-1/3 bg-slate-100 h-48 md:h-auto"></div>
            <div class="p-8 md:w-2/3">
                <span class="text-blue-600 text-xs font-bold uppercase tracking-widest mb-2 block">Tax Strategy</span>
                <h3 class="text-2xl font-black text-slate-900 mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Why the CFO is the New Chief Wellness Officer</h3>
                <p class="text-slate-500 mb-6">How Section 125 compliance is redefining boardroom priorities for EBITDA
                    growth in 2025.</p>
                <button class="text-brand font-bold text-sm uppercase tracking-widest hover:text-blue-600">Read Briefing <i
                        class="fas fa-arrow-right ml-2"></i></button>
            </div>
        </article>
    </div>
</div>

<!-- ================================================================================= -->
<!-- VIEW 9: CONTACT (CALENDAR)                                                        -->
<!-- ================================================================================= -->
<div id="contact" class="page-view flex-grow bg-blue-50 text-slate-900">
    <header class="pt-40 pb-20 text-center">
        <h1 class="text-5xl font-black text-slate-900" style="font-family: 'Plus Jakarta Sans', sans-serif;">Verify Eligibility.</h1>
        <p class="text-xl text-slate-500 mt-4 leading-relaxed max-w-2xl mx-auto">Submit your headcount for a preliminary FICA recapture audit and implement a zero net-cost wellness expansion.</p>
    </header>
    <div class="max-w-4xl mx-auto px-4 pb-32">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100 p-4">
            <!-- HighLevel Calendar Widget -->
            <iframe src="https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v" 
                    style="width: 100%;border:none;overflow: hidden;min-height: 800px;" scrolling="no" 
                    id="VNIKFQp8UXtGVcCV3s7v_1709400000000"></iframe>
            <script src="https://api.leadconnectorhq.com/js/form_embed.js" type="text/javascript"></script>
        </div>
    </div>
</div>

<?php get_footer(); ?>
