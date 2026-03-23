<?php
/**
 * Template Name: Post Appointment Review
 *
 * @package wimper
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What's Next | Your Wimper Strategic Overview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        h1, h2, h3, h4, .font-heading { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-brand { background-color: #1e3a8a; }
        .text-brand { color: #1e3a8a; }
        .gradient-bg { background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); }
        .card-shadow { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05); }
        .video-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <!-- Simple Success Nav -->
    <nav class="bg-white border-b border-slate-200 py-4">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-brand rounded flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <span class="text-xl font-bold text-brand">Wimper</span>
            </div>
            <div class="text-sm font-semibold text-green-600 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                Appointment Confirmed
            </div>
        </div>
    </nav>

    <!-- Hero / Video Section -->
    <header class="pt-12 pb-16 gradient-bg">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6">You're All Set! Here's what we're building for you.</h1>
            <p class="text-lg text-slate-600 mb-10">While you wait for our call, take a few minutes to watch this overview of how the Wimper program integrates with your current structure.</p>
            
            <!-- HeyGen Video Placeholder -->
            <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-200 card-shadow">
                <div class="video-container">
                    <!-- Placeholder for HeyGen Video -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-slate-800 text-white p-8 text-center">
                        <svg class="w-16 h-16 mb-4 text-blue-400 opacity-50" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 0l-3 3m3-3l3 3"></path></svg>
                        <p class="text-xl font-bold">Wimper Strategic Briefing</p>
                        <p class="text-sm opacity-70 mt-2">[HeyGen Overview Video Placeholder]</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Program Partners & Benefits -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">A Powerful Integration of Top-Tier Partners</h2>
                <p class="text-slate-500">We leverage the strengths of industry leaders to provide a seamless benefit experience.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Revive Health -->
                <div class="p-8 rounded-3xl bg-blue-50 border border-blue-100 flex flex-col items-start">
                    <div class="px-4 py-1 bg-white rounded-full text-blue-600 text-xs font-bold uppercase mb-4 tracking-tighter">Wellness Integration</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Revive Health Delivery</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Revive Health serves as the primary touchpoint for your employees, offering 24/7 Virtual Primary Care, Mental Health support, and Pharmacy benefits—all with $0 co-pays.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-sm font-medium text-slate-700">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            $0 Out-of-Pocket Virtual Care
                        </li>
                        <li class="flex items-center gap-2 text-sm font-medium text-slate-700">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            Comprehensive Mental Wellness
                        </li>
                        <li class="flex items-center gap-2 text-sm font-medium text-slate-700">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            Integrated Pharmacy Solutions
                        </li>
                    </ul>
                </div>

                <!-- Manhattan Life -->
                <div class="p-8 rounded-3xl bg-slate-900 text-white flex flex-col items-start">
                    <div class="px-4 py-1 bg-white/10 rounded-full text-white text-xs font-bold uppercase mb-4 tracking-tighter">Underwriting & Stability</div>
                    <h3 class="text-2xl font-bold mb-4">Manhattan Life Security</h3>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Backed by Manhattan Life's century-old legacy, our program provides the underwriting stability required for long-term compliance and financial security.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-sm font-medium text-slate-200">
                            <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            Underwritten Hospitalization Benefits
                        </li>
                        <li class="flex items-center gap-2 text-sm font-medium text-slate-200">
                            <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            Critical Illness & Accident Protections
                        </li>
                        <li class="flex items-center gap-2 text-sm font-medium text-slate-200">
                            <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            National Network Reliability
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof / Happy Stories -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-16">Stories from the Front Lines</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Story 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm text-left border border-slate-100">
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-600 mb-6 italic">"As a CEO of a 35-person firm, I was skeptical about tax-free reimbursements. But after the first month, our FICA savings were exactly as projected, and my team finally feels like they have real health support."</p>
                    <div class="font-bold text-slate-900">David M.</div>
                    <div class="text-xs text-slate-500 uppercase">CEO, Tech Services</div>
                </div>
                <!-- Story 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm text-left border border-slate-100">
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <!-- repeat SVG as above -->
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-600 mb-6 italic">"Our hiring process changed overnight. Being able to offer 24/7 virtual care with no co-pays to candidates—at no cost to our bottom line—gave us the edge we needed to beat out larger competitors."</p>
                    <div class="font-bold text-slate-900">Sarah K.</div>
                    <div class="text-xs text-slate-500 uppercase">Director of Ops, Logistics</div>
                </div>
                <!-- Story 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm text-left border border-slate-100">
                    <div class="flex text-yellow-400 mb-4">
                        <!-- repeat SVG as above -->
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-600 mb-6 italic">"As a CFO, compliance is my #1 priority. Seeing the ERISA Wrap Docs and the Section 125 logic validated by our tax attorney made the decision easy. We saved $52k in Year 1."</p>
                    <div class="font-bold text-slate-900">Robert L.</div>
                    <div class="text-xs text-slate-500 uppercase">CFO, Manufacturing</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <div class="bg-slate-50 p-6 font-bold text-slate-900">
                        Does this replace our current major medical insurance?
                    </div>
                    <div class="p-6 text-slate-600 border-t border-slate-100">
                        No. Wimper is a supplemental wellness plan. It works alongside your existing health insurance to fill gaps in care and provide tax-efficient reimbursements. It does not disrupt your current provider relationships.
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <div class="bg-slate-50 p-6 font-bold text-slate-900">
                        How is this "free" for the employer?
                    </div>
                    <div class="p-6 text-slate-600 border-t border-slate-100">
                        The program is self-funding. The 7.65% FICA tax savings generated by the salary reallocation typically exceeds the administrative fees of the plan. This results in a net-positive cash flow for the business.
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <div class="bg-slate-50 p-6 font-bold text-slate-900">
                        Is this really IRS compliant?
                    </div>
                    <div class="p-6 text-slate-600 border-t border-slate-100">
                        Yes. Wimper operates strictly under Internal Revenue Code Sections 125 (Cafeteria Plans) and 105 (Medical Reimbursement). We provide full ERISA wrap documentation and legal briefs to your tax professionals upon request.
                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <div class="bg-slate-50 p-6 font-bold text-slate-900">
                        What happens if an employee leaves?
                    </div>
                    <div class="p-6 text-slate-600 border-t border-slate-100">
                        The program is month-to-month per employee. There are no long-term contracts for the individuals, and the transition process is handled entirely by our administration team.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secondary Capture Form (If they want to provide details early) -->
    <section class="py-20 gradient-bg">
        <div class="max-w-xl mx-auto px-4 bg-white p-10 rounded-3xl shadow-2xl border border-slate-200">
            <h3 class="text-2xl font-bold text-center mb-4">Speed Up Your ROI Analysis</h3>
            <p class="text-sm text-slate-500 text-center mb-8">Optionally provide your approximate W2 employee count and current payroll frequency so we can have your savings report ready for our call.</p>
            <form class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Total W2 Employees</label>
                        <input type="number" placeholder="e.g. 45" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Payroll Frequency</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none text-slate-500">
                            <option>Bi-Weekly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Notes for the Consultant</label>
                    <textarea placeholder="Tell us about your current benefit goals..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none h-24"></textarea>
                </div>
                <button type="submit" class="w-full bg-brand text-white font-bold py-4 rounded-xl hover:bg-blue-900 transition-all shadow-lg">
                    Submit Details & Prepare My Report
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-12 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center gap-2 mb-4">
                <div class="w-6 h-6 bg-brand rounded-sm flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <span class="text-lg font-bold text-brand">Wimper</span>
            </div>
            <p class="text-xs text-slate-400 tracking-wider font-semibold uppercase">Exclusively for Mid-Market Business Optimization</p>
        </div>
    </footer>

</body>
</html>
