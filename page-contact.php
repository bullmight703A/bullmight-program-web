<?php
/**
 * Template Name: WIMPER Contact Page
 *
 * @package wimper
 */

get_header();
?>

<!-- Elite Contact Header Section -->
<section class="relative bg-[#0b1120] min-h-screen py-24 sm:py-32 overflow-hidden flex flex-col justify-center items-center">
    
    <!-- Background Grid & Glow -->
    <div class="absolute inset-0 bg-[url('https://kidazzle.com/wp-content/themes/wimper-program-webb/assets/grid.svg')] bg-center opacity-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-blue-500/20 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center">
        
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-8 backdrop-blur-md">
            <span class="flex h-2 w-2 relative">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
            </span>
            <span class="text-xs font-bold text-blue-400 tracking-widest uppercase">Support & Advisory</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight mb-6 drop-shadow-lg" style="color: white !important;">
            Contact WIMPER
        </h1>
        
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed mb-12">
            Submit your information below to speak with an executive FICA strategist, or upload your documentation securely directly into our system.
        </p>

        <!-- Placeholder for GoHighLevel Form -->
        <div id="ghl-form-wrapper" class="glass p-8 rounded-3xl w-full max-w-3xl mx-auto border border-white/10 shadow-2xl relative">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-500/5 to-transparent rounded-3xl pointer-events-none"></div>
            
            <div class="relative z-10 w-full min-h-[500px] flex items-center justify-center bg-slate-50 rounded-2xl overflow-hidden shadow-inner p-2">
                <!-- Active HighLevel Calendar Widget -->
                <iframe src="https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v" 
                        style="width: 100%;border:none;overflow: hidden;min-height: 700px;" scrolling="no" 
                        id="VNIKFQp8UXtGVcCV3s7v_contactpage"></iframe>
                <script src="https://api.leadconnectorhq.com/js/form_embed.js" type="text/javascript"></script>
            </div>

        </div>

    </div>
</section>

<?php
get_footer();
