<?php
/**
 * Template Name: WIMPER - Success / Next Steps
 *
 * @package wimper
 */

get_header();
?>

<!-- SUCCESS PAGE HEADER -->
<section class="min-h-screen pt-32 pb-20 flex flex-col items-center justify-center relative bg-slate-50 overflow-x-hidden">
    <!-- Abstract Background Elements -->
    <div
        class="absolute top-[-10%] right-[-5%] w-96 h-96 bg-kidazzle-orangeLight rounded-full mix-blend-multiply filter blur-3xl opacity-70">
    </div>
    <div
        class="absolute bottom-[-10%] left-[-5%] w-96 h-96 bg-kidazzle-tealLight rounded-full mix-blend-multiply filter blur-3xl opacity-70">
    </div>

    <div class="max-w-3xl mx-auto px-6 text-center relative z-10 w-full">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-8 mx-auto shadow-sm">
            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h1 class="text-5xl md:text-6xl font-serif text-[#2F4858] mb-6 tracking-tight">Application Received</h1>
        <p class="text-xl text-slate-600 font-light mb-12">
            Your inquiry for the WIMPER Guaranteed Issue Enrollment protocol has been securely logged.
        </p>

        <!-- Premium Video Container for HeyGen/Walkthrough -->
        <div class="relative w-full max-w-4xl mx-auto rounded-3xl overflow-hidden shadow-2xl border-4 border-white mb-16 bg-slate-900 group">
            
            <!-- RESPONSIVE UNIFIED VIDEO (16:9) -->
            <div class="relative w-full rounded-2xl overflow-hidden bg-black shadow-2xl border-4 border-white mb-10 z-20">
                <video id="success-sync-video" class="w-full h-auto max-h-[70vh] object-contain" controls playsinline preload="metadata" poster="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2000&auto=format&fit=crop">
                    <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bf43f50e1bdbf70cc1ee0f.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>

        <!-- Dynamic Success Timeline / Pop-Up Trigger -->
        <div class="bg-white p-8 md:p-10 rounded-3xl shadow-xl border border-slate-100 relative group overflow-hidden text-left">
            <div class="absolute top-0 left-0 w-2 h-full bg-brand"></div>

            <h3 class="text-2xl font-bold text-[#2F4858] mb-8">Before we proceed, evaluate these three questions:</h3>

            <ul class="space-y-6 relative ml-2">
                <li id="sync-q1" class="flex items-start gap-4 transition-all duration-700 transform opacity-50 grayscale scale-[0.98]">
                    <div class="sync-indicator w-10 h-10 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold shrink-0 transition-all duration-700 shadow-sm">1</div>
                    <div class="pt-1">
                        <h4 class="font-bold text-[#2F4858] text-lg leading-tight">Does your organization want to save money?</h4>
                        <p class="text-sm text-slate-500 mt-1">Talk to your organization and determine if your executive team is actively looking to reduce expenses.</p>
                    </div>
                </li>
                <li id="sync-q2" class="flex items-start gap-4 transition-all duration-700 transform opacity-50 grayscale scale-[0.98]">
                    <div class="sync-indicator w-10 h-10 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold shrink-0 transition-all duration-700 shadow-sm">2</div>
                    <div class="pt-1">
                        <h4 class="font-bold text-[#2F4858] text-lg leading-tight">Are you willing to do a little extra work for the setup?</h4>
                        <p class="text-sm text-slate-500 mt-1">Implementation requires a brief setup phase. Are you willing to learn the process behind it to unlock these benefits?</p>
                    </div>
                </li>
                <li id="sync-q3" class="flex items-start gap-4 transition-all duration-700 transform opacity-50 grayscale scale-[0.98]">
                    <div class="sync-indicator w-10 h-10 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold shrink-0 transition-all duration-700 shadow-sm">3</div>
                    <div class="pt-1">
                        <h4 class="font-bold text-[#2F4858] text-lg leading-tight">Can this help the business, and help your employees?</h4>
                        <p class="text-sm text-slate-500 mt-1">Assess the dual impact: preserving corporate operating budget while providing zero-cost health benefits for your staff.</p>
                    </div>
                </li>
            </ul>

            <div id="sync-cta" class="mt-10 p-6 bg-slate-50 rounded-2xl border border-slate-200 flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left transition-all duration-1000 transform opacity-50 grayscale">
                <p class="text-[#2F4858] font-bold text-lg md:text-xl leading-snug">If you answered "YES" to these three questions, we can confidently help you.</p>
                <a href="/post-audit-review/"
                    class="shrink-0 bg-brand text-white px-8 py-5 rounded-2xl font-bold tracking-wider hover:bg-blue-800 transition-colors shadow-2xl flex items-center gap-2 text-lg">
                    Next Stage <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const video = document.getElementById('success-sync-video');
        
        const q1 = document.getElementById('sync-q1');
        const q2 = document.getElementById('sync-q2');
        const q3 = document.getElementById('sync-q3');
        const cta = document.getElementById('sync-cta');

        const activeStyles = ['opacity-100', 'grayscale-0', 'scale-100'];
        const inactiveStyles = ['opacity-50', 'grayscale', 'scale-[0.98]'];

        const activateElement = (el) => {
            if(!el) return;
            el.classList.remove(...inactiveStyles);
            el.classList.add(...activeStyles);
            
            // Light up the indicator circle
            const indicator = el.querySelector('.sync-indicator');
            if(indicator) {
                indicator.className = "sync-indicator w-10 h-10 rounded-full bg-[#2563eb] text-white flex items-center justify-center font-bold shrink-0 transition-all duration-700 shadow-lg ring-4 ring-blue-100";
            }
        };

        if (video) {
            video.addEventListener('timeupdate', () => {
                const time = video.currentTime;
                
                // Question 1 unlocks at 5 seconds
                if (time >= 5) activateElement(q1);
                
                // Question 2 unlocks at 18 seconds
                if (time >= 18) activateElement(q2);
                
                // Question 3 unlocks at 30 seconds
                if (time >= 30) activateElement(q3);

                // CTA lights up fully at 42 seconds (end of pitch)
                if (time >= 42 && cta) {
                    cta.classList.remove('opacity-50', 'grayscale');
                    cta.classList.add('opacity-100', 'grayscale-0');
                    cta.classList.add('ring-4', 'ring-blue-100');
                }
            });
        }
    });
</script>

<?php get_footer(); ?>