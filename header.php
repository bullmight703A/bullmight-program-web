<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php // Canonical URL is handled by Yoast SEO or framework canonical enforcer ?>
	<!-- Google Fonts: Inter and Playfair Display for WIMPER -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
		rel="stylesheet">

	<!-- FontAwesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	<!-- Tailwind CSS CDN with Config -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						navy: '#0A192F',
						gold: '#F7E7CE',
						brand: '#2563EB',
					},
					fontFamily: {
						serif: ['Playfair Display', 'serif'],
						sans: ['Inter', 'sans-serif'],
					}
				}
			}
		}
	</script>

	<!-- Tier 3: Instant Navigation (Speculation Rules API) -->
	<script type="speculationrules">
	{
		"prerender": [
			{
				"source": "document",
				"where": {
					"and": [
						{ "href_matches": "/*" },
						{ "not": { "href_matches": "/wp-admin/*" } }
					]
				},
				"eagerness": "moderate"
			}
		]
	}
	</script>

	<?php
	// Get Customizer settings
	$header_phone = get_theme_mod('kidazzle_footer_phone', '1 678-940-6099'); // Updated branding phone
	$header_cta_text = get_theme_mod('kidazzle_header_cta_text', 'Verify Eligibility');
	$header_cta_url = get_theme_mod('kidazzle_book_tour_url', home_url('/contact'));
	$header_scripts = get_theme_mod('kidazzle_header_scripts', '');

	// Output header scripts if set
	if (!empty($header_scripts)) {
		echo $header_scripts;
	}

	wp_head();
	?>
	
	<!-- Blue Branded WP Favicon -->
	<link rel="icon" type="image/svg+xml" href="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%232563EB'/><text x='50%' y='50%' font-family='sans-serif' font-weight='800' font-size='50' fill='white' dominant-baseline='central' text-anchor='middle'>WP</text></svg>">

	<!-- SPA Visibility Styles -->
	<style>
		.page-view { display: none; opacity: 0; transition: opacity 0.3s ease; }
		.page-view.active { display: block; opacity: 1; }
	</style>
</head>


<body <?php body_class('font-sans antialiased bg-slate-50 flex flex-col min-h-screen'); ?>>
	<?php wp_body_open(); ?>

	<!-- Skip Links for Accessibility -->
	<a href="#main-content"
		class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:bg-white focus:text-navy focus:p-4 focus:z-[100] focus:rounded-lg focus:shadow-lg focus:outline-none focus:ring-2 focus:ring-gold transition-all"><?php _e('Skip to main content', 'kidazzle-theme'); ?></a>

	<!-- NAVIGATION -->
    <nav class="sticky top-0 z-50 bg-blue-50/90 backdrop-blur-md border-b border-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2 cursor-pointer" onclick="window.location.href='<?php echo home_url('/'); ?>'">
                    <div class="w-10 h-10 bg-brand rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <span class="text-2xl font-extrabold text-brand tracking-tight">Wimper</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo home_url('/#logic'); ?>" onclick="navigateTo('logic'); return false;" class="text-sm font-semibold text-slate-600 hover:text-brand transition-colors">Tax Logic</a>
                    <a href="<?php echo home_url('/#savings'); ?>" onclick="navigateTo('savings'); return false;" class="text-sm font-semibold text-slate-600 hover:text-brand transition-colors">ROI Calculator</a>
                    <a href="<?php echo home_url('/#compliance'); ?>" onclick="navigateTo('compliance'); return false;" class="text-sm font-semibold text-slate-600 hover:text-brand transition-colors">Compliance</a>
                    <button onclick="openGlobalCalendar()" class="bg-brand text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-blue-900 transition-all shadow-md">Schedule ROI Analysis</button>
                </div>
				<!-- Mobile Menu Button -->
				<div class="md:hidden flex items-center">
					<button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="text-slate-600 focus:outline-none">
						<i class="fas fa-bars text-2xl"></i>
					</button>
				</div>
            </div>
        </div>
		
		<div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 absolute w-full left-0 top-20 shadow-lg">
			<div class="flex flex-col p-4 space-y-4">
				<a href="<?php echo home_url('/#logic'); ?>" onclick="document.getElementById('mobile-menu').classList.add('hidden'); navigateTo('logic'); return false;" class="text-slate-800 font-semibold">Tax Logic</a>
				<a href="<?php echo home_url('/#savings'); ?>" onclick="document.getElementById('mobile-menu').classList.add('hidden'); navigateTo('savings'); return false;" class="text-slate-800 font-semibold">ROI Calculator</a>
				<a href="<?php echo home_url('/#compliance'); ?>" onclick="document.getElementById('mobile-menu').classList.add('hidden'); navigateTo('compliance'); return false;" class="text-slate-800 font-semibold">Compliance</a>
				<button onclick="document.getElementById('mobile-menu').classList.add('hidden'); openGlobalCalendar();" class="text-brand font-bold text-left">Schedule ROI Analysis</button>
			</div>
		</div>
    </nav>


	<!-- MAIN CONTENT WRAPPER -->
	<main class="min-h-screen">
		<script>
			// SPA ROUTING LOGIC
			function navigateTo(pageId) {
				// If we are on front page, toggle visibility
				const pages = document.querySelectorAll('.page-view');
				if (pages.length > 0) {
					// Update View
					pages.forEach(el => el.classList.remove('active'));
					const targetPage = document.getElementById(pageId);
					if (targetPage) targetPage.classList.add('active');

					// Update Nav State
					document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));
					const activeLink = document.getElementById('nav-' + pageId);
					if (activeLink) activeLink.classList.add('active');

					// Update URL Hash without jumping
					history.pushState(null, null, '#' + (pageId === 'home' ? '' : pageId));

					// Scroll Top
					window.scrollTo({ top: 0, behavior: 'smooth' });

					// Close Mobile Menu if open
					const mobileMenu = document.getElementById('mobile-menu');
					if (mobileMenu) mobileMenu.classList.add('hidden');
				} else {
					// Fallback for non-SPA pages: redirect to home with hash
					window.location.href = '<?php echo home_url('/'); ?>#' + pageId;
				}
			}

			// Handle initial hash on page load
			window.addEventListener('DOMContentLoaded', () => {
				const hash = window.location.hash.replace('#', '');
				if (hash && document.getElementById(hash)) {
					navigateTo(hash);
				}
			});

			function scrollToId(elementId) {
				const element = document.getElementById(elementId);
				if (element) element.scrollIntoView({ behavior: 'smooth' });
			}
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const menuBtn = document.getElementById('mobile-menu-btn');
				const closeBtn = document.getElementById('close-menu-btn');
				const mobileMenu = document.getElementById('mobile-menu');

				if (menuBtn && mobileMenu) {
					menuBtn.addEventListener('click', () => {
						mobileMenu.classList.remove('hidden');
					});
				}
				if (closeBtn && mobileMenu) {
					closeBtn.addEventListener('click', () => {
						mobileMenu.classList.add('hidden');
					});
				}
			});
		</script>