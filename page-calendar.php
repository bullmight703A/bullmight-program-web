<?php
/*
Template Name: WIMPER Dedicated Calendar
*/

get_header();
?>

<div id="calendar-dedicated" class="page-view active flex-grow bg-slate-50">
    <header class="pt-40 pb-20 text-center">
        <h1 class="text-5xl font-black text-slate-900">Schedule Your Audit</h1>
        <p class="text-xl text-slate-500 mt-4 leading-relaxed">Book a time with our Executive Team to initiate your guaranteed issue FICA recapture strategy.</p>
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
