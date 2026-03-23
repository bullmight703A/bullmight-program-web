<?php
/**
 * Template Name: WIMPER - Organic Intro (HeyGen Hub)
 *
 * @package wimper
 */

get_header();
?>

<!-- ORGANIC INTRO HERO -->
<section class="h-screen flex items-center justify-center relative bg-slate-50 overflow-hidden">
    <!-- Abstract Background Elements -->
    <div class="absolute top-[-10%] right-[-5%] w-96 h-96 bg-kidazzle-orangeLight rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-96 h-96 bg-kidazzle-tealLight rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>

    <div class="max-w-4xl mx-auto px-6 text-center relative z-10 w-full pt-16">
        
        <div class="inline-block bg-navy text-white px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-8 shadow-sm">
            Corporate Financial Architecture 2026
        </div>

        <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight leading-tight">
            Stop Leaving Your FICA Dollars on the Table.
        </h1>
        <p class="text-lg text-slate-600 font-medium mb-12 max-w-2xl mx-auto">
            Discover a federally compliant structure that lowers your corporate payroll taxes while immediately upgrading your employee retention levels. Watch the 45-second Executive Briefing below.
        </p>

        <!-- Premium Video Container for HeyGen/Walkthrough -->
        <div class="relative w-full max-w-3xl mx-auto rounded-3xl overflow-hidden shadow-2xl border-4 border-white mb-12 bg-slate-900 group">
            <div class="aspect-w-16 aspect-h-9 relative pb-[56.25%]">
                <!-- VIDEO EMBED HUB -->
                <!-- Robert: This is where you will add the URL to the downloaded HeyGen ad -->
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-navy/90 text-white z-10 transition-opacity">
                    <i class="fas fa-play-circle text-6xl text-accent mb-4 cursor-pointer hover:scale-110 transition-transform"></i>
                    <p class="font-bold tracking-widest uppercase text-sm">Play 45-Second Briefing</p>
                </div>
                <!-- Placeholder Background -->
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-50" />
            </div>
        </div>

        <div class="mt-8">
            <a href="/join-webinar" class="inline-block bg-[#E89654] text-white px-10 py-5 rounded-xl font-black text-lg tracking-wider uppercase hover:bg-orange-600 transition-colors shadow-xl transform hover:scale-[1.02]">
                Check My Verification Status Now
            </a>
            <p class="text-xs text-slate-400 mt-4 uppercase tracking-widest font-bold">Takes 30 seconds. No hard credit pull.</p>
        </div>

    </div>
</section>

<?php get_footer(); ?>
