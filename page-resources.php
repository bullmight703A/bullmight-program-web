<?php
/**
 * Template Name: WIMPER Resources Hub
 *
 * @package wimper
 */

get_header();
?>

<!-- We use a dark background to match the "Club/Elite" styling -->
<div class="bg-navy min-h-screen pt-32 pb-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <!-- Header Profile / Branding (Like a Linktree) -->
        <div class="mb-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">The WIMPER Vault</h1>
            <p class="text-lg text-slate-400">Exclusive calculators, playbooks, and audits used by our members to shield capital and reclaim EBITDA.</p>
        </div>

        <!-- Resource Links Array -->
        <div class="space-y-5">
            
            <!-- Resource Item 1: The Booking Call (Highest Priority) -->
            <a href="/webinar-registration/" class="block relative bg-slate-900 border border-slate-700 hover:border-gold p-6 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-lg group text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-gold overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-gold"></div>
                <div class="pl-4">
                    <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-gold transition">Book a Free Feasibility Audit</h3>
                    <p class="text-sm text-slate-400 mt-1">Get a 1-on-1 assessment to see exactly where your payroll is leaking capital.</p>
                </div>
                <div class="text-slate-500 group-hover:text-gold transition ml-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>

            <!-- Resource Item 2: The Webinar/Video Training -->
            <a href="/webinar-registration/" class="block bg-slate-900 border border-slate-700 hover:border-sky-400 p-6 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-lg group text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-sky-400">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-sky-400 transition">The Capital Shield Masterclass</h3>
                    <p class="text-sm text-slate-400 mt-1">Watch our deep-dive breakdown of how the Section 125 chassis actually works.</p>
                </div>
                <div class="text-slate-500 group-hover:text-sky-400 transition ml-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>

            <!-- Resource Item 3: A Guide / PDF Download -->
            <a href="#" class="block bg-slate-900 border border-slate-700 hover:border-slate-400 p-6 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-lg group text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-slate-400">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-slate-200 transition">FICA Reduction Case Study</h3>
                    <p class="text-sm text-slate-400 mt-1">Read the exact numbers on how we generated immediate liquidity for a 50-W2 company.</p>
                </div>
                <div class="text-slate-500 group-hover:text-white transition ml-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                </div>
            </a>
            
        </div>
    </div>
</div>

<?php
get_footer();
?>
