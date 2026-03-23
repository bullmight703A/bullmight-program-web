<?php
/**
 * Template Name: Join Webinar
 *
 * @package wimper
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W.I.M.P.E.R. | Benefits Administration Meets Financial Engineering</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            color: #1e293b;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        /* Corporate Trust Palette */
        .bg-navy {
            background-color: #1e40af;
        }

        .text-accent {
            color: #3b82f6;
        }

        .bg-accent {
            background-color: #3b82f6;
        }

        .bg-soft-blue {
            background-color: #f8faff;
        }

        .border-soft {
            border-color: #e2e8f0;
        }

        .border-accent {
            border-color: #3b82f6;
        }

        /* Ad Landing Visuals */
        .landing-hero {
            background: linear-gradient(180deg, #eff6ff 0%, #ffffff 100%);
        }

        .highlight-bar {
            background: linear-gradient(90deg, #1e40af 0%, #3b82f6 100%);
        }

        /* SPA Transitions */
        .page-view {
            display: none;
            animation: fadeIn 0.4s ease-out;
        }

        .page-view.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Components */
        .mock-dashboard {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 30px 60px -12px rgba(30, 64, 175, 0.15);
        }

        .dash-step {
            border-left: 3px solid #e2e8f0;
            transition: all 0.3s;
        }

        .dash-step.active {
            border-left-color: #3b82f6;
            background-color: #eff6ff;
        }

        /* RESTORED: Bold Blue Border Form Outline */
        .form-outline-blue {
            border: 5px solid #3b82f6;
            border-radius: 36px;
            box-shadow: 0 35px 70px -15px rgba(59, 130, 246, 0.3);
            background-color: white;
        }

        /* Mentor Image Framing */
        .mentor-img-container {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px -10px rgba(30, 64, 175, 0.25);
            border: 8px solid #ffffff;
            width: 100%;
            max-width: 450px;
            aspect-ratio: 3/4;
            margin: 0 auto;
            background-color: #f1f5f9;
        }

        .mentor-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">

    <!-- NAVIGATION (Hidden on Ad Landing View) -->
    <nav id="main-nav" class="bg-white/90 backdrop-blur-md border-b border-slate-100 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center cursor-pointer" onclick="navigateTo('home')">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-10 h-10 bg-accent rounded-lg flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-shield-heart text-xl"></i>
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="text-xl font-extrabold text-slate-900 tracking-tight leading-none">W.I.M.P.E.R.</span>
                            <span class="text-[9px] font-medium text-slate-500 mt-1 uppercase tracking-wider">Powered by
                                Revive Health</span>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex items-center space-x-8">
                    <span onclick="navigateTo('home')" id="nav-home"
                        class="nav-link active text-slate-600 text-sm">Experience</span>
                    <span onclick="navigateTo('method')" id="nav-method" class="nav-link text-slate-600 text-sm">The
                        Chassis</span>
                    <span onclick="navigateTo('iul')" id="nav-iul" class="nav-link text-slate-600 text-sm">Wealth
                        Strategy</span>
                    <span onclick="navigateTo('webinar-landing')" id="nav-webinar-landing"
                        class="nav-link text-center leading-tight font-bold text-accent text-sm">Weekly<br>Briefing</span>
                    <span onclick="navigateTo('timeline')" id="nav-timeline"
                        class="nav-link text-center leading-tight text-slate-600 text-sm">Timeline<br>& Success</span>
                    <button onclick="navigateTo('contact')"
                        class="bg-navy text-white px-6 py-2.5 rounded-lg text-xs font-bold uppercase tracking-wider hover:bg-accent transition duration-300">
                        Verify Eligibility
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- ================================================================================= -->
    <!-- VIEW: AD-WEBINAR LANDING (CONVERSION TUNNEL)                                    -->
    <!-- ================================================================================= -->
    <div id="webinar-landing" class="page-view active flex-grow">
        <div
            class="bg-navy text-white text-center py-3 text-xs font-bold uppercase tracking-widest sticky top-0 z-[60]">
            <i class="fas fa-bolt mr-2 text-accent"></i> Live Executive Briefing: This Wednesday at 7:00 PM EST
        </div>

        <!-- Hero Section -->
        <section class="landing-hero pt-20 pb-24 border-b border-slate-100 text-center">
            <div class="max-w-5xl mx-auto px-4">
                <div
                    class="inline-block bg-blue-50 text-accent px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-8">
                    Corporate Financial Architecture 2025
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-slate-900 leading-tight mb-8">
                    Cut Payroll Costs By <span class="text-accent underline decoration-blue-200 decoration-4">$1,100 Per
                        Employee</span> Without Switching Providers.
                </h1>
                <p class="text-xl text-slate-600 mb-10 max-w-3xl mx-auto leading-relaxed">
                    Learn how W2 business owners are utilizing specific IRS tax codes to offer <strong>$0 Monthly Health
                        Benefits</strong> while recapturing institutional FICA dollars.
                </p>

                <div
                    class="bg-white max-w-2xl mx-auto rounded-3xl shadow-2xl border border-slate-100 overflow-hidden mb-12">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div
                            class="p-8 border-b md:border-b-0 md:border-r border-slate-100 flex flex-col items-center justify-center">
                            <i class="fas fa-video text-3xl text-accent mb-4"></i>
                            <span class="text-sm font-bold text-slate-900">Live Zoom Session</span>
                            <span class="text-xs text-slate-500">Wednesday @ 7:00 PM EST</span>
                        </div>
                        <div class="p-8 flex flex-col items-center justify-center">
                            <i class="fas fa-users text-3xl text-accent mb-4"></i>
                            <span class="text-sm font-bold text-slate-900">Executive Access</span>
                            <span class="text-xs text-slate-500">W2 Business Owners Only</span>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-50 border-t border-slate-100">
                        <button onclick="scrollToId('webinar-form-section')"
                            class="w-full bg-navy text-white py-5 rounded-2xl font-black text-xl hover:bg-accent transition shadow-xl shadow-blue-200 transform hover:scale-[1.01]">
                            YES, I WANT TO ATTEND!
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mentor Section -->
        <section class="py-24 bg-slate-50 border-y border-slate-100">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="mentor-img-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/robert_headshot.jpg'); ?>"
                                alt="Robert" class="mentor-img"
                                onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop'">
                        </div>
                        <div
                            class="absolute -bottom-6 -right-6 lg:-bottom-10 lg:-right-10 w-24 h-24 bg-accent rounded-full flex items-center justify-center text-white shadow-xl z-20 border-4 border-white">
                            <i class="fas fa-award text-4xl"></i>
                        </div>
                    </div>
                    <div class="text-center lg:text-left">
                        <span class="text-accent text-sm font-black uppercase tracking-[0.2em] mb-4 block">Meet Your
                            Architect</span>
                        <h2 class="text-5xl font-black text-slate-900 mb-6 tracking-tight">Robert</h2>
                        <div class="space-y-6 text-lg text-slate-600 leading-relaxed font-medium">
                            <p>
                                As a seasoned Director and Automation Expert, I specialize in enhancing organizational
                                capabilities through the strategic integration of management protocols and cutting-edge
                                financial architecture.
                            </p>
                            <p>
                                My holistic approach ensures a seamless operational flow, improved stakeholder
                                communication, and the elevation of care standards while protecting your bottom line
                                from unnecessary tax exposure.
                            </p>
                        </div>
                        <div class="flex justify-center lg:justify-start items-center space-x-6 mt-10">
                            <a href="#"
                                class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-navy shadow-lg border border-slate-100 hover:text-accent hover:-translate-y-1 transition-all"><i
                                    class="fab fa-linkedin-in text-xl"></i></a>
                            <a href="#"
                                class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-navy shadow-lg border border-slate-100 hover:text-accent hover:-translate-y-1 transition-all"><i
                                    class="fas fa-envelope text-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Section (Restored Bold Blue Outline) -->
        <section id="webinar-form-section" class="py-32 bg-white">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-black text-slate-900 mb-4 tracking-tight">Secure Your Seat</h2>
                <p class="text-lg text-slate-500 mb-12 font-medium">Receive the Zoom credentials for this Wednesday's
                    Live Briefing.</p>

                <!-- RESTORED: High-Contrast Blue Border Outline -->
                <div class="form-outline-blue p-2 max-w-2xl mx-auto">
                    <div class="rounded-[28px] overflow-hidden" style="min-height: 600px;">
                        <iframe src="https://api.leadconnectorhq.com/widget/form/f7ZJkxPhHo9RsgaBkn7b"
                            style="width:100%;height:600px;border:none;" id="inline-f7ZJkxPhHo9RsgaBkn7b"
                            data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow"
                            data-form-name="Robert X Wojo Media" data-height="598"
                            data-layout-iframe-id="inline-f7ZJkxPhHo9RsgaBkn7b" data-form-id="f7ZJkxPhHo9RsgaBkn7b"
                            title="Robert X Wojo Media"></iframe>
                        <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                    </div>
                </div>

                <p
                    class="mt-12 text-[10px] text-slate-400 uppercase tracking-[0.2em] text-center px-12 leading-relaxed font-bold">
                    This site is not a part of the Facebook website or Facebook Inc. Additionally, this site is not
                    endorsed by Facebook in any way. FACEBOOK is a trademark of FACEBOOK, Inc.
                </p>
            </div>
        </section>
    </div>

    <!-- SPA NAVIGATION PAGES (Placeholders for routing) -->
    <div id="home" class="page-view flex-grow hero-gradient">
        <section class="pt-40 text-center">
            <h1 class="text-6xl font-black">Experience W.I.M.P.E.R.</h1>
        </section>
    </div>
    <div id="method" class="page-view flex-grow bg-white">
        <section class="pt-40 text-center">
            <h1 class="text-6xl font-black">The Chassis</h1>
        </section>
    </div>
    <div id="iul" class="page-view flex-grow bg-white">
        <section class="pt-40 text-center">
            <h1 class="text-6xl font-black">Wealth Strategy</h1>
        </section>
    </div>
    <div id="timeline" class="page-view flex-grow bg-white">
        <section class="pt-40 text-center">
            <h1 class="text-6xl font-black">Success Flow</h1>
        </section>
    </div>
    <div id="contact" class="page-view flex-grow bg-soft-blue">
        <section class="pt-40 text-center">
            <h1 class="text-6xl font-black">Verification</h1>
        </section>
    </div>

    <!-- FOOTER -->
    <footer id="main-footer" class="bg-white border-t border-slate-100 py-16 mt-auto">
        <div
            class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-sm text-slate-500">
            <div class="flex items-center space-x-3 mb-8 md:mb-0">
                <div class="w-8 h-8 bg-navy rounded-lg flex items-center justify-center text-white"><i
                        class="fas fa-shield-heart text-sm"></i></div>
                <span class="font-black text-slate-900 tracking-tight">W.I.M.P.E.R.</span>
            </div>
            <div class="flex space-x-8 font-bold uppercase text-[10px] tracking-widest">
                <span onclick="navigateTo('method')"
                    class="hover:text-accent cursor-pointer transition">Methodology</span>
                <span onclick="navigateTo('contact')" class="hover:text-accent cursor-pointer transition">Feasibility
                    Audit</span>
                <span>Legal</span>
            </div>
            <div class="text-[10px] font-bold uppercase tracking-widest">&copy;
                <?php echo date('Y'); ?> W.I.M.P.E.R. Architecture
            </div>
        </div>
    </footer>

    <!-- LOGIC -->
    <script>
        function navigateTo(pageId) {
            document.querySelectorAll('.page-view').forEach(el => el.classList.remove('active'));
            const target = document.getElementById(pageId);
            if (target) target.classList.add('active');

            document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));
            const activeLink = document.getElementById('nav-' + pageId);
            if (activeLink) activeLink.classList.add('active');

            const mainNav = document.getElementById('main-nav');
            const mainFooter = document.getElementById('main-footer');

            if (pageId === 'webinar-landing') {
                mainNav.style.display = 'none';
                mainFooter.style.display = 'none';
            } else {
                mainNav.style.display = 'block';
                mainFooter.style.display = 'block';
            }
            window.scrollTo(0, 0);
        }

        function scrollToId(elementId) {
            const element = document.getElementById(elementId);
            if (element) element.scrollIntoView({ behavior: 'smooth' });
        }

        window.onload = () => {
            // Focus on landing page for executive session registration
            navigateTo('webinar-landing');
        };
    </script>
</body>

</html>