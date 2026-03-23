<?php
/**
 * Template Name: Brigance Virtual Page
 *
 * A premium landing page detailing the BRIGANCE assessment integration for Kidazzle.
 */

get_header(); 
?>

<main class="bg-brand-cream pb-24">
    <!-- Hero Section -->
    <section class="relative pt-24 pb-32 bg-white overflow-hidden border-b border-brand-ink/5">
        <div class="absolute inset-0 z-0">
            <!-- Background pattern/gradient -->
            <div class="absolute top-0 right-0 w-2/3 h-full bg-gradient-to-l from-kidazzle-tealLight/40 to-transparent"></div>
            <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-kidazzle-gold/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10 grid lg:grid-cols-2 gap-16 items-center">
            <div class="animate-fade-in-up">
                <div class="inline-flex items-center gap-2 bg-kidazzle-teal/10 border border-kidazzle-teal/20 px-4 py-1.5 rounded-full text-[10px] uppercase tracking-[0.2em] font-bold text-kidazzle-teal shadow-sm mb-6">
                    <i class="fa-solid fa-microscope"></i> Premium Assessment Tools
                </div>

                <h1 class="font-serif text-5xl md:text-6xl text-brand-ink mb-6 leading-[1.1]">
                    Discovering the <br><span class="text-kidazzle-blue italic">"Can Dos"</span> in Every Child.
                </h1>

                <p class="text-xl text-brand-ink/70 max-w-xl mb-10 leading-relaxed">
                    At KIDazzle, we partner with the industry-leading <strong>BRIGANCE®</strong> assessment frameworks. Instead of focusing on what students haven't learned yet, we celebrate and build upon exactly what they <em>can do</em>.
                </p>

                <div class="flex gap-4">
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="booking-btn px-8 py-4 bg-kidazzle-red text-white font-bold rounded-full uppercase tracking-[0.2em] text-xs hover:opacity-90 transition-colors shadow-lg shadow-kidazzle-red/30 flex items-center gap-3">
                        Schedule a Visit <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="relative h-[500px] rounded-[3rem] overflow-hidden shadow-2xl border-[6px] border-white animate-fade-in-up" style="animation-delay: 0.2s;">
                <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?q=80&w=1200&auto=format&fit=crop" class="w-full h-full object-cover" alt="Teacher assessing student smiling" />
                <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-lg border border-white/50">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-kidazzle-gold flex items-center justify-center text-white text-xl shadow-md">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-ink">Data-Driven Growth</p>
                            <p class="text-sm text-brand-ink/60">Tracking developmental milestones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Philosophy Section -->
    <section class="max-w-7xl mx-auto px-4 lg:px-6 -mt-10 relative z-20 mb-24">
        <div class="bg-white rounded-[3rem] p-8 md:p-16 shadow-xl border border-brand-ink/5 grid md:grid-cols-3 gap-12">
            <div class="md:col-span-1 border-r border-brand-ink/10 pr-8">
                <i class="fa-solid fa-quote-left text-5xl text-kidazzle-red/20 mb-6 block"></i>
                <p class="text-xl font-serif text-brand-ink italic leading-relaxed">
                    "Al Brigance envisioned assessments with a different emphasis—in-depth skill sequences that would reveal what students DO know and CAN do."
                </p>
            </div>
            <div class="md:col-span-2 flex flex-col justify-center">
                <h3 class="text-xs font-bold text-kidazzle-teal uppercase tracking-[0.2em] mb-3">Why We Chose Brigance</h3>
                <h2 class="text-3xl font-bold text-brand-ink mb-6">Changing the Conversation Around Early Childhood Assessment</h2>
                <p class="text-brand-ink/70 leading-relaxed text-lg">
                    Traditional assessment tools often highlight what a child doesn't know. At KIDazzle Child Care, we fundamentally reject that approach. Utilizing the <strong>BRIGANCE Early Childhood Screens III</strong> and <strong>Inventory of Early Development (IED)</strong>, our educators are equipped to determine precisely what's next for each unique student. This ensures no child is pushed too fast, and no child is held back.
                </p>
            </div>
        </div>
    </section>

    <!-- Bento Grid Features Section -->
    <section class="max-w-7xl mx-auto px-4 lg:px-6 mb-24">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-4xl font-serif font-bold text-brand-ink mb-4">The KIDazzle x BRIGANCE Advantage</h2>
            <p class="text-brand-ink/60 text-lg">How integrating industry-leading instructional materials transforms your child’s daily learning experience.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Feature 1 -->
            <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-xl hover:border-kidazzle-blue/30 transition-all group">
                <div class="w-16 h-16 bg-kidazzle-blueLight text-kidazzle-blue rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h3 class="font-bold text-xl text-brand-ink mb-4">Early Childhood Screening</h3>
                <p class="text-brand-ink/70 leading-relaxed">
                    By identifying a child's strengths immediately, we can seamlessly tailor our curriculum. We catch developmental milestones early, ensuring every child starts on their perfect developmental footing.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-xl hover:border-kidazzle-gold/30 transition-all group">
                <div class="w-16 h-16 bg-kidazzle-yellowLight text-kidazzle-gold rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 group-hover:-rotate-3 transition-transform">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3 class="font-bold text-xl text-brand-ink mb-4">In-Depth Skill Sequences</h3>
                <p class="text-brand-ink/70 leading-relaxed">
                    We track granular, step-by-step progress. Instead of broad generic grades, the BRIGANCE framework allows our educators to plot a specific, achievable roadmap for your child's cognitive and physical growth.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-xl hover:border-kidazzle-red/30 transition-all group">
                <div class="w-16 h-16 bg-kidazzle-redLight text-kidazzle-red rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-people-roof"></i>
                </div>
                <h3 class="font-bold text-xl text-brand-ink mb-4">Family Collaboration</h3>
                <p class="text-brand-ink/70 leading-relaxed">
                    We love sharing good news! BRIGANCE creates easily digestible insights and reports that we share directly with our families, keeping you intimately involved in your child’s brilliant beginnings.
                </p>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="max-w-5xl mx-auto px-4 lg:px-6">
        <div class="bg-brand-ink rounded-[3rem] p-12 md:p-16 text-center relative overflow-hidden shadow-2xl">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-kidazzle-red/20 rounded-full blur-3xl"></div>
            
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-6">Ready to see our curriculum in action?</h2>
                <p class="text-white/70 text-lg max-w-2xl mx-auto mb-10">
                    Come tour one of our 8 authorized campuses and see how our educators implement the BRIGANCE assessment tools firsthand.
                </p>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="booking-btn inline-flex px-10 py-5 bg-kidazzle-gold text-brand-ink font-extrabold rounded-full uppercase tracking-[0.2em] text-sm hover:scale-105 transition-transform shadow-xl">
                    Book Your Tour
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
