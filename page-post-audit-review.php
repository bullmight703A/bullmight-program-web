<?php
/**
 * Template Name: WIMPER - Enrollment Pending
 *
 * @package wimper
 */

// Disable default WP header/footer to allow for the custom Tailwind injection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Pending | WIMPER Business Program</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <?php wp_head(); ?>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gradient-border {
            border: 1px solid transparent;
            background: linear-gradient(#0f172a, #0f172a) padding-box,
                        linear-gradient(90deg, #2563eb, #60a5fa) border-box;
        }

        .gradient-text {
            background: linear-gradient(90deg, #2563eb, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 1.5rem;
            background: #000;
        }

        .video-container video, .video-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .small-video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 0.75rem;
            background: #1e293b;
        }

        .small-video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .status-badge-pending {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        .step-card {
            transition: all 0.3s ease;
        }

        .step-card:hover {
            border-color: #3b82f6;
            background: rgba(59, 130, 246, 0.05);
            transform: translateY(-2px);
        }

        dialog::backdrop {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body class="p-4 md:p-12">
    <div class="max-w-6xl mx-auto space-y-8">
        
        <!-- Header / Hero Section -->
        <header class="text-center space-y-4 pt-8">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 text-blue-500 border border-blue-500/30 text-xs font-bold tracking-widest uppercase">
                <i data-lucide="alert-circle" class="w-4 h-4"></i> Enrollment Not Confirmed
            </div>
            <h1 class="text-4xl md:text-6xl tracking-tight text-white font-extrabold" style="color: white !important;">
                Welcome to <span class="text-[#2563eb]" style="color: #2563eb !important;">WIMPER</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Your place is reserved, but your enrollment is <span class="text-white font-bold">pending</span>. Watch the message below and complete the required steps immediately.
            </p>
        </header>

        <!-- Video Message Section -->
        <section class="grid lg:grid-cols-5 gap-8 items-start">
            <div class="lg:col-span-3 space-y-6">
                <!-- Video 1 (Main Hero) -->
                <div class="video-container shadow-2xl shadow-blue-500/20 border border-white/10 group relative z-20">
                    <video id="mainHeroVideo" autoplay playsinline controls class="w-full h-auto object-cover rounded-2xl">
                        <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd94e2fd4388309747f4f3.mp4" type="video/mp4">
                    </video>
                </div>
                
                <!-- Watch Confirmation Button (Locked Initially) -->
                <button id="confirmWatchBtn" disabled class="w-full bg-slate-900 text-slate-500 opacity-50 cursor-not-allowed font-extrabold py-5 rounded-2xl shadow-[inset_0_2px_10px_rgba(0,0,0,0.5)] transition-all flex items-center justify-center gap-3 border border-white/5 relative overflow-hidden group">
                    <div id="unlockProgressBar" class="absolute left-0 top-0 bottom-0 bg-blue-500/20 w-0 transition-all duration-300"></div>
                    <i id="btnIcon" data-lucide="lock" class="w-6 h-6 relative z-10"></i> 
                    <span id="btnText" class="relative z-10">🔒 Must watch 50% to unlock</span>
                </button>
            </div>
            
            <div class="lg:col-span-2 space-y-6">

                <!-- Schedule Sub-Card -->
                <div class="glass p-6 rounded-3xl border border-white/5">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm uppercase tracking-widest text-[#2563eb]" style="color: #2563eb !important; font-weight: bold !important;">Webinar</h3>
                        <span class="text-blue-500 text-xs font-bold px-2 py-0.5 bg-blue-500/10 rounded">LIVE SESSION</span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <i data-lucide="calendar" class="text-blue-500 w-5 h-5"></i>
                            <span class="text-white font-semibold" id="upcoming-wednesday">Wednesday, Oct 23rd</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="clock" class="text-blue-500 w-5 h-5"></i>
                            <span class="text-white font-semibold">7:00 PM EST / 4:00 PM PST</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Strategy Session / Calendar Call-to-Action -->
        <section class="glass p-8 rounded-3xl bg-blue-500/5 border border-blue-500/20">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <h3 class="text-xl md:text-2xl text-white mb-2" style="color: white !important; font-weight: bold !important;">Book Your Individual Strategy Call</h3>
                    <p class="text-slate-400 max-w-xl">
                        Schedule your 1:1 onboarding session immediately to ensure your business structure is correctly mapped before the live audit.
                    </p>
                </div>
                <button onclick="document.getElementById('calendarModal').showModal()" class="shrink-0 gradient-border text-white font-800 px-8 py-4 rounded-2xl hover:bg-white/5 transition-all flex items-center justify-center gap-2">
                    <i data-lucide="phone-call"></i> WIMPER Calendar
                </button>
            </div>
        </section>

        <!-- Critical Preparedness Section -->
        <section class="space-y-6">
            <div class="flex items-center justify-between border-b border-white/5 pb-4">
                <h2 class="text-2xl flex items-center gap-3 text-white" style="color: white !important; font-weight: 800 !important;">
                    <i data-lucide="clipboard-list" class="text-[#2563eb]"></i> Corporate Critical Preparedness
                </h2>
                <span class="text-sm text-blue-500 font-bold uppercase tracking-tighter">Actions Required</span>
            </div>

            <!-- Row 1: Actions -->
            <div class="grid lg:grid-cols-3 gap-6">
                <!-- Task 1 -->
                <div id="sync-step-1" class="glass p-6 rounded-3xl step-card border border-white/5 flex flex-col items-center text-center space-y-4 cursor-pointer transition-all duration-700" onclick="document.getElementById('financialModal').showModal()">
                    <div class="sync-indicator w-12 h-12 bg-slate-800 rounded-2xl flex items-center justify-center font-bold text-[#2563eb] shadow-lg transition-colors duration-700">01</div>
                    <div>
                        <h4 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">Financial Overview</h4>
                        <p class="text-sm text-slate-400 mt-2">A high-level view of your current position and audit objectives.</p>
                    </div>
                </div>
                <!-- Task 2 -->
                <div id="sync-step-2" class="glass p-6 rounded-3xl step-card border border-white/5 flex flex-col items-center text-center space-y-4 cursor-pointer transition-all duration-700" onclick="document.getElementById('proposalModal').showModal()">
                    <div class="sync-indicator w-12 h-12 bg-slate-800 rounded-2xl flex items-center justify-center font-bold text-blue-400 shadow-lg transition-colors duration-700">02</div>
                    <div>
                        <h4 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">Process Framework</h4>
                        <p class="text-sm text-slate-400 mt-2">The architecture we will use to scale your revenue while decreasing expenses.</p>
                    </div>
                </div>
                <!-- Task 3 -->
                <div id="sync-step-3" class="glass p-6 rounded-3xl step-card border border-white/5 flex flex-col items-center text-center space-y-4 cursor-pointer transition-all duration-700" onclick="document.getElementById('keyQuestionsModal').showModal()">
                    <div class="sync-indicator w-12 h-12 bg-slate-800 rounded-2xl flex items-center justify-center font-bold text-blue-400 shadow-lg transition-colors duration-700">03</div>
                    <div>
                        <h4 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">Key Questions</h4>
                        <p class="text-sm text-slate-400 mt-2">Identify the number one financial hurdle allowing you to keep more money in your business in the next 30 days.</p>
                    </div>
                </div>
            </div>

            <!-- Row 2: Secondary Video Explanations (v2, v3, v4, v5) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 border-t border-white/5">
                <!-- Video 2 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-colors">
                    <div class="small-video-container rounded-2xl overflow-hidden bg-black">
                        <video controls preload="metadata" class="w-full h-auto" poster="data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='450' viewBox='0 0 800 450'%3E%3Crect width='100%25' height='100%25' fill='%230f172a'/%3E%3Ccircle cx='400' cy='200' r='50' fill='%232563eb'/%3E%3Cpolygon points='385,175 385,225 430,200' fill='white'/%3E%3Ctext x='400' y='320' font-family='sans-serif' font-size='28' font-weight='bold' fill='%2394a3b8' text-anchor='middle' letter-spacing='2'%3ECLICK TO PLAY%3C/text%3E%3Ctext x='400' y='370' font-family='sans-serif' font-size='36' font-weight='900' fill='white' text-anchor='middle'%3ETHE SECTION 125 CODE%3C/text%3E%3C/svg%3E">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99200a14d53cdf024713.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="text-sm text-white" style="color: white !important; font-weight: bold !important;">The Section 125 Code</h4>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-colors">
                    <div class="small-video-container rounded-2xl overflow-hidden bg-black">
                        <video controls preload="metadata" class="w-full h-auto" poster="data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='450' viewBox='0 0 800 450'%3E%3Crect width='100%25' height='100%25' fill='%230f172a'/%3E%3Ccircle cx='400' cy='200' r='50' fill='%2310b981'/%3E%3Cpolygon points='385,175 385,225 430,200' fill='white'/%3E%3Ctext x='400' y='320' font-family='sans-serif' font-size='28' font-weight='bold' fill='%2394a3b8' text-anchor='middle' letter-spacing='2'%3ECLICK TO PLAY%3C/text%3E%3Ctext x='400' y='370' font-family='sans-serif' font-size='36' font-weight='900' fill='white' text-anchor='middle'%3ECORPORATE AUDIT PREP%3C/text%3E%3C/svg%3E">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd9920b54f0d0fa851c4db.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="text-sm text-white" style="color: white !important; font-weight: bold !important;">Corporate Audit Prep</h4>
                    </div>
                </div>
                <!-- Video 4 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-colors">
                    <div class="small-video-container rounded-2xl overflow-hidden bg-black">
                        <video controls preload="metadata" class="w-full h-auto" poster="data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='450' viewBox='0 0 800 450'%3E%3Crect width='100%25' height='100%25' fill='%230f172a'/%3E%3Ccircle cx='400' cy='200' r='50' fill='%23a855f7'/%3E%3Cpolygon points='385,175 385,225 430,200' fill='white'/%3E%3Ctext x='400' y='320' font-family='sans-serif' font-size='28' font-weight='bold' fill='%2394a3b8' text-anchor='middle' letter-spacing='2'%3ECLICK TO PLAY%3C/text%3E%3Ctext x='400' y='370' font-family='sans-serif' font-size='36' font-weight='900' fill='white' text-anchor='middle'%3EFICA LEAKAGE DETAILS%3C/text%3E%3C/svg%3E">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd9920ad1400c52ba1e223.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="text-sm text-white" style="color: white !important; font-weight: bold !important;">FICA Leakage Details</h4>
                    </div>
                </div>
                <!-- Video 5 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-orange-500/30 transition-colors">
                    <div class="small-video-container rounded-2xl overflow-hidden bg-black">
                        <video controls preload="metadata" class="w-full h-auto" poster="data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='450' viewBox='0 0 800 450'%3E%3Crect width='100%25' height='100%25' fill='%230f172a'/%3E%3Ccircle cx='400' cy='200' r='50' fill='%23f97316'/%3E%3Cpolygon points='385,175 385,225 430,200' fill='white'/%3E%3Ctext x='400' y='320' font-family='sans-serif' font-size='28' font-weight='bold' fill='%2394a3b8' text-anchor='middle' letter-spacing='2'%3ECLICK TO PLAY%3C/text%3E%3Ctext x='400' y='370' font-family='sans-serif' font-size='36' font-weight='900' fill='white' text-anchor='middle'%3ERETENTION &amp; GROWTH%3C/text%3E%3C/svg%3E">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99209bd1392e2eb31ea6.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="text-sm text-white" style="color: white !important; font-weight: bold !important;">Retention & Growth</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final Urgency Bar -->
        <section class="glass p-8 rounded-3xl bg-red-500/5 border border-red-500/20 text-center">
            <h3 class="text-xl text-white mb-2" style="color: white !important; font-weight: bold !important;">Final Step to Secure Enrollment</h3>
            <p class="text-slate-400 max-w-2xl mx-auto mb-6 italic">
                Enrollment is currently <span class="text-red-400 font-bold">UNCONFIRMED</span>. You must complete the Overview and submit your Key Questions to move into confirmed status for this Wednesday's session.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <div class="flex items-center gap-2 text-sm font-semibold px-4 py-2 bg-slate-800 rounded-full text-white transition-colors" style="color: white !important;">
                    <i data-lucide="circle" class="w-4 h-4"></i> Overview Reviewed
                </div>
                <div class="flex items-center gap-2 text-sm font-semibold px-4 py-2 bg-slate-800 rounded-full text-white transition-colors" style="color: white !important;">
                    <i data-lucide="circle" class="w-4 h-4"></i> Key Questions Submitted
                </div>
                <div class="flex items-center gap-2 text-sm font-semibold px-4 py-2 bg-slate-800 rounded-full text-white transition-colors" style="color: white !important;">
                    <i data-lucide="lock" class="w-4 h-4 text-slate-400"></i> Webinar Link (Locked)
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="pt-12 pb-24 text-center space-y-4">
            <div class="flex justify-center gap-6 text-slate-500 text-sm">
                <a href="https://thewimperprogram.com" class="hover:text-white transition-colors">thewimperprogram.com</a>
                <span>•</span>
                <a href="mailto:enrollment@thewimperprogram.com" class="hover:text-white transition-colors">enrollment@thewimperprogram.com</a>
            </div>
            <p class="text-slate-600 text-xs">© <?php echo date('Y'); ?> WIMPER Business Program. All Rights Reserved.</p>
        </footer>
    </div>

    <!-- CALENDAR MODAL (GHL IFRAME) -->
    <dialog id="calendarModal" class="bg-transparent m-auto p-0 w-full max-w-4xl">
        <div class="bg-slate-900 rounded-[2rem] shadow-2xl border border-blue-500/50 relative overflow-hidden">
            <!-- Close Button -->
            <button onclick="document.getElementById('calendarModal').close()" class="absolute top-4 right-4 z-50 text-slate-400 bg-slate-800 hover:text-white rounded-full p-2 hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            
            <div class="p-4 md:p-8">
                <h2 class="text-2xl text-white mb-6" style="color: white !important; font-weight: bold !important;">Strategy Session Calendar</h2>
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-inner min-h-[600px]">
                    <iframe src="https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v" style="width: 100%;border:none;overflow: hidden; min-height:600px;" scrolling="no" id="VNIKFQp8UXtGVcCV3s7v"></iframe>
                    <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </dialog>

    <!-- PROPOSAL OVERVIEW MODAL -->
    <dialog id="proposalModal" class="bg-transparent m-auto p-0 w-full max-w-5xl">
        <div class="bg-slate-900 rounded-[2rem] shadow-2xl border border-slate-700 relative overflow-hidden flex flex-col h-[90vh]">
            <!-- Close Button -->
            <button onclick="document.getElementById('proposalModal').close()" class="absolute top-4 right-4 z-50 text-slate-400 bg-slate-800 hover:text-white rounded-full p-2 hover:bg-slate-700 transition-colors">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            
            <div class="p-4 md:p-8 flex-shrink-0 flex items-center justify-between">
                <div>
                    <h2 class="text-2xl text-white mb-1" style="color: white !important; font-weight: bold !important;">WIMPER Program Proposal</h2>
                    <p class="text-slate-400 text-xs uppercase tracking-widest font-bold">Executive Summary</p>
                </div>
                <!-- Native Button for downloading the underlying PDF explicitly in the Modal -->
                <a href="<?php echo get_template_directory_uri(); ?>/assets/WIMPER_Program_Proposal.pdf" download="WIMPER_Executive_Proposal.pdf" class="bg-blue-600 hover:bg-blue-500 text-white rounded-xl px-4 py-2.5 text-xs font-bold uppercase tracking-widest flex items-center gap-2 shadow-[0_0_15px_rgba(59,130,246,0.3)] transition-all mr-12 md:mr-0 cursor-pointer">
                    <i data-lucide="download" class="w-4 h-4"></i> <span class="hidden md:inline">Download</span>
                </a>
            </div>
            
            <div class="flex-grow bg-[#323639] relative">
                <!-- Native Edge/Chrome/Safari PDF embedding into modal to prevent navigation exit -->
                <iframe src="<?php echo get_template_directory_uri(); ?>/assets/WIMPER_Program_Proposal.pdf#toolbar=1&navpanes=0&scrollbar=1&view=FitH" class="absolute w-full h-full border-none inset-0"></iframe>
            </div>
        </div>
    </dialog>

    <!-- FINANCIAL OVERVIEW / CALCULATOR MODAL -->
    <dialog id="financialModal" class="bg-transparent m-auto p-0 w-full max-w-xl">
        <div class="bg-slate-900 rounded-[2rem] shadow-2xl border border-emerald-500/20 relative overflow-hidden flex flex-col">
            <!-- Close Button -->
            <button onclick="document.getElementById('financialModal').close()" class="absolute top-4 right-4 z-50 text-slate-400 bg-slate-800 hover:text-white rounded-full p-2 hover:bg-slate-700 transition-colors">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            
            <div class="p-8 md:p-10">
                <h2 class="text-3xl text-blue-400 mb-2" style="color: #60a5fa !important; font-weight: bold !important;">Financial Tax Savings Calculator</h2>
                <p class="text-slate-400 text-sm mb-8">Calculate the estimated FICA tax reductions utilizing the W.I.M.P.E.R. Architecture (Avg $1,120 savings per W2 employee).</p>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-white text-xs uppercase tracking-widest mb-2" style="color: white !important; font-weight: bold !important;">Full-Time W2 Employees</label>
                        <input type="number" id="calcEmployeeCount" min="1" placeholder="e.g. 50" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-emerald-500 transition-colors">
                    </div>
                </div>

                <div class="mt-8 p-6 bg-emerald-900/20 border border-emerald-500/30 rounded-2xl flex flex-col items-center justify-center text-center">
                    <p class="text-xs uppercase tracking-widest text-emerald-500 font-bold mb-2" id="calcResultName">Estimated Annual Savings</p>
                    <div class="text-4xl md:text-6xl font-800 tracking-tighter text-white" id="calcResultAmount">$0</div>
                </div>
            </div>
        </div>
    </dialog>

    <!-- KEY QUESTIONS / STRATEGIC Q&A MODAL -->
    <dialog id="keyQuestionsModal" class="bg-transparent m-auto p-0 w-full max-w-4xl">
        <div class="bg-slate-900 rounded-[2rem] shadow-2xl border border-purple-500/20 relative overflow-hidden flex flex-col h-[85vh]">
            <!-- Close Button -->
            <button onclick="document.getElementById('keyQuestionsModal').close()" class="absolute top-4 right-4 z-50 text-slate-400 bg-slate-800 hover:text-white rounded-full p-2 hover:bg-slate-700 transition-colors">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            
            <!-- Modal Header -->
            <div class="p-6 md:p-8 flex-shrink-0 border-b border-white/5 bg-slate-800/50">
                <h2 class="text-2xl md:text-3xl text-purple-400 mb-2" style="color: #c084fc !important; font-weight: bold !important;">WIMPER Strategic Q&A</h2>
                <p class="text-slate-400 text-sm">For Established Business Owners & Operators</p>
            </div>
            
            <!-- Scrollable Content Area -->
            <div class="overflow-y-auto p-6 md:p-8 space-y-8 custom-scrollbar">
                
                <!-- Q1 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">1. "Who is this actually for—and who is it not for?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>WIMPER is designed for established business owners with consistent profitability and a team in place.</p>
                        <p class="text-slate-300 font-semibold mt-2">It is not for:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Early-stage businesses without stable revenue.</li>
                            <li>Owners looking for short-term tax tricks.</li>
                            <li>Companies without employees or structured payroll.</li>
                        </ul>
                        <p class="text-slate-300 font-semibold mt-2">It is for operators who:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Want to legally reduce tax burden.</li>
                            <li>Are already paying significant taxes and want efficiency.</li>
                            <li>Value compliant, structured financial strategies.</li>
                        </ul>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">2. "How is this legally possible?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>WIMPER is not a loophole—it's based on long-standing IRS-approved provisions that have existed since the 1960s.</p>
                        <p>Specifically, it leverages:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Employer-sponsored reimbursement structures.</li>
                            <li>Established Section 125 tax code allowances for medical expense reimbursement.</li>
                            <li>Compliance frameworks aligned with IRS and ERISA standards.</li>
                        </ul>
                        <p class="italic text-slate-500 mt-2">Most business owners simply aren't aware these provisions exist or how to implement them correctly.</p>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">3. "What exactly is a SIMRP and how does it fit into this?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>A SIMRP (Self-Insured Medical Reimbursement Plan) allows business owners to:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Reimburse employees (including themselves, if structured properly) for qualified medical expenses.</li>
                            <li>Do so in a completely tax-advantaged way.</li>
                            <li>Customize benefits without relying solely on traditional, rigid insurance structures.</li>
                        </ul>
                        <p>Within WIMPER, the SIMRP is the core engine that enables compliant, automated tax efficiency.</p>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">4. "Is this compliant with current IRS regulations?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p><strong class="text-slate-200">Yes—when implemented correctly.</strong></p>
                        <p>WIMPER is structured to perfectly align with:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>IRS guidelines on medical reimbursement plans.</li>
                            <li>Employer-sponsored benefit regulations.</li>
                            <li>Documentation and substantiation requirements.</li>
                        </ul>
                        <p>The key difference is not the law itself—it's the <strong>execution and compliance structure</strong>, which is where most businesses fail when attempting to do this on their own.</p>
                    </div>
                </div>

                <!-- Q5 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">5. "Why haven't I heard about this before?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>Because it's not widely promoted. The primary reasons are:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>It requires aggressive structuring and compliance to execute correctly.</li>
                            <li>Traditional financial advisors and bookkeepers often default to simpler, more familiar tax deductions.</li>
                            <li>There's no direct incentive for standard health insurance providers to educate at this tactical level.</li>
                        </ul>
                        <p class="italic text-slate-500 mt-2">This is not a new law—it is simply a massively underutilized strategy.</p>
                    </div>
                </div>

                <!-- Q6 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">6. "What kind of financial impact should I realistically expect?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>That depends precisely on: your current tax liability, your number of W-2 employees, and eligible medical expenses.</p>
                        <p>However, most qualified businesses see:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>An average of <strong>$1,120 per employee, per year</strong> in payroll tax reduction.</li>
                            <li>Reallocation of dollars they are already spending.</li>
                            <li>A net-zero employer cost while simultaneously increasing employee take-home pay.</li>
                        </ul>
                        <p>This is not about creating new expenses—it is solely about optimizing existing ones.</p>
                    </div>
                </div>

                <!-- Q7 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">7. "How complex is implementation?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>It is structured—but categorically not burdensome for you when done correctly.</p>
                        <p>WIMPER provides:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>A strictly defined framework for setup.</li>
                            <li>Professional guidance on compliance and documentation.</li>
                            <li>Ongoing programmatic structure to ensure you remain fully aligned and protected.</li>
                        </ul>
                        <p>Without a system like WIMPER, it is overwhelmingly complex. <em>With us, it is entirely streamlined.</em></p>
                    </div>
                </div>

                <!-- Q8 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">8. "What are the risks if this is set up incorrectly?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>Improper, DIY setup can lead to severe consequences:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Loss of all tax advantages.</li>
                            <li>Compliance triggers and potential audits with the IRS.</li>
                            <li>Improper documentation or reimbursement handling.</li>
                        </ul>
                        <p class="font-bold text-red-400 mt-2">That is exactly why corporate structure matters.</p>
                        <p>WIMPER exists to ensure the strategy is safely executed to the letter of the law—not just theoretically understood.</p>
                    </div>
                </div>

                <!-- Q9 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">9. "How does this compare to traditional health insurance or benefits?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>Traditional plans are highly fixed, increasingly expensive, and strictly limited in flexibility.</p>
                        <p>A SIMRP within the WIMPER architecture allows:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Massive control over reimbursements.</li>
                            <li>Exceptional cost efficiency through FICA relief.</li>
                            <li>Perfect alignment with actual participant expenses rather than rigid corporate plans.</li>
                        </ul>
                        <p>We do not require you to replace your current major medical plan—WIMPER sits cleanly alongside it as an optimized tax structure.</p>
                    </div>
                </div>

                <!-- Q10 -->
                <div class="space-y-3">
                    <h3 class="text-lg text-white" style="color: white !important; font-weight: bold !important;">10. "What does the process look like to get started?"</h3>
                    <div class="text-slate-400 text-sm space-y-2 leading-relaxed pl-4 border-l-2 border-purple-500/30">
                        <p>The onboarding process is engineered for speed:</p>
                        <ul class="list-decimal pl-5 space-y-1">
                            <li>Evaluate business eligibility.</li>
                            <li>Map current expenses and corporate structure.</li>
                            <li>Implement compliant repayment framework.</li>
                            <li>Maintain proper documentation and automated execution.</li>
                        </ul>
                        <p class="mt-4 font-bold text-slate-200">The goal is not disruption—it is smooth financial integration into exactly what you are already doing.</p>
                    </div>
                </div>

            </div>
        </div>
    </dialog>

    <?php wp_footer(); ?>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Calculate Upcoming Wednesday
        function getNextWednesday() {
            const today = new Date();
            const dayOfWeek = today.getDay(); // 0 (Sun) to 6 (Sat)
            const daysUntilWednesday = (3 - dayOfWeek + 7) % 7 || 7;
            const nextWednesday = new Date(today);
            nextWednesday.setDate(today.getDate() + daysUntilWednesday);
            
            const options = { weekday: 'long', month: 'short', day: 'numeric' };
            return nextWednesday.toLocaleDateString('en-US', options);
        }

        document.getElementById('upcoming-wednesday').innerText = getNextWednesday();

        // Video Tracking / Unlock Logic
        const heroVideo = document.getElementById('mainHeroVideo');
        const confirmBtn = document.getElementById('confirmWatchBtn');
        const btnText = document.getElementById('btnText');
        const progressBar = document.getElementById('unlockProgressBar');
        let unlocked = false;

        if (heroVideo && confirmBtn) {
            heroVideo.addEventListener('timeupdate', () => {
                const duration = heroVideo.duration;
                if (!duration) return;
                
                const time = heroVideo.currentTime;
                const percent = (time / duration) * 100;
                
                // --- SYNCHRONIZED CARD LIGHT-UP LOGIC ---
                const step1 = document.getElementById('sync-step-1');
                const step2 = document.getElementById('sync-step-2');
                const step3 = document.getElementById('sync-step-3');

                const activateStep = (el) => {
                    if(!el) return;
                    el.classList.remove('opacity-40', 'grayscale', 'scale-95');
                    el.classList.add('opacity-100', 'grayscale-0', 'scale-100', 'shadow-[0_0_20px_rgba(37,99,235,0.3)]', 'border-blue-500/30');
                    const indicator = el.querySelector('.sync-indicator');
                    if(indicator) indicator.classList.add('bg-blue-600', 'text-white');
                };

                // Approximate timestamps for the 1-minute intro video to highlight the 3 steps
                if (time >= 8) activateStep(step1);
                if (time >= 22) activateStep(step2);
                if (time >= 40) activateStep(step3);
                // ----------------------------------------

                // Update progress bar visual behind the button
                if (!unlocked) {
                    progressBar.style.width = Math.min(percent * 2, 100) + '%'; 
                }

                // Unlock at 50%
                if (percent >= 50 && !unlocked) {
                    unlocked = true;
                    progressBar.style.display = 'none'; // hide progress bar
                    
                    // Style the button as Active / Pressable
                    confirmBtn.disabled = false;
                    confirmBtn.className = "w-full bg-[#2563eb] hover:bg-blue-600 text-white font-800 py-5 rounded-2xl shadow-xl shadow-blue-500/20 transition-all flex items-center justify-center gap-3 border border-blue-400 cursor-pointer animate-[pulse_2s_infinite]";
                    
                    // Change Text & Icon
                    btnText.innerHTML = "Click here. I have watched the video.";
                    document.getElementById('btnIcon').setAttribute('data-lucide', 'eye');
                    lucide.createIcons(); // Re-render the new eye icon
                }
            });

            // Handle the actual click after unlock
            confirmBtn.addEventListener('click', () => {
                if(!unlocked) return;
                confirmBtn.className = "w-full bg-emerald-800 text-emerald-300 font-800 py-5 rounded-2xl transition-all flex items-center justify-center gap-3 shadow-inner";
                btnText.innerHTML = "Confirmed complete.";
                document.getElementById('btnIcon').setAttribute('data-lucide', 'check-circle');
                lucide.createIcons();
                
                // You can add GHL webhook triggers or cookie logic here if needed:
                // fetch('https://services.leadconnectorhq.com/hooks/...', { method: 'POST' });
            });
        }

        // Close Calendar modal on outside click
        const calendarModal = document.getElementById('calendarModal');
        calendarModal.addEventListener('click', (e) => {
            const dialogDimensions = calendarModal.getBoundingClientRect();
            if (
                e.clientX < dialogDimensions.left ||
                e.clientX > dialogDimensions.right ||
                e.clientY < dialogDimensions.top ||
                e.clientY > dialogDimensions.bottom
            ) {
                calendarModal.close();
            }
        });

        // Close Proposal modal on outside click
        const proposalModal = document.getElementById('proposalModal');
        if(proposalModal) {
            proposalModal.addEventListener('click', (e) => {
                const dialogDimensions = proposalModal.getBoundingClientRect();
                if (
                    e.clientX < dialogDimensions.left ||
                    e.clientX > dialogDimensions.right ||
                    e.clientY < dialogDimensions.top ||
                    e.clientY > dialogDimensions.bottom
                ) {
                    proposalModal.close();
                }
            });
        }

        // Close Financial modal on outside click
        const financialModal = document.getElementById('financialModal');
        if(financialModal) {
            financialModal.addEventListener('click', (e) => {
                const dialogDimensions = financialModal.getBoundingClientRect();
                if (
                    e.clientX < dialogDimensions.left ||
                    e.clientX > dialogDimensions.right ||
                    e.clientY < dialogDimensions.top ||
                    e.clientY > dialogDimensions.bottom
                ) {
                    financialModal.close();
                }
            });
        }

        // Close Key Questions modal on outside click
        const keyQuestionsModal = document.getElementById('keyQuestionsModal');
        if(keyQuestionsModal) {
            keyQuestionsModal.addEventListener('click', (e) => {
                const dialogDimensions = keyQuestionsModal.getBoundingClientRect();
                if (
                    e.clientX < dialogDimensions.left ||
                    e.clientX > dialogDimensions.right ||
                    e.clientY < dialogDimensions.top ||
                    e.clientY > dialogDimensions.bottom
                ) {
                    keyQuestionsModal.close();
                }
            });
        }

        // Live Calculator Logic
        const empInput = document.getElementById('calcEmployeeCount');
        const resultAmount = document.getElementById('calcResultAmount');

        function updateCalculator() {
            const employees = parseInt(empInput.value) || 0;
            const savings = employees * 1120; // $1,120 avg tax savings per employee
            
            resultAmount.innerText = '$' + savings.toLocaleString();
        }

        if(empInput) {
            empInput.addEventListener('input', updateCalculator);
        }
    </script>
</body>
</html>
